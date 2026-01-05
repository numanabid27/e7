<?php 
// SEO Meta Tags for Contact Page
$pageTitle = "Contact Us | ELECTRO-7 GENERAL TRADING LLC | Dubai, UAE";
$pageDescription = "Contact ELECTRO-7 General Trading LLC in Dubai, UAE. Office # 207, Garhoud star building, Al-Garhoud. Phone: +971 4 245124. Email: info@electro7.com. Get in touch for technology solutions, RTLS, RFID, Asset Management, and Solar Solutions.";
$pageKeywords = "contact ELECTRO-7, Dubai contact, UAE trading contact, technology solutions contact, ELECTRO-7 phone, ELECTRO-7 email, Dubai office address";
$pageImage = "https://electro7.com/assets/images/header_image.png";
$pageUrl = "https://electro7.com/contact";
$pageType = "website";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php';

// Load environment variables
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->safeLoad();

$mail = new PHPMailer(true);

include('header.php'); ?>
<?php 
$headerClass = "align-content-center";
$headerTag = '<div class="row"><div class=" col-md-12">
<h1 class="font-weight-bold text-center text-white ">Contact Us</h1>
</div></div>';
include('header_image.php'); ?>
<?php
// ----- PROCESS BEFORE ANY HTML -----
$companynameErr = $nameErr = $emailErr = $phoneErr = $descriptionErr = "";
$company_name = $name = $email = $phone_number = $description = "";
$success = "";
$error = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $token = $_POST['g-recaptcha-response'] ?? '';
    if (empty($token)) {
        $error = 'reCAPTCHA token missing. Please check the box and try again.';
    }
    
    $secret  = '6Lc0naMrAAAAAMLteUDRDYmXTkqkTyaycNdYVZKw';
    $verify  = 'https://www.google.com/recaptcha/api/siteverify';
    
    $payload = http_build_query([
      'secret'   => $secret,
      'response' => $token,
      'remoteip' => $_SERVER['REMOTE_ADDR'] ?? null,
    ]);
    
    $ch = curl_init($verify);
    curl_setopt_array($ch, [
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => $payload,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 10,
    ]);
    
    $response = curl_exec($ch);
    if ($response === false) {
      $error = 'Verification request failed: ' . curl_error($ch);
    }
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    if ($code !== 200) {
      $error = "Verification service returned HTTP $code. Try again later.";
    }
    
    $result = json_decode($response, true);
    if (!is_array($result) || !isset($result['success'])) {
      $error = 'Invalid verification response.';
    }
    
    if ($result['success'] === true) {
    
        // Company Name
        $company_name = test_input($_POST["company_name"] ?? "");
        if ($company_name === "") {
            $companynameErr = "Company Name is required";
        }
    
        // Name
        $name = test_input($_POST["name"] ?? "");
        if ($name === "") {
            $nameErr = "Name is required";
        }
    
        // Email
        $email = test_input($_POST["email"] ?? "");
        if ($email === "") {
            $emailErr = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Enter a valid email address";
        }
    
        // Phone (use a lenient check; don't use type=number for phone)
        $phone_number = test_input($_POST["phone_number"] ?? "");
        if ($phone_number === "") {
            $phoneErr = "Phone Number is required";
        } elseif (!preg_match('/^\+?[0-9\s\-().]{7,20}$/', $phone_number)) {
            $phoneErr = "Enter a valid phone number";
        }
    
        // Description
        $description = test_input($_POST["description"] ?? "");
        if ($description === "") {
            $descriptionErr = "Description is required";
        }
    
        // If no errors, do whatever you need (e.g., save to DB, send email)
        if ($companynameErr === "" && $nameErr === "" && $emailErr === "" && $phoneErr === "" && $descriptionErr === "") {
            
            
            // try {
                
            //     // ------------ your variables ------------
            //     // $email1    = 'usama@electro7.com';          // cPanel mailbox (username)
            //     // $email2    = 'hayyan@electro7.com';       // to
            //     // $email3    = $email;         // reply-to
            //     // $smtpHost  = 'mail.office365.com';         // from cPanel > Email Accounts > Connect Devices
            //     // $useSSL465 = false;                           // true = SMTPS 465, false = STARTTLS 587
            //     // // ----------------------------------------
                
            //     // $mail->Host       = 'smtp.office365.com';
            //     // $mail->Port       = 587;                                   // REQUIRED
            //     // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        // REQUIRED
            //     // $mail->SMTPAuth   = true;
            //     // $mail->Username   = $email1;
            //     // $mail->Password   = $password;
            //     // $mail->CharSet    = 'UTF-8';
            
            //     // // Addresses
            //     // $mail->setFrom($email1, 'Website Mailer');  // must match mailbox or allowed alias
            //     // $mail->addAddress($email2, 'Recipient');
            //     // if (!empty($email3)) {
            //     //     $mail->addReplyTo($email3, 'Reply-To');
            //     // }
            
            //     // // Content
            //     // $mail->isHTML(true);
            //     // $mail->Subject = 'PHPMailer via Microsoft 365';
            //     // $mail->Body    = '<p><strong>Hello!</strong> Sent using Microsoft 365 SMTP + PHPMailer.</p>';
            //     // $mail->AltBody = 'Hello! Sent using Microsoft 365 SMTP + PHPMailer.';
            
            //     // // Send
            //     // $mail->send();
            //     // $success =  "Message sent successfully\n";
                
                
                
                
                
                
                
                
            //     $account = 'usama@electro7.com';    // real M365 mailbox you own
            
            //     $mail->isSMTP();
            //     $mail->Host       = 'smtp.office365.com';
            //     $mail->SMTPAuth   = true;
            //     $mail->Username   = $account;
            //     $mail->Password   = $pass;
            //     $mail->SMTPSecure = 'tls';         // STARTTLS
            //     $mail->Port       = 587;
            //     $mail->SMTPAutoTLS = true;
            //     $mail->SMTPDebug  = 2; 
            //     // $mail->AuthType = 'LOGIN';       // optional, sometimes helps
            
            //     // Microsoft 365 prefers From == authenticated user
            //     $mail->setFrom($account, 'Electro7 Website');
            //     $mail->addAddress('usama@electro7.com');
            
            //     $mail->Subject = 'Test from Website';
            //     $mail->Body    = 'Hello, this is a test email from PHP via Outlook SMTP.';
            
            //     $mail->send();
            //     echo "Message sent!";
            // } catch (Exception $e) {
            //     $error =  "Message could not be sent. Mailer Error: {$mail->ErrorInfo}\n";
            // }
            
            
            
            // Always set content-type when sending HTML email
            
            
            
            $headers  = "From: Electro7 General Trading LLC <noreply@electro7.com>\r\n";
            // Mark as automated to reduce out-of-office loops
            $headers .= "Auto-Submitted: auto-generated\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= "X-Auto-Response-Suppress: All\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();

            $to = "info@electro7.com";
            $subject = "Query from website";
            
            $txt = "Company: ".$company_name . " <br/>";
            $txt .= "Name: ".$name. " <br/>";
            $txt .= "Phone Number: ".$phone_number. " <br/><br/>";
            $txt .= $description;
            
            
            if (mail($to,$subject,$txt,$headers))
            {
                // No Reply Mail ------------------------
            $subject  = "Thank You for Contacting Us  ";
            
            $message = "<html>
                <body>
                <p>Dear $name,</p>
                
                <p>Thank you for reaching out to us! We truly appreciate your message and it has been forwarded to the relevant team. Our member of the team will contact you to assist with your inquiry. (+971) 4-245124</p>
                
                <p>In the meantime, if there’s anything urgent or further information needed, please do not hesitate to contact us via landline at:</p>
                
                <p>Looking forward to helping you!</p>
                
                <p>Best regards,<br>
                Customer Services Team
                
                <!-- Image after Best regards -->
                <p><img src='https://electro7.com/assets/images/logo.png' alt='Electro7' width='200'></p>
                
                </body>
            </html>";
            
           
            $headers  = "From: Electro7 General Trading LLC <noreply@electro7.com>\r\n";
        
            // Mark as automated to reduce out-of-office loops
            $headers .= "Auto-Submitted: auto-generated\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $headers .= "X-Auto-Response-Suppress: All\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();
            
            mail($email,$subject,$message,$headers);
                
                $success = "Thanks! Your form was submitted.";
                $company_name = $name = $email = $phone_number = $description = "";
            }
            else
            {
                $error = "Email sending failed!";
            } 
            
            // Optionally clear fields:
            // $company_name = $name = $email = $phone_number = $description = "";
        }
    }
}
?>

