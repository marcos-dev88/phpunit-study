<?php

namespace modules\repositories\Implementations;

use Modules\Models\User;
use modules\repositories\Interfaces\IUserRepository;

class UserRepository implements IUserRepository
{

    public function getUsers(): array
    {
        // TODO: Implement getUsers() method.
    }

    public function updateUserById(int $userid, User $user): User
    {
        // TODO: Implement updateUserById() method.
    }

    public function saveUser(User $user): User
    {
        // TODO: Implement saveUser() method.
    }

    public function deleteUser(int $userid): User
    {
        // TODO: Implement deleteUser() method.
    }
}