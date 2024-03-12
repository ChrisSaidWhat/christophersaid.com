<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>Contact Received</title>
        <link href="../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link href="../stylesheet/styles.css" rel="stylesheet" type="text/css">

        <script>
            //  code taken from W3Schools.com
            let scrollBtn = document.querySelector(".scroll_btn");

            function scrollToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

            //  code taken from W3Schools
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            window.onclick = function (event) {
                if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                        }
                    }
                }
            }

        </script>

        <style>
            h3 {
                font-family: "new-order", sans-serif;
                color: #193c4c;
            }

            .content {
                display: grid;
                grid-template-rows: 91.533px 1fr;
            }

            .submission_message {
                display: grid;
                align-items: center;
                justify-items: center;
            }

            .message_box {
                border: #26292C 1px solid;
                padding: 20px;
            }

            .message_box p {
                max-width: 60ch;
            }

            .field_highlight {
                color: #193c4c;
                font-style: italic;
            }

            .signature_lg {
                color: #193c4c;
                font-family: "acier-bat-gris", sans-serif;
                font-size: 1.17em;
            }

            .motto {
                color: #193c4c;
                font-family: "new-order", sans-serif;
                font-size: smaller;
            }

            .user_comments {
                color: #193c4c;
                border: #26292C 1px solid;
                padding: 10px;
                font-family: "new-order", sans-serif;
            }
        </style>
    </head>

    <body>

        <main class="viewport_alignment">
            <header class="border_top">
                <div class="header_logo">
                    <img alt="CS Design & Dev logo." src="../images/personalMonogramLogo.svg">
                    <h1>Christopher Said Design & Dev</h1>
                </div>
                <nav>
                    <a class="nav_item" href="../index.html">Home</a>
                    <a class="nav_item" href="../design/design.html">Design</a>
                    <a class="nav_item" href="../development/development.html">Development</a>
                    <a class="nav_item" href="../resume/resume.html">Resume</a>
                    <a class="nav_item" href="./contact.html">Contact</a>
                </nav>
                <nav class="mobileNav">
                    <!-- Code taken from W3Schools-->
                    <div class="dropdown">
                        <button class="dropbtn" onclick="myFunction()">Menu</button>
                        <div class="dropdown-content" id="myDropdown">
                            <a href="../index.html">Home</a>
                            <a href="../design/design.html">Design</a>
                            <a href="../development/development.html">Development</a>
                            <a href="../resume/resume.html">Resume</a>
                            <a href="./contact.html">Contact</a>
                        </div>
                    </div>
                </nav>
            </header>
            <?php
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

                $mailMessage = "<html><head><title>Confirmation</title><link rel='stylesheet' href='https://use.typekit.net/aig1tsi.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/styles.css'></head><body style='background-color: #E8E9EB; padding: 20px; border: #26292C 1px solid;'>";
                $mailMessage .= "<header><div style='display: flex; flex-direction: row; width: 100%;'><img src='https://christophersaid.com/images/personalMonogramLogo.svg' alt='CS Logo' width='200px'><h1 style='font-family: acier-bat-gris, sans-serif; font-size: 3rem; color: #26292C;'>Christopher Said Design &amp; Dev</h1></div></header>";
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

                if(mail($toUser, $subjectUser, $mailMessage, $headersUser)) {

                }
                else {
                    $responseStatus = "Error In Sending Response!";
                }

            ?>
            <div class="container">
                <div class="content">
                    <div class="headline_container border_bottom">
                        <h2 class="headline"><?php echo $responseStatus ?></h2>
                    </div>
                    <div class="submission_message">
                        <div class="message_box">
                            <h3><?php echo $inFirstName . " " . $inLastName . ","; ?></h3>
                            <p>
                                Thank you so much for reaching out! I am very excited to assist you in any way I can.
                                An email has just been sent to you at <span
                                        class="field_highlight"><?php echo $inEmail ?></span>. Please be sure to check your junk and spam folders!
                                I will get back to you personally at the soonest possible time once I have been able to
                                review
                                the details of your message regarding your <span
                                        class="field_highlight"><?php echo $inReason ?></span> and the following
                                comments:
                            </p>
                            <blockquote class="user_comments"><?php echo $inComments ?></blockquote>
                            <p>
                                Thank you again for your interest,
                            </p>
                            <span class="signature_lg">Christopher Said</span> <br>
                            <span class="motto"> - Where Creativity Meets Code</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>