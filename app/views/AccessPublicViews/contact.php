<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <header
        class="flex border-b border-gray-300 bg-white min-h-[70px] tracking-wide relative z-50">
        <div class="px-4 py-4 w-full flex items-center">
            <div
                class="flex flex-wrap items-center justify-between sm:px-10 gap-4 w-full max-w-screen-xl mx-auto">
                <a href="javascript:void(0)" class="max-sm:hidden">
                    <img src="/public/assets/logo.png" alt="logo" class="w-[160px]" />
                </a>
                <a href="javascript:void(0)" class="hidden max-sm:block"><img
                        src="/public/assets/logo.png"
                        alt="logo"
                        class="w-25" />
                </a>

                <div
                    id="collapseMenu"
                    class="max-lg:hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50">
                    <button
                        id="toggleClose"
                        class="lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white w-9 h-9 flex items-center justify-center border border-gray-200 cursor-pointer">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-3.5 h-3.5 fill-black"
                            viewBox="0 0 320.591 320.591">
                            <path
                                d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                                data-original="#000000"></path>
                            <path
                                d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                                data-original="#000000"></path>
                        </svg>
                    </button>

                    <ul
                        class="lg:flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50">
                        <li class="mb-6 hidden max-lg:block">
                            <a href="javascript:void(0)"><img src="/public/assets/logo.png" alt="logo" class="w-36" />
                            </a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
                            <a
                                href="/app/views/AccessPublicViews/home.php"
                                class="hover:text-yellow-400 text-[18px] font-semibold text-gray-600 block">Nosotros</a>
                        </li>
                        <li
                            class="group max-lg:border-b max-lg:border-gray-300 max-lg:py-3 relative"
                            id="mobileServicesMenu">
                            <a
                                href="javascript:void(0)"
                                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold lg:hover:fill-blue-700 block flex items-center"
                                id="servicesMenuToggle">Servicios
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="16px"
                                    height="16px"
                                    class="ml-1 inline-block fill-current"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 16a1 1 0 0 1-.71-.29l-6-6a1 1 0 0 1 1.42-1.42l5.29 5.3 5.29-5.29a1 1 0 0 1 1.41 1.41l-6 6a1 1 0 0 1-.7.29z"
                                        data-name="16"
                                        data-original="#000000" />
                                </svg>
                            </a>
                            <ul
                                id="servicesSubmenu"
                                class="absolute shadow-lg bg-white space-y-3 lg:top-5 max-lg:top-8 -left-6 min-w-[250px] z-50 max-h-0 overflow-hidden group-hover:opacity-100 group-hover:max-h-[700px] px-6 group-hover:pb-4 group-hover:pt-6 transition-all duration-500">
                                <li class="border-b border-gray-300 py-2">
                                    <a
                                        href="/app/views/AccessPublicViews/service-beauty.php"
                                        class="hover:text-yellow-400 text-gray-600 text-[15px] font-medium block">Salon de belleza</a>
                                </li>
                                <li class="border-b border-gray-300 py-2">
                                    <a
                                        href="/app/views/AccessPublicViews/service-hair-health.php"
                                        class="hover:text-yellow-400 text-gray-600 text-[15px] font-medium block">Salud capilar</a>
                                </li>
                                <li class="border-b border-gray-300 py-2">
                                    <a
                                        href="/app/views/AccessPublicViews/service-manicure-and-pedicure.php"
                                        class="hover:text-yellow-400 text-gray-600 text-[15px] font-medium block">Maniquiur y pediquiur</a>
                                </li>
                                <li class="border-b border-gray-300 py-2">
                                    <a
                                        href="/app/views/AccessPublicViews/service-make-up.php"
                                        class="hover:text-yellow-400 text-gray-600 text-[15px] font-medium block">Maquillaje y peinado</a>
                                </li>
                            </ul>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
                            <a
                                href="/app/views/AccessPublicViews/listProduct.php"
                                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold block">Tienda de productos</a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
                            <a
                                href="/app/views/ClientViews/reservations.php"
                                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold block">Reservas</a>
                        </li>
                        <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
                            <a
                                href="/app/views/AccessPublicViews/contact.php"
                                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold block">Contacto</a>
                        </li>
                    </ul>
                </div>

                <div class="flex items-center space-x-8 max-lg:ml-auto">


                    <span class="relative">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="20px"
                            height="20px"
                            class="cursor-pointer fill-[#333] hover:fill-blue-700 inline"
                            viewBox="0 0 512 512">
                            <path
                                d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                                data-original="#000000"></path>
                        </svg>
                        <span
                            class="absolute left-auto -ml-1 top-0 rounded-full bg-yellow-400 px-1 py-0 text-xs text-white">0</span>
                    </span>
                    <form method="post" style="display:inline;" action="/app/controllers/loginCliente/logout.php">
                        <button type="submit"
                            class="px-5 py-2.5 rounded-lg cursor-pointer text-white text-sm tracking-wider font-medium border border-current outline-none bg-yellow-400 hover:bg-yellow-500 active:bg-yellow-700">
                            Logout
                        </button>
                    </form>


                    <button id="toggleOpen" class="lg:hidden cursor-pointer">
                        <svg
                            class="w-7 h-7"
                            fill="#000"
                            viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div
        class="w-full h-[250px] md:h-[250px] bg-no-repeat bg-cover bg-center flex items-center justify-center"
        style="
    background-image: url(https://cdn.shopify.com/s/files/1/0479/4558/0694/files/chio-lecca-blog-estilo-urbano-hip-hop.jpg?v=1721338322);
  ">
        <div class="container mx-auto text-center">
            <h2 class="text-6xl font-bold text-white mb-6">AL ESTILO URBANO</h2>
        </div>
    </div>

    <div class="p-4">
        <div class="grid lg:grid-cols-2 items-start gap-12 p-8 mx-auto max-w-6xl max-lg:max-w-2xl bg-white [box-shadow:0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
            <div>
                <h2 class="text-slate-900 text-3xl font-bold">Visita nuestro local</h2>
                <br>

                <div class="rounded-lg overflow-hidden">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7614.843945343573!2d-66.1977864!3d-17.3915256!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e375a33d8e2ba5%3A0xdd5e5c593f7151aa!2sN.A.%20Est%C3%A9tica%20y%20Peluquer%C3%ADa!5e0!3m2!1ses-419!2sbo!4v1750967219478!5m2!1ses-419!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>

            <form class="space-y-4">
                <a href="javascript:;" class="flex items-center mb-6">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.3092 18.3098C22.0157 18.198 21.8689 18.1421 21.7145 18.1287C21.56 18.1154 21.4058 18.1453 21.0975 18.205L17.8126 18.8416C17.4392 18.9139 17.2525 18.9501 17.0616 18.9206C16.8707 18.891 16.7141 18.8058 16.4008 18.6353C13.8644 17.2551 12.1853 15.6617 11.1192 13.3695C10.9964 13.1055 10.935 12.9735 10.9133 12.8017C10.8917 12.6298 10.9218 12.4684 10.982 12.1456L11.6196 8.72559C11.6759 8.42342 11.7041 8.27233 11.6908 8.12115C11.6775 7.96998 11.6234 7.82612 11.5153 7.5384L10.6314 5.18758C10.37 4.49217 10.2392 4.14447 9.95437 3.94723C9.6695 3.75 9.29804 3.75 8.5551 3.75H5.85778C4.58478 3.75 3.58264 4.8018 3.77336 6.06012C4.24735 9.20085 5.64674 14.8966 9.73544 18.9853C14.0295 23.2794 20.2151 25.1426 23.6187 25.884C24.9335 26.1696 26.0993 25.1448 26.0993 23.7985V21.2824C26.0993 20.5428 26.0993 20.173 25.9034 19.8888C25.7076 19.6046 25.362 19.4729 24.6708 19.2096L22.3092 18.3098Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <h5 class="text-black text-base font-normal leading-6 ml-5">51-69516843</h5>
                </a>
                <a href="javascript:;" class="flex items-center mb-6">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.81501 8.75L10.1985 13.6191C12.8358 15.2015 14.1544 15.9927 15.6032 15.9582C17.0519 15.9237 18.3315 15.0707 20.8905 13.3647L27.185 8.75M12.5 25H17.5C22.214 25 24.5711 25 26.0355 23.5355C27.5 22.0711 27.5 19.714 27.5 15C27.5 10.286 27.5 7.92893 26.0355 6.46447C24.5711 5 22.214 5 17.5 5H12.5C7.78595 5 5.42893 5 3.96447 6.46447C2.5 7.92893 2.5 10.286 2.5 15C2.5 19.714 2.5 22.0711 3.96447 23.5355C5.42893 25 7.78595 25 12.5 25Z" stroke="#000000" stroke-width="2" stroke-linecap="round"></path>
                    </svg>
                    <h5 class="text-black text-base font-normal leading-6 ml-5">estiloUrbanoSalonDeBelleza1@gmail.com</h5>
                </a>
                <a href="javascript:;" class="flex items-center mb-6">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 12.9169C25 17.716 21.1939 21.5832 18.2779 24.9828C16.8385 26.6609 16.1188 27.5 15 27.5C13.8812 27.5 13.1615 26.6609 11.7221 24.9828C8.80612 21.5832 5 17.716 5 12.9169C5 10.1542 6.05357 7.5046 7.92893 5.55105C9.8043 3.59749 12.3478 2.5 15 2.5C17.6522 2.5 20.1957 3.59749 22.0711 5.55105C23.9464 7.5046 25 10.1542 25 12.9169Z" stroke="#000000" stroke-width="2"></path>
                        <path d="M17.5 11.6148C17.5 13.0531 16.3807 14.219 15 14.219C13.6193 14.219 12.5 13.0531 12.5 11.6148C12.5 10.1765 13.6193 9.01058 15 9.01058C16.3807 9.01058 17.5 10.1765 17.5 11.6148Z" stroke="#000000" stroke-width="2"></path>
                    </svg>
                    <h5 class="text-black text-base font-normal leading-6 ml-5">389 Av.Alpero y Moises Monrroy.</h5>
                </a>
                <input type='text' placeholder='Nombre'
                    class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-blue-500" />
                <input type='email' placeholder='Gmail'
                    class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-blue-500" />
                <input type='text' placeholder='Sujeto'
                    class="w-full text-slate-900 rounded-md py-2.5 px-4 border border-gray-300 text-sm outline-0 focus:border-blue-500" />
                <textarea placeholder='Mensaje' rows="6"
                    class="w-full text-slate-900 rounded-md px-4 border border-gray-300 text-sm pt-2.5 outline-0 focus:border-blue-500"></textarea>
                <button type='button'
                    class="text-white bg-yellow-400 hover:bg-yellow-500 rounded-md text-sm font-medium px-4 py-2.5 w-full cursor-pointer border-0 mt-2">Enviar Mensajes</button>
            </form>
        </div>
    </div>


</body>
<footer class="tracking-wide bg-gray-50 px-10 pt-12 pb-6">
    <div class="flex flex-wrap justify-between gap-10">
        <div class="max-w-md">
            <a href='javascript:void(0)'>
                <img src="/public/assets/logo.png" alt="logo" class="w-36" />
            </a>
            <div class="mt-6">
                <p class="text-slate-600 leading-relaxed text-sm">Bienvenido a Estilo Urbano, uno de los mejores salones de belleza en Bolivia. <br> Nuestro centro de belleza ofrece tratamientos capilares centrados en tu salud y bienestar capilar, para lo cual trabajamos con productos orgánicos, sin amoníaco, gluten free y sin formol.

                    ¡Vení y atendé las necesidades de tu cabello en manos profesionales!

                </p>
            </div>
            <ul class="mt-10 flex space-x-5">
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-8 h-8" viewBox="0 0 49.652 49.652">
                            <path d="M24.826 0C11.137 0 0 11.137 0 24.826c0 13.688 11.137 24.826 24.826 24.826 13.688 0 24.826-11.138 24.826-24.826C49.652 11.137 38.516 0 24.826 0zM31 25.7h-4.039v14.396h-5.985V25.7h-2.845v-5.088h2.845v-3.291c0-2.357 1.12-6.04 6.04-6.04l4.435.017v4.939h-3.219c-.524 0-1.269.262-1.269 1.386v2.99h4.56z" data-original="#000000" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 112.196 112.196">
                            <circle cx="56.098" cy="56.097" r="56.098" fill="#007ab9" data-original="#007ab9" />
                            <path fill="#fff" d="M89.616 60.611v23.128H76.207V62.161c0-5.418-1.936-9.118-6.791-9.118-3.705 0-5.906 2.491-6.878 4.903-.353.862-.444 2.059-.444 3.268v22.524h-13.41s.18-36.546 0-40.329h13.411v5.715c-.027.045-.065.089-.089.132h.089v-.132c1.782-2.742 4.96-6.662 12.085-6.662 8.822 0 15.436 5.764 15.436 18.149zm-54.96-36.642c-4.587 0-7.588 3.011-7.588 6.967 0 3.872 2.914 6.97 7.412 6.97h.087c4.677 0 7.585-3.098 7.585-6.97-.089-3.956-2.908-6.967-7.496-6.967zm-6.791 59.77H41.27v-40.33H27.865v40.33z" data-original="#f1f2f2" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 152 152">
                            <linearGradient id="a" x1="22.26" x2="129.74" y1="22.26" y2="129.74" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#fae100" />
                                <stop offset=".15" stop-color="#fcb720" />
                                <stop offset=".3" stop-color="#ff7950" />
                                <stop offset=".5" stop-color="#ff1c74" />
                                <stop offset="1" stop-color="#6c1cd1" />
                            </linearGradient>
                            <g data-name="Layer 2">
                                <g data-name="03.Instagram">
                                    <rect width="152" height="152" fill="url(#a)" data-original="url(#a)" rx="76" />
                                    <g fill="#fff">
                                        <path fill="#ffffff10" d="M133.2 26c-11.08 20.34-26.75 41.32-46.33 60.9S46.31 122.12 26 133.2q-1.91-1.66-3.71-3.46A76 76 0 1 1 129.74 22.26q1.8 1.8 3.46 3.74z" data-original="#ffffff10" />
                                        <path d="M94 36H58a22 22 0 0 0-22 22v36a22 22 0 0 0 22 22h36a22 22 0 0 0 22-22V58a22 22 0 0 0-22-22zm15 54.84A18.16 18.16 0 0 1 90.84 109H61.16A18.16 18.16 0 0 1 43 90.84V61.16A18.16 18.16 0 0 1 61.16 43h29.68A18.16 18.16 0 0 1 109 61.16z" data-original="#ffffff" />
                                        <path d="m90.59 61.56-.19-.19-.16-.16A20.16 20.16 0 0 0 76 55.33 20.52 20.52 0 0 0 55.62 76a20.75 20.75 0 0 0 6 14.61 20.19 20.19 0 0 0 14.42 6 20.73 20.73 0 0 0 14.55-35.05zM76 89.56A13.56 13.56 0 1 1 89.37 76 13.46 13.46 0 0 1 76 89.56zm26.43-35.18a4.88 4.88 0 0 1-4.85 4.92 4.81 4.81 0 0 1-3.42-1.43 4.93 4.93 0 0 1 3.43-8.39 4.82 4.82 0 0 1 3.09 1.12l.1.1a3.05 3.05 0 0 1 .44.44l.11.12a4.92 4.92 0 0 1 1.1 3.12z" data-original="#ffffff" />
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" viewBox="0 0 1227 1227">
                            <path d="M613.5 0C274.685 0 0 274.685 0 613.5S274.685 1227 613.5 1227 1227 952.315 1227 613.5 952.315 0 613.5 0z" data-original="#000000" />
                            <path fill="#fff" d="m680.617 557.98 262.632-305.288h-62.235L652.97 517.77 470.833 252.692H260.759l275.427 400.844-275.427 320.142h62.239l240.82-279.931 192.35 279.931h210.074L680.601 557.98zM345.423 299.545h95.595l440.024 629.411h-95.595z" data-original="#ffffff" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <div class="max-lg:min-w-[140px]">
            <h4 class="text-slate-900 font-semibold text-sm relative max-sm:cursor-pointer">Servicios</h4>

            <ul class="mt-6 space-y-4">
                <li>
                    <a href='/app//views/AccessPublicViews/service-beauty.php' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Salon de belleza</a>
                </li>
                <li>
                    <a href='/app/views/AccessPublicViews/service-hair-health.php' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Salud Capilar</a>
                </li>
                <li>
                    <a href='/app/views/AccessPublicViews/service-make-up.php' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Maquillaje y peinado</a>
                </li>
                <li>
                    <a href='/app/views/AccessPublicViews/service-manicure-and-pedicure.php' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Maniquiur y pediquiur</a>
                </li>
            </ul>
        </div>

        <div class="max-lg:min-w-[140px]">
            <h4 class="text-slate-900 font-semibold text-sm relative max-sm:cursor-pointer">Tienda de productos</h4>
            <ul class="space-y-4 mt-6">
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Cosmeticos</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Cremas</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Maquillaje</a>
                </li>

            </ul>
        </div>

        <div class="max-lg:min-w-[140px]">
            <h4 class="text-slate-900 font-semibold text-sm relative max-sm:cursor-pointer">Contactanos</h4>

            <ul class="space-y-4 mt-6">
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Contacto</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Ubicacion</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Facebook</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Instagram</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Tiktok</a>
                </li>
            </ul>
        </div>

        <div class="max-lg:min-w-[140px]">
            <h4 class="text-slate-900 font-semibold text-sm relative max-sm:cursor-pointer">Adicional</h4>

            <ul class="space-y-4 mt-6">
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Preguntas Frecuentes</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Socios</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Mapa del sitio</a>
                </li>
                <li>
                    <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Noticias</a>
                </li>
            </ul>
        </div>
    </div>

    <hr class="mt-10 mb-6 border-gray-300" />

    <div class="flex flex-wrap max-md:flex-col gap-4">
        <ul class="md:flex md:space-x-6 max-md:space-y-2">
            <li>
                <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Términos de Servicio</a>
            </li>
            <li>
                <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Política de Privacidad</a>
            </li>
            <li>
                <a href='javascript:void(0)' class="hover:text-slate-900 text-slate-600 text-sm font-normal">Seguridad</a>
            </li>
        </ul>
    </div>
</footer>

</html>
<script>
    var toggleOpen = document.getElementById('toggleOpen');
    var toggleClose = document.getElementById('toggleClose');
    var collapseMenu = document.getElementById('collapseMenu');

    function handleClick() {
        if (collapseMenu.style.display === 'block') {
            collapseMenu.style.display = 'none';
        } else {
            collapseMenu.style.display = 'block';
        }
    }

    toggleOpen.addEventListener('click', handleClick);
    toggleClose.addEventListener('click', handleClick);

    // Mobile submenu toggle for "Servicios"
    var servicesMenuToggle = document.getElementById('servicesMenuToggle');
    var servicesSubmenu = document.getElementById('servicesSubmenu');

    // Only add click event for mobile screens
    function isMobile() {
        return window.innerWidth < 1024;
    }

    function closeSubmenu() {
        servicesSubmenu.style.maxHeight = null;
        servicesSubmenu.style.opacity = null;
        servicesSubmenu.style.paddingBottom = null;
        servicesSubmenu.style.paddingTop = null;
    }

    function openSubmenu() {
        servicesSubmenu.style.maxHeight = '700px';
        servicesSubmenu.style.opacity = '1';
        servicesSubmenu.style.paddingBottom = '1rem';
        servicesSubmenu.style.paddingTop = '1.5rem';
    }

    var submenuOpen = false;
    servicesMenuToggle.addEventListener('click', function(e) {
        if (isMobile()) {
            e.preventDefault();
            submenuOpen = !submenuOpen;
            if (submenuOpen) {
                openSubmenu();
            } else {
                closeSubmenu();
            }
        }
    });

    // Reset submenu on resize
    window.addEventListener('resize', function() {
        if (!isMobile()) {
            closeSubmenu();
            submenuOpen = false;
        }
    });
</script>