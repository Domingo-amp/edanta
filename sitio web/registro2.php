<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Agentes Adunales Edanta C.A</title>
<meta name="description" content="Agentes adunales edanta es una empresa que brinda servicios de aduana maritimos, aereos y terrestres">
<meta name="keywords" content="Agentes, aduana, aduanales, aereo, maritimo, mercancia, envios, venezuela">
<meta http-equiv="Content-Type"content="text/html; charset=windows-1252">
<META NAME="revisit-after" content="14 days">
<META NAME="robots" content="index,follow">
<META NAME="distribution" content="global">


<link href="style/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="MarcoGlobal">



<div id="MarcoHead">

<div id="sepracion"></div>
<div id="letras">
      <table width="655" border="0">
        <tr>
          <td width="6"></td>
          <td width="55" align="center"><a href="#"><img src="img/home.png" width="22" height="21" style="opacity:1;filter:alpha(opacity=100)"
onmouseover="this.style.opacity=0.5;this.filters.alpha.opacity=50"
onmouseout="this.style.opacity=1;this.filters.alpha.opacity=100"/></a></td>
          <td width="110" align="center"><a href="quienessomos.html"><strong>Quienes Somos</strong></a></td>
          <td width="94" align="center"><strong><a href="servicios.html">Servicios</a></strong></td>
          <td width="98" align="center"><a href="micuenta.php"><strong>Mi Cuenta</strong></a></td>
          <td width="105" align="center"><strong><a href="galeria.php">Galeria</a></strong></td>
          <td width="157" align="center"><strong><a href="contactanos.php">Contactanos</a></strong></td>
        </tr>
      </table>
</div>
</div><!--FIN DE MARCO HEAD-->




<div id="Separacion1"></div>




<div id="MarcoContenido">

        <table width="200" border="0" align="center">
          <tr>
            <td align="center"><strong><em>Registro de Usuario</em></strong></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
        </table>





