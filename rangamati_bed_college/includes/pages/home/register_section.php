<section class="enroll-area ptb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="enroll-wrap">
                    <form class="courses-form" action="" method="post">
                        <span>Need Any Courses</span>
                        <h3>Register Now</h3>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="Number" name="phone" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="course" id="course">
                                <option value="" selected disabled>Select Course*</option>
                                <option value="course1">B.ED</option>
                                <option value="course2">D.El.Ed</option>
                                <!-- Add more courses as needed -->
                            </select>
                        </div>
                        <button type="submit" name="send" class="default-btn">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="enroll-img">
                    <img src="assets/img/enroll-img.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $course = $_POST['course'];

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
        $mail->addAddress('secretary.rangamati@gmail.com', 'gitanjali'); // Recipient's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Query';
        $mail->Body    = 'Sender Name: ' . $name . '<br>' .
                         'Phone Number: ' . $phone . '<br>' .
                         'Sender Email: ' . $email . '<br>' .
                         'Course: ' . $course;

        // Send email
        $mail->send();
        echo "<div class='success'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
