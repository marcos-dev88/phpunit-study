<?php

namespace modules\services\Interfaces;

use Modules\Models\User;

interface IUserService
{
    public function getUsers(): array;

    public function updateUserById(int $userId, User $user): User;

    public function saveUser(User $user): User;

    public function deleteUser(int $userId): User;
}