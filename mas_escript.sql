SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

---
select * from pacientes;
describe pacientes;

alter table pacientes modify FechaNacimiento integer;

select DNI,Nombre,Direccion,CodigoPostal,Telefono,Genero,FechaNacimiento,Correo from pacientes;
SELECT date_format(FROM_UNIXTIME(FechaNacimiento), "%d-%m-%Y") as fecha_formateada from pacientes;

UPDATE pacientes SET FechaNacimiento = NULL;
set SQL_SAFE_UPDATES=0;

INSERT INTO pacientes(DNI,Nombre,Direccion,CodigoPostal,Telefono,Genero,FechaNacimiento,Correo) VALUES ('h0000005','Mauricio Daniel','','','','','0000-00-00','usuario1@gmail.com');
delete from pacientes where PacienteId = 25;

INSERT INTO pacientes (DNI,Nombre,Direccion,CodigoPostal,Telefono,Genero,FechaNacimiento,Correo) values('h0000005','Mauricio Daniel','','','','','0000-00-00','usuario1@gmail.com');