<?php
include("BD.php");

$usuario = $_POST["Usuario"];
$password = $_POST["Password"];

session_start(); //iniciando session
$_SESSION["Usuario"] = $usuario;

$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contra='$password'";//consulta para validar si existe el usuario
$resultado = mysqli_query($conexion,$consulta);

$rows = mysqli_fetch_array($resultado);


//decision para saber que tipo de usuario es 
if($rows['id_cargo']==1)//administrador
{
    header("location: Admin.php");
}
else if($rows['id_cargo']==2)//usuario
{
    header("location: Usuario.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">Error</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);






?>