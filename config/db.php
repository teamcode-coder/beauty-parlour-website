<?php
$conn = new mysqli("localhost", "root", "", "beauty_parlour");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>