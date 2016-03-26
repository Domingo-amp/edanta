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
          <td width="55" align="center"><a href="index.php"><img src="img/home.png" width="22" height="21" style="opacity:1;filter:alpha(opacity=100)"
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

<div id="Separacion1">.</div>
<div id="MarcoContenido">
  <table width="228" border="0" align="center">
    <tr>
      <td width="218" align="center"><em><strong>Recuperar Contrase&ntilde;a</strong></em></td>
    </tr>
  </table>
  <br />

  
  
  
  
  
  
  
  
  
  
  
  
			<?php
            		if (isset($_POST['olvidar']))	
					{
						$email = $_POST['email'];
						
					 	require ("cnx.php");
						$ssql = "SELECT * FROM usuarios WHERE email='$email'";
						$rs = mysql_query($ssql,$conexion);

			
								if (mysql_num_rows($rs)== 1)
								{

									$ssql = mysql_query("SELECT * FROM usuarios WHERE email='$email'");
									$pass 		=  mysql_result($ssql,0,"pass");
									$body='Hemos recibido una solicitud de recuperacion de contrasena. Abajo mostramos su actual contraña, si desea realizar el cambio de la misma puede realizarlo en su cuenta de ususario.	
																				
										Password:			'.$pass.'							
										
										
										Si usted no realizo esta solicitud por la seguridad de su cuenta notifique a nuestro personal de inmediato.
										
										';
								
								
								
											$para= $email;
											$desde = $_POST["email"];
											$mensaje = $body;
										
					
											$asunto 	= "Recuperacion de Password";
											$desde		= $_POST["email"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["correo"] . "\r\n";
											$cabeceras = "From: " . "dr.free24@gmail.com" . "\r\n";    
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);
								
								
											mysql_close($conexion);
											
											echo "Su contraseña ha sido enviada a su direccion de correo, recuerde revisar su bandeja de correos no deseados en caso de no encontrar el correo de recuperacion de contrase en la bandeja de entrada";
								
								
								}else
								{
									echo "Esa direccion de correo no se encuentra dentro de nuestra base de datos por favor comuniquese con nuestro personal";	
								}
						
					}
					else
					{
            
            ?>
            
            
            
            
            
            
            
      <table width="700" border="0" align="center">
    <tr>
      <td width="378" align="center">Ingrese su direccion de correo electronico y en pocos segundo recibira en su email los datos solicitados.</td>
      </tr>
  </table>
          
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
  
  
  <br />
  <form method="post" action="#">
  <table width="306" border="0" align="center">
    <tr>
      <td width="244" align="center">
      	
      	  Direccion de email: 
      	    <input type="text" name="email" id="email" />
        </td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
    </tr>
    <tr>
      <td align="center"><input type="submit" name="olvidar" id="olvidar" value="Enviar Solicitud" /></td>
    </tr>
  </table>
  </form>
  
  
  
  
  
  <?php
	}
  ?>
  <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</div><!--FIN DE MARCO CONTENIDO-->






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
