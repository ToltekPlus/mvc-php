<?php

declare(strict_types=1);

require_once "vendor/autoload.php";

//use App\Controller\UserController;
//use App\Controller\RoleController;

use App\Controller\UserRoleController;

/*
require_once "config/Database.php";

$db = new Database();
$data = $db->connect->query("select * from users");
$data = $data->fetchAll(PDO::FETCH_CLASS);
$data = $db->query("select * from users");

echo "Номера телефонов пользователей: <br/>";
foreach ($data as $item) {
    echo "{$item->phone}</br>";
}*/

/*
require_once "app/controllers/UserController.php";

$users = new UserController();
$data = $users->show();

echo "Номер телефонов пользователей<br/>";
foreach ($data as $item) {
    echo "{$item->phone}</br>";
}
*/

/*
$users = new UserController();
$data = $users->show();

echo "Номер телефонов пользователей<br/>";
foreach ($data as $item) {
    echo "{$item->phone}</br>";
}



$roles = new RoleController();
$roles_data = $roles->show();

echo "<br/><br/>Уровни доступа<br/>";
foreach ($roles_data as $item) {
    echo "{$item->role} с уровнем доступа <strong>{$item->level}</strong></br>";
}*/




















$users_role = new UserRoleController();
$data = $users_role->show();
foreach ($data as $item) {
    echo "Пользователь {$item->phone} - это {$item->role} с уровнем доступа <strong>{$item->level}</strong></br>";
}