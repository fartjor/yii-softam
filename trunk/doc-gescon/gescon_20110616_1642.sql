-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema gescon
--

CREATE DATABASE IF NOT EXISTS gescon;
USE gescon;

--
-- Definition of table `gescon`.`acao_processo`
--

DROP TABLE IF EXISTS `gescon`.`acao_processo`;
CREATE TABLE  `gescon`.`acao_processo` (
  `aca_id` int(11) NOT NULL AUTO_INCREMENT,
  `aca_tipo` char(1) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `aca_obs` mediumtext NOT NULL,
  `pro_id` int(11) NOT NULL,
  `aca_data` datetime NOT NULL,
  `aca_tipo_anterior` char(1) DEFAULT NULL,
  PRIMARY KEY (`aca_id`),
  KEY `processo` (`pro_id`),
  CONSTRAINT `processo` FOREIGN KEY (`pro_id`) REFERENCES `processo` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`acao_processo`
--

/*!40000 ALTER TABLE `acao_processo` DISABLE KEYS */;
LOCK TABLES `acao_processo` WRITE;
INSERT INTO `gescon`.`acao_processo` VALUES  (1,'I',1,'O processo foi iniciado',3,'2011-06-14 10:50:56',''),
 (2,'A',1,'teste',3,'2011-06-15 09:47:02','I'),
 (3,'C',1,'O processo foi cancelado',3,'2011-06-15 13:24:23','I'),
 (4,'E',1,'voltamos para o processo',3,'2011-06-15 13:25:33','I'),
 (5,'C',1,'processo cancelado novamente!',3,'2011-06-15 13:25:52','E'),
 (6,'I',1,'O processo foi iniciado',4,'2011-06-15 14:08:35',NULL);
UNLOCK TABLES;
/*!40000 ALTER TABLE `acao_processo` ENABLE KEYS */;


--
-- Definition of table `gescon`.`boleto`
--

DROP TABLE IF EXISTS `gescon`.`boleto`;
CREATE TABLE  `gescon`.`boleto` (
  `bol_codigo` int(11) NOT NULL,
  `bol_valor` decimal(9,2) NOT NULL,
  `bol_vencimento` date NOT NULL,
  `bol_transacao` varchar(20) DEFAULT NULL,
  `bol_situacao` varchar(45) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`bol_codigo`) USING BTREE,
  KEY `fk_processo` (`pro_id`),
  CONSTRAINT `fk_processo` FOREIGN KEY (`pro_id`) REFERENCES `processo` (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`boleto`
--

/*!40000 ALTER TABLE `boleto` DISABLE KEYS */;
LOCK TABLES `boleto` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `boleto` ENABLE KEYS */;


--
-- Definition of table `gescon`.`cargo`
--

DROP TABLE IF EXISTS `gescon`.`cargo`;
CREATE TABLE  `gescon`.`cargo` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_nome` varchar(100) NOT NULL,
  `car_obs` varchar(255) DEFAULT NULL,
  `car_ativo` char(1) NOT NULL,
  `car_data_ingresso` datetime NOT NULL,
  `car_data_modificacao` datetime DEFAULT NULL,
  `car_data_desativacao` datetime DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`cargo`
--

/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
LOCK TABLES `cargo` WRITE;
INSERT INTO `gescon`.`cargo` VALUES  (1,'ANALISTA DE SISTEMAS SENIOR','ELE FAZ TODA A ANALISE DE SISTEMAS','I','2011-05-26 00:00:00','2011-06-07 18:59:50',NULL),
 (2,'ANALISTA DE SISTEMAS PLENO','FAZ A ANALISE','A','2011-06-07 00:00:00',NULL,NULL),
 (3,'PROGRAMADOR JUNIOR','FAZ TODA A PROGRAMAÇÃO','A','2011-06-07 18:47:45',NULL,NULL);
UNLOCK TABLES;
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;


--
-- Definition of table `gescon`.`cliente`
--

DROP TABLE IF EXISTS `gescon`.`cliente`;
CREATE TABLE  `gescon`.`cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_cpf` varchar(14) NOT NULL,
  `cli_data_cadastro` datetime NOT NULL,
  `cli_nome` varchar(100) NOT NULL,
  `cli_sexo` char(1) NOT NULL,
  `cli_estado_civil` char(1) NOT NULL,
  `cli_profissao` varchar(100) NOT NULL,
  `cli_email` varchar(255) DEFAULT NULL,
  `cli_conhecimento` varchar(45) DEFAULT NULL,
  `cli_obs` varchar(255) DEFAULT NULL,
  `cli_data_modificacao` datetime DEFAULT NULL,
  `cli_fone1` char(13) NOT NULL,
  `cli_fone2` char(13) DEFAULT NULL,
  `cli_endereco` varchar(120) NOT NULL,
  `cli_cidade` varchar(60) NOT NULL,
  `cli_uf` char(2) NOT NULL,
  `cli_cep` char(9) DEFAULT NULL,
  `cli_situacao` char(1) NOT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `cli_cpf_UNIQUE` (`cli_cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
LOCK TABLES `cliente` WRITE;
INSERT INTO `gescon`.`cliente` VALUES  (1,'524.814.172-91','2011-05-30 00:00:00','Jair Rebello','M','S','Analista de Sistemas','jair@hotmail.com','muito','Este é um cliente em potencial','2011-06-12 08:53:58','(89)4984-8948','(89)4894-8949','Rua tal','Manaus','AM','51565-654','I');
UNLOCK TABLES;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `gescon`.`empresa`
--

DROP TABLE IF EXISTS `gescon`.`empresa`;
CREATE TABLE  `gescon`.`empresa` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nome` varchar(255) NOT NULL,
  `emp_cnpj` varchar(18) NOT NULL,
  `emp_cpf_socio_majoritario` varchar(14) DEFAULT NULL,
  `emp_nome_socio_majoritario` varchar(80) NOT NULL,
  `emp_site` varchar(255) DEFAULT NULL,
  `emp_email` varchar(255) DEFAULT NULL,
  `emp_fone1` varchar(13) NOT NULL,
  `emp_fone2` varchar(13) DEFAULT NULL,
  `emp_uf` char(2) NOT NULL,
  `emp_cidade` varchar(60) NOT NULL,
  `emp_endereco` varchar(200) NOT NULL,
  `emp_cep` char(9) DEFAULT NULL,
  `emp_data_modificacao` datetime DEFAULT NULL,
  `emp_data_desativacao` datetime DEFAULT NULL,
  `emp_data_ingresso` datetime NOT NULL,
  `emp_situacao` char(1) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`empresa`
--

/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
LOCK TABLES `empresa` WRITE;
INSERT INTO `gescon`.`empresa` VALUES  (1,'SOFTAM','60.800.372/0001-24','524.814.172-91','Jair Rebello','http://www.softeamonline.com.br','jair.rebello@hotmail.com','(88)9489-4894','(43)4324-2342','AM','Manaus','Rua tal','15614-818','2011-06-03 14:07:55','2011-06-03 11:17:00','2011-05-19 00:00:00','A'),
 (2,'TESTE','60.800.372/0001-24','524.814.172-91','','','contato@teste.com.br','(92)8111-1111','','AM','Manaus','Endereço','69218-156','2011-06-07 18:51:00','2011-06-03 11:24:00','2011-05-24 00:00:00','I'),
 (3,'TESTE','33.965.934/0001-17','524.814.172-91','','www.teste.com.br','contato@teste.com.br','(87)8978-9798','(79)8798-7987','AM','Manaus','Rua tal','87897-784','2011-06-03 11:25:00','2011-06-03 11:25:00','2011-05-31 18:17:00','I');
UNLOCK TABLES;
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;


--
-- Definition of table `gescon`.`filial`
--

DROP TABLE IF EXISTS `gescon`.`filial`;
CREATE TABLE  `gescon`.`filial` (
  `fil_id` int(11) NOT NULL AUTO_INCREMENT,
  `fil_cnpj` varchar(18) NOT NULL,
  `fil_nome` varchar(255) NOT NULL,
  `fil_site` varchar(255) DEFAULT NULL,
  `fil_email` varchar(255) DEFAULT NULL,
  `fil_cpf_representante` varchar(14) DEFAULT NULL,
  `fil_nome_representante` varchar(80) NOT NULL,
  `fil_fone1` varchar(13) NOT NULL,
  `fil_fone2` varchar(13) DEFAULT NULL,
  `fil_obs` varchar(255) DEFAULT NULL,
  `fil_uf` char(2) NOT NULL,
  `fil_cidade` varchar(60) NOT NULL,
  `fil_endereco` varchar(220) NOT NULL,
  `fil_cep` varchar(9) DEFAULT NULL,
  `emp_id` int(11) NOT NULL,
  `fil_ativo` char(1) NOT NULL,
  `fil_data_ingresso` datetime NOT NULL,
  `fil_data_modificacao` datetime DEFAULT NULL,
  `fil_data_desligamento` datetime DEFAULT NULL,
  PRIMARY KEY (`fil_id`),
  KEY `FK_EMPRESA_FILIAL` (`emp_id`),
  CONSTRAINT `FK_EMPRESA_FILIAL` FOREIGN KEY (`emp_id`) REFERENCES `empresa` (`emp_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`filial`
--

/*!40000 ALTER TABLE `filial` DISABLE KEYS */;
LOCK TABLES `filial` WRITE;
INSERT INTO `gescon`.`filial` VALUES  (1,'60.800.372/0001-24','SOFTAM FILIAL','www.softam.com.br','contato@softam.com.br','524.814.172-91','Jair Rebello','(92)9189-1891','(51)8119-8189','teste','AM','Manaus','Endereço','',1,'I','2011-05-25 00:00:00','2011-06-03 12:20:52','2011-06-03 14:42:50');
UNLOCK TABLES;
/*!40000 ALTER TABLE `filial` ENABLE KEYS */;


--
-- Definition of table `gescon`.`filial_cliente`
--

DROP TABLE IF EXISTS `gescon`.`filial_cliente`;
CREATE TABLE  `gescon`.`filial_cliente` (
  `cli_id` int(11) NOT NULL,
  `fil_id` int(11) NOT NULL,
  `filcli_data` datetime NOT NULL,
  KEY `filial` (`fil_id`),
  KEY `cliente` (`cli_id`),
  CONSTRAINT `cliente` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`),
  CONSTRAINT `filial` FOREIGN KEY (`fil_id`) REFERENCES `filial` (`fil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`filial_cliente`
--

/*!40000 ALTER TABLE `filial_cliente` DISABLE KEYS */;
LOCK TABLES `filial_cliente` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `filial_cliente` ENABLE KEYS */;


--
-- Definition of table `gescon`.`funcionario`
--

DROP TABLE IF EXISTS `gescon`.`funcionario`;
CREATE TABLE  `gescon`.`funcionario` (
  `fun_id` int(11) NOT NULL AUTO_INCREMENT,
  `fun_cpf` varchar(14) NOT NULL,
  `fun_data_cadastro` date NOT NULL,
  `fun_numero_funcionario` int(11) NOT NULL,
  `fun_nome` varchar(100) NOT NULL,
  `fun_sexo` char(1) NOT NULL,
  `fun_estado_civil` char(1) NOT NULL,
  `fun_funcao` varchar(45) NOT NULL,
  `fun_email` varchar(255) NOT NULL,
  `fun_obs` varchar(255) DEFAULT NULL,
  `fun_data_modificacao` date DEFAULT NULL,
  `fun_data_desligamento` date DEFAULT NULL,
  `car_id` int(11) NOT NULL,
  `fil_id` int(11) DEFAULT NULL,
  `fun_fone1` varchar(13) NOT NULL,
  `fun_fone2` varchar(13) DEFAULT NULL,
  `fun_endereco` varchar(120) NOT NULL,
  `fun_cidade` varchar(50) NOT NULL,
  `fun_uf` varchar(2) NOT NULL,
  `fun_cep` varchar(9) DEFAULT NULL,
  `fun_estado` char(1) NOT NULL,
  PRIMARY KEY (`fun_id`),
  UNIQUE KEY `fun_cpf_UNIQUE` (`fun_cpf`),
  KEY `fk_Funcionario_Cargo1` (`car_id`),
  KEY `FK_funcionario_2` (`fil_id`),
  CONSTRAINT `FK_funcionario_2` FOREIGN KEY (`fil_id`) REFERENCES `filial` (`fil_id`),
  CONSTRAINT `fk_Funcionario_Cargo1` FOREIGN KEY (`car_id`) REFERENCES `cargo` (`car_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`funcionario`
--

/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
LOCK TABLES `funcionario` WRITE;
INSERT INTO `gescon`.`funcionario` VALUES  (4,'524.814.172-91','2011-05-30',45645646,'Jair Rebello','M','S','ANALISTA DE SISTEMAS PLENO','jair.rebello@pmm.am.gov.br','',NULL,NULL,1,1,'(92)3638-9774','(92)3638-9774','Meu endereço','Manaus','AM','52484-848',''),
 (5,'266.714.023-02','2011-05-30',2147483647,'Teste','M','S','ANALISTA DE SISTEMAS PLENO','jair.rebello@pmm.am.gov.br',NULL,NULL,NULL,1,1,'9236389774','9236389774','Meu endereço','Manaus','AM','69082-452','');
UNLOCK TABLES;
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;


--
-- Definition of table `gescon`.`processo`
--

DROP TABLE IF EXISTS `gescon`.`processo`;
CREATE TABLE  `gescon`.`processo` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_numero` float DEFAULT NULL,
  `pro_data_ingresso` date NOT NULL,
  `pro_obs` varchar(255) DEFAULT NULL,
  `pro_data_modificacao` date DEFAULT NULL,
  `pro_data_desativacao` date DEFAULT NULL,
  `cli_id` int(11) NOT NULL,
  `tpr_id` int(11) NOT NULL,
  `pro_car_placa` varchar(9) NOT NULL,
  `pro_car_renavan` varchar(30) NOT NULL,
  `pro_car_ano` int(11) NOT NULL,
  `pro_car_modelo` varchar(40) NOT NULL,
  `pro_car_marca` varchar(40) NOT NULL,
  `pro_car_valor` decimal(9,2) NOT NULL,
  `pro_car_qtde_prestacoes` int(11) NOT NULL,
  `pro_car_valor_parcela` decimal(9,2) NOT NULL,
  `pro_car_chaci` varchar(30) NOT NULL,
  `pro_situacao` char(1) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_Processo_Cliente1` (`cli_id`),
  KEY `fk_Processo_Tipo processo1` (`tpr_id`),
  CONSTRAINT `fk_Processo_Cliente1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Processo_Tipo processo1` FOREIGN KEY (`tpr_id`) REFERENCES `tipo_processo` (`tpr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`processo`
--

/*!40000 ALTER TABLE `processo` DISABLE KEYS */;
LOCK TABLES `processo` WRITE;
INSERT INTO `gescon`.`processo` VALUES  (1,1,'2011-05-30','este processo é muito importante',NULL,NULL,1,1,'FFW-2321','dsad2321313',2010,'corsa','chevrolet','30000.00',10,'800.00','2132131','I'),
 (2,NULL,'2011-06-14','obs',NULL,NULL,1,1,'sdf-5456','46456465456',2011,'Vectra','Chevrolet','50000.00',20,'1200.00','45645646546','I'),
 (3,NULL,'2011-06-14','obs',NULL,NULL,1,1,'sdf-5456','46456465456',2011,'Vectra','Chevrolet','0.00',20,'0.00','45645646546','C'),
 (4,NULL,'2011-06-15','Obs',NULL,NULL,1,1,'dfa-5645','564',2010,'sdasda','dasdasda','21212.32',21,'2132.12','54654','I');
UNLOCK TABLES;
/*!40000 ALTER TABLE `processo` ENABLE KEYS */;


--
-- Definition of table `gescon`.`tipo_processo`
--

DROP TABLE IF EXISTS `gescon`.`tipo_processo`;
CREATE TABLE  `gescon`.`tipo_processo` (
  `tpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tpr_nome` varchar(100) NOT NULL,
  `tpr_area_atuacao` varchar(100) NOT NULL,
  `tpr_data_ingresso` datetime NOT NULL,
  `tpr_obs` varchar(255) DEFAULT NULL,
  `tpr_data_modificacao` datetime DEFAULT NULL,
  `tpr_situacao` char(1) NOT NULL,
  PRIMARY KEY (`tpr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gescon`.`tipo_processo`
--

/*!40000 ALTER TABLE `tipo_processo` DISABLE KEYS */;
LOCK TABLES `tipo_processo` WRITE;
INSERT INTO `gescon`.`tipo_processo` VALUES  (1,'Trabalhista','Trabalhista','2011-05-30 00:00:00','Causas de trabalho','2011-06-09 18:09:47','I'),
 (3,'Cívil','Cívil','2011-06-08 00:00:00','',NULL,'A'),
 (6,'Pensão Alimentícia','Cívil','2011-06-08 00:00:00','',NULL,'A');
UNLOCK TABLES;
/*!40000 ALTER TABLE `tipo_processo` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
