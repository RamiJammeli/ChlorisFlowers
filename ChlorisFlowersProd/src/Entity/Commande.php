<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrderRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=LigneCommande::class, mappedBy="$ligneCommande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ligneCommande;

    /**
     * @ORM\Column(type="date")
     */
    private $orderDate;




    /**
     * @ORM\Column(type="float")
     */
    private $totalAchat;

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user", referencedColumnName="id", nullable=true)
     */
    private $user;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getTotalAchat()
    {
        return $this->totalAchat;
    }

    /**
     * @param mixed $totalAchat
     */
    public function setTotalAchat($totalAchat): void
    {
        $this->totalAchat = $totalAchat;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLigneCommande(): ?ligneCommande
    {
        return $this->ligneCommande;
    }

    public function setLigneCommande(?ligneCommande $ligneCommande): self
    {
        $this->ligneCommande = $ligneCommande;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->orderDate;
    }

    public function setOrderDate(\DateTimeInterface $orderDate): self
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }


}
