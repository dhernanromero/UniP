$('#boton').click(function(){
    email = "facu11ja@gmail.com";
    nombre = "facundo";
    apellido = "sergio";
    dni = 38370388;
    nacionalidad = "argentino";
    estadoCivil = 1;
    fecha = 1994-11-14;
    calle = "carrizo";
    numeroCalle = 250;
    telefono = 1163001323;
    $.ajax({
        url: "ajax2.php",
        type: "POST",
        
        data: {email:email, nombre:nombre,apellido:apellido,dni:dni,nacionalidad:nacionalidad,estadoCivil:estadoCivil,fecha:fecha,calle:calle,numeroCalle:numeroCalle,telefono:telefono},
        success: function(response){
            //var datos =  JSON.parse(response);
            console.log(response);
        }  
        })
})