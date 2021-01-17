<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php include 'includes/cssFiles.php' ?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navbar -->
    <?php include 'includes/navbar.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include 'includes/sidebar.php' ?>
    <!-- /Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <?php

    if (isset($_GET['list_category'])) {
        include("includes/list_category.php");
    } else if (isset($_GET['catagory'])) {
        include("includes/addCategory.php");
    } else if (isset($_GET['changePass'])) {
        include("includes/changePass.php");
    } else if (isset($_GET['list_author'])) {
        include("includes/list_author.php");
    } else if (isset($_GET['author'])) {
        include("includes/addAuthor.php");
    } else if (isset($_GET['list_publisher'])) {
        include("includes/list_publisher.php");
    } else if (isset($_GET['publisher'])) {
        include("includes/addPublisher.php");
    } else if (isset($_GET['list_type'])) {
        include("includes/list_type.php");
    } else if (isset($_GET['type'])) {
        include("includes/addType.php");
    } else if (isset($_GET['list_book'])) {
        include("includes/list_book.php");
    } else if (isset($_GET['add_book'])) {
        include("includes/addBook.php");
    } else if (isset($_GET['app_version'])) {
        include("includes/appVersion.php");
    } else if (isset($_GET['list_translator'])) {
        include("includes/list_translator.php");
    } else if (isset($_GET['translator'])) {
        include("includes/addTranslator.php");
    } else if (isset($_GET['slider'])) {
        include("includes/slider.php");
    } else if (isset($_GET['banner'])) {
        include("includes/banner.php");
    } else if (isset($_GET['dayBook'])) {
        include("includes/bookofDay.php");
    } else if (isset($_GET['blog_cats'])) {
        include("includes/list_blog_category.php");
    } else if (isset($_GET['blog_catagory'])) {
        include("includes/addBlogCategory.php");
    } else if (isset($_GET['blog_post'])) {
        include("includes/list_blog_post.php");
    } else if (isset($_GET['add_blog_post'])) {
        include("includes/addBlogPost.php");
    } else if (isset($_GET['delivery_cost'])) {
        include("includes/deliveyCost.php");
    } else if (isset($_GET['dollar_rate'])) {
        include("includes/Dollar_rate.php");
    } else {
        include 'includes/index.php';
    }
    ?>
    <!-- /.content-wrapper -->

    <!--Footer-->
    <?php include 'includes/footer.php' ?>
    <!--/Footer-->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php include 'includes/jsFiles.php' ?>

