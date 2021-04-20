<?php
$title = 'Blog';

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

  <link rel="stylesheet" href="../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
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
        <div class="card card-primary card-outline card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <!--              tab buttons-->
              <li class="nav-item">
                <a class="nav-link active" id="tab-one-tab" data-toggle="pill" href="#tab-one"
                   role="tab" aria-controls="tab-one" aria-selected="true"><b class="text-uppercase">Category</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-two-tab" data-toggle="pill" href="#tab-two"
                   role="tab" aria-controls="tab-two" aria-selected="false"><b class="text-uppercase">Material</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-three-tab" data-toggle="pill" href="#tab-three"
                   role="tab" aria-controls="tab-three" aria-selected="false"><b class="text-uppercase">Size</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-four-tab" data-toggle="pill" href="#tab-four"
                   role="tab" aria-controls="tab-four" aria-selected="false"><b class="text-uppercase">Color</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-five-tab" data-toggle="pill" href="#tab-five"
                   role="tab" aria-controls="tab-five" aria-selected="false"><b class="text-uppercase">Route</b></a>
              </li>

            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">

              <!--              tab 1-->
              <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one-tab">
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-primary" style="box-shadow: none">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><b>Category</b></h3>
                          </div>

                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-12">
                              <div class="info-box" style="box-shadow: none">
                                <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                                  <span class="info-box-custom-data">999</span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-10 col-sm-8 col-12">
                              <div class="info-box" style="box-shadow: none">
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

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!--              tab 2-->
              <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two-tab">
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-primary" style="box-shadow: none">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><b>Material</b></h3>
                          </div>

                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-12">
                              <div class="info-box" style="box-shadow: none">
                                <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                                  <span class="info-box-custom-data">999</span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-10 col-sm-8 col-12">
                              <div class="info-box" style="box-shadow: none">
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

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!--              tab 3-->
              <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three-tab">
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-primary" style="box-shadow: none">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><b>Size</b></h3>
                          </div>

                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-12">
                              <div class="info-box" style="box-shadow: none">
                                <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                                  <span class="info-box-custom-data">999</span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-10 col-sm-8 col-12">
                              <div class="info-box" style="box-shadow: none">
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

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!--              tab 4-->
              <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four-tab">
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-primary" style="box-shadow: none">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><b>Color</b></h3>
                          </div>

                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-12">
                              <div class="info-box" style="box-shadow: none">
                                <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                                  <span class="info-box-custom-data">999</span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-10 col-sm-8 col-12">
                              <div class="info-box" style="box-shadow: none">
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


                          <div class="form-group row">

                            <label for="name" class="col-6">Color Name</label>
                            <label class="col-6">Select Color</label>
                            <div class="col-6">
                              <input class="form-control" id="name" type="text" placeholder="Color name text">
                            </div>
                            <div class="input-group my-colorpicker2 col-6">
                              <input type="text" class="form-control">
                              <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-square"></i></span>
                              </div>
                            </div>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <!--              tab 5-->
              <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five-tab">
                <section class="content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="card card-primary" style="box-shadow: none">
                          <div class="card-header">
                            <h3 class="card-title text-uppercase"><b>Route</b></h3>
                          </div>

                          <div class="row">
                            <div class="col-md-2 col-sm-4 col-12">
                              <div class="info-box" style="box-shadow: none">
                                <span class="info-box-icon bg-gradient-olive"><i class="fas fa-database"></i></span>

                                <div class="info-box-content">
                                  <span class="info-box-text font-weight-bold text-uppercase">Record Count</span>
                                  <span class="info-box-custom-data">999</span>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-10 col-sm-8 col-12">
                              <div class="info-box" style="box-shadow: none">
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
<!--tab 4-->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script>
  $(function () {

    // tab 4
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

    // $("#example1").DataTable({
    //   "responsive": true, "lengthChange": false, "autoWidth": false,
    //   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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

  $(function () {
    $.validator.setDefaults({
      submitHandler: function () {
        alert("Form successful submitted!");
      }
    });
    $('#quickForm').validate({
      rules: {
        email: {
          required: true,
          email: true,
        },
        password: {
          required: true,
          minlength: 5
        },
        terms: {
          required: true
        },
      },
      messages: {
        email: {
          required: "Please enter a email address",
          email: "Please enter a vaild email address"
        },
        password: {
          required: "Please provide a password",
          minlength: "Your password must be at least 5 characters long"
        },
        terms: "Please accept our terms"
      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });

  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function (file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function () {
      myDropzone.enqueueFile(file)
    }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function (progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function (file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function (progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function () {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function () {
    myDropzone.removeAllFiles(true)
  }
</script>
</html>
