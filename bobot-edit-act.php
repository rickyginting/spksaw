<?php
require "include/conn.php";
$id = $_POST['id_criteria'];
$criteria = $_POST['criteria'];
$weight = $_POST['weight'];
$attribute = $_POST['attribute'];

$sql = "UPDATE saw_criterias SET criteria='$criteria',weight='$weight',attribute='$attribute' WHERE id_criteria='$id'";
$result = $db->query($sql);
header("location:./bobot.php");
