<main class="contenedor seccion">
    
    <?php if($mensaje): ?>
        <p class='alerta exito'> <?php echo $mensaje; ?></p>
    <?php endif; ?>


    <h1>Contacto</h1>

    <picture>
        <source srcset="build/img/destacada3.webp" type="image/webp">
        <source srcset="build/img/destacada3.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen Contacto">
    </picture>


    <h2>Llene el formulario</h2>

    <form class="formulario" action="/contacto" method="POST">
        <fieldset>
            <legend>Información Personal</legend>

            <label for="name">Nombre</label>
            <input type="text" name="contacto[nombre]" id="name" placeholder="Tu nombre" >

            <label for="mensaje">Mensaje</label>
            <textarea name="contacto[mensaje]" id="mensaje" ></textarea>

        </fieldset>

        <fieldset>
            <legend>Información sobre la propiedad</legend>
            <label for="opciones">Vende o Compra:</label>
            <select name="contacto[tipo]" id="opciones" >
                <option value="" disabled selected>-- Seleccione una opcion --</option>
                <option value="Compra">Compra</option>
                <option value="Compra">Vende</option>
            </select>

            <label for="presupuesto">Precio o Presupuesto</label>
            <input type="number" name="contacto[presupuesto]" id="presupuesto" placeholder="Tu precio o presupuesto" >

        </fieldset>


        <fieldset>
            <legend>Información sobre la propiedad</legend>

            <p>Como desea ser contactado</p>

            <div class="forma-contacto">

                <label for="contactar-telefono">Teléfono</label>
                <input type="radio" name="contacto[contacto]" value="telefono" id="contactar-telefono" >

                <label for="contactar-email">Email</label>
                <input type="radio" name="contacto[contacto]" value="email" id="contactar-email" >

            </div>

            <div id="contacto"></div>

        </fieldset>

        <input type="submit" value="Enviar" class="boton-verde">

    </form>



</main>