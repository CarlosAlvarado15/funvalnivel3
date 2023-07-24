<?php
session_start();
$_SESSION["shopping_car"] = [
    "Fruits and vegetables" => [
        "Avocado", "Pre-cooked corn 450g"
    ],
    "Meat and fish" => [
        "Chicken 1kg", "Pork fillets 450g", "Salmon 1 kg", "Chiken 2kg"
    ]
]
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras </title>
</head>

<body>
    <main>
        <h1> Nombre de la Lista: </h1>

        <?php
        $shoppingCar = $_SESSION["shopping_car"];

        foreach ($shoppingCar as $category => $arrElements); {
        ?>
            <section>
                <h4>
                    <?= $category ?>
                </h4>
                <ul>
                    <?php
                    foreach ($arrElements as $element) {
                        print("<li>$element</li>");
                    }
                    ?>
                </ul>
            </section>
        <?php
        };
        ?>
    </main>
</body>

</html>