<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\OneToMany(targetEntity="App\Entity\Sword", mappedBy="category")
     */
    private $swords;
    public function __construct()
    {
        $this->swords = new ArrayCollection();
    }
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
    /**
     * @return Collection|Sword[]
     */
    public function getSwords(): Collection
    {
        return $this->swords;
    }
    public function addSword(Sword $sword): self
    {
        if (!$this->swords->contains($sword)) {
            $this->swords[] = $sword;
            $sword->setCategory($this);
        }
        return $this;
    }
    public function removeSword(Sword $sword): self
    {
        if ($this->swords->contains($sword)) {
            $this->swords->removeElement($sword);
            // set the owning side to null (unless already changed)
            if ($sword->getCategory() === $this) {
                $sword->setCategory(null);
            }
        }
        return $this;
    }
}