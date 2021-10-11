<?php

namespace Modules\Models;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    /** @test */
    public function testGetUsername()
    {
        $expectedUsername = "Marcos";

        $user = new User("", "", "");

        $user->setUsername("Marcos");

        $this->assertEquals($expectedUsername, $user->getUsername());
    }

    /** @test */
    public function testGetEmail()
    {
        $expectedEmail = "some@some.com";

        $user = new User("", "", "");

        $user->setEmail("some@some.com");

        $this->assertEquals($expectedEmail, $user->getEmail());
    }

    /** @test */
    public function testGetPassword()
    {
        $expectedPassword = "Marcos123";

        $user = new User("", "", "");

        $user->setPassword("Marcos123");

        $this->assertEquals($expectedPassword, $user->getPassword());
    }

    /** @test */
    public function testUserClass()
    {
        $user = new User("Marcos", "somepass", "some");
        $this->assertInstanceOf(
            User::class,
            $user
        );
    }

}