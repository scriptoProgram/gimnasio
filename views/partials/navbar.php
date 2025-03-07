<?php
session_start();
function renderNavbar($role) { ?>
    <link rel="stylesheet" href="../public/css/normalize.css">
    <link rel="stylesheet" href="../public/css/navbar.css">
    <script src='https://unpkg.com/@tailwindcss/browser@4'></script>
    <div class="bg-black left-0 w-[11rem] h-full p-[0.5rem]" id="navbar">
        <div id="content-logo">
            <img src="../public/images/logo-navbar.jpg" alt="infamous gym">
        </div>
        <nav>
            <div class="static flex flex-col">
                <ul>
                    <li>
                        <a class='text-white grid auto-cols-[minmax(0,1fr)_minmax(0,4fr)] grid-flow-col gap-1'
                            href='main.php'>
                            <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                                stroke='currentColor' class='size-6'>
                                <path stroke-linecap='round' stroke-linejoin='round'
                                    d='m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25' />
                            </svg>
                            Inicio
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav>
            <ul>
                <li>
                    <a class='text-white grid auto-cols-[minmax(0,1fr)_minmax(0,4fr)] grid-flow-col gap-1'
                        href='/gimnasio/src/public/logout.php'>
                        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5'
                            stroke='currentColor' class='size-6'>
                            <path stroke-linecap='round' stroke-linejoin='round'
                                d='M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75' />
                        </svg>
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </nav>
        <div id="content-user"></div>
    </div>
    <!-- </div> -->
<?php } ?>