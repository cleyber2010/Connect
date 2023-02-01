<?php

namespace test;

use singleton\Connect;

class User
{
    public function index()
    {
        $stmt = Connect::getInstance();

        var_dump($stmt);
    }
}