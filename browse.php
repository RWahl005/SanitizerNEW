<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Browse</title>
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="browse.css">
</head>
<body>
    <main>
        <?php
            $images = array("https://officedepot.scene7.com/is/image/officedepot/647695_o01_purell_advanced_hand_sanitizer_soothing_gel?$OD%2DLarge$&wid=450&hei=450", "https://pics.drugstore.com/prodimg/515419/900.jpg",
            "https://www.meijer.com/content/dam/meijer/product/0713/73/3889/53/0713733889537_a1c1_1200.png");

            for($x = 0; $x < 100; $x++){
                $product = rand(0, count($images) - 1);
                $image = $images[$product];
                $price = rand(20, 500);
                $oz = rand(1, 15);
                echo "<section class='w3-card'>
                <img style='width:50%;' src='$image' alt='' />
                <h3>Hand Sanitizer</h3>
                <p>Price: $$price</p>
                <p>Size: {$oz}oz</p>
                <p><a class='w3-button w3-red' href='buy.php?product=$product&price=$price&oz=$oz'>Buy</a></p>
            </section>";
            }

        ?>
    </main>
</body>
</html>