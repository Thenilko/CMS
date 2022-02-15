<?php

namespace App\Command;

use App\Tools\StaticSiteGenerator\StaticSiteGeneratorFactory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

final class StaticSiteGeneratorCommand extends Command
{

    private EntityManagerInterface $entityManager;
    private ContainerInterface $container;
    private Filesystem $filesystem;

    /**
     * @param EntityManagerInterface $entityManager
     * @param ContainerInterface $container
     * @param Filesystem $filesystem
     */
    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container, Filesystem $filesystem)
    {
        parent::__construct();

        $this->entityManager = $entityManager;
        $this->container = $container;
        $this->filesystem = $filesystem;
    }

    protected function configure()
    {
        $this
            ->setName('generate:static-site')
            ->setDescription('Generating static site')
        ;
    }


    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // build the generator.
        $ssg = new StaticSiteGeneratorFactory($this->entityManager, $this->container, $this->filesystem);

        // try to generate the pages.
        try {
            $generator = $ssg->createGenerator('PagesGenerator');
            $generator->generateContent();
        } catch (\Exception $e) {
            $output->writeln("Error" . $e->getMessage());
        }

        $output->writeln('Done! The site is generated!');

        // define the working directory path.
        $cwd = $this->container->getParameter('kernel.project_dir') . '/public/Static';

        $process = new Process(['./script.sh']);
        $process->setWorkingDirectory($cwd);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $output->writeln($process->getOutput());
    }
}