<?php

namespace App\DataFixtures;

use App\Entity\Classes;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ClassesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $product = new Classes();
        $product->setTitre('Priceless widget!');
        $manager->persist($product);

        $manager->flush();
    }
}
