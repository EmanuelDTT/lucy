create database login ;

create table Persona (
id_Persona int auto_increment primary key,
Nombre varchar (50) not null,
Numero varchar (11) not null,
Email varchar (50) not null,
contra varchar (40) not null,
tipoUsuario varchar (40), 	
metodo varchar(4)
);

insert into Persona values ('','admin', '0', 'admin@gmail.com','123','admin','');




