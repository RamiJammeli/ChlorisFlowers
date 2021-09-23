<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Sluggable\Util\Urlizer;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
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
    private $prodcutName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $boxSize;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $boxColor;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roseNumber;

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
     * @ORM\Column(type="string", length=255)
     */
    private $roseColor;

    /**
     * @ORM\Column(type="string", length=255, options={"default":"Valide"})
     */
    private $status;

    /**
     * @ORM\OneToMany(targetEntity=LigneCommande::class, mappedBy="$ligneCommande")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ligneCommande;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $categorie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageRoseNumber;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageCategorie;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $macronNumber;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hautImage;

    /**
     * @ORM\Column(type="text", length=65535, nullable=true)
     */
    private $descriptionBox;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $stock;





    public function getId(): ?int
    {
        return $this->id;
    }


    public function getProdcutName(): ?string
    {
        return $this->prodcutName;
    }

    public function setProdcutName(string $prodcutName): self
    {
        $this->prodcutName = $prodcutName;

        return $this;
    }

    public function getBoxSize(): ?string
    {
        return $this->boxSize;
    }

    public function setBoxSize(string $boxSize): self
    {
        $this->boxSize = $boxSize;

        return $this;
    }

    public function getBoxColor(): ?string
    {
        return $this->boxColor;
    }

    public function setBoxColor(string $boxColor): self
    {
        $this->boxColor = $boxColor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getRoseNumber()
    {
        return $this->roseNumber;
    }

    /**
     * @param mixed $roseNumber
     */
    public function setRoseNumber($roseNumber): void
    {
        $this->roseNumber = $roseNumber;
    }



    public function getRoseColor(): ?string
    {
        return $this->roseColor;
    }

    public function setRoseColor(string $roseColor): self
    {
        $this->roseColor = $roseColor;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLigneCommande()
    {
        return $this->ligneCommande;
    }

    /**
     * @param mixed $ligneCommande
     */
    public function setLigneCommande($ligneCommande): void
    {
        $this->ligneCommande = $ligneCommande;
    }


    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImageRoseNumber(): ?string
    {
        return $this->imageRoseNumber;
    }

    public function setImageRoseNumber(string $imageRoseNumber): self
    {
        $this->imageRoseNumber = $imageRoseNumber;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getImageCategorie(): ?string
    {
        return $this->imageCategorie;
    }

    public function setImageCategorie(string $imageCategorie): self
    {
        $this->imageCategorie = $imageCategorie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMacronNumber()
    {
        return $this->macronNumber;
    }

    /**
     * @param mixed $macronNumber
     */
    public function setMacronNumber($macronNumber): void
    {
        $this->macronNumber = $macronNumber;
    }



    public function getHautImage(): ?string
    {
        return $this->hautImage;
    }

    public function setHautImage(?string $hautImage): self
    {
        $this->hautImage = $hautImage;

        return $this;
    }

    public function getDescriptionBox(): ?string
    {
        return $this->descriptionBox;
    }

    public function setDescriptionBox(?string $descriptionBox): self
    {
        $this->descriptionBox = $descriptionBox;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(?int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function setImagesAccordingToSwitch($product){

        switch ($product->getCategorie()) {
            case "the marble collection":
                $product->setImageCategorie("CollectionMarbre.jpeg");
                break;
            case "the bird collection":
                $product->setImageCategorie("BB.jpg");
                break;
            case "the classic collection":
                $product->setImageCategorie("CLASSIC.jpg");
                break;
            case "The Blooming Bride":
                $product->setImageCategorie("JETEE.jpg");
                break;
        }

        switch ($product->getRoseColor()) {
            case "Blanche":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/p/a/parisian_grey_3.svg");
                break;
            case "Champagne":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/2/4/24_2_1.svg");
                break;
            case "Gypsophile":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/p/a/pastelle_peach.svg");
                break;
            case "Rose":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/1/5/15_1.svg");
                break;
            case "Rouge":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/2/1/21_2_1.svg");
                break;
            case "Rose Bicolore":
                $product->setImageRoseNumber("https://www.fleursdeparis.fr/media/catalog/product/1/7/17_1_1.svg");
                break;
        }


    }

    public function uploadImageProduct($uploadedFile,$destination){

        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFilename = Urlizer::urlize($originalFilename).'-'.uniqid().'.'.$uploadedFile->guessExtension();
        $uploadedFile->move(
            $destination,
            $newFilename
        );
        return $newFilename;

    }





}