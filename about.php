<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About - Steamonitor</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/round-about.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <?php
        	include 'slidebar.php';
        ?>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    	<!-- Introduction Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">About Us
                                    <small>We are awesome</small>
                                </h1>
                                <p>The Steamonitor is a homework of discipline Software Project (Projeto de Software) of Federal University of Rio Grande do Norte (of portuguese Universidade Federal do Rio Grande do Norte).</p>
                            </div>
                        </div>

                        <!-- Team Members Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="page-header">Our Team</h2>
                            </div>
                            <div class="col-lg-4 col-sm-6 text-center">
                                <img class="img-circle img-responsive img-center" src="images/breno.jpg" alt="">
                                <h3>Breno Viana
                                    <small>Student</small>
                                </h3>
                            </div>
                            <div class="col-lg-4 col-sm-6 text-center">
                                <img class="img-circle img-responsive img-center" src="images/joao.jpg" alt="">
                                <h3>João Santana
                                    <small>Student</small>
                                </h3>
                            </div>
                            <div class="col-lg-4 col-sm-6 text-center">
                                <img class="img-circle img-responsive img-center" src="images/patricia.jpg" alt="">
                                <h3>Patrícia Cruz
                                    <small>Student</small>
                                </h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>