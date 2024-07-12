<?php
    $host = 'mysql-db';
    $user = 'root';
    $pass = 'root';
    $db_name = 'test_database';

    $conn = new mysqli($host, $user, $pass, $db_name);

    if($conn -> connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connect succesful hehe";

    $conn -> close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="hello.php">
        <input type="submit" name="" id="">
    </form>
</body>
</html>