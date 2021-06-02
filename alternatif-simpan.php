<?php
require "include/conn.php";
$name = $_POST['name'];
// $x = $db->query($sql);
// var_dump($x);
$sql = "INSERT INTO saw_alternatives (name) VALUES ('$name')";

if ($db->query($sql) === true) {
    header("location:./alternatif.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

