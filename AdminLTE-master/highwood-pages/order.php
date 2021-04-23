<?php
$title = 'Orders';

$icon_2x = <<<EOD
<i class="fas fa-user-alt fa-2x"></i>
EOD;

$icon = <<<EOD
<i class="fas fa-user-alt"></i>
EOD;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!--datatable-->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="../plugins/ekko-lightbox/ekko-lightbox.css">
    <style>
        .info-box {
            box-shadow: none;
            border-radius: 0;a
        }

        .info-box-custom-data {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php
    include '_navbar.php';
    ?>
    <?php
    include '_sidebar.php';
    ?>
    <div class="content-wrapper">
        <?php
        include '_header.php';
        ?>

        <section class="content row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title text-uppercase"><b>All order data</b></h3>
                            </div>

                            <?php
                            include '_latest.php'
                            ?>

                            <div class="row">
                                <div class="col-12">
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="card card-primary">
                                                        <!--                            <div class="card-header">-->
                                                        <!--                              <h3 class="card-title text-uppercase"><b>All Client Data</b></h3>-->
                                                        <!--                            </div>-->

                                                        <div class="card-body">
                                                            <table id="example1"
                                                                   class="table table-bordered table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th>Order ID</th>
                                                                    <th>Client</th>
                                                                    <th>Delivery Status</th>
                                                                    <th>Date</th>
                                                                    <th>Contact</th>
                                                                    <th>Client ID</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>

                                                                <tr>
                                                                    <td>Loading..</td>
                                                                    <td>Loading..</td>
                                                                    <td>Loading..</td>
                                                                    <td>Loading..</td>
                                                                    <td>Loading..</td>
                                                                    <td>Loading..</td>
                                                                </tr>


                                                                </tbody>
                                                                <tfoot>
                                                                <tr>
                                                                    <th>Order ID</th>
                                                                    <th>Client</th>
                                                                    <th>Delivery Status</th>
                                                                    <th>Date</th>
                                                                    <th>Contact</th>
                                                                    <th>Client ID</th>
                                                                </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title text-uppercase"><b>Selected order details</b></h3>
                            </div>

                            <div class="row">
                                <div class="col-4">
                                    <form id="quickForm">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label>Order Date:</label>

                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                                                    </div>
                                                    <input type="text" class="form-control float-right"
                                                           id="reservation">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="org">Delivery Status</label>
                                                <input class="form-control" id="s-delivery" type="text"
                                                       placeholder="Organization">
                                            </div>

                                            <div class="form-group">
                                                <label for="org">User</label>
                                                <input class="form-control" id="s-contact" type="text"
                                                       placeholder="Organization">
                                            </div>

                                            <div class="form-group">
                                                <label for="org">Contact</label>
                                                <input class="form-control" id="s-contact" type="text"
                                                       placeholder="Organization">
                                            </div>

                                            <div class="form-group">
                                                <label for="f_content">Address</label>
                                                <textarea id="f_content" class="form-control" rows="3"
                                                          placeholder="Blog text content"></textarea>
                                            </div>

                                        </div>

                                    </form>

                                    <form id="quickForm">
                                        <div class="card-body">

                                            <div class="form-group">
                                                <label for="org">Total Amount</label>
                                                <input class="form-control form-control-lg" id="s-contact" type="text"
                                                       placeholder="Organization">
                                            </div>

                                            <div class="form-group">
                                                <label for="org">Paid Amount</label>
                                                <input class="form-control form-control-lg is-valid" id="s-contact" type="text"
                                                       placeholder="Organization">
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="col-8 p-5">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <h3 class="card-title font-weight-bold">Items in 003</h3>
                                                        </div>
                                                        <div class="col-9"></div>
                                                        <div class="col-1">
                                                            <h3 class="card-title font-weight-bold">Qty. <span style="color: #ff851b"><b>11</b></span></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.card-header -->
                                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                                    <table class="table table-head-fixed text-nowrap">
                                                        <thead>
                                                        <tr>
                                                            <th>Item ID</th>
                                                            <th>Name</th>
                                                            <th>Qty</th>
                                                            <th>Selling Price</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                            <td>Loading..</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                        <div class="col-4 mt-4">
                                            <form id="quickForm">
                                                <div class="card-body">

                                                        <label>Payment Photo</label>

                                                        <div class="filter-container p-0 row">
                                                            <div class="filtr-item col-10" data-category="3, 4" data-sort="red sample">
                                                                <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                                                                    <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                                                                </a>
                                                            </div>
                                                        </div>

                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-8 mt-4">
                                            <form id="quickForm">
                                                <div class="card-body">

                                                    <div class="form-group">
                                                        <label for="org">Payment Remainder</label>
                                                        <input class="form-control is-warning" id="s-contact" type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="org">New Payment Amount</label>
                                                        <input class="form-control" id="s-contact" type="text">
                                                    </div>

                                                    <div class="form-group">
                                                        <button class="btn btn-success text-uppercase font-weight-bold">Confirm New Payment</button>
                                                    </div>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <?php
    include '_footer.php';
    ?>
</div>
</body>
<script src="../plugins/jquery/jquery.min.js"></script>
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../plugins/jquery-validation/additional-methods.min.js"></script>
<script src="../dist/js/adminlte.min.js"></script>
<script src="../dist/js/demo.js"></script>
<!--datatable-->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<script>

    $(function () {
        $(document).on('click', '[data-toggle="lightbox"]', function (event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });

        $('.filter-container').filterizr({gutterPixels: 3});
        $('.btn[data-filter]').on('click', function () {
            $('.btn[data-filter]').removeClass('active');
            $(this).addClass('active');
        });
    })

    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
        $('#example3').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    // $(function () {
    //   $.validator.setDefaults({
    //     submitHandler: function () {
    //       alert("Form successful submitted!");
    //     }
    //   });
    //   $('#quickForm').validate({
    //     rules: {
    //       email: {
    //         required: true,
    //         email: true,
    //       },
    //       password: {
    //         required: true,
    //         minlength: 5
    //       },
    //       terms: {
    //         required: true
    //       },
    //     },
    //     messages: {
    //       email: {
    //         required: "Please enter a email address",
    //         email: "Please enter a vaild email address"
    //       },
    //       password: {
    //         required: "Please provide a password",
    //         minlength: "Your password must be at least 5 characters long"
    //       },
    //       terms: "Please accept our terms"
    //     },
    //     errorElement: 'span',
    //     errorPlacement: function (error, element) {
    //       error.addClass('invalid-feedback');
    //       element.closest('.form-group').append(error);
    //     },
    //     highlight: function (element, errorClass, validClass) {
    //       $(element).addClass('is-invalid');
    //     },
    //     unhighlight: function (element, errorClass, validClass) {
    //       $(element).removeClass('is-invalid');
    //     }
    //   });
    // });

    // $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //
    // $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //
    // $('[data-mask]').inputmask()

</script>
</html>
