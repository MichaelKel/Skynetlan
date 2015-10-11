<?php

namespace Skynet\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Skynet\ModelBundle\Entity\Author;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Class Authors
 * Fixtures for the Author entity
 */
class Authors extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $author1 = new Author();
        $author1->setName('Дима');

        $author2 = new Author();
        $author2->setName('Лелик');

        $author3 = new Author();
        $author3->setName('Боря');

        $manager->persist($author1);
        $manager->persist($author2);
        $manager->persist($author3);

        $manager->flush();

    }
}