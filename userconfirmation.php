<?php
include_once 'header.php';

include_once 'dbconnect.php';

if(isset($_POST['registration-form-submit']))
{
	$formdata = array (
		'first_name'	=> ucfirst(trim(mysql_real_escape_string($_POST['first_name']))),
		'last_name'	=> ucfirst(trim(mysql_real_escape_string($_POST['last_name']))),
		'address1'	=> trim(mysql_real_escape_string($_POST['address1'])),
		'address2'	=> trim(mysql_real_escape_string($_POST['address2'])),
		'city'		=> trim(mysql_real_escape_string($_POST['city'])),
		'state'		=> trim(mysql_real_escape_string($_POST['state'])),
		'zip'		=> trim(mysql_real_escape_string($_POST['zip'])),
		'country'	=> trim(mysql_real_escape_string($_POST['country']))
	);
	
	$currenttime = date('Y-m-d H:i:s');

	$insert = "INSERT INTO users (firstname, lastname, address1, address2, city, zip, country, date) VALUES ('$formdata[first_name]','$formdata[last_name]','$formdata[address1]','$formdata[address2]','$formdata[city]','$formdata[zip]','$formdata[country]','$currenttime');";

	
	if(mysql_query($insert))
	{
		?>
		<div class="container-fluid">
		<p> Welcome <?php echo ($formdata[first_name]).' '.($formdata[last_name]) ?> </p>
		</div>
		<?php
	}
	else
	{
		?>
		<div class="container-fluid">
		<p> Something went wrong with your registration. We apologize for the inconvenience. </p>
		<?php
	}		
	
}
?>
