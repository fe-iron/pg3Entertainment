<?php
	include 'admin/connection.php';

    $con = OpenCon();

   function multi_attach_mail($to, $subject, $message, $senderEmail, $senderName, $files = array()){ 
      // Sender info  
      $from = $senderName." <".$senderEmail.">";  
      $headers = "From: $from"; 

      // Boundary  
      $semi_rand = md5(time());  
      $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";  

      // Headers for attachment  
      $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";  

      // Multipart boundary  
      $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" . 
      "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n";  

      // Preparing attachment 
      if(!empty($files)){ 
         for($i=0;$i<count($files);$i++){ 
            if(is_file($files[$i])){ 
                  $file_name = basename($files[$i]); 
                  $file_size = filesize($files[$i]); 
                  
                  $message .= "--{$mime_boundary}\n"; 
                  $fp =    @fopen($files[$i], "rb"); 
                  $data =  @fread($fp, $file_size); 
                  @fclose($fp); 
                  $data = chunk_split(base64_encode($data)); 
                  $message .= "Content-Type: application/octet-stream; name=\"".$file_name."\"\n" .  
                  "Content-Description: ".$file_name."\n" . 
                  "Content-Disposition: attachment;\n" . " filename=\"".$file_name."\"; size=".$file_size.";\n" .  
                  "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n"; 
            } 
         } 
      } 
      
      $message .= "--{$mime_boundary}--"; 
      $returnpath = "-f" . $senderEmail; 
      
      // Send email 
      $mail = mail($to, $subject, $message, $headers, $returnpath);  
      
      // Return true if email sent, otherwise return false 
      if($mail){ 
         return true; 
      }else{ 
         return false; 
      } 
   }


?>

<?php

    if(isset($_GET['result'])){
        $error_msg = $_GET['result'];
    }else{
        $error_msg = "";
    }
    $msg = "";


    if(isset($_POST['email'])){
        $target_dir = "admin/upload/register/";
        $flag1 = false;
        $flag2 = false;
        $flag3 = false;

        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $fname = $_POST['fname'];
        $country = $_POST['country'];
        $number  = $_POST['number'];
        $email = $_POST['email'];
        $height = $_POST['height'];
        $occupation = $_POST['occupation'];
        $desc = $_POST['desc'];
        $designer_name = $_POST['designer_name'];
        $brand_name = $_POST['brand_name'];
        
        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png");

        //saving first image
        $img1 = $_FILES['img1']['name'];
        // echo $_FILES['photo']['name'];
        $target_file1 = $target_dir . basename($_FILES["img1"]["name"]);
        // Select file type
        $imageFileType1 = strtolower(pathinfo($target_file1,PATHINFO_EXTENSION));
        
        
        // Check extension
        if(in_array($imageFileType1,$extensions_arr) ){
        // Upload file
        if(move_uploaded_file($_FILES['img1']['tmp_name'],$target_dir.$img1)){
            // Insert record
            $flag1 = true;
        }
        }else{
            // echo $kyc;
            header("Location: registration_form.php?result=Image Saving Failed!".$img1);
        }

        //saving second image
        $img2 = $_FILES['img2']['name'];
        // echo $_FILES['photo']['name'];
        $target_file2 = $target_dir . basename($_FILES["img2"]["name"]);
        // Select file type
        $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));
        
        
        // Check extension
        if(in_array($imageFileType2,$extensions_arr) ){
        // Upload file
        if(move_uploaded_file($_FILES['img2']['tmp_name'],$target_dir.$img2)){
            // Insert record
            $flag2 = true;
        }
        }else{
            // echo $kyc;
            header("Location: registration_form.php?result=Image Saving Failed!".$img2);
        }


        //saving third image
        $img3 = $_FILES['img3']['name'];
        // echo $_FILES['photo']['name'];
        $target_file3 = $target_dir . basename($_FILES["img3"]["name"]);
        // Select file type
        $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));
        
        
        // Check extension
        if(in_array($imageFileType3,$extensions_arr) ){
        // Upload file
        if(move_uploaded_file($_FILES['img3']['tmp_name'],$target_dir.$img3)){
            // Insert record
            $flag3 = true;
        }
        }else{
            // echo $kyc;
            header("Location: registration_form.php?result=Image Saving Failed!".$img3);
        }


        if($flag1 && $flag2 && $flag3){
            $query = "INSERT INTO users (full_name, age, gender, country, number, email, height, occupation, father_name, image1, image2, image3, description)
                    values('$name', $age, '$gender', '$country', '$number', '$email', '$height', '$occupation', '$fname', '$img1', '$img2', '$img3', '$desc')";
            
            $result = mysqli_query($con,$query);

            if($result){
                    // $_SESSION['loan_id'] = mysqli_insert_id($conn);
                    $msg = "Successfully registered!";
                    
                    // Email configuration 
                    $to = $email; 
                    $from = 'contact@pg3entertainment.in';
                    $fromName = 'PG3 Entertainment'; 
                    
                    $subject = 'Regarding Registration with PG3Entertainment';  
                    
                    // Attachment files 
                    $files = array( 
                        'admin/upload/register/'. $img1, 
                        'admin/upload/register/'. $img2, 
                        'admin/upload/register/'. $img3
                    ); 
                    
                    $htmlContent = ' 
                        <center><h3>Thanks for Registration with PG3 Entertainment</h3></center><hr/>
                        <h4>These are the details that you have shared with us.</h4> <hr/>
                        <p><b>Full Name:</b> '.$name.'</p>
                        <p><b>Father Name:</b> '.$fname.'</p>
                        <p><b>Mobile Number:</b> '.$number.'</p>
                        <p><b>Email:</b> '.$email.'</p>
                        <p><b>Designer Name:</b> '.$designer_name.'</p>
                        <p><b>Brand Name:</b> '.$brand_name.'</p>
                        <p><b>Age:</b> '.$age.'</p>
                        <p><b>Gender:</b> '.$gender.'</p>
                        <p><b>Country:</b> '.$country.'</p>
                        <p><b>Height:</b> '.$height.'</p>
                        <p><b>Occupation:</b> '.$occupation.'</p>
                        <p><b>Description:</b> '.$desc.'</p>
                        <p><b>Total Attachments:</b> '.count($files).'</p>';
                    
                    // Call function and pass the required arguments 
                    $sendEmail = multi_attach_mail('pg3entertainment2@gmail.com', $subject, $htmlContent, $from, $fromName, $files); 
                    $sendEmail = multi_attach_mail($to, $subject, $htmlContent, $from, $fromName, $files); 
                    
                    
                    // Email sending status 
                    if($sendEmail){ 
                        $msg = $msg . ' and check your inbox/Spam for the confirmation.'; 
                    }else{ 
                        $msg = $msg . ' and Email sending failed!';
                    }
                    // header("Location: registration_form.php?result=".$msg);
            }else{
                //   echo mysqli_error($conn);
                    $msg = "Registration failed!";
                    // echo "update failed";
                    header("Location: registration_form.php?result=".$msg." at DB Saving!");
            }
            
        }
    }

    CloseCon($con);
