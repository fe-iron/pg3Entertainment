<?php include_once 'inc/head.php';  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <title>PG3ENTERTAINMENT</title>
        <link rel="stylesheet" href="css/contact.css" />
    </head>
    <!-- body -->

    <body>
        <?php include_once 'inc/header.php';  ?>
        <!-- end header -->

        <section class="contact-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h1>Contact Us</h1>
                        <p>We are here to listen you</p>
                    </div>
                </div>
            </div>
        </section>

       <section class="line_1"></section>
       <?php include 'inc/navbar-small.php'; ?>
       <section class="line_1"></section>

        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <h2 class="mb-4">Contact Information</h2>

                        <div class="contact-info mb-5">
                            <img src="images/call.png" />
                            <p>
                                <span class="font-weight-bold">CALL</span><br />
                                <a href="" class="text-dark">9717786307</a>
                            </p>
                        </div>

                        <div class="contact-info mb-5">
                            <img src="images/sms.png" />
                            <p>
                                <span class="font-weight-bold">EMAIL </span><br />
                                contact@pg3entertainment.in
                            </p>
                        </div>

                        <div class="contact-info mb-5">
                            <img src="images/gps.png" />
                            <p>
                                <span class="font-weight-bold">ADDRESS</span> <br />
                                Master Mujahid Alam House,<br />
                                Khanquah Road Kishanganj, <br />
                                Bihar-8855107
                            </p>
                        </div>
                    </div>

                    <div class="col-md">
                        <h2 class="mb-4">Contact Form</h2>
                        <form>
                            <div class="form-row">
                                <div class="col mb-2">
                                    <input type="text" class="form-control name" placeholder="Enter Your Name *" required="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-2">
                                    <input type="tel" class="form-control phone" placeholder="Enter Phone Number *" required="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-2">
                                    <input type="email" class="form-control email" placeholder="Enter Email Id *" required="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-2">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col mb-2">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="line"></section>

        <?php include_once"inc/footer.php";?>

        

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
