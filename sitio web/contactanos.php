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
			if ( isset ($_POST["btn_enviar"]))
			{
				$para = 'systemsadms@hotmail.com';
				$asunto = $_POST["asunto"];
				$desde = $_POST["desde"];
				
				$mensaje =
				"Empresa:" . $_POST["empresa"] . "<br><br>" .	
				"Telefono de Contacto:" . $_POST["telefono"] . "<br><br>" .		
				"Persona de Contacto:" . $_POST["nombre"] . "<br><br>" .  
				$_POST["mensaje"];
				
				
				$cabeceras = "";
				$cabeceras = "MIME-VErsion: 1.0 \r\n";
				$cabeceras = "Content-Type: text/html; charset=iso-8859-1\r\n";
				//$cabeceras = "To: " . $_POST ["desde"] . "\r\n";
				$cabeceras .= "From: " . $_POST ["desde"] . "\r\n";
				
				mail ($para, $asunto, $mensaje, $cabeceras);
				
			echo "Su mensaje ha sido enviado con exito, pronto sera atendido por uno de nuestros analistas";
				
			
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";
			echo "<br><br>";

				
			}
			else
			{
			?>







.



  <table width="641" border="0" align="center">
    <tr>
      <td width="635" align="center" class="texto"><form method="post" action="#">
        <fieldset>
          <legend><b>Envianos un e-mail</b></legend>
          <br />
          <table width="597" border="0">
            <tr>
              <td width="167"><strong>Empresa :<br />
              </strong></td>
              <td width="420"><label for="empresa"></label>
                <span id="sprytextfield1">
                  <label for="nombre2"></label>
                  <input name="empresa" type="text" id="empresa" />
                </span></td>
            </tr>
            <tr>
              <td width="167"><strong>Telefono :<br />
              </strong></td>
              <td width="420"><label for="empresa"></label>
                <span id="sprytextfield1">
                  <label for="nombre2"></label>
                  <input name="telefono" type="text" id="telefono" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Persona Contacto:</strong></td>
              <td><label for="desde"></label>
                <span id="sprytextfield2">
                  <label for="desde2"></label>
                  <input type="text" name="nombre" id="nombre" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Direccion e-mai:</strong></td>
              <td><label for="asunto"></label>
                <span id="sprytextfield3">
                  <label for="asunto2"></label>
                  <input type="text" name="desde" id="desde" />
                </span></td>
            </tr>
            <tr>
              <td><strong>Asunto del Mensaje:</strong></td>
              <td><input type="text" name="asunto" id="asunto" /></td>
            </tr>
          </table>
          <br />
          <table width="595" border="0">
            <tr>
              <td width="169" valign="top"><strong>Mensaje:</strong></td>
              <td width="416"><label for="mensaje"></label>
                <span id="sprytextarea1">
                <label for="mensaje2"></label>
                <textarea name="mensaje" id="mensaje2" cols="45" rows="5"></textarea>
                <span class="textareaRequiredMsg"></span></td>
            </tr>
          </table>
          <br />
          <table width="594" border="0">
            <tr>
              <td width="588" align="center"><input type="submit" name="btn_enviar" value="Enviar Correo"/></td>
            </tr>
          </table>
        </fieldset>
      </form></td>
      <td width="635" align="center" valign="top" class="texto"><em><strong>Horario de Atenci&oacute;n:<br />
        </strong></em> De Lunes a Viernes
        A partir de las 8:00 a 5:pm
        Hora de Venezuela <br />
        <br />
        <em><strong>Atenci&oacute;n Telef&oacute;nica: <br />
          </strong></em> + (58) 212 324 23 58<br />
        + (58) 212 814 62 98<br />
        <br />
        <br />
        <em><strong>Email:<br />
        </strong></em> atencionalcliente@ agentesaduana&eacute;sedanta.com</td>
    </tr>
  </table>
  
  
  
  
<?php
}
?>
  
</div> <!--Fin de marco contenido-->






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
