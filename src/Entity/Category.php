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
     * @ORM\OneToMany(targetEntity="App\Entity\Question", mappedBy="category")
     */
    private $questions;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Cours", mappedBy="category")
     */
    private $cours;


    public function __construct()
    {
        $this->category = new ArrayCollection();
        $this->questions = new ArrayCollection();
        $this->cours = new ArrayCollection();
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
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setCategory($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->contains($question)) {
            $this->questions->removeElement($question);
            // set the owning side to null (unless already changed)
            if ($question->getCategory() === $this) {
                $question->setCategory(null);
            }
        }

        return $this;
    }





    /**
     * @return Collection|Cours[]
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cours): self
    {
        if (!$this->cours->contains($cours)) {
            $this->cours[] = $question;
            $question->setCategory($this);
        }

        return $this;
    }

    public function removeCour(Cours $cours): self
    {
        if ($this->cour->contains($cours)) {
            $this->cour->removeElement($cours);
            // set the owning side to null (unless already changed)
            if ($cours->getCategory() === $this) {
                $cours->setCategory(null);
            }
        }

        return $this;
    }

}
