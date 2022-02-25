create database bdphp1_20210531;

use bdphp1_20210531;

create table tbl_personas(
id integer auto_increment,
doc char(1),
nro varchar(10),
nom varchar(30),
ape varchar(30),
fna date,
sex char(1),
dir text,
cor varchar(60),
primary key(id),
unique(doc,nro)
);
