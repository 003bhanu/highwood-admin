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

              <div class="row">
                <div class="col-md-2 col-sm-4 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                      <span class="info-box-custom-data">999</span>
                    </div>
                  </div>
                </div>

                <div class="col-md-10 col-sm-8 col-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-gradient-olive"><?php echo $icon ?></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Last Record Data</span>
                      <span class="info-box-custom-data">Lorem ipsum dolor sit amet, consectetur.</span>
                    </div>
                    <button type="submit" class="btn btn-info font-weight-bold mr-1 text-uppercase"><i
                        class="fas fa-arrow-down"></i> Load
                    </button>
                    <button type="submit" class="btn btn-danger font-weight-bold mr-1 text-uppercase"><i
                        class="fas fa-times"></i> Delete
                    </button>
                  </div>
                </div>
              </div>

              <form id="quickForm">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="f_name" class="col-12">Client Name</label>
                    <div class="col-6">
                      <input class="form-control" id="f_name" type="text" placeholder="First name">
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
                        <input id="contact_1" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input id="contact_2" type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
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
                    <label for="username" class="col-6">Username</label>
                    <label for="password" class="col-6">Password</label>
                    <div class="col-6">
                      <input class="form-control" id="username" type="text" placeholder="Username">
                    </div>
                    <div class="col-6">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
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
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </thead>
                  <tbody>

                  <tr>
                    <td>Gecko</td>
                    <td>Netscape 7.2</td>
                    <td>Win 95+ / Mac OS 8.6-9.2</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Browser 8</td>
                    <td>Win 98SE+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Netscape Navigator 9</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.0</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.1</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.1</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.2</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.2</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.3</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.3</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.4</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.4</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.5</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.6</td>
                    <td>Win 95+ / OSX.1+</td>
                    <td>1.6</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.7</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.7</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Mozilla 1.8</td>
                    <td>Win 98+ / OSX.1+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Seamonkey 1.1</td>
                    <td>Win 98+ / OSX.2+</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Gecko</td>
                    <td>Epiphany 2.20</td>
                    <td>Gnome</td>
                    <td>1.8</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.2</td>
                    <td>OSX.3</td>
                    <td>125.5</td>
                    <td>A</td>
                  </tr>
                  <tr>
                    <td>Webkit</td>
                    <td>Safari 1.3</td>
                    <td>OSX.3</td>
                    <td>312.8</td>
                    <td>A</td>
                  </tr>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
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
