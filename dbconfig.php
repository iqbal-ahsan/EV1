<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER ', 'root');
define('DB_PASSWORD','password');
define('DB_DATABASE','bus_ticket_management');

function getDB() {
    $dbConnection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    if ($dbConnection->connect_error) {
        die("Connection failed: " . $dbConnection->connect_error);
    }
    return $dbConnection;
}
?>
