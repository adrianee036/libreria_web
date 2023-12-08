document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

const inputboton = document.getElementById("boton");
const inputnombre = document.getElementById("inputName");
const inputemail = document.getElementById("inputEmail");
const inputasunto = document.getElementById("inputSubject");
const inputmensaje = document.getElementById("inputMessage");




  
  function validarFormulario(evento) {
    evento.preventDefault();
    var usuario = document.getElementById('usuario').value;
    if(usuario.length == 0) {
      alert('No has escrito nada en el usuario');
      return;
    }
    var clave = document.getElementById('clave').value;
    if (clave.length < 6) {
      alert('La clave no es válida');
      return;
    }
    this.submit();
  }

