<?php
session_start();

 function procesarFormulario(): string {
  if (empty($_POST["usuario"]) || empty($_POST["email"]) || empty($_POST["contrasena"])) {
      throw new Exception("Error: Datos Inexistentes");
  }

  $usuario = $_POST["usuario"];
  $email = $_POST["email"];
  $contrasena = $_POST["contrasena"];
     
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Error: El Email No es Valido");
  }
  
  if (strlen($contrasena) < 8 || strlen($contrasena) > 20) {
     throw new Exception("Error: La Contraseña no es Valida, solo se permiten entre 8 y 20 caracteres");
  }

  $_SESSION["usuario"] = $usuario;

  return "Sus Datos / Usuario: " . $usuario . " / Email: " . $email . " / Contraseña: " . $contrasena 
         . " Se han Registrado Correctamente";

 }

 try {
  echo procesarFormulario ();
} catch (Exception $error) {
  echo $error -> getMessage();
}

?> 
 
