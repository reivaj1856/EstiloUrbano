-- AUTENTICACIÓN Y USUARIOS

CREATE TABLE Usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    contraseña VARCHAR(255),
    telefono VARCHAR(20),
    direccion TEXT,
    rol ENUM('cliente', 'empleado', 'administrador') DEFAULT 'cliente'
);

CREATE TABLE Carrito (
    id_usuario INT PRIMARY KEY,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id)
);

-- ADMINISTRACIÓN DE CITAS Y SERVICIOS

CREATE TABLE CategoriaServicio (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100)
);

CREATE TABLE Servicios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    detalle TEXT,
    precio DECIMAL(10,2),
    duracion INT, -- en minutos
    id_categoria INT,
    FOREIGN KEY (id_categoria) REFERENCES CategoriaServicio(id)
);

CREATE TABLE Empleados (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    descripcion TEXT,
    id_categoria INT,
    foto longblob	,
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id),
    FOREIGN KEY (id_categoria) REFERENCES CategoriaServicio(id)
);

CREATE TABLE Reservas (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    id_servicio INT,
    id_empleado INT,
    fecha_reserva DATE,
    hora_reserva TIME,
    estado ENUM('pendiente', 'confirmado', 'cancelado', 'realizado') DEFAULT 'pendiente',
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id),
    FOREIGN KEY (id_servicio) REFERENCES Servicios(id),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id)
);

-- ADMINISTRACIÓN DE PRODUCTOS Y COMPRAS

CREATE TABLE Productos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100),
    descripcion TEXT,
    precio DECIMAL(10,2),
    cantidad INT DEFAULT 0
);

CREATE TABLE CarritoDetalle (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_carrito INT,
    id_producto INT,
    cantidad INT,
    subtotal DECIMAL(10,2),
    FOREIGN KEY (id_carrito) REFERENCES Carrito(id_usuario),
    FOREIGN KEY (id_producto) REFERENCES Productos(id)
);

CREATE TABLE Ordenes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2),
    estado ENUM('pendiente', 'pagado', 'enviado', 'cancelado') DEFAULT 'pendiente',
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id)
);

CREATE TABLE OrdenDetalle (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_orden INT,
    id_producto INT,
    cantidad INT,
    precio_unitario DECIMAL(10,2),
    subtotal DECIMAL(10,2),
    FOREIGN KEY (id_orden) REFERENCES Ordenes(id),
    FOREIGN KEY (id_producto) REFERENCES Productos(id)
);

-- ADMINISTRACIÓN DE PAGOS

CREATE TABLE Pagos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT,
    tipo_pago ENUM('producto', 'servicio'),
    monto DECIMAL(10,2),
    fecha_pago DATETIME DEFAULT CURRENT_TIMESTAMP,
    metodo_pago VARCHAR(50),
    descripcion TEXT,
    FOREIGN KEY (id_usuario) REFERENCES Usuarios(id)
);

CREATE TABLE HistorialPagos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_pago INT,
    estado_pago ENUM('pendiente', 'pagado', 'fallido', 'reembolsado'),
    fecha_estado DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_pago) REFERENCES Pagos(id)
);

CREATE TABLE ReporteIngresos (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fecha DATE,
    ingresos_productos DECIMAL(10,2),
    ingresos_servicios DECIMAL(10,2),
    total DECIMAL(10,2) GENERATED ALWAYS AS (ingresos_productos + ingresos_servicios) STORED
);

CREATE TABLE ReporteAtencion (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_empleado INT,
    id_servicio INT,
    fecha DATE,
    cantidad_servicios INT,
    total_generado DECIMAL(10,2),
    FOREIGN KEY (id_empleado) REFERENCES Empleados(id),
    FOREIGN KEY (id_servicio) REFERENCES Servicios(id)
);
