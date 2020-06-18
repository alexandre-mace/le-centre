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
}
