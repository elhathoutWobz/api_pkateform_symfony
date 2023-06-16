<?php

namespace App\Tests\Unit;

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
}
