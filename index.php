<?php
require __DIR__ . '/config.php';

$name = trim($_GET['name'] ?? '');
if ($name === '') {
    http_response_code(400);
    exit('Usage: ?name=John');
}

$cli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = mysqli_prepare($cli, 'SELECT name, surname FROM table1 WHERE name = ?');
mysqli_stmt_bind_param($stmt, 's', $name);
mysqli_stmt_execute($stmt);
$row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));

if (!$row) {
    http_response_code(404);
    exit('User not found');
}

echo 'Adi: ' . htmlspecialchars($row['name']) . '<br>Soyadi: ' . htmlspecialchars($row['surname']);
