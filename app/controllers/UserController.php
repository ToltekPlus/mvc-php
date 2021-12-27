<?php

namespace App\Controller;

use App\Model\UserModel;

class UserController {
    /**
     * @return array
     */
    public function show() : array
    {
        $users = new UserModel();
        return $users->getAll();
    }
}