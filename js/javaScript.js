 function alertaValidar(){
    let Modelo = document.getElementById('Modelo').value
    let Marca = document.getElementById('Marca').value
    let Color = document.getElementById('Color').value
    let Comentario = document.getElementById('Comentario').value  
    let Cantidad = document.getElementById('Cantidad').value 
    let Valor = document.getElementById('Valor').value 
    let Total = document.getElementById('Total').value 
    let placa = document.getElementById('Placa').value 


  if(Modelo  === ""){
     
    Swal.fire({
        icon: 'warning',
        title: 'Debe de Completar el Campo Modelo',
      })
      return false;

}

else if(Marca === ""){
    Swal.fire({
        icon: 'warning',
        title: 'Debe de Completar el Campo Marca',
      })
    return false;
}

else if (Color === ""){
Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo Color',
  })
return false;
}
else if (Comentario === ""){
Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo Comentario',
  })
return false;
}
else if (Cantidad === ""){
Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo Cantidad',
  })
return false;
}
else if (Valor === ""){
Swal.fire({
    icon: 'warning',
    title: 'Debe de Completar el Campo Valor',
  })
return false;
}
else if (Total === ""){
  Swal.fire({
      icon: 'warning',
      title: 'Debe de Completar el Campo Total',
    })
  return false;
  }
  else if (placa === ""){
    Swal.fire({
        icon: 'warning',
        title: 'Debe de Completar el Campo placa',
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


