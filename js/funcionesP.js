$(document).ready(function() {
    $("#nombre").focus();
    $("#usuario1").focus();

    // $("#password1").keyprees(function(){
    //     var password1 = $("#password1").val();
    //     var usuario1 = $("#usuario1").val();
	// 	$.ajax({
	// 		async:true,
	// 		type:'POST',
	// 		url:'LoginC.php',
	// 		data : {password1: password1, usuario1: usuario1},
	// 		// beforeSend : function(){
	// 		// 	//ruedita cargando
	// 		// 	// $("#resultado").html('<img src="ruedita.gif">');
	// 		// },
	// 		success : function(verL){
    //             console.log(verL);
	// 			if(verL == "OK") {
    //                 Swal.fire({
    //                     type: 'error',
    //                     title: 'Oops...',
    //                     text: 'Usuario y/o contraseña incorrectas',
                        
    //                   })
					
    //                 $("#password1").val("");
    //                 $("#usuario1").val("");
    //             }
    //         },
	// 		timeout : 4000,
	// 		error: function(){

	// 		}

        
	// 	})
    // });
 $("#password1").keypress(function(event) {
    var keycode = event.keyCode || event.which;
    if(keycode == '13') {
        // $a.ajax({

        }
    
});

    $("#boton1").click(function(){
        var password1 = $("#password1").val();
        var usuario1 = $("#usuario1").val();
		$.ajax({
			async:true,
			type:'POST',
			url:'LoginC.php',
			data : {password1: password1, usuario1: usuario1},
			// beforeSend : function(){
			// 	//ruedita cargando
			// 	// $("#resultado").html('<img src="ruedita.gif">');
			// },
			success : function(verL){
            
				if(verL == "OK") {
                    
                    Swal.fire({
                        type: 'error',
                        title: 'Oops...',
                        text: 'Usuario y/o contraseña incorrectas',
                        
                      })
					
                    $("#password1").val("");
                    $("#usuario1").val("");
                }else{

                    window.location.href= 'index.php';

                }
            },
			timeout : 4000,
			error: function(){

			}

        
		})
    });

    $("#usuario12").blur(function(){
		var usuario12 = $('#usuario12').val();
		$.ajax({
			async:true,
			type:'POST',
			url:'confirmarUsuarioP.php',
			data : {usuario12: usuario12},
			// beforeSend : function(){
			// 	//ruedita cargando
			// 	// $("#resultado").html('<img src="ruedita.gif">');
			// },
			success : function(ver12){
                console.log(ver12);
				if(ver12 == "NO") {
					alert('El usuario ya Existe');  
					$("#usuario12").css('border','1px solid red');
					$("#usuario12").val("");
                }
            },
			timeout : 4000,
			error: function(){

            }
            

        
		})
    });
    
    $("#correo1").blur(function(){
		var correo2 = $('#correo1').val();
		$.ajax({
			async:true,
			type:'POST',
			url:'confirmarCorreoP.php',
			data : {correo1: correo2},
			// beforeSend : function(){
			// 	//ruedita cargando
			// 	// $("#resultado").html('<img src="ruedita.gif">');
			// },
			success : function(ver13){
                console.log(ver13);
				if(ver13 == "NO") {
					alert('El correo ya se encuentra registrado ');  
					$("#correo1").css('border','1px solid red');
					$("#correo1").val("");
                }
            },
			timeout : 4000,
			error: function(){

            }
            

        
		})
    });
    
    $("#usuario").blur(function(){
		var usuario = $(this).val();
		$.ajax({
			async:true,
			type:'POST',
			url:'confirmarUsuario.php',
			data : {usuario: usuario},
			// beforeSend : function(){
			// 	//ruedita cargando
			// 	// $("#resultado").html('<img src="ruedita.gif">');
			// },
			success : function(verU){
                console.log(verU);
				if(verU == "NO") {
					alert('El usuario ya se encuentra Registrado');  
					$("#usuario").css('border','1px solid red');
					$("#usuario").val("");
                }
            },
			timeout : 4000,
			error: function(){

            }
            

        
		})
    });
    
    


    $("#correo").blur(function(){
		var correo = $(this).val();
		$.ajax({
			async:true,
			type:'POST',
			url:'confirmarCorreo.php',
			data : {correo: correo},
		
			success : function(verC){
                console.log(verC);
				if(verC == "NO") {
					alert('El Correo ingresado ya se encuentra Registrado');  
					$("#correo").css('border','1px solid red');
					$("#correo").val("");
                }
            },
			timeout : 4000,
			error: function(){

			}

        
		})
	});


      
        $("#registrar").click(function(){
            var editar = $('#editar').val();
            var nombreProyecto = $('#nombreProyecto').val();
            var nombreCliente = $('#nombreCliente').val();
            var correo13 = $('#correo13').val();
            var numeroOrden = $('#numeroOrden').val();
            var monto = $('#monto').val();
            var descripcionP = $('#descripcionP').val();
            // var repetirCorreo = $('#repetirCorreo').val();
            
            $.ajax({
                async:true,
                type:'POST',
                url:'nuevoProyectoC.php',
                data : {editar:editar, nombreProyecto : nombreProyecto, nombreCliente : nombreCliente, correo13: correo13, numeroOrden: numeroOrden, monto : monto, descripcionP: descripcionP},
               
                success : function(ver){
                    console.log(ver);
                    if(ver == "OK"){
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Se ha creado correctamente el Proyecto',
                            showConfirmButton: false,
                            timer: 1500
                            
                          })
                        $('#correo13').val('');
                        $('#nombreCliente').val('');
                        $('#nombreProyecto').val('');
                        $('#monto').val('');
                        $('#numeroOrden').val('');
                        $('#descripcionP').val('');
                    }else{

                        Swal.fire({
                            type: 'error',
                            title: 'Oops...',
                            text: 'Complete todos los campos',
                            // footer: '<a href>Why do I have this issue?</a>'
                          })
                      }
                },
                timeout : 4000,
                error: function(){
    
                }
        
        })
        });

        $("#actualizarDatos").click(function(){
            var nombre = $('#nombre').val();
            var apellido = $('#apellido').val();
            var correo = $('#correo1').val();
            var usuario = $('#usuario12').val();
           
            
            $.ajax({
                async:true,
                type:'POST',
                url:'actualizarDatos.php',
                data : { nombre : nombre, apellido : apellido, correo: correo, usuario: usuario},
               
                success : function(ver){
                    console.log(ver);
                    if(ver == "OK"){
                        Swal.fire({
                            position: 'top-end',
                            type: 'success',
                            title: 'Los datos se han actualizado  correctamente',
                            showConfirmButton: false,
                            timer: 1500
                            
                          })
                     
                        
                    }else{

                        Swal.fire({
                            
                            type: 'error',
                            title: 'Oops...',
                            text: 'No se ha podido actualizar el Perfil',
                            
                          })
                      }
                },
                timeout : 4000,
                error: function(){
    
                }
        
        })
        });

        $("#numeroOrden").blur(function(){
            var numeroOrden = $('#numeroOrden').val();
            
            
            $.ajax({
                async:true,
                type:'POST',
                url:'revisionOrdenNP.php',
                data : {numeroOrden : numeroOrden},
               
                success : function(ver){
                    console.log(ver);
                    if(ver == "NO"){
                        alert('El número de Orden ya existe');
                        $("#numeroOrden").css('border','1px solid red');
                        $('#numeroOrden').val('');
                    }
                },
                timeout : 4000,
                error: function(){
    
                }
        
        })
        });

        // $("#usuario").blur(function(){
        //     var usuario = $('#usuario').val();
            
            
        //     $.ajax({
        //         async:true,
        //         type:'POST',
        //         url:'revisionUsuarioR.php',
        //         data : {usuario : usuario},
               
        //         success : function(ver){
        //             console.log(ver);
        //             if(ver == "NO"){
        //                 alert('El Usuario ya existe');
        //                 $("#usuario").css('border','1px solid red');
        //                 $('#usuario').val('');
        //             }   
        //         },
        //         timeout : 4000,
        //         error: function(){
    
        //         }
        
        // })
        // });


});