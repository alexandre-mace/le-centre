<?php

namespace App\Entity;

use App\Repository\ExpositionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=ExpositionRepository::class)
 * @Vich\Uploadable
 */
class Exposition
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
    private $bannerImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="bannerImage")
     * @var File
     */
    private $bannerImageFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tinyImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="tinyImage")
     * @var File
     */
    private $tinyImageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $shortDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thematique;

    /**
     * @ORM\Column(type="datetime")
     */
    private $startAt;

    /**
     * @ORM\Column(type="datetime")
     */
    private $endAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $artistName;

    /**
     * @ORM\Column(type="text")
     */
    private $longDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $artistPortrait;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $artistPhoto;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="artistPhoto")
     * @var File
     */
    private $artistPhotoFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstImageDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondImageDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBannerImage(): ?string
    {
        return $this->bannerImage;
    }

    public function setBannerImage(string $bannerImage): self
    {
        $this->bannerImage = $bannerImage;

        return $this;
    }

    public function getTinyImage(): ?string
    {
        return $this->tinyImage;
    }

    public function setTinyImage(string $tinyImage): self
    {
        $this->tinyImage = $tinyImage;

        return $this;
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

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): self
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    public function getThematique(): ?string
    {
        return $this->thematique;
    }

    public function setThematique(string $thematique): self
    {
        $this->thematique = $thematique;

        return $this;
    }

    public function getStartAt(): ?\DateTimeInterface
    {
        return $this->startAt;
    }

    public function setStartAt(\DateTimeInterface $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function getEndAt(): ?\DateTimeInterface
    {
        return $this->endAt;
    }

    public function setEndAt(\DateTimeInterface $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function getArtistName(): ?string
    {
        return $this->artistName;
    }

    public function setArtistName(string $artistName): self
    {
        $this->artistName = $artistName;

        return $this;
    }

    public function getLongDescription(): ?string
    {
        return $this->longDescription;
    }

    public function setLongDescription(string $longDescription): self
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    public function getArtistPortrait(): ?string
    {
        return $this->artistPortrait;
    }

    public function setArtistPortrait(string $artistPortrait): self
    {
        $this->artistPortrait = $artistPortrait;

        return $this;
    }

    public function getArtistPhoto(): ?string
    {
        return $this->artistPhoto;
    }

    public function setArtistPhoto(string $artistPhoto): self
    {
        $this->artistPhoto = $artistPhoto;

        return $this;
    }

    public function getFirstImageDescription(): ?string
    {
        return $this->firstImageDescription;
    }

    public function setFirstImageDescription(string $firstImageDescription): self
    {
        $this->firstImageDescription = $firstImageDescription;

        return $this;
    }

    public function getSecondImageDescription(): ?string
    {
        return $this->secondImageDescription;
    }

    public function setSecondImageDescription(string $secondImageDescription): self
    {
        $this->secondImageDescription = $secondImageDescription;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return File
     */
    public function getBannerImageFile()
    {
        return $this->bannerImageFile;
    }

    /**
     * @param File $bannerImageFile
     */
    public function setBannerImageFile($bannerImageFile)
    {
        $this->bannerImageFile = $bannerImageFile;
    }

    /**
     * @return File
     */
    public function getTinyImageFile()
    {
        return $this->tinyImageFile;
    }

    /**
     * @param File $tinyImageFile
     */
    public function setTinyImageFile($tinyImageFile)
    {
        $this->tinyImageFile = $tinyImageFile;
    }

    /**
     * @return File
     */
    public function getArtistPhotoFile()
    {
        return $this->artistPhotoFile;
    }

    /**
     * @param File $artistPhotoFile
     */
    public function setArtistPhotoFile($artistPhotoFile)
    {
        $this->artistPhotoFile = $artistPhotoFile;
    }
}
