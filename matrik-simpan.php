<?php
require "include/conn.php";

$id_alternative = $_POST['id_alternative'];
$id_criteria = $_POST['id_criteria'];
$value = $_POST['value'];

$sql = "INSERT INTO saw_evaluations values ('$id_alternative','$id_criteria','$value')";
$result = $db->query($sql);

if ($result === true) {
    header("location:./matrik.php");
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}
