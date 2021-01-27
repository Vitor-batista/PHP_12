create database if not exists steammarket;

use steammarket;

create table if not exists clientes
	(
		id int(11) not null auto_increment,
		nome varchar(255) not null,	
		pass varchar(255) not null,
		dinheiro float(11) not null,
		primary key (id)
	)engine = Innodb default charset = latin1 auto_increment = 1;
	
create table if not exists itens
	(
		id int(11) not null auto_increment,
		nome varchar(255) not null,
		preco int(11) not null,
		comprado bool null,
		primary key (id)
	)engine = Innodb default charset = latin1 auto_increment = 1;
	
create table if not exists inventario
	(
		id int(11) not null auto_increment,
		id_item int(11) not null,
		id_cliente int(11) not null,
		data_compra date not null,
		primary key (id),
		foreign key (id_item) references itens (id),
		foreign key (id_cliente) references clientes (id)
	)engine = Innodb default charset = latin1 auto_increment = 1;
	
insert into itens (nome, preco, comprado)
values
	('AK-47 | Elite Build' , 10   , NULL),
	('AK-47 | Assimov'     , 30   , NULL),
	('AK-47 | Neon Rider'  , 40   , NULL),
	('AK-47 | Jaguar'      , 35   , NULL),
	('USP-S | Orion'       , 15   , NULL),
	('USP-S | Neo Noir'    , 20   , NULL),
	('USP-S | Cyrex'       , 10   , NULL),
	('USP-S | Torque'      , 5    , NULL),
	('AWP | BOOM'      	   , 40   , NULL),
	('AWP | Neo Noir'      , 60   , NULL),
	('AWP | Fade'          , 1000 , NULL),
	('AWP | Assimov'       , 60   , NULL),
	('M4A1-S | Hyper Beast', 20   , NULL),
	('M4A1-S | Basilisk'   , 10   , NULL),
	('M4A1-S | Nitro'      , 5    , NULL),
	('M4A1-S | Hot Rod'    , 50   , NULL);
	
insert into clientes (nome, pass)
values
	('admin' , 'admin' );
	
	
	
	
	
	
	
	
	