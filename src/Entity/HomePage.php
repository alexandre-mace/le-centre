<?php

namespace App\Entity;

use App\Repository\HomePageRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=HomePageRepository::class)
 * @Vich\Uploadable
 */
class HomePage
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $openInfo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondSectionImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="secondSectionImage")
     * @var File
     */
    private $secondSectionImageFile;

    /**
     * @ORM\ManyToOne(targetEntity=Exposition::class, inversedBy="currentExpositionHomepages")
     */
    private $currentExposition;

    /**
     * @ORM\ManyToOne(targetEntity=Exposition::class, inversedBy="artistExpositionHomePages")
     */
    private $artistExposition;

    /**
     * @ORM\ManyToOne(targetEntity=Exposition::class, inversedBy="homePagesArtistExposition2")
     */
    private $artistExposition2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpenInfo(): ?string
    {
        return $this->openInfo;
    }

    public function setOpenInfo(string $openInfo): self
    {
        $this->openInfo = $openInfo;

        return $this;
    }

    public function getSecondSectionImage(): ?string
    {
        return $this->secondSectionImage;
    }

    public function setSecondSectionImage(string $secondSectionImage): self
    {
        $this->secondSectionImage = $secondSectionImage;

        return $this;
    }

    /**
     * @return File
     */
    public function getSecondSectionImageFile()
    {
        return $this->secondSectionImageFile;
    }

    /**
     * @param File $secondSectionImageFile
     */
    public function setSecondSectionImageFile($secondSectionImageFile)
    {
        $this->secondSectionImageFile = $secondSectionImageFile;
    }

    public function getCurrentExposition(): ?Exposition
    {
        return $this->currentExposition;
    }

    public function setCurrentExposition(?Exposition $currentExposition): self
    {
        $this->currentExposition = $currentExposition;

        return $this;
    }

    public function getArtistExposition(): ?Exposition
    {
        return $this->artistExposition;
    }

    public function setArtistExposition(?Exposition $artistExposition): self
    {
        $this->artistExposition = $artistExposition;

        return $this;
    }

    public function getArtistExposition2(): ?Exposition
    {
        return $this->artistExposition2;
    }

    public function setArtistExposition2(?Exposition $artistExposition2): self
    {
        $this->artistExposition2 = $artistExposition2;

        return $this;
    }
}
