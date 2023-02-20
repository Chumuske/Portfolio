<!DOCTYPE html>
<html lang="en">

<head>

    <title>Portfolio</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="assets/css/argon.css?v=1.1.0" type="text/css">
    <script src="js/jquery.min.js"></script>

    <?php
    
    include("dbcon.php");
    $get_contact_info = mysqli_query($con, "SELECT * FROM contact_tbl");


    ?>
</head>

<body class="bg-dark text-white">

<h1 class="text-center display-1 mt-8 text-danger">User Messages</h1>

<div class="container px-4 py-4">
    <div class="table-responsive">
        <table class="table align-items-center table-light table-flush">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Message</th>
                </tr>
            </thead>
            <tbody class="list">
                <?php foreach($get_contact_info as $row){ ?>
                <tr>
                    <td class="budget">
                        <?php echo $row['user_name']; ?>
                    </td>
                    <td class="budget">
                        <?php echo $row['user_email']; ?>
                    </td>
                    <td class="budget">
                        <button class="btn btn-sm bg-gradient-primary text-white" data-toggle="modal" data-keyboard="false" data-backdrop="static" data-target="#view_user_message" data-message="<?php echo $row['user_message']; ?>">View Message</button>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>

    <!-- See Information -->
    <div class="col-md-4">
        <div class="modal fade" id="view_user_message" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
            <div class="modal-dialog modal-dark modal-dialog-centered modal-" role="document">
                <div class="modal-content bg-gradient-dark">

                    <div class="modal-header">
                        <h6 class="modal-title" id="modal-title-notification">User Message</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">

                        <div class="py-3 text-center">
                        <textarea class="form-control text-black" id="user_message" name="message" placeholder="Message..." rows="10" required></textarea>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Core -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/js-cookie/js.cookie.js"></script>
    <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
    <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
    <!-- Optional JS -->
    <script src="assets/vendor/select2/dist/js/select2.min.js"></script>
    <script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="assets/vendor/quill/dist/quill.min.js"></script>
    <script src="assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
    <script src="assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="js/typing.js"></script>
    <!-- Argon JS -->
    <script src="assets/js/argon.js?v=1.1.0"></script>
    <script src="js/add.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>

</body>

</html>