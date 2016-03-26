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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationCheckbox.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationCheckbox.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
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




<div id="Separacion1"></div>




<div id="MarcoContenido2">

<table width="200" border="0" align="center">
  <tr>
    <td align="center"><strong><em>Registro de Usuario</em></strong></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>








<table width="516" border="0" align="center">
              <tr>
                <td width="510">
                <form method="POST" action="#">
                  <label for="tipo"><b>Seleccione el tipo de cuenta:</b></label>
                  <select name="tipo">
                    <option>Persona Natural</option>
                    <option>Persona Juridica</option>
                    <option selected="selected">Seleccionar</option>
                  </select>
                  <input type="submit" name="tipocuenta" id="tipocuenta" value="Seleccionar" />
                </form>
               </td>
              </tr>
    </table><br /><br />
            
            
          	
            <?php
				
				if (isset($_POST['tipocuenta']))
				{
					$tipo = $_POST['tipo'];
					
					if ($tipo == 'Persona Natural')
					{
						?>
                        
                        <br /><br />
                        <table width="350" border="0" align="center">
                          <tr>
                            <td align="center"><font color="#FF0000"><b>  Registro de ususario para Personas Naturales</b></font></td>
                          </tr>
                        </table>                      
                        <br /><br />
                        
<table width="600" border="0" align="center">
                              <tr>
                                <td>
                                <form method="post" action="registro2.php">
<table width="600" border="0" align="center">
                                      <tr>
                                        <td width="71">Nombres:</td>
                                        <td width="204"><span id="sprytextfield3">
                                          <label for="nombres"></label>
                                          <input type="text" name="nombres" id="nombres" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                        <td width="125">Apellidos:</td>
                                        <td width="181"><span id="sprytextfield10">
                                          <label for="text3"></label>
                                          <input type="text" name="apellidos" id="text3" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                      </tr>
                                  </table>
                                    <br />
                                    <table width="600" border="0" align="center">
                                      <tr>
                                        <td width="71">Email:</td>
                                        <td width="204"><span id="sprytextfield2">
                                        <label for="email"></label>
                                        <span id="sprytextfield11">
                                        <label for="email1"></label>
                                        <input type="text" name="email1" id="email1" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                                        <td width="125">Confirmar Email:</td>
                                        <td width="181"><span id="spryconfirm1">
                                          <label for="cemail1"></label>
                                          <input type="text" name="cemail1" id="cemail1" />
<span class="confirmInvalidMsg">The values don't match.</span></span></td>
                                      </tr>
                                    </table>
                                    <br />
                            <table width="600" border="0" align="center">
                                      <tr>
                                        <td width="71">Celular:</td>
                                        <td width="204"><span id="cel">
                                      <label for="celular"></label>
                                        <span id="sprytextfield13">
                                        <label for="celular"></label>
                                        <input type="text" name="celular" id="celular" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                                        <td width="125">Tlf Habitacion:</td>
                                        <td width="180"><span id="sprytextfield7">
                                        <label for="telefono"></label>
                                        <span id="sprytextfield14">
                                        <label for="telefono"></label>
                                        <input type="text" name="telefono" id="telefono" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                                      </tr>
                                  </table>
                                    <br />
                                  <table width="600" border="0" align="center">
                                      <tr>
                                        <td width="71">Pais:</td>
                                        <td width="204"><label for="pais"></label>
                                          <select name="pais" id="pais">
                                            <option>Venezuela</option>
                                            <option>Estados Unidos</option>
                                        </select></td>
                                        <td width="125">Estado:</td>
                                        <td width="181"><span id="sprytextfield8">
                                    <label for="estado"></label>
                                        <span id="sprytextfield15">
                                        <label for="estado"></label>
                                        <input type="text" name="estado" id="estado" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                                      </tr>
                                  </table>
                                    <br />
                            <table width="414" border="0" align="center">
                                      <tr>
                                        <td width="71">Ciudad:</td>
                                        <td width="204"><span id="sprytextfield4">
                                      <label for="ciudad"></label>
                                        <span id="sprytextfield18">
                                        <label for="ciudad"></label>
                                        <input type="text" name="ciudad" id="ciudad" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                                        <td width="125">Direccion:</td>
                                        <td width="125"><span id="sprytextfield19">
                                          <label for="text4"></label>
                                          <input type="text" name="dir" id="text4" />
                                        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
                                      </tr>
                                    </table>
                                  <br />
                                    <table width="230" border="0" align="center">
                                                  <tr>
                                                    <td width="77">Zip Code:</td>
                                                    <td width="143"><label for="zipcode"></label>
                                                    <input type="text" name="zipcode" id="zipcode" /></td>
                                                  </tr>
                                  </table>
                                   <br />
                                   <table width="396" border="0" align="center">
                                          <tr>
                                            <td width="211">Como se entero de Nostros:</td>
                                            <td width="175"><label for="como"></label>
                                              <select name="como" id="como">
                                                <option>Recomendacion</option>
                                                <option>Amigos</option>
                                                <option>Otra Empresa</option>
                                                <option>Internet</option>
                                                <option>Publicidad</option>
                                                <option>Prensa</option>
                                                <option>Radio</option>
                                            </select></td>
                                          </tr>
                                  </table>
                                        <br />
                                   <table width="600" border="0" align="center">
                                     <tr>
                                       <td width="20"><span id="sprycheckbox2">
                                         <input type="checkbox" name="checkbox1" id="checkbox1" />
                                         <label for="checkbox1"></label>
                                       <span class="checkboxRequiredMsg">Please make a selection.</span></span></td>
                                       <td width="570" align="center">He leido, comprendido y aceptado los terminos de edantaagentesaduanales.com</td>
                                     </tr>
                                     <tr>
                                       <td>&nbsp;</td>
                                       <td><input type="hidden" name="tipo" value="Persona Natural" /></td>
                                     </tr>
                                   </table>
                                  <br />
                                   <table width="230" border="0" align="center">
                                          <tr>
                                            <td><input type="submit" name="btn_enviar" value="Registrar"></td>
                                            <td><input type="reset"  value="Deshacer"></td>
                                          </tr>
                                  </table>
            
                                </form>
                                </td>
                              </tr>
                            </table>
                        
                        
                        
                        
                        
                        
                        
                        <?php
					}
					else
					{
						?>
                        
                          <br /><br />
                        <table width="350" border="0" align="center">
                          <tr>
                            <td align="center"><font color="#FF0000"><b>  Registro de ususario para Personas Juridicas</b></font></td>
                          </tr>
                        </table>                      
    <br /><br />
                        
                        <table width="600" border="0" align="center">
                  <tr>
                    <td>
                    <form method="post" action="registro2.php">
                    <table width="600" border="0" align="center">
                          <tr>
                            <td width="74">Empresa:</td>
                            <td width="204"><span id="sprytextfield1">
                          <label for="empresa"></label> 
                            <span id="sprytextfield16">
                            <label for="empresa"></label>
                            <input type="text" name="empresa" id="empresa" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                            <td width="123">RIF:</td>
                            <td width="183"><span id="sprytextfield5">
                            <label for="rif"></label>
                            <span id="sprytextfield17">
                            <label for="rif"></label>
                            <input type="text" name="rif" id="rif" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                          </tr>
                      </table>
                        <br />
						<table width="600" border="0" align="center">
                          <tr>
                            <td width="74">Email:</td>
                            <td width="202"><span id="sprytextfield2">
                              <label for="email2"></label>
                            <span id="sprytextfield6">
                          <label for="email2"></label>
                          <span id="sprytextfield12">
                          <label for="email2"></label>
                          <input type="text" name="email2" id="email2" />
                          <span class="textfieldRequiredMsg">A value is required.</span></span></span></span></td>
                            <td width="125">Confirmar Email:</td>
                            <td width="181"><span id="spryconfirm2">
                            <label for="text2"></label>
                            <span id="spryconfirm3">
                            <label for="cemail2"></label>
                            <input type="text" name="cemail2" id="cemail2" />
                            <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></span></td>
                          </tr>
                        </table>
                        <br />
                <table width="600" border="0" align="center">
                          <tr>
                            <td width="74">Telfono1:</td>
                            <td width="201"><span id="cel">
                            <label for="telefono1"></label>
                            <span id="sprytextfield20">
                            <label for="celular"></label>
                            <input type="text" name="celular" id="celular" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                            <td width="125">Telefono2:</td>
                            <td width="180"><span id="sprytextfield7">
                              <label for="telefono2"></label>
                            <span id="sprytextfield21">
                              <label for="telefono"></label>
                              <input type="text" name="telefono" id="telefono" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                          </tr>
                        </table>
                        <br />
       				  <table width="600" border="0" align="center">
                          <tr>
                            <td width="74">Pais:</td>
                            <td width="205"><label for="pais"></label>
                              <select name="pais" id="pais">
                                <option>Venezuela</option>
                                <option>Estados Unidos</option>
                            </select></td>
                            <td width="121">Estado:</td>
                            <td width="182"><span id="sprytextfield8">
                            <label for="estado"></label>
                            <span id="sprytextfield22">
                            <label for="estado"></label>
                            <input type="text" name="estado" id="estado" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                          </tr>
                      </table>
                        <br />
			    <table width="600" border="0" align="center">
                          <tr>
                            <td width="74">Ciudad:</td>
                            <td width="196"><span id="sprytextfield4">
                          <label for="encargado"></label>
                            <span id="sprytextfield23">
                            <label for="ciudad"></label>
                            <input type="text" name="ciudad" id="ciudad" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                            <td width="123">Direccion:</td>
                            <td width="180"><span id="sprytextfield9">
                            <label for="cargo"></label>
                            <span id="sprytextfield24">
                            <label for="dir"></label>
                            <input type="text" name="dir" id="dir" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                          </tr>
                      </table>
                        <br />
                        <table width="230" border="0" align="center">
                              <tr>
                                <td width="77">Zip Code:</td>
                                <td width="143"><label for="zipcode"></label>
                                <input type="text" name="zipcode" id="zipcode" /></td>
                              </tr>
                      </table>

                        <br />
<table width="600" border="0" align="center">
                          <tr>
                            <td width="80">Encargado:</td>
                            <td width="202"><span id="sprytextfield4">
                            <label for="encargado"></label>
                            <span id="sprytextfield25">
                            <label for="encargado"></label>
                            <input type="text" name="encargado" id="encargado" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                            <td width="118">Cargo:</td>
                            <td width="182"><span id="sprytextfield9">
                            <label for="cargo"></label>
                            <span id="sprytextfield26">
                            <label for="cargo"></label>
                            <input type="text" name="cargo" id="cargo" />
                            <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
                          </tr>
                      </table>
                       <br />
                       <table width="396" border="0" align="center">
                              <tr>
                                <td width="211">Como se entero de Nostros:</td>
                                <td width="175"><span id="spryselect1">
                                  <label for="como"></label>
                                <select name="como" id="como">
                                    <option>Recomendacion</option>
                                    <option>Amigos</option>
                                    <option>Otra Empresa</option>
                                    <option>Internet</option>
                                    <option>Publicidad</option>
                                    <option>Prensa</option>
                                    <option>Radio</option>
                                </select>
                                </span></td>
                              </tr>
                      </table>
                            <br />
                       <table width="600" border="0" align="center">
                         <tr>
                           <td width="27"><span id="sprycheckbox1">
                             <label for="terminos"></label>
                           <span class="checkboxRequiredMsg">Please make a selection.</span><span id="sprycheckbox3">
                           <input type="checkbox" name="checkbox2" id="checkbox2" />
                           <label for="checkbox2"></label>
                           <span class="checkboxRequiredMsg">Please make a selection.</span></span></span></td>
                           <td width="563">He leido, comprendido y aceptado los termino de edantaagentesaduanales.com</td>
                         </tr>
                         <tr>
                           <td>&nbsp;</td>
                           <td><input type="hidden" name="tipo" value="Persona Juridica" /></td>
                         </tr>
                       </table>
                      <br /><br />
                       <table width="230" border="0" align="center">
                              <tr>
                                <td><input type="submit" name="btn_enviar" value="Registrar"></td>
                                <td><input type="reset"  value="Deshacer"></td>
                              </tr>
                      </table>

                    </form>
                    </td>
                  </tr>
                </table>
                        
						
						
						
						<?php
					}
				}
				
			?>
  
  
  
  
  
          
          
          


