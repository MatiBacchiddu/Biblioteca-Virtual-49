$(document).ready(function (){
    $('#crear-admin').on('submit', function(e){
      e.preventDefault();

      var datos = $(this).serializeArray(); // conseguir los datos
      
     
      $.ajax({
          type: $(this).attr('method'),
          data: datos, // que datos enviar al metodo
          url: $(this).attr('action'), //a donde lo enviamos
          dataType: 'json',
          success: function (data){ //cuando la llamada sea exitosa
            var resultado = data;
             if(resultado.respuesta == 'exito'){
                Swal.fire(
                    'Has añadido a un administrador correctamente',
                    'success'
                  )
             }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Hubo un Error, Quizas deberias cambiar el Usuario..',
            
                  })
             }
          }

      })



    });





    $('#login-admin').on('submit', function(e){
      e.preventDefault();

      var datos = $(this).serializeArray(); // conseguir los datos
      
     
      $.ajax({
          type: $(this).attr('method'),
          data: datos, // que datos enviar al metodo
          url: $(this).attr('action'), //a donde lo enviamos
          dataType: 'json',
          success: function (data){ //cuando la llamada sea exitosa
             console.log(data);
             var resultado = data;
             if(resultado.respuesta == 'exitoso'){
                Swal.fire(
                    'Login correcto',
                    'Bienvenid@ '+resultado.usuario+'!!'
                  )

                  setTimeout(function(){
                   window.location.href = 'admin-area.php';
                  }, 1500); // 2000 es igual a 2 segundos

             }else{
                Swal.fire({
                    icon: 'Error',
                    title: 'Usuario o password incorrectos',
                    text: 'Error',
            
                  })
             }
          }

      })



    });




});