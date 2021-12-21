<?php include_once 'inc/head.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <title>PG3ENTERTAINMENT</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<!-- body -->



<body>

   <?php include_once 'inc/header.php';  ?>
   <!-- end header -->

   <section class="about-banner">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h1>About</h1>
                <p>We are one of the best modeling agency in India</p>
            </div>
        </div>
    </div>
</section>

<section class="line_1"></section>


<?php include 'inc/navbar-small.php'; ?>

<section class="line_1"></section>

<section class="founder">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <h4 class="mb-3">Founder</h4>
                <p class="text-justify">"At the outset, we introduce ourselves as Pg3Entertainment an ambitious Group of young, energetic,creative & proficient professionals of diverse skills with rich experience in the Glamour" and Entertainment Industry. We have a combined experience of managing & "Organising prestigious events like beauty pageants,Next Top Model & Indian Excellence Award, fashion Shows,Rock Shows,Star Nites, Youth Festivals,Private Parties, Musical Nites,Product Launches etc., across India with aplomb. Pg3Entertainment is here to simplify & make things easier to provide excellent services to the clients. Every event organized I managed I coordinated by us is an excellent opportunity for entertainment,growth,personality development and confidence building. From our in-house staff to our many clients and participants;every one" experiences the magic.</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                      <a href="https://www.facebook.com/pg3entertainment"><img src="images/icon/icons-facebook.svg"></a>
                  </li>

                  <li class="list-inline-item">
                      <a href="https://www.instagram.com/invites/contact/?i=sx6d9tvmmdh2&utm_content=n2krj2l"><img src="images/icon/icons-instagram.svg"></a>
                  </li>

                  <li class="list-inline-item">
                      <a href=""><img src="images/icon/icons-twitter.svg"></a>
                  </li>
                  <li class="list-inline-item">
                      <a href=""><img src="images/icon/icons-youtube.svg"></a>
                  </li>
              </ul>
          </div>
          <div class="col-md">
            <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
        </div>
    </div>
</div>
</section> 

<section class="line"></section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <img src="images/banner/banner6.jpg" alt="Los Angeles" class="img-fluid" />
            </div>
            <div class="col-md">
                <h4 class="mb-3">We Are Probably One Of The Best Modeling Agency In India</h4>
                <p class="text-justify">"At the outset, we introduce ourselves as Pg3Entertainment an ambitious Group of young, energetic,creative & proficient professionals of diverse skills with rich experience in the Glamour" and Entertainment Industry. We have a combined experience of managing & "Organising prestigious events like beauty pageants,Next Top Model & Indian Excellence Award, fashion Shows,Rock Shows,Star Nites, Youth Festivals,Private Parties, Musical Nites,Product Launches etc., across India with aplomb. Pg3Entertainment is here to simplify & make things easier to provide excellent services to the clients. Every event organized I managed I coordinated by us is an excellent opportunity for entertainment,growth,personality development and confidence building. From our in-house staff to our many clients and participants;every one" experiences the magic.</p>
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