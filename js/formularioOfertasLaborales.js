
const expresiones = {
    titulo: /^[a-zA-ZÀ-ÿ\s]{3,50}$/, // Letras y espacios, pueden llevar acentos.
    empresa:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    ubicacion:/^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    Detalles:/^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
}

const formulario = document.getElementById("formOfertaLaboral");
const inputs = document.querySelectorAll("#formOfertaLaboral input");

const campos = {
	titulo: false,
	empresa: false,
	tipoJornada: false,
    ubicacion: false,
	tipocontrato: false,
	detalleempresa: false,
    detallepuesto: false,
    detallefuncion: false
}
var divsErrors = document.getElementsByClassName('invalid-feedback');
for (divError of divsErrors) {
    divError.style.display = 'none';
}
for (input of inputs) {
    input.classList.remove('is-invalid');
}

const validarFormulario = (e) => {
	switch (e.target.name) {
		case "titulo":
			validarCampo(expresiones.titulo, e.target, 'tituloOferta');
		break;
		case "empresa":
			validarCampo(expresiones.empresa, e.target, 'nombreEmpresa');
		break;
		case "ubicacion":
			validarCampo(expresiones.ubicacion, e.target, 'ubicacion');
		break;
        case "detalleempresa":
            validarCampo(expresiones.Detalles,e.target,'infoEmpresa');
        break;
		case "detallepuesto":
            validarCampo(expresiones.Detalles,e.target,'detalleEmpleo')
		break;
		case "detallefuncion":
			validarCampo(expresiones.Detalles, e.target, 'detalleFunciones');
            
		break;
	}
}

const validarCampo = (expresion, input, campo) => {
    console.log(input);
    console.log(campo);
	if(expresion.test(input.value)){
		document.getElementById( `${campo}`).classList.add('is-valid');
        document.getElementById( `${campo}`).classList.remove('is-invalid');
		campos[campo] = true;
	} else {
		document.getElementById( `${campo}`).classList.remove('is-valid');
        document.getElementById( `${campo}`).classList.add('is-invalid');
		campos[campo] = false;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});


formulario.onsubmit = function(e){
    e.preventDefault();
    var titulo = document.getElementById('tituloOferta');
    var empresa = document.getElementById('nombreEmpresa');
    var tipojornada = document.getElementById('tipoJornada');
    var ubicacion = document.getElementById('ubicacion');
    var tipocontrato = document.getElementById("tipoContrato");
    var infoempresa = document.getElementById("infoEmpresa");
    var detallepuesto = document.getElementById('detalleEmpleo');
    var detallefuncion = document.getElementById('detalleFunciones');
    var urlempresa = document.getElementById('urlempresa');
    
    const oferta = {
        titulo: titulo.value,
        empresa: empresa.value,
        tipoJornada: tipojornada.value,
        ubicacion: ubicacion.value,
        tipocontrato: tipocontrato.value,
        detalleempresa: infoempresa.value,
        detallepuesto: detallepuesto.value,
        detallefuncion: detallefuncion.value,
        urlEmpresa: urlempresa.value
    }
    // console.log(oferta);
    //envio el arreglo mediante POST .
    // $.post('./Rutas/AltaReclutador.php',postData,function(response){
    //    console.log(response);
    // })
    try{
        $.ajax({
                type:"post",
                url:'Rutas/AltaOferta.php',
                data:JSON.stringify({
                    titulo: titulo.value,
                    empresa: empresa.value,
                    tipoJornada: tipojornada.value,
                    ubicacion: ubicacion.value,
                    tipocontrato: tipocontrato.value,
                    detalleempresa: infoempresa.value,
                    detallepuesto: detallepuesto.value,
                    detallefuncion: detallefuncion.value,
                    urlEmpresa: urlempresa.value
                }),
                dataType:'json',
                success:function(response){
                    if(response.resultado == "OK") {
                        //Mostral modal informando al usuario
                        removeClass();
                        $('#task-form').trigger('reset');  
                    }else{
                            
                        alert(data.mensaje);
                    }	
                },
                error: function(error) {
                    console.log(error);
                }
            });  
    }catch(ex){
        console.log(ex);
        e.preventDefault();
        
    }
    
 };

// $(document).ready(function(){
//     let valido = [];

//     $('#formOfertaLaboral').submit(function (event) {
        
//         event.preventDefault();
//         event.stopPropagation()
//         if (validar_formulario(event)){ 
//             console.log("entre");
//             valido=[];
//             limpiar_form();
//             event.target.addClass('was-validated');
//             guardarOferta(event);
//         }else{
//             $("#errorMensajeModal").modal("show");
//         }
//     })

