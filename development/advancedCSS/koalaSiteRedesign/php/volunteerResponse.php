<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>KBNIC Volunteer Response</title>
        <link href="../../../../images/personalMonogramLogo.svg" rel="icon" type="image/x-icon">
        <link href="../styles/styles.css" rel="stylesheet" type="text/css">
        <link href="../styles/phpResponse.css" rel="stylesheet" type="text/css">
        <link href="../styles/styles.scss" rel="stylesheet" type="text/css">
        <link href="../styles/phpResponse.scss" rel="stylesheet" type="text/css">
    </head>

    <body>
        <div id="container">
            <header>
                <img src="../images/koalaLogo.png" alt="Koala Logo">
                <div>
                    <h1>Volunteer Request Received</h1>
                    <h2>We're Glad That This Kind Of Work Is Your Jar Of Vegemite!</h2>
                </div>
            </header>
            <main>

                <?php

                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $streetAddress = $_POST['streetAddress'];
                    $emailAddress = $_POST['email'];
                    $phone = $_POST['telephone'];

                    $textComms = $_POST['optText'];
                    $emailComms = $_POST['optEmail'];
                    $volunteerPosition = $_POST['volunteerJob'];
                    $message = $_POST['comments'];

                ?>

                <p class="senderFirstName"><?php echo $firstName ?>,</p>
                <p class="messageBody">Thank you for taking action to save our beloved koalas! We cannot continue the
                    work we are doing without individuals like you who are willing to put in the time and effort required to make a
                    difference. You are joining a family of volunteers who know the stakes and care accordingly. We are all excited to meet you
                    and work with you to make an ongoing difference in our world. Within the next 48 hours you will receive
                    an email with contact info and training materials at, <?php echo "<span class='formInfoHighlight'>$emailAddress</span>"?>.
                    These materials will be specifically for <?php echo "<span class='formInfoHighlight'>$volunteerPosition</span>" ?>.
                    Until then, please see the included list to get an idea of what you have to look forward to!
                    Based on your stated preferences of <?php echo "Text: <span class='formInfoHighlight'>$textComms</span> and Email: <span class='formInfoHighlight'>$emailComms</span>" ?>,
                    we will or won't reach out to you via <?php echo "<span class='formInfoHighlight'>$phone</span> and/or <span class='formInfoHighlight'>$emailAddress</span>" ?>.
                    Please also note that we have received and will take into account your additional message:</p>
                <blockquote><?php echo $message ?></blockquote>
                <p class="messageSignOff">Thank you and welcome to the cause! <br> <span class="signature">- President of the Koala Bear
                        National Information Center</span>
                </p>
                <div class="nextSteps">
                    <div>
                        <p class="headingSm">The Journey Ahead:</p>
                        <ol>
                            <li>Receive email with contact info and training materials within 48 hours.</li>
                            <li>Complete training within two weeks and meet with volunteer coordinator in person.</li>
                            <li>Create schedule unique to you and your specific position and begin regular volunteer
                                work.
                            </li>
                            <li>As time goes on, consider joining the KBNIC as a full-time career.</li>
                            <li>Save the koalas!</li>
                        </ol>
                    </div>
                </div>
            </main>
            <footer>
                <p>Copyright 2018 All rights reserved. Australian Koala Foundation</p>
                <a href="https://en.wikipedia.org/wiki/Koala"><img alt="Koala Logo"
                                                                   src="../images/koalaLogo.png"></a>
                <p>
            </footer>
        </div><!--close div container-->
    </body>
</html>
