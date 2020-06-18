<?php

namespace App\Entity;

use App\Repository\InstagramGalleryRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass=InstagramGalleryRepository::class)
 * @Vich\Uploadable
 */
class InstagramGallery
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
    private $firstImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="firstImage")
     * @var File
     */
    private $firstImageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $firstDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secondImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="secondImage")
     * @var File
     */
    private $secondImageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $secondDescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $thirdImage;

    /**
     * @Vich\UploadableField(mapping="images", fileNameProperty="thirdImage")
     * @var File
     */
    private $thirdImageFile;

    /**
     * @ORM\Column(type="text")
     */
    private $thirdDescription;

    /**
     * @ORM\Column(type="text")
     */
    private $longDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstImage(): ?string
    {
        return $this->firstImage;
    }

    public function setFirstImage(string $firstImage): self
    {
        $this->firstImage = $firstImage;

        return $this;
    }

    public function getFirstDescription(): ?string
    {
        return $this->firstDescription;
    }

    public function setFirstDescription(string $firstDescription): self
    {
        $this->firstDescription = $firstDescription;

        return $this;
    }

    public function getSecondImage(): ?string
    {
        return $this->secondImage;
    }

    public function setSecondImage(string $secondImage): self
    {
        $this->secondImage = $secondImage;

        return $this;
    }

    public function getSecondDescription(): ?string
    {
        return $this->secondDescription;
    }

    public function setSecondDescription(string $secondDescription): self
    {
        $this->secondDescription = $secondDescription;

        return $this;
    }

    public function getThirdImage(): ?string
    {
        return $this->thirdImage;
    }

    public function setThirdImage(string $thirdImage): self
    {
        $this->thirdImage = $thirdImage;

        return $this;
    }

    public function getThirdDescription(): ?string
    {
        return $this->thirdDescription;
    }

    public function setThirdDescription(string $thirdDescription): self
    {
        $this->thirdDescription = $thirdDescription;

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

    /**
     * @return File
     */
    public function getFirstImageFile()
    {
        return $this->firstImageFile;
    }

    /**
     * @param File $firstImageFile
     */
    public function setFirstImageFile($firstImageFile)
    {
        $this->firstImageFile = $firstImageFile;
    }

    /**
     * @return File
     */
    public function getSecondImageFile()
    {
        return $this->secondImageFile;
    }

    /**
     * @param File $secondImageFile
     */
    public function setSecondImageFile($secondImageFile)
    {
        $this->secondImageFile = $secondImageFile;
    }

    /**
     * @return File
     */
    public function getThirdImageFile()
    {
        return $this->thirdImageFile;
    }

    /**
     * @param File $thirdImageFile
     */
    public function setThirdImageFile($thirdImageFile)
    {
        $this->thirdImageFile = $thirdImageFile;
    }
}
