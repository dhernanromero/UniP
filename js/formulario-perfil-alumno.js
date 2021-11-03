
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
       case "edad":
        validarCampo(expresiones.edad,e.target,'edad')
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
       break;
       case "cp":
          validarCampo(expresiones.numero,e.target,'cp');
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
     e.preventDefault();
});


const validarCampo = (expresion,input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById( `${campo}`).classList.add('is-valid');
        document.getElementById( `${campo}`).classList.remove('is-invalid');
    }else{
        document.getElementById( `${campo}`).classList.remove('is-valid');
        document.getElementById( `${campo}`).classList.add('is-invalid');
    }
}