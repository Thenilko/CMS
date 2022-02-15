<?php

namespace App\Tools\StaticSiteGenerator;

use App\Entity\Menu;
use App\Entity\Page;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\Filesystem\Filesystem;

class MenuGenerator implements StaticSiteGeneratorInterface
{
    private EntityManagerInterface $entityManager;
    private EntityRepository $menuRepo;
    private $twig;
    private ContainerInterface $container;
    private Filesystem $filesystem;

    public function __construct(EntityManagerInterface $entityManager, ContainerInterface $container, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->menuRepo = $this->entityManager->getRepository(Menu::class);
        $this->twig = $container->get('twig');;
        $this->container = $container;
        $this->filesystem = $filesystem;
    }

    public function generateContent()
    {
        /** @var Menu $menu */
        $menu = $this->menuRepo->findOneBy(['title' => 'Main menu']);
        $pages = $menu->getPages();

        $data = [
            'pages' => $pages,
        ];
        $content = $this->twig->render('build/base/menu.html.twig', $data);
        if (!$this->filesystem->exists('Static/menu')) {
            $this->filesystem->mkdir('Static/menu');
        }

        file_put_contents('Static/menu/menu.html', $content);
    }
}