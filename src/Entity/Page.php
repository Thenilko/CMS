<?php

namespace App\Entity;

use App\Repository\PageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="array")
     */
    private $metadata;

    /**
     * @ORM\Column(type="text")
     */
    private $body;

    /**
     * @ORM\ManyToOne(targetEntity=Menu::class, inversedBy="pages")
     */
    private $menu;

    /**
     * @ORM\Column(type="integer", nullable="true")
     */
    private $menuOrder;

    /**
     * @ORM\Column(type="boolean", nullable="true")
     */
    private $isHomePage;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return array | null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata(array $metadata): void
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    public function getMenu(): ?Menu
    {
        return $this->menu;
    }

    public function setMenu(?Menu $menu): self
    {
        $this->menu = $menu;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMenuOrder()
    {
        return $this->menuOrder;
    }

    /**
     * @param mixed $menuOrder
     */
    public function setMenuOrder($menuOrder): void
    {
        $this->menuOrder = $menuOrder;
    }

    /**
     * @return mixed
     */
    public function isHomePage()
    {
        return $this->isHomePage;
    }

    /**
     * @param mixed $isHomePage
     */
    public function setIsHomePage($isHomePage): void
    {
        $this->isHomePage = $isHomePage;
    }


}
