<?php

namespace modules\repositories\Interfaces;

use Modules\Models\User;

interface IUserRepository
{
    public function getUsers(): array;

    public function updateUserById(int $userid,User $user): User;

    public function saveUser(User $user): User;

    public function deleteUser(int $userid): User;
}