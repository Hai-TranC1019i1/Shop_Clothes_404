<?php


class DB
{
<<<<<<< HEAD
    private $dsn = "mysql:host=127.0.0.1;dbname=404shopclothes";
=======
    private $dsn = "mysql:host=localhost;dbname=404shopclothes";
>>>>>>> 1b432e647e7db1c9ec4dcb21f0dd28300f161717
    private $user = "root";
    private $pass = "@@Tung123";

    public function __construct()
    {
    }

    public function connection()
    {
        return new PDO($this->dsn, $this->user, $this->pass);
    }
}