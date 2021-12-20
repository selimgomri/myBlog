<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixures extends Fixture
{
    public const CATEGORY_DUMP ='CATEGORY_DUMP';

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $category = new Category();
            $category->setName("category$i");
            $this->setReference(self::CATEGORY_DUMP . $i, $category);
            $manager->persist($category);
        }

        $manager->flush();
    }
}
