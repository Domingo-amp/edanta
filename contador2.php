<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

HOLA



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

echo $visitas; 
// Se muestran las visitas
?>

<body>
</body>
</html>