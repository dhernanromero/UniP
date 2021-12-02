/* jQuery(document).on('submit','#miform',function(event){
    event.preventDefault;

    jQuery.ajax({
        url:'login.php',
        type:'POST',
        dataType:'json',
        data:$(this).serialize() ,
        beforeSend: function(){

        }
    })
    .done(function(respuesta){
        console.log(respuesta);
        if(!respuesta.error){
            if(respuesta.tipo == 'Profesor'){
                location.href = 'perfil-profesor.html';
            }else if(respuesta.tipo == 'Alumno'){
                location.href = 'perfil-alumno.html';
            }else if(respuesta.tipo == 'Administrador'){
                location.href = 'Perfil-Administrador.html';
            }
        }else{
            console.log("error al ingresar los datos del perfil");
            //agregar un div error que informe en pantalla
        }
    })
    .fail(function(resp){
        console.log(resp.responseText);
    })
    .always(function(){
        console.log("complete");
    });

}); */


function login(event){
    event.preventDefault();
    var email = document.querySelector("#email").value;
    var password = document.querySelector("#password").value;

    $.ajax({
        url:'Rutas/LogearUsuarios.php',
        type:'POST',
        dataType:'json',
        data:{
            "email": email,
            "password" : password,
            "param": "login",
        },
        success(data){
            if(data.error == 1){
                alert(data.mensaje);
            }else{
                if(data.usuario.IdRol == 1){
                    location.href = "pantalla-principal-administrador.php";
                }else if(data.usuario.IdRol == 2){
                    location.href = "ABMdepartamentoalumnos.php";
                }else if(data.usuario.IdRol == 3){
                    location.href = "V.principal-alumno.php";
                }else if(data.usuario.IdRol == 4){
                    location.href = "v.principal-reclutador.php";
                }else if(data.usuario.IdRol == 5){
                    location.href = "perfil-profesor.php";
                }
            }
        },
        
    })
}
