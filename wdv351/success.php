<!DOCTYPE html>
<html>
    <head>
        <title>Stripe Implementation</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Stripe Implementation Success</h1>
        <p>Thank you for your payment!</p>

        <?php

            session_start();

            if ($_SESSION["cookbook_purchased"] == true) {
                echo "<a href='indesignCookbook.pdf' download='germanCookbookPDF.pdf'>Download Cookbook PDF</a>";
            }

            if ($_SESSION["grimm_purchased"] == true) {
                echo "<a href='brothersGrimmFairyTalesBookDesignCompressed.pdf' download='grimmPDF.pdf'>Download Grimm PDF</a>";
            }

        ?>

        <p><a href="index.php"><button>Return To Store</button></a></p>
    </body>
</html>