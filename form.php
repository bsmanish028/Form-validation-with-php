<?php 

	$NameError ="";
	$EmailError ="";
	$GenderError ="";
	$WebsiteError ="";
	


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form with field Validation</title>
</head>
<style type="text/css">
	input[type = "text"],input[type = "email"],textarea{
		border: 1px solid dashed;
		background-color: lightgray;
		width: 500px;
		padding: .5em;
		font-size: 1em;
	}
.Error{
	color: red;
}
</style>
<body style="width: 800px; ">

	<form  action="form.php" method="POST" >
		<legend><h2>Feedback Form </h2></legend>
		*Please fill out the following field
		<fieldset style=" padding: 1em;">
			<b>Name :</b><br>
			<input type="text" name="Name" class="input" ><span class="Error">* <?php echo $NameError; ?></span> <br><br>
			<b>E-Mail :</b><br>
			<input type="email" class="input" name="Email"><span class="Error">* <?php echo $EmailError; ?></span> <br><br>
			<b>Gender : </b>&nbsp;&nbsp;&nbsp;
			<input type="radio" name="Gender" class="radio" value="Male">Male
			<input type="radio" name="Gender" class="radio" value="Female">Female<span class="Error">* &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $GenderError; ?></span><br><br>
			<b>Website :</b><br>
			<input type="text" class="input" name="Website"><span class="Error">* <?php echo $WebsiteError; ?></span><br><br>
			<b>Comment :</b><br>
			<textarea name="Comment" rows="5" cols="25"></textarea><br><br>
			<input type="submit" name="Submit" value="Submit Your Information">
		</fieldset>
	</form>

</body>
</html>