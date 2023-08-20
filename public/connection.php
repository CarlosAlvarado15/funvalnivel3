<?php
try {
    $mysqli = new mysqli("localhost", "Logan", "Logan2021.", "authentication_app");
    //echo "conectado a base de dato carlos";
} catch (mysqli_sql_exception $e) {
    echo "Error:" . $e->getMessage();
}
