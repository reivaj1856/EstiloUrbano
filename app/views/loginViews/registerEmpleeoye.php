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
    <!-- componente -->
<div
  class="relative min-h-screen flex items-center justify-center bg-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
  style="
    background-image: url(https://yberausa.com/wp-content/uploads/2020/05/beuhair-interior-3-min-cropped-scaled.jpg);
  "
>
  <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
  <div
    class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10"
  >
    <div class="grid gap-8 grid-cols-1">
      <div class="flex flex-col">
        <div class="flex flex-col sm:flex-row items-center">
          <h2 class="font-semibold text-lg mr-auto">Información del empleado</h2>
          <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
        </div>
        <div class="mt-5">
          <div class="form">
            <div class="md:space-y-2 mb-3">
              <label class="text-xs font-semibold text-gray-600 py-2"
                >Foto del empleado<abbr class="hidden" title="requerido"
                  >*</abbr
                ></label
              >
              <div class="flex items-center py-6">
                <div
                  class="w-35 h-35 mr-4 flex-none rounded-xl border overflow-hidden"
                >
                  <img
                    class="w-35 h-35 mr-4 object-cover"
                    src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80"
                    alt="Subir avatar"
                  />
                </div>
                <label class="cursor-pointer">
                  <span
                    class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-700 hover:bg-gray-600 hover:shadow-lg"
                    >Importar imagen</span
                  >
                  <input
                    type="file"
                    class="hidden"
                    :multiple="multiple"
                    :accept="accept"
                  />
                </label>
              </div>
            </div>
            <div class="md:flex flex-row md:space-x-4 w-full text-xs">
              <div class="mb-3 space-y-2 w-full text-xs">
                <label class="font-semibold text-gray-600 py-2"
                  >Nombre<abbr title="requerido">*</abbr></label
                >
                <input
                  placeholder="Nombre del empleado"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                  required="required"
                  type="text"
                  name="integration[shop_name]"
                  id="integration_shop_name"
                />
               <!--  <p class="text-red-400 text-xs ">
                  Por favor, complete este campo.
                </p> -->
              </div>
              <div class="mb-3 space-y-2 w-full text-xs">
                <label class="font-semibold text-gray-600 py-2"
                  >Correo<abbr title="requerido">*</abbr></label
                >
                <input
                  placeholder="Correo electrónico"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                  required="required"
                  type="text"
                  name="integration[shop_name]"
                  id="integration_shop_name"
                />
                <!--  <p class="text-red-400 text-xs ">
                  Por favor, complete este campo.
                </p> -->
              </div>
            </div>
            
            <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
              <div class="w-full flex flex-col mb-3">
                <label class="font-semibold text-gray-600 py-2"
                  >Dirección</label
                >
                <input
                  placeholder="Dirección"
                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                  type="text"
                  name="integration[street_address]"
                  id="integration_street_address"
                />
              </div>
              <div class="w-full flex flex-col mb-3">
                <label class="font-semibold text-gray-600 py-2"
                  >Sucursal<abbr title="requerido">*</abbr></label
                >
                <select
                  class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full"
                  required="required"
                  name="integration[city_id]"
                  id="integration_city_id"
                >
                  <option value="">Seleccione ubicación</option>
                  <option value="">VILLA BUSCH</option>
                </select>
                <p class="text-sm text-red-500 hidden mt-3" id="error">
                  Por favor, complete este campo.
                </p>
              </div>
            </div>
            
            
            <div
              class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse"
            >
              <button
                class="mb-2 md:mb-0 bg-white px-5 py-2 text-sm shadow-sm font-medium tracking-wider border text-gray-600 rounded-full hover:shadow-lg hover:bg-gray-100"
              >
                Cancelar
              </button>
              <button
                class="mb-2 md:mb-0 bg-blue-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600"
              >
                Guardar
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>

</html>