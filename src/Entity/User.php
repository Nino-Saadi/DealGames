<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name_user;

    #[ORM\Column(type: 'string', length: 255)]
    private $mp_user;

    #[ORM\Column(type: 'string', length: 255)]
    private $mail_user;

    #[ORM\Column(type: 'datetime')]
    private $date_user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameUser(): ?string
    {
        return $this->name_user;
    }

    public function setNameUser(string $name_user): self
    {
        $this->name_user = $name_user;

        return $this;
    }

    public function getMpUser(): ?string
    {
        return $this->mp_user;
    }

    public function setMpUser(string $mp_user): self
    {
        $this->mp_user = $mp_user;

        return $this;
    }

    public function getMailUser(): ?string
    {
        return $this->mail_user;
    }

    public function setMailUser(string $mail_user): self
    {
        $this->mail_user = $mail_user;

        return $this;
    }

    public function getDateUser(): ?\DateTimeInterface
    {
        return $this->date_user;
    }

    public function setDateUser(\DateTimeInterface $date_user): self
    {
        $this->date_user = $date_user;

        return $this;
    }
}
