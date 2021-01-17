<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once('include/db.php');

$cart = array();
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
}

function addToCart($id, $qty)
{
    global $con;
    if (isset($_SESSION['user'])) {
        transferToDB();

        $cart_id = findDBCartByUser();
        if ($cart_id != null) {

            $sql = "SELECT * FROM `cart_has_book` WHERE `cart_id`='$cart_id' AND `book_id`='$id'";
            $result = mysqli_query($con, $sql);
            if ($result->num_rows > 0) {
                $result = mysqli_query($con, "UPDATE `cart_has_book` SET `qty`= `qty`+'$qty' WHERE `cart_id`='$cart_id' AND `book_id`='$id'");
            } else {
                mysqli_query($con, "INSERT INTO `cart_has_book` VALUES(NULL,'$cart_id','$id','$qty','0') ");
            }
        } else {
            $user_id = $_SESSION['user']['id'];
            $result = mysqli_query($con, "INSERT INTO `cart` VALUES(NULL,'$user_id','$qty','0','0') ");
            if ($result) {
                $last = $con->insert_id;
                mysqli_query($con, "INSERT INTO `cart_has_book` VALUES(NULL,'$last','$id','$qty','0') ");
            }
        }


    } else {
        global $cart;
        if (isset($cart[$id])) {
            $cart[$id] = ($cart[$id] + $qty);
        } else {
            $cart[$id] = $qty;
        }
        updateSession();
    }

}

function removeCart($id)
{
    global $con;
    global $cart;
    if (isset($_SESSION['user'])) {

        $cart_id = findDBCartByUser();
        if ($cart_id != null) {
            $sql = "DELETE FROM `cart_has_book` WHERE `cart_id`='$cart_id' AND `book_id`='$id'";
            $result = mysqli_query($con, $sql);
        }
    } else {
        if (isset($cart[$id])) {
            unset($cart[$id]);
        }
        updateSession();
    }
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

    if (getSize() > 0) {
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

            clear();
        } else {
            $user_id = $_SESSION['user']['id'];
            $size = getSize();
            $result = mysqli_query($con, "INSERT INTO `cart` VALUES(NULL,'$user_id','$size','0','0') ");
            if ($result) {
                $last = $con->insert_id;

                foreach ($cart as $book_id => $qty) {
                    mysqli_query($con, "INSERT INTO `cart_has_book` VALUES(NULL,'$last','$book_id','$qty','0') ");
                }
            }
            clear();
        }
    }

}

function getAllItems()
{
    $cart_id = findDBCartByUser();
    if ($cart_id != null) {
        global $con;
        $sql = "SELECT * FROM `cart_has_book` WHERE `cart_id`='$cart_id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            return array('db' => $result);
        } else {
            return null;
        }
    } else {
        global $cart;
        return array('session' => $cart);
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
    } else {
        return null;
    }
}

function calculateTotal()
{
    global $con;
    $total = 0;
    $items = getAllItems();
    if (isset($items['db'])) {
        while ($row = mysqli_fetch_assoc($items['db'])) {
            $book_id = $row['book_id'];
            $result = mysqli_query($con, "SELECT * FROM `book` WHERE id='$book_id'");
            $book = mysqli_fetch_assoc($result);

            $total += $book['latest_price'] * $row['qty'];
        }
    } elseif (isset($items['session'])) {
        foreach ($items['session'] as $id => $qty) {
            $result = mysqli_query($con, "SELECT * FROM `book` WHERE id='$id'");
            $book = mysqli_fetch_assoc($result);

            $total += $book['latest_price'] * $qty;
        }
    }

    return $total;
}
