<?php
require "include/conn.php";
$id = $_POST['id_alternative'];
$name = $_POST['name'];
$sql = "UPDATE saw_alternatives SET name='$name' WHERE id_alternative='$id'";
$result = $db->query($sql);
header("location:./alternatif.php");
