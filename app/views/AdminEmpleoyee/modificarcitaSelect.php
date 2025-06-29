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
                href="/app/views/AdminEmpleoyee/homeSupervisor.php"
                class="hover:text-yellow-400 text-[18px] font-semibold text-gray-600 block">información</a>
            </li>
            <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
              <a
                href="/app/views/AdminEmpleoyee/modificarcita.php"
                class="hover:text-yellow-400 text-[18px] font-semibold text-gray-600 block">Modificar Citas</a>
            </li>
            
            <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
              <a
                href="/app/views/AdminEmpleoyee/cobrarcitas.php"
                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold block">Cobrar Citas</a>
            </li>
            <li class="max-lg:border-b max-lg:border-gray-300 max-lg:py-3">
              <a
                href="/app/views/AdminEmpleoyee/pagarEmpleados.php"
                class="hover:text-yellow-400 text-gray-600 text-[18px] font-semibold block">Pagar Empleados</a>
            </li>
            
          </ul>
        </div>

        <div class="flex items-center space-x-8 max-lg:ml-auto">


         
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

  <div class="max-w-7xl max-lg:max-w-2xl mx-auto p-4">
    <h1 class="text-xl font-semibold text-slate-900">Modificar cita</h1>
    <div class="grid lg:grid-cols-2 lg:gap-x-6 gap-x-6 gap-y-8 mt-6">

      <div class="bg-white rounded-md px-4 py-6 h-max w-auto shadow-sm border border-gray-200">
        <div class="flex items-center justify-center ">
          <!-- Author: FormBold Team -->
          <div class="mx-auto w-full max-w-[550px] bg-white">
            <form action="/app/controllers/ServiciosCliente/create_quote.php" method="post">
              <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                  <div class="mb-5">
                    <label for="date" class="mb-3 block text-base font-medium text-[#07074D]">
                      Fecha
                    </label>
                    <input type="date" name="fecha" id="date" required
                      class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                  <div class="mb-5">
                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                      Hora
                    </label>
                    <input type="time" name="hora" id="time" required
                      class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                  </div>
                </div>

                <div class="w-full px-3 sm:w-2/2">
                  <div class="mb-5">
                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                      Estilistas
                    </label>
                    <div class="relative w-max mx-auto">


                      <select name="id_empleado" id="id_empleado" required class="w-full rounded-md border py-3 px-6 text-base">
                        <option value="">Seleccione un estilista</option>
                        <?php
                        require_once '../../config/conexion.php';
                        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
                        $query = "SELECT s.id, u.nombre, u.apellido FROM empleados s INNER JOIN usuarios u ON u.id = s.id_usuario WHERE s.id_categoria = $id";
                        $resultado = $conexion->query($query);
                        if ($resultado && $resultado->num_rows > 0) {
                          while ($row = $resultado->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</option>";
                          }
                        }
                        ?>
                      </select>


                    </div>
                  </div>
                </div>

                <div class="w-full px-3 sm:w-2/2">
                  <div class="mb-5">
                    <label for="time" class="mb-3 block text-base font-medium text-[#07074D]">
                      Servicio
                    </label>
                    <div class="relative w-max mx-auto">

                      <select name="id_servicio" id="id_servicio" required class="w-full rounded-md border py-3 px-6 text-base">
                        <option value="">Seleccione un servicio</option>
                        <?php
                        $query = "SELECT id, nombre FROM servicios WHERE id_categoria = $id";
                        $resultado = $conexion->query($query);
                        if ($resultado && $resultado->num_rows > 0) {
                          while ($row = $resultado->fetch_assoc()) {
                            echo "<option value='" . $row['id'] . "'>" . htmlspecialchars($row['nombre']) . "</option>";
                          }
                        }
                        ?>
                      </select>


                    </div>
                  </div>
                </div>

              </div>

              <div>
                <button type="submit"
                  class="hover:shadow-form w-full rounded-md bg-yellow-400 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                  Reservar cita
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
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
  document.addEventListener('DOMContentLoaded', () => {
    let dropdownToggle = document.getElementById('dropdownToggle');
    let dropdownMenu = document.getElementById('dropdownMenu');

    // Ocultar el menú por defecto
    dropdownMenu.classList.add('hidden');
    dropdownMenu.classList.remove('block');

    function toggleDropdown() {
      dropdownMenu.classList.toggle('hidden');
      dropdownMenu.classList.toggle('block');
    }

    function hideDropdown() {
      dropdownMenu.classList.add('hidden');
      dropdownMenu.classList.remove('block');
    }

    dropdownToggle.addEventListener('click', (event) => {
      event.stopPropagation(); // Prevents triggering document click
      toggleDropdown();
    });

    // Hide dropdown when <li> is clicked
    dropdownMenu.querySelectorAll('.dropdown-item').forEach((li) => {
      li.addEventListener('click', () => {
        hideDropdown();
      });
    });

    // Hide dropdown when clicking outside
    document.addEventListener('click', (event) => {
      if (!dropdownMenu.contains(event.target) && event.target !== dropdownToggle) {
        hideDropdown();
      }
    });
  });
  ///
  document.addEventListener('DOMContentLoaded', () => {
    let dropdownToggle1 = document.getElementById('dropdownToggle1');
    let dropdownMenu1 = document.getElementById('dropdownMenu1');

    // Ocultar el menú por defecto
    dropdownMenu1.classList.add('hidden');
    dropdownMenu1.classList.remove('block');

    function toggleDropdown() {
      dropdownMenu1.classList.toggle('hidden');
      dropdownMenu1.classList.toggle('block');
    }

    function hideDropdown() {
      dropdownMenu1.classList.add('hidden');
      dropdownMenu1.classList.remove('block');
    }

    dropdownToggle1.addEventListener('click', (event) => {
      event.stopPropagation(); // Previene que se cierre al hacer click en el botón
      toggleDropdown();
    });

    // Ocultar el menú al hacer click en una opción
    dropdownMenu1.querySelectorAll('.dropdown-item').forEach((li) => {
      li.addEventListener('click', () => {
        hideDropdown();
      });
    });

    // Ocultar el menú al hacer click fuera
    document.addEventListener('click', (event) => {
      if (!dropdownMenu1.contains(event.target) && event.target !== dropdownToggle1) {
        hideDropdown();
      }
    });
  });
</script>