CREATE DATABASE ventas;

USE ventas;

CREATE TABLE producto(
    id INT AUTO_INCREMENT,
    nombre VARCHAR(100),
    precio INT,
    stock INT,
    PRIMARY KEY(id)
);

INSERT INTO producto VALUES(null, 'Apilador Arcoiris','300','50');
INSERT INTO producto VALUES(null, 'Abaco Arcoiris','400','50');
INSERT INTO producto VALUES(null, 'Apilador Piramidal','350','50');
INSERT INTO producto VALUES(null, 'Arco de Cascada','300','50');
INSERT INTO producto VALUES(null, 'Naturaleza','500','50');
INSERT INTO producto VALUES(null, 'Rompecabezas de Naturaleza','500','50');

CREATE TABLE venta(
    id INT AUTO_INCREMENT,
    fecha DATETIME,
    total INT,
    PRIMARY KEY(id)
);

CREATE TABLE detalle(
    id INT AUTO_INCREMENT,
    venta INT,
    producto INT,
    cantidad INT,
    subTotal INT,
    PRIMARY KEY(id)
);

SELECT * FROM producto;
SELECT * FROM venta;
SELECT * FROM detalle;

DELETE FROM detalle;
DELETE FROM producto;
DELETE FROM venta;

DROP DATABASE ventas;

/*1.- Ver detalle de venta a través de su ID*/
SELECT 
    d.id, 
    p.nombre, 
    d.cantidad, 
    d.subTotal, 
    p.precio
FROM 
    detalle d, 
    producto p
WHERE 
    d.producto = p.id AND
    d.venta = 1;