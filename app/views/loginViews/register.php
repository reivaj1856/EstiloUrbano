<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./register.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>
    <div class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
        style="
    background-image: url(https://yberausa.com/wp-content/uploads/2020/05/beuhair-interior-3-min-cropped-scaled.jpg);
  ">
        <div class="max-w-md w-full mx-auto border border-gray-300 rounded-2xl p-8 bg-white">
            <div class="text-center mb-3">
                <a href="javascript:void(0)">
                    <img src="/public/assets/fondo.jpg" alt="logo" class="w-auto inline-block" />
                </a>
            </div>

            <form>
                <div class="mb-2">
                    <div>
                        <label class="text-slate-900 text-sm font-medium mb-3 block">Correo electrónico</label>
                        <input name="email" type="text" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 py-3 mb-2 rounded-md outline-blue-500" placeholder="Ingresa tu correo" />
                    </div>
                    <div>
                        <label class="text-slate-900 text-sm font-medium mb-3 block">Contraseña</label>
                        <input name="password" type="password" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 mb-2 py-3 rounded-md outline-blue-500" placeholder="Ingresa tu contraseña" />
                    </div>
                    <div>
                        <label class="text-slate-900 text-sm font-medium mb-2 block">Confirmar contraseña</label>
                        <input name="cpassword" type="password" class="text-slate-900 bg-white border border-gray-300 w-full text-sm px-4 py-3 rounded-md outline-blue-500" placeholder="Confirma tu contraseña" />
                    </div>

                    <div class="flex items-center mt-4">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                        <label for="remember-me" class="text-slate-600 ml-3 block text-sm">
                            Acepto los <a href="javascript:void(0);" class="text-blue-600 font-medium hover:underline ml-1">Términos y Condiciones</a>
                        </label>
                    </div>
                </div>

                <div class="mt-2">
                    <button type="button" class="w-full py-3 px-4 text-sm tracking-wider font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                        Crear una cuenta
                    </button>
                </div>
                <p class="text-slate-600 text-sm mt-6 text-center">¿Ya tienes una cuenta? <a href="/app/views/loginViews/login.php" class="text-blue-600 font-medium hover:underline ml-1">Inicia sesión aquí</a></p>
            </form>
        </div>
    </div>
</body>

</html>