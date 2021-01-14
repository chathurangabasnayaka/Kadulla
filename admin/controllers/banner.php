<?php
session_start();
include('../includes/config.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $uploadDir = '../../assets/images/banner/';
    $date = date("mdYHis");

    if (isset($_POST['bannerTitle_1'])) {

        $title_1 = $_POST['bannerTitle_1'];
        $title_2 = $_POST['bannerTitle_2'];
        $title_3 = $_POST['bannerTitle_3'];
        $link = $_POST['banner_link'];
        $id = $_POST['ids'];

        $banner_image = $date .'.'.pathinfo($_FILES['bannerFile']['name'], PATHINFO_EXTENSION);
        $banner_image_tmp = $_FILES['bannerFile']['tmp_name'];

        if (file_exists($uploadDir . $_FILES['bannerFile']['name'])) {
            $sql = "update `banner` set title_1='$title_1',title_2='$title_2',title_3='$title_3',`link`='$link' where `id`='$id'";
            $insert = mysqli_query($con, $sql);
            if($insert){
                echo '1';
            }else{
                echo "2";
            }
        }else{
            move_uploaded_file($banner_image_tmp, "$uploadDir$banner_image");
            $sql = "update banner set title_1='$title_1',title_2='$title_2',title_3='$title_3',link='$link',img='$banner_image' where id='$id'";
            $insert = mysqli_query($con, $sql);
            if($insert){
                echo '1';
            }else{
                echo "2";
            }
        }
    }
}


