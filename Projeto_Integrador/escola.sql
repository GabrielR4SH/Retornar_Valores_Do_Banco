use escola;

desc cursos;
desc matriculados;


select * from matriculados;
insert into matriculados (nome,curso) values ('Gabriel','Curso de programar');
select * from cursos;

select nome from matriculados;

truncate matriculados;

desc cursos;

select id_matri from matriculados inner join cursos on cursos.matriculados = cursos.matriculados;

select * from cursos;


select matriculados.id_matri, cursos.matriculados from matriculados inner join cursos on matriculados.id_matri = cursos.matriculados;

insert into matriculados values ('9','felipe','Curso de Programar','Felipa');