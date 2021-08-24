<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$conn = new mysqli($host,$user,$pass);

if ($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
}

$sql = 'CREATE DATABASE IF NOT EXISTS `MyDb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;';
if ($conn->query($sql) === TRUE) {
    echo "Database created";
} else {
    echo "Error: " . $conn->error;
}

$sql = '';
$script = file('sql.sql');
foreach ($script as $line){
    $startWith = substr(trim($line),0,2);
    $endWith = substr(trim($line), -1,1);
    if (empty($line) || $startWith == '--' || $startWith == '/*' || $startWith == '//'){
        continue;
    }
    $sql = $sql . $line;
    if ($endWith == ';'){
        mysqli_query($conn,$sql) or die('<div>Problem in executing the SQL query <b>' . $sql. '</b></div>');
        $sql = '';
    }
}
echo  '<div>SQL file imported successfully</div>';


$conn->close();