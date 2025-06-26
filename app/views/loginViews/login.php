<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

  <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
    style="
    background-image: url(https://yberausa.com/wp-content/uploads/2020/05/beuhair-interior-3-min-cropped-scaled.jpg);
  ">
    <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8 bg-white">


      <div class="aspect-[64/45]">
        <img
          src="/public/assets/fondo.jpg"
          class="w-full object-cover rounded-2xl"
          alt="imagen de inicio de sesión" />
      </div>

      <form
        class="  p-6  relative z-10 ">
        <div class="">

        </div>
        <div class="space-y-6">
          <div class="relative flex items-center">
            <input
              name="email"
              type="text"
              required
              class="w-full text-slate-900 text-sm border-b border-slate-300 focus:border-blue-600 px-2 py-3 pr-8 outline-none"
              placeholder="Ingresa tu correo" />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="#bbb"
              stroke="#bbb"
              class="w-[18px] h-[18px] absolute right-2"
              viewBox="0 0 682.667 682.667">
              <defs>
                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                  <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                </clipPath>
              </defs>
              <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                <path
                  fill="none"
                  stroke-miterlimit="10"
                  stroke-width="40"
                  d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z"
                  data-original="#000000"></path>
                <path
                  d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z"
                  data-original="#000000"></path>
              </g>
            </svg>
          </div>
          <div>
            <div class="relative flex items-center">
              <input
                name="password"
                type="password"
                required
                class="w-full text-slate-900 text-sm border-b border-slate-300 focus:border-blue-600 px-2 py-3 pr-8 outline-none"
                placeholder="Ingresa tu contraseña" />
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="#bbb"
                stroke="#bbb"
                class="w-[18px] h-[18px] absolute right-2 cursor-pointer"
                viewBox="0 0 128 128">
                <path
                  d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z"
                  data-original="#000000"></path>
              </svg>
            </div>
          </div>

        </div>
        <div class="mt-12">
          <button
            type="button" click="location.href='/app/views/AccessPublicViews/home.php"
            class="w-full py-2 px-4 text-[15px] font-medium tracking-wider rounded-md cursor-pointer text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
            Iniciar sesión
          </button>
          <p class="text-slate-600 text-sm text-center mt-6">
            ¿No tienes una cuenta?
            <a
              href="/app/views/loginViews/register.php"
              class="text-blue-600 font-medium hover:underline ml-1 whitespace-nowrap">Regístrate aquí</a>
          </p>
        </div>
      </form>
    </div>
  </div>

</body>

</html>