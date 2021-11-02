![unidavi](https://user-images.githubusercontent.com/31260719/139905606-d5602edc-1866-4389-9940-ea6216cabc52.png)


* Utilize a instrutura SQL abaixo para popular as tabelas do sistema:

CREATE TABLE tb_chamados (<br>
  id_chamado int(3) NOT NULL,<br>
  tipo_problema varchar(75) NOT NULL,<br>
  descricao varchar(300) NOT NULL,<br>
  status varchar(10) NOT NULL DEFAULT 'pendente',<br>
  sala varchar(45) DEFAULT NULL,<br>
  iditem varchar(5) DEFAULT NULL,<br>
  data_envio varchar(18) DEFAULT NULL,<br>
  iduser varchar(50) DEFAULT NULL,<br>
  idtec varchar(50) DEFAULT NULL,<br>
  iduser_adm varchar(50) DEFAULT NULL<br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>


INSERT INTO tb_chamados (id_chamado, tipo_problema, descricao, status, sala, iditem, data_envio, iduser, idtec, iduser_adm) VALUES<br>
(3, 'reserva de sala', '', 'atendido', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', 'Marcelo de Souza', 'Robson de Jesus'),<br>
(4, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', '', 'Robson de Jesus'),<br>
(6, 'manutencao de dispositivo', 'Projetor em danificado', 'pendente', '1 - Bloco B', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', 'Diego <br>Santana', 'Robson de Jesus'),
(7, 'reserva de sala', '', 'pendente', '1 - Bloco A', NULL, '2020-06-29 00:00:0', 'Luiz Ricardo', NULL, 'Robson de Jesus'),<br>
(8, 'reserva de sala', '', 'pendente', '2 - Bloco A', NULL, '0000-00-00 00:00:0', 'Robson de Jesus', NULL, 'Robson de Jesus'),<br>
(12, 'manutencao de dispositivo', 'Mouse nÃ£o quebrou', 'pendente', 'Laboratorio2 - Bloco A', NULL, '30/06/2020 18:55', 'Rafael de Oliveira', NULL, NULL),<br>
(14, 'reserva de sala', '', 'pendente', 'Auditorio1 - Bloco B', NULL, '02/07/2020 14:14', 'Rafael de Oliveira', NULL, NULL);<br>


CREATE TABLE tb_item (<br>
  id_item int(11) NOT NULL,<br>
  tipo_item varchar(75) NOT NULL,<br>
  dat_realizacao DATE NOT NULL,<br>
  descricao_item varchar(300) NOT NULL,<br>
  quem_cadastrou varchar(50) NOT NULL<br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>


INSERT INTO tb_item (id_item, tipo_item, dat_realizacao, descricao_item, quem_cadastrou) VALUES<br>
(23, 'Sala','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),<br>
(25, 'Auditorio','2021-09-10', '1 - Bloco B', 'Robson de Jesus'),<br>
(26, 'Ginasio','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),<br>
(27, 'Dispositivo','2021-09-10', 'Projetor', 'Robson de Jesus'),<br>
(28, 'Dispositivo','2021-09-10', 'Computador Desktop', 'Robson de Jesus'),<br>
(29, 'Laboratorio','2021-09-10', '2 - Bloco A', 'Robson de Jesus'),<br>
(30, 'Sala','2021-09-10', '2 - Bloco A', 'Robson de Jesus'),<br>
(31, 'Sala','2021-09-10', '3 - Bloco A', 'Robson de Jesus'),<br>
(32, 'Laboratorio','2021-09-10', '1 - Bloco A', 'Robson de Jesus'),<br>
(33, 'Laboratorio','2021-09-10', '1 - Bloco B', 'Robson de Jesus'),<br>
(34, 'Dispositivo', '2021-09-10','Mouse', 'Robson de Jesus'),<br>
(35, 'Dispositivo','2021-09-10', 'Monitor', 'Robson de Jesus'),<br>
(36, 'Sala','2021-09-10', '3 - Bloco B', 'Robson de Jesus'),<br>
(37, 'Dispositivo','2021-09-10', 'Teclado', 'Robson de Jesus'),<br>
(38, 'Laboratorio','2021-09-10', '2 - Bloco C', 'Robson de Jesus');<br>


CREATE TABLE tb_tecnico (<br>
  id_tec int(11) NOT NULL,<br>
  nome_tec varchar(75) NOT NULL,<br>
  email varchar(75) NOT NULL,<br>
  nivel varchar(1) NOT NULL,<br>
  quem_cadastrou varchar(50) NOT NULL<br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>


INSERT INTO tb_tecnico (id_tec, nome_tec, email, nivel, quem_cadastrou) VALUES<br>
(2, 'Caio Alberto Hoffmann', 'caioh@unidavi.edu.br', '2', 'Robson de Jesus'),<br>
(3, 'Luiz Cezar Philippi Junior', 'luiz@unidavi.edu.br', '2', 'Robson de Jesus');<br>


CREATE TABLE tb_usuario (<br>
  id_user int(11) NOT NULL,<br>
  nome_user varchar(75) NOT NULL,<br>
  login varchar(50) NOT NULL,<br>
  email varchar(75) NOT NULL,<br>
  senha varchar(50) NOT NULL,<br>
  categoria int(3) NOT NULL,<br>
  status varchar(30) NOT NULL,<br>
  quem_cadastrou varchar(50) NOT NULL<br>
) ENGINE=InnoDB DEFAULT CHARSET=utf8;<br>


INSERT INTO tb_usuario (id_user, nome_user, login, email, senha, categoria, status, quem_cadastrou) VALUES<br>
(13, 'Sandra Apareceda', 'sandra', 'sandra.aparecida@unidavi.edu.br', '789a2d2ef3ee96067ae09e92f7f72b51a2fb8da7', 1, 'ativo', 'Robson de Jesus'),<br>
(17, 'Jaqueline Ribeiro', 'jaqueline', 'jaqueline@unidavi.edu.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'ativo', 'Robson de Jesus'),<br>
(18, 'Robson de Jesus', 'robson', 'robson.jesus@unidavi.edu.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 0, 'ativo', 'Robson de Jesus'),<br>
(19, 'Vivian Toledo Santos Gambarato', 'vivi', 'vivian.gambarato@unidavi.edu.br', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 1, 'ativo', <br>'Robson de Jesus'),<br>
(20, 'Maria Eduarda', 'duda', 'duda@unidavi,edu.br', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'inativo', '');<br>

* Para logar no sistema 
  - Usuário Administrador: robson
  - senha: root

* Usuário comun funcionário:
  - Usuário: vivi
  - senha: root
