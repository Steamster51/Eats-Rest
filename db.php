<?php
$server = "http://triosdevelopers.com/";
$user = "D.Rudenko";
$pass ="KZXBvVfF";
$db ="drudenkodb";
$con = new mysqli($server, $user, $pass, $db);
if($con -> connect_error){
    die("Connection error: " . $con -> connect_error);
}
?>