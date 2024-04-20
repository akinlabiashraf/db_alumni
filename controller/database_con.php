<?php 
$localhost = 'localhost';

$root = 'root';

$password = '';

$db_con = 'alumini_database';

$db_connect = mysqli_connect($localhost, $root, $password,$db_con);

if(!$db_connect){

    die("database connection error");

}
?>