?>


<?php include_once 'inc/head.php';  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
   <title>PG3 ENTERTAINMENT</title>
    <link rel="stylesheet" href="css/registration_form.css">
</head>
<!-- body -->
    
  <body>
      
       <?php include_once 'inc/header.php';  ?>
    <!-- end header -->

    <section class="registration-banner">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <h1>Registration Form</h1>
                    <p>We are one of the best modeling agency in India</p>
                </div>
            </div>
        </div>
    </section>

    <section class="line"></section>
      <section class="registration">
            <div class="container">
            <?php if($msg == "Successfully registered! and check your inbox/Spam for the confirmation."){ ?>
                <p class="text-success text-center font-weight-bold"><?php echo $error_msg; ?></p>
                <p class="text-success text-center font-weight-bold"><?php echo $msg; ?></p>
            <?php }else{ ?>
                <p class="text-danger text-center font-weight-bold"><?php echo $msg; ?></p>
                <p class="text-success text-center font-weight-bold"><?php echo $error_msg; ?></p>
            <?php } ?>
                <div class="row">
                    
                    <div class="col-md">
                        <h2 class="mb-4">Next top model registration & #LFW2K22</h2>
                        <form action="" method="post" id="reg_form"  enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Name *" name="name" required="" />
                                </div>
                                <div class="col-md mb-3">
                                    <input type="number" class="form-control" placeholder="Age *" name="age"  required="" />
                                </div>

                                <div class="col-md mb-3">
                                    <select class="form-control gender" name="gender" required="">
                                      <option value=" ">--Select Gender *--</option>
                                      <option value="male">Male</option>
                                      <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md mb-3">
                                    <select class="form-control country" id="exampleFormControlSelect1" name="country" required="">
                                      <option>--Select Country *--</option>
                                      <option value="india" selected>India</option>
                                      <option value="nepal">Nepal</option>
                                    </select>
                                </div>
                                <div class="col-md mb-3">
                                    <input type="tel" class="form-control" placeholder="Contact Number*" name="number" required="" />
                                </div>
                                <div class="col-md mb-3">
                                    <input type="email" class="form-control" placeholder="Enter Email Id *" name="email" required="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Designer Name*" required="" name="designer_name">
                                </div>
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Your Brand*" required="" name="brand_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Height *" name="height" required="" />
                                </div>
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Occupation *" name="occupation" required="" />
                                </div>
                                <div class="col-md mb-3">
                                    <input type="text" class="form-control" placeholder="Father's Name *" name="fname" required="" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md mb-3 upload">
                                    <button class="btn-upload form-control">Images Upload 1 *</button>
                                    <input type="file" class="form-control" placeholder="Images Upload 1" name="img1" required="" />
                                </div>
                                <div class="col-md mb-3 upload">
                                    <button class="btn-upload form-control">Images Upload 2 *</button>
                                    <input type="file" class="form-control" placeholder="Images Upload 2" name="img2" required="" />
                                </div>
                                <div class="col-md mb-3 upload">
                                    <button class="btn-upload form-control">Images Upload 3 *</button>
                                    <input type="file" class="form-control" placeholder="Images Upload 3" name="img3" required="" />
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md mb-3">
                                    <textarea class="form-control" rows="3" placeholder="Why Do You Want To Become Model?" name="desc" required=""></textarea>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-3 mb-2">
                                    <input type="submit" name="submit" value="Submit" class="btn btn-danger btn-block">
                                </div>

                                <div class="col-3 mb-2">
                                    <input type="button" value="Reset" onclick="reset_button()" class="btn btn-light btn-block">
                                </div>
                            </div>
                        </form>
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
                       
            function reset_button(){
                $('#reg_form').trigger("reset");
            }
        </script>
  </body>

</html>