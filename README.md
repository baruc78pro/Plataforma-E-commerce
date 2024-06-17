# Plataforma-E-commerce

Plataforma e-commerce FOOD DIVCODE

Link del autor responsable de la página principal y los assets:

https://youtu.be/5rl4HzQXLRA?si=zduyxWvoxIIYUDMn

*Las unicas modificaciones echas por Malware Inc son la inclusión de los otros apartados y la base de datos, los creditos al creador DIVCODE*

[![foto-web-1.png](https://i.postimg.cc/90cXH55D/foto-web-1.png)](https://postimg.cc/WFfc0y4V)

Plataforma para practicas, esta echo en HTML, CSS, JavaScript, PHP y MySql.

Es importante tener Xampp en el equipo, el proyecto debe de estar dentro de la carpeta de htdocs dentro de la carpeta de Xampp para que funcione,

------------------------------------------------------------------------------------------------
Script de la base de datos:

Create database if not exists tienda;

use tienda;

CREATE TABLE productos (
  
  id int(11) NOT NULL,
  
  nombre varchar(55) NOT NULL,
  
  precio char(2) NOT NULL,
  
  foto varchar(500) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO productos (id, nombre, precio, foto) VALUES

(1, 'Burrito', '23', 'images/food5.png'),

(2, 'Hamburguesa americana', '50', 'images/food1.png'),

(3, 'Hamburguesa doble', '34', 'images/food2.png'),

(4, 'Hamburguesa americana', '50', 'images/food3.png'),

(5, 'Hamburguesa doble', '34', 'images/food4.png');

 ALTER TABLE productos
 
 MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
 
 COMMIT;
