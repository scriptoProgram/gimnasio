<script src='https://unpkg.com/@tailwindcss/browser@4'></script>

<div id="search-modal" class="fixed inset-0">
    <div class="modal-flex-container flex items-end justify-center min-h-screen pt-4 px-4 pb-20">
        <div class="modal-bg-container fixed inset-0 bg-gray-700 opacity-75"></div>
        <div class="modal-space-container"></div>
        <div class="modal-container inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-lx transform transition-all w-full">
            <div class="modal-wrapper bg-white px-4 pt-5 pb-4">
                <div class="modal-wrapper-flex sm:flex sm:items-start">
                    <div class="modal-icon flex-shrink flex items-center justify-center h-12 w-12 rounded-full bg-red-100"></div>
                    <div class="modal-content">
                        <h3>Title</h3>
                        <div class="modal-text">
                            <p>Texto de prueba para creación del modal</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-actions">
                <button type="button">Cancelar</button>
                <button type="button">Aceptar</button>
                <!-- Botones de accion -->
            </div>
        </div>
    </div>
</div>