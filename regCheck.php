<?php 
	

	if (isset($_REQUEST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		if (isset($_REQUEST['gender']) ) 
			   {
			   	 $gender = $_REQUEST['gender'];
			   }

			   else{ echo "gender required";}
		
		$dob = $_REQUEST['date'];

		if (empty(trim($name)) ||empty(trim($password)) || empty(trim($email)) ||empty(trim($dob)) ) 
		{
			echo "Boxes can not be null";


			if (filter_var($email,FILTER_VALIDATE_EMAIL) == false) 
			{

			   echo '<br>Not a valid email address';

			   
			}

			
		}

	
		else
		{

			
			echo 'Name:'.$name.'<br>';
			echo 'Email:'.$email.'<br>';
			echo 'Password:'.$password.'<br>';
			echo 'Gender:'.$gender.'<br>';
			echo 'DOB:'.$dob;
			
			

		}
		
	}

	// function validate($data)
	// {
	// 	$data = trim($data);

	// }
	
		

 ?>