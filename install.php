<?php
require __DIR__ . '/config.php';
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS);

if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS `' . DB_NAME . '` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;';
if ($conn->query($sql) !== TRUE) {
    die("Error: " . $conn->error);
}
$conn->select_db(DB_NAME);
echo "Database ready\n";

$sql = '';
$script = file(__DIR__ . '/sql.sql');
foreach ($script as $line){
    $startWith = substr(trim($line),0,2);
    $endWith = substr(trim($line), -1,1);
    if (trim($line) === '' || $startWith == '--' || $startWith == '/*' || $startWith == '//'){
        continue;
    }
    $sql = $sql . $line;
    if ($endWith == ';'){
        mysqli_query($conn,$sql) or die('<div>Problem in executing the SQL query <b>' . $sql. '</b></div>');
        $sql = '';
    }
}
echo "SQL file imported successfully\n";


$conn->close();