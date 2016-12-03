<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<style>
body 
{
	font-family: "Gill Sans";
	background-image: url(uploads/wood.jpg);
}
.circle
{
	border-radius: 50%;
	width: 100px;
	height: 100px;
	position: absolute;
}
.circles
{
	border-radius: 50%;
	width: 100px;
	height: 100px;
	position: relative;
	opacity: 0.4;
}
.row 
{
	 display: inline-block;
	float: left;
	text-align:center;
	padding:20px;
	width:auto;
	margin:10px;
				/* Set the border and border image properties */
	border:30px solid transparent;
	background-image: url(uploads/papyrus.png);
	background-size: 300px, 480px;
	background-repeat: no-repeat;
	background-position: center;
}
h1 
{
	font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	text-align: center;
	color: #FFFFFF;
	text-decoration: underline;
}
#errormsg 
{
	color: red;
}
div 
{
	display: block;
}

</style>
		<meta charset="utf-8">
		<title>Message Board</title>
</head>

<body>
<div id="tabs">
  <ul>
   <li><a href="Home.php"><span>Home</span></a></li>
    <li><a href="MessageBoard.php"><span>Messageboard</span></a></li>
    <li><a href="Profile.php"><span>Profiles</span></a></li>
    <li><a href="Basic_Login.php"><span>Basic Login</span></a></li>
  </ul>
</div>
	<br />
	<br />
	
<?php
	
	// this wil display the simple sign in form details.
	session_start();
	if (($_POST['username'] == 'Daoodk') && ($_POST['password'] == 'password1'))
		{
			$_SESSION['currentUser'] = $_POST['username'];
		}
	if($_SESSION['currentUser'])
		{
			echo '<div class="h1">';
			echo "Welcome back " . $_SESSION['currentUser'];
			echo '</div>';
		}
?>
<div id="row">
<p style="font:italic; color: white; font-size: 25px; text-align: center" id="demo"></p><img src="uploads/floor.jpg" style="width:500px; height:350px; align: center">
</div>
<script>
document.getElementById("demo").innerHTML =
"Your Screen resolution is " + screen.width + " x " + screen.height;
</script>

</body>
</html>
