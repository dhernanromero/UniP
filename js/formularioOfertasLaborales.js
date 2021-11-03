$(document).ready(function(){
    let valido = [];

    $('#formOfertaLaboral').submit(function (event) {
        console.log("entre");
        event.preventDefault();
        event.stopPropagation()
        if (validar_formulario(event)){ 
            valido=[];
            limpiar_form();
            event.target.addClass('was-validated');
            event.target.submit();
        }else{
            $("#errorMensajeModal").modal("show");
        }
    })

    $('input, textarea,select').focus( function(){
        $(this).removeClass('is-invalid');
    })

    function validar_formulario(){
        if (!(validar_descripcion($("#infoEmpresa").val()))) {
            valido.push(false)
            $('#infoEmpresa').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }

        if (!(validar_descripcion($("#detalleEmpleo").val()))) {
            valido.push(false)
            $('#detalleEmpleo').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }

        if (!(validar_descripcion($("#detalleFunciones").val()))) {
            valido.push(false)
            $('#detalleFunciones').addClass('is-invalid')
            // $("#error_descripcion").removeClass("oculto");
        }
        
        if(!(validar_seleccion($("#tipoJornada").val()))){
            valido.push(false);
            $('#tipoJornada').addClass('is-invalid')
        }

        if(!(validar_seleccion($("#tipoContrato").val()))){
            valido.push(false);
            $('#tipoContrato').addClass('is-invalid')
        }

        if(!valido.includes(false)){
            return true;
        }else{
            return false;
        }

    }

    function limpiar_form(){
        $('#formOfertaLaboral').find('input').removeClass('is-invalid')
        $('#formOfertaLaboral').find('input').removeAttr('disabled')
        $('#formOfertaLaboral').find('input').val(" ");
        $('#formOfertaLaboral').find('#tipoJornada').removeClass('is-invalid')
        $('#formOfertaLaboral').find('#tipoContrato').removeClass('is-invalid')
        $('#formOfertaLaboral').find('tipoJornada').val("0");
        $('#formOfertaLaboral').find('tipoContrato').val("0");
    }

    function validar_seleccion(tiposeleccion){
        if(tiposeleccion <1){
            // valido.push(false);
            return false;
        }else{
            // valido.push(true);
            return true;
        }
    }
    function validar_descripcion(descripcion){
        var arrayDescripcion = descripcion.trim().split(" ");
        if (descripcion.length < 5) {
            if(!(arrayDescripcion.length>=5)){
                // valido.push(false)
                return false;
            }
        }else{
            // valido.push(true);
            return true;
        }
    }
});