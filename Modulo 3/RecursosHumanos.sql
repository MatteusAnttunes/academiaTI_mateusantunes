CREATE DATABASE recursoshumanos;

USE recursoshumanos;

 
CREATE TABLE empresas (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	endereco VARCHAR(255),
	bairro VARCHAR(255),
	cidade VARCHAR(255),
	estado CHAR(2),
	numero INT(9),
	telefone VARCHAR(100),
	PRIMARY KEY (id)

CREATE TABLE cargos (
	id INT(11) NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL,
	cargo VARCHAR(255),
	PRIMARY KEY (id)
);


CREATE TABLE cargo_funcionarios  (
    id INT(11) NOT NULL AUTO_INCREMENT,
    id_empresa INT(11) NOT NULL,
    id_funcionarios INT(11) NOT NULL,
    id_cargos INT(11) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (id_empresa) REFERENCES empresas(id),
    FOREIGN KEY (id_funcionarios) REFERENCES funcionarios(id),
    FOREIGN KEY (id_cargos) REFERENCES cargos(id)
);


INSERT INTO empresas (nome, endereco, bairro, cidade, estado, telefone) VALUES ('Indiana', 'Av. Pereira Reixeira' , 'Ibiapaba', 'Barbacena', 'MG', '32 3333-0430');
INSERT INTO empresas(nome, endereco, bairro, cidade, estado, telefone) VALUES ('Barbearia Whall', 'Rua Rita lucinda', 'floresta', 'Barbacena', 'MG', '32 97781-7482');
INSERT INTO empresas (nome, endereco, bairro, cidade, estado, telefone) VALUES ('Cafeteria café', 'Rua capuccino', 'leite', 'Açucar', 'MG', '324411-3452');
INSERT INTO empresas(nome, endereco, bairro, cidade, estado, telefone) VALUES ('Ouero velho', 'Rua ze cinto', 'Pereira', 'Vinhedo', 'SP', '19 99581-3453');

SELECT * FROM empresas;

INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('João da Silva', 'Rua Quinze de agosto', 'Centro', 'Barbacena', 'MG', '11', '32 98865-1573');
INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('Mateus José', 'Rua Sete', 'Ns Aparecida', 'Barbacena', 'MG', '233', '329876548');
INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('Maria Eduarda', 'Rua k', 'São josé', 'Açucar', 'MG','23', '324675677');
INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('Gabriela Gil', 'Rua S', 'leite', 'Açucar', 'MG', '564', '324567543');
INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('Leonardo Vargas', 'Rua rita lucinda', 'Ns Aparecida', 'Barbacena', 'MG', '49', '324565556');
INSERT INTO funcionarios (nome, endereco, bairro, cidade, estado, numero, telefone) VALUES ('Yuri Romeu', 'Rua 13 de novembro', 'Floesta', 'Barbacena', 'MG', '284', '32685848');

SELECT * FROM funcionarios;

INSERT INTO cargos (cargo) VALUES ('Operador de caixa');
INSERT INTO cargos (cargo) VALUES ('Balconista');
INSERT INTO cargos (cargo) VALUES ('Atendente');
INSERT INTO cargos (cargo) VALUES ('Vendedora');
INSERT INTO cargos (cargo) VALUES ('Barbeiro');
INSERT INTO cargos (cargo) VALUES ('Ourives');

SELECT * FROM cargos;



INSERT INTO cargo_funcionarios (id_empresa, id_funcionarios, id_cargos) VALUES (1, 2, 1);
INSERT INTO cargo_funcionarios  (id_empresa, id_funcionarios, id_cargos) VALUES (2, 6, 5);
INSERT INTO cargo_funcionarios (id_empresa, id_funcionarios, id_cargos) VALUES (3, 3, 3);
INSERT INTO cargo_funcionarios (id_empresa, id_funcionarios, id_cargos) VALUES (4, 5, 6);
INSERT INTO cargo_funcionarios id_empresa, id_funcionarios, id_cargos) VALUES (3, 3, 2);
INSERT INTO cargo_funcionarios id_empresa, id_funcionarios, id_cargos) VALUES (1, 1, 4);

SELECT * FROM cargo_funcionarios;



