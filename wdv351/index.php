<?php

    use Stripe\Price;
    use Stripe\Product;
    use Stripe\Stripe;

    require __DIR__ . '/vendor/autoload.php';
    Stripe::setApiKey('sk_test_51QRcxVKDuDjMEsZvnBNanr8HGSp3dwrIi3hXluWqifPvO8pIMmDjxHDTMA4CZJY2JpweHTgNKegT42sO8lL0gZd400BBDzliWb');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Stripe Implementation</title>
        <meta charset="UTF-8">

        <style>
            #submit_btn {
                border: none;
                outline: 0;
                padding: 12px;
                color: white;
                background-color: #556cd6;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
                margin-top: 12px;
            }

            #submit_btn:hover {
                opacity: 0.7;
            }

            .badge {
                position: absolute;
                top: -10px;
                right: -10px;
                background-color: #556cd6;
                color: white;
                padding: 4px 8px;
                text-align: center;
                border-radius: 50%;
                font-size: 2rem;
                width: 2rem;
            }

            .card {
                position: relative;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                max-width: 500px;
                margin: auto;
                text-align: center;
                font-family: arial;
            }

            .card-row {
                display: flex;
            }

            .price {
                color: grey;
                font-size: 22px;
            }

            .card button {
                border: none;
                outline: 0;
                padding: 12px;
                color: white;
                background-color: #000;
                text-align: center;
                cursor: pointer;
                width: 100%;
                font-size: 18px;
            }

            .card button:hover {
                opacity: 0.7;
            }

            .description {
                text-align: start;
                padding: 12px;
            }

            h1 {
                font-family: sans-serif;
            }
        </style>

        <script>
            const order = {
                cookbook: {
                    product_id: "",
                    price_id: "",
                    quantity: 0
                },
                grimm: {
                    product_id: "",
                    price_id: "",
                    quantity: 0
                }
            }

            function addToCart(id, price) {
                if (id === "prod_RKJhz150pNCPlM") {
                    order.cookbook.product_id = id;
                    order.cookbook.price_id = price;
                    order.cookbook.quantity++;
                    document.querySelector("#prod_RKJhz150pNCPlM").innerHTML = order.cookbook.quantity;
                }
                if (id === "prod_RKJfCmYxZIyXf0") {
                    order.grimm.product_id = id;
                    order.grimm.price_id = price;
                    order.grimm.quantity++;
                    document.querySelector("#prod_RKJfCmYxZIyXf0").innerHTML = order.grimm.quantity;
                }
                console.log(order);
            }
            function sendToStripe() {
                const form = document.getElementById("form");
                console.log(order);
                document.getElementById("form_data").value = JSON.stringify(order);
                console.log(order);
                form.submit();
            }
            function setupPage() {

            }



            // document.querySelector("body").addEventListener("load", function() {
            //     // document.querySelector("#submit_btn").addEventListener("click", function () {
            //     //     // document.querySelector("#prod_RKJhz150pNCPlM").innerHTML = order.cookbook.quantity;
            //     //     // document.querySelector("#prod_RKJfCmYxZIyXf0").innerHTML = order.grimm.quantity;
            //     //
            //     // });
            // })
        </script>
    </head>
    <body onload="setupPage();">
        <h1>Stripe Implementation</h1>

        <div class="card-row">
            <?php
                $products = Product::all();
                $prices = Price::all();

                foreach ($products->data as $product) {
                    $thisPrice = "";
                    ?>

                    <div class="card">
                        <span class="badge" id="<?php echo $product->id; ?>"></span>
                        <img src="<?php echo $product->images[0]; ?>" alt="Product Image"
                             style="width:100%">
                        <h2><?php echo $product->name; ?></h2>
                        <p class="price"><?php
                                foreach ($prices->data as $price) {
                                    if ($price->product == $product->id) {
                                        $thisPrice = $price->id;
                                        $unitAmountInDollars = number_format($price->unit_amount / 100, 2);
                                        echo "$" . $unitAmountInDollars;
                                    }
                                }
                            ?></p>
                        <p class="description"><?php echo $product->description; ?></p>
                        <p>
                            <button onclick="addToCart('<?php echo $product->id; ?>', '<?php echo $thisPrice; ?>')">Add to Cart</button>
                        </p>
                    </div>

                    <?php
                }
            ?>
        </div>
        <form method="post" action="checkout.php" id="form">
            <input type="hidden" id="form_data" name="form_data">
            <input type="button" onclick="sendToStripe()" id="submit_btn" value="Checkout With Stripe">
        </form>
    </body>
</html>