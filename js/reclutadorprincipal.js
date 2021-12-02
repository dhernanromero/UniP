$(document).ready(function(){
    $("#miPerfil").click(function(e){
        console.log("entré al click");
        try{
            if( true) {
                e.preventDefault();
                console.log("entre al metodo")
                fetch('Rutas/ObtenerPerfilReclutador.php', {
                    method: 'GET', // or 'PUT'
                    body: JSON.stringify(1), // data can be `string` or {object}!
                    headers:{
                      'Content-Type': 'application/json'
                    }
                }).then(res => res.json())
                .catch(error => console.error('Error:', error.value))
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
        
    })

})