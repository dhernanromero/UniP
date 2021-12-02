
$('#btn-editar').click(function(){
    $("#loginmodal4").modal("show");
})

$("#formAlumno").submit(function(e){
    e.preventDefault();
    email = $.trim($("#email").text());
    opcion = 2; 
    var formData = new FormData($("#formAlumno")[0]);
    formData.append('email', email);
    formData.append('opcion', opcion);
     /*nombre = $.trim($("#Fnombre").val());
     apellido = $.trim($("#Fapellido").val());
     dni = $.trim($("#Fdni").val());
     nacionalidad = $.trim($("#Fnacionalidad").val());
     estadoCivil = $.trim($("#FestadoCivil").val());
     fecha = $.trim($("#Fdate").val());
     calle = $.trim($("#Fcalle").val());
     numeroCalle = $.trim($("#FnumeroCalle").val());
     telefono = $.trim($("#FnumeroTelefono").val());
     imagen= $.trim($("#Fimagen").val());
     */
     //window.location.reload();

     
    $.ajax({
        url: "Rutas/AlumnoEditSearch.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(response){
            console.log(response);
            var datos =  JSON.parse(response);
            $('#nombre').html(datos[0].nombre);
            $('#apellido').html(datos[0].apellido);
            $('#dni').html(datos[0].dni);
            $('#nacionalidad').html(datos[0].nacionalidad);
            $('#fechaNacimiento').html(datos[0].fecha);
            $('#telefono').html(datos[0].telefono);
            $('#calle').html(datos[0].calle);
            $('#numeroCalle').html(datos[0].numeroCalle);
            $('#nacionalidad').html(datos[0].nacionalidad);
            $("#img-perfil").prop("src","./img/"+datos[0].foto); 
        }     
    });
    $("#loginmodal4").modal("hide");    
});    