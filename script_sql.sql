-- vista mostrar usuarios
drop view if exists vista_usuarios;
create view vista_usuarios as
   select cedula, nombres, apellidos, edad, sexo, correo, url_img
	from usuarios_ls;
    
-- llamar vista
select * from vista_usuarios;

describe usuarios_ls;
    
    
-- insertar usuarios
 drop procedure if exists pa_insertar_usuario;
 delimiter //
 create procedure pa_insertar_usuario(
	in p_cedula int,
    in p_nombres varchar(30),
    in P_apellidos varchar(30),
    in p_edad int,
    in p_sexo varchar(10),
    in p_correo varchar(50),
    in p_urlimg varchar(150)
 )
 begin
   insert into usuarios_ls values(p_cedula, p_nombres, P_apellidos, p_edad, p_sexo, p_correo, p_urlimg); 
 end //
 delimiter ;
 
 -- delete usuarios
  delimiter //
 create procedure pa_borrar_usuario(
	in p_cedula int
 )
 begin
    delete from usuarios_ls where cedula=p_cedula; 
 end //
 delimiter ;
 
 drop procedure if exists pa_actualizar_usuario;
 -- actualizar usuario
  delimiter //
 create procedure pa_actualizar_usuario(
	in p_cedula int,
    in p_nombres varchar(30),
    in P_apellidos varchar(30),
    in p_edad int,
    in p_sexo varchar(10),
    in p_correo varchar(50),
    in p_urlimg varchar(150)
 )
 begin
   update usuarios_ls set nombres=p_nombres, apellidos=p_apellidos, edad=p_edad, sexo=p_sexo, correo=p_correo, url_img=p_urlimg 
   where cedula=p_cedula;
 end //
 delimiter ;
 
 call pa_insertar_usuario(12345, 'manuel antonio','carmona',45, 'hombre', 'maño@gmail.com');
 call pa_insertar_usuario(8535, 'carlos manuel','perez pereia',26, 'hombre', 'carlitos@gmail.com');
 call pa_borrar_usuario(11111);
 call pa_update_usuario(2222, '3prueba','3prueba',35, 'masculino2', '2prueba@GMAIL.COM');
 
 select * from vista_usuarios;
 
describe usuarios_ls;
 
 
 alter table usuarios_ls
  add url_img varchar(150);
