<?php

$server = "localhost";
$user = "root";
$password = "duongvanhoan22082005";
$db = "crud";
$conn = mysqli_connect($server, $user, $password, $db);

if ($conn) {
    echo 'Connection Successfully';
} else {
    echo 'Not Connected';
}

?>
