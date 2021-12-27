<?php

namespace App\Controller;

use App\Model\UserRoleModel;
use App\Rule\ControllerInterface;
use Core\View;

class UserRoleController implements ControllerInterface {
    public function get()
    {
        // TODO: Implement get() method.
    }

    /**
     * @throws \Exception
     */
    public function show()
    {
        $users = UserRoleModel::all();

        View::render('roles/show.php', ['users' => $users]);
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