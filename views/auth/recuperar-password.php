<h1 class="nombre-pagina">Reestablecer Password</h1>
<p class="descripcion-pagina">Coloca tu nuevo password a continuación</p>

<?php
    include_once __DIR__ . "/../templates/alertas.php";  
?>

<?php if($error) return ?>
<form class="formulario" method="POST" action="">
    <div class="campo">
        <label for="password">Password:</label>
        <input type="password" name="password" placeholder="Tu nuevo password" id="password">
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">
</form>

<div class="acciones">
    <a href="/ ">¿Ya tienes una cuenta? Inicia Sesión</a>
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Crea una cuenta</a>
</div>