<?php

namespace App\Controller;

use App\Model\UserRoleModel;
use App\Rule\ControllerInterface;
use Core\View;

class UserRoleController implements ControllerInterface {
    /**
     * @throws \Exception
     */
    public function index()
    {
        $users = UserRoleModel::all();

        View::render('roles/show.php', ['users' => $users]);
    }

    /**
     * @throws \Exception
     */
    public function get()
    {
        // TODO реализовать более удобный вывод одной записи
        $user = UserRoleModel::find($_GET['id'])[0];

        View::render('roles/get.php', ['user' => $user]);
    }

    public function show()
    {
        // TODO: Implement show() method.
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