<section class="contact-info-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-lg-4 col-sm-6">
<div class="single-contact-info">
<i class="flaticon-call"></i>
<h3>Call us</h3>
<a href="tel:+1(514)312-5678">Phone :+91-9091526251</a>

</div>
</div>
<div class="col-lg-4 col-sm-6">
<div class="single-contact-info">
<i class="flaticon-pin"></i>
<h3>Our location</h3>
<a href="#">Plot No. - 82, Vill- Banior,P.O- Banior, P.S- Nalhati, Dist- Birbhum, Pin- 731243, West Bengal(India). 7384052529</a>
</div>
</div>
<div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
<div class="single-contact-info">
<i class="flaticon-email"></i>
<h3>Email</h3>
<a href=""><span class="" data-cfemail="">secretary.rangamati@gmail.com</span></a>

</div>
</div>
</div>
</div>
</section>


<section class="main-contact-area pb-100">
<div class="container">
<div class="row">
<div class="col-12">
<div class="contact-wrap contact-pages mb-0">
<div class="contact-form">
<div class="section-title">
<h2>Drop us a message for any query</h2>
<p>For more information about our courses, get in touch <br> with Rangamati contacts</p>
</div>
<form action="" method="post">
<div class="row">
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Name</label>
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6 col-sm-6">
<div class="form-group">
<label>Email Address</label>
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Phone No</label>
<input type="text" name="phone" id="phone" class="form-control" required data-error="Please enter your Phone no">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-12">
<div class="form-group">
<label>Message</label>
<textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Write your message"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<button  name="send" class="default-btn btn-two">
Send Message
</button>
</div>

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="map-area">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.744626243402!2d87.82122787441094!3d24.320541266651396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa1787bb83ab03%3A0x2484b1c9d1d0b097!2sRangamati%20Shikshan%20Ashram%20B.Ed%20%26%20D.El.Ed%2C%20Banior%2C%20Nalhati!5e0!3m2!1sen!2sin!4v1713185608596!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['send'])) { // Corrected from 'submit' to 'send'
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   

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
        $mail->addAddress('secretary.rangamati@gmail.com', 'Rangamati Secretary');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Query';
        $mail->Body    = 'Sender Name: ' . $name . '<br>' .
                         'Phone Number: ' . $phone . '<br>' .
                         'Sender Email: ' . $email . '<br>' .
                         'Message: ' . $message;
                    

        // Send email
        $mail->send();
        echo "<div class='success1'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error1'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
