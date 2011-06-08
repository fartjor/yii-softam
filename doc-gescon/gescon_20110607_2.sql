/*
SQLyog Ultimate v9.02 
MySQL - 5.5.8-log : Database - gescon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gescon` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gescon`;

/*Table structure for table `boleto` */

DROP TABLE IF EXISTS `boleto`;

CREATE TABLE `boleto` (
  `transacao` varchar(60) DEFAULT NULL,
  `situacao` varchar(40) DEFAULT NULL,
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `boleto` */

/*Table structure for table `cargo` */

DROP TABLE IF EXISTS `cargo`;

CREATE TABLE `cargo` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_nome` varchar(100) NOT NULL,
  `car_obs` varchar(255) DEFAULT NULL,
  `car_ativo` char(1) NOT NULL,
  `car_data_ingresso` datetime NOT NULL,
  `car_data_modificacao` datetime DEFAULT NULL,
  `car_data_desativacao` datetime DEFAULT NULL,
  PRIMARY KEY (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cargo` */

insert  into `cargo`(`car_id`,`car_nome`,`car_obs`,`car_ativo`,`car_data_ingresso`,`car_data_modificacao`,`car_data_desativacao`) values (1,'ANALISTA DE SISTEMAS SENIOR','ELE FAZ TODA A ANALISE DE SISTEMAS','I','2011-05-26 00:00:00','2011-06-07 18:59:50',NULL),(2,'ANALISTA DE SISTEMAS PLENO','FAZ A ANALISE','A','2011-06-07 00:00:00',NULL,NULL),(3,'PROGRAMADOR JUNIOR','FAZ TODA A PROGRAMAÇÃO','A','2011-06-07 18:47:45',NULL,NULL);

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_cpf` varchar(14) NOT NULL,
  `cli_data_cadastro` date NOT NULL,
  `cli_numero_cliente` int(11) NOT NULL,
  `cli_nome` varchar(100) NOT NULL,
  `cli_sexo` char(1) NOT NULL,
  `cli_estado_civil` char(1) NOT NULL,
  `cli_profissao` varchar(100) NOT NULL,
  `cli_email` varchar(255) DEFAULT NULL,
  `cli_conhecimento` varchar(45) DEFAULT NULL,
  `cli_obs` varchar(255) DEFAULT NULL,
  `cli_data_modificacao` date DEFAULT NULL,
  `cli_data_desligamento` date DEFAULT NULL,
  `cli_fone1` char(13) NOT NULL,
  `cli_fone2` char(13) DEFAULT NULL,
  `cli_endereco` varchar(120) NOT NULL,
  `cli_cidade` varchar(60) NOT NULL,
  `cli_uf` char(2) NOT NULL,
  `cli_cep` char(9) DEFAULT NULL,
  PRIMARY KEY (`cli_id`),
  UNIQUE KEY `cli_cpf_UNIQUE` (`cli_cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`cli_id`,`cli_cpf`,`cli_data_cadastro`,`cli_numero_cliente`,`cli_nome`,`cli_sexo`,`cli_estado_civil`,`cli_profissao`,`cli_email`,`cli_conhecimento`,`cli_obs`,`cli_data_modificacao`,`cli_data_desligamento`,`cli_fone1`,`cli_fone2`,`cli_endereco`,`cli_cidade`,`cli_uf`,`cli_cep`) values (1,'524.814.172-91','2011-05-30',24054,'Jair Rebello','M','S','Analista de Sistemas','jair@hotmail.com','muito','Este é um cliente em potencial',NULL,NULL,'(89)4984-8948','(89)4894-8949','Rua tal','Manaus','AM','51565-654');

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
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

/*Data for the table `empresa` */

insert  into `empresa`(`emp_id`,`emp_nome`,`emp_cnpj`,`emp_cpf_socio_majoritario`,`emp_nome_socio_majoritario`,`emp_site`,`emp_email`,`emp_fone1`,`emp_fone2`,`emp_uf`,`emp_cidade`,`emp_endereco`,`emp_cep`,`emp_data_modificacao`,`emp_data_desativacao`,`emp_data_ingresso`,`emp_situacao`) values (1,'SOFTAM','60.800.372/0001-24','524.814.172-91','Jair Rebello','http://www.softeamonline.com.br','jair.rebello@hotmail.com','(88)9489-4894','(43)4324-2342','AM','Manaus','Rua tal','15614-818','2011-06-03 14:07:55','2011-06-03 11:17:00','2011-05-19 00:00:00','A'),(2,'TESTE','60.800.372/0001-24','524.814.172-91','','','contato@teste.com.br','(92)8111-1111','','AM','Manaus','Endereço','69218-156','2011-06-07 18:51:00','2011-06-03 11:24:00','2011-05-24 00:00:00','I'),(3,'TESTE','33.965.934/0001-17','524.814.172-91','','www.teste.com.br','contato@teste.com.br','(87)8978-9798','(79)8798-7987','AM','Manaus','Rua tal','87897-784','2011-06-03 11:25:00','2011-06-03 11:25:00','2011-05-31 18:17:00','I');

