<?php
    // code for validation and Recaptcha taken form https://youtu.be/0L4Ge036Dbo?si=FCfsi8W525REt2xN
    function isValid() {
        if ($_POST['firstName'] != "" && $_POST['lastName'] != "" && $_POST['email'] != "" && $_POST['additionalComments'] != "") {
            return true;
        }
        else {
            return false;
        }
    }

    $success_output = '';
    $error_output = '';

    if (isValid()) {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = '6Lc2wK0pAAAAAJ2WQ-pgWFVlKD_RRJ5JAH_Zeb4f';
        $recaptcha_response = $_POST['recaptchaResponse'];
        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);
        if ($recaptcha->success == true && $recaptcha->score >= 0.5 && $recaptcha->action == "contact") {
            //  run email send routine
            //  php mail function
            $inFirstName = $_POST['firstName'];
            $inLastName = $_POST['lastName'];
            $inEmail = $_POST['email'];
            $inReason = $_POST['contactReason'];
            $inComments = $_POST['additionalComments'];
            $responseStatus = "Response Successfully Sent!";

            //  send details to my mail server
            $toMe = "christopher@christophersaid.com";
            $subjectMe = "Contact Received";
            $headersMe = "From: $inEmail" . "\r\n";
            $headersMe .= "MIME-Version: 1.0" . "\r\n";
            $headersMe .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

            $detailCapture = "<ol><li>$inFirstName</li>";
            $detailCapture .= "<li>$inLastName</li>";
            $detailCapture .= "<li>$inEmail</li>";
            $detailCapture .= "<li>$inReason</li>";
            $detailCapture .= "<li>$inComments</li>";
            $detailCapture .= "<li>" . date("n/j/Y") . "</li></ol>";

            $detailCapture = wordwrap($detailCapture, 70);

            mail($toMe, $subjectMe, $detailCapture, $headersMe);

            //  send message to user
            $toUser = $inEmail;
            $subjectUser = "Confirmation of Submission Received";
            $headersUser = "From: christopher@christophersaid.com" . "\r\n";
            $headersUser .= "MIME-Version: 1.0" . "\r\n";
            $headersUser .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

            $mailMessage = "<html><head><title>Confirmation</title><link rel='stylesheet' href='https://use.typekit.net/aig1tsi.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/declaration.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/global.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/class.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/id.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/responsive.css'></head><body style='background-color: #E8E9EB; padding: 20px; border: #26292C 1px solid;'>";
            $mailMessage .= "<header><div style='display: flex; flex-direction: row; width: 100%;'><img src='https://christophersaid.com/assets/personalMonogramLogo.svg' alt='CS Logo' width='200px'><h1 style='font-family: acier-bat-gris, sans-serif; font-size: 3rem; color: #26292C;'>Christopher Said Design &amp; Dev</h1></div></header>";
            $mailMessage .= "<div style='margin-top: 80px;'>";
            $mailMessage .= "<h3 style='color:#193c4c; font-family: new-order, sans-serif; font-size: 2rem;'>$inFirstName " . "$inLastName,</h3>";
            $mailMessage .= "<p style='color:#26292C; font-family: new-order, sans-serif; padding-left: 40px;'> Thank you so much for reaching out! I am very excited to assist you in any way I can.</p>";
            $mailMessage .= "<p style='color:#26292C; font-family: new-order, sans-serif; padding-left: 40px;'>I have received your email and will respond as soon as possible.</p>";
            $mailMessage .= "<p style='color:#26292C; font-family: new-order, sans-serif; padding-left: 40px; line-height: 2.5;'>This email will cover the message sent on " . date("n/j/Y") . " about your <span class='field_highlight'>$inReason</span> and the following comments:</p>";
            $mailMessage .= "<blockquote class='user_comments' style='padding-left: 40px;'>$inComments</blockquote>";
            $mailMessage .= "<p style='color:#26292C; font-family: new-order, sans-serif; padding-left: 40px;'>Thank you again for your interest,</p>";
            $mailMessage .= "<span class='signature_lg' style='font-family: acier-bat-gris, sans-serif; font-size: 2rem; padding-left: 40px;'>Christopher Said</span><br><span class='motto' style='font-family: new-order, sans-serif; font-size: 1.2rem; padding-left: 40px;'> - Where Creativity Meets Code</span>";
            $mailMessage .= "</div>";
            $mailMessage .= "</body></html>";

            $mailMessage = wordwrap($mailMessage, 70);

            if (mail($toUser, $subjectUser, $mailMessage, $headersUser)) {

            }
            else {
                $responseStatus = "Error In Sending Response!";
            }

            $success_output = 'Your message has been received.';
        }
        else {
            $error_output = 'The reCAPTCHA was failed. Please try again.';
        }
    }
    else {
        $error_output = 'Please fill out all of the required fields.';
    }

    $output = ['error' => $error_output, 'success' => $success_output];

    echo json_encode($output);