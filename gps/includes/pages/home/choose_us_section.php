<section class="about-area choose_area about-p  pb-50 p-relative fix" style="background:white;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12 ">
            <div class="s-about-img p-relative  wow fadeInLeft  animated" data-animation="fadeInLeft" data-delay=".4s" style="visibility: visible; animation-name: fadeInLeft;"><div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/img/gps/Whychooseus.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/img/gps/chooseus2.webp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/img/gps/chooseus3.webp" class="d-block w-100" alt="...">
    </div>
  </div>
</div> 
                               
            </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
            <div class="about-content pl-15 wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
    <div class="about-title4 second-title pb-25">
        <h3>
            <?php echo $about_title; ?> <span><?php echo $school_name; ?></span>
        </h3>
    </div>
    <p class="txt-clr"><?php echo $description_1; ?></p>
  
    <p class="txt-clr"><?php echo $description_3; ?></p>
   
</div>

                <div class="row
    " style="
    margin-left: 20px;
">
                    <div class="col-lg-4 col-md-4 col-4 choose
                _icon">
                        <img src="public/img/gps/icon 1.webp" alt="" style="
    height: 50px;">
                        <p>Student Centric Approch</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-4 choose
                _icon">
                    <img src="public/img/gps/icon 2.webp" alt="" style="
    height: 50px;">
                    <p>Skill teachers</p>
                    </div>
                    <div class="col-lg-4 col-md-4  col-4 choose
                _icon">
                    <img src="public/img/gps/icon 3.webp" alt="" style="
    height: 50px;">
                    <p>Best Practices</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 about2">
                <div class=" wow fadeInRight animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
         
                        <h3>GET IN TOUCH</h3`>
                    </div>
                    <div class="contact-form">
    <form action="" method="post" novalidate="novalidate">
        <div class="input-box">
            <input type="text" name="contact_name" placeholder="Full Name">
        </div>
        <div class="input-box">
            <input type="text" name="contact_phno" placeholder="Phone No">
        </div>
        <div class="input-box">
            <input type="email" name="contact_email" placeholder="Email">
        </div>
        <div class="input-box">
            <button type="submit" class="main-btn" name="submit">Submit</button>
        </div>
    </form>
</div>




                </div>
            </div>
        </div>
    </div>
</section>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['submit'])) {
    $name = $_POST['contact_name'];
    $phone = $_POST['contact_phno'];
    $email = $_POST['contact_email'];

    // Load Composer's autoloader
    require 'php_mailer/Exception.php';
    require 'php_mailer/PHPMailer.php';
    require 'php_mailer/SMTP.php';

    // Create an instance
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'waytoadmissions21@gmail.com'; // Your Gmail username
        $mail->Password   = 'lgle pkre mzzy sebw'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('waytoadmissions21@gmail.com', 'Contact Form');
        $mail->addAddress('gpskanchrapara@gmail.com', 'gps kachrapara'); // Recipient's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Query';
        $mail->Body    = 'Sender Name: ' . $name . '<br>' .
                         'Sender Phone: ' . $phone . '<br>' .
                         'Sender Email: ' . $email;

        // Send email
        $mail->send();
        echo "<div class='success'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>         <!-- about-area-end -->