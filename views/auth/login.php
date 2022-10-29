<main class="contenedor seccion contenido-centrado">
    
    <h1>Iniciar sesion</h1>

    <?php foreach($errores as $error): ?>

    <div class="alerta error">
        <?php echo $error ?>
    </div>

    <?php endforeach; ?>

    <form method="POST" class="formulario" action="/login">
    
        <legend>Correo y Contraseña</legend>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Tu correo">

        <label for="password">Contraseña</label>
        <input type="password" name="password" id="password" placeholder="Tu contraseña">

        <input type="submit" value="Iniciar Sesion" class="boton boton-verde">

    </form>


</main>