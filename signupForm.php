<!DOCTYPE html>
<html>
<head></head>
<body>
<?php


  if (!isset($_GET['submit'])) {
		$boxNums = array("#2050", "#4627", "#63274", "#14684", "#18090");
?>
<h1>If you are interested in volunteering to inventory a Little Free Library please fill out the form below.</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
	<p>Email: <input type="text" name="email"></p>
	<p>Select a Little Free Library: <select name="charter_num">
		<?php
		foreach($boxNums as $value) {
			echo '<option value="'.$value.'">'.$value."</option>\n";
		}
		?>
	</select></p>
	<input type="submit" name="submit">
	<?php

}
else {
	$box = $_GET['charter_num'];
	$email = $_GET['email'];

	echo "You entered $box and $email. We will contact you soon!";

  }
 ?>
</form>
</body>
</html>	
