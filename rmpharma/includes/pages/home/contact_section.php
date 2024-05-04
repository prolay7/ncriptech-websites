<!-- search-area -->
<section class="search-area  pb-60 p-relative fix">
    <div class="animations-10"><img src="img/bg/an-img-04.png" alt="an-img-01"></div>
    <div class="animations-08"><img src="img/bg/an-img-05.png" alt="contact-bg-an-01"></div>
    <div class="container contact_section">
        <div class="row justify-content-center  align-items-center">
            <div class="col-lg-8">
                <div class="contact-bg">
                    <div class="section-title wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    </div>
                    <div class="contact-form">
                        <div id="msg"></div>
                        <form action="" method="post" novalidate="novalidate">
                            <h2>CONTACT US</h2>
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
            <div class="col-lg-4">
            </div>
        </div>
    </div>
</section>
<!-- search-area-end -->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['submit'])) {
    $name = $_POST['contact_name']; // Changed from 'name' to 'contact_name'
    $phone = $_POST['contact_phno']; // Changed from 'phone' to 'contact_phno'
    $email = $_POST['contact_email']; // Changed from 'email' to 'contact_email'

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
        $mail->addAddress('ananyachoudhury32@gmail.com', 'rangamati'); // Recipient's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Contact Form Submission';
        $mail->Body    = 'Sender Name: ' . $name . '<br>' .
                         'Sender Phone: ' . $phone . '<br>' .
                         'Sender Email: ' . $email;

        // Send email
        $mail->send();
        echo "<div class='success1'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
