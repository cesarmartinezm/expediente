create database banco;
use banco;
create table clientes
( dni char(9) not null primary key,
nombre varchar(15),
apellidos varchar(50),
direccion  varchar(50),
fecha_de_alta date,
credito decimal(9),
nsucursal decimal(6)
);

create table directores
(id integer not null primary key,
nombre varchar(15),
apellidos  varchar(50),
sueldo decimal(9,2)
);

create table sucursales
(nsucursal decimal(6) not null primary key,
nombre varchar(50),
director integer,
direccion varchar(50)
);
alter table clientes add foreign key(nsucursal) references sucursales(nsucursal);
alter table sucursales add foreign key(director) references directores(id);

insert into directores values(12,'Alberto', 'Pérez Martín',1800);
insert into directores values(15,'Antonio', 'López López',1500);
insert into directores values(20,'Silvia', 'Martín Martín',1300);
insert into directores values(13,'Pedro', 'García Martín',1900);

insert into sucursales values(1001,'Sucursal Centro',12,'Avd. del Estilo, 45');
insert into sucursales values(1002,'Sucursal Oeste',15,'Avd. Mediterráneo, 14');
insert into sucursales values(1003,'Sucursal Este',20,'Calle Martínez, 45');
insert into sucursales values(1004,'Sucursal Norte',null,'Calle Especias, 23');

insert into clientes values('30515454K', 'Ana', 'Martín Martín', 'Calle del Socorro, 1', '08/01/18', 1500,1001);
insert into clientes values('33358796A', 'Marta', 'López Ruiz', 'Calle Martínez, 76', '14/09/17', 600,1001);
insert into clientes values('78458784B', 'Antonio', 'Castillo Mentas', 'Calle Soles, 14', null, 500,1002);



