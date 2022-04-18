<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
/**
 * @Vich\Uploadable
 */
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

    #[ORM\Column(type: 'date')]
    private $date_product;

    #[ORM\Column(type: 'string', length: 255)]
    private $img_product;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: 'products')]
    private $category;

    /**
     * @Vich\UploadableField(mapping="products",fileNameProperty="img_product")
     */
    private $imgFile;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $updated_at;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'products')]
    private $user;



    public function __toString()
    {
       return $this->getNameProduct();
    }

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

    public function setImgProduct(?string $img_product): self
    {
        $this->img_product = $img_product;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of imgFile
     */ 
    public function getImgFile()
    {
        return $this->imgFile;
    }

    /**
     * Set the value of imgFile
     *
     * @return  self
     */ 
    public function setImgFile($imgFile)
    {
        $this->imgFile = $imgFile;
        if (null !== $imgFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime();
        }
        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(?\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

}
