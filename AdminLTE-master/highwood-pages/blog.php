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
    <!--datatable-->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!--dropzone-->
    <link rel="stylesheet" href="../plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
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
                                <h3 class="card-title text-uppercase"><b>Add new blog</b></h3>
                            </div>

                            <?php
                            include '_latest.php'
                            ?>

                            <form id="quickForm">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Blog title</label>
                                        <input class="form-control" id="title" type="text" placeholder="Title text">
                                    </div>

                                    <div class="form-group">
                                        <label for="s_content">summarized Blog content</label>
                                        <input class="form-control" id="s_content" type="text" placeholder="Title text">
                                    </div>

                                    <div class="form-group">
                                        <label for="f_content">Full blog ontent</label>
                                        <textarea id="f_content" class="form-control" rows="3"
                                                  placeholder="Blog text content"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="card-body" style="padding-top: 0">
                                        <label for="actions">Select Image(s)</label>
                                        <div id="actions" class="row">
                                            <div class="col-lg-6">
                                                <div class="btn-group w-100">
                      <span class="btn btn-success col fileinput-button">
                        <i class="fas fa-plus"></i>
                        <span>Add files</span>
                      </span>
                                                    <button type="submit" class="btn btn-primary col start">
                                                        <i class="fas fa-upload"></i>
                                                        <span>Start upload</span>
                                                    </button>
                                                    <button type="reset" class="btn btn-warning col cancel">
                                                        <i class="fas fa-times-circle"></i>
                                                        <span>Cancel upload</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 d-flex align-items-center">
                                                <div class="fileupload-process w-100">
                                                    <div id="total-progress" class="progress progress-striped active"
                                                         role="progressbar"
                                                         aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                        <div class="progress-bar progress-bar-success" style="width:0;"
                                                             data-dz-uploadprogress></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table table-striped files" id="previews">
                                            <div id="template" class="row mt-2">
                                                <div class="col-auto">
                                                    <span class="preview"><img src="data:," alt=""
                                                                               data-dz-thumbnail/></span>
                                                </div>
                                                <div class="col d-flex align-items-center">
                                                    <p class="mb-0">
                                                        <span class="lead" data-dz-name></span>
                                                        (<span data-dz-size></span>)
                                                    </p>
                                                    <strong class="error text-danger" data-dz-errormessage></strong>
                                                </div>
                                                <div class="col-4 d-flex align-items-center">
                                                    <div class="progress progress-striped active w-100"
                                                         role="progressbar" aria-valuemin="0"
                                                         aria-valuemax="100" aria-valuenow="0">
                                                        <div class="progress-bar progress-bar-success" style="width:0;"
                                                             data-dz-uploadprogress></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-primary start">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start</span>
                                                        </button>
                                                        <button data-dz-remove class="btn btn-warning cancel">
                                                            <i class="fas fa-times-circle"></i>
                                                            <span>Cancel</span>
                                                        </button>
                                                        <button data-dz-remove class="btn btn-danger delete">
                                                            <i class="fas fa-trash"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button id="submit" type="button" class="btn btn-primary text-uppercase font-weight-bold"><i
                                                class="fas fa-save"></i> submit
                                    </button>
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
                                <h3 class="card-title text-uppercase"><b>All blog Data</b></h3>
                            </div>

                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th>Blog ID</th>
                                        <th>Title</th>
                                        <th>Summary</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>Loading..</td>
                                        <td>Loading..</td>
                                        <td>Loading..</td>
                                        <td>Loading..</td>
                                    </tr>

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Blog ID</th>
                                        <th>Title</th>
                                        <th>Summary</th>
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
<!--dropzone-->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<?php
include '_alert.php';
?>
<script>
    $('#submit').click(function () {
        if(false) {
            sweetAlert("success", "Blog saved successfully!");
        }else {
            sweetAlert("error", "Blog save failed!");
        }
    });

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

   Dropzone.autoDiscover = false;

   var previewNode = document.querySelector("#template")
   previewNode.id = ""
   var previewTemplate = previewNode.parentNode.innerHTML
   previewNode.parentNode.removeChild(previewNode)

   var myDropzone = new Dropzone(document.body, {
       url: "/target-url",
       thumbnailWidth: 80,
       thumbnailHeight: 80,
       parallelUploads: 20,
       previewTemplate: previewTemplate,
       autoQueue: false,
       previewsContainer: "#previews",
       clickable: ".fileinput-button"
   })

   myDropzone.on("addedfile", function (file) {
       file.previewElement.querySelector(".start").onclick = function () {
           myDropzone.enqueueFile(file)
       }
   })

   myDropzone.on("totaluploadprogress", function (progress) {
       document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
   })

   myDropzone.on("sending", function (file) {
       document.querySelector("#total-progress").style.opacity = "1"
       file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
   })

   myDropzone.on("queuecomplete", function (progress) {
       document.querySelector("#total-progress").style.opacity = "0"
   })

   document.querySelector("#actions .start").onclick = function () {
       myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
   }
   document.querySelector("#actions .cancel").onclick = function () {
       myDropzone.removeAllFiles(true)
   }
</script>
</html>
