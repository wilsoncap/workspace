-- vista mostrar usuarios
create view vista_usuarios as
   select cedula, nombres, apellidos, edad, sexo correo
	from usuarios_ls;
    
-- llamar vista
select * from vista_usuarios;
    
    
-- insertar usuarios
 drop procedure if exists pa_insertar_usuario;
 delimiter //
 create procedure pa_insertar_usuario(
	in p_cedula int,
    in p_nombres varchar(30),
    in P_apellidos varchar(30),
    in p_edad int,
    in p_sexo varchar(10),
    in p_correo varchar(50)
 )
 begin
   insert into usuarios_ls values(p_cedula, p_nombres, P_apellidos, p_edad, p_sexo, p_correo); 
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
 
 -- actualizar usuario
  delimiter //
 create procedure pa_insertar_usuario(
	in p_cedula int,
    in p_nombres varchar(30),
    in P_apellidos varchar(30),
    in p_edad int,
    in p_sexo varchar(10),
    in p_correo varchar(50)
 )
 begin
   update usuarios_ls set nombres=p_nombres, apellidos=p_apellidos, edad=p_edad, sexo=p_sexo, correo=p_correo
  where cedula=p_cedula;
 end //
 delimiter ;
 
 call pa_insertar_usuario(2222, '2prueba','2prueba',55, 'genero2', '2prueba@GMAIL.COM');
 call pa_borrar_usuario(11111);
 call pa_update_usuario(2222, '3prueba','3prueba',35, 'masculino2', '2prueba@GMAIL.COM');
 
 select * from vista_usuarios;
 

 
