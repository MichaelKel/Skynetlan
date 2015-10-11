<?php

namespace Skynet\ModelBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Skynet\ModelBundle\Entity\Post;
use Symfony\Component\Form\Tests\Fixtures\Author;

/**
 * Fixtures for the Posts entity
 */
class Posts extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 15;
    }

    /**
     * {@inheritDoc}
     */

    public function load(ObjectManager $manager)
    {
        $post1 = new Post();
        $post1->setTitle('Lorem ipsum dolor sit amet');
        $post1->setBody('Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eget facilisis felis.
        Phasellus at nibh quis tellus tincidunt sagittis. Morbi vulputate ac velit quis mollis. Fusce ut ex eu nisl volutpat dignissim. Donec justo erat, gravida ac interdum quis, finibus id ligula.
        Ut et lacinia lorem. Donec porta, massa vel gravida ornare, dui lorem sollicitudin quam, eget viverra quam magna ut enim.
        Mauris eget ante est. Nunc rhoncus neque vitae nunc scelerisque commodo. Etiam bibendum nunc at condimentum condimentum. Aliquam a rutrum lorem.');

        $post1->setAuthor($this->getAuthor($manager, 'Дима'));


        $post2 = new Post();
        $post2->setTitle('Praesent et mollis libero');
        $post2->setBody('Praesent et mollis libero.
        Quisque bibendum a magna eu varius.
        Fusce quis leo nec nunc vulputate mattis. Mauris at lacinia dolor.
        Quisque vehicula neque vel purus dapibus sollicitudin.
        Etiam volutpat rutrum elit in fermentum. Etiam eleifend pharetra blandit.
        Pellentesque posuere nisl id elementum dictum.
        Phasellus eget urna at elit molestie gravida. Proin quis feugiat libero.
        Quisque vestibulum vitae purus ut lacinia.');

        $post2->setAuthor($this->getAuthor($manager, 'Лелик'));

        $post3 = new Post();
        $post3->setTitle('Cras id arcu vel sapien venenatis pellentesque vitae in nisi');
        $post3->setBody('Cras id arcu vel sapien venenatis pellentesque vitae in nisi.
        Mauris condimentum mattis nisl sed volutpat. Nullam vel lorem iaculis, ornare nulla et, lobortis quam.
        Praesent ullamcorper sit amet neque sed egestas. Mauris mattis arcu in mauris volutpat, et posuere mi dictum.
        Integer at nibh nunc. Cras porta nulla quis magna laoreet, semper cursus ex varius. Curabitur est velit, convallis eu ex nec, tincidunt pretium dui.
        Maecenas mollis varius rhoncus.
        Quisque tincidunt imperdiet orci, at porta sem mattis non.');

        $post3->setAuthor($this->getAuthor($manager, 'Лелик'));

        $manager->persist($post1);
        $manager->persist($post2);
        $manager->persist($post3);


        $manager->flush();
    }
    
    /**
     * Get Author
     *
     * @param ObjectManager $manager
     * @param string                 $name
     *
     * @return Author
     */
    private function getAuthor(ObjectManager $manager, $name)
    {
       return $manager->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'name' => $name,
            ));
    }
}