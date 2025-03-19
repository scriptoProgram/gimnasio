document.addEventListener('DOMContentLoaded', function () {
    // Obtener el enlace que abrirá el modal
    const openModalButton = document.querySelector('.open-modal');
    // Obtener el modal
    const modal = document.getElementById(openModalButton.getAttribute('data-modal'));
    // Obtener el botón de cancelar
    const cancelButton = modal.querySelector('#cancel-btn');
    
    // Función para abrir el modal
    openModalButton.addEventListener('click', function (event) {
        event.preventDefault(); // Evitar que el enlace realice la acción predeterminada
        modal.classList.remove('hidden'); // Mostrar el modal eliminando la clase 'hidden'
    });
    
    // Función para cerrar el modal
    cancelButton.addEventListener('click', function () {
        modal.classList.add('hidden'); // Ocultar el modal agregando la clase 'hidden'
    });
    
    // También puedes cerrar el modal si se hace clic fuera del contenido del modal
    window.addEventListener('click', function (event) {
        if (event.target === modal) { // Si el clic es fuera del modal
            modal.classList.add('hidden'); // Ocultar el modal
        }
    });
});

// document.addEventListener('DOMContentLoaded', function () {
//     // Obtener todos los botones que abren modales
//     const openModalButtons = document.querySelectorAll('.open-modal');

//     if (!openModalButtons.length) return; // Si no hay botones, salir

//     openModalButtons.forEach(button => {
//         button.addEventListener('click', function (event) {
//             event.preventDefault(); // Evitar la navegación

//             // Obtener el modal correspondiente
//             const modalId = button.getAttribute('data-modal');
//             const modal = document.getElementById(modalId);

//             if (!modal) {
//                 console.error(`Modal con ID "${modalId}" no encontrado.`);
//                 return;
//             }

//             // Mostrar el modal
//             modal.classList.remove('hidden');

//             // Obtener el botón de cancelar dentro de este modal
//             const cancelButton = modal.querySelector('#cancel-btn');

//             if (cancelButton) {
//                 cancelButton.addEventListener('click', function () {
//                     modal.classList.add('hidden'); // Ocultar el modal
//                 });
//             }

//             // Cerrar el modal si se hace clic fuera de él
//             modal.addEventListener('click', function (event) {
//                 if (event.target === modal) {
//                     modal.classList.add('hidden');
//                 }
//             });
//         });
//     });
// });
