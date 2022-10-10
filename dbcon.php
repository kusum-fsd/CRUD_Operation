<?php
$con = mysqli_connect('localhost', 'root', '', 'demo_crud');

if(!$con){
     die('Connection Fail'.mysqli_connect_errno());
}
?>