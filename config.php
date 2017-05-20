<?php
global $conn;
$conn = mysqli_connect("127.0.0.1", "root", "", "council");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
}
