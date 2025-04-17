// Animación de aparición al hacer scroll
const secciones = document.querySelectorAll('.seccion-animada');

const observer = new IntersectionObserver((entradas) => {
    entradas.forEach(entrada => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('seccion-visible');
            observer.unobserve(entrada.target);
        }
    });
}, {
    threshold: 0.1
});

secciones.forEach(seccion => {
    observer.observe(seccion);
});