<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>KBNIC Adoption Response</title>
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
                    <h1>Adoption Request Received</h1>
                    <h2>Your Koala Is Getting Excited!</h2>
                </div>
            </header>
            <main>

                <?php

                    $firstName = $_POST['firstName'];
                    $lastName = $_POST['lastName'];
                    $streetAddress = $_POST['address'];
                    $city = $_POST['city'];
                    $state = $_POST['state'];
                    $zip = $_POST['zip'];
                    $emailAddress = $_POST['emailAddress'];
                    $phone = $_POST['phone'];
                    $phoneType = $_POST['phonetype'];

                    $joey = $_POST['joey'];
                    $adults = $_POST['adult'];
                    $mumJoey = $_POST['mum'];
                    $wild = $_POST['wild'];

                    $message = $_POST['inputMessage'];

                ?>

                <p class="senderFirstName"><?php echo $firstName ?>,</p>
                <p class="messageBody">Thank you for taking action to save our beloved koalas! We cannot continue the
                    work we are doing
                    without individuals like you who are willing to put in the time and effort required to make a
                    difference.
                    Now, we ask you to be patient with us as our adoption personnel personally go over your answers and
                    match you
                    to a koala to which you will make the greatest difference in their protection. This will be based on
                    your selection
                    of <?php echo "<span class='formInfoHighlight'>$joey</span>, <span class='formInfoHighlight'>$adults</span>, <span class='formInfoHighlight'>$mumJoey</span>, and <span class='formInfoHighlight'>$wild</span>." ?>
                    You are joining a
                    family of adopters who know the stakes and care accordingly. We are all excited for you to meet your
                    koala
                    and see how your donation makes an ongoing difference in its life. Within the next week you will
                    receive
                    a package with your certificate, photo, and welcome letter at the
                    address, <?php echo "<span class='formInfoHighlight'>$streetAddress $city</span>, <span class='formInfoHighlight'>$state $zip</span>" ?>
                    .
                    Until then, please see the included list to get an idea of what you have to look forward to!
                    We will send updates to you
                    at <?php echo "<span class='formInfoHighlight'>$emailAddress</span> and <span class='formInfoHighlight'>$phone</span>" ?>
                    . You may opt out at any
                    time!
                    Please also note that we have received and will take into account your additional message:</p>
                <blockquote><?php echo $message ?></blockquote>
                <p class="messageSignOff">Thank you and welcome to the cause! <br> <span class="signature">- President of the Koala Bear
                        National Information Center</span>
                </p>

                <div class="nextSteps">
                    <div>
                        <p class="headingSm">The Journey Ahead:</p>
                        <ol>
                            <li>Receive package with certificate, photo, and welcome letter within one week.</li>
                            <li>Stop by and meet your koala in person.</li>
                            <li>Continue to get periodic updates and photos to see the difference you made in your
                                koala's
                                life.
                            </li>
                            <li>As time goes on, consider adopting a second koala and supporting your first koala for a
                                second
                                year.
                            </li>
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
        </div>
    </body>
</html>
