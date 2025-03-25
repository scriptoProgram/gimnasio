<?php
require_once __DIR__ . '/../../../src/config/url_config.php';
?>
<script src='https://unpkg.com/@tailwindcss/browser@4'></script>
<style>
    .active {
        background-color: white;
        color: black;        
    }
</style>

<div id="register-employee" class="fixed inset-0 scale-100 transition-all duration-300 ease-out">
    <!-- <div id="register-employee" class="fixed inset-0 hidden scale-100 transition-all duration-300 ease-out"> -->
    <div id="modal-components"
        class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo Oscuro -->
        <div id="dark-bg" class="modal-bg-container fixed inset-0 bg-black opacity-50"></div>
        <!-- Espaciador para centrar en pantallas grandes -->
        <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>

        <!-- Contenedor del Modal -->
        <div id="content-modal"
            class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-[48rem] sm:w-full p-[1rem] h-[43rem] max-h-[43rem]  text-black">
            <div id="modal-header" class="modal-content flex justify-between mb-[1rem]">
                <h2 class="text-xl font-medium text-gray-900">Registro de empleados</h2>
                <button id="cancel-btn" class="text-black cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <hr>
            <div id="modal-body" class="mt-[1rem] mb-[1rem] overflow-y-auto">
                <form action="#" method="post">
                    <!-- Foto de perfil -->
                    <div class="flex flex-col items-center space-y-3 mt-[1rem] mb-[1rem]">
                        <div id="image-preview1"
                            class="w-32 h-32 border border-gray-300 rounded-full overflow-hidden flex items-center justify-center bg-gray-100">
                            <img id="preview-imgF" onclick="document.getElementById('profile-image1').click()"
                                src="<?php echo URL_IMAGES ?>profile-man.png" class="w-full h-full object-cover"
                                alt="Previsualización">
                            <!-- <span id="placeholder-text" class="text-gray-500">Sin imagen</span> -->
                        </div>
                        <input type="file" id="profile-image1" name="profile-image1" accept="image/*" class="hidden">
                        <button type="button" onclick="document.getElementById('profile-image1').click()"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            cargar foto
                        </button>
                    </div>
                    <!-- BAR DEL FORMULARIO -->
                    <div role="tablist" id="tablist"
                        class="h-11 items-center justify-center rounded-md bg-muted p-1 grid grid-cols-3 mb-6 mr-[2px] bg-[#7D7D7D]"> <!-- style="outline:none;" -->
                        <button type="button" 
                            class="tab-btn justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background flex items-center gap-2 cursor-pointer text-white active" data-target="personal"
                            class="justify-center whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            datos personales
                        </button>
                        <button type="button" 
                            class="tab-btn justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background flex items-center gap-2 cursor-pointer text-white" data-target="domicilio">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            domicilio
                        </button>
                        <button type="button" 
                            class="tab-btn justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background flex items-center gap-2 cursor-pointer text-white" data-target="documentacion">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            documentación
                        </button>
                    </div>

                    <div id="personal" class="content grid grid-cols-2 gap-[1rem] h-[15.4rem] pt-[8px] pb-[8px] mb-[1rem] mt-[1rem]">
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="name-emlpoyee" class="mt-auto mb-auto">Nombre completo:</label>
                            <input type="text" id="name-employee" name="name-employee"
                            placeholder="Ej: Juán Perez Mondragón"
                            class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="email-emlpoyee" class="mt-auto mb-auto">Correo:</label>
                            <input type="text" id="email-employee" name="email-employee"
                                placeholder="Ej: juan_perez@gmail.com"
                                class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                                <!-- class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500"> -->
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="phone-emlpoyee" class="mt-auto mb-auto">Teléfono:</label>
                            <input type="text" id="phone-employee" name="phone-employee" placeholder="Ej: 1234567890"
                                class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="type-emlpoyee" class="mt-auto mb-auto">Tipo:</label>
                            <select name="type-emlpoyee" id="type-emlpoyee" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                                <option value="" selected disabled>selecciona una opción</option>
                                <option value="ADMINISTRADOR">administrador</option>
                                <option value="USUARIO">usuario</option>
                            </select>
                        </div>
                    </div>
                    <!-- Domicilio -->
                    <div id="domicilio" class="content grid grid-cols-2 gap-[1rem] h-[16.4rem] pt-[8px] mt-[1rem] hidden">
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="state-emlpoyee" class="mt-auto mb-auto">Estado:</label>
                            <input type="text" id="state-employee" name="state-employee" placeholder="Ej: Estado de México" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1 mr-[2px]">
                            <label for="city-emlpoyee" class="mt-auto mb-auto">Ciudad:</label>
                            <input type="text" id="city-employee" name="city-employee" placeholder="Ej: Estado de México" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="cp-emlpoyee" class="mt-auto mb-auto">Código Postal:</label>
                            <input type="text" id="cp-employee" name="cp-employee" placeholder="Ej: Estado de México" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1 mr-[2px]">
                            <label for="colony-emlpoyee" class="mt-auto mb-auto">Colonia:</label>
                            <input type="text" id="colony-employee" name="colony-employee" placeholder="Ej: La Merced" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="content-input grid grid-rows-2 space-y-1">
                            <label for="street-emlpoyee" class="mt-auto mb-auto">Calle:</label>
                            <input type="text" id="street-employee" name="street-employee" placeholder="Ej: AV. JOSÉ MARÍA MORELOS" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                        </div>
                        <div class="grid grid-cols-2 gap-[1rem] mr-[2px]">
                            <div class="content-input grid grid-rows-2 space-y-1">
                                <label for="numExt-emlpoyee" class="mt-auto mb-auto">Num. Ext:</label>
                                <input type="number" id="numExt-employee" name="numExt-employee" placeholder="Ej: 58" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                            </div>
                            <div class="content-input grid grid-rows-2 space-y-1">
                                <label for="numInt-emlpoyee" class="mt-auto mb-auto">Num. Int:</label>
                                <input type="text" id="numInt-employee" name="numInt-employee" placeholder="Ej: 58" class="h-10 w-full rounded-md border border-gray-400 px-3 py-2 text-sm ring-offset-background">
                            </div>
                        </div>
                    </div>
                    <!-- Documentación -->
                    <div id="documentacion" class="content grid grid-cols-2 gap-[1rem] h-[16.4rem] pt-[8px] mt-[1rem] hidden">
                        <div class="border border-dotted">
                        </div>
                        <div></div>
                        <div></div>
                        <label for="birth-certificate">Acta de nacimiento:</label>
                        <input type="file" id="birth-certificate" name="birth-certificate" accept="pdf">
                        <label for="curp">Curp:</label>
                        <input type="file" id="curp" name="curp" accept="pdf">
                        <label for="id">INE:</label>
                        <input type="file" id="id" name="id" accept="pdf">
                    </div>
                </form>
            </div>
            <hr>
            <div id="modal-footer" class="mt-auto">
                <p>hola</p>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".tab-btn");
    const contents = document.querySelectorAll(".content");
    console.log(contents)

    buttons.forEach(button => {
        button.addEventListener("click", function() {
            const target = this.getAttribute("data-target");

            // Oculta todos los contents
            contents.forEach(fieldset => fieldset.classList.add("hidden"));

            // Muestra el fieldset correspondiente
            document.getElementById(target).classList.remove("hidden");

            // Marca el botón activo
            buttons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });
});
</script>