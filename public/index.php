<?php
declare(strict_types=1);
require_once "../vendor/autoload.php";
use App\Controller\UserRoleController;
?>

<html>
    <head>
        <title>Роли</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/style.css">
    </head>
    <body>
    <?php
        $users_role = new UserRoleController();
        $users_role->show();
        ?>
    </body>
</html>