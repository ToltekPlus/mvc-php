<?php

namespace App\Controller;

use App\Model\UserRoleModel;
use App\Rule\ControllerInterface;

class UserRoleController implements ControllerInterface {
    public function get()
    {
        // TODO: Implement get() method.
    }

    /**
     * @return array
     */
    public function show() : array
    {
        return UserRoleModel::all();
    }

    public function edit()
    {
        // TODO: Implement edit() method.
    }

    public function store()
    {
        // TODO: Implement store() method.
    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}