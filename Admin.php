<?php
include("BD.php");
$sql = "SELECT * FROM registro";//Seleccionar la tabla regirstro

$consulta="SELECT * FROM camiones";//Seleccionar la tabla camiones

$result = mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
$consulLa = "SELECT * FROM lavador";//Seleccionar la tabla lavadora
$resultL = mysqli_query($conexion,$consulLa) or die(mysqli_error($conexion));



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <script src="asset/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="asset/dist/sweetalert2.css">
</head>
<body>
       
<svg  style="display: none; ">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="home" viewBox="0 0 16 16">
    <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
  </symbol>
  <symbol id="speedometer2" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
  </symbol>
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="people-circle" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
  </symbol>
  <symbol id="grid" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
  </symbol>
</svg>
 
<header>
    <div class="px-3 py-2 bg-dark text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="index.php" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
         
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-reply-all-fill" viewBox="0 0 16 16">
            <path d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
            <path d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z"/>
            </svg>
            &nbsp Cerrar Sesion
          </a>
          

         <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
           <!--   <li>
              <a href="#" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"/></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"/></svg>
                Orders
              </a>
            </li>-->
            <li>
              <a href="CrearLavador.php" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#grid"/></svg>
                Crear Lavador
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#people-circle"/></svg>
                Crear Camion
              </a>
            </li>
          </ul> 
        </div>
      </div>
    </div>
   
</header>
<br>


<form  action="CrearRegistro.php" method="POST" enctype='multipart/form-data'>
  <div class="container-fluid pb-3">
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-light border rounded-3">
      <div class="row g-3 mt-3">
  <div class="col col-sm-6"> 
  <label class="fo">Camion</label>
  <select class="form-select" name="placa" id="placa" aria-label="Default select example">
  <?php foreach ($result as $opcion): ?>
  <option selected>Placa Camion</option>
  <option value="<?php echo $opcion['placa']?>"><?php echo $opcion['placa']?></option>
<?php endforeach ?>
</select>
  </div>
  <div class="col col-sm-6">
  <label class="fo" >Lavador</label>
  
  <select class="form-select" name="codigo" id="codigo" aria-label="Default select example">
  <?php foreach ($resultL as $opcionLa): ?>
  <option selected>Codigo Lavador</option>
  <option value="<?php echo $opcionLa['codigo']?>"><?php echo $opcionLa['codigo']?></option>
<?php endforeach ?>
</select>

  </div>
</div>
<div class="row g-3 mt-3">
  <div class="col">
    <input type="text" name="cantidad"  id="cantidad" class="form-control" placeholder="Cantidad Lavadora" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" name="pesoLB"  id="pesoLB" class="form-control" placeholder="Peso LB" aria-label="Last name">
  </div>
  
</div>

</form>




<div class="mt-2 Center" >
<input type="submit"`id="prueba" onclick="validarRegistro(); return false"  class="btn btn-primary" value="Enviar">
</div>
      </div>
      <div class="bg-light border rounded-3">
        <br><table class="table">
  <thead>
    <tr>
    <th scope="col">id</th>
      <th scope="col">Placa Camion</th>
      <th scope="col">Codigo Camion</th>
      <th scope="col">Cantidad Camion</th>
      <th scope="col">Peso LB</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
   
    
  <?php $result=mysqli_query($conexion,$sql);
                    
                    while($row  = mysqli_fetch_assoc($result)){?>
  
    <tr>  
                    <td ><?php echo $row['id'];?></td>
                    <td ><?php echo $row["placa"];?></td>
                    <td><?php echo $row["codigoLavadora"];?></td>
                    <td><?php echo $row["Cantidad"];?></td>
                    <td><?php echo $row["pesoLB"];?></td>
                    
                    
                  
                    <td>
 
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="Admin.php?id=<?php echo $row['id']?>" type="button"   onclick="imprimirPDF()" class="btn btn-dark" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
  <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
  <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
</svg></a>
<a href="actualizar.php?id=<?php echo $row['id']?>"  type="button"   class="btn btn-success" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
<a href="eliminar.php?id=<?php echo $row['id']?>" type="button"   class="btn btn-danger" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
                    </div>
                    </td>
 
<?php }?>

    </tr>
  
  
  
   
  
  
  
  
    
    
  </tbody>
</table>
      </div>
    </div>
  </div>
  <!--Exportar PDF --->

 <div class="card mb-3" id="pdf" style="max-width: 540px;" hidden="true" >
  <div class="row g-0">
    <div class="col-md-2">
    <svg class="bi d-block mx-auto mt-5 mb-1" width="40" height="40"><use xlink:href="#people-circle"/></svg>
    </div>
    <div class="col-md-8">
      <div class="card-body">
            
  <?php $result=mysqli_query($conexion,$sql);
                    
                    while($row = mysqli_fetch_assoc($result)){?>
        <h5 class="card-title"><?php echo $row["placa"];?></h5>
        <p class="card-text"><?php echo $row["codigoLavadora"];?></p>
        <p class="card-text"><small class="text-muted"><?php echo $row["Cantidad"];?></small></p>
        <p class="card-text"><small class="text-muted">><?php echo $row["pesoLB"];?></small></p>
        <?php }?>
      </div>
    </div>
  </div>
</div>
  <script>
  
  function imprimirPDF(){
   var pegarD = document.getElementById('pdf').innerHTML;
   var vista = window.open('','','width=800,height=600');
   vista.document.write('<html><head>');
   vista.document.write('<title>PDF</title></head>');
   vista.document.write('<body>');
   document.getElementsByClassName('card')
   vista.document.write(pegarD);
   vista.document.write('</body></html>');
   vista.document.close();
   vista.print();
 
 }
 </script>
<!-- Modal Lavador -->
<div class="modal fade tema" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
      <a href="#" class="">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-textarea colo" viewBox="0 0 16 16">
        <path d="M1.5 2.5A1.5 1.5 0 0 1 3 1h10a1.5 1.5 0 0 1 1.5 1.5v3.563a2 2 0 0 1 0 3.874V13.5A1.5 1.5 0 0 1 13 15H3a1.5 1.5 0 0 1-1.5-1.5V9.937a2 2 0 0 1 0-3.874V2.5zm1 3.563a2 2 0 0 1 0 3.874V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V9.937a2 2 0 0 1 0-3.874V2.5A.5.5 0 0 0 13 2H3a.5.5 0 0 0-.5.5v3.563zM2 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
      </svg>
               
        </a>
        <h5 class="modal-title" id="exampleModalLabel">&nbsp Crear Lavador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="row g-3" action="CrearLavador.php" method="POST" enctype='multipart/form-data'>
   
   <div class="col-md-6">
     <label for="inputEmail4" class="form-label">Codigo</label>
     <input type="text" name="Codigo" id=""class="form-control" id="inputEmail4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Marca</label>
     <input type="text" name="Marca" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Modelo</label>
     <input type="text" name="Modelo" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Valor</label>
     <input type="text" name="Valor" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Peso en libras</label>
     <input type="text" name="PesoLB" class="form-control" id="inputPassword4">
   </div>
  
  
   
   
  
  
  <input type="submit" onclick="" id="prueba"  class="btn btn-primary" >
 </form>
      </div>
      <div class="modal-footer">
        <a type="sumbit" data-bs-dismiss="modal" class="btn btn-dark" value="Enviar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
  <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
  <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
</svg>&nbsp Close</a>

      </div>
    </div>
  </div>
</div>

<!-- Modal Camion-->
<div class="modal fade tema" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
      <a href="#" class="">
      <svg class="bi d-block mx-auto mb-1 colo" width="40" height="40"><use xlink:href="#people-circle"/></svg>
               
        </a>
        <h5 class="modal-title" id="exampleModalLabel">&nbsp Crear Camion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="CrearCamion.php" method="POST" class="row g-3 " enctype='multipart/form-data' >
   
   <div class="col-md-6">
     <label for="inputEmail4" class="form-label">Marca</label>
     <input type="text" id="Marca" name="Marca" class="form-control" id="inputEmail4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Modelo</label>
     <input type="text" id="Modelo" name="Modelo" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Color</label>
     <input type="text" id="Color" name="Color" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Comentario</label>
     <input type="text" id="Comentario" name="Comentario" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputPassword4" class="form-label">Cantidad de Lavadoras</label>
     <input type="text" id="Cantidad" name="Cantidad" class="form-control" id="inputPassword4">
   </div>
   <div class="col-md-6">
     <label for="inputAddress2" class="form-label">Valor de la carga</label>
     <input type="text" id="Valor" name="Valor" class="form-control" id="inputAddress2" >
   </div>
   <div class="col-md-6">
     <label for="inputAddress2" class="form-label">Peso total de la carga</label>
     <input type="text" id="Total" name="Total" class="form-control" id="inputAddress2" >
   </div>
   <div class="col-md-6">
     <label for="inputAddress2" class="form-label">Placa</label>
     <input type="text" id="Placa" name="Placa" class="form-control" id="inputAddress2" >
   </div>
  
  
   
   
  
  
   <input type="submit" onclick="alertaValidar(); return false" id="prueba"  class="btn btn-primary" >
   
 </form>
      </div>
      <div class="modal-footer">
        <a type="button" data-bs-dismiss="modal" class="btn btn-dark" value="Enviar"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
  <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"/>
  <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"/>
</svg>&nbsp Close</a>

      </div>
    </div>
  </div>
</div>


<script src="js/javaScript.js"></script>
<script src="js/valida.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>