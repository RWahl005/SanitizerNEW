<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="w3.css">
</head>
<body>
    <h1 style="text-align: center">Confirm Purchase!</h1>
    <?php
    $product = (int) $_GET['product'];
    $oz = $_GET['oz'];
    $price = $_GET['price'];
    $images = array('https://officedepot.scene7.com/is/image/officedepot/647695_o01_purell_advanced_hand_sanitizer_soothing_gel?$OD%2DLarge$&wid=450&hei=450', "https://pics.drugstore.com/prodimg/515419/900.jpg",
            "https://www.meijer.com/content/dam/meijer/product/0713/73/3889/53/0713733889537_a1c1_1200.png");
    $image = $images[$product];
    echo "<section style='width:50%; margin: auto;' class='w3-card w3-center'>
                <img style='width:50%;' src='$image' alt='' />
                <h3>Hand Sanitizer</h3>
                <p>Price: $$price</p>
                <p>Size: {$oz}oz</p>
                <p><a class='w3-button w3-red' href=''>Buy</a></p>
            </section>";

    ?>
</body>
</html>