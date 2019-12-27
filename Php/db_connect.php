<?php
$servename = "localhost";
$username = "root";
$password = "";
$db_name = "sistema_login";
$connect = mysqli_connect($servename,$username,$password,$db_name);

if(mysqli_connect_error()){
    echo "Falha na conexão ".mysqli_connect_error();
}