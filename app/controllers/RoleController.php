<?php

namespace App\Controller;

use App\Model\RoleModel;

class RoleController {
    /**
     * @return array
     */
    public function show() : array
    {
        $roles = new RoleModel();
        return $roles->getAll();
    }
}