/*Table structure for table `filial` */

DROP TABLE IF EXISTS `filial`;

CREATE TABLE `filial` (
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

/*Data for the table `filial` */

insert  into `filial`(`fil_id`,`fil_cnpj`,`fil_nome`,`fil_site`,`fil_email`,`fil_cpf_representante`,`fil_nome_representante`,`fil_fone1`,`fil_fone2`,`fil_obs`,`fil_uf`,`fil_cidade`,`fil_endereco`,`fil_cep`,`emp_id`,`fil_ativo`,`fil_data_ingresso`,`fil_data_modificacao`,`fil_data_desligamento`) values (1,'60.800.372/0001-24','SOFTAM FILIAL','www.softam.com.br','contato@softam.com.br','524.814.172-91','Jair Rebello','(92)9189-1891','(51)8119-8189','teste','AM','Manaus','Endereço','',1,'I','2011-05-25 00:00:00','2011-06-03 12:20:52','2011-06-03 14:42:50');

/*Table structure for table `filial_cliente` */

DROP TABLE IF EXISTS `filial_cliente`;

CREATE TABLE `filial_cliente` (
  `cli_id` int(11) NOT NULL,
  `fil_id` int(11) NOT NULL,
  `filcli_data` datetime NOT NULL,
  KEY `filial` (`fil_id`),
  KEY `cliente` (`cli_id`),
  CONSTRAINT `cliente` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`),
  CONSTRAINT `filial` FOREIGN KEY (`fil_id`) REFERENCES `filial` (`fil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `filial_cliente` */

/*Table structure for table `funcionario` */

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
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

/*Data for the table `funcionario` */

insert  into `funcionario`(`fun_id`,`fun_cpf`,`fun_data_cadastro`,`fun_numero_funcionario`,`fun_nome`,`fun_sexo`,`fun_estado_civil`,`fun_funcao`,`fun_email`,`fun_obs`,`fun_data_modificacao`,`fun_data_desligamento`,`car_id`,`fil_id`,`fun_fone1`,`fun_fone2`,`fun_endereco`,`fun_cidade`,`fun_uf`,`fun_cep`,`fun_estado`) values (4,'524.814.172-91','2011-05-30',45645646,'Jair Rebello','M','S','ANALISTA DE SISTEMAS PLENO','jair.rebello@pmm.am.gov.br','',NULL,NULL,1,1,'(92)3638-9774','(92)3638-9774','Meu endereço','Manaus','AM','52484-848',''),(5,'266.714.023-02','2011-05-30',2147483647,'Teste','M','S','ANALISTA DE SISTEMAS PLENO','jair.rebello@pmm.am.gov.br',NULL,NULL,NULL,1,1,'9236389774','9236389774','Meu endereço','Manaus','AM','69082-452','');

/*Table structure for table `processo` */

DROP TABLE IF EXISTS `processo`;

CREATE TABLE `processo` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_numero` float NOT NULL,
  `pro_data_ingresso` date NOT NULL,
  `pro_obs` varchar(255) DEFAULT NULL,
  `pro_data_modificacao` date DEFAULT NULL,
  `pro_data_desativacao` date DEFAULT NULL,
  `cli_id` int(11) NOT NULL,
  `tpr_id` int(11) NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_Processo_Cliente1` (`cli_id`),
  KEY `fk_Processo_Tipo processo1` (`tpr_id`),
  CONSTRAINT `fk_Processo_Cliente1` FOREIGN KEY (`cli_id`) REFERENCES `cliente` (`cli_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Processo_Tipo processo1` FOREIGN KEY (`tpr_id`) REFERENCES `tipo_processo` (`tpr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `processo` */

insert  into `processo`(`pro_id`,`pro_numero`,`pro_data_ingresso`,`pro_obs`,`pro_data_modificacao`,`pro_data_desativacao`,`cli_id`,`tpr_id`) values (1,1,'2011-05-30','este processo é muito importante',NULL,NULL,1,1);

/*Table structure for table `tipo_processo` */

DROP TABLE IF EXISTS `tipo_processo`;

CREATE TABLE `tipo_processo` (
  `tpr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tpr_numero` float NOT NULL,
  `tpr_nome` varchar(100) NOT NULL,
  `tpr_area_atuacao` varchar(100) NOT NULL,
  `tpr_data_ingresso` date NOT NULL,
  `tpr_obs` varchar(255) DEFAULT NULL,
  `tpr_data_modificacao` date DEFAULT NULL,
  `tpr_data_desativacao` date DEFAULT NULL,
  PRIMARY KEY (`tpr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_processo` */

insert  into `tipo_processo`(`tpr_id`,`tpr_numero`,`tpr_nome`,`tpr_area_atuacao`,`tpr_data_ingresso`,`tpr_obs`,`tpr_data_modificacao`,`tpr_data_desativacao`) values (1,1,'Trabalhista','Trabalhista','2011-05-30','Causas de trabalho',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
