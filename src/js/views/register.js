document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll(".tab-btn")
    const contents = document.querySelectorAll(".content")

    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-target')
            // contents.forEach(content => content.classList.add('hidden'))
            contents.forEach(content => content.classList.add("hidden"))
            document.getElementById(target).classList.remove("hidden")

            buttons.forEach(btn => btn.classList.remove("active"))
            this.classList.add("active")
        })

    })
})