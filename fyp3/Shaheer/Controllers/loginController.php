<?php
	
	require('../config.php');

if(isset($_POST['submit']))
{
	extract($_POST);
	$errors = array();

	if(!$username)
	{
		$errors['e']="Required *";
	}

	if(!$password)
	{
		$errors['p']="Password Required *";
	}
	
	
}if(empty($errors))
	{
	
		$query="SELECT * FROM user where username='".$username."' and password='".$password."'" or die(mysql_error());
		$execute=mysqli_query($con,$query);
		$row=mysqli_fetch_array($execute);
		
		if($row)
		{
			// echo"ok";
			header('location:../dashboard.php');


		}else{
			echo"
			<script>
			alert('Wrong Password')
			</script>
			";
			header('Location:../login.php');
        }
	}else
	{	redirect();	}




	function redirect()
{
		$_SESSION['errors']= $errors;
		$_SESSION['postedValues'] = $_POST;
		header('Location:../login.php');
}




?>