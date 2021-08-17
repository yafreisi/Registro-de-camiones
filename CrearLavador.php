<?php
include("BD.php");

$Marca = $_POST["Marca"];
$Modelo = $_POST["Modelo"];
$Codigo = $_POST["Codigo"];
$Valor = $_POST["Valor"];
$PesoLB = $_POST["PesoLB"];



$query = "INSERT INTO lavador(id,codigo,marca,modelo,valor,pesoLB)VALUES ( false,  '$Codigo', '$Marca', '$Modelo', '$Valor', '$PesoLB' )";
$resultado = mysqli_query($conexion,$query);
if($resultado){

  header("location: Admin.php");

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit(); 

?>