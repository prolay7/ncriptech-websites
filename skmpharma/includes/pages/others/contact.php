
    <!-- services-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-area after-none contact-bg pt-60 pb-60 p-relative fix" style="background: #e7f0f8;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-bg">
                    <div class="about-title contact_head second-title pb-25">  
                        <h2>CONTACT US</h2>
                        <p>Feel free to contact us anytime. We will get back to you as soon as possible.</p>                                  
                    </div>
                    <form action="" method="post" class="contact-form text-center">
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
                                <div class="slider-btn text-center">                                          
                                    <button class="btn ss-btn" name="send" data-animation="fadeInRight" data-delay=".8s">Make An Request <i class="fal fa-long-arrow-right"></i></button>				
                                </div>                             
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636.636996380529!2d87.96196757440988!3d24.289406467872073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fa25f516adf76d%3A0xdf4dfd4440ce3d49!2sGITANJALI%20INSTITUTE%20OF%20NURSING!5e0!3m2!1sen!2sin!4v1709705398080!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
    <section id="services" class="services-area pt-20 pb-90 fix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                <div class="about-title  contact_head second-title pb-25" style="
    margin-bottom: 20px;
    margin-top: 20px;
"> 
                                  
                                  <h2>GET IN TOUCH</span></h2> 
                                                                 
                              </div>
                </div>
            </div>
            <div class="contact-address-box row">
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 single-contact-address-box  text-center">
                        <div class="icon-holder">
                            <span class="icon-clock-1">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span>
                            </span>
                        </div>
                        
                        <div class="services-content2">
                        <img src="public/img/pharma/call.jpg" style="
    border-radius: 20px;margin-bottom: 20px;
">
                            <h5><a href="tel:+91-8768000093">+91-8768000093</a></h5>   
                            <p>(Admission Cell)</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 single-contact-address-box main-branch">
                
                     
                        <div class="services-content2 address">
                        <img src="public/img/pharma/location_final.jpg" style="
    border-radius: 20px;margin-bottom: 20px;
">
                            <h5>SKM Institute Of Pharmacetutical Sciences & Research</h5>   
                            <p>Add:Vill+P.O- Lohapur, P.S- Nalhati, Dist- Birbhum, Pin- 731237, W.B</p></div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-sm-4 emailbox single-contact-address-box text-center">
                        <div class="icon-holder">
                            <span class="icon-question-2">
                                <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                            </span>
                        </div>
                        <div class="services-content2">
                        <img src="public/img/pharma/email_final.jpg" style="
    border-radius: 20px;margin-bottom: 20px;
">
                            <h5><a href="mailto:director.skmipsr@gmail.com"> director.skmipsr@gmail.com</a></h5>   
                            <p>(Email Address)</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
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
        $mail->addAddress('director.skmipsr@gmail.com', 'skmpharma'); // Recipient's email

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