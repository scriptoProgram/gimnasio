document.addEventListener('DOMContentLoaded', function () {
    const buttons = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".content");
    const form = document.getElementById("form-register");

    // Función para manejar el cambio de pestaña
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            const target = this.getAttribute('data-target');
            contents.forEach(content => content.classList.add("hidden"));
            document.getElementById(target).classList.remove("hidden");

            buttons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // Función para manejar el envío del formulario
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        // Validaciones de formulario antes de enviar
        if (!form.checkValidity()) {
            alert("Por favor, complete todos los campos requeridos.");
            return;
        }

        const formData = new FormData(this);

        // Envío de datos con fetch
        fetch('../src/controllers/employeeController.php', {
            method: 'POST',
            // headers: {
            //     'X-Requested-With': 'XMLHttpRequest'
            // },
            body: formData,
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error al procesar la solicitud');
                }
                return response.json();
            })
            .then(data => {
                submitButton.disabled = false; // Habilitar el botón de nuevo
                if (data.success === false && data.errors) {
                    console.group("Errors");
                    data.errors.forEach((error, i) => {
                        console.warn(`Error ${i + 1}: ${error}`);
                    });
                    console.groupEnd();
                } else {
                    console.log("✅ Registro exitoso:", data);
                    alert("¡Registro exitoso!");
                }
            })
            .catch(error => {
                // submitButton.disabled = false; // Habilitar el botón en caso de error
                console.error('Error:', error);
                alert("Hubo un problema al procesar la solicitud. Inténtalo de nuevo más tarde.");
            });
    });
});
