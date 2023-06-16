<?php

namespace App\DataFixtures;

use App\Entity\Article;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;




class AppFixtures extends Fixture
{



    //inject user password


    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {

        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {

        //crete faker
        $faker = Factory::create();

        for($u=0;$u<5;$u++){
            //new user
            $user = new User();


            $passHash=$this->hasher->hashPassword($user,'password');

            $user->setEmail($faker->email)
                ->setPassword($passHash);

            $manager->persist($user);

            for($a=0;$a<5;$a++){

                $article =new Article();

                   $article ->setAuthor($user);

                    $article->setContent('article'.$a);

                    $article->setName('name'.$a);



                $manager->persist($article);


            }
        }
        $manager->flush();
    }
}
