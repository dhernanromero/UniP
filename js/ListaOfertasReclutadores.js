$(document).ready(function(){
    $("#a1").click(function(){
        console.log(this);
        // $('#mensajeModal').modal('toggle');
        var id = $(this).attr('data-id');
        console.log(id);
        var dato = {
            idoferta: parseInt(id),
            idestado: 2 
        }
        confirmar_resultado(dato);
                    
    });

    $(".btn-rechazar").click(function(){
        console.log("rechazar");
        $("#mensaje").html("Seguro que desea rechazar la socilcitud?");
        $('#mensajeModal').modal('toggle');
        if(confirmar_resultado(this.id)){
            var MyRows = $('#tbody').find('tr').find(this.id);
            for (var i = 0; i < MyRows.length; i++) {
                var MyIndexValue = $(MyRows[i]).find('td:eq(0)').html();
            }
            if(this.id=="a1" || this.id =="a2"){
                MyIndexValue[6].html("Aprobado");
            }else{
                MyIndexValue[6].html("Rechazado");
            }
        }
    });
    

    function confirmar_resultado(dato){
        $("#confirmar").click(function(){
            console.log("entre aca");
            $.ajax({
                type: "post",
                data: JSON.stringify(dato),
                cache: false,
                url: "./Rutas/VerOferta.php",
                dataType: "json",
                error: function (dato, error) {
                    console.log(dato);
                    alert(" Can't do because: " + error);
                },
                success: function () {
                    // alert(" Done ! ");
                    $("#mensajeModal").modal("hide");
                    location.reload();
                }
            });
            // var MyRows = $('#tbody').find('tr');
          
            // for (var i = 0; i < MyRows.length; i++) {
            //     if($(MyRows[i]).find('td:eq(7)').html() == botonId){
            //         $(MyRows[i]).find('td:eq(6)').html("Si")
            //     }
            //     var MyIndexValue = $(MyRows[i]).find('td:eq(0)').html();
            // }
            // console.log(botonId);
            // console.log(MyIndexValue);
            // if(this.id=="a1" || this.id =="a2"){
            //     MyIndexValue[6].html("Aprobado");
            // }

            // $("#mensajeModal").modal("hide");
           
            // return true;
        });
    }    
    $("#cancelar").click(function(){
        $("#mensajeModal").modal("hide");
        return false;
    });
    
});