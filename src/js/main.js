document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn =  document.querySelector('.open-modal') /* Boton enlace navbar */
    const modal = document.getElementById(openModalBtn.getAttribute('data-modal'))
    const closeModalBtn = document.getElementById('close-btn')
    const formRegister = document.getElementById('form-register')
    // const darkBg = document.getElementById('dark-bg')

    openModalBtn.addEventListener("click", function () {
        modal.classList.remove('hidden')
    })

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add('hidden')
        // formRegister.reset()
    })

    // USAR dark-bg PARA CERRAR EL MODAL
    // darkBg.addEventListener("click", function (event) {
    //     modal.classList.add('hidden')
    // })
})