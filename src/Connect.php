<?php

namespace singleton;

use PDO;
use PDOException;

class Connect
{
    /** @var PDO */
    private static PDO $instance;

    private function __construct()
    {
    }

    public static function getInstance(): ?PDO
    {
        if (empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=localhost;dbname=test",
                    "root",
                    ""
                );
                return self::$instance;
            } catch (PDOException $exception) {
                echo $exception->getMessage();
            }
        }

        return self::$instance;
    }
}