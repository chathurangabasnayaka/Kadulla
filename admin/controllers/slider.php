<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uploadDir = '../../assets/images/slider/';
    $date = date("mdYHis");

    if (isset($_POST['sliderTitle']) || isset($_POST['sliderDes'])) {

        $title = $_POST['sliderTitle'];
        $description = $_POST['sliderDes'];
        $id = $_POST['ids'];
        $link = $_POST['sliderLink'];

        $slider_image = $date .'.'.pathinfo($_FILES['sliderFile']['name'], PATHINFO_EXTENSION);
        $slider_image_tmp = $_FILES['sliderFile']['tmp_name'];

        if (file_exists($uploadDir . $_FILES['sliderFile']['name'])) {
            $sql = "update slider set title='$title',decript='$description',`link`='$link' where id='$id'";
            $insert = mysqli_query($con, $sql);
            if($insert){
                echo '1';
            }else{
                echo "2";
            }
        }else{
            move_uploaded_file($slider_image_tmp, "$uploadDir$slider_image");
            $sql = "update slider set title='$title',decript='$description',`link`='$link',filepath='$slider_image' where id='$id'";
            $insert = mysqli_query($con, $sql);
            if($insert){
                echo '1';
            }else{
                echo "2";
            }
        }
    }
}


