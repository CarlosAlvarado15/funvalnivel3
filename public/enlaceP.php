<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //traigo los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $phone = $_POST["phone"];
    $bio = $_POST["bio"];
    // incluyo mi conexion a la base de datos

    $route;

    if (isset($_FILES)) {

        $photoname = $_FILES['photo']['name'];
        $dir = $_FILES['photo']['tmp_name'];
        $route = "./uploads/$photoname";
        move_uploaded_file($dir, $route);
    }


    require("connection.php");
    $hash =  password_hash($pass, PASSWORD_DEFAULT);
    //preparo el query


    $query = "UPDATE users SET `name`='$name',`phone`='$phone',`bio`='$bio', `photo`='$route' WHERE `email` = '$email'";

    // ejecutar query
    $mysqli->query($query);


    session_start();

    $_SESSION['usuario']['name'] =  $name;
    $_SESSION['usuario']['phone'] =  $phone;
    $_SESSION['usuario']['bio'] =  $bio;
    $_SESSION['usuario']['photo'] =  $route;


    header("Location: perfil.php");
};
