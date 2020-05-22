# Cosas que olvido sobre SQL
<time datetime="2019-10-23"> Oct 23, 2019 </time>

Si bien considero saber usar SQL al nivel suficiente con el cual hacer una 
aplicación simple, al menos nunca me he visto en la necesidad de ir mas allá de
hacer un left join, siempre olvido su sintaxis, por eso aquí mantendré una lista 
de comandos que uso constantemente.

Todos los datos son basados en MySQL, que es la base de datos que mas utilizo.

## 1 - Crear tabla

    :::sql
    create table usuario
    (
     id          int           primary key auto_increment,
     nombre      varchar(255)  not null,
     password    binary(32)    not null,
     salt        binary(16)    not null,
     trabajador  int           not null,
     foreign key (trabajador)  references trabajador (id),
     inserted_at timestamp,
     modified_at timestamp,
     );

## 2 - Como usar on delete y on update 
Cuando se crean foreign keys se tiene la opción de agregar on delete y on update 
constraints, siempre olvido exactamente que significa cada modo de estos 
constraints así que para ilustrarlos usare el siguiente modelo:

    :::sql
    create table trabajador
    (
     id     int           primary,
     nombre varchar(255)  not null
    );

    create table usuario
    (
     id            int           primary key,
     nombre        varchar(255)  not null,
     trabajador_id int           not null,
     foreign key (trabajador_id) references trabajador on (id)
    );

### `ON UPDATE`
- `RESTRICT` (default): Si es que se intenta actualizar el id de la tabla 
trabajador la operación sera rechazada mientras exista al menos un usuario 
que referencie a ese trabajador.
- `NO ACTION`: Lo mismo que `RESTRICT`.
- `CASCADE`: Si es que se intenta actualizar el id del trabajador, el id 
también sera actualizado en todos los usuarios que referencien al 
trabajador.
- `SET NULL`: Al cambiar el id del trabajador, las referencias a este id en
la tabla usuario se harán nulas.

### `ON DELETE`
- `RESTRICT` (default): Si es que se intenta eliminar el trabajador la 
operación sera rechazada mientras exista al menos un usuario que tenga una 
referencia a ese trabajador.
- `NO ACTION`: Lo mismo que `RESTRICT`.
- `CASCADE`: Al eliminar un trabajador también se eliminaran todos los 
usuarios que tengan su id asociado.
- `SET NULL`: Cuando se elimine un trabajador, todas sus referencias en la 
tabla  usuarios sera llenadas con nulls.

## 3 - Creación de foreign keys fuera del create table
    :::sql
    alter table usuario add constraint fk_usuario_trabajador 
    foreign key (trabajador_id) references trabajador (id);
