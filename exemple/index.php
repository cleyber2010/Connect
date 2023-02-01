<?php
 require __DIR__ . "/../src/Connect.php";
 require __DIR__ . "/User.php";

 use test\User;
 use singleton\Connect;

 $user = new User();
 $user->index();