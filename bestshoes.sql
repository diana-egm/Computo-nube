DROP DATABASE IF EXISTS Bestshoes;
CREATE DATABASE Bestshoes;
USE Bestshoes;

CREATE TABLE Administrador(
	Id_admin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Anombre VARCHAR(50) NOT NULL,
    Ap_apaterno VARCHAR(50) NOT NULL,
    Ap_amaterno VARCHAR(50) NOT NULL,
    Ausuario VARCHAR(50) NOT NULL,
    Acontraseña VARCHAR(50) NOT NULL
);

CREATE TABLE Cliente(
	Id_cliente INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	RFC VARCHAR(50) NOT NULL,
	Nombre VARCHAR(50) NOT NULL,
	Ap_paterno VARCHAR(50) NOT NULL,
	Ap_materno VARCHAR(50) NOT NULL,
	Nombre_usuario VARCHAR(50) NOT NULL,
	Contraseña VARCHAR(50) NOT NULL,
	Estado VARCHAR(50) NOT NULL,
	Ciudad VARCHAR(50) NOT NULL,
	Calle VARCHAR(50) NOT NULL,
	No_exterior INT NOT NULL,
	No_interior INT,
	Colonia VARCHAR(50) NOT NULL,
	CP VARCHAR(50) NOT NULL,
	Telefono VARCHAR(50) NULL,
	Email VARCHAR(50) NULL
); 
insert INTO Cliente VALUES (1, '041254', 'Luis', 'Zuniga', 'Celedon', 'L12', '12345', 'Guanajuato', 'salamaca', 
'Emiliano Zapata', 4, NULL, 'Bellavista', '36880', '4641407420', 'luis_z_95@live.com');

CREATE TABLE Producto(
	Id_producto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nombre VARCHAR(50) NOT NULL,
	Talla DECIMAL(10, 5) NOT NULL,
	Detalle VARCHAR(200) NOT NULL,
    Precio DECIMAL(18, 5) NOT NULL,
    Stock INT NOT NULL
);
INSERT INTO Producto VALUES ('1287', 'Air Jordan 1 Low Black Toe', '10', 'Edicion limitada', 870.00, 3); 

CREATE TABLE Venta
(
	Id_venta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	Cantidad INT NOT NULL,
	Fecha DATE NOT NULL
);

CREATE TABLE Factura
(
	Id_factura INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_cliente INT NOT NULL REFERENCES Cliente(Id_cliente),
	Id_venta INT NOT NULL REFERENCES Venta(Id_venta),
    Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	IVA DECIMAL(18, 5) NOT NULL,
	Total DECIMAL(18, 5) NOT NULL
);