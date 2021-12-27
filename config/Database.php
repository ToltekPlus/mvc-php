<?php

namespace Core;

use PDO;
use PDOException;

class Database {
    /**
     * @var PDO
     */
    public $connect;

    /**
     * Реализация подключения к БД
     */
    public function __construct()
    {
        try {
            $this->connect = new PDO('mysql:dbname=steam;host=127.0.0.1', 'root', 'root');
            $this->connect->exec("set names utf8");
            //echo "Подключение к БД произошло</br>";
        }catch (\PDOException $e) {
            echo "Ошибочка следующего характера: <br/> <i> {$e->getMessage()}</i>";
        }
    }

    /**
     * Переопределяем метод query для удобного составления запроса SQL
     * и возвращения объекта
     *
     * @param string $sql
     * @return array
     */
    public function query(string $sql) : array
    {
        $query = $this->connect->query($sql);
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}