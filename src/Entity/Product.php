<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name_product;

    #[ORM\Column(type: 'integer')]
    private $price_product;

    #[ORM\Column(type: 'string', length: 255)]
    private $desc_product;

    #[ORM\Column(type: 'datetime')]
    private $date_product;

    #[ORM\Column(type: 'string', length: 255)]
    private $img_product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProduct(): ?string
    {
        return $this->name_product;
    }

    public function setNameProduct(string $name_product): self
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getPriceProduct(): ?int
    {
        return $this->price_product;
    }

    public function setPriceProduct(int $price_product): self
    {
        $this->price_product = $price_product;

        return $this;
    }

    public function getDescProduct(): ?string
    {
        return $this->desc_product;
    }

    public function setDescProduct(string $desc_product): self
    {
        $this->desc_product = $desc_product;

        return $this;
    }

    public function getDateProduct(): ?\DateTimeInterface
    {
        return $this->date_product;
    }

    public function setDateProduct(\DateTimeInterface $date_product): self
    {
        $this->date_product = $date_product;

        return $this;
    }

    public function getImgProduct(): ?string
    {
        return $this->img_product;
    }

    public function setImgProduct(string $img_product): self
    {
        $this->img_product = $img_product;

        return $this;
    }
}
