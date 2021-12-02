$('#btnDptoAlumnos').click(function(){
    $("#loginmodal3").modal("show");
})

$('#btnAlumno').click(function(){
    $("#loginmodal").modal("show");
})


$('#btnProfesores').click(function(){
    $("#loginmodal3").modal("show");
})


$('#btnReclutadores').click(function(){
    $("#loginmodal2").modal("show");
})

// $("#btnLoginReclutador").click(function(){
//     // var correo = $("#reclutadorEmail").val();
//     // var pass = $("#reclutadorPass").val();
//     // // console.log(email);
//     // // console.log(password);
//     // const dato = {
//     //     email:correo,
//     //     password: pass
//     // };
//     // // console.log("entre aca");
//     // $.ajax({
//     //     type: "post",
//     //     data: JSON.stringify(dato),
//     //     cache: false,
//     //     url: "Rutas/LogearUsuarios.php",
//     //     // dataType: 'json',
//     //     error: function (dato, error) {
//     //         // console.log(dato);
//     //         // console.log(error);
//     //         alert(" Can't do because: "+error);
//     //     },
//     //     success: function () {
//     //         // alert(" Done ! ");
//     //         $("#mensajeModal").modal("hide");
            
//     //     }
//     // });
//     // fetch('./Rutas/LogearUsuarios.php', {
//     //     method: 'POST', // or 'PUT'
//     //     body: JSON.stringify(dato), // data can be `string` or {object}!
//     //     headers:{
//     //       'Content-Type': 'application/json'
//     //     }
//     // }).then(res => res.json())
//     // .catch(error => console.error('Error:', error.value))
//     // .then(response => {
//     //     console.log(response)

//     //     if ( response.error != 'N'){

//     //     }else {
//     //         alert('Error de algo');
//     //     }
//     // });

// })

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