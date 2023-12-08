<?php 
    include 'bd/conexion.php';
?>


<?php 
    include 'nav.html';
?>



<h4 id="encabezado">Contacto</h4>

      
<div class="container">
      <form id="formulario" class="form-contact" method="POST">
        <label for="inputName" class="sr-only">Nombre</label>
        	<input onclik="cambiarColor()" type="name" name="nombre" id="inputName" class="form-control" placeholder="Su nombre" required>
        <label for="inputEmail" class="sr-only">E-Mail</label>
        	<input type="email" name="email" id="inputEmail" class="form-control" placeholder="name@email.com" required>
        <label for="inputSubject" class="sr-only">Asunto</label>
        	<input type="name" name="asunto" id="inputSubject" class="form-control" placeholder="Asunto" required>
        <label for="inputMessage" class="sr-only">Mensaje</label>
    		<textarea name="mensaje" class="form-control" id="inputMessage" rows="3"></textarea>
        <button  id="boton" class="btn btn-lg btn-primary btn-block" type="submit">Enviar Formulario</button>
        <?php
if((isset($_POST['nombre']) && !empty($_POST['nombre']))
&& (isset($_POST['email']) && !empty($_POST['email']))
&& (isset($_POST['asunto']) && !empty($_POST['asunto']))
&& (isset($_POST['mensaje']) && !empty($_POST['mensaje']))){

	$name = $_POST['nombre'];
	$email = $_POST['email'];
	$subject = $_POST['asunto'];
	$message = $_POST['mensaje'];
	
	$to = "TU-EMAIL@gmail.com";
	$headers = "From : " . $email;
	if( mail($to, $subject, $message, $headers)){
        $conexion = new PDO("mysql:host=localhost;dbname=id21601879_libreria","id21601879_niano","Bread03298@");
        if (is_object($conexion)){
            $sql = "INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ('$name', '$email', '$subject', '$message')";
            $resultado = $conexion->query($sql);
        }
	}
}
?>
      </form>
</div>

<script src="scripts.js"></script>
</body>
</html>