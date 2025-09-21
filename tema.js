document.addEventListener('DOMContentLoaded', () => {
    const botonTema = document.getElementById('boton-tema');
    const body = document.body;

    // Función para aplicar el tema guardado
    const aplicarTemaGuardado = () => {
        const temaGuardado = localStorage.getItem('tema');
        if (temaGuardado === 'oscuro') {
            body.classList.add('modo-oscuro');
            botonTema.textContent = 'Modo Claro';
        } else {
            body.classList.remove('modo-oscuro');
            botonTema.textContent = 'Modo Oscuro';
        }
    };

    // Llamar a la función al cargar la página
    aplicarTemaGuardado();

    // Evento para cambiar el tema al hacer clic en el botón
    botonTema.addEventListener('click', () => {
        body.classList.toggle('modo-oscuro');

        if (body.classList.contains('modo-oscuro')) {
            localStorage.setItem('tema', 'oscuro');
            botonTema.textContent = 'Modo Claro';
        } else {
            localStorage.setItem('tema', 'claro');
            botonTema.textContent = 'Modo Oscuro';
        }
    });
});