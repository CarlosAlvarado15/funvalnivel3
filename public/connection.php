<?php
try {
    $mysqli = new mysqli("localhost", "root", "", "authenticationapp");
    echo "conectado a base de dato carlos";
} catch (mysqli_sql_exception $e) {
    echo "Error:" . $e->getMessage();
}
