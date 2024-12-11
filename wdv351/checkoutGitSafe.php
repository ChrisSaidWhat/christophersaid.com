<?php

    require __DIR__ . '/vendor/autoload.php';

    // secret key removed for security

    \Stripe\Stripe::setApiKey($stripe_secret_key);

    $order = json_decode($_POST['form_data']);

    $cookbook_price_id = $order->cookbook->price_id;
    $grimm_price_id = $order->grimm->price_id;

    $isCookbookPurchased = false;
    $isGrimmPurchased = false;

    if (isset($cookbook_price_id) && $cookbook_price_id != "") {
        $isCookbookPurchased = true;
    }
    if (isset($grimm_price_id) && $grimm_price_id != "") {
        $isGrimmPurchased = true;
    }

    $line_items = [];

    if (isset($order->cookbook) && isset($order->cookbook->price_id) && isset($order->cookbook->quantity)) {
        $cookbook_quantity = (int) $order->cookbook->quantity;
        if ($cookbook_quantity > 0) { // Ensure quantity is valid
            $line_items[] = [
                "quantity" => $cookbook_quantity,
                "price" => $order->cookbook->price_id,
            ];
        }
    }

    if (isset($order->grimm) && isset($order->grimm->price_id) && isset($order->grimm->quantity)) {
        $grimm_quantity = (int) $order->grimm->quantity;
        if ($grimm_quantity > 0) { // Ensure quantity is valid
            $line_items[] = [
                "quantity" => $grimm_quantity,
                "price" => $order->grimm->price_id,
            ];
        }
    }

    if (!empty($line_items)) {
        $checkout_session = \Stripe\Checkout\Session::create([
            "mode" => "payment",
            "success_url" => "https://www.christophersaid.com/wdv351/success.php",
            "cancel_url" => "https://www.christophersaid.com/wdv351/cancel.php",
            "line_items" => $line_items,
        ]);
    } else {
        die('Error: No valid items to purchase.');
    }

    session_start();

    $_SESSION["cookbook_purchased"] = $isCookbookPurchased;
    $_SESSION["grimm_purchased"] = $isGrimmPurchased;

    http_response_code(303);
    header('Location: ' . $checkout_session->url);