<style>
.error {color: #FF0000;}
</style>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="container-fluid p-md-5 custom_container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 px-md-5">
                <h2 class="text-center custom_heading" style="font-weight: bolder; " id="tdr_hdng">Contact Us</h2>
                <hr style="border:1px solid #000;">
                <p class="font-weight-normal text-center custom_text">
                    For all your enquiries, please contact our sales team and a member of our team will be glad to assist you.
                </p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6 mb-5">
            <?php if ($success): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($success); ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
        
            <form method="POST" class="contact__form" action="<?php echo htmlspecialchars($_SERVER["REQUEST_URI"]);?>">
                <div class="form-group">
                    <label class="control-label">
                        Company Name
                        <span class="error">* <?php echo htmlspecialchars($companynameErr);?></span>
                    </label>
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name"
                           value="<?php echo htmlspecialchars($company_name); ?>">
                </div>
        
                <div class="form-group">
                    <label class="control-label">
                        Name
                        <span class="error">* <?php echo htmlspecialchars($nameErr);?></span>
                    </label>
                    <input type="text" name="name" class="form-control" placeholder="Name"
                           value="<?php echo htmlspecialchars($name); ?>">
                </div>
        
                <div class="form-group">
                    <label class="control-label">
                        Email
                        <span class="error">* <?php echo htmlspecialchars($emailErr);?></span>
                    </label>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                           value="<?php echo htmlspecialchars($email); ?>">
                </div>
        
                <div class="form-group">
                    <label class="control-label">
                        Phone Number
                        <span class="error">* <?php echo htmlspecialchars($phoneErr);?></span>
                    </label>
                    <!-- Use tel, not number (preserves leading zeros, +, etc.) -->
                    <input type="tel" name="phone_number" class="form-control" placeholder="Phone Number" value="<?php echo htmlspecialchars($phone_number); ?>">
                </div>
        
                <div class="form-group">
                    <label class="control-label">
                        Description
                        <span class="error">* <?php echo htmlspecialchars($descriptionErr);?></span>
                    </label>
                    <textarea name="description" rows="5" class="form-control"><?php echo htmlspecialchars($description); ?></textarea>
                </div>
                
                <!-- The checkbox widget -->
                <div class="g-recaptcha" data-sitekey="6Lc0naMrAAAAAMDJrHFkZZl3VKviwnwL-WU8R1H9"></div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        <div class="col-md-6">
            <div class="row text-center">
                <div class="col-md-12 justify-items-center mb-3">
                    <i class="fa fa-map-marker" style="font-size:50px;"></i>
                    <h4 class="text-center">Address</h4>
                    <p class="text-center custom_text">Office # 207, Garhoud star building, <br/> Al-Garhoud, Dubai, United Arab Emirates</p>
                </div>
                <div class="col-md-12 justify-items-center mb-3">
                    <i class="fa fa-phone" style="font-size:50px;"></i>
                    <h4 class="text-center">Phone</h4>
                    <p class="text-center custom_text">(+971) 4-245124</p>
                </div>
                <div class="col-md-12 justify-items-center">
                    <i class="fa fa-envelope" style="font-size:50px;"></i>
                    <h4 class="text-center">Email</h4>
                    <p class="text-center custom_text"><a href="mailto:info@electro7.com" title="Email us at info@electro7.com">info@electro7.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php'); ?>