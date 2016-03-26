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

<link rel="stylesheet" href="galeria/ajxlightbox.css" type="text/css" />
<script src="galeria/ajxlightbox.js" type="text/javascript"></script>
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





	include ("cnx.php");					
				
				$consulta = "SELECT * FROM galeria;";
				$hacerconsulta=mysql_query ($consulta,$conexion);
				
				if (mysql_num_rows($hacerconsulta)>=1)
				{
				
				echo "<div id='galeria'>";				
				
				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				while ($reg)
				{				
				echo "<div id='galeria'>				
				<div class='AJXLightboxOCRJCfB'>
				 <div>
				 <a href='galeria/guia_".$reg[1].".jpg' rel='ajxlightbox'><img src='galeria/guia_".$reg[1].".jpg' width='85' height='85'/></a></div>
				</div>

				</div>";
							

				$reg = mysql_fetch_array($hacerconsulta,MYSQL_BOTH);
				
				}
				echo "</div>";
				mysql_close($conexion);
				
				echo "<br>";
				

				}
				else
				{
					echo "No hay fotos cargadas a la galeria";
					echo "<br>";
				}
				
				?>
  
  <br /><br /><br /><br /><br /><br /><br /> <br /><br /><br /><br /><br /><br /><br /><br />
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
