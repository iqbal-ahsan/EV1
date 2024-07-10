<?php
require_once 'dbconfig.php';
$db=getDB()

$sql = "SELECT* FROM ticket_booking"; #fetch from db
$result = $db->query($sql);
?>


<?php
$db->close();#close db connection
?>