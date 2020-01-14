<?php


class DB
{
    private $dsn = "mysql:host=localhost;dbname=404shopclothes.sql";
    private $user = "root";
    private $pass = "@Haitran123";

    public function __construct()
    {
    }

    public function connection()
    {
        return new PDO($this->dsn, $this->user, $this->pass);
    }
}