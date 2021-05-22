create database db_sistemago;
use db_sistemago;

create table moeda(
	id_moeda int not null auto_increment,
	cifra_moeda varchar(3) not null,
	nome_moeda varchar(50) not null,
    valor_moeda double not null,
	primary key (id_moeda)
);

create table cliente(
	id_cliente int not null auto_increment,
    nome_cliente varchar(200) not null,
    primary key (id_cliente)
);

create table cambio(
    id_cambio int not null auto_increment,
    id_cliente int not null,
    taxa_cobrada double not null,
    data_cambio date not null,
    valor_original double not null,
    moeda_origem double not null,
    -- cifra_origem varchar(3) not null,
    moeda_destino double not null,
    -- cifra_destino varchar(3) not null,
    valor_convertido double not null,
    primary key (id_cambio),
    constraint fk_id_cliente foreign key (id_cliente) references cliente (id_cliente)
    on delete restrict
);

-- A partir daqui não é necessário excutar, apenas guardei os scripts com alguns inserts para testes
insert into cliente (nome_cliente) values ('Marcos Vinicius Pereira Fernandes');
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('BRL', 'Real', 1);
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('USD', 'Dólar', 5.2587);
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('EUR', 'Euro', 6.4172);
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('LBR', 'Libra Esterlina', 7.4600);
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('JPY', 'Iene', 0.04824);
insert into moeda (cifra_moeda, nome_moeda, valor_moeda) values ('CNY', 'Renminbi', 0.8185);
insert into cambio (id_cliente, taxa_cobrada, data_cambio, valor_original, moeda_origem, moeda_destino, valor_convertido) values (1, 0.1, '2021-05-21', 15000, 1, 1, 15000);

select cliente.id_cliente, cliente.nome_cliente from cliente order by cliente.nome_cliente;
select moeda.id_moeda, moeda.cifra_moeda, moeda.nome_moeda, moeda.valor_moeda from moeda order by moeda.nome_moeda;
select cliente.nome_cliente, cambio.id_cambio, cambio.id_cliente, cambio.taxa_cobrada, cambio.data_cambio, cambio.valor_original, cambio.moeda_origem, cambio.moeda_destino, cambio.valor_convertido from cambio inner join cliente on cambio.id_cliente = cliente.id_cliente where id_cambio = 1 order by data_cambio;
