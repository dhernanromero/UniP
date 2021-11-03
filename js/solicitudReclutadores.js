$(document).ready(function(){
    $(".btn-aceptar").click(function(){
        console.log(this);
        $("#mensaje").html("Seguro que desea aceptar la socilcitud?");
        $('#mensajeModal').modal('toggle');
        colnsole.log("entré aca");
        confirmar_resultado(this.id);
                    
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
    

    function confirmar_resultado(botonId){
        $("#confirmar").click(function(){
            console.log("entre aca");
            var MyRows = $('#tbody').find('tr');
          
            for (var i = 0; i < MyRows.length; i++) {
                if($(MyRows[i]).find('td:eq(7)').html() == botonId){
                    $(MyRows[i]).find('td:eq(6)').html("Si")
                }
                var MyIndexValue = $(MyRows[i]).find('td:eq(0)').html();
            }
            console.log(botonId);
            console.log(MyIndexValue);
            if(this.id=="a1" || this.id =="a2"){
                MyIndexValue[6].html("Aprobado");
            }

            $("#mensajeModal").modal("hide");
           
            return true;
        });
    }    
    $("#cancelar").click(function(){
        $("#mensajeModal").modal("hide");
        return false;
    });
    
});