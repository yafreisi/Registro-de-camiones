<?php
include("BD.php");

$placa = $_POST["placa"];
$codigo = $_POST["codigo"];
$cantidad = $_POST["cantidad"];
$pesoLB = $_POST["pesoLB"];


$query = "INSERT INTO registro(id,placa,codigoLavadora,Cantidad,pesoLB)VALUES ( false,  '$placa', '$codigo', '$cantidad', '$pesoLB' )";
$resultado = mysqli_query($conexion,$query);
if($resultado){

  header("location: Admin.php");

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit(); 


?>
