const expresiones = {
	usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   Localidad : /^[a-zA-Z0-9\\]{4,16}$/,
	password: /^.{4,12}$/, // 4 a 12 digitos.
	correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	telefono: /^\d{7,14}$/, // 7 a 14 numeros
    edad: /^\d{2}$/, // 2 digitos
    dni: /^\d{8}(?:[-\s]\d{4})?$/,
    cuil: /^\d{11}(?:[-\s]\d{4})?$/,
    año:/^\d{4}$/,
    numero:/^\d{1,10}$/, 

}


const formulario = document.getElementById('formulario');
const inputs =  document.querySelectorAll('#formulario input');

/*var nombre = document.getElementById('nombre');
var apellido = document.getElementById('apellido');
var nacionalidad = document.getElementById('nombre');
var estadoCivil = document.getElementById('estadoCivil');
var edad = document.getElementById('edad');
var dni = document.getElementById("dni");
var cuil = document.getElementById('cuil');
var carrera = document.getElementById('carera');
var añoIngreso =  document.getElementById('añoIngreso');
var provincia = document.getElementById('provincia');
var localidad = document.getElementById('localidad');
var calle = document.getElementById('calle');
var numero = document.getElementById('numero');
var cp = document.getElementById('cp');
var email = document.getElementById('email');
var numeroTelefono = document.getElementById('numeroTelefono');*/

const validarFormulario = (e) => {
   switch (e.target.name){
       case "nombre":
            validarCampo(expresiones.nombre,e.target,'nombre');
       break;
       case "apellido":
            validarCampo(expresiones.nombre,e.target,'apellido');
       break;
       case "nacionalidad":
            validarCampo(expresiones.nombre,e.target,'nacionalidad');
       break;
       case "estadoCivil":
            console.log('funciona');
       break;
       case "dni":
            validarCampo(expresiones.dni,e.target,'dni');
       break;
       case "cuil":
            validarCampo(expresiones.cuil,e.target,'cuil');
       break;
       case "añoIngreso":
          validarCampo(expresiones.año,e.target,'añoIngreso');
       break;
       case "provincia":
          validarCampo(expresiones.nombre,e.target,'provincia');
       break;
       case "localidad":
          validarCampo(expresiones.Localidad,e.target,'localidad');
       break;
       case "calle":
          validarCampo(expresiones.nombre,e.target,'calle');
       break;
       case "numero":
          validarCampo(expresiones.numero,e.target,'numero');
          break;
       case "email":
          validarCampo(expresiones.correo,e.target,'email');
       break;
       case "numeroTelefono":
          validarCampo(expresiones.telefono,e.target,'numeroTelefono');
       break;
   }
}
inputs.forEach((input)=> {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur',validarFormulario);
    
});

formulario.addEventListener('submit', (e) => {
     //e.preventDefault();
});

function enviar (){
      //guardo los valores de los elementos del formulario en variables.
      
}
formulario.onsubmit = function(e){
   
   var nombre = document.getElementById('nombre');
   var apellido = document.getElementById('apellido');
   var nacionalidad = document.getElementById('nacionalidad');
   var estadoCivil = document.getElementById('estadoCivil');
   var dni = document.getElementById("dni");
   var nacimiento = document.getElementById("nacimiento");
   var provincia = document.getElementById('provincia');
   var localidad = document.getElementById('localidad');
   var calle = document.getElementById('calle');
   var numero = document.getElementById('numero');
   var email = document.getElementById('email');
   var numeroTelefono = document.getElementById('numeroTelefono');
   var preferencia = document.getElementById('preferencia');
   var imagen =  document.getElementById('imagen');

   
      //creo un arreglo con los valores de los elementos del formulario .
   const postData= {
      nombre:nombre.value,
      apellido:apellido.value,
      dni:dni.value,
      nacionalidad:nacionalidad.value,
      estadoCivil:estadoCivil.value,
      nacimiento:nacimiento.value,
      provincia:provincia.value,
      localidad:localidad.value,
      calle:calle.value,
      numero:numero.value,
      email:email.textContent,
      telefono:numeroTelefono.value,
      preferencia:preferencia.value,
   }
   //envio el arreglo mediante POST .
   /*$.post('Rutas/alumno-add.php',postData,function(response){
      console.log(response);
      //window.alert("Guardado");
   })*/
   var formData = new FormData($("#formulario")[0]);
   formData.append('email', email.textContent);
   $.ajax({
       url: "Rutas/alumno-add.php",
       type: "POST",
       data: formData,
       processData: false,
       contentType: false,
       success: function(response){
           console.log(response);
       }
   });

   e.preventDefault();
};


const validarCampo = (expresion,input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById( `${campo}`).classList.add('is-valid');
        document.getElementById( `${campo}`).classList.remove('is-invalid');
    }else{
        document.getElementById( `${campo}`).classList.remove('is-valid');
        document.getElementById( `${campo}`).classList.add('is-invalid');
    }
}