<?php

    $connection = mysqli_connect('mysql', 'root', 'root', 'PHP');

    if (!empty($_POST['name']) and !empty($_POST['password']) and !empty($_POST['password_check'])){
        if ($_POST['password'] == $_POST['password_check']) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $sql = "INSERT INTO users (LastName, FirstName) VALUES ('$name','$password')";
            $connection->query($sql);
            echo "Вы авторизованны";

        }else{
            echo "Пароли не совподают";
        }
    }else{
        echo 'Вы не ввели данные';
    }
?>

<?php


    if (!empty($_POST['name_s']) and !empty($_POST['password_s'])) {
        $name_s = $_POST['name_s'];
        $password_s = $_POST['password_s'];
        $sql_s = "SELECT * FROM users WHERE LastName='$name_s' AND FirstName='$password_s'";
        $res_s = $connection->query($sql_s);

        if ($res_s->fetch_assoc()) {
            echo "Вы зашли в свой аккаунт !";
        }

    }

?>

<?php
//    $connection = mysqli_connect('mysql', 'root', 'root', 'PHP' );
//    $connection->query("CREATE DATABASE PHP");

//    $connection->query('CREATE TABLE users(
//        PersonID int,
//        LastName varchar(255),
//        FirstName varchar(255))');

//    $sql_q = "SELECT * FROM users";
//    $sql = "INSERT INTO users (LastName, FirstName) VALUES ('Гаджимурад', 'Абакаров')";
//
//   $res = $connection->query($sql_q);
//    var_dump($res->fetch_assoc());
//
//
//   $result = $connection->query($sql);
//   var_dump($result->fetch_assoc());
//