<!-------------------------------------Fin de formualrio 1----------------------------------------------->
















<br /><br /><br /><br /><br />

<br /><br /><br /><br /><br />



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
<?php
 if(isset($_POST['tipocuenta']))
 {
?>
<script type="text/javascript">
var sprytextfield3  = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield10 = new Spry.Widget.ValidationTextField("sprytextfield10");
var sprytextfield13 = new Spry.Widget.ValidationTextField("sprytextfield13");
var sprytextfield14 = new Spry.Widget.ValidationTextField("sprytextfield14");
var sprytextfield15 = new Spry.Widget.ValidationTextField("sprytextfield15");
var sprycheckbox2 	= new Spry.Widget.ValidationCheckbox("sprycheckbox2");
var sprytextfield16 = new Spry.Widget.ValidationTextField("sprytextfield16");
var sprytextfield17 = new Spry.Widget.ValidationTextField("sprytextfield17");
var sprytextfield20 = new Spry.Widget.ValidationTextField("sprytextfield20");
var sprytextfield21 = new Spry.Widget.ValidationTextField("sprytextfield21");
var sprytextfield22 = new Spry.Widget.ValidationTextField("sprytextfield22");
var sprytextfield23 = new Spry.Widget.ValidationTextField("sprytextfield23");
var sprytextfield24 = new Spry.Widget.ValidationTextField("sprytextfield24");
var sprytextfield25 = new Spry.Widget.ValidationTextField("sprytextfield25");
var sprytextfield26 = new Spry.Widget.ValidationTextField("sprytextfield26");
var sprytextfield11 = new Spry.Widget.ValidationTextField("sprytextfield11");
<?php
 if($_POST['tipo']=="Persona Natural")
 {
 ?>
	 var spryconfirm1 	= new Spry.Widget.ValidationConfirm("spryconfirm1", "email1", {isRequired:false});
 <?php	 
 }
 
  if($_POST['tipo']=="Persona Juridica")
 {
 ?>
	 var spryconfirm3 	= new Spry.Widget.ValidationConfirm("spryconfirm3", "email2");
 <?php	 
 }
?>
var sprytextfield12 = new Spry.Widget.ValidationTextField("sprytextfield12");
var sprytextfield18 = new Spry.Widget.ValidationTextField("sprytextfield18");
var sprytextfield19 = new Spry.Widget.ValidationTextField("sprytextfield19");
var sprycheckbox3 = new Spry.Widget.ValidationCheckbox("sprycheckbox3");
</script>
<?php
 }
?>
</body>





</html>
