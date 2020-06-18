<?php

namespace App\Controller;

use App\Repository\HomePageRepository;
use App\Repository\InstagramGalleryRepository;
use App\Repository\MediaSectionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(
        HomePageRepository $homePageRepository,
        InstagramGalleryRepository $instagramGalleryRepository,
        MediaSectionRepository $mediaSectionRepository
    )
    {
        $homePage = $homePageRepository->findAll() ? $homePageRepository->findAll()[0] : null;
        $instagramGallery = $instagramGalleryRepository->findAll() ? $instagramGalleryRepository->findAll()[0] : null;
        $mediaSection = $mediaSectionRepository->findAll() ? $mediaSectionRepository->findAll()[0] : null;
        return $this->render('home/index.html.twig', [
            'homePage' => $homePage,
            'instagramGallery' => $instagramGallery,
            'mediaSection' => $mediaSection,
        ]);
    }
}
