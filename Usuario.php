<?php 

include("BD.php");

$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$cargo = $_POST["cargo"];

$query = "INSERT INTO usuarios(id,nombre,usuario,contra,id_cargo)VALUES ( false,  '$nombre', '$usuario', '$password', '$cargo' )";
$resultado = mysqli_query($conexion,$query);
if($resultado){

  header("location: index.php");

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit(); 



?>