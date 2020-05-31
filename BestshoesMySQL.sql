DROP DATABASE IF EXISTS Bestshoes;
CREATE DATABASE Bestshoes;
USE Bestshoes;

CREATE TABLE Proveedor
(
	Id_proveedor INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nombre VARCHAR(50) NOT NULL,
	Direccion VARCHAR(50) NOT NULL,
	CP INT NULL,
	Telefono VARCHAR(50) NULL,
	Email VARCHAR(50) NOT NULL
);

CREATE TABLE Tipo
(
	Id_tipo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nombre VARCHAR(50) NOT NULL
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
	No_interior INT NULL,
	Colonia VARCHAR(50) NOT NULL,
	CP INT NOT NULL,
	Telefono VARCHAR(50) NULL,
	Email VARCHAR(50) NULL
); 


CREATE TABLE Producto
(
	Id_producto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_proveedor INT NOT NULL REFERENCES Proveedor(Id_proveedor),
	Nombre VARCHAR(50) NOT NULL,
	Talla DECIMAL(10, 5) NOT NULL,
	Detalle VARCHAR(200) NOT NULL
);

CREATE TABLE Carrito
(
	Id_carrito INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	Cantidad INT NOT NULL
); 

CREATE TABLE Categoria
(
	Id_categoria INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Nombre VARCHAR(50) NOT NULL,
	Id_tipo INT NOT NULL REFERENCES Tipo(Id_tipo)
);


CREATE TABLE Venta
(
	Id_venta INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_carrito INT NOT NULL REFERENCES Carrito(Id_carrito),
	Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	Cantidad INT NOT NULL,
	Precio DECIMAL(18, 5) NOT NULL
);

CREATE TABLE Factura
(
	Id_factura INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_cliente INT NOT NULL REFERENCES Cliente(Id_cliente),
	Id_venta INT NOT NULL REFERENCES Venta(Id_venta),
	Fecha DATE NOT NULL,
	Precio DECIMAL(18, 5) NOT NULL,
	IVA DECIMAL(18, 5) NOT NULL,
	Total DECIMAL(18, 5) NOT NULL
);
    
CREATE TABLE Inventario
(
	Id_inventario INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_categoria INT NOT NULL REFERENCES Categoria(Id_categoria),
	Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	Id_proveedor INT NOT NULL REFERENCES Proveedor(Id_proveedor),
	Stock INT NOT NULL,
	Precio DECIMAL(18, 5) NOT NULL
);

CREATE TABLE Pedido
(
	Id_pedido INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
	Id_proveedor INT NOT NULL REFERENCES Proveedor(Id_proveedor),
	Cantidad INT NOT NULL,
	Fecha DATE NOT NULL
);


CREATE TABLE Main
(
	Id_main INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	Id_carrito INT NOT NULL REFERENCES Carrito(Id_carrito),
    Id_categoria INT NOT NULL REFERENCES Categoria(Id_categoria),
    Id_cliente INT NOT NULL REFERENCES Cliente(Id_cliente),
    Id_factura INT NOT NULL REFERENCES Factura(Id_factura),
    Id_inventario INT NOT NULL REFERENCES Inventario(Id_inventario),
    Id_pedido INT NOT NULL REFERENCES Pedido(Id_pedido),
    Id_producto INT NOT NULL REFERENCES Producto(Id_producto),
    Id_proveedor INT NOT NULL REFERENCES Proveedor(Id_proveedor),
    Id_tipo INT NOT NULL REFERENCES Tipo(Id_tipo),
    Id_venta INT NOT NULL REFERENCES Venta(Id_venta)
);

CREATE VIEW vw_factura AS
SELECT f.Id_factura AS Id_factura, f.Id_cliente AS Id_cliente,
f.Id_venta AS Id_venta, f.Fecha AS Fecha, SUM(v.Precio) AS Precio, 
f.IVA AS IVA, SUM(SUM(v.Precio)) AS Total
FROM Factura f, Venta v
WHERE f.Id_venta = v.Id_venta;