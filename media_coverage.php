<?php include_once 'inc/head.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
   <title>PG3ENTERTAINMENT</title>
    <link rel="stylesheet" href="css/media_coverage.css">
</head>
<!-- body -->


    
  <body>
      
       <?php include_once 'inc/header.php';  ?>
    <!-- end header -->

    <section class="media_banner">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h1>Media Coverage</h1>
                    <p>We are one of the best modeling agency in India</p>
                </div>
            </div>
        </div>
    </section>

    <section class="line_1"></section>
    <?php include 'inc/navbar-small.php'; ?>
    <section class="line_1"></section>

      <section class="media">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="line"></section>



        <?php include_once"inc/footer.php";  ?>
        <script type="text/javascript">
           

            // navbar color chenge on scroll
            $(function () {
                $(document).scroll(function () {
                    var $nav = $(".navbar-fixed-top");
                    $nav.toggleClass("scrolled", $(this).scrollTop() > $nav.height());
                });
            });
        </script>



  </body>

</html>