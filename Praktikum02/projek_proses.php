<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "123"){
    echo "login berhasil!";
} else {
    echo "login gagal!";
}