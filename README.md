![unidavi](https://user-images.githubusercontent.com/31260719/139905606-d5602edc-1866-4389-9940-ea6216cabc52.png)


* Utilize a instrutura SQL abaixo para popular as tabelas do sistema:

CREATE TABLE tb_chamados (
  id_chamado int(3) NOT NULL,
  tipo_problema varchar(75) NOT NULL,
  descricao varchar(300) NOT NULL,
  status varchar(10) NOT NULL DEFAULT 'pendente',
  sala varchar(45) DEFAULT NULL,
  iditem varchar(5) DEFAULT NULL,
  data_envio varchar(18) DEFAULT NULL,
  iduser varchar(50) DEFAULT NULL,
  idtec varchar(50) DEFAULT NULL,
  iduser_adm varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO tb_chamados (id_chamado, tipo_problema, descricao, status, sala, iditem, data_envio, iduser, idtec, iduser_adm) VALUES
(3, 'reserva de sala', '', 'atendido', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', 'Marcelo de Souza', 'Robson de Jesus'),
(4, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', '', 'Robson de Jesus'),
(6, 'manutencao de dispositivo', 'Projetor em danificado', 'pendente', '1 - Bloco B', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', 'Diego Santana', 'Robson de Jesus'),
(7, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', NULL, 'Robson de Jesus'),
(8, 'reserva de sala', '', 'pendente', '2 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', NULL, 'Robson de Jesus'),
(12, 'manutencao de dispositivo', 'Mouse nÃ£o quebrou', 'pendente', 'Laboratorio2 - Bloco A', NULL, '30/06/2020 18:55', 'Rafael de Oliveira', NULL, NULL),
(14, 'reserva de sala', '', 'pendente', 'Auditorio1 - Bloco B', NULL, '02/07/2020 14:14', 'Rafael de Oliveira', NULL, NULL);


CREATE TABLE tb_item (
  id_item int(11) NOT NULL,
  tipo_item varchar(75) NOT NULL,
  dat_realizacao DATE NOT NULL,
  descricao_item varchar(300) NOT NULL,
  quem_cadastrou varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO tb_item (id_item, tipo_item, dat_realizacao, descricao_item, quem_cadastrou) VALUES
(23, 'Sala','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),
(25, 'Auditorio','2021-09-10', '1 - Bloco B', 'Robson de Jesus'),
(26, 'Ginasio','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),
(27, 'Dispositivo','2021-09-10', 'Projetor', 'Robson de Jesus'),
(28, 'Dispositivo','2021-09-10', 'Computador Desktop', 'Robson de Jesus'),
(29, 'Laboratorio','2021-09-10', '2 - Bloco A', 'Robson de Jesus'),
(30, 'Sala','2021-09-10', '2 - Bloco A', 'Robson de Jesus'),
(31, 'Sala','2021-09-10', '3 - Bloco A', 'Robson de Jesus'),
(32, 'Laboratorio','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),
(33, 'Laboratorio','2021-09-10', '1 - Bloco B', 'Robson de Jesus'),
(34, 'Dispositivo', '2021-09-10','Mouse', 'Robson de Jesus'),
(35, 'Dispositivo','2021-09-10', 'Monitor', 'Robson de Jesus'),
(36, 'Sala','2021-09-10', '3 - Bloco B', 'Robson de Jesus'),
(37, 'Dispositivo','2021-09-10', 'Teclado', 'Robson de Jesus'),
(38, 'Laboratorio','2021-09-10', '2 - Bloco C', 'Robson de Jesus');


CREATE TABLE tb_tecnico (
  id_tec int(11) NOT NULL,
  nome_tec varchar(75) NOT NULL,
  email varchar(75) NOT NULL,
  nivel varchar(1) NOT NULL,
  quem_cadastrou varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO tb_tecnico (id_tec, nome_tec, email, nivel, quem_cadastrou) VALUES
(2, 'Caio Alberto Hoffmann', 'caioh@unidavi.edu.br', '2', 'Robson de Jesus'),
(3, 'Luiz Cezar Philippi Junior', 'luiz@unidavi.edu.br', '2', 'Robson de Jesus');


CREATE TABLE tb_usuario (
  id_user int(11) NOT NULL,
  nome_user varchar(75) NOT NULL,
  login varchar(50) NOT NULL,
  email varchar(75) NOT NULL,
  senha varchar(50) NOT NULL,
  categoria int(3) NOT NULL,
  status varchar(30) NOT NULL,
  quem_cadastrou varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO tb_usuario (id_user, nome_user, login, email, senha, categoria, status, quem_cadastrou) VALUES
(13, 'Sandra Apareceda', 'sandra', 'sandra.aparecida@unidavi.edu.br', '789a2d2ef3ee96067ae09e92f7f72b51a2fb8da7', 1, 'ativo', 'Robson de Jesus'),
(17, 'Jaqueline Ribeiro', 'jaqueline', 'jaqueline@unidavi.edu.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'ativo', 'Robson de Jesus'),
(18, 'Robson de Jesus', 'robson', 'robson.jesus@unidavi.edu.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0, 'ativo', 'Robson de Jesus'),
(19, 'Vivian Toledo Santos Gambarato', 'vivi', 'vivian.gambarato@unidavi.edu.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1, 'ativo', 'Robson de Jesus'),
(20, 'Maria Eduarda', 'duda', 'duda@unidavi,edu.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'inativo', '');

* Para logar no sistema 
  - Usuário Administrador: robson
  - senha: root

* Usuário comun funcionário:
  - Usuário: vivi
  - senha: root
