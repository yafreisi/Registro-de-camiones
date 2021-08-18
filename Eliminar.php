<?php

include("BD.php");
$id=$_GET["id"];
$sql="DELETE FROM registro WHERE id = '".$id."'";


$resultado = mysqli_query($conexion,$sql);
if($resultado){

  header("location: Admin.php");//redireccionando a la vista de Admin.php

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit();

?>