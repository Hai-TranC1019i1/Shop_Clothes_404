<?php


class DB
{
    private $dsn = "mysql:host=127.0.0.1;dbname=404shopclothes";
    private $user = "root";
    private $pass = "";

    public function __construct()
    {
    }

    public function connection()
    {
        return new PDO($this->dsn, $this->user, $this->pass);
    }
}