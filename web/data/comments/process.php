<?php

include($_SERVER["DOCUMENT_ROOT"]."/connect_server.php");

$query="SELECT * FROM comments where place='$place'";
$get=mysql_query($query);
while ($row = mysql_fetch_array($get)) {
    $name = $row['name'];
    $comrev = $row['com_rev'];
    include ('template.php');
}