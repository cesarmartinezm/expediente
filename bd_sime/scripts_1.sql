/*Tabla Paciente*/

CREATE TABLE paciente(
id_p int not null AUTO_INCREMENT primary key,
apaterno varchar(30) not null,
amaterno varchar(39),
nombre varchar(40),
fnacimiento date,
nacionalidad varchar(30),
edo_nacimiento varchar(30),
genero varchar(10),
edo_civil varchar(30),
dom_estado varchar(30),
dom_minicipio varchar(30),
dom_localidad varchar(30),
dom_calle varchar(40),
dom_numero int,
convenio varchar(30),
ocupacion varchar(30)
);

/*Tabla Médico*/

CREATE TABLE medico(
id_m int not null AUTO_INCREMENT primary key,
apaterno varchar(30),
amaterno varchar(30),
nombre varchar(40),
fnacimiento date,
especialidad varchar(40),
num_cedula varchar(10)
);

