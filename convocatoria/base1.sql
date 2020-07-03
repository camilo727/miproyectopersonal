SELECT COUNT(*)AS contar
        FROM estudiante
        WHERE id_usuario='2'
        AND id_ciclo='2'
        
SELECT id_ciclo,id_usuario
FROM estudiante
WHERE id_ciclo='2'
 
SELECT id_ciclo,id_usuario
        FROM estudiante
        WHERE id_ciclo='2'
        
 
  SELECT f.fecha_formato,e.estado,c.usuario
        FROM formato f, estado e, usuario c
        WHERE f.id_estado=e.id_estado
        AND f.id_usuario=c.id_usuario
        AND e.id_estado=1
        
UPDATE estudiante SET nombres='23456',cedula='234567',codigo_est='34567',programa='3467',id_modalidad='2',lugar_expe='23456',nom_modal='23456',pro_modal='56789',id_periodo='1',fecha_formato='2019-12-25',id_estado='1'
        WHERE id_ciclo='1'
        

SELECT c.nombre,es.estado,est.fecha_formato
FROM estudiante est, ciclo c, estado es
WHERE est.id_ciclo=c.id_ciclo
AND est.id_estado=es.id_estado
AND es.id_estado=1


SELECT est.nombres, est.cedula,est.codigo_est,est.programa,est.lugar_expe,est.nom_modal,est.pro_modal,est.fecha_formato,es.estado,mo.tipo,c.id_ciclo,p.nombre_periodo,est.id_estado,est.id_estudiante
FROM estudiante est, estado es, modalidad mo,ciclo c, periodo p
WHERE est.id_ciclo=c.id_ciclo
AND est.id_modalidad=mo.id_modalidad
AND est.id_periodo=p.id_periodo
AND est.id_estado=es.id_estado
AND c.id_ciclo=1

UPDATE estudiante SET id_estado='3'
        WHERE id_estudiante='95'
        
        
INSERT INTO estudiante( nombres,cedula,codigo_est,programa,id_modalidad,lugar_expe,nom_modal,pro_modal,id_periodo,fecha_formato,id_estado) 
	       VALUES ('juan',56785,'3456','345678','asdfghj')