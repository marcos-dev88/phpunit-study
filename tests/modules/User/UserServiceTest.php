<?php

namespace Tests\Modules\User;

use Modules\Models\User;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{

    /**
     * We must to write this line below to php understand that it's a test
     * @test
     */
    public function Test_createUser()
    {
        $expectedUsername = "Marcos";
        $expectedPassword = "123456";
        $expectedEmail = "some@some.com";

        $expectedUser = new User(
            [
                'username' => $expectedUsername,
                'password' => $expectedPassword,
                'email' => $expectedEmail
            ]
        );

        self::assertInstanceOf(User::class, $expectedUser);
        self::assertEquals("Marcos", $expectedUser->getUsername());
        self::assertEquals("123456", $expectedUser->getPassword());
        self::assertEquals("some@some.com", $expectedUser->getEmail());

        $emptyUser = new User();

        self::assertEmpty($emptyUser->getUsername());
        self::assertEmpty($emptyUser->getPassword());
        self::assertEmpty($emptyUser->getEmail());
    }

    /**
     * @test
     */
    public function Test_updateUser()
    {
        $expectedUsername = "Marcos";
        $expectedPassword = "123456";
        $expectedEmail = "some@some.com";

        $expectedUser = new User(
            [
                'username' => $expectedUsername,
                'password' => $expectedPassword,
                'email' => $expectedEmail
            ]
        );

        self::assertEquals("Marcos", $expectedUser->getUsername());
        self::assertEquals("123456", $expectedUser->getPassword());
        self::assertEquals("some@some.com", $expectedUser->getEmail());
    }
}