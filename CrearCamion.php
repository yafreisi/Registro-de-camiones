<?php
include("BD.php");


//pasando los valores de los input por POST
$marca = $_POST["Marca"];
$modelo = $_POST["Modelo"];
$color = $_POST["Color"];
$comentario = $_POST["Comentario"];
$cantLavadora = $_POST["Cantidad"];
$valor = $_POST["Valor"];
$total = $_POST["Total"];
$placa = $_POST["Placa"];

//insertando los valores a la tabla camiones
$query = "INSERT INTO camiones(id,marca,modelo,color,comentario,cantLavadora,valorCarga,pesoTi,placa)VALUES ( false,  '$marca', '$modelo', '$color', '$comentario', '$cantLavadora', '$valor','$total','$placa' )";
$resultado = mysqli_query($conexion,$query);
if($resultado){

  header("location: Admin.php");//redireccionando a la vista de Admin.php

}else{
  print("Errormessage: %s\n". mysqli_error($conexion));
}

exit(); 



?>