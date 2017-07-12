<?php
/**
 * Created by PhpStorm.
 * User: jonto
 * Date: 6/28/2017
 * Time: 4:40 PM
 */
require_once('vendor/autoload.php');

$stripe = array(
    "secret_key"      => "sk_test_uCXcVCI0XqMGdteK8DsdMkRo",
    "publishable_key" => "pk_test_x3mhpqgfAQtdtXv3SjlMqkMM"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>