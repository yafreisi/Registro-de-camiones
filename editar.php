
<?php
include("BD.php");

$ide= $$_GET["ide"];
$placa = $_GET["placas"];
$codigo = $_GET["codigo"];
$cantidad = $_GET["cantidad"];
$pesoLB = $_GET["pesoLB"];


$query = "UPDATE registro SET placa='$placa', codigoLavadora='$codigo', Cantidad='$cantidad', pesoLB='$pesoLB' WHERE id='$ide'";
$resultado = mysqli_query($conexion,$query);
if($resultado){

  header("location: Admin.php");

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit(); 




?>

