<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 10; $i++) {
            $article = new Article();
            $article->setTitle("Article$i");
            $article->setCategory($this->getReference(CategoryFixures::CATEGORY_DUMP . $i));
            $article->setContent("text$i");
            $article->setCover('https://picsum.photos/300/400');
            $manager->persist($article);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixures::class
        ];
    }
}
