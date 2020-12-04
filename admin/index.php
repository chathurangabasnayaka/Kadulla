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
    } else if (isset($_GET['news'])) {
        include("includes/addNews.php");
    } else if (isset($_GET['list_news'])) {
        include("includes/list_news.php");
    } else if (isset($_GET['list_book'])) {
        include("includes/list_book.php");
    } else if (isset($_GET['addBook'])) {
        include("includes/addBook.php");
    }else if (isset($_GET['list_pdf'])) {
        include("includes/list_pdf.php");
    }else if (isset($_GET['add_pdf'])) {
        include("includes/addPDF.php");
    }else if (isset($_GET['app_version'])) {
        include("includes/appVersion.php");
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
        let lan = $('#select_lan').val();
        let name = $('#catsName').val();
        if (lan == null) {
            toastr.error('Please select language !!');
            return;
        } else {
            let dataString = 'lan=' + lan + '&name=' + name;
            $.ajax({
                type: 'POST',
                data: dataString,
                url: 'controllers/addCats.php',
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

    let table = $('#view_cats').DataTable();

    $('#view_cats tbody').on('click', '#cats_edit', function () {
        let data = table.row($(this).parents('tr')).data();
        $('[name ="catsName"]').val(data[1]);
        $('[name ="select_lan"]').val(data[4]).trigger('change');
        $('[name ="catsId"]').val(data[3]);
        $('#modal-editCats').modal('show');
    });

    $('#view_cats tbody').on('click', '#cats_dlt', function () {
        let data = table.row($(this).parents('tr')).data();
        $('#modal-dlt').modal('show');
        $('[name ="cid"]').val(data[3]);
    });
    ////End View Category

    ////Start Category Update
    $('.catsUpdate').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/updateCats.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-editCats').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Category already exists !!');
                    $('#modal-editCats').modal('hide');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_Catsbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updateCats.php',
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

    ////Start Add Author
    $('#authorAdd').on('submit', function (e) {
        e.preventDefault();
        let auName = $('#authorName').val();
        if (auName == "") {
            alert("Author must be filled out ");
        } else {
            let xmlHttp = new XMLHttpRequest();
            xmlHttp.open('POST', 'controllers/addAuthor.php', true);
            xmlHttp.send(new FormData(this));
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                    if (xmlHttp.responseText == '1') {
                        toastr.success('Form data submitted successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    } else if (xmlHttp.responseText == '3') {
                        toastr.error('Author Image already exists !!');
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
        xmlHttp.open('POST', 'controllers/updateAuthor.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-editAuthor').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_authorbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updateAuthor.php',
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
    ////End Category Update

    ////Start Add News
    $('#select_lan').on("change", function () {
        let categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "controllers/load_Category.php",
            type: "POST",
            data: "categoryId=" + categoryId,
            success: function (response) {
                $("#select_cats").html(response);
            },
        });
    });

    $('#newsAdd').on('submit', function (e) {
        e.preventDefault();

        if ($("#select_lan").val() == null) {
            toastr.error('Sorry, Can not Empty Language');
            return;
        }

        if ($("#select_cats").val() == "Select Category") {
            toastr.error('Sorry, Can not Empty Category');
            return;
        }

        if ($("#select_au").val() == null) {
            toastr.error('Sorry, Can not Empty Author');
            return;
        }

        if ($('[name ="news_title"]').val() == "") {
            toastr.error('Sorry, Can not Empty Title');
            return;
        }

        if ($('[name ="newsDes"]').summernote('isEmpty')) {
            toastr.error('Sorry, Can not Empty Description');
            return;
        }

        if ($('[name ="newsDes"]').summernote('isEmpty') | $('[name ="newsDes"]').summernote('code')) {
            toastr.error('Sorry, Can not Empty Description');
            return;
        }

        let formData = new FormData(this);
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/addNews.php', true);
        xmlHttp.send(formData);
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('News Image already exists !!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });
    ////End Add News

    ////start View News
    $('#view_news').DataTable({
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
        "ajax": "controllers/view_news.php",

        "columnDefs": [
            {
                "targets": [2],
                "visible": false,
                "searchable": false
            }, {
                className: "dt-center",
                "targets": 3,
                "data": null,
                "render": function (data, type, JsonResultRow, meta) {
                    return '<img width="80px" height="80px" src="img/news/' + JsonResultRow[3] + '" rel="' + JsonResultRow[3] + '"/>';
                }
            }
            ,
            {
                className: "dt-center",
                "targets": 6,
                "data": null,
                "defaultContent":
                    "<a id='news_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='news_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]
    });

    let news_table = $('#view_news').DataTable();

    $('#view_news tbody').on('click', '#news_edit', function () {
        let data = news_table.row($(this).parents('tr')).data();
        $('[name ="newsId"]').val(data[0]);
        $('[name ="NewsTitle"]').val(data[1]);
        $('#select_lan').val(data[7]).trigger('change');
        $('#select_au').val(data[8]).trigger('change');
        $('[name ="newsDes"]').summernote('code', data[2]);
        $('[name ="imgName"]').text(data[3]);
        $('#modal-edit-news').modal('show');
    });

    $('#view_news tbody').on('click', '#news_dlt', function () {
        let data = news_table.row($(this).parents('tr')).data();
        $('#modal-dlt-news').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View News

    ////start Update News
    $('.newsUpdate').on('submit', function (e) {
        e.preventDefault();
        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/updateNews.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-edit-news').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_Newsbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updateNews.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-news').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End Update News

    ////Start Add Book
    $('#bookAdd').on('submit', function (e) {
        e.preventDefault();
        let date = $('[name="issue_date"]').val();

        var now = new Date();
        var dateString = moment(now).format('YYYY-MM-DD');

        if (Date.parse(date) - Date.parse(dateString) < 0) {
            toastr.error('Sorry, Selected date is in the past');
            return;
        }

        if (date == "") {
            toastr.error('Sorry, Can not save Data without Issue Date');
            return;
        }

        if ($("#select_lan").val() == null) {
            toastr.error('Sorry, Can not Empty Language');
            return;
        }

        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/addBook.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Sorry, Cannot add twice same book.!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };

    });
    ////End Add Book

    ////Start View Book
    $('#view_book').DataTable({
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
        "ajax": "controllers/view_book.php",

        "columnDefs": [
            {
                className: "dt-center",
                "targets": 4,
                "data": null,
                "defaultContent":
                    "<a id='book_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='book_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]
    });

    let book_table = $('#view_book').DataTable();

    $('#view_book tbody').on('click', '#book_edit', function () {
        let data = book_table.row($(this).parents('tr')).data();
        $('[name ="bookId"]').val(data[0]);
        $('[name ="bookLink"]').val(data[1]);
        $('[name ="issue_date"]').val(data[2]);
        $('#select_lan').val(data[4]).trigger('change');
        $('#modal-edit-book').modal('show');
    });

    $('#view_book tbody').on('click', '#book_dlt', function () {
        let data = book_table.row($(this).parents('tr')).data();
        $('#modal-dlt-book').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View Book

    ////Start update Book
    $('.bookUpdate').on('submit', function (e) {
        e.preventDefault();

        let date = $('[name="issue_date"]').val();
        var now = new Date();
        var dateString = moment(now).format('YYYY-MM-DD');

        if (Date.parse(date) - Date.parse(dateString) < 0) {
            toastr.error('Sorry, Selected date is in the past');
            return;
        }

        if (date == "") {
            toastr.error('Sorry, Can not save Data without Issue Date');
            return;
        }

        if ($("#select_lan").val() == null) {
            toastr.error('Sorry, Can not Empty Language');
            return;
        }

        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/updateBook.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-edit-book').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3'){
                    toastr.error('Sorry, Cannot add twice same book.!')
                }else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_bookbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updateBook.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
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
    ////End update Book

    ////Start Add PDF
    $('#PDFAdd').on('submit', function (e) {
        e.preventDefault();
        let date = $('[name="issue_date"]').val();

        var now = new Date();
        var dateString = moment(now).format('YYYY-MM-DD');

        if (Date.parse(date) - Date.parse(dateString) < 0) {
            toastr.error(date +" "+ dateString);
            return;
        }

        if (date == "") {
            toastr.error('Sorry, Can not save Data without Issue Date');
            return;
        }

        if ($("#select_lan").val() == null) {
            toastr.error('Sorry, Can not Empty Language');
            return;
        }

        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/addPDF.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3') {
                    toastr.error('Sorry, Cannot add twice same PDF.!');
                } else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };

    });
    ////End Add PDF

    ////Start View PDF
    $('#view_pdf').DataTable({
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
        "ajax": "controllers/view_pdf.php",

        "columnDefs": [
            {
                className: "dt-center",
                "targets": 4,
                "data": null,
                "defaultContent":
                    "<a id='pdf_edit' href='#'><i class='fas fa-edit' style='color:#00b44e'></i></a> <a href='#' id='pdf_dlt'><i class='fas fa-trash-alt' style='color:#a71d2a'></i></a>"
            }
        ]
    });

    let pdf_table = $('#view_pdf').DataTable();

    $('#view_pdf tbody').on('click', '#pdf_edit', function () {
        let data = pdf_table.row($(this).parents('tr')).data();
        $('[name ="bookId"]').val(data[0]);
        $('[name ="bookLink"]').val(data[1]);
        $('[name ="issue_date"]').val(data[2]);
        $('#select_lan').val(data[4]).trigger('change');
        $('#modal-edit-pdf').modal('show');
    });

    $('#view_pdf tbody').on('click', '#pdf_dlt', function () {
        let data = pdf_table.row($(this).parents('tr')).data();
        $('#modal-dlt-pdf').modal('show');
        $('[name ="cid"]').val(data[0]);
    });
    ////End View PDF

    ////Start update PDF
    $('.PDFUpdate').on('submit', function (e) {
        e.preventDefault();

        let date = $('[name="issue_date"]').val();
        var now = new Date();
        var dateString = moment(now).format('YYYY-MM-DD');

        if (Date.parse(date) - Date.parse(dateString) < 0) {
            toastr.error('Sorry, Selected date is in the past');
            return;
        }

        if (date == "") {
            toastr.error('Sorry, Can not save Data without Issue Date');
            return;
        }

        if ($("#select_lan").val() == null) {
            toastr.error('Sorry, Can not Empty Language');
            return;
        }

        let xmlHttp = new XMLHttpRequest();
        xmlHttp.open('POST', 'controllers/updatePDF.php', true);
        xmlHttp.send(new FormData(this));
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                if (xmlHttp.responseText == '1') {
                    toastr.success('Form data submitted successfully!');
                    $('#modal-edit-pdf').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else if (xmlHttp.responseText == '3'){
                    toastr.error('Sorry, Cannot add twice same book.!')
                }else {
                    toastr.error('Sorry, there was an error uploading your file.');
                }
            }
        };
    });

    $("#dlt_pdfbtn").click(function (e) {
        e.preventDefault();
        let cid = $('#cid').val();
        let dataString = 'cid=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updatePDF.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    $('#modal-dlt-pdf').modal('hide');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End update PDF

    ////Update App Version
    ////Start update PDF
    $('#appVersion').on('submit', function (e) {
        e.preventDefault();

        let cid = $('#appVer').val();
        let dataString = 'appVer=' + cid;
        $.ajax({
            type: 'POST',
            data: dataString,
            url: 'controllers/updateApp.php',
            success: function (data) {
                if (data == 1) {
                    toastr.success('Form data Updated successfully!');
                    setTimeout(function () {
                        location.reload();
                    }, 2000);
                } else {
                    toastr.error('Failed !!');
                }

            }
        });
    });
    ////End App Version

</script>
</body>
</html>
