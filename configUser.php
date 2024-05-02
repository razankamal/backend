<?php
$cont = mysqli_connect('localhost', 'root', '', 'users');
if (!$cont) {
    die("Connection failed: " . mysqli_connect_error());
}
?>