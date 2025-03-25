<script src='https://unpkg.com/@tailwindcss/browser@4'></script>

<div id="register-employee" class="fixed inset-0 scale-100 transition-all duration-300 ease-out">
    <!-- <div id="register-employee" class="fixed inset-0 hidden scale-100 transition-all duration-300 ease-out"> -->
    <div id="modal-components" class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo Oscuro -->
        <div id="dark-bg" class="modal-bg-container fixed inset-0 bg-black opacity-50"></div>
        <!-- Espaciador para centrar en pantallas grandes -->
        <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>

        <!-- Contenedor del Modal -->
        <div id="content-modal" class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-[48rem] sm:w-full p-[1rem] h-[43rem] max-h-[43rem]  text-black">
            <div id="modal-header" class="modal-content flex justify-between">
                <h5 class="text-lg font-medium text-gray-900">Registro de empleados</h5>
                <button id="cancel-btn" class="text-black cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div></div>
            <hr>
            <div id="modal-body">
                <form action="#" method="post">
                    <!-- Foto de perfil -->
                    <div class="flex flex-col items-center space-y-3">
                        <div id="image-preview1" class="w-32 h-32 border border-gray-300 rounded-full overflow-hidden flex items-center justify-center bg-gray-100">
                            <img id="preview-imgF" onclick="document.getElementById('profile-image1').click()" src="<?php echo URL_IMAGES ?>profile-man.png" class="w-full h-full object-cover" alt="Previsualización">
                            <!-- <span id="placeholder-text" class="text-gray-500">Sin imagen</span> -->
                        </div>
                        <input type="file" id="profile-image1" name="profile-image1" accept="image/*" class="hidden">
                        <button type="button" onclick="document.getElementById('profile-image1').click()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            cargar foto
                        </button>
                    </div>
                    <!-- BAR DEL FORMULARIO -->
                    <div role="tablist" id="tablist" class="h-10 items-center justify-center rounded-md bg-muted p-1 grid grid-cols-3 mb-6 ring" style="outline:none;">
                        <button type="button" class="justify-center whitespace-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            datos personales
                        </button>
                        <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                            domicilio
                        </button>
                        <button type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                            </svg>
                            documentación
                        </button>
                    </div>
                    <fieldset>
                        <legend>datos personales</legend>
                        <label for="name-emlpoyee">Nombre completo:</label>
                        <input type="text" id="name-employee" name="name-employee" placeholder="Ej: Juán Perez Mondragón" class="border-solid border-1 border-gray-400 rounded-sm py-[3px] px-[6px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500 w-[18rem]">
                        <label for="email-emlpoyee">Correo:</label>
                        <input type="text" id="email-employee" name="email-employee" placeholder="Ej: juan_perez@gmail.com" class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500">
                        <label for="phone-emlpoyee">Teléfono:</label>
                        <input type="text" id="phone-employee" name="phone-employee" placeholder="Ej: 1234567890" class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500">
                        <label for="type-emlpoyee">Tipo:</label>
                        <select name="type-emlpoyee" id="type-emlpoyee" class="hover:bg-violet-600">
                            <option value="" selected disabled>selecciona una opción</option>
                            <option value="ADMINISTRADOR">administrador</option>
                            <option value="USUARIO">usuario</option>
                        </select>
                    </fieldset>
                    <!-- Domicilio -->
                    <fieldset class="border-red-50">
                        <legend>domicilio</legend>
                        <label for="state-emlpoyee">Estado:</label>
                        <input type="text" id="state-employee" name="state-employee" placeholder="Ej: Estado de México">
                        <label for="city-emlpoyee">Ciudad:</label>
                        <input type="text" id="city-employee" name="city-employee" placeholder="Ej: Estado de México">
                        <label for="cp-emlpoyee">Código Postal:</label>
                        <input type="text" id="cp-employee" name="cp-employee" placeholder="Ej: Estado de México">
                        <label for="colony-emlpoyee">Colonia:</label>
                        <input type="text" id="colony-employee" name="colony-employee" placeholder="Ej: La Merced">
                        <label for="street-emlpoyee">Calle:</label>
                        <input type="text" id="street-employee" name="street-employee" placeholder="Ej: AV. JOSÉ MARÍA MORELOS">
                        <label for="numExt-emlpoyee">Num. Ext:</label>
                        <input type="number" id="numExt-employee" name="numExt-employee" placeholder="Ej: 58">
                        <label for="numInt-emlpoyee">Num. Int:</label>
                        <input type="text" id="numInt-employee" name="numInt-employee" placeholder="Ej: 58">
                    </fieldset>
                    <!-- Documentación -->
                    <fieldset class="border-red-50">
                        <legend>documentación</legend>
                        <label for="birth-certificate">Acta de nacimiento:</label>
                        <input type="file" id="birth-certificate" name="birth-certificate" accept="pdf">
                        <label for="curp">Curp:</label>
                        <input type="file" id="curp" name="curp" accept="pdf">
                        <label for="id">INE:</label>
                        <input type="file" id="id" name="id" accept="pdf">
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>