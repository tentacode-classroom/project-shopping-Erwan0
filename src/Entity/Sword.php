<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\BoatRepository")
 */
class Sword
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    /**
     * @ORM\Column(type="text")
     */
    private $picture;
    /**
     * @ORM\Column(type="integer", length=15)
     */
    private $price;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NbViews;
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="boats")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getPicture(): ?string
    {
        return $this->picture;
    }
    public function setPicture(string $picture): self
    {
        $this->picture = $picture;
        return $this;
    }
    public function getPrice(): ?int
    {
        return $this->price;
    }
    public function setPrice(int $price): self
    {
        $this->price = $price;
        return $this;
    }
    public function getNbViews(): ?int
    {
        return $this->NbViews;
    }
    public function setNbViews(int $NbViews): self
    {
        $this->NbViews = $NbViews;
        return $this;
    }
    public function incrementViews() {
        $this->NbViews++;
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
}