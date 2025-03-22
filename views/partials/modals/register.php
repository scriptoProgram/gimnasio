<script src='https://unpkg.com/@tailwindcss/browser@4'></script>

<div id="register-employee" class="fixed inset-0 hidden scale-100 transition-all duration-300 ease-out">
<!-- <div id="register-employee" class="fixed inset-0"> -->
    <div id="modal-components" class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo Oscuro -->
        <div id="dark-bg" class="modal-bg-container fixed inset-0 bg-black opacity-50"></div>
        <!-- Espaciador para centrar en pantallas grandes -->
        <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>

        <!-- Contenedor del Modal -->
        <div id="content-modal" class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full p-[1rem] text-black">
            <div id="modal-header" class="modal-content flex justify-between">
                <h5 class="text-lg font-medium text-gray-900">Registro de empleados</h5>
                <button id="cancel-btn" class="text-black cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <hr>
            <div id="modal-body">
                <form action="#" method="post">
                    <fieldset>
                        <legend>datos personales</legend>
                        <label for="name-emlpoyee">Nombre completo:</label>
                        <input type="text" id="name-employee" name="name-employee" placeholder="Ej: Juán Perez Mondragón" class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500">
                        <label for="email-emlpoyee">Correo:</label>
                        <input type="text" id="email-employee" name="email-employee" placeholder="Ej: juan_perez@gmail.com" class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500">
                        <label for="phone-emlpoyee">Teléfono:</label>
                        <input type="text" id="phone-employee" name="phone-employee" placeholder="Ej: 1234567890" class="border-solid border-1 border-gray-400 rounded-sm p-[3px] h-[2rem] focus:border-sky-500 focus:outline focus:outline-sky-500">
                        <label for="type-emlpoyee">Tipo:</label>
                        <select name="type-emlpoyee" id="type-emlpoyee">
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
            <!-- Contenido -->
            <!-- <div class="modal-wrapper bg-white px-4 pt-5 pb-4">
                <div class="modal-wrapper-flex sm:flex sm:items-start">
                    < !-- Ícono -- >
                    <div class="modal-icon mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        ❗
                    </div>
                    
                    < !-- Texto -- >
                    <div class="modal-content text-center mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium text-gray-900">Title</h3>
                        <p class="text-gray-500 text-sm">Texto de prueba para creación del modal</p>
                    </div>
                </div>
            </div>

            < !-- Botones -- >
            <div class="modal-actions bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="accept-btn" class="w-full sm:w-auto inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-green-700 font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-200 sm:ml-3 sm:text-sm" type="button">
                    Aceptar
                </button>
                <button id="cancel-btn" class="w-full sm:w-auto inline-flex justify-center rounded-md border border-gray-300 shadow-md px-4 py-2 mt-3 sm:mt-0 bg-red-700 font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200 sm:ml-3 sm:text-sm" type="button">
                    Cancelar
                </button>
            </div> -->
        </div>
    </div>
</div>
