<?php
session_start();
?>                
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
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
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
<?php
if (isset($_SESSION["login"]))
		{
			require ("mostrar.php");
?>

  
    <table width="855" border="0" align="center">
    <tr>
    <td width="570" align="right"><em>Recuerda cerrar tu seccion al finalizar tu consulta</em></td>
    </tr>
    </table>
                            
	<table width="855" border="0" align="right">
                          <tr>
                            <td width="726" align="right">
                            <form action "#" method="POST">
                            	<input type="submit" name="datos" value="Ver datos de tu cuenta">
                            </form>
                            </td>
                            <td width="119" align="left">
                            
                            </a><a href="destruir.php"><strong><em><font color="#FF0000">Cerrar Session</font></em></strong></a></td>
      </tr>
    </table>                        
  <br />
  
  
  
  
  
  
  
  
   						 <?php
						if (isset($_POST['datos']))
						{
						?>
   						 <br /> <br /> <br />
                         
                         
                         
                         <div id="datos">
                         <form method="POST" action="#">
                         <table width="850" border="0" align="center">
                          <tr>
                            <td align="center" bgcolor="#CCCCCC"><table width="830" border="0" align="center">
                              <tr>
                                <td width="27"><font color="#0000FF">Nick:</font></td>
                                <td width="26">
                                  <input name="nick2" type="text" id="nick2"  value="<?php echo $nick; ?>" readonly="readonly"/>                                
                                </td>
                                <td width="55"><font color="#0000FF">Password:</font></td>
                                <td width="173"><input type="text" name="pass2" id="pass2" value="<?php echo $pass; ?>" /></td>
                                <td width="66"><font color="#0000FF">Nombres:</font></td>
                                <td width="173"><input name="nombres2" type="text" id="nombres2" value="<?php echo $nombres; ?>" /></td>
                                <td width="67"><font color="#0000FF">Apellidos:</font></td>
                                <td width="179"><input name="apellidos2" type="text" id="apellidos2" value="<?php echo $apellidos; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Email:</font></td>
                                <td><input name="email2" type="text" id="textfield5"  value="<?php echo $email; ?>" readonly="readonly"/></td>
                                <td><font color="#0000FF">Pais:</font></td>
                                <td><input type="text" name="pais2" id="textfield6" value="<?php echo $pais; ?>" /></td>
                                <td><font color="#0000FF">Estado:</font></td>
                                <td><input name="estado2" type="text" id="textfield7" value="<?php echo $estado; ?>" /></td>
                                <td><font color="#0000FF">Ciudad:</font></td>
                                <td><input name="ciudad2" type="text" id="textfield8" value="<?php echo $ciudad; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Telefono:</font></td>
                                <td><input name="telefono2" type="text" id="telefono2"  value="<?php echo $telefono; ?>"/></td>
                                <td><font color="#0000FF">Celular:</font></td>
                                <td><input name="celular2" type="text" id="celular2"  value="<?php echo $celular; ?>"/></td>
                                <td><font color="#0000FF">Direccion:</font></td>
                                <td><input name="dir2" type="text" id="dir2"  value="<?php echo $dir; ?>"/></td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                              </tr>
                            </table>
                              <table width="830" border="0" align="center">
                                <tr>
                                  <td><table width="200" border="0" align="right">
                                    <tr>
                                      <td align="center"><a href="micuenta.php"><font color="#FF0000">>>OCULTAR DATOS<<</font></a></td>
                                    </tr>
                                  </table></td>
                                </tr>
                            </table>
                              <table width="200" border="0">
                                <tr>
                                  <td><input type="reset" name="Reset" id="button" value="Deshacer Cambios" /></td>
                                  <td>&nbsp;</td>
                                  <td><input type="submit" name="editar" id="editar" value="Guardar Cambios" /></td>
                                </tr>
                            </table></td>
                          </tr>
                        </table>
						</form>
                         </div> <!--FIN DIV DATOS-->

                           <?php						   
							}
						   ?> 
  
  
  
  						
  
  
  
  
<?php                 
    if (isset($_POST["editar"]))
	{
			$id2 		=	$cas;
			$nick2		= 	$_POST['nick2'];
			$pass2		= 	$_POST['pass2'];
			$nombres2	= 	$_POST['nombres2'];
			$apellidos2	= 	$_POST['apellidos2'];			
			$email2		=	$_POST['email2'];
			$pais2		=	$_POST['pais2'];
			$estado2	=	$_POST['estado2'];
			$ciudad2	=	$_POST['ciudad2'];
			$telefono2	=	$_POST['telefono2'];
			$celular2	=	$_POST['celular2'];
			$dir2		=	$_POST['dir2'];
			
					
	

require ("cnx.php");				
$consulta = "UPDATE usuarios SET 
pass ='$pass2', nombre ='$nombres2', apellido ='$apellidos2', email ='$email2', pais='$pais2', estado='$estado2', ciudad='$ciudad2', telefono='$telefono2', celular='$celular2', dir='$dir2' WHERE id=$id2" ;
			
			$hacerconsulta = mysql_query ($consulta);
			
				
			mysql_close ($conexion);
			
			echo "<table width='200' border='0' align='center'>
				  <tr>
					<td><b>Los cambios en tus datos personales fueron realizados con exito</b></td>
				  </tr>
				</table>";
	}
	?>
  
  
  


  
  
  
  
  <br /><br />
  <table width="773" border="0" align="center">
     <tr>
       <td align="center"> <em><strong>Bievenido a tu cuenta Edanta no olvides cerrar tu session de usuario al terminar tu consulta.</strong></em></td>
     </tr>
   </table>
  <br /><br />
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <?php
  
  
  
  
  
  
  	if(isset($_POST['cargarvl']))
					{
					$cliente 	= $cas;
					$vl		 	= $_POST['vl'];
					$estatus	= "NO REVISADO";

					require ("cnx.php");
										
					mysql_query ("INSERT INTO vl VALUES 
					('', '$cliente','$vl','$estatus')");
					mysql_close ($conexion);
					
					echo "Su ha cargado el VL con exito a nuestros sistemas";
					}
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					



			if(isset($_POST['reportarpago']))
					{
						
						
					$cliente 	= $cas;
					$deposito 	= $_POST['deposito'];
					$banco 		= $_POST['banco'];
					$fecha 		= $_POST['fecha'];
					$nombredep 	= $_POST['nombredep'];
					$tunombre 	= $_POST['tunombre'];
					$monto	 	= $_POST['monto'];
					$telefonop	= $_POST['telefonop'];
					$emailp	 	= $_POST['emailp'];
					$estatus	= "Reportado";

					require ("cnx.php");
										
					mysql_query ("INSERT INTO pagos VALUES 
					('', '$cliente','$deposito','$banco','$fecha','$nombredep','$tunombre','$monto','$telefonop','$emailp','$estatus')");
					mysql_close ($conexion);
					
					echo "Su pago ha sido reportado con exito";
						
						

						
			//Enviar Email			
						
			/*			
			
			$body='Se ha reportado un nuevo pago
			
								Numero de Deposito o Transferencia:		'.$_POST['deposito'].'
								Banco: 		'.$_POST['banco'].'
								Monto: 		'.$_POST['monto'].'
								Fecha: 		'.$_POST['fecha'].'
								Nombre del Depositante: 	'.$_POST['nombredep'].'
								Nombre:		'.$_POST['nombre'].'
								Telefono: 	'.$_POST['telefono'].'
								Correo: 	'.$_POST['correo'].'

								
								';
								
											//$para="dr.free24@gmail.com";
											$para = 'systemsadms@hotmail.com';
												
											$desde = $_POST["nombre"];
											$mensaje = $body;
											$asunto 	= "Nuevo Reporte de Pago ";
											$desde		= $_POST["nick"];
											$mensaje 	= $body;
											$cabeceras = "";
											$cabeceras = "MIME-VErsion: 1.0 \r\n";
											$cabeceras	= "Content-Type: text/html; charset=iso-8859-1\r\n";
											$cabeceras = "To: " . $_POST ["nick"] . "\r\n";
											//$cabeceras = "From: " . $_POST ["correo"] . "\r\n";    
											$cabeceras .= "From: www.drfree24.com \r\n";
							
							
											mail ($para, $asunto, $mensaje, $cabeceras);  
											
											
											*/
											 	
			
		
			}

			
?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  <table width="800" border="0" align="center">
                          <tr>
                            <td width="287" align="left"><div id="TabbedPanels1" class="TabbedPanels">
                              <ul class="TabbedPanelsTabGroup">
                                <li class="TabbedPanelsTab" tabindex="0">Cargar VL</li>
                                <li class="TabbedPanelsTab" tabindex="0">Reportar Pagos</li>
                              </ul>
                              <div class="TabbedPanelsContentGroup">
                                <div class="TabbedPanelsContent"><!--Campo VL-->
                                
                                <br />
                                <form method="post" action="#">
                                <table width="400" border="0" align="left">
                                  <tr>
                                    <td>VL N°:</td>                                
                                    
                                     <td><input type="text" name="vl"/></td>                                    
                                     <td><input type="submit" name="cargarvl" value="Cargar nuevo VL"/></td>                                  
                                    
                                    
                                  </tr>
                                </table>
								</form>
                                <br /><br /><br />
                                <strong>Estatus de Vl Cargados:</strong><br />
                                <br />
                                
                                <?php
								require("cnx.php");
				
									$consulta = "SELECT * FROM vl;";
									$hacerconsulta=mysql_query ($consulta,$conexion);
					
					
									
									echo "<table border='0' bordercolor='#FF0000' align='left' width='250'>";
									echo "<tr>";
									echo "<td align='center'><em>Id</em></td>";
									echo "<td align='center'><em>Numero VL</em></td>";
									echo "<td align='center'><em>Estatus</em></td>";

					
					
									echo "</tr>";
									
									
									$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
									
									while ($reg)
									{
									echo "<tr>";
									echo "<td align='center'>".$reg[0]."</td>";
									echo "<td align='center'>".$reg[2]."</td>";
									echo "<td align='center'>".$reg[3]."</td>";

									
					
					
									$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
									echo "</tr>";
									}
									echo "</table>";
									mysql_close($conexion);
								
								?>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                </div><!--FIN DE CAMPO VL-->
                                <div class="TabbedPanelsContent">
                                
                                <form method="post" action="#">
          <table width="800" border="0">
              <tr>
                <td width="240" valign="top"><table width="240" border="0">
                  <tr>
                    <td width="86">Deposito/transferencia N&ordm; </td>
                    <td width="144"><input type="text" name="deposito" id="numero" /></td>
                  </tr>
                  <tr>
                    <td>Banco Emisor</td>
                    <td><select name="banco" id="banco">
                      <option>Mercantil</option>
                      <option>Banesco</option>
                      <option>Venezuela</option>
                      <option>Provincial</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td>Fecha de Transaccion</td>
                    <td><input type="text" name="fecha" id="fecha" /></td>
                  </tr>
                  <tr>
                    <td>Nombre del depositante</td>
                    <td><input type="text" name="nombredep" id="nombredep" /></td>
                  </tr>
                  <tr>
                    <td>Tu nombre</td>
                    <td><input type="text" name="tunombre" id="nombre" /></td>
                  </tr>
                  </table></td>
                <td width="240" valign="top"><table width="240" border="0">
                  <tr>
                    <td width="86">Monto:</td>
                    <td width="144"><input type="text" name="monto" id="monto" /></td>
                  </tr>
                  <tr>
                    <td>Telefono:</td>
                    <td><input type="text" name="telefonop" id="textfield14" /></td>
                  </tr>
                  <tr>
                    <td>E-mail:</td>
                    <td><input type="text" name="emailp" id="textfield15" /></td>
                  </tr>
                  </table>
                  <table width="240" border="0">
                    <tr>
                      <td align="center">
                      <br />
                      <input type="submit" name="reportarpago" id="reportarpago" value="Reportar Pago" />
                      <br /></td>
                    </tr>
                  </table></td>
                <td width="296" valign="top">
             
                 <div id="Dir3">
                            <table width="290" border="0" align="center">
                              <tr>
                                <td width="248"><strong>Para transferencias o depositos</strong></td>
                              </tr>
                              <tr>
                                <td>Banco Mercantil</td>
                              </tr>
                              <tr>
                                <td>0105 0086 901086100565</td>
                              </tr>
                              <tr>
                                <td>Dr.free Agencia de Aduanas C.A</td>
                              </tr>
                              <tr>
                                <td>RIF: J-30943606-6</td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="center" valign="baseline">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="baseline">Contactanos al +(58)2123311154 Si necesitas asistencia.</td>
                              </tr>
                          </table>
                        </div><!--FIN DE DIR-->
             		
                </td>
              </tr>
            </table>
          </form>
                                
                                
                                
                                </div>
                              </div>
                            </div></td>
                          </tr>
                        </table>
  
  <br /><br /><br />
  <br /><br /><br />
  <br /><br /><br />
  
  
  
  
  
  
  
  
  
  
<?php	
		// FIN DEL IF PRINCIPAL DE LOGIN
		}else
		{
			?>
            <table width="600" border="0" align="center">
              <tr>
                <td align="center">
                <br />
                Si todavia no eres miembro de nuestra familia <a href="registro.php"><font color="#006600"><strong><em>Registrate Aqui</em></strong></font></a>,!Es muy facil, rapido y sin ningun costo!.<br /> </td>
              </tr>
            </table>
				<br />
			
            
            
            
            <table width="325" border="0" align="center">
      <tr>
        <td width="319" height="148" align="center" bgcolor="#006600">
        
        <form method="post" action="validar.php">
<br />	
          	  <strong><font color="#FFFFFF">Login de Usuario</font></strong><br />
          	  <br />
          	  <font color="#FFFFFF">Su usuario:</font>
          	  <br />	
          	  <input type="text" name="nick" id="nick" />
          	  <br />
          	  <br />
          	  <font color="#FFFFFF">Su contrase&ntilde;a: </font>
          	  <br />	
          	  <input type="password" name="pass" id="pass" />
          	  <br /><br />
          	  <input type="submit" name="button" id="button" value="Ingresar" />
          	  <br />
				<br /> 
          	  </font></a><font size="-6"><a href="olvidar.php"><font color="#FFFFFF">Olvido su Contrase&ntilde;a</font></a></font> <br /><br />
        </form>
        </td>
      </tr>
    </table>
    <br /><br /><br />
            
            
            
            <?php
		}
?>		

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

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>





</html>

