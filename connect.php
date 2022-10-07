<?php


$con=mysqli_connect('localhost','root','','coinratecap');
if(!$con){
    die('please check your connection'.mysqli_connect_error($con));
}
?>