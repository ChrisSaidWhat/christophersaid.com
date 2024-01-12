
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
<h1>Volunteer Sign-Up Received</h1>
<h2>Your Answers Are Being Processed</h2>

<p>Thank you for taking action to save our beloved koalas! We cannot continue the work we are doing without individuals like you who are willing to put in the time and effort required to make a difference. Now, we ask you to be patient with us as our volunteer organizers personally go over your answers and match you to a position where you will make the greatest difference for the koalas. You are joining a team of people who know the stakes and care accordingly. We are all excited to meet you and work alongside you! Within the next 48 hours you will receive an email with the next steps and training materials. Until then, please see the included list to get an idea of what you have to look forward to! Thank you and welcome to the cause! <br> <strong>- President of the Koala Bear National Information Center</strong>
</p>

<p>The Journey Ahead:</p>
<ol>
  <li>Receive email with contact info and training materials within 48 hours.</li>
  <li>Complete training within two weeks and meet with volunteer coordinator in person.</li>
  <li>Create schedule unique to you and your specific position and begin regular volunteer work.</li>
  <li>As time goes on, consider joining the KBNIC as a full-time career.</li>
  <li>Save the koalas!</li>
  </ol>

</div><!--close div container-->

<p>COPY OF ANSWERS RECEIVED</p>
<hr>
<p>&nbsp;</p>

<?php

echo "<p class='colorRed'>These are the answers you provided to our volunteer organizers. Expect to hear a response within 48 hours containing the next steps on your journey to save the koalas! </p>";

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
