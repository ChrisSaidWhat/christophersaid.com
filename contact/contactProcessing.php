<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta name="author" content="Christopher Said">
        <meta name="description" content="Response from the server to a successful submission of the contact form.">
        <title>Contact Received</title>
        <link href="../assets/favicon.svg" rel="icon" type="image/x-icon">
        <link href="../stylesheet/declaration.css" rel="stylesheet" type="text/css">
        <link href="../stylesheet/global.css" rel="stylesheet" type="text/css">
        <link href="../stylesheet/class.css" rel="stylesheet" type="text/css">
        <link href="../stylesheet/id.css" rel="stylesheet" type="text/css">
        <link href="../stylesheet/responsive.css" rel="stylesheet" type="text/css">

        <script crossorigin="anonymous" src="https://kit.fontawesome.com/73da6968f8.js"></script>

        <script>
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

            function prepareFunctionality() {
                //  code taken from ChatGPT after a discussion in which it was decided to modify previous iteration of this code
                const toast = document.getElementById('toast');

                // Function to attach event listeners to both .hover_item and .logo_link_alt
                function attachHoverListeners() {
                    const hoverItems = document.querySelectorAll('.hover_item, .hover_item_alt');

                    hoverItems.forEach(hoverItem => {
                        hoverItem.addEventListener('mouseenter', () => {
                            toast.style.visibility = 'visible';
                            toast.style.opacity = '1';
                        });

                        hoverItem.addEventListener('mouseleave', () => {
                            setTimeout(() => {
                                toast.style.visibility = 'hidden';
                                toast.style.opacity = '0';
                            }, 4000); // Toast disappears after 4 seconds
                        });
                    });
                }

                // Attach listeners initially
                attachHoverListeners();

                // Optional: Re-attach listeners on window resize (if dynamic layout changes are frequent)
                window.addEventListener('resize', attachHoverListeners);
            }

            window.onload = prepareFunctionality;

            //  code taken from W3Schools.com
            window.onscroll = function () {
                scrollIndicator()
            };

            function scrollIndicator() {
                var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
                var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
                var scrolled = (winScroll / height) * 100;
                document.getElementById("scroll_indicator").style.width = scrolled + "%";
            }

            //  code taken from W3Schools.com
            let scrollBtn = document.querySelector(".scroll_btn");

            function scrollToTop() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <style>
            h3 {
                font-family: var(--secondaryFont);
                color: var(--primaryColor);
                font-size: var(--fontSizeH3);
            }

            main {
                height: 80dvh;
            }

            .content {
                display: grid;
                grid-template-rows: 91.533px 1fr;
            }

            .field_highlight {
                color: var(--primaryColor);
                font-style: italic;
            }

            .headline_container {
                text-align: center;
            }

            .message_box {
                border: var(--secondaryColor) 1px solid;
                padding: 20px;
            }

            .message_box p {
                max-width: 60ch;
            }

            .signature_lg {
                color: var(--primaryColor);
                font-family: var(--primaryFont);
                font-size: var(--fontSizePg);
            }

            .submission_message {
                display: grid;
                align-items: center;
                justify-items: center;
            }

            .user_comments {
                color: var(--primaryColor);
                border: var(--secondaryColor) 1px solid;
                padding: 10px;
                font-family: var(--tertiaryFont);
                font-size: var(--fontSizePg);
            }

            @media screen and (max-width: 600px) {
                .message_box {
                    width: 70%;
                }

                .message_box p {
                    max-width: unset;
                }
            }
        </style>
    </head>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-S9K6SPKXYX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-S9K6SPKXYX');
    </script>

    <body>
        <header class="border_bottom">
            <a class="no_underline" href="../index.html">
                <div class="cs_branding_container border_right">
                    <img alt="CS Design & Dev logo." class="cs_logo" src="../assets/personalMonogramLogo.svg">
                    <h1 class="branding_main">Christopher Said Design & Dev</h1>
                    <h1 class="branding_alt">Christopher Said</h1>
                </div>
            </a>
            <nav>
                <a class="nav_item" href="../index.html">Home</a>
                <a class="nav_item" href="../work/work.html">My Work</a>
                <a class="nav_item" href="../resume/resume.html">Resume</a>
                <a class="nav_item" href="../contact/contact.html">Contact</a>
            </nav>
            <nav class="mobile_nav">
                <!-- Code taken from W3Schools-->
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()"><i class="fa-solid fa-bars"></i></button>
                    <!-- Bars from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/bars?f=classic&s=solid -->
                    <div class="dropdown-content" id="myDropdown">
                        <a href="../index.html">Home</a>
                        <a href="../work/work.html">My Work</a>
                        <a href="../resume/resume.html">Resume</a>
                        <a href="../contact/contact.html">Contact</a>
                    </div>
                </div>
            </nav>
            <div class="progress_container">
                <div class="progress_bar" id="scroll_indicator"></div>
            </div> <!-- Taken from W3Schools.com -->
        </header>
        <main>

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

                $mailMessage = "<html><head><title>Confirmation</title><link rel='stylesheet' href='https://use.typekit.net/aig1tsi.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/declaration.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/global.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/class.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/id.css'><link rel='stylesheet' href='https://www.christophersaid.com/stylesheet/responsive.css'></head><body style='background-color: #E8E9EB; padding: 20px; border: #26292C 1px solid;'>";
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

                if (mail($toUser, $subjectUser, $mailMessage, $headersUser)) {

                }
                else {
                    $responseStatus = "Error In Sending Response!";
                }

            ?>
            <div class="container">
                <div class="content">
                    <div class="headline_container">
                        <h2 class="headline"><?php echo $responseStatus ?></h2>
                    </div>
                    <div class="submission_message">
                        <div class="message_box">
                            <h3><?php echo $inFirstName . " " . $inLastName . ","; ?></h3>
                            <p>
                                Thank you so much for reaching out! I am very excited to assist you in any way I can.
                                An email has just been sent to you at <span
                                        class="field_highlight"><?php echo $inEmail ?></span>. Please be sure to check
                                your junk and spam folders!
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
                            <span class="signature_lg">Christopher Said</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="border_top">
            <div class="footer_left border_right">
                <div class="footer_left_left_half">
                    <div class="copyright">&copy; 2024 Christopher Said - All Rights Reserved</div>
                </div>
                <div class="footer_left_right_half">
                    <a class="no_underline logo_link" href="https://www.linkedin.com/in/cs-design-and-dev/"
                       target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
                    <a class="no_underline logo_link_alt" href="https://www.linkedin.com/in/cs-design-and-dev/"
                       target="_blank"><i class="fa-brands fa-linkedin fa-xl"></i></a>
                    <!-- LinkedIn logo from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/linkedin?f=brands&s=solid -->
                    <a class="no_underline logo_link" href="https://www.instagram.com/christopher_said_design/"
                       target="_blank"><i class="fa-brands fa-instagram fa-2xl"></i></a>
                    <a class="no_underline logo_link_alt" href="https://www.instagram.com/christopher_said_design/"
                       target="_blank"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    <!-- Instagram logo from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/instagram?f=brands&s=solid -->
                    <a class="no_underline logo_link" href="https://github.com/ChrisSaidWhat" target="_blank"><i
                                class="fa-brands fa-github fa-2xl"></i></a>
                    <a class="no_underline logo_link_alt" href="https://github.com/ChrisSaidWhat" target="_blank"><i
                                class="fa-brands fa-github fa-xl"></i></a>
                    <!-- GitHub logo from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/github?f=brands&s=solid -->
                    <a class="no_underline logo_link" href="https://www.flickr.com/people/195699998@N02/"
                       target="_blank"><i class="fa-brands fa-flickr fa-2xl"></i></a>
                    <a class="no_underline logo_link_alt" href="https://www.flickr.com/people/195699998@N02/"
                       target="_blank"><i class="fa-brands fa-flickr fa-xl"></i></a>
                    <!-- Flickr logo from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/flickr?f=brands&s=solid -->
                    <a class="no_underline logo_link hover_item"><i class="fa-brands fa-creative-commons-by fa-2xl"></i></a>
                    <a class="no_underline logo_link_alt hover_item_alt"><i
                                class="fa-brands fa-creative-commons-by fa-xl"></i></a>
                    <!-- Creative Commons BY logo from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/creative-commons-by?f=brands&s=solid -->
                    <div id="toast" class="toast">
                        <h6 class="toast_heading">Attribution</h6>
                        <div class="attribution"><a href="https://lordicon.com/">Animated icons by Lordicon.com</a>
                        </div>
                        <div class="attribution"><a href="https://fontawesome.com/">Brand and other icons by Font
                                Awesome</a></div>
                    </div>
                </div>
            </div>
            <div class="footer_right" onclick="scrollToTop()">
                <i class="fa-solid fa-chevron-up fa-2xl"></i>
                <!-- Chevron-up from Font Awesome is licensed under CC BY 4.0 (https://creativecommons.org/licenses/by/4.0/)
                    and is available at https://fontawesome.com/icons/chevron-up?f=classic&s=solid -->
            </div>
        </footer>
    </body>

</html>