<script type="text/javascript">

    ////Change Password Page
    $("#save").click(function (e) {
        e.preventDefault();
        let pass = $("#password").val();
        let newpass = $("#newPassword").val();
        let conpass = $("#confirmPassword").val();

        if (pass == "" | newpass == "" | conpass == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            if (newpass == conpass) {

                let dataString = 'pass=' + pass + '&newpass=' + newpass;

                $.ajax({
                    type: 'POST',
                    data: dataString,
                    url: 'controllers/changePass.php',
                    success: function (data) {
                        if (data == 1) {
                            toastr.success('Password Changed Successfully !!');

                            $("#password").val(null);
                            $("#newPassword").val(null);
                            $("#confirmPassword").val(null);
                        } else if (data == 2) {
                            toastr.error('Incorrect Current Password !!');
                        }

                    }
                });
            } else {
                toastr.error('Password does not Matched !!')
                return;
            }
        }
    });
    ////End Password Page

    ////Add Category
    $('#categoryAdd').on('submit', function (e) {
        e.preventDefault();
        let name = $('#catsName').val();
        let order_id = $('#catsOrder').val();
        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'insert' + '&orderId='+ order_id;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/categories.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Category already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });
    ////End Add Category

    ////Add Blog Category
    $('#blog_categoryAdd').on('submit', function (e) {
        e.preventDefault();
        let name = $('#blog_catsName').val();
        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'insert';
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/blog_categories.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Category already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });
    ////End Add Blog Category

    ////start View Category
    $('#view_cats').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_cats.php",

        "columnDefs": [
            {"className": "dt-center", "targets": "_all"},
            {
                "targets": -1,
                "data": null,
                "className": "dt-center",
                "defaultContent":
                    "<a id='cats_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='cats_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }]
    });

    let cats_table = $('#view_cats').DataTable();

    $('#view_cats tbody').on('click', '#cats_edit', function () {
        let data = cats_table.row($(this).parents('tr')).data();
        $('[name ="catsName"]').val(data[1]);
        $('[name ="catsId"]').val(data[0]);
        $('#catsOrder').val(data[2]);
        $('#modal-editCats').modal('show');
    });

    $('#view_cats tbody').on('click', '#cats_dlt', function () {
        let data = cats_table.row($(this).parents('tr')).data();
        $('#modal-dlt').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Category

    ////start View Blog Category
    $('#view_blog_cats').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_blog_cats.php",

        "columnDefs": [{"className": "dt-center", "targets": "_all"},{
            "targets": -1,
            "data": null,
            "defaultContent":
                "<center><a id='blog_cats_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='blog_cats_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a></center>"
        }]
    });

    let blog_cats_table = $('#view_blog_cats').DataTable();

    $('#view_blog_cats tbody').on('click', '#blog_cats_edit', function () {
        let data = blog_cats_table.row($(this).parents('tr')).data();
        $('[name ="blog_catsName"]').val(data[1]);
        $('[name ="blog_catsId"]').val(data[0]);
        $('#modal-blog_editCats').modal('show');
    });

    $('#view_blog_cats tbody').on('click', '#blog_cats_dlt', function () {
        let data = blog_cats_table.row($(this).parents('tr')).data();
        $('#modal-dlt-blog').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Blog Category

    ////Start Category Update
    $('.catsUpdate').on('submit', function (e) {
        e.preventDefault();
        let id = $('[name ="catsId"]').val();
        let name = $('[name ="catsName"]').val();
        let order_id = $('#catsOrder').val();

        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'update' + '&id=' + id + '&orderId='+ order_id;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/categories.php',
                success: function (data) {
                    if (data == 1) {
                        $('#modal-editCats').modal('hide');
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Category Already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });

    $("#dlt_Catsbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/categories.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Category Update

    ////Start Blog Category Update
    $('.blog_catsUpdate').on('submit', function (e) {
        e.preventDefault();
        let id = $('[name ="blog_catsId"]').val();
        let name = $('[name ="blog_catsName"]').val();

        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'update' + '&id=' + id;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/blog_categories.php',
                success: function (data) {
                    if (data == 1) {
                        $('#modal-blog_editCats').modal('hide');
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Blog Category Already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });

    $("#dlt_Blog_Cat_btn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/blog_categories.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-blog').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Blog Category Update

    ////Start Add Transator
    $('#authorAdd').on('submit', function (e) {
        e.preventDefault();
        let auName = $('#authorName').val();
        if (auName == "") {
            alert("Author must be filled out ");
            toastr.success('Author must be filled out!');
            return;
        } else {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.open('POST', 'controllers/authors.php', true);
            let formData = new FormData(this);
            formData.append('check', 'insert');
            xmlHttp.send(formData);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                    if (xmlHttp.responseText == '1') {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (xmlHttp.responseText == '3') {
                        toastr.error('Author already exists !!');
                    } else {
                        toastr.error('Sorry, there was an error uploading your file.');
                    }
                }
            };
        }
    });
    ////End Add Author

    ////start View Author
    $('#view_author').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_author.php",

        "columnDefs": [
            {"className": "dt-center", "targets": "_all"},{
                className: "dt-center",
                "targets": 3,
                "data": null,
                "render": function (data, type, JsonResultRow, meta) {
                    return '<img width="auto" height="40px" src="img/author/' + JsonResultRow[3] + '" rel="' + JsonResultRow[3] + '"/>';
                }
            }
            ,
            {
                className: "dt-center",
                "targets": 4,
                "data": null,
                "defaultContent":
                    "<a id='author_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='author_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]

    });

    let author_table = $('#view_author').DataTable();

    $('#view_author tbody').on('click', '#author_edit', function () {
        let data = author_table.row($(this).parents('tr')).data();
        $('[name ="AuthorId"]').val(data[0]);
        $('[name ="AuthorName"]').val(data[1]);
        $('[name ="authorDes"]').summernote('code', data[2]);
        $('[name ="imgName"]').text(data[3]);
        $('#modal-editAuthor').modal('show');
    });

    $('#view_author tbody').on('click', '#author_dlt', function () {
        let data = author_table.row($(this).parents('tr')).data();
        $('#modal-dlt-author').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Author

    ////Start Author Update
    $('.authorUpdate').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/authors.php', true);
        let formData = new FormData(this);
        formData.append('check', 'update');
        xmlHttp.send(formData);
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-editAuthor').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Author already exists !!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_authorbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/authors.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-author').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Author Update

    ////Start Publisher
    $('#view_publisher').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_publisher.php",

        "columnDefs": [
            {"className": "dt-center", "targets": "_all"},{
                className: "dt-center",
                "targets": 3,
                "data": null,
                "render": function (data, type, JsonResultRow, meta) {
                    return '<img width="auto" height="40px" src="img/publisher/' + JsonResultRow[3] + '" rel="' + JsonResultRow[3] + '"/>';
                }
            }
            ,
            {
                className: "dt-center",
                "targets": -1,
                "data": null,
                "defaultContent":
                    "<a id='pub_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='pub_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]
    });

    let pub_table = $('#view_publisher').DataTable();

    $('#view_publisher tbody').on('click', '#pub_edit', function () {
        let data = pub_table.row($(this).parents('tr')).data();
        $('[name ="pubId"]').val(data[0]);
        $('[name ="pubName"]').val(data[1]);
        $('[name ="pubDes"]').summernote('code', data[2]);
        $('[name ="imgName"]').text(data[3]);
        $('#modal-edit-pub').modal('show');
    });

    $('#view_publisher tbody').on('click', '#pub_dlt', function () {
        let data = pub_table.row($(this).parents('tr')).data();
        $('#modal-dlt-pub').modal('show');
        $('[name ="pubid"]').val(data[0]);
    });

    $('.pubUpdate').on('submit', function (e) {
        e.preventDefault();
        let id = $('[name ="pubId"]').val();
        let name = $('[name ="pubName"]').val();
        let des = $('[name ="pubDes"]').val();

        if (des == "" || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            // let dataString = 'name=' + name + '&check=' + 'update' + '&id=' + id + '&des=' + des;
            let formData = new FormData(this);
            formData.append('check', 'update');
            $.ajax({
                type: 'POST',
                // data: dataString,
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/publishers.php',
                success: function (data) {
                    if (data == 1) {
                        $('#modal-edit-pub').modal('hide');
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Category Already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });

    $("#dlt_pub_btn").click(function (e) {
        e.preventDefault();
        let cid = $('[name ="pubid"]').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/publishers.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-pub').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });

    $('#publisherAdd').on('submit', function (e) {
        e.preventDefault();
        let name = $('#pubName').val();
        let des = $('[name ="pubDes"]').val();
        let img = $('[name ="pubImg"]').val();
        if (des == "" || name == "" || img == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            // let dataString = 'name=' + name + '&des=' + des + '&check=' + 'insert'+'&img='+img;
            let formData = new FormData(this);
            formData.append('check', 'insert');
            $.ajax({
                type: 'POST',
                // data: dataString,
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/publishers.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Publisher already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });
    ////End Publisher

    ////Start Type
    $('#view_type').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_type.php",

        "columnDefs": [{"className": "dt-center", "targets": "_all"},{
            "targets": -1,
            "data": null,
            "defaultContent":
                "<center><a id='type_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='type_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a></center>"
        }]

    });

    let type_table = $('#view_type').DataTable();

    $('#view_type tbody').on('click', '#type_edit', function () {
        let data = type_table.row($(this).parents('tr')).data();
        $('[name ="typeId"]').val(data[0]);
        $('[name ="typeName"]').val(data[1]);
        $('#modal-edit-type').modal('show');
    });

    $('#view_type tbody').on('click', '#type_dlt', function () {
        let data = type_table.row($(this).parents('tr')).data();
        $('#modal-type-dlt').modal('show');
        $('[name ="type_id"]').val(data[0]);
    });

    $('.type_update').on('submit', function (e) {
        e.preventDefault();
        let id = $('[name ="typeId"]').val();
        let name = $('[name ="typeName"]').val();

        if (id == "" || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'update' + '&id=' + id;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/type.php',
                success: function (data) {
                    if (data == 1) {
                        $('#modal-edit-pub').modal('hide');
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Type Already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });

    $("#dlt_type_btn").click(function (e) {
        e.preventDefault();
        let cid = $('[name ="type_id"]').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/type.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-type-dlt').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });

    $('#typeAdd').on('submit', function (e) {
        e.preventDefault();
        let name = $('#typeName').val();
        if (name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'insert';
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/type.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Type already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });
    ////End Type

    //Start Add Translator
    $('#TranslatorAdd').on('submit', function (e) {
        e.preventDefault();
        let TranslatorName = $('#TranslatorName').val();
        if (TranslatorName == "") {
            toastr.success('Translator must be filled out!');
            return;
        } else {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.open('POST', 'controllers/translators.php', true);
            let formData = new FormData(this);
            formData.append('check', 'insert');
            xmlHttp.send(formData);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                    if (xmlHttp.responseText == '1') {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (xmlHttp.responseText == '3') {
                        toastr.error('Translator already exists !!');
                    } else {
                        toastr.error('Sorry, there was an error uploading your file.');
                    }
                }
            };
        }
    });
    ////End Add Translator

    ////start View Translator
    $('#view_translator').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_translators.php",

        "columnDefs": [{"className": "dt-center", "targets": "_all"},
            {
                className: "dt-center",
                "targets": 3,
                "data": null,
                "render": function (data, type, JsonResultRow, meta) {
                    return '<img width="auto" height="40px" src="img/translator/' + JsonResultRow[3] + '" rel="' + JsonResultRow[3] + '"/>';
                }
            }
            ,
            {
                className: "dt-center",
                "targets": 4,
                "data": null,
                "defaultContent":
                    "<a id='translator_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='translator_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]

    });

    let translator_table = $('#view_translator').DataTable();

    $('#view_translator tbody').on('click', '#translator_edit', function () {
        let data = translator_table.row($(this).parents('tr')).data();
        $('[name ="TranslatorId"]').val(data[0]);
        $('[name ="TranslatorName"]').val(data[1]);
        $('[name ="TranslatorDes"]').summernote('code', data[2]);
        $('[name ="TranslatorName"]').text(data[3]);
        $('#modal-edit-Translator').modal('show');
    });

    $('#view_translator tbody').on('click', '#translator_dlt', function () {
        let data = translator_table.row($(this).parents('tr')).data();
        $('#modal-dlt-translator').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Translator

    ////Start Translator Update
    $('.translatorUpdate').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/translators.php', true);
        let formData = new FormData(this);
        formData.append('check', 'update');
        xmlHttp.send(formData);
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-edit-Translator').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Translator already exists !!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_trans_btn").click(function (e) {
        e.preventDefault();
        let cid = $('[name ="cid"]').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/translators.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-translator').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Translator Update

    ////Start Add Book
    $('#bookAdd').on('submit', function (e) {
        e.preventDefault();

        let best_seller = "";
        let Seller_picks = "";

        if ($('#best_seller').is(":checked")) {
            best_seller = 1;
        } else {
            best_seller = 0;
        }

        if ($('#seller_picks').is(":checked")) {
            Seller_picks = 1;
        } else {
            Seller_picks = 0;
        }

        let bookName = $('[name ="bookName"]').val();
        let BookDes = $('[name ="BookDes"]').val();
        let book_weight = $('[name ="book_weight"]').val();
        let book_price = $('[name ="book_price"]').val();
        let book_latest_price = $('[name ="book_latest_price"]').val();
        let book_qty = $('[name ="book_qty"]').val();
        let book_isbn = $('[name ="book_isbn"]').val();
        let book_page = $('[name ="book_page"]').val();
        let select_author = $('[name ="select_author"]').val();
        let select_translator = $('[name ="select_translator"]').val();
        let select_type = $('[name ="select_type"]').val();
        let select_publisher = $('[name ="select_publisher"]').val();
        let select_category = $('[name ="select_category"]').val();

        if (bookName == "" || BookDes == "" || book_weight == "" || book_price == "" || book_latest_price == "" || book_qty == "" || book_isbn == "" || book_page == "" || select_author == "" || select_translator == "" || select_type == "" || select_publisher == "" || select_category == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let formData = new FormData(this);
            formData.append('check', 'insert');
            formData.append('cats', select_category);
            formData.append('best_seller', best_seller);
            formData.append('seller_picks', Seller_picks);

            let files = uploader.getImages();

            if (files.size > 4) {
                toastr.error('Max 5 files only..');
                return;
            }

            let x = 1;
            for (let file of files) {
                formData.append('img' + x, file);
                x++;
            }

            $.ajax({
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/books.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Book already exists !!');
                    } else {
                        console.log(data);
                    }

                }
            });
        }
    });
    ////End Add Book



    ////Start View Book
    $('#view_book').DataTable({
        // "oSearch": {"bSmart": true},
        // dom: 'lBfrtip',
        "responsive": true,
        "fixedHeader": true,
        paging: true,
        "bSort": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "bFilter":   true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_book.php",

        "columnDefs": [
            {"className": "dt-center", "targets": "_all"},
            {
                className: "dt-center",
                "targets": -1,
                "data": null,
                "defaultContent":
                    "<a id='book_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='book_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]

    });

    let book_table = $('#view_book').DataTable();

    $('#view_book tbody').on('click', '#book_edit', function () {
        let data = book_table.row($(this).parents('tr')).data();

        $('[name ="select_author"]').val(data[7]).trigger('change');
        $('[name ="select_translator"]').val(data[15]).trigger('change');
        $('[name ="select_type"]').val(data[9]).trigger('change');
        $('[name ="select_publisher"]').val(data[8]).trigger('change');
        $('[name ="select_category"]').val(data[18].split(',')).trigger('change');


        $('[name ="BookId"]').val(data[0]);
        $('[name ="bookName"]').val(data[2]);
        $('[name ="BookDes"]').summernote('code', data[3]);
        $('[name ="book_weight"]').val(data[10]);
        $('[name ="book_price"]').val(data[17]);
        $('[name ="book_latest_price"]').val(data[5]);
        $('[name ="book_qty"]').val(data[6]);
        $('[name ="book_isbn"]').val(data[1]);
        $('[name ="book_page"]').val(data[16]);

        if (data[19] == 1) {
            $('#best_seller').prop('checked', true);
        } else {
            $('#best_seller').prop('checked', false);
        }

        if (data[20] == 1) {
            $('#seller_picks').prop('checked', true);
        } else {
            $('#seller_picks').prop('checked', false);
        }

        let preloaded = [
            {id: 1, src: 'img/book/' + data[11] + ''},
            {id: 2, src: 'img/book/' + data[12] + ''},
            {id: 3, src: 'img/book/' + data[13] + ''},
            {id: 4, src: 'img/book/' + data[14] + ''}
        ];

        $('.input-images-1').remove();
        $('#preload_img').append(' <div class="input-images-1" style="padding-top: .5rem;"></div>');
        $('.input-images-1').imageUploader({
            preloaded: preloaded,
            imagesInputName: 'photos',
            preloadedInputName: 'old'
        });

        $('#modal-edit-book').modal('show');
    });

    $('#view_book tbody').on('click', '#book_dlt', function () {
        let data = book_table.row($(this).parents('tr')).data();
        $('#modal-dlt-book').modal('show');
        $('[name ="cid"]').val(data[0]);
    });

    ////Start Update Book
    $('.bookUpdate').on('submit', function (e) {
        e.preventDefault();

        let best_seller = "";
        let Seller_picks = "";

        if ($('#best_seller').is(":checked")) {
            best_seller = 1;
        } else {
            best_seller = 0;
        }

        if ($('#seller_picks').is(":checked")) {
            Seller_picks = 1;
        } else {
            Seller_picks = 0;
        }

        let bookName = $('[name ="bookName"]').val();
        let BookDes = $('[name ="BookDes"]').val();
        let book_weight = $('[name ="book_weight"]').val();
        let book_price = $('[name ="book_price"]').val();
        let book_latest_price = $('[name ="book_latest_price"]').val();
        let book_qty = $('[name ="book_qty"]').val();
        let book_isbn = $('[name ="book_isbn"]').val();
        let book_page = $('[name ="book_page"]').val();
        let select_author = $('[name ="select_author"]').val();
        let select_translator = $('[name ="select_translator"]').val();
        let select_type = $('[name ="select_type"]').val();
        let select_publisher = $('[name ="select_publisher"]').val();
        let select_category = $('[name ="select_category"]').val();

        if (bookName == "" || BookDes == "" || book_weight == "" || book_price == "" || book_latest_price == "" || book_qty == "" || book_isbn == "" || book_page == "" || select_author == "" || select_translator == "" || select_type == "" || select_publisher == "" || select_category == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let formData = new FormData(this);
            formData.append('check', 'update');
            formData.append('cats', select_category);
            formData.append('best_seller', best_seller);
            formData.append('seller_picks', Seller_picks);

            $.ajax({
                type: 'POST',
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                url: 'controllers/books.php',
                success: function (data) {
                    if (data == 1) {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (data == 3) {
                        toastr.error('Book already exists !!');
                    } else {
                        toastr.error('Failed !!');
                    }

                }
            });
        }
    });
    ////END Update Book

    ////Start Delete Book
    $("#dlt_book_btn").click(function (e) {
        e.preventDefault();
        let cid = $('[name ="cid"]').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/books.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Deleted successfully!');
                    $('#modal-dlt-book').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Delete Book

    ////End View Book

    ////Save slider form Data
    $('.sliderForm').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/slider.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '2') {
                    console.log(xmlHttp.responseText);
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    console.log(xmlHttp.responseText);
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            }
        };
    });

    $('[name ="sliderFile"]').change(function (e) {
        let name = e.target.files[0].name;
        let ext = name.split('.').pop().toLowerCase();

        let frm = $(this).parents('form');

        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
        }
        let fsize = e.target.files[0].size;
        if (fsize > 2000000) {
            alert("Image File Size is very large");
        } else {
            if (e.target.files && e.target.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $(frm).find('img[name ="imagePreview"]').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            }

        }
    });
    ////End slider form Data

    ////Start Banner form Data
    $('.bannerForm').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/banner.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '2') {
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            }
        };
    });

    $('[name ="bannerFile"]').change(function (e) {
        let name = e.target.files[0].name;
        let ext = name.split('.').pop().toLowerCase();

        let frm = $(this).parents('form');

        if (jQuery.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
            alert("Invalid Image File");
        }
        let fsize = e.target.files[0].size;
        if (fsize > 2000000) {
            alert("Image File Size is very large");
        } else {
            if (e.target.files && e.target.files[0]) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    $(frm).find('img[name ="imagePreview"]').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            }

        }
    });
    ////End Banner form Data

    ////Day of thhe Book
    $('.dayBookForm').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/dayofbook.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '2') {
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                }
            }
        };
    });
    ////END Day of the Book

    ////start View Blog Post

    ////Start Add Blog Post
    $('#blog_post_Add').on('submit', function (e) {
        e.preventDefault();
        let auName = $('#postTitle').val();
        if (auName == "") {
            toastr.success('Blog must be filled out!');
            return;
        } else {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.open('POST', 'controllers/blog_post.php', true);
            let formData = new FormData(this);
            formData.append('check', 'insert');
            xmlHttp.send(formData);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                    if (xmlHttp.responseText == '1') {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (xmlHttp.responseText == '3') {
                        toastr.error('Blog already exists !!');
                    } else {
                        toastr.error('Sorry, there was an error uploading your file.');
                    }
                }
            };
        }
    });
    ////End Add Blog Post

    $('#view_blog_post').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true,

        "aLengthMenu": [[5, 10, 25, 50, 100, -1], [5, 10, 25, 50, 100, "All"]],
        "pageLength": 5,
        "processing": true,
        "serverSide": true,
        "ajax": "controllers/view_blog_post.php",

        "columnDefs": [{"className": "dt-center", "targets": "_all"},
            {
                className: "dt-center",
                "targets": 3,
                "data": null,
                "render": function (data, type, JsonResultRow, meta) {
                    return '<img width="auto" height="40px" src="img/blog/' + JsonResultRow[3] + '" rel="' + JsonResultRow[3] + '"/>';
                }
            }
            ,
            {
                className: "dt-center",
                "targets": -1,
                "data": null,
                "defaultContent":
                    "<a id='blog_post_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='blog_post_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]

    });

    let blog_post__table = $('#view_blog_post').DataTable();

    $('#view_blog_post tbody').on('click', '#blog_post_edit', function () {
        let data = blog_post__table.row($(this).parents('tr')).data();
        $('[name ="BlogPostId"]').val(data[0]);
        $('[name ="postTitle"]').val(data[1]);
        $('[name ="postDes"]').summernote('code', data[2]);
        $('[name ="imgName"]').text(data[3]);
        $('[name ="select_cats"]').val(data[5]).trigger('change');
        $('#modal-edit-blog-post').modal('show');
    });

    $('#view_blog_post tbody').on('click', '#blog_post_dlt', function () {
        let data = blog_post__table.row($(this).parents('tr')).data();
        $('#modal-dlt-blog-post').modal('show');
        $('[name ="cid"]').val(data[0]);
    });

    $('.blogPostUpdate').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/blog_post.php', true);
        let formData = new FormData(this);
        formData.append('check', 'update');
        xmlHttp.send(formData);
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-edit-blog-post').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Blog Already exists !!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_blog_post_btn").click(function (e) {
        e.preventDefault();
        let cid = $('[name ="cid"]').val();
        let dataString = 'cid=' + cid + '&check=' + 'delete';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/blog_post.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-blog-post').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });

    //////Delivery Cost
    $('[name ="select_country"]').on('select2:select', function (e) {
        e.preventDefault();
        let data = $('[name ="select_country"]').val();
        let dataString = 'id=' + data + '&check=' + 'find';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/delivery_cost.php',
            success: function (response) {
                let data = JSON.parse(response);
                 let oneKg = data.one_kg;
                 let per_kg = data.per_kg;
                 let ten_kg = data.ten_kg;

                $('[name ="f_price"]').val(oneKg);
                $('[name ="per_price"]').val(per_kg);
                $('[name ="ten_price"]').val(ten_kg);

            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    $('#Delivery_cost').on('submit', function (e) {
        e.preventDefault();
        let data = $('[name ="select_country"]').val();
        let f_price = $('[name ="f_price"]').val();
        let per_price = $('[name ="per_price"]').val();
        let ten_price = $('[name ="ten_price"]').val();
        let dataString = 'id=' + data + '&check=' + 'update' + '&f_price=' + f_price + '&per_price=' + per_price + '&ten_price='+ten_price;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/delivery_cost.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                } else {
                    toastr.error('Failed !!');
                }
            }
        });
    });


    $('#Dollar_rate').on('submit', function (e) {
        e.preventDefault();
        let data = $('[name ="dollar_rate"]').val();
        let dataString = 'rate=' + data + '&check=' + 'dollar';
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/delivery_cost.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                } else {
                    toastr.error('Failed !!');
                }
            }
        });
    });

    //////End Delivery Cost

</script>
</body>
</html>
