<?php

namespace Modules\Models;

class User
{
    /**
     * @var string
     */
    private string $username = '';

    /**
     * @var string
     */
    private string $password = '';

    /**
     * @var string
     */
    private string $email = '';


    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        if (!array_key_exists('username', $attributes) ||
            !array_key_exists('password', $attributes) ||
            !array_key_exists('email', $attributes)){
            return;
        }

        $this->username = $attributes['username'];
        $this->password = $attributes['password'];
        $this->email = $attributes['email'];
    }


    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

}