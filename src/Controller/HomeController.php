<?php

namespace App\Controller;

use App\Repository\PlaylistRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function redirection(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/home', name: 'app_home')]
    public function index(PlaylistRepository $PlaylistRepository): Response
    {   
        //get current user infos
        $user = $this->getUser();

        $userPlaylists = $PlaylistRepository->findBy(['idxUser' =>  $user]);

        // dd($userPlaylists);
        // die();

  

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'userPlaylists' => $userPlaylists
        ]);
    }
}
