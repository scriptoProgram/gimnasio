document.addEventListener('DOMContentLoaded', function () {
    const openModalBtn = document.querySelector('.open-modal')
    const modal = document.getElementById(openModalBtn.getAttribute('data-modal'))
    const closeModalBtn = document.getElementById('close-btn')
    const registerEmployee =  document.getElementById('form-register')

    openModalBtn.addEventListener("click", function () {
        modal.classList.remove('hidden')
    })

    closeModalBtn.addEventListener("click", function () {
        modal.classList.add('hidden')
    })
})
