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
    } else if (isset($_GET['list_book'])) {
        include("includes/list_translator.php");
    } else if (isset($_GET['add_book'])) {
        include("includes/addTranslator.php");
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
        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'insert';
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

        "columnDefs": [{
            "targets": -1,
            "data": null,
            "defaultContent":
                "<center><a id='cats_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='cats_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a></center>"
        }]
    });

    let cats_table = $('#view_cats').DataTable();

    $('#view_cats tbody').on('click', '#cats_edit', function () {
        let data = cats_table.row($(this).parents('tr')).data();
        $('[name ="catsName"]').val(data[1]);
        $('[name ="catsId"]').val(data[0]);
        $('#modal-editCats').modal('show');
    });

    $('#view_cats tbody').on('click', '#cats_dlt', function () {
        let data = cats_table.row($(this).parents('tr')).data();
        $('#modal-dlt').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Category

    ////Start Category Update
    $('.catsUpdate').on('submit', function (e) {
        e.preventDefault();
        let id = $('[name ="catsId"]').val();
        let name = $('[name ="catsName"]').val();

        if (name == null || name == "") {
            toastr.error('Please Fill all Field !!');
            return;
        } else {
            let dataString = 'name=' + name + '&check=' + 'update' + '&id=' + id;
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
            {
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
            {
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

        "columnDefs": [{
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

    ////Start Add Author
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
            {
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

</script>
</body>
</html>
