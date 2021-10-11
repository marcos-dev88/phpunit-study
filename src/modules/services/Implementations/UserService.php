<?php

namespace Modules\Implementations\Services;

use Modules\Models\User;
use modules\services\Interfaces\IUserService;

class UserService implements IUserService
{

    public function getUsers(): array
    {
        // TODO: Implement getUsers() method.
    }

    public function updateUserById(int $userId, User $user): User
    {
        // TODO: Implement updateUserById() method.
    }

    public function saveUser(User $user): User
    {
        // TODO: Implement saveUser() method.
    }

    public function deleteUser(int $userId): User
    {
        // TODO: Implement deleteUser() method.
    }
}
