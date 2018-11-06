<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Annonce;
use App\Entity\Categorie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AnnonceFixtureure extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $facker=Factory::create("fr_FR");
        // création catégorie
        for ($i=0; $i <=3; $i++) { 
           $categorie=new Categorie();
           $categorie->setLibelle($facker->sentence($nbWords = 4,$variableNbWords = true));
           $manager->persist($categorie);

           // création annonces 
           for ($j=0; $j <=mt_rand(5,10) ; $j++) { 
               $annonce=new Annonce();
               $annonce->setTitre($facker->sentence($nbWords = 4,$variableNbWords = true))
                        ->setDescription($facker->paragraph($nbSentences=3,$variableNbSentences=true))
                        ->setPrix(mt_rand(10,140))
                        ->setImage($facker->imageUrl($width=300,$height=200))
                        ->setCategorie($categorie);
                $manager->persist($annonce);
           }
        }
        // $manager->persist($product);

        $manager->flush();
    }
}
