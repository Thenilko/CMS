<?php

namespace App\Tools\StaticSiteGenerator;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;

class StaticSiteGeneratorFactory
{
    private $map = [
        'MenuGenerator' => MenuGenerator::class,
        'PagesGenerator' => PagesGenerator::class
    ];

    private EntityManagerInterface $entityManager;
    private $container;
    private Filesystem $filesystem;

    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->container = $container;
        $this->filesystem = $filesystem;
    }

    public function createGenerator($generatorType)
    {

        if (isset($this->map[$generatorType])) {
            $className = $this->map[$generatorType];
            return new $className($this->entityManager, $this->container, $this->filesystem);
        }

        throw new \Exception('The requested generator does not exist: ' . $generatorType);
    }
}