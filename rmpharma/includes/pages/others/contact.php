
    <!-- services-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-area after-none contact-bg pt-60 pb-60 p-relative fix" style="background: #e7f0f8;">
        <div class="container">
            <div class="row">
               
              
                <div class="col-lg-6">
                    <div class="contact-bg">
                      
                        <form action="" method="post" class="contact-form1  text-center">
                            <!-- Form fields -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-name mb-30">                                    
                                        <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                        <i class="icon fal fa-user"></i>
                                    </div>                               
                                </div>
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-30">                                   
                                        <input type="text" id="email" name="email" placeholder="Email" required>
                                        <i class="icon fal fa-envelope"></i>
                                    </div>
                                </div>		
                                <div class="col-lg-12">                               
                                    <div class="contact-field p-relative c-subject mb-30">                                   
                                        <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                        <i class="icon fal fa-phone"></i>
                                    </div>
                                </div>	                            
                                <div class="col-lg-12">
                                    <div class="contact-field p-relative c-message mb-30">                                  
                                        <textarea name="message" id="message" cols="30" rows="50" placeholder="Write comments"></textarea>
                                        <i class="icon fal fa-edit"></i>
                                    </div>
                                    <div class="slider-btn2  text-center">                                          
                                        <button class="btn ss-btn" name="send" data-animation="fadeInRight" data-delay=".8s">Make An Request <i class="fal fa-long-arrow-right"></i></button>				
                                    </div>                             
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
<br>
                  <div class="col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3034.6515807644573!2d87.823887!3d24.315095!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa192a2b8e8a75%3A0xd70f4bea3fd071a0!2sRangamati%20Institute%20of%20Nursing!5e1!3m2!1sen!2sin!4v1714652416771!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services-area pt-80 pb-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="services-box text-center">
                        <!-- Content for service box 1 -->
                        <div class="services-icon">
                            <img src="public/img/rmpharma/call.jpg" alt="image">
                        </div>
                        <div class="services-content2">
                            <h5><a href="tel:73840-52529">73840-52529</a></h5>   
                            <p>((24/7 Support Line))</p>
                        </div>
                    </div>   
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="services-box text-center active">
                        <!-- Content for service box 2 -->
                        <div class="services-icon">
                            <img src="public/img/rmpharma/mail.png" alt="image">
                        </div>
                        <div class="services-content2">
                            <h5><a href="mailto:secretary.rangamaticp@gmail.com .com">secretary.rangamaticp@gmail.com </a></h5>   
                            <p>Email Address</p>
                        </div>
                    </div>   
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="services-box text-center">
                        <!-- Content for service box 3 -->
                        <div class="services-icon">
                            <img src="public/img/rmpharma/location.png" alt="image">
                        </div>
                        <div class="services-content2">
                            <h5>Rangamati College of pharmacy</h5>   
                            <p>Village + Post Office‑ Bainor, Nalhati, Birbhum,W.B‑731243</p>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </section>
            <!-- contact-area-end -->

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['send'])) {
    $name = $_POST['firstn']; // Changed from 'name' to 'firstn'
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['message']; // Changed from 'msg' to 'message'

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
        $mail->addAddress('secretary.rangamaticp@gmail.com

        ', 'rangamati'); // Recipient's email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admission Query';
        $mail->Body    = 'Sender Name: ' . $name . '<br>' .
                         'Sender Phone: ' . $phone . '<br>' .
                         'Sender Email: ' . $email . '<br>' .
                         'Message: ' . $msg;

        // Send email
        $mail->send();
        echo "<div class='success'>Message has been sent!</div>";
    } catch (Exception $e) {
        echo "<div class='error'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
    }
}
?>
