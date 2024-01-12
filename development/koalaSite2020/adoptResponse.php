
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact form response</title>
<link rel="icon" type="image/x-icon" href="../personalMonogramLogo.svg">
<style type="text/css">

@import url('https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap');

body {background-color:cadetblue;}

p, li {font-family:'Courier New', Courier, monospace;}

h1, h2 {font-family:'Gloria Hallelujah', cursive;}

#container  {background-color:lightblue;
			width: 800px;
			border: 2px double darkturquoise;
			padding: 10px;
			margin: 10px auto;
			}

#container p {color:rgb(4, 50, 50)}

#container h1, h2 {color:darkgoldenrod;}

#container li {color:rgb(4, 50, 50)}

p {color:white;}

.colorRed {
	color:white;
}
</style>
</head>

<body>
<div id="container">
<h1>Adoption Request Received</h1>
<h2>Your Koala Is Getting Excited!</h2>

<p>Thank you for taking action to save our beloved koalas! We cannot continue the work we are doing without individuals like you who are willing to put in the time and effort required to make a difference. Now, we ask you to be patient with us as our adoption personnel personally go over your answers and match you to a koala to which you will make the greatest difference in their protection. You are joining a family of adopters who know the stakes and care accordingly. We are all excited for you to meet your koala and see how your donation makes an ongoing difference in its life. Within the next week you will receive a package with your certificate, photo, and welcome letter. Until then, please see the included list to get an idea of what you have to look forward to! Thank you and welcome to the cause! <br> <strong>- President of the Koala Bear National Information Center</strong>
</p>

<p>The Journey Ahead:</p>
<ol>
  <li>Receive package with certificate, photo, and welcome letter within one week.</li>
  <li>Stop by and meet your koala in person.</li>
  <li>Continue to get periodic updates and photos to see the difference you made in your koala's life.</li>
  <li>As time goes on, consider adopting a second koala and supporting your first koala for a second year.</li>
  <li>Save the koalas!</li>
  </ol>

</div><!--close div container-->

<p>COPY OF ANSWERS RECEIVED</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>These are the answers you provided to our adoption personnel. Expect to receive a package within the next week containing your adoption materials which prove you are part of the effort to save the koalas! </p>";

//It will create a table and display one set of name value pairs per row
	echo "<table border='1'>";
	echo "<tr><th>Field Name</th><th>Value of field</th></tr>";
	foreach($_POST as $key => $value)
	{
		echo '<tr class=colorRow>';
		echo '<td>',$key,'</td>';
		echo '<td>',$value,'</td>';
		echo "</tr>";
	} 
	echo "</table>";
	echo "<p>&nbsp;</p>";

?>

</body>
</html>
