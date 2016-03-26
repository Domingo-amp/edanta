<?php
	$nick	= 	$_POST['nick'];
	$pass	=	$_POST['pass'];


			require("cnx.php");
			$ssql = "SELECT * FROM usuarios WHERE email='$nick' and pass='$pass'";
			$rs = mysql_query($ssql,$conexion);
			
			if (mysql_num_rows($rs)==1)
			{
				session_start();
				$_SESSION["login"] = $nick;			

				header("location:micuenta.php");
				mysql_close($conexion);				
			}
			else
			{
				header("location:micuentan.php");
				mysql_close($conexion);
			} 
	
?>