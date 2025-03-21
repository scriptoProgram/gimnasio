document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn =  document.querySelector('.open-modal') /* Boton enlace navbar */
    const modal = document.getElementById(openModalBtn.getAttribute('data-modal'))
    const cancelModalBtn = document.querySelector('#cancel-btn')
    const darkBg = document.getElementById('dark-bg')

    openModalBtn.addEventListener("click", function () {
        modal.classList.remove('hidden')
    })

    cancelModalBtn.addEventListener("click", function () {
        modal.classList.add('hidden')
    })

    // USAR dark-bg PARA CERRAR EL MODAL
    // darkBg.addEventListener("click", function (event) {
    //     modal.classList.add('hidden')
    // })
})