let modalBtn = document.getElementById('modal-report-btn')
let modalClose = document.getElementById('btnCancelarModal')

modalBtn.onclick = ()=> {
    let div = document.querySelector('.contenedor');
    document.querySelector('.contenedor').style.display = 'block';
    div.classList.add('animated'); 

}

modalClose.onclick = ()=>{
    var div = document.querySelector(".contenedor");
    div.style.display = "none";
}

function guardaProfesionista(){
    //Obtener los datos del formulario
    let formData = new FormData(document.getElementById("frmNuevoEgresado"));
    
    //Uso de ajax para enviar el formulario y procesar los datos
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../controladores/ctrl_profesionistas.php?opcion=1",
        data: formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data){
           
            if(data['success']==1){
                Swal.fire({
                    title:'Éxito!',
                    text:data['message'],
                    icon:'success'
                });
                //Limpiar los campos de la ventana modal
                limpiaCamposDatosRegistro();

            }//Fin if data success
            else{
                Swal.fire({
                    title: "Error!",//Avisa duplicidad
                    text: data['message'],
                    icon: "warning",
                    dangerMode: true
                });
            }
        } //Fin success						
    }); //Fin ajax		
}

$(document).ready(function() {
    $('#enviar-reporte').click(function(){	
        cargaCarreras();	
        cargaEntidadFederativa();
        $("#txtCveAlumno").focus();	
        $('#registrarEgresado').modal({"backdrop"  : "static"});        	
    });


})