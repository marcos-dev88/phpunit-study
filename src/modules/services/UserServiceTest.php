<?php

namespace Modules\Services;

use Modules\Models\User;
use PHPUnit\Framework\TestCase;

class UserServiceTest extends TestCase
{
    // We must to write this line below to php understand that it's a test
    /** @test */
    public function Test_createUser()
    {
        $expectedUsername = "Marcos";
        $expectedPassword = "123456";
        $expectedEmail = "some@some.com";

       $expectedUser = new User($expectedUsername, $expectedPassword, $expectedEmail);

       $this->assertEquals("Marcos", $expectedUser->getUsername());

    }
}