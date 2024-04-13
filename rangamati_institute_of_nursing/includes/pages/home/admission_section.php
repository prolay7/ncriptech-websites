
   <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-title-item gdlr-core-item-pdb  gdlr-core-title-item-caption-top gdlr-core-item-pdlr" style="text-align:center;" id="div_983a_4">
                                                    <div class="clearfix">
                                                        <h3 class="gdlr-core-title-item-title gdlr-core-skin-title " id="h3_983a_0" style="color:#182e58">Get Admission Now</h3></div>
                                                </div>
                                            </div>
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-divider-item gdlr-core-divider-item-normal gdlr-core-item-pdlr ">
                                                    <div class="gdlr-core-divider-container" id="div_983a_5">
                                                        <div class="gdlr-core-divider-line gdlr-core-skin-divider" id="div_983a_6"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
  <div class="gdlr-core-pbf-wrapper " >
                        <div class="gdlr-core-pbf-background-wrap">
                            <div class="gdlr-core-pbf-background gdlr-core-parallax gdlr-core-js" id="div_1dd7_106" data-parallax-speed="0"></div>
                        </div>
                        <div class="gdlr-core-pbf-wrapper-content gdlr-core-js ">
                            <div class="gdlr-core-pbf-wrapper-container clearfix gdlr-core-container">
                                <div class="gdlr-core-pbf-column gdlr-core-column-30 gdlr-core-column-first">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js "></div>
                                    </div>
                                </div>
                                <div class="gdlr-core-pbf-column gdlr-core-column-30">
                                    <div class="gdlr-core-pbf-column-content-margin gdlr-core-js ">
                                        <div class="gdlr-core-pbf-column-content clearfix gdlr-core-js ">
                                           
                                            <div class="gdlr-core-pbf-element">
                                                <div class="gdlr-core-course-search-item gdlr-core-item-pdb gdlr-core-item-pdlr">
                                                    <form class="gdlr-core-course-form clearfix" action="#" method="post">
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-keywords">
                                                                <input type="text" placeholder="First Name" name="FName" value="" />
                                                            </div>
                                                        </div>
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Last Name" name="LName" value="" />
                                                            </div>
                                                        </div>

                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Your email" name="email" value="" />
                                                            </div>
                                                        </div>

                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Your Phone No" name="phone" value="" />
                                                            </div>
                                                        </div>
                                                      
                                                     
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30 gdlr-core-column-first">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-level">
                                                                <div class="gdlr-core-course-form-combobox gdlr-core-skin-e-background">
                                                                    <select class="gdlr-core-skin-e-content" name="level">
                                                                        <option value="">Select Course</option>
                                                                        <option value="graduate">GNM</option>
                                                                        <option value="undergraduate">BSC</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                      
                                                        <div class=" gdlr-core-course-column gdlr-core-column-30">
                                                            <div class="gdlr-core-course-search-field gdlr-core-course-field-course-id">
                                                                <input type="text" placeholder="Your Messages" name="masg" value="" />
                                                            </div>
                                                        </div>
                                                      
                                                        <div class="gdlr-core-course-form-submit gdlr-core-course-column gdlr-core-column-first gdlr-core-center-align">
                                                            <input class="gdlr-core-full-size" name="send" type="submit" value="Search Courses" />
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if(isset($_POST['send'])) {
    $name = $_POST['FName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['masg'];

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
        $mail->addAddress('ananyachoudhury32@gmail.com', 'Ananya'); // Recipient's email

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