<?php

namespace App\DataFixtures;

use App\Entity\Dict;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Psr\Log\LoggerInterface;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
        

        for ($i = 0; $i < 200; $i++) {
            // usleep(1000);
            $dictionnary = new Dict();
            $size = rand(4,10);
            $response = file_get_contents('https://random-word-api.herokuapp.com/word?length='.$size.'&number=1');

            $response = json_decode($response);           
            
           
            $word = $response[0];
            $dictionnary->setWord($word);
            //$dictionnary->setSize($size);
            $dictionnary->setDate(new \DateTime());
            $dictionnary->setActive(true);
            $manager->persist($dictionnary);
        }

        $manager->flush();
    }
}
        

