create database productos
use productos

create table products (
	codigo varchar(4),
    seccion varchar(11),
    nombre varchar(19),
    precio decimal(10.0),
    fecha varchar(10),
    importado varchar(9),
    pais varchar(9),
    foto varchar(10),
    
    primary key(codigo)
    

)

alter table products modify foto foto varchar(50);

insert into products()
values ('AR03', 'DEPORTES', 'RAQUETA TENIS', 107, '22/10/2015',  'FALSO', 'PARAGUAY', NULL),
	   ('AR04', 'DEPORTES', 'BALON FUTBOL',   83,'12/12/2019', 'FALSO', 'PARAGUAY', NULL),
       ('AR05', 'CONFECCION', 'SERRUCHO',   18,'12/12/2019', 'VERDADERO', 'PARAGUAY', NULL),
       ('AR06', 'JUGUETERIA', 'CORREPASILLOS',   33, '12/12/2019', 'VERDADERO', 'PARAGUAY', NULL),
       ('AR07', 'CERAMICA', 'TUBOS',   15,'12/12/2019', 'VERDADERO', 'PARAGUAY', NULL),
       ('AR08', 'FERRETERIA', 'LLAVE INGLESA', 78, '12/12/2019', 'VERDADERO', 'PARAGUAY', NULL),
       ('AR09', 'DEPORTES', 'PISTOLA OLIMPICA', 53, '12/12/2019', 'VERDADERO', 'PARAGUAY', NULL),
       ('AR10', 'JUGUETERIA', 'PISTOLA CIN SONIDOS',13,'12/12/2019', 'VERDADERO', 'PARAGUAY', NULL);
       
       
       select * from products
       
       