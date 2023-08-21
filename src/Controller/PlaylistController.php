<?php

namespace App\Controller;

use DateTime;
use App\Entity\Playlist;
use App\Repository\PlaylistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PlaylistController extends AbstractController
{

    #[Route('playilst/{id}', name: 'app_playlist_show')]
    public function playlist_show(int $id, PlaylistRepository $PlaylistRepository): Response
    {
        //get current user infos
        $user = $this->getUser();

        $playlist = $PlaylistRepository->find($id);

        // dd($playlist);
        // die();

        return $this->render('playlist/show.html.twig', [
            'controller_name' => 'PlaylistController',
            'playlist' => $playlist
        ]);
    }


    #[Route('playlist/add', name: 'app_playlist_add')]
    public function playlist_add(EntityManagerInterface $entityManager, PlaylistRepository $PlaylistRepository): Response
    {
        //get current user infos
        $user = $this->getUser();

        //
        $playlist = new Playlist();
        $playlist->setPlaName('Ma nouvelle playlist');
        $playlist->setPlaCreationDate(new DateTime());
        $playlist->setIdxUser($user);

        $entityManager->persist($playlist);
        $entityManager->flush();

        //get lastID order
        $lastId = $playlist->getId();
        $playlistId = $PlaylistRepository->find($lastId);
        dump($lastId);
        dump($playlistId);

        // die();

        return $this->redirectToRoute('app_playlist_show', ['id' => $lastId]);

    }
}
