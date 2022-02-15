<?php

namespace App\Tools\StaticSiteGenerator;

use App\Entity\Menu;
use App\Entity\Page;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;

class PagesGenerator implements StaticSiteGeneratorInterface
{
    private EntityManagerInterface $entityManager;
    private EntityRepository $pageRepo;
    private $twig;
    private $container;
    private Filesystem $filesystem;
    private $projectDir;

    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->pageRepo = $this->entityManager->getRepository(Page::class);
        $this->twig = $container->get('twig');;
        $this->container = $container;
        $this->projectDir = $container->get('kernel');
        $this->filesystem = $filesystem;
    }

    public function generateContent()
    {
        $pages = $this->pageRepo->findBy([], ['menuOrder' => 'ASC']);

        /** @var Page $page */
        foreach ($pages as $page) {
            $data = [
                'pages' => $pages,
                'pageTitle' => $page->getTitle(),
                'pageBody' => $page->getBody(),
                'metaData' => $page->getMetadata(),
            ];

            $content = $this->twig->render('build/pages/page.html.twig', $data);
            if ($page->isHomePage()) {
                file_put_contents('Static/index.html', $content);
            } else {
                if (!$this->filesystem->exists('Static/pages')) {
                    $this->filesystem->mkdir('Static/pages');
                }

                file_put_contents('Static/pages/page-'. $page->getId() .'.html', $content);
            }
           
        }
    }
}