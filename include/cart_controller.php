<?php
session_start();
include_once('../include/db.php');

$cart = array();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}

function addToCart($id, $qty)
{
    global $cart;
    if (isset($cart[$id])) {
        $cart[$id] = ($cart[$id] + $qty);
    } else {
        $cart[$id] = $qty;
    }
    updateSession();
}

function removeCart($id)
{
    global $cart;
    if (isset($cart[$id])) {
        unset($cart[$id]);
    }
    updateSession();
}

function getSize()
{
    global $cart;
    return sizeof($cart);
}

function clear()
{
    global $cart;
    $cart = array();
    $_SESSION['cart'] = $cart;
}

function transferToDB()
{
    global $cart;
    global $con;


    $cart_id = findDBCartByUser();
    if ($cart_id != null) {

        $sql = "SELECT * FROM `cart_has_book` WHERE `cart_id`='$cart_id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {

                foreach ($cart as $book_id => $qty) {
                    if ($row['book_id'] == $book_id) {
                        $id = $row['id'];
                        mysqli_query($con, "UPDATE `cart_has_book` SET `qty`='$qty' WHERE `id`='$id'");
                    } else {
                        mysqli_query($con, "INSERT INTO `cart_has_book` VALUES(NULL,'$cart_id','$book_id','$qty','0') ");
                    }

                }

            }
        }

    } else {
        $user_id = $_SESSION['user']['id'];
        $size = getSize();
        $result = mysqli_query($con, "INSERT INTO `cart` VALUES(NULL,'$user_id','$size','0','0') ");
        if ($result){
            $last = $con->insert_id;

            foreach ($cart as $book_id => $qty) {
                mysqli_query($con, "INSERT INTO `cart_has_book` VALUES(NULL,'$last','$book_id','$qty','0') ");
            }
        }
    }


}

function updateSession()
{
    global $cart;
    $_SESSION['cart'] = $cart;
}

function findDBCartByUser()
{
    global $con;

    $user_id = isset($_SESSION['user']) ? $_SESSION['user']['id'] : null;

    if ($user_id != null) {

        $sql = "SELECT * FROM `cart` WHERE user_id='$user_id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $row = mysqli_fetch_assoc($result);
            return $row['id'];
        } else {
            return null;
        }
    }

}
