<?php
require_once __DIR__ . '/../../src/helpers/auth_session.php';
require_once __DIR__ . '/../../src/config/url_config.php';

function renderNavbar($role)
{ ?>

    <link rel="stylesheet" href="<?php echo ROOT ?>public/css/normalize.css">
    <link rel="stylesheet" href="<?php echo ROOT ?>public/css/navbar.css">
    <script src='https://unpkg.com/@tailwindcss/browser@4'></script>
    <div class="fixed bg-black left-0 w-[16rem] h-full p-[12px]" id="navbar">
        <div class="flex justify-center mt-[1rem] mb-[0.5rem]" id="content-logo">
            <img class="p-[0.5rem] w-[11rem]" src="<?php echo ROOT ?>public/images/logo-navbar.jpg" alt="infamous gym">
        </div>
        <nav class="mt-[0.5rem]" data-id="menu" id="navbar-menu">
            <div class="static flex flex-col">
                <ul class="grid grid-cols-1 gap-1">
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='<?php echo ROOT; ?>'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                stroke='currentColor' class='size-6'>
                                <path stroke-linecap='round' stroke-linejoin='round'
                                    d='m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25' />
                            </svg>
                            Inicio
                        </a>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            Gestión de Usuarios
                        </a>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                            Gestión de Pagos
                        </a>
                    </li>
                    <li class="link-parent grid grid-rows-[max-content_0fr] overflow-hidden transition-[grid-tamplates-rows] data-[toggle]:grid-rows-[max-content_1fr]">
                    <!-- <li class="link-parent"> -->
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,7fr)_minmax(0,1fr)] grid-flow-col gap-2' href='#' data-dropdown>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                            Gestión de Empleados
                            <img src="<?php echo ROOT; ?>public/icons/arrow.svg" class="arrow-buttom ml-auto transition-transform font-semibold" data-row>
                        </a>
                        <ul class="link-child overflow-hidden ml-4 text-white border-l border-gray-400">
                        <!-- <ul class="link-child"> -->
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#" data-modal="search-employee">Buscar Empleado</a>
                            </li>
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#" data-model="register-employee">Registrar Empleado</a>
                            </li>
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#">Horarios y Disponibilidad</a>
                            </li>
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#">Asignación de Coaches</a>
                            </li>
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#">Pagos y Comisiones</a>
                            </li>
                            <li class="ml-1 mt-4 mb-4">
                                <a href="#">Reportes y Desempeño</a>
                            </li>
                        </ul>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>
                            Clases y Horarios
                        </a>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                <path d="M14 3v4a1 1 0 0 0 1 1h4"></path>
                                <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"></path>
                                <path d="M9 17h6"></path>
                                <path d="M9 13h6"></path>
                            </svg>Reportes y Estadísticas
                        </a>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2'
                            href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
                                <path d="M2 12h1"></path>
                                <path d="M6 8h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2"></path>
                                <path d="M6 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z">
                                </path>
                                <path d="M9 12h6"></path>
                                <path d="M15 7v10a1 1 0 0 0 1 1h1a1 1 0 0 0 1 -1v-10a1 1 0 0 0 -1 -1h-1a1 1 0 0 0 -1 1z">
                                </path>
                                <path d="M18 8h2a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-2"></path>
                                <path d="M22 12h-1"></path>
                            </svg>Gestión de Equipos
                        </a>
                    </li>
                    <li class="link-parent">
                        <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2' href='#'>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 0 8.835-2.535m0 0A23.74 23.74 0 0 0 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46" />
                            </svg>
                            Anuncios y Promociones
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <hr>
        <nav>
            <ul>
                <li class="link-parent">
                    <a class='text-white font-semibold grid auto-cols-[minmax(0,1fr)_minmax(0,8fr)] grid-flow-col gap-2' href='/gimnasio/src/public/logout.php'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='size-6'>
                            <path stroke-linecap='round' stroke-linejoin='round'
                                d='M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75' />
                        </svg>Cerrar sesión
                    </a>
                </li>
            </ul>
        </nav>
        <hr>
        <div class="grid justify-items-center" id="content-user">
            <h2 class="text-white font-semibold m-[0.3rem]">¡Bienvenido!</h2>
            <img class="w-[4rem] rounded-[50%] m-[0.3rem]" src="<?php echo URL_IMAGES ?>profile-man.png" alt="#">
            <p class="capitalize text-white text-center font-semibold m-[0.3rem]">
                <?php echo strtolower($_SESSION['name']); ?></p>
        </div>
    </div>
    <script src="<?php echo ROOT ?>src/js/navbar.js"></script>
<?php } ?>