<?php
require_once('checkout_model.php');

class CheckoutController {
    public function processCheckout($address, $address1, $phone, $zipcode, $password, $amount) {
       
        $checkoutModel = new CheckoutModel();
        $result = $checkoutModel->completeOrder($address, $address1, $phone, $zipcode, $password, $amount);

        if ($result) {
            header("Location: success.php");
            exit();
        } else {
            echo "Error processing the order. Please try again.";
        }
    }
}

if (isset($_POST['checkout'])) {
    $checkoutController = new CheckoutController();
    $checkoutController->processCheckout($_POST['address'], $_POST['address1'], $_POST['phone'], $_POST['zipcode'], $_POST['password'], $_POST['amount']);
}
?>
