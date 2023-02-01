# Connect @CafeWebCode

###### Simple connection component using PDO with Singleton pattern

## Documentation

This component uses the singleton pattern, always returning the same instance of the PDO object, ensuring that there are no two instances of the same object.

##### Class User

We exemplify the use of connect in the user class

```php
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

```

###### Index

```php
<?php

 require __DIR__ . "/../src/Connect.php";
 require __DIR__ . "/User.php";

 use test\User;
 use singleton\Connect;

 $user = new User();
 $user->index();
```

## Credits

- [Cleyber F. Matos](https://github.com/cleyber2010) (Developer)
