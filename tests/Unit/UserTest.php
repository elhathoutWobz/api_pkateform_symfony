<?php

namespace App\Tests\Unit;

use App\Entity\Article;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new User();
    }

    // Test method to verify the behavior of the getEmail method
    public function testGetEmail(): void
    {
        // Define a sample email
        $email = 'azize@gmail.com';

        // Set the email using the setEmail method
        $res = $this->user->setEmail($email);

        // Assert that the return value of setEmail is an instance of User class
        self::assertInstanceOf(User::class, $res);

        // Assert that the getEmail method returns the same email
        self::assertEquals($email, $this->user->getEmail());

        // Assert that the getUserIdentifier method returns the same email
        self::assertEquals($email, $this->user->getUserIdentifier());
    }

    public  function testGetRoles() :void
    {
        $role = ['ROLE_ADMIN'];

    $res = $this->user->setRoles($role);
        self::assertInstanceOf(User::class,$res);
        self::assertContains('ROLE_USER',$this->user->getRoles());
        self::assertContains('ROLE_ADMIN',$this->user->getRoles());
    }

    public  function testGetPassword() :void
    {
        $pass = 'password';

        $res = $this->user->setPassword($pass);
        self::assertInstanceOf(User::class,$res);
        self::assertEquals($pass, $this->user->getPassword());


    }

    public function testGetArticle() :void
    {
        $article = new Article();

        $res= $this->user->addArticle($article);
        self::assertInstanceOf(User::class,$res);
        self::assertCount(1,$this->user->getArticles());
        self::assertTrue($this->user->getArticles()->contains($article));

        $res=$this->user->removeArticle($article);
        self::assertInstanceOf(User::class,$res);
        self::assertCount(0,$this->user->getArticles());
        self::assertFalse($this->user->getArticles()->contains($article));

    }


}
