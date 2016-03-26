<?php
	
		

			$user = $_POST['user'];
			$pass = $_POST['password'];
		
			

		if ($user == 'edanta' && $pass == 'edanta2014')
			{
				session_start();			
			$_SESSION['admin'] = $user ;
				
				header("location:home.php");
			}
		else
			{
				
				header("location:../loginn.php");	
			}	
	
?>