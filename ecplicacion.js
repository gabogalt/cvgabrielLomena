$(document).ready(function(){
    var np = $("#nombreProyecto").val();
    var no = $("#numeroOrden").val();


    $.ajax({
        async:true,
        url:'nuevoProyectoC.php',
        data : {nombreProyecto:np,numeroOrden:no},
        success : function(data) {
            if(data == OK) {
            Sweet.fire(
                ok
            )
            } else {
                Swal.fire(
                    error
                )
            }
        }
    })
})