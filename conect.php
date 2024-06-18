<?php

$con = mysqli_connect("localhost", "root","","carrinho");

if(!$con){
    die('Connection Failed' . mysqli_connect_error());
}
?>