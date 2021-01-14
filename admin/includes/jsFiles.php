<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- date-range-picker -->
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script type="text/javascript" src="../assets/img_upld/image-uploader.min.js"></script>
<script>
    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });

    $(function () {
        // Summernote
        $('.textarea').summernote()
    })


    $(document).ready(function () {
        bsCustomFileInput.init();
        $("[name='my-checkbox']").bootstrapSwitch();
    });
    $(function () {
    $('.select2').select2();
    });

            // console.log(window.location.href.split('/')[window.location.href.split('/').length -1]);
        let url = window.location.href.split('/')[window.location.href.split('/').length -1];
        $('a[href="'+url+'"]').addClass("active");
        $('a[href="'+url+'"]').parents('.has-treeview').addClass("menu-open");
        $('a[href="'+url+'"]').parents('.nav-item').addClass("menu-open");
        // $('a[href="'+url+'"]').parents('.nav-treeview').attr("display","block");

    ///Image Upload
    let uploader = $('.input-images-1').imageUploader();

</script>

