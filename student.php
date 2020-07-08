<?php
/*
require("functions.php");
$conn = Connect();


$conn = Connect();
$sqlSelect = "SELECT * FROM students";
$consulta = $conn->query($sqlSelect);
if ($conn->connect_errno) {
    $conn->close();
    return false;
}
$conn->close();
return true;
*/

function read_stdin()
{
    $handler = fopen('php://stdin', 'r');
    $input = fgets($handler, 128);
    $input = rtrim($input);
    fclose($handler);
    return $input;
}

$nombre = read_stdin();
print "La lista de usuarios es: " . $nombre . ", ";
