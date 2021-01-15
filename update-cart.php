<?php
include_once('include/cart_controller.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $book_id = $_POST['book_id'];
    $qty = $_POST['qty'];

    if ($qty <= 0) {
        removeCart($book_id);
    } else {
        addToCart($book_id, $qty);
    }
    echo 'success';

} else {
    header("Location: index.php");
}