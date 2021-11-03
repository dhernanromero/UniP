console.log("funciona el js");
const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

const expresiones = {
    nombre: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    dni: /^[0-9]{8,8}$/,
    localidad: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    barrio: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    nombrecalle: /^[a-zA-ZÀ-ÿ\s]{3,40}$/, // Letras y espacios, pueden llevar acentos.
    numerocalle: /^[0-9]{1,10}$/,
    pisodepto: /^(piso|depto)$/i,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    contrasenia:  /^.{12,25}$/ // 12 a 25 digitos.
}
const campos = {
	nombre: false,
	apellido: false,
	dni: false,
    fecha_nac: false,
	localidad: false,
	barrio: false,
    nombrecalle: false,
    numerocalle: false,
    pisodepto:false,
    email: false,
    contrasenia: false,
    contrasenia1:false
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
		case "nombre":
			validarCampo(expresiones.nombre, e.target, 'nombre', 'error_nombre');
		break;
		case "apellido":
			validarCampo(expresiones.apellido, e.target, 'apellido', 'error_apellido');
		break;
		case "dni":
			validarCampo(expresiones.dni, e.target, 'dni', 'error_dni');
		break;
		case "fecha_nac":
            
		break;
		case "localidad":
			validarCampo(expresiones.localidad, e.target, 'localidad', 'error_localidad');
		break;
		case "barrio":
			validarCampo(expresiones.barrio, e.target, 'barrio', 'error_barrio');
		break;
        case "nomcalle":
			validarCampo(expresiones.nombrecalle, e.target, 'nomcalle', 'error_nomcalle');
		break;
        case "numcalle":
			validarCampo(expresiones.numerocalle, e.target, 'numcalle', 'error_numcalle');
		break;
        case "pisodepto":
			validarCampo(expresiones.pisodepto, e.target, 'numcalle', 'error_pisodepto');
		break;
		// break;
        case "email":
			validarCampo(expresiones.email, e.target, 'email','error_email');
		break;
        case "contrasenia":
			validarCampo(expresiones.contrasenia, e.target, 'contrasenia','error_contrasenia');
            validarPassword1();
		break;
        case "contrasenia1":
			validarPassword1();
		break;
	}
}

const validarCampo = (expresion, input, campo, error) => {
	if(expresion.test(input.value)){
		input.classList.add('is-valid');
		campos[campo] = true;
	} else {
		input.classList.add('is-invalid');
        var errorElement = document.getElementById(error);
        errorElement.style.display='block';
		campos[campo] = false;
	}
}

const validarPassword1 = () => {
	const inputPassword = document.getElementById('password');
	const inputPassword1 = document.getElementById('password1');

	if(inputPassword.value !== inputPassword1.value){
		input.classList.add('is-invalid');
        var errorElement = document.getElementById(error_contrasenia1);
        errorElement.style.display='block';
		campos['password'] = false;
	} else {
		input.classList.add('is-valid');
		campos['password'] = true;
	}
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit', (e) => {
    e.preventDefault();

	const reclutador = {
        nombre: document.getElementById('nombre').value,
        apellido: document.getElementById('apellido').value,
        cuit: document.getElementById('cuit').value,
        fecha_nac: document.getElementById('FechaNac').value,
        tipoente: document.getElementById('tipo-ente').value,
        email: document.getElementById('email').value,
        contrasenia: document.getElementById('password1').value,
        contrasenia1:document.getElementById('password2').value,
        resumenempresa: document.getElementById('resumenempresa').value ,
        urlempresa: document.getElementById('urlempresa').value
    }
    console.log(reclutador);
    console.log(campos);
    try{
        //if(campos.usuario && campos.nombre && campos.password && campos.correo ){
        if( true) {
            e.preventDefault();
            console.log("entre al metodo")
            fetch('Controller/ReclutadorController.php?method=create', {
                method: 'POST', // or 'PUT'
                body: JSON.stringify(reclutador), // data can be `string` or {object}!
                headers:{
                  'Content-Type': 'application/json'
                }
            }).then(res => res.json())
            .catch(error => console.error('Error:', error))
            .then(response => {
                console.log(response)
        
                if ( response.error != 'N'){
        
                }else {
                    alert('Error de algo');
                }
            });
            formulario.reset();
        } else {
            e.preventDefault();
        }   
    }catch(ex){
        console.log(ex);
        e.preventDefault();
    }
	
});