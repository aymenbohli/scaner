<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
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
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Answer", mappedBy="question")
     */
    private $question_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="questions")
     */
    private $category;

    public function __construct()
    {
/*        $this->question_id = new ArrayCollection();
        $this->category = new ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();*/

    }

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

    /**
     * @return Collection|Answer[]
     */
    public function getQuestionId(): Collection
    {
        return $this->question_id;
    }

    public function addQuestionId(Answer $questionId): self
    {
        if (!$this->question_id->contains($questionId)) {
            $this->question_id[] = $questionId;
            $questionId->setQuestion($this);
        }

        return $this;
    }

    public function removeQuestionId(Answer $questionId): self
    {
        if ($this->question_id->contains($questionId)) {
            $this->question_id->removeElement($questionId);
            // set the owning side to null (unless already changed)
            if ($questionId->getQuestion() === $this) {
                $questionId->setQuestion(null);
            }
        }

        return $this;
    }

    public function getQuestion(): ?Question
    {
        return $this->question;
    }

    public function setQuestion(?Question $question): self
    {
        $this->question = $question;

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


}
