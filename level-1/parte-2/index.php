<?php
session_start();

 function procesarFormulario(): string {
  $mensaje = "";
  if (!empty($_POST["usuario"]) && !empty($_POST["email"]) && !empty($_POST["contrasena"])) {
      $usuario = $_POST["usuario"];
      $email = $_POST["email"];
      $contrasena = $_POST["contrasena"];
      $_SESSION["usuario"] = $usuario; 

      $mensaje = "Sus Datos / Usuario: " . $usuario . " / Email: " . $email . " / Contraseña: " . $contrasena 
      . " Se han Registrado Correctamente";
  } else {
      $mensaje = "ERROR: Datos Inexistentes";
  }
   return $mensaje;
}

echo procesarFormulario ();

?> 