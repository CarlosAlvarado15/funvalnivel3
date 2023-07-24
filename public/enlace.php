<?php
// registro
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    //traigo los datos del formulario
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // incluyo mi conexion a la base de datos

    require("connection.php");
    $hash =  password_hash($pass, PASSWORD_DEFAULT);
    //preparo el query

    $query = "INSERT INTO users(`email`, `password`)VALUES( '$email' , '$hash')";

    // ejecutar query
    $mysqli->query($query);

    header("Location: login.php");
};
