<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticleRepository::class)
 */
class Article
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
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity=SubCategory::class, inversedBy="Article")
     * @ORM\JoinColumn(nullable=false)
     */
    private $subCategories;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text")
     */
    private $Content2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Content3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Content4;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Content5;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $title5;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getSubCategories(): ?SubCategory
    {
        return $this->subCategories;
    }

    public function setSubCategories(?SubCategory $subCategories): self
    {
        $this->subCategories = $subCategories;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getContent2(): ?string
    {
        return $this->Content2;
    }

    public function setContent2(string $Content2): self
    {
        $this->Content2 = $Content2;

        return $this;
    }

    public function getContent3(): ?string
    {
        return $this->Content3;
    }

    public function setContent3(?string $Content3): self
    {
        $this->Content3 = $Content3;

        return $this;
    }

    public function getContent4(): ?string
    {
        return $this->Content4;
    }

    public function setContent4(?string $Content4): self
    {
        $this->Content4 = $Content4;

        return $this;
    }

    public function getContent5(): ?string
    {
        return $this->Content5;
    }

    public function setContent5(?string $Content5): self
    {
        $this->Content5 = $Content5;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(?string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getImage4(): ?string
    {
        return $this->image4;
    }

    public function setImage4(?string $image4): self
    {
        $this->image4 = $image4;

        return $this;
    }

    public function getTitle2(): ?string
    {
        return $this->title2;
    }

    public function setTitle2(?string $title2): self
    {
        $this->title2 = $title2;

        return $this;
    }

    public function getTitle3(): ?string
    {
        return $this->title3;
    }

    public function setTitle3(?string $title3): self
    {
        $this->title3 = $title3;

        return $this;
    }

    public function getTitle4(): ?string
    {
        return $this->title4;
    }

    public function setTitle4(?string $title4): self
    {
        $this->title4 = $title4;

        return $this;
    }

    public function getTitle5(): ?string
    {
        return $this->title5;
    }

    public function setTitle5(?string $title5): self
    {
        $this->title5 = $title5;

        return $this;
    }
}
