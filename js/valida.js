
function validarRegistro(){
    let placa = document.getElementById('placa').value
    let codigo = document.getElementById('codigo').value
    let cantidad = document.getElementById('cantidad').value
    let pesoLB = document.getElementById('pesoLB').value  
     
    
    
    if(placa  === ""){
     
    Swal.fire({
        icon: 'warning',
        title: 'Debe de Completar el Campo placa',
      })
      return false;
    
    }
    
    else if(codigo === ""){
    Swal.fire({
        icon: 'warning',
        title: 'Debe de Completar el Campo codigo',
      })
    return false;
    }
    
    else if (cantidad === ""){
    Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo cantidad',
    })
    return false;
    }
    else if (pesoLB === ""){
    Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo pesoLB',
    })
    return false;
    }
    else{
    Swal.fire({
    icon: 'success',
    
    
    timer: 5000
    })
    
    $("#prueba").submit();
    
    }
    }