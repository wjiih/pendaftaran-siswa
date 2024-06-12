<?php

$server = "localhost";
$user = "root";
$password ="";
$nama_databases="wajh";

$db= mysqli_connect($server,$user,$password,$nama_databases);

if(!$db ){
    die("Gagal terhubung dengan databases:".mysqli_connect_eror());
}

