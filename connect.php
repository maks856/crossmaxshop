<?php
$connect = mysqli_connect('localhost', 'root',
    '','registration');

// Check connection
if ($connect->connect_errno) {
    echo "Failed to connect to MySQL: " . $connect->connect_errno;
    exit();
}

