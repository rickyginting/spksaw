<?php
$sql = "SELECT weight FROM saw_criterias ORDER BY id_criteria";
$result = $db->query($sql);
$i = 0;
$W = array();
while ($row = $result->fetch_object()) {
    $W[] = $row->weight;
}
