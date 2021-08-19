<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i <= 5; $i++) {
            $category = new Category();
            $category->setName("Category $i");
            $category->setDescription("Ok");
            $manager->persist($category);
        }

        $manager->flush();
    }
}