//     $('input, textarea,select').focus( function(){
//         $(this).removeClass('is-invalid');
//     })

//     function validar_formulario(){
       
//         if (!(validar_descripcion($("#infoEmpresa").val()))) {
//             valido.push(false)
//             $('#infoEmpresa').addClass('is-invalid')
//             // $("#error_descripcion").removeClass("oculto");
//         }

//         if (!(validar_descripcion($("#detalleEmpleo").val()))) {
//             valido.push(false)
//             $('#detalleEmpleo').addClass('is-invalid')
//             // $("#error_descripcion").removeClass("oculto");
//         }

//         if (!(validar_descripcion($("#detalleFunciones").val()))) {
//             valido.push(false)
//             $('#detalleFunciones').addClass('is-invalid')
//             // $("#error_descripcion").removeClass("oculto");
//         }
        
//         if(!(validar_seleccion($("#tipoJornada").val()))){
//             valido.push(false);
//             $('#tipoJornada').addClass('is-invalid')
//         }

//         if(!(validar_seleccion($("#tipoContrato").val()))){
//             valido.push(false);
//             $('#tipoContrato').addClass('is-invalid')
//         }

//         if(!(validar_seleccion($("#lbltituloOferta").val()))){  //Agregue para el titulo de la oferta//
//             valido.push(false);
//             $('#lbltituloOferta').addClass('is-invalid')
//         }

//         if(!(validar_seleccion($("#nombreEmpresa").val()))){  //Agregue para el titulo de la oferta//
//             valido.push(false);
//             $('#nombreEmpresa').addClass('is-invalid')
//         }
 
//         if(!valido.includes(false)){
//             return true;
//         }else{
//             return false;
//         }

//     }

//     function limpiar_form(){
//         $('#formOfertaLaboral').find('input').removeClass('is-invalid')
//         $('#formOfertaLaboral').find('input').removeAttr('disabled')
//         $('#formOfertaLaboral').find('input').val(" ");
//         $('#formOfertaLaboral').find('#tipoJornada').removeClass('is-invalid')
//         $('#formOfertaLaboral').find('#tipoContrato').removeClass('is-invalid')
//         $('#formOfertaLaboral').find('tipoJornada').val("0");
//         $('#formOfertaLaboral').find('tipoContrato').val("0");
//         $('#formOfertaLaboral').find('lbltituloOferta').val(""); //Lo agregue para el titulo//
//         $('#nombreEmpresa').find('nombreEmpresa').val(""); 
//     }

//     function validar_seleccion(tiposeleccion){
//         if(tiposeleccion <1){
//             // valido.push(false);
//             return false;
//         }else{
//             // valido.push(true);
//             return true;
//         }
//     }
//     function validar_descripcion(descripcion){
//         var arrayDescripcion = descripcion.trim().split(" ");
//         if (descripcion.length < 5) {
//             if(!(arrayDescripcion.length>=5)){
//                 // valido.push(false)
//                 return false;
//             }
//         }else{
//             // valido.push(true);
//             return true;
//         }
//     }

//     function guardarOferta(event){
//         event.preventDefault();
//         var titulo = document.querySelector("#tituloOferta").value;
//         var empresa = document.querySelector("#nombreEmpresa").value;
//         var tipojornada = document.querySelector("#tipoJornada").value;
//         var tipoContrato = document.querySelector("#tipoContrato").value;
//         var ubicacion = document.querySelector("#ubicacion").value;
//         var resumenempresa = document.querySelector("#infoEmpresa").value;
//         var detallepuesto = document.querySelector("#detalleEmpleo").value;
//         var funciones = document.querySelector("#detalleFunciones").value;
//         try{
//             console.log("entre");
//             $.ajax({
//                 type:"post",
//                 url:'./Rutas/AltaOferta.php',
//                 data:{
//                     "titulo": titulo,
//                     "empresa":empresa,
//                     "tipojornada":tipojornada,
//                     "tipocontrato":tipoContrato,
//                     "ubicacion":ubicacion,
//                     "resumenempresa":resumenempresa,
//                     "detallepuesto":detallepuesto,
//                     "funciones":funciones
//                 },
//                 dataType:'json',
//                 success:function(response){
//                     if(response.resultado == "OK") {
//                         //Mostral modal informando al usuario
//                         removeClass();
//                         $('#task-form').trigger('reset');  
//                     }else{
                            
//                         alert(data.mensaje);
//                     }	
//                 },
//                 error: function(error) {
//                     console.log(error);
//                 }
//             });  
//         }catch(ex){
//             //hacer modal que avise error al ejecutar ajax
//             console.log(ex);
            
//         }
//     }
// });