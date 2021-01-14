<?php
include('../include/db.php');
//email password : Bo=Usi|5>uW
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uname = mysqli_real_escape_string($con, $_POST["uname"]);
    $upass = mysqli_real_escape_string($con, $_POST["upass"]);
    $user_email = mysqli_real_escape_string($con, $_POST["user-email"]);
    $fname = mysqli_real_escape_string($con, $_POST["fname"]);
    $lname = mysqli_real_escape_string($con, $_POST["lname"]);
    $street = mysqli_real_escape_string($con, $_POST["street"]);
    $address1 = mysqli_real_escape_string($con, $_POST["address1"]);
    $address2 = mysqli_real_escape_string($con, $_POST["address2"]);
    $select_cats = mysqli_real_escape_string($con, $_POST["cats"]);
    $country = mysqli_real_escape_string($con, $_POST["contry"]);

    $to = $user_email;
    $from = 'no-reply@kadullabooks.com';
    $subject = 'Registration Confirmation';
    $message = "dear '$uname',\n\n Your Account has been Created. ";
    $headers = "From: 'no-reply@kadullabooks.com'";

    $result = mysqli_query($con, "SELECT email FROM customer WHERE email = '$user_email'");
    $row_count = mysqli_num_rows($result);
    if ($row_count == 1) {
        echo '3';
    } else {
        $sql = "insert into `customer` (`uname`,`pass`,`email`,`fname`,`lname`,`street`,`address1`,`address2`,`country_id`) values 
                ('$uname','$upass','$user_email','$fname','$lname','$street','$address1','$address2','$country')";
        $insert = mysqli_query($con, $sql);
        if ($insert) {
            $last_id = $con->insert_id;

            $cats = explode(",", $select_cats);

            foreach ($cats as $cat) {
                $sql = "insert into `customer_has_cats` (`user_id`,`cats_id`) values  ('$last_id','$cat')";
                mysqli_query($con, $sql);
            }
//            mail($to, $subject, $message,$headers);
            echo '1';
        } else {
            echo "2";
        }
    }
}
