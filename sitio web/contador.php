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




<link href="style/portada.css" rel="stylesheet" type="text/css" />
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->
</head>

<body>

<div id="Separacion1"></div>
<div id="MarcoGlobal">

<div id="Logo">

  <table width="620" border="0" align="center">
    <tr>     
      <td width="213" align="center"><img src="img/edanta.png" width="200" height="100" /></td>
    </tr>
  </table>
</div><!--Fin de Logo-->
<div id="Separacion3"></div>
<div id="Rorador">



	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
    	<li><img src="data1/images/circule.jpg" alt="Avionetas" title="Avionetas" id="wows1_2"/></li>
  		<li><img src="data1/images/avioneta.jpg" alt="Avionetas" title="Avionetas" id="wows1_2"/></li>
		<li><img src="data1/images/rotador.jpg" alt="Nuevo" title="Nuevo" id="wows1_0"/></li>
		<li><a href="http://wowslider.com/vf"><img src="data1/images/paso1.jpg" alt="full screen slider" title="paso1" id="wows1_1"/></a></li>
		<li><img src="data1/images/paso2.jpg" alt="paso2" title="paso2" id="wows1_2"/></li>
        
	</ul></div>
	<div class="ws_bullets"><div>
    	<a href="#" title="Avioneta"><img src="data1/tooltips/circule.jpg" alt="Tramitamos"/>3</a>
    	<a href="#" title="paso2"><img src="data1/tooltips/avioneta.jpg" alt="Tramitamos"/>3</a>
		<a href="#" title="Nuevo"><img src="data1/tooltips/rotador.jpg" alt="Nuevo"/>1</a>
		<a href="#" title="paso1"><img src="data1/tooltips/paso1.jpg" alt="paso1"/>2</a>
		<a href="#" title="paso2"><img src="data1/tooltips/paso2.jpg" alt="paso2"/>3</a>        
	</div></div><span class="wsl"><a href="http://wowslider.com/vu">image carousel</a> by WOWSlider.com v7.2</span>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->


</div><!--Rotador-->
<div id="Separacion2"></div>

<div id="Entrar">
<table width="272" border="0" align="center">
  <tr>
    <td width="180" align="center"><a href="index.php">Entrar al sitio</a></td>
  </tr>
</table>


<div id="Separacion2"></div>
<?php
$fp = fopen("contador.txt","r"); 
//Se abre el archivo contador.txt, la r de read

$visitas = intval(fgets($fp)); 
// Se lee las visitas y se indica con intval para que se devuela un valor entero

$visitas++; 
//Se agregan las visitas

fclose($fp); 
// Se cierra el archivo

$fp = fopen("contador.txt","w"); 
// Se abre en modo de escritura

fputs($fp,$visitas); 
// Se escriben las visitas 

 
// Se muestran las visitas
?>
<table width="500" border="0" align="center">
  <tr>
    <td align="center"><div class="contador"><em>Visitas Recibidas este mes:<b>"<?php echo $visitas;  ?>"</b></em></div></td>
  </tr>
</table>



</div><!--Fin de Entrar-->







</div>

</body>
</html>
