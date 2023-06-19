<?php

namespace App\Controller;

use App\Entity\User;

class UserPublishController
{
public function __invoke(User $user):User
{
    $user->setPublished(true);
        return $user;

    // TODO: Implement __invoke() method.
}
}