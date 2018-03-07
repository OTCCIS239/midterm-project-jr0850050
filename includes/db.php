<?php

// You might connect to your database here. However, don't
// hard-code your database credentials here! Instead,
// copy the file `/.env.example` to `/.env`, and
// place your credentials there. Notice, this
// file shouldn't be in your repository.

// You can access the credentials you have defined in
// `/.env` by calling the `getenv($name)` function.
// For example, use `getenv('DB_HOST')` to get the
// host of your database. Yours should be "localhost"

// Make sure to include support for DB_PORT. See the
// PHP Documentation for the MySQL PDO DSN:
// http://php.net/manual/en/ref.pdo-mysql.connection.php

//TODO - move credentials outta here.

$dsn = "mysql:host=localhost;dbname=guitars";
$username = 'guitars';
$password = '3RyqLoK4ZHZI68Gnl0EEYJUSTAhB1rKj';
$conn = new PDO($dsn, $username, $password);

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('/database_error.php');
        exit();
    }

?>
