<script src='https://unpkg.com/@tailwindcss/browser@4'></script>

<!-- Modal (Oculto por defecto) -->
<div id="search-employee" class="fixed inset-0 hidden" data-modal="search-employee">
    <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
        <!-- Fondo Oscuro -->
        <div class="modal-bg-container fixed inset-0 bg-gray-700 opacity-75"></div>
        
        <!-- Espaciador para centrar en pantallas grandes -->
        <div class="modal-space-container hidden sm:inline-block sm:align-middle sm:h-screen"></div>

        <!-- Contenedor del Modal -->
        <div class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:align-middle sm:max-w-lg sm:w-full">
            <!-- Contenido -->
            <div class="modal-wrapper bg-white px-4 pt-5 pb-4">
                <div class="modal-wrapper-flex sm:flex sm:items-start">
                    <!-- Ícono -->
                    <div class="modal-icon mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                        ❗
                    </div>
                    
                    <!-- Texto -->
                    <div class="modal-content text-center mt-3 sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg font-medium text-gray-900">Title</h3>
                        <p class="text-gray-500 text-sm">Texto de prueba para creación del modal</p>
                    </div>
                </div>
            </div>

            <!-- Botones -->
            <div class="modal-actions bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                <button id="accept-btn" class="w-full sm:w-auto inline-flex justify-center rounded-md border border-transparent shadow-md px-4 py-2 bg-green-700 font-medium text-white hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-200 sm:ml-3 sm:text-sm" type="button">
                    Aceptar
                </button>
                <button id="cancel-btn" class="w-full sm:w-auto inline-flex justify-center rounded-md border border-gray-300 shadow-md px-4 py-2 mt-3 sm:mt-0 bg-red-700 font-medium text-white hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-200 sm:ml-3 sm:text-sm" type="button">
                    Cancelar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript para abrir y cerrar el modal -->
<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("search-employee");
        const acceptBtn = document.getElementById("accept-btn");
        const cancelBtn = document.getElementById("cancel-btn");

        // Mostrar el modal (ejemplo de activación)
        function openModal() {
            modal.classList.remove("hidden");
        }

        // Ocultar el modal
        function closeModal() {
            modal.classList.add("hidden");
        }

        // Eventos de botones
        acceptBtn.addEventListener("click", closeModal);
        cancelBtn.addEventListener("click", closeModal);
    });
</script> -->
