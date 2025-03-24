<script src='https://unpkg.com/@tailwindcss/browser@4'></script>

<div id="register-employee" class="fixed inset-0 scale-100 transition-all duration-300 ease-out">
    <!-- <div id="register-employee" class="fixed inset-0 hidden scale-100 transition-all duration-300 ease-out"> -->
    <div id="modal-components" class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo Oscuro -->
        <div id="dark-bg" class="modal-bg-container fixed inset-0 bg-black opacity-50"></div>
        <!-- Espaciador para centrar en pantallas grandes -->
        <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>

        <!-- Contenedor del Modal -->
        <div id="content-modal" class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-[48rem] sm:w-full p-[1rem] max-h-[90vh]  text-black">
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
                        <div id="image-previewF" class="w-32 h-32 border border-gray-300 rounded-full overflow-hidden flex items-center justify-center bg-gray-100">
                            <img id="preview-imgF" onclick="document.getElementById('profile-image1').click()" src="<?php echo URL_IMAGES ?>profile-man.png" class="w-full h-full object-cover" alt="Previsualización">
                            <!-- <span id="placeholder-text" class="text-gray-500">Sin imagen</span> -->
                        </div>
                        <input type="file" id="profile-image1" name="profile-image1" accept="image/*" class="hidden">
                        <button type="button" onclick="document.getElementById('profile-image1').click()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            cargar foto
                        </button>
                    </div>
                    <!-- BAR DEL FORMULARIO -->
                    <div role="tablist" aria-orientation="horizontal" class="h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground grid grid-cols-3 mb-6" tabindex="0" data-orientation="horizontal" style="outline: none;">
                        <button type="button" role="tab" aria-selected="false" aria-controls="radix-«r0»-content-personal" data-state="inactive" id="radix-«r0»-trigger-personal" class="justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2" tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-4 w-4">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Datos Personales</span>
                        </button>
                        <button type="button" role="tab" aria-selected="false" aria-controls="radix-«r0»-content-address" data-state="inactive" id="radix-«r0»-trigger-address" class="justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2" tabindex="-1" data-orientation="horizontal" data-radix-collection-item="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-4 w-4">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>Domicilio</span>
                        </button>
                        <button type="button" role="tab" aria-selected="true" aria-controls="radix-«r0»-content-documents" data-state="active" id="radix-«r0»-trigger-documents" class="justify-center whitespace-nowrap rounded-sm px-3 py-1.5 text-sm font-medium ring-offset-background transition-all focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 data-[state=active]:bg-background data-[state=active]:text-foreground data-[state=active]:shadow-sm flex items-center gap-2" tabindex="0" data-orientation="horizontal" data-radix-collection-item="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text h-4 w-4">
                                <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                <path d="M10 9H8"></path>
                                <path d="M16 13H8"></path>
                                <path d="M16 17H8"></path>
                            </svg>
                            <span>Documentación</span>
                        </button>
                    </div>
                    <!-- BAR DEL FORMULARIO -->
                    <div role="tablist" class="h-10 items-center justify-center rounded-md bg-muted p-1 grid grid-cols-3 mb-6" style="outline:none;">
                        <button type="button" role="tab"></button>
                        <button type="button" role="tab"></button>
                        <button type="button" role="tab"></button>
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