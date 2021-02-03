<?php
$destino= "belymendoza1999@gmail.com";
$nombre= $_POST["Nombre"];
$correo= $_POST["Correo"];
$telefono= $_POST["Telefono"];
$mensaje= $_POST["mensaje"];
$contenido = "Nombre:".$nombre."\nCorreo:".$correo."\nTelefono:".$telefono."\nMensaje:". $mensaje;
mail($destino,"Contacto",$contenido);

?>