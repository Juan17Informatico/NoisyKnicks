document.addEventListener("DOMContentloaded", function(){
    document.getElementsById("formulario").addEventListener('submit', validarFormulario);

});

function validarFormulario(evento){
    evento.preventDefault();
    var correo = document.getElementsById('correo').value;
    if(correo.leghth == 0){
        alert('no ha llenado este campo');
        return;
    }

    var contrasena = document.getElementsById('contraseña').value;
    if(contrasena.leghth < 6){
        alert('contraseña incorrecta');
        return;
    }
    this.submit();
}