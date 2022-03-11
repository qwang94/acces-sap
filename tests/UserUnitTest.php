<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $user = new User();
        $user->setEmail('test@email.com')
             ->setPassword('password');

        $this->assertTrue($user->getEmail() === 'test@email.com');
        $this->assertTrue($user->getPassword() === 'password');
    }

    public function testIsFalse(): void
    {
        $user = new User();
        $user->setEmail('test@email.com')
             ->setPassword('password');

        $this->assertFalse($user->getEmail() === 'email@test.com');
        $this->assertFalse($user->getPassword() === 'wordpass');
    }

    public function testIsEmpty(): void
    {
        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->getPassword());
    }
}
