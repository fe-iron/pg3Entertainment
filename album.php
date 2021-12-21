<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
   <title>PG3ENTERTAINMENT</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
   <?php include_once 'inc/header.php';  ?>
    <!-- end header -->

    <div class="Albumsbg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Albumstitlepage">
                        <h2>Albums</h2>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Albums -->
    <div class="Albums">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">

                        <span>It is a long established fact that a reader will be distracted by the readable <br>content of a page when looking at its layout. The point of using Lorem </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox">
                                <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox ">
                                <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album1.jpg" class="fancybox" rel="ligthbox">
                                <img src="images/album1.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album1.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 margin">
                    <div class="Albums-box">
                        <figure>
                            <a href="images/album2.jpg" class="fancybox" rel="ligthbox ">
                                <img src="images/album2.jpg" class="zoom img-fluid " alt="">
                            </a>
                            <span class="hoverle">
                        <a href="images/album2.jpg" class="fancybox" rel="ligthbox"><img src="images/search.png"></a>
                        </span>
                        </figure>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- end Albums -->

    <!--  footer -->
    <?php include_once 'inc/footer.php'; ?>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>