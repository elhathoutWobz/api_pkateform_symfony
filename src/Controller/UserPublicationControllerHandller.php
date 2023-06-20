<?php

namespace App\Controller;

use App\Entity\User;

class UserPublicationControllerHandller
{
  public function handle(User $user):User
  {

      $user->setPublished(true);
      return $user;

  }
}