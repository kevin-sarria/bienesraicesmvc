



document.addEventListener('DOMContentLoaded', function () {


    eventListeners();

    darkMode();

});


function darkMode() {

    const prefiereDarkMode = window.matchMedia('prefers-color-scheme: dark');
    const nuevoDarkMode = window.localStorage.getItem('Dark Mode');
    const botonDarkMode = document.querySelector('.dark-mode-boton');

    
    if(prefiereDarkMode.matches == true) {
        document.body.classList.add('dark-mode');
    }else {
        if(nuevoDarkMode != 'On') {
            document.body.classList.remove('dark-mode');
        }else {
            document.body.classList.add('dark-mode');
        }
        
    }

    prefiereDarkMode.addEventListener('change', () => {
        if(prefiereDarkMode.matches == true) {
            document.body.classList.add('dark-mode');
        }else {
            document.body.classList.remove('dark-mode');
        }   
    });

    botonDarkMode.addEventListener('click', () => {
        

        if(localStorage.getItem('Dark Mode') != 'On'  ) {
            document.body.classList.add('dark-mode');
            window.localStorage.setItem('Dark Mode', 'On');
        }else {
            document.body.classList.remove('dark-mode');
            window.localStorage.removeItem('Dark Mode');
        }
    });

}


function eventListeners() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive);

    // Muestra campos condicionales
    const metodoContacto = document.querySelectorAll('input[name="contacto[contacto]"]');

    metodoContacto.forEach( input => input.addEventListener('click', mostrarMetodosContacto ));

}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar');
}

function mostrarMetodosContacto(e) {
    const contactoDiv = document.querySelector('#contacto');

    if( e.target.value === 'telefono' ) {
        contactoDiv.innerHTML = `
            <label for="telefono">Teléfono</label>
            <input type="tel" name="contacto[telefono]" id="telefono" placeholder="Tu telefono">

            <p>Elija la fecha y la hora para la llamada</p>

            <label for="fecha">Fecha</label>
            <input type="date" name="contacto[fecha]" id="fecha">

            <label for="hora">Hora</label>
            <input type="time" name="contacto[hora]" id="hora" min="09:00" max="18:00">

        `;
    }else {
        contactoDiv.innerHTML = `
            <label for="mail">Email</label>
            <input type="email" name="contacto[email]" id="mail" placeholder="Tu correo" >
        `;
    }



}


