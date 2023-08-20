<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Adds;

use App\Entity\Have;
use App\Entity\Song;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Album;
use App\Entity\Contains;
use App\Entity\Playlist;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;

    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');

    }

    public function load(ObjectManager $manager): void
    {
        //admin user
        $admin = new User();
        $admin->setUseEmail('admin@spotify.ch')
                ->setRoles(['ROLE_USER', 'ROLE_ADMIN'])
                ->setUseRegistrationDate($this->faker->dateTimeThisMonth())
                ->setPassword('$2y$13$88EpDrWOBWc/SQAqZBBFzuypQHXSHC7eJCWF4IeceLVk37.ZWMJeq'); //12345678 
        $manager->persist($admin);

        //users
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
                $user->setUseEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setUseRegistrationDate($this->faker->dateTimeThisMonth())
                ->setPassword('$2y$13$88EpDrWOBWc/SQAqZBBFzuypQHXSHC7eJCWF4IeceLVk37.ZWMJeq'); //12345678 
            
            $users[] = $user;
            $manager->persist($user);
        }

        //playlists
        for ($i = 0; $i < 50; $i++) {
            $playlist = new Playlist();
                $playlist->setPlaName($this->faker->word())
                ->setPlaCreationDate($this->faker->dateTimeThisMonth())
                ->setPlaImage($this->faker->imageUrl(48, 48, 'playlist', true));
            
            $playlists[] = $playlist;
            $manager->persist($playlist);
        }

        //adds (associations between users and playlists)
        for ($i = 0; $i < 100; $i++) {
            $add = new Adds();
            
            // Randomly assign a user and playlist for this "add" entry
            $randomUser = $users[$this->faker->numberBetween(0, count($users) -1)];
            $randomPlaylist = $playlists[$this->faker->numberBetween(0, count($playlists) -1)];
            
            $add->setIdxUser($randomUser)
                ->setIdxPlaylist($randomPlaylist)
                ->setAddsAddedDate($this->faker->dateTimeThisMonth());
            
            $manager->persist($add);
        }

        //songs
        for ($i = 0; $i < 100; $i++) {
            $song = new Song();
                        
            $song->setSonName($this->faker->word())
                ->setSonDuration($this->faker->numberBetween(82, 196))
                ->setSonReleaseDate($this->faker->dateTimeThisDecade())
                ->setSonPlayCount($this->faker->numberBetween(3000, 2147483647));
                
            $songs[] = $song;
            $manager->persist($song);
        }

        //have (associations between users and songs)
        for ($i = 0; $i < 100; $i++) {
            $have = new Have();
            
            // Randomly assign a user and song for this "have" entry
            $randomUser = $users[$this->faker->numberBetween(0, count($users) -1)];
            $randomSong = $songs[$this->faker->numberBetween(0, count($songs) -1)];
            
            $have->setIdxUser($randomUser)
                  ->setIdxSong($randomSong);
            
            $manager->persist($have);
        }

        //album
        for ($i = 0; $i < 10; $i++) {
            $album = new Album();
                        
            $album->setAlbName($this->faker->word())
                ->setAlbReleaseDate($this->faker->dateTimeThisDecade());

                 // Randomly assign a user to this album
                $randomUser = $users[$this->faker->numberBetween(0, count($users) -1)];
                $album->setIdxUser($randomUser);
                
            $albums[] = $album;
            $manager->persist($album);
        }

        // contains (associations between albums and songs)
        for ($i = 0; $i < 100; $i++) {
            $contains = new Contains();
            
            // Randomly assign an album and a song for this "contains" entry
            $randomAlbum = $albums[$this->faker->numberBetween(0, count($albums) - 1)];
            $randomSong = $songs[$this->faker->numberBetween(0, count($songs) - 1)];
            
            $contains->setIdxAlbum($randomAlbum)
                ->setIdxSong($randomSong);
            
            $manager->persist($contains);
        }
    
        $manager->flush();
    }
}
