<?php
$host ="localhost";
$db_user="root";
$db_password ="";
$db_name ="cststore";

$db = mysqli_connect($host,$db_user,$db_password, $db_name);

if (!$db) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "";



?>
