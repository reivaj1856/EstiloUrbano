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
  ">
    <div class="absolute bg-black opacity-60 inset-0 z-0"></div>
    <div
      class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">
      <div class="grid gap-8 grid-cols-1">
        <div class="flex flex-col">
          <div class="flex flex-col sm:flex-row items-center">
            <h2 class="font-semibold text-lg mr-auto">Información del empleado</h2>
            <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
          </div>
          <div class="mt-5">
            <form action="/app/controllers/loginCliente/registerEmpleeoyeAction.php" method="POST" enctype="multipart/form-data">
              <div>
              <div class="md:space-y-2 mb-3">
                <label class="text-xs font-semibold text-gray-600 py-2">Foto del empleado<abbr class="hidden" title="requerido">*</abbr></label>
                <div class="flex items-center py-6">
                  <div class="w-35 h-35 mr-4 flex-none rounded-xl border overflow-hidden">
                    <img
                      id="preview-img"
                      class="w-35 h-35 mr-4 object-cover"
                      src="https://images.unsplash.com/photo-1611867967135-0faab97d1530?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1352&amp;q=80"
                      alt="Subir avatar" />
                  </div>
                  <label class="cursor-pointer">
                    <span
                      class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-blue-700 hover:bg-gray-600 hover:shadow-lg">Importar imagen</span>
                    <input
                      type="file"
                      class="hidden"
                      accept="image/*"
                      id="foto"
                      name="foto"
                      onchange="previewImage(event)" />
                  </label>
                </div>
                <script>
                  function previewImage(event) {
                    const input = event.target;
                    const img = document.getElementById('preview-img');
                    if (input.files && input.files[0]) {
                      const reader = new FileReader();
                      reader.onload = function(e) {
                        img.src = e.target.result;
                      }
                      reader.readAsDataURL(input.files[0]);
                    }
                  }
                </script>
              </div>
              <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2">Nombre<abbr title="requerido">*</abbr></label>
                  <input requiered
                    placeholder="Nombre del empleado"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="nombre"
                    id="nombre" />

                </div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2">Correo<abbr title="requerido">*</abbr></label>
                  <input requiered
                    placeholder="Correo electrónico"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="email"
                    id="email" />

                </div>
              </div>
              <div class="md:flex flex-row md:space-x-4 w-full text-xs">
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2">Apellido<abbr title="requerido">*</abbr></label>
                  <input requiered
                    placeholder="Apellido del empleado"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="text"
                    name="apellido"
                    id="apellido" />

                </div>
                <div class="mb-3 space-y-2 w-full text-xs">
                  <label class="font-semibold text-gray-600 py-2">Contraseña<abbr title="requerido">*</abbr></label>
                  <input requiered
                    placeholder="Correo electrónico"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    required="required"
                    type="password"
                    name="contraseña"
                    id="contraseña" />

                </div>
              </div>

              <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2">Telefono</label>
                  <input requiered
                    placeholder="Telefono"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="telefono"
                    id="telefono" />
                </div>
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2">ROL<abbr title="requerido">*</abbr></label>
                  <select requiered
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full"
                    required="required"
                    name="rol"
                    id="rol">
                    <option value="">Seleccione un rol</option>
                    <option value="">Administrador</option>
                    <option value="">Empleado</option>
                    <option value="">Usuario</option>
                  </select>
                  <p class="text-sm text-red-500 hidden mt-3" id="error">
                    Por favor, complete este campo.
                  </p>
                </div>
              </div>

              <div class="md:flex md:flex-row md:space-x-4 w-full text-xs">
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2">Dirección</label>
                  <input requiered
                    placeholder="Dirección"
                    class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4"
                    type="text"
                    name="direccion"
                    id="direccion" />
                </div>
                <div class="w-full flex flex-col mb-3">
                  <label class="font-semibold text-gray-600 py-2">Categoria<abbr title="requerido">*</abbr></label>
                  <select requiered
                    class="block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 md:w-full"
                    required="required"
                    name="categoria"
                    id="categoria">
                    <option value="5">Administrador</option>
                    <option value="1">Maquillaje y Peinado</option>
                    <option value="2">Salón de Belleza</option>
                    <option value="3">Salud Capilar</option>
                    <option value="4">Manicure y Pedicure</option>
                  </select>
                  <p class="text-sm text-red-500 hidden mt-3" id="error">
                    Por favor, complete este campo.
                  </p>
                </div>

              </div>
              <div>
                <label class='text-sm text-slate-600 font-medium mb-2 block'>Descripcion</label>
                <textarea placeholder='Ingresa la descripcion del empleado' rows="6" name ="descripcion"
                  class="w-full px-4 text-slate-800 border border-gray-lighter focus:border-slate-900 focus:bg-transparent text-sm pt-3 outline-0 transition-all"></textarea>
              </div>

              <div
                class="mt-5 text-right md:space-x-3 md:block flex flex-col-reverse">
                
                <button type="submit"
                  class="mb-2 md:mb-0 bg-blue-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-blue-600">
                  Guardar
                </button>
              </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>