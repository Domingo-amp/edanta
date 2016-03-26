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
  
  
  
  
  
  
  
  
  
   						 <?php
						if (isset($_POST['datos']))
						{
						?>
   						 <br /> <br /> <br />
                         
                         
                         
                         <div id="datos">
                         <form>
                         <table width="850" border="0" align="center">
                          <tr>
                            <td align="center" bgcolor="#CCCCCC"><table width="830" border="0" align="center">
                              <tr>
                                <td width="27"><font color="#0000FF">Nick:</font></td>
                                <td width="26">
                                  <input name="textfield4" type="text" id="textfield4"  value="<?php echo $nick; ?>" readonly="readonly"/>                                
                                </td>
                                <td width="55"><font color="#0000FF">Password:</font></td>
                                <td width="173"><input type="text" name="textfield" id="textfield" value="<?php echo $pass; ?>" /></td>
                                <td width="66"><font color="#0000FF">Nombres:</font></td>
                                <td width="173"><input name="textfield2" type="text" id="textfield2" value="<?php echo $nombres; ?>" /></td>
                                <td width="67"><font color="#0000FF">Apellidos:</font></td>
                                <td width="179"><input name="textfield3" type="text" id="textfield3" value="<?php echo $apellidos; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Email:</font></td>
                                <td><input name="textfield6" type="text" id="textfield5"  value="<?php echo $email; ?>"/></td>
                                <td><font color="#0000FF">Pais:</font></td>
                                <td><input type="text" name="textfield7" id="textfield6" value="<?php echo $pais; ?>" /></td>
                                <td><font color="#0000FF">Estado:</font></td>
                                <td><input name="textfield8" type="text" id="textfield7" value="<?php echo $estado; ?>" /></td>
                                <td><font color="#0000FF">Ciudad:</font></td>
                                <td><input name="textfield5" type="text" id="textfield8" value="<?php echo $ciudad; ?>" /></td>
                              </tr>
                              <tr>
                                <td><font color="#0000FF">Telefono:</font></td>
                                <td><input name="textfield9" type="text" id="textfield9"  value="<?php echo $telefono; ?>"/></td>
                                <td><font color="#0000FF">Celular:</font></td>
                                <td><input name="textfield10" type="text" id="textfield10"  value="<?php echo $celular; ?>"/></td>
                                <td><font color="#0000FF">Direccion:</font></td>
                                <td><input name="textfield11" type="text" id="textfield11"  value="<?php echo $dir; ?>"/></td>
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
                         </div>

                           <?php						   
							}
						   ?> 
  
  
  
  						
  
  
  
  
  
  
  
  
  
  
  
  
  
  <br /><br />
  <table width="773" border="0" align="center">
     <tr>
       <td align="center"> <em><strong>Si realizaste una compra en los Estados Unidos y puedes enviar tus paquetes a nuestra direccion o hacer uso de nuestro servicio Delivery,</strong></em></td>
     </tr>
   </table>
  <br />
  
  
  
  <table width="637" border="0" align="center">
                          <tr>
                            <td width="287" align="left"><strong>Shipping Address (Envios Aereos)</strong></td>
                            <td width="27" align="left">&nbsp;</td>
                            <td width="285" align="left"><strong>Shipping Address (Envios Maritimos)</strong></td>
                          </tr>
                          <tr>
                            <td>Name: Tuorichaexpress / &quot;Coloque su nombre aqui&quot;</td>
                            <td>&nbsp;</td>
                            <td>Name: Tuorichaexpress / &quot;Coloque su nombre aqui&quot;</td>
                          </tr>
                          <tr>
                            <td>ADDRESS:12250 NW 25th ST Suite 115</td>
                            <td>&nbsp;</td>
                            <td>ADDRESS:3750 NW 114th Ave Unit 6. Doral,FL</td>
                          </tr>
                          <tr>
                            <td>ADDRESS2: C/O Air Marine</td>
                            <td>&nbsp;</td>
                            <td>City: Doral State.</td>
                          </tr>
                          <tr>
                            <td>CITY: MIAMI</td>
                            <td>&nbsp;</td>
                            <td>State: FLORIDA</td>
                          </tr>
                          <tr>
                            <td>STATE: FLORIDA</td>
                            <td>&nbsp;</td>
                            <td>Phone: 305 629 5016</td>
                          </tr>
                          <tr>
                            <td>ZIP CODE: 33182</td>
                            <td>&nbsp;</td>
                            <td>Fax: 305 629 5017</td>
                          </tr>
                          <tr>
                            <td>PHONE: 3054773496</td>
                            <td>&nbsp;</td>
                            <td>ZIP CODE: 33175</td>
                          </tr>
                        </table>
  
  
  
  
  
  
  
  
  
  
  
  
<?php	
		// FIN DEL IF PRINCIPAL DE LOGIN
		}else
		{
			?>
            <table width="600" border="0" align="center">
              <tr>
                <td align="center">
                Si todavia no eres miembro de nuestra familia <a href="registro.php"><font color="#006600"><strong><em>Registrate Aqui</em></strong></font></a>,!Es muy facil, rapido y sin ningun costo!. </td>
              </tr>
            </table>
            <br />
            <table width="600" border="0" align="center">
              <tr>
                <td align="center"><strong><em><font color="#FF0000">El usuario o la contrase&ntilde;a que ingreso es incorrecto.</font></em></strong></td>
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

</body>





</html>

