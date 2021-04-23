<?php
$title = 'Client';

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
    <!--  datatable-->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title text-uppercase"><b>Add new client</b></h3>
                            </div>

                            <?php
                            include '_latest.php'
                            ?>

                            <form id="quickForm">
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label for="f_name" class="col-12">Client Name</label>
                                        <div class="col-6">
                                            <input class="form-control" id="f_name" type="text"
                                                   placeholder="First name">
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" id="l_name" type="text" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="org">Organizaton</label>
                                        <input class="form-control" id="org" type="text" placeholder="Organization">
                                    </div>

                                    <div class="form-group row">
                                        <label for="contact_1" class="col-6">Personal Contact</label>
                                        <label for="contact_2" class="col-6">Organization Contact</label>
                                        <div class="col-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input id="contact_1" type="text" class="form-control"
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input id="contact_2" type="text" class="form-control"
                                                       data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input class="form-control" id="address" type="text" placeholder="Organization">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                               placeholder="Enter email">
                                    </div>

                                    <div class="form-group row">
                                        <label for="username" class="col-4">Username</label>
                                        <label for="password" class="col-4">Password</label>
                                        <label for="password" class="col-4">Confirm password</label>
                                        <div class="col-4">
                                            <input class="form-control" id="username" type="text"
                                                   placeholder="Username">
                                        </div>
                                        <div class="col-4">
                                            <input type="password" name="password" class="form-control" id="password"
                                                   placeholder="Password">
                                        </div>
                                        <div class="col-4">
                                            <input type="password" name="password" class="form-control" id="password"
                                                   placeholder="Confirm assword">
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title text-uppercase"><b>All Client Data</b></h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Client ID</th>
                                        <th>First name</th>
                                        <th>Username</th>
                                        <th>Personal contact</th>
                                        <th>Organization</th>
                                        <th>Status</th>
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
                                        <th>Client</th>
                                        <th>First name</th>
                                        <th>Username</th>
                                        <th>Personal contact</th>
                                        <th>Organization</th>
                                        <th>Status</th>
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
<script>
    $(function () {
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</html>
