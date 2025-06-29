<div class="max-w-7xl max-lg:max-w-2xl mx-auto p-4">
    <h1 class="text-xl font-semibold text-slate-900">Reservar cita</h1>
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

      <div class="lg:col-span-1 space-y-6 w-auto">
        <div class="flex gap-6 bg-white px-4 py-6 rounded-md shadow-sm border border-gray-200">
          <div class="flex gap-6 sm:gap-4 max-sm:flex-col">
            <?php
            // 1. Capturar el ID desde la URL
            $id = isset($_GET['id']) ? intval($_GET['id']) : null;

            // 2. Conectarse a la base de datos
            require_once '../../config/conexion.php'; // ajusta la ruta si es necesario

            // 3. Consulta de empleados por categoría
            $query = "SELECT * FROM empleados s INNER JOIN usuarios u ON u.id = s.id_usuario WHERE s.id_categoria = $id";
            $resultado = $conexion->query($query);

            // 4. Verificar y mostrar
            if ($resultado && $resultado->num_rows > 0) {
              while ($row = $resultado->fetch_assoc()) {
                echo "<div class='w-auto h-30 max-sm:w-24 max-sm:h-24 shrink-0'>
                            <img src='https://media.istockphoto.com/id/853924196/es/foto/peluquer%C3%ADa-mujer-en-pie-en-el-sal%C3%B3n-de.jpg?s=612x612&w=0&k=20&c=fno8_zpLJQaHqOLoVDI0NGu0l9Y-l5-5ka0uOEnWzT0=' class='w-full h-full object-contain' />
                        </div>
                        <div class='flex flex-col gap-4'>
                            <div>
                                <h3 class='text-sm sm:text-base font-semibold text-slate-900'>" . htmlspecialchars($row['nombre']) . " " . htmlspecialchars($row['apellido']) . "</h3>
                                <p>" . htmlspecialchars($row['descripcion']) . "</p>
                            </div>
                        </div>";
              }
            } else {
              echo "<li class='py-2.5 px-5 text-slate-500 text-sm'>No hay estilistas disponibles.</li>";
            }
            ?>

          </div>


        </div>


      </div>


    </div>
  </div>