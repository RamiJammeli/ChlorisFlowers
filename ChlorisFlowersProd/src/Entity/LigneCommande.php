<?php

namespace App\Entity;

use App\Repository\LigneCommandeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LigneCommandeRepository::class)
 */
class LigneCommande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class,inversedBy="id")
     */
    private $idProduit;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantite;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class,inversedBy="id")
     */
    private $idOrder;


    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $litteRose;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $card;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $messageCard;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $couvercle;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $messageCouvercle;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $suprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nameR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastNameR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressR;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneNumverR;
    /**
     * @ORM\Column(type="date")
     */
    private $shipdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeLivraison;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentaire;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @return mixed
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }



    /**
     * @param mixed $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }
    public function removeIdProduit(Product $idProduit): self
    {
        if ($this->idProduit->contains($idProduit)) {
            $this->idProduit->removeElement($idProduit);
            // set the owning side to null (unless already changed)

        }

        return $this;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }





    /**
     * @param mixed $idOrder
     */
    public function setIdOrder($idOrder)
    {
        $this->idOrder = $idOrder;
    }

    public function removeIdOrder(Commande $idOrder): self
    {
        if ($this->idOrder->contains($idOrder)) {
            $this->idOrder->removeElement($idOrder);
            // set the owning side to null (unless already changed)
            if ($idOrder->getLigneCommande() === $this) {
                $idOrder->setLigneCommande(null);
            }
        }

        return $this;
    }
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $macaronPersonnalise;

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
    public function getLitteRose()
    {
        return $this->litteRose;
    }

    /**
     * @param mixed $litteRose
     */
    public function setLitteRose($litteRose): void
    {
        $this->litteRose = $litteRose;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param mixed $card
     */
    public function setCard($card): void
    {
        $this->card = $card;
    }


    /**
     * @return mixed
     */
    public function getMessageCard()
    {
        return $this->messageCard;
    }

    /**
     * @param mixed $messageCard
     */
    public function setMessageCard($messageCard): void
    {
        $this->messageCard = $messageCard;
    }

    /**
     * @return mixed
     */
    public function getCouvercle()
    {
        return $this->couvercle;
    }

    /**
     * @param mixed $couvercle
     */
    public function setCouvercle($couvercle): void
    {
        $this->couvercle = $couvercle;
    }

    /**
     * @return mixed
     */
    public function getMessageCouvercle()
    {
        return $this->messageCouvercle;
    }

    /**
     * @param mixed $messageCouvercle
     */
    public function setMessageCouvercle($messageCouvercle): void
    {
        $this->messageCouvercle = $messageCouvercle;
    }

    /**
     * @return mixed
     */
    public function getSuprise()
    {
        return $this->suprise;
    }

    /**
     * @param mixed $suprise
     */
    public function setSuprise($suprise): void
    {
        $this->suprise = $suprise;
    }

    /**
     * @return mixed
     */
    public function getNameR()
    {
        return $this->nameR;
    }

    /**
     * @param mixed $nameR
     */
    public function setNameR($nameR): void
    {
        $this->nameR = $nameR;
    }

    /**
     * @return mixed
     */
    public function getLastNameR()
    {
        return $this->lastNameR;
    }

    /**
     * @param mixed $lastNameR
     */
    public function setLastNameR($lastNameR): void
    {
        $this->lastNameR = $lastNameR;
    }

    /**
     * @return mixed
     */
    public function getAdressR()
    {
        return $this->adressR;
    }

    /**
     * @param mixed $adressR
     */
    public function setAdressR($adressR): void
    {
        $this->adressR = $adressR;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumverR()
    {
        return $this->phoneNumverR;
    }

    /**
     * @param mixed $phoneNumverR
     */
    public function setPhoneNumverR($phoneNumverR): void
    {
        $this->phoneNumverR = $phoneNumverR;
    }

    /**
     * @return mixed
     */
    public function getShipdate()
    {
        return $this->shipdate;
    }

    /**
     * @param mixed $shipdate
     */
    public function setShipdate($shipdate): void
    {
        $this->shipdate = $shipdate;
    }

    public function getTypeLivraison(): ?string
    {
        return $this->typeLivraison;
    }

    public function setTypeLivraison(string $typeLivraison): self
    {
        $this->typeLivraison = $typeLivraison;

        return $this;
    }
    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getMacaronPersonnalise()
    {
        return $this->macaronPersonnalise;
    }

    public function setMacaronPersonnalise(?string $macaronPersonnalise): self
    {
        $this->macaronPersonnalise = $macaronPersonnalise;

        return $this;
    }

}