<?php
	include ("cnx.php");
	
	
	$tipo = $_POST ['tipo'];
	
	
		$largo=5;
		$str = "abcdefghijklmnopqrstuvwxyz";
		$may = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$num = "1234567890";
		$cad = "";
		# Comienzo de la generacion de clave.
		$cad = substr($may ,rand(0,24),1);
		$cad .= substr($num ,rand(0,10),1);
		$cad .= substr($num ,rand(0,10),1);
		for($i=0; $i<$largo; $i++) {
		$cad .= substr($str,rand(0,24),1);
		}
		;
		
		
	
	if ($tipo == "Persona Natural")
	{
		
							
							$tipo 		= 1;
							$nombres 	= $_POST['nombres'];
							$apellidos 	= $_POST['apellidos'];
							$rif 		= "No aplica";
							$email		= $_POST['email1'];
							$pass		= $cad;
							$celular	= $_POST['celular'];
							$telefono	= $_POST['telefono'];
							$pais		= $_POST['pais'];
							$estado		= $_POST['estado'];
							$ciudad		= $_POST['ciudad'];
							$dir		= $_POST['dir'];
							$zipcode	= $_POST['zipcode'];
							$encargado	= "No aplica";
							$cargo		= "No aplica";
							$como		= $_POST['como'];
							
							
							mysql_select_db ($baseDeDatos, $conexion);
							$consulta 	= "SELECT * FROM usuarios WHERE email='$email'";
							$hconsulta	= mysql_query ($consulta, $conexion);
							
							if (mysql_num_rows($hconsulta)>0)
							{
								?>
                                	<br />
                                    La cuenta de correo que ingreso ya existe en nuestra base de datos, por favor intente con otra cuenta de correo. Si ya posee una cuenta creada y no recuerda su contraseña puede recuperarla haciendo click en Recuperar Contraseña.
                                    <br /><br />
                                    <a href="registro.php"> Intentar de Nuevo</a>
                                    <br /><br />
                                    <a href="recuperar.php"> Recuperar contraseña</a>
                                <?php	
							}
							else
							{
								mysql_query ("INSERT INTO usuarios VALUES ('','$tipo','$nombres','$apellidos','$rif','$email','$pass','$telefono','$celular','$pais','$estado','$ciudad','$dir','$zipcode','$encargado','$cargo','$como')");
								
								mysql_close ($conexion);
								
								
								
								
								
									//Enviar email a correo
									
							
								
								$body='Se ha registrado un Nuevo Usuario (Persona Natural)								
								Nombres: 	'.$_POST['nombres'].'
								Apellidos: 	'.$_POST['apellidos'].'
								Pais: 		'.$_POST['pais'].'
								Estado: 	'.$_POST['estado'].'
								Ciudad:		'.$_POST['ciudad'].'
								E-Mail: 	'.$_POST['email'].'
								Celular: 	'.$_POST['celular'].'
								Telefono: 	'.$_POST['telefono'].'
								Direccion: 	'.$_POST['dir'].'
								
								';

								$body2 = 'Saludos Cordiales:
							
								Sr(a). '.$_POST['nombres'].', es un gusto para nosotros que usted forme parte de nuestra cartera de clientes. Su usuario y su password para acceer a su cuenta son los siguientes:
								
										Usuario:	'.$_POST['email1'].'
										Password:	'.$cad.'
									
								 Usted puede cambiar su contraseña cuando guste desde su cuenta en la pestaña editar perfil.				
									
									De igual forma lo invitamos a visitar nuestra pagina web www.agentesaduanalesedanta.com donde con su usuario y su contrasena, usted podra monitorear el estatus de sus facturas, pagos y servicios.
										
										Gracias por preferirnos, esperamos brindarles un excelente servicio.
										
											';
							
							
							
										$para="systemsadms@hotmail.com";
										$para2= $_POST['email1'];
							
									
										if ( isset ($_POST["btn_enviar"]))
										{
											$asunto = "Nuevo Registro de Usuario";
											$desde = $_POST["email1"];
											$mensaje = $body;
											
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nombre"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email1"] . "\r\n";  
							
							
											$asunto2 	= "Bienvenido a Agentes Aduanales Edanta";
											$desde2		= $_POST["email1"];
											$mensaje2 	= $body2;
											$cabeceras2 = "";
											$cabeceras2 = "MIME-VErsion: 1.0 \r\n";
											$cabeceras2	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras2 = "To: " . $_POST ["email1"] . "\r\n";
											$cabeceras2 = "From: " . "systemsadms@hotmail.com.com" . "\r\n";    
							
							
											mail ($para2, $asunto2, $mensaje2, $cabeceras2);   
							
														
											mail ($para, $asunto, $mensaje, $cabeceras);
												
											
											echo "Se ha registrado correctamente, en breve usteded recibira un email con los datos de su cuenta para acceder al aerea de clientes. Recuerde revisar la bandeja spam o correos no deseados";	
											
										}
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
								
							}//FIN DE IF NUM ROWS DE PERSONA NATURAL
				
			
	}//FIN DEL IF PERSONA NATURAL
	
	
	elseif ($tipo == "Persona Juridica")
	{
		
							$tipo 		= 2;
							$nombre 	= $_POST['empresa'];
							$apellido 	= "No aplica";
							$rif 		= $_POST['rif'];
							$email		= $_POST['email2'];
							$pass		= $cad;
							$telefono1	= $_POST['celular'];
							$telefono2	= $_POST['telefono'];
							$pais		= $_POST['pais'];
							$estado		= $_POST['estado'];
							$ciudad		= $_POST['ciudad'];
							$dir		= $_POST['dir'];
							$zipcode	= $_POST['zipcode'];
							$encargado	= $_POST['encargado'];
							$cargo		= $_POST['cargo'];
							$como		= $_POST['como'];
							
							
							mysql_select_db ($baseDeDatos, $conexion);
							$consulta 	= "SELECT * FROM usuarios WHERE email='$email'";
							$hconsulta	= mysql_query ($consulta, $conexion);
							
							if (mysql_num_rows($hconsulta)>0)
							{
								?>
                                	<br />
                                    La cuenta de correo que ingreso ya existe en nuestra base de datos, por favor intente con otra cuenta de correo. Si ya posee una cuenta creada y no recuerda su contraseña puede recuperarla dando click en Recuperar Contraseña.
                                    <br /><br />
                                    <a href="registro.php"> Intentar de Nuevo</a>
                                    <br /><br />
                                    <a href="recuperar.php"> Recuperar contraseña</a>
                                <?php	
							}
							else
							{
								mysql_query ("INSERT INTO usuarios VALUES ('','$tipo','$nombre','$apellido','$rif','$email','$pass','$telefono1','$telefono2','$pais','$estado','$ciudad','$dir','$zipcode','$encargado','$cargo','$como')");
								
								mysql_close ($conexion);
								
								
								
								
								
								
								
								
								
								
								//Enviar email a correo
								
								
							
								
								$body='Se ha registrado un Nuevo Usuario (Persona Juridica)								
								Empresa: 	'.$_POST['empresa'].'								
								Pais: 		'.$_POST['pais'].'
								Estado: 	'.$_POST['estado'].'
								Ciudad:		'.$_POST['ciudad'].'
								E-Mail: 	'.$_POST['email2'].'
								Celular: 	'.$_POST['telefono2'].'
								Telefono: 	'.$_POST['telefono1'].'
								Direccion: 	'.$_POST['dir'].'
								Encargado: 	'.$_POST['encargado'].'
								Cargo: 		'.$_POST['cargo'].'
								
								';

								$body2 = 'Saludos Cordiales:
							
								Srs. '.$_POST['empresa'].', es un gusto para nosotros que usted forme parte de nuestra cartera de clientes. Su usuario y su password para acceer a su cuenta son los siguientes:
								
										Usuario:	'.$_POST['email2'].'
										Password:	'.$cad.'
									
								 Usted puede cambiar su contraseña cuando guste desde su cuenta en la pestaña editar perfil.			
								

									De igual forma lo invitamos a visitar nuestra pagina web www.agentesaduanalesedanta.com donde con su usuario y su contrasena, usted podra monitorear el estatus de sus facturas, pagos y servicios.
										
										Gracias por preferirnos, esperamos brindarles un excelente servicio.
										
											';
							
							
							
										$para="systemsadms@hotmail.com";
										$para2= $_POST['email2'];
							
									
										if ( isset ($_POST["btn_enviar"]))
										{
											$asunto = "Nuevo Registro de Usuario";
											$desde = $_POST["email2"];
											$mensaje = $body;
											
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["empresa"] . "\r\n";
											$cabeceras = "From: " . $_POST ["email2"] . "\r\n";   
							
							
											$asunto2 	= "Bienvenido a Agentes Aduanales Edanta";
											$desde2		= $_POST["email2"];
											$mensaje2 	= $body2;
											$cabeceras2 = "";
											$cabeceras2 = "MIME-VErsion: 1.0 \r\n";
											$cabeceras2	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras2 = "To: " . $_POST ["email2"] . "\r\n";
											$cabeceras2 = "From: " . "servicios@systemsadms.com" . "\r\n";    
							
							
											mail ($para2, $asunto2, $mensaje2, $cabeceras2);   
							
														
											mail ($para, $asunto, $mensaje, $cabeceras);
												
											
											echo "Se ha registrado correctamente, en breve usteded recibira un email con los datos de su cuenta para acceder al aerea de clientes. Recuerde revisar la bandeja spam o correos no deseados";	
											
										}
								
								
							
							}
		

		
	}//FIN DE IF NUM ROWS PERSONA JURIDICA
	else
	{
		echo "Disculpa debes seleccionr que tipo de usuarios deseas registrar";	
	}
			

	
?>

<br /><br /><br /><br /><br /><br /><br /><br />




</div><!--FIN DE MAROCOCONTENIDO-->






<div id="Separacion1">.</div>
<div id="MarcoDireccion">
  <table width="900" border="0">
    <tr>
      <td width="448"><table width="426" border="0">
        <tr>
          <td width="271" align="left"><font color="#FFFFFF" size="-1">Edanta Agentes Aduanales C.A . Todos los Derechos reservados</font></td>
        </tr>
      </table></td>
      <td width="442"><table width="426" border="0">
        <tr>
          <td width="271" align="right"><font color="#FFFFFF" size="-1">Desing By : <a href="www.systemsadms.com">Systems Admins C.A</a></font></td>
        </tr>
      </table></td>
    </tr>
  </table>
</div>


</div><!--FIN DE MARCO GLOBAL-->


</body>





</html>
