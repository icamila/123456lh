var url = $('#ruta').val();
var id_editar;
$(document).ready(function(){  

    //display modal form for task editing
    $('.open-modal').click(function(){
        id_editar = $(this).attr('name');
        var ruta = url + '/' + id_editar + '/edit';
        //Para el action
        $('#formEditar').attr('action', url+"/"+id_editar);

        $.get(ruta, function (data) {
            $('#nombreEdit').val(data.nombre);
            $('#observacionEdit').val(data.observacion);
            $('#btn-save').val("update");

            $('#editar').modal('show');
        }) 
    });

    //Coonfirmar eliminacion
    $('#deleteGroup').on('submit',function(e){
        if(!confirm('Confirmar eliminación')){
              e.preventDefault();
        }
        $( "#dialog-confirm" ).dialog({
              resizable: false,
              height: "auto",
              width: 400,
              modal: true,
              buttons: {
                "Delete all items": function() {
                  $( this ).dialog( "close" );
                },
                Cancel: function() {
                  $( this ).dialog( "close" );
                }
              }
            });
    });
});

//Para el cieere automatico de notificacion
setTimeout(function() {
    $( ".alert" ).fadeOut('slow');
}, 5000);


/*
$('#actualizar').click(function(){
    var id = $()
    var nombre = $('#nombreEdit').val();
    var observacion = $('#observacionEdit').val();
    var token = $('input[name="_token"]').attr('value');
    var ruta = url+"/"+id_editar;

    $.ajax({
        url:ruta,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {nombre: nombre, observacion: observacion},
        success: function(){
            $('#editar').modal('toggle');
            document.location.reload();

        },
    });
});*/