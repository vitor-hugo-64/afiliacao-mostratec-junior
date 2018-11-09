# Host: 172.16.0.5  (Version 5.7.21-0ubuntu0.16.04.1)
# Date: 2018-11-09 16:42:24
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "cadastro"
#

CREATE TABLE `cadastro` (
  `cod_cadastro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_responsavel_preenchimento_cadastro` varchar(50) DEFAULT NULL,
  `cargo_responsavel_preenchimento_cargo` varchar(25) DEFAULT NULL,
  `data_cadastro` date DEFAULT NULL,
  `nome_pessoa_pra_contato` varchar(50) DEFAULT NULL,
  `telefone_pessoa_pra_contato` varchar(25) DEFAULT NULL,
  `email_pessoa_pra_contato` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

#
# Data for table "cadastro"
#

REPLACE INTO `cadastro` VALUES (1,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(2,'Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.com'),(3,'Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.com'),(4,'Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.com'),(5,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(6,'Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.com'),(7,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(8,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(9,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(10,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(11,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(12,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(13,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(14,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(15,'Teste','Teste','1998-05-30','Teste','12365478','Teste@Teste.com'),(16,'Teste','Teste','1998-05-30','Teste','12365478','Teste@Teste.com'),(17,'Teste','Teste','1998-05-30','Teste','12365478','Teste@Teste.com'),(18,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(19,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(20,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(21,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(22,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(23,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(24,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(25,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(26,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(27,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(28,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(29,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(30,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(31,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(32,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(33,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(34,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(35,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(36,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(37,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(38,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(39,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(40,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(41,'Teste Teste','Teste','1998-05-30','Teste','123654789','Teste@Teste.Teste'),(42,'Teste','Teste','1998-05-30','Teste','123654849','Teste@Teste.com'),(43,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(44,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(45,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(46,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(47,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(48,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(49,'Teste','Teste','1998-05-30','Teste','123654849','Teste@Teste.com'),(50,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(51,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(52,'Teste','Teste','1998-05-30','Teste','123654849','Teste@Teste.com'),(53,'Teste','Teste','1998-05-30','Teste','123654849','Teste@Teste.com'),(54,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(55,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(56,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(57,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(58,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(59,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(60,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(61,'Teste Teste','Teste','1998-05-30','Teste','1326548','Teste@Teste.com'),(62,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(63,'Teste Teste','Teste','1998-05-30','Teste','1326548','Teste@Teste.com'),(64,'Teste Teste','Teste','1998-05-30','Teste','1326548','Teste@Teste.com'),(65,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(66,'jhjk','hghjghjghj','1998-05-30','hjhjk','hjhjkhjk','jjhjj'),(67,'Teste Teste','Teste','1998-05-30','Teste','1326548','Teste@Teste.com'),(68,'Teste Teste','Teste','1998-05-30','Teste','1326548','Teste@Teste.com');

#
# Structure for table "cordenador"
#

CREATE TABLE `cordenador` (
  `cod_cordenador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_cordenador`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

#
# Data for table "cordenador"
#

REPLACE INTO `cordenador` VALUES (1,'Nome','Telefone','Emailr'),(2,'Nome','Telefone','Emailr'),(3,'Nome','Telefone','Emailr'),(4,'Teste','123654','Teste@Teste.com'),(5,'Teste','123654','Teste@Teste.com'),(6,'Teste','123654','Teste@Teste.com'),(7,'Nome','Telefone','Emailr'),(8,'Nome','Telefone','Emailr'),(9,'Nome','Telefone','Emailr'),(10,'Nome','Telefone','Emailr'),(11,'Nome','Telefone','Emailr'),(12,'Nome','Telefone','Emailr'),(13,'Nome','Telefone','Emailr'),(14,'Nome','Telefone','Emailr'),(15,'Nome','Telefone','Emailr'),(16,'Nome','Telefone','Emailr'),(17,'Nome','Telefone','Emailr'),(18,'Nome','Telefone','Emailr'),(19,'Nome','Telefone','Emailr'),(20,'Nome','Telefone','Emailr'),(21,'Teste','12365489','Teste@Teste.Teste'),(22,'Teste','12365489','Teste@Teste.Teste'),(23,'Teste','12365489','Teste@Teste.Teste'),(24,'Teste','12365489','Teste@Teste.Teste'),(25,'Teste','12365489','Teste@Teste.Teste'),(26,'Teste','12365489','Teste@Teste.Teste'),(27,'Teste','12365489','Teste@Teste.Teste'),(28,'Nome','Telefone','Emailr'),(29,'Nome','Telefone','Emailr'),(30,'Teste','12365489','Teste@Teste.Teste'),(31,'Teste','123564899','Teste@Teste.com'),(32,'Nome','Telefone','Emailr'),(33,'Nome','Telefone','Emailr'),(34,'Nome','Telefone','Emailr'),(35,'Nome','Telefone','Emailr'),(36,'Nome','Telefone','Emailr'),(37,'Nome','Telefone','Emailr'),(38,'Teste','123564899','Teste@Teste.com'),(39,'Nome','Telefone','Emailr'),(40,'Nome','Telefone','Emailr'),(41,'Teste','123564899','Teste@Teste.com'),(42,'Teste','123564899','Teste@Teste.com'),(43,'Nome','Telefone','Emailr'),(44,'Nome','Telefone','Emailr'),(45,'Nome','Telefone','Emailr'),(46,'Nome','Telefone','Emailr'),(47,'Nome','Telefone','Emailr'),(48,'Nome','Telefone','Emailr'),(49,'Nome','Telefone','Emailr'),(50,'Teste','13654456','Teste@Teste.com'),(51,'Nome','Telefone','Emailr'),(52,'Teste','13654456','Teste@Teste.com'),(53,'Teste','13654456','Teste@Teste.com'),(54,'Nome','Telefone','Emailr'),(55,'Nome','Telefone','Emailr'),(56,'Teste','13654456','Teste@Teste.com'),(57,'Teste','13654456','Teste@Teste.com');

#
# Structure for table "endereco_feira"
#

CREATE TABLE `endereco_feira` (
  `cod_endereco_feira` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(50) DEFAULT NULL,
  `numero` varchar(25) DEFAULT NULL,
  `cep` varchar(25) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `pais` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_endereco_feira`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8;

#
# Data for table "endereco_feira"
#

REPLACE INTO `endereco_feira` VALUES (1,'Teste','12','93700000','Teste','UF','Teste'),(2,'Teste','12','93700000','Teste','UF','Teste'),(3,'uf','uf','uf','uf','uf','uf'),(4,'Teste','12','93700000','Teste','UF','Teste'),(5,'uf','uf','uf','uf','uf','uf'),(6,'uf','uf','uf','uf','uf','uf'),(7,'uf','uf','uf','uf','uf','uf'),(8,'uf','uf','uf','uf','uf','uf'),(9,'uf','uf','uf','uf','uf','uf'),(10,'uf','uf','uf','uf','uf','uf'),(11,'uf','uf','uf','uf','uf','uf'),(12,'uf','uf','uf','uf','uf','uf'),(13,'Teste','12','123654789','Teste','uf','Teste'),(14,'Teste','12','123654789','Teste','uf','Teste'),(15,'Teste','12','123654789','Teste','uf','Teste'),(16,'uf','uf','uf','uf','uf','uf'),(17,'uf','uf','uf','uf','uf','uf'),(18,'uf','uf','uf','uf','uf','uf'),(19,'uf','uf','uf','uf','uf','uf'),(20,'uf','uf','uf','uf','uf','uf'),(21,'uf','uf','uf','uf','uf','uf'),(22,'uf','uf','uf','uf','uf','uf'),(23,'uf','uf','uf','uf','uf','uf'),(24,'uf','uf','uf','uf','uf','uf'),(25,'uf','uf','uf','uf','uf','uf'),(26,'uf','uf','uf','uf','uf','uf'),(27,'uf','uf','uf','uf','uf','uf'),(28,'uf','uf','uf','uf','uf','uf'),(29,'uf','uf','uf','uf','uf','uf'),(30,'Teste','12','123654789','Teste','RS','Teste'),(31,'Teste','12','123654789','Teste','RS','Teste'),(32,'Teste','12','123654789','Teste','RS','Teste'),(33,'Teste','12','123654789','Teste','RS','Teste'),(34,'Teste','12','123654789','Teste','RS','Teste'),(35,'Teste','12','123654789','Teste','RS','Teste'),(36,'Teste','12','123654789','Teste','RS','Teste'),(37,'uf','uf','uf','uf','uf','uf'),(38,'uf','uf','uf','uf','uf','uf'),(39,'Teste','12','123654789','Teste','RS','Teste'),(40,'Teste','22','123654789','Teste','Te','Teste'),(41,'uf','uf','uf','uf','uf','uf'),(42,'uf','uf','uf','uf','uf','uf'),(43,'uf','uf','uf','uf','uf','uf'),(44,'uf','uf','uf','uf','uf','uf'),(45,'uf','uf','uf','uf','uf','uf'),(46,'uf','uf','uf','uf','uf','uf'),(47,'Teste','22','123654789','Teste','Te','Teste'),(48,'uf','uf','uf','uf','uf','uf'),(49,'uf','uf','uf','uf','uf','uf'),(50,'Teste','22','123654789','Teste','Te','Teste'),(51,'Teste','22','123654789','Teste','Te','Teste'),(52,'uf','uf','uf','uf','uf','uf'),(53,'uf','uf','uf','uf','uf','uf'),(54,'uf','uf','uf','uf','uf','uf'),(55,'uf','uf','uf','uf','uf','uf'),(56,'uf','uf','uf','uf','uf','uf'),(57,'uf','uf','uf','uf','uf','uf'),(58,'uf','uf','uf','uf','uf','uf'),(59,'Teste','123','31245698','Teste','Te','Teste'),(60,'uf','uf','uf','uf','uf','uf'),(61,'Teste','123','31245698','Teste','Te','Teste'),(62,'Teste','123','31245698','Teste','Te','Teste'),(63,'uf','uf','uf','uf','uf','uf'),(64,'uf','uf','uf','uf','uf','uf'),(65,'Teste','123','31245698','Teste','Te','Teste'),(66,'Teste','123','31245698','Teste','Te','Teste');

#
# Structure for table "instituicao"
#

CREATE TABLE `instituicao` (
  `cod_instituicao` int(11) NOT NULL AUTO_INCREMENT,
  `nome_responsavel` varchar(50) DEFAULT NULL,
  `telefone_responsavel` varchar(25) DEFAULT NULL,
  `email_responsavel` varchar(50) DEFAULT NULL,
  `nome_instituicao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_instituicao`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

#
# Data for table "instituicao"
#

REPLACE INTO `instituicao` VALUES (1,'Nome Instituição','Resposánvel','996193270','email@email.com'),(2,'Teste','Teste','996193270','Teste@Teste.Teste'),(3,'Teste','Teste','996193270','Teste@Teste.Teste'),(4,'Teste','Teste','996193270','Teste@Teste.Teste'),(5,'Nome Instituição','Resposánvel','996193270','email@email.com'),(6,'Teste','Teste','996193270','Teste@Teste.Teste'),(7,'Nome Instituição','Resposánvel','996193270','email@email.com'),(8,'Nome Instituição','Resposánvel','996193270','email@email.com'),(9,'Nome Instituição','Resposánvel','996193270','email@email.com'),(10,'Nome Instituição','Resposánvel','996193270','email@email.com'),(11,'Nome Instituição','Resposánvel','996193270','email@email.com'),(12,'Nome Instituição','Resposánvel','996193270','email@email.com'),(13,'Nome Instituição','Resposánvel','996193270','email@email.com'),(14,'Nome Instituição','Resposánvel','996193270','email@email.com'),(15,'Teste','Teste','123654789','Teste@Teste.com'),(16,'Teste','Teste','123654789','Teste@Teste.com'),(17,'Teste','Teste','123654789','Teste@Teste.com'),(18,'Nome Instituição','Resposánvel','996193270','email@email.com'),(19,'Nome Instituição','Resposánvel','996193270','email@email.com'),(20,'Nome Instituição','Resposánvel','996193270','email@email.com'),(21,'Nome Instituição','Resposánvel','996193270','email@email.com'),(22,'Nome Instituição','Resposánvel','996193270','email@email.com'),(23,'Nome Instituição','Resposánvel','996193270','email@email.com'),(24,'Nome Instituição','Resposánvel','996193270','email@email.com'),(25,'Nome Instituição','Resposánvel','996193270','email@email.com'),(26,'Nome Instituição','Resposánvel','996193270','email@email.com'),(27,'Nome Instituição','Resposánvel','996193270','email@email.com'),(28,'Nome Instituição','Resposánvel','996193270','email@email.com'),(29,'Nome Instituição','Resposánvel','996193270','email@email.com'),(30,'Nome Instituição','Resposánvel','996193270','email@email.com'),(31,'Nome Instituição','Resposánvel','996193270','email@email.com'),(32,'Teste','Teste','123456897','Teste@Teste.Teste'),(33,'Teste','Teste','123456897','Teste@Teste.Teste'),(34,'Teste','Teste','123456897','Teste@Teste.Teste'),(35,'Teste','Teste','123456897','Teste@Teste.Teste'),(36,'Teste','Teste','123456897','Teste@Teste.Teste'),(37,'Teste','Teste','123456897','Teste@Teste.Teste'),(38,'Teste','Teste','123456897','Teste@Teste.Teste'),(39,'Nome Instituição','Resposánvel','996193270','email@email.com'),(40,'Nome Instituição','Resposánvel','996193270','email@email.com'),(41,'Teste','Teste','123456897','Teste@Teste.Teste'),(42,'Teste','Teste','12365478','Teste@Teste.com'),(43,'Nome Instituição','Resposánvel','996193270','email@email.com'),(44,'Nome Instituição','Resposánvel','996193270','email@email.com'),(45,'Nome Instituição','Resposánvel','996193270','email@email.com'),(46,'Nome Instituição','Resposánvel','996193270','email@email.com'),(47,'Nome Instituição','Resposánvel','996193270','email@email.com'),(48,'Nome Instituição','Resposánvel','996193270','email@email.com'),(49,'Teste','Teste','12365478','Teste@Teste.com'),(50,'Nome Instituição','Resposánvel','996193270','email@email.com'),(51,'Nome Instituição','Resposánvel','996193270','email@email.com'),(52,'Teste','Teste','12365478','Teste@Teste.com'),(53,'Teste','Teste','12365478','Teste@Teste.com'),(54,'Nome Instituição','Resposánvel','996193270','email@email.com'),(55,'Nome Instituição','Resposánvel','996193270','email@email.com'),(56,'Nome Instituição','Resposánvel','996193270','email@email.com'),(57,'Nome Instituição','Resposánvel','996193270','email@email.com'),(58,'Nome Instituição','Resposánvel','996193270','email@email.com'),(59,'Nome Instituição','Resposánvel','996193270','email@email.com'),(60,'Nome Instituição','Resposánvel','996193270','email@email.com'),(61,'Teste','Teste','13265489','Teste@Teste.com'),(62,'Nome Instituição','Resposánvel','996193270','email@email.com'),(63,'Teste','Teste','13265489','Teste@Teste.com'),(64,'Teste','Teste','13265489','Teste@Teste.com'),(65,'Nome Instituição','Resposánvel','996193270','email@email.com'),(66,'Nome Instituição','Resposánvel','996193270','email@email.com'),(67,'Teste','Teste','13265489','Teste@Teste.com'),(68,'Teste','Teste','13265489','Teste@Teste.com');

#
# Structure for table "feira"
#

CREATE TABLE `feira` (
  `cod_feira` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `site` varchar(50) DEFAULT NULL,
  `peridiocidade` varchar(50) DEFAULT NULL,
  `data_realizacao_mais_recente` date DEFAULT NULL,
  `data_realizacao_proxima` date DEFAULT NULL,
  `data_confirmada` enum('s','n') DEFAULT NULL,
  `numero_edicao` varchar(5) DEFAULT NULL,
  `tipo_de_feira` varchar(50) DEFAULT NULL,
  `descricao_abrangencia` text,
  `existe_comite_revisao_cientifica` enum('s','n') DEFAULT NULL,
  `descricao_processo_selecao` text,
  `numeros_projetos_proxima_edicao` varchar(5) DEFAULT NULL,
  `numero_escolas_proxima_edicao` varchar(5) DEFAULT NULL,
  `numero_escolas_ensino_infantil` int(11) DEFAULT NULL,
  `numero_projetos_ensino_infantil` int(11) DEFAULT NULL,
  `numero_escolas_ensino_fundamental` int(11) DEFAULT NULL,
  `numero_projetos_ensino_fundamental` int(11) DEFAULT NULL,
  `numero_escolas_ensino_medio` int(11) DEFAULT NULL,
  `numero_projetos_ensino_medio` int(11) DEFAULT NULL,
  `numero_escolas_ensino_superior_tecnico` int(11) DEFAULT NULL,
  `numero_projetos_ensino_superior_tecnico` int(11) DEFAULT NULL,
  `descricao_processo_avaliacao_feira` text,
  `data_ultima_feira_realizada` date DEFAULT NULL,
  `ultima_feira_numero_projetos_um_estudante` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_projetos_dois_estudantes` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_projetos_tres_estudantes` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_projetos_quatro_estudantes` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_projetos_cinco_ou_mais_estudantes` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_total_professores` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_escolas_publicas` varchar(25) DEFAULT NULL,
  `ultima_feira_numero_escolas_privadas` varchar(25) DEFAULT NULL,
  `todos_projetos_um_estudante` varchar(25) DEFAULT NULL,
  `todos_projetos_dois_estudantes` varchar(25) DEFAULT NULL,
  `todos_projetos_tres_estudantes` varchar(25) DEFAULT NULL,
  `todos_projetos_quatro_estudantes` varchar(25) DEFAULT NULL,
  `todos_projetos_cinco_ou_mais_estudantes` varchar(25) DEFAULT NULL,
  `numero_total_estudantes` varchar(25) DEFAULT NULL,
  `numero_total_de_orientadores` varchar(25) DEFAULT NULL,
  `numero_total_escolas_publicas` varchar(25) DEFAULT NULL,
  `numero_total_escolas_privadas` varchar(25) DEFAULT NULL,
  `numero_total_projetos_credenciamento` varchar(25) DEFAULT NULL,
  `numero_projetos_desejado_credenciamento` varchar(25) DEFAULT NULL,
  `cod_endereco_feira` int(11) NOT NULL,
  `cod_cordenador` int(11) NOT NULL,
  `cod_instituicao` int(11) NOT NULL,
  `cod_cadastro` int(11) NOT NULL,
  PRIMARY KEY (`cod_feira`),
  KEY `fk_m_feira_m_endereco_feira_idx` (`cod_endereco_feira`),
  KEY `fk_m_feira_m_cordenador1_idx` (`cod_cordenador`),
  KEY `fk_m_feira_m_cadastro1_idx` (`cod_cadastro`),
  KEY `fk_m_feira_instituicao1_idx` (`cod_instituicao`),
  CONSTRAINT `fk_m_feira_instituicao1` FOREIGN KEY (`cod_instituicao`) REFERENCES `instituicao` (`cod_instituicao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_m_feira_m_cadastro1` FOREIGN KEY (`cod_cadastro`) REFERENCES `cadastro` (`cod_cadastro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_m_feira_m_cordenador1` FOREIGN KEY (`cod_cordenador`) REFERENCES `cordenador` (`cod_cordenador`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_m_feira_m_endereco_feira` FOREIGN KEY (`cod_endereco_feira`) REFERENCES `endereco_feira` (`cod_endereco_feira`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

#
# Data for table "feira"
#

REPLACE INTO `feira` VALUES (1,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,26,17,28,28),(2,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','125','tipo de feira','text long','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,29,20,31,31),(3,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,21,32,32),(4,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,31,22,33,33),(5,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','1','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,32,23,34,34),(6,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','1','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,33,24,35,35),(7,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','escolar','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,34,25,36,36),(8,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','escolar','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,26,37,37),(9,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','Teste','Teste','s',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,27,38,38),(10,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','125','tipo de feira','text long','s','descricao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,38,29,40,40),(11,'Teste','Teste','anual','1998-05-30','1998-05-30','s','65','Teste','Teste','s','Teste','45','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,39,30,41,41),(12,'Teste','Teste.com','anual','1998-05-30','1998-05-30','s','321','regional','Teste','s','Teste','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,31,42,42),(13,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao','12','12',12,NULL,12,NULL,12,NULL,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,41,32,43,43),(14,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao','12','12',12,NULL,12,NULL,12,NULL,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,42,33,44,44),(15,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao','12','12',12,NULL,12,NULL,12,NULL,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,43,34,45,45),(16,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao','12','12',12,12,12,12,12,12,12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,44,35,46,46),(17,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao','12','12',12,12,12,12,12,12,12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,46,37,48,48),(18,'Teste','Teste.com','anual','1998-05-30','1998-05-30','s','321','regional','Teste','s','Teste','12','12',12,12,12,12,12,12,12,12,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,47,38,49,49),(19,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',12,12,12,12,12,12,12,12,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,48,39,50,50),(20,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',12,12,12,12,12,12,12,12,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,49,40,51,51),(21,'Teste','Teste.com','anual','1998-05-30','1998-05-30','s','321','regional','Teste','s','Teste','12','12',12,12,12,12,12,12,12,12,'12','1998-05-30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,50,41,52,52),(22,'Teste','Teste.com','anual','1998-05-30','1998-05-30','s','321','regional','Teste','s','Teste','12','12',12,12,12,12,12,12,12,12,'12','1998-05-30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,51,42,53,53),(23,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',12,12,12,12,12,12,12,12,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,52,43,54,54),(24,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',12,12,12,12,12,12,12,12,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,53,44,55,55),(25,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',12,12,12,12,12,12,12,12,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,54,45,56,56),(26,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,55,46,57,57),(27,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,56,47,58,58),(28,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,57,48,59,59),(29,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,58,49,60,60),(30,'Teste','Teste','anual','1998-05-30','1988-05-30','s','32145','Teste','Teste','s','Teste','12','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TesteTesteTesteTeste','1998-05-30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,59,50,61,61),(31,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09','12','12','12','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,60,51,62,62),(32,'Teste','Teste','anual','1998-05-30','1988-05-30','s','32145','Teste','Teste','s','Teste','12','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TesteTesteTesteTeste','1998-05-30','54','65','79','32','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,61,52,63,63),(33,'Teste','Teste','anual','1998-05-30','1988-05-30','s','32145','Teste','Teste','s','Teste','12','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TesteTesteTesteTeste','1998-05-30','54','65','79','32','5',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,62,53,64,64),(34,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09','12','12','12','12','12','12','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,63,54,65,65),(35,'Nome Feira','site.com.br','Anual','1998-05-30','1998-05-30','s','12','tipo de feira','text long','s','descricao selecao','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'descricao avaliacao','2018-11-09','12','12','12','12','12','12','12','12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,64,55,66,66),(36,'Teste','Teste','anual','1998-05-30','1988-05-30','s','32145','Teste','Teste','s','Teste','12','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TesteTesteTesteTeste','1998-05-30','54','65','79','32','5','45','32','45',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,65,56,67,67),(37,'Teste','Teste','anual','1998-05-30','1988-05-30','s','32145','Teste','Teste','s','Teste','12','32',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'TesteTesteTesteTeste','1998-05-30','54','65','79','32','5','45','32','45','98','4532','125','12','98',NULL,NULL,NULL,NULL,NULL,NULL,66,57,68,68);

#
# Structure for table "area_pesquisa"
#

CREATE TABLE `area_pesquisa` (
  `cod_area_pesquisa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_area_pesquisa` varchar(50) DEFAULT NULL,
  `cod_feira` int(11) NOT NULL,
  PRIMARY KEY (`cod_area_pesquisa`),
  KEY `fk_area_pesquisa_m_feira1_idx` (`cod_feira`),
  CONSTRAINT `fk_area_pesquisa_m_feira1` FOREIGN KEY (`cod_feira`) REFERENCES `feira` (`cod_feira`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "area_pesquisa"
#


#
# Structure for table "nivel_ensino_estudantes"
#

CREATE TABLE `nivel_ensino_estudantes` (
  `cod_nivel_ensino_estudantes` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` varchar(50) DEFAULT NULL,
  `numero_projetos` varchar(5) DEFAULT NULL,
  `numero_escolas` varchar(5) DEFAULT NULL,
  `cod_feira` int(11) NOT NULL,
  PRIMARY KEY (`cod_nivel_ensino_estudantes`),
  KEY `fk_m_nivel_ensino_estudantes_m_feira1_idx` (`cod_feira`),
  CONSTRAINT `fk_m_nivel_ensino_estudantes_m_feira1` FOREIGN KEY (`cod_feira`) REFERENCES `feira` (`cod_feira`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

#
# Data for table "nivel_ensino_estudantes"
#

REPLACE INTO `nivel_ensino_estudantes` VALUES (1,'Educao Infantil','12','12',27),(2,'Educao Infantil','12','12',28),(3,'Educacao Fundamental','12','12',28),(4,'Educacao Medio','12','12',28),(5,'Educação Superior','12','12',28),(6,'Educao Infantil','12','12',29),(7,'Educacao Fundamental','12','12',29),(8,'Educacao Medio','12','12',29),(9,'Educação Superior','12','12',29),(10,'Educacao infantil','54','12',30),(11,'Educacao fundamental','78','65',30),(12,'Educacao médio e profissional','54','56',30),(13,'Educao Infantil','12','12',31),(14,'Educacao Fundamental','12','12',31),(15,'Educacao Medio','12','12',31),(16,'Educação Superior','12','12',31),(17,'Educacao infantil','54','12',32),(18,'Educacao fundamental','78','65',32),(19,'Educacao médio e profissional','54','56',32),(20,'Educacao infantil','54','12',33),(21,'Educacao fundamental','78','65',33),(22,'Educacao médio e profissional','54','56',33),(23,'Educao Infantil','12','12',34),(24,'Educacao Fundamental','12','12',34),(25,'Educacao Medio','12','12',34),(26,'Educação Superior','12','12',34),(27,'Educao Infantil','12','12',35),(28,'Educacao Fundamental','12','12',35),(29,'Educacao Medio','12','12',35),(30,'Educação Superior','12','12',35),(31,'Educacao infantil','54','12',36),(32,'Educacao fundamental','78','65',36),(33,'Educacao médio e profissional','54','56',36),(34,'Educacao infantil','54','12',37),(35,'Educacao fundamental','78','65',37),(36,'Educacao médio e profissional','54','56',37);

#
# Procedure "sp_cadastrar"
#

CREATE PROCEDURE `sp_cadastrar`( 
														in nome_responsavel_preenchimento_cadastro_in varchar(50), in cargo_responsavel_preenchimento_cargo_in varchar(25), in data_cadastro_in date, in nome_pessoa_pra_contato_in varchar(50), in telefone_pessoa_pra_contato_in varchar(25), in email_pessoa_pra_contato_in varchar(50),
														in nome_instituicao_in varchar(50), in nome_responsavel_in varchar(50), in telefone_responsavel_in varchar(25), in email_responsavel_in varchar(50),
                                                        in rua_in varchar(50), in numero_in varchar(25), in cep_in varchar(25), in cidade_in varchar(50), in estado_in char(2), in pais_in varchar(50),
                                                        in nome_in varchar(50), in telefone_in varchar(25), in email_in varchar(50),
                                                        in nome_feira_in varchar(50), in site_in varchar(50), in peridiocidade_in varchar(50), in data_realizacao_mais_recente_in date, in data_realizacao_proxima_in date, in data_confirmada_in enum( 's', 'n'), 
                                                        in numero_edicao_in varchar(5), in tipo_de_feira_in varchar(50), in descricao_abrangencia_in text, in existe_comite_revisao_cientifica_in enum( 's', 'n'),
                                                        in descricao_processo_selecao_in text, in descricao_processo_avaliacao_feira_in TEXT, in data_ultima_feira_realizada_in date, in numero_projetos_proxima_edicao_in int, in numero_escolas_proxima_edicao_in int,
                                                        in ultima_feira_numero_projetos_um_estudante_in varchar(25), in ultima_feira_numero_projetos_dois_estudantes_in varchar(25), in ultima_feira_numero_projetos_tres_estudantes_in varchar(25), in ultima_feira_numero_projetos_quatro_estudantes_in varchar(25), in ultima_feira_numero_projetos_cinco_ou_mais_estudantes_in varchar(25), 
                                                        in ultima_feira_numero_total_professores_in varchar(25),in ultima_feira_numero_escolas_publicas_in varchar(25),in ultima_feira_numero_escolas_privadas_in varchar(25),
                                                        in todos_projetos_um_estudante_in varchar(25), in todos_projetos_dois_estudantes_in varchar(25), in todos_projetos_tres_estudantes_in varchar(25), in todos_projetos_quatro_estudantes_in varchar(25), in todos_projetos_cinco_ou_mais_estudantes_in varchar(25),
                                                        in numero_total_estudantes_in varchar(25), in numero_total_de_orientadores_in varchar(25), in numero_total_escolas_publicas_in varchar(25), in numero_total_escolas_privadas_in varchar(25), in numero_total_projetos_credenciamento_in varchar(25), in numero_projetos_desejado_credenciamento_in varchar(25),
                                                        
                                                        in nivel_escolas_ensino_infantil_in varchar(50), numero_escolas_ensino_infantil_in int, in numero_projetos_ensino_infantil_in int, in nivel_escolas_ensino_fundamental_in varchar(50), in numero_escolas_ensino_fundamental_in int, in numero_projetos_ensino_fundamental_in int, in nivel_escolas_ensino_medio_in varchar(50), in numero_escolas_ensino_medio_in int, in numero_projetos_ensino_medio_in int, in nivel_escolas_ensino_superior_tecnico_in varchar(50), in numero_escolas_ensino_superior_tecnico_in int,  in numero_projetos_ensino_superior_tecnico_in int
													)
BEGIN

	declare novo_cod_cadastro, novo_cod_instituicao, novo_cod_endereco, novo_cod_cordenador, novo_cod_feira int;
    
    insert into cadastro values( default, nome_responsavel_preenchimento_cadastro_in, cargo_responsavel_preenchimento_cargo_in, data_cadastro_in, nome_pessoa_pra_contato_in, telefone_pessoa_pra_contato_in, email_pessoa_pra_contato_in);
    
	set novo_cod_cadastro = last_insert_id();

	insert into instituicao values( default, nome_instituicao_in, nome_responsavel_in, telefone_responsavel_in, email_responsavel_in);
    
    set novo_cod_instituicao = last_insert_id();
    
    insert into endereco_feira values( default, rua_in, numero_in, cep_in, cidade_in, estado_in, pais_in);
    
    set novo_cod_endereco = last_insert_id();
    
    insert into cordenador values( default, nome_in, telefone_in, email_in);
    
    set novo_cod_cordenador = last_insert_id();
    
	insert into feira( cod_feira, nome, site, peridiocidade, data_realizacao_mais_recente, data_realizacao_proxima, data_confirmada, 
		
        numero_edicao, tipo_de_feira, descricao_abrangencia, existe_comite_revisao_cientifica, 
        descricao_processo_selecao, descricao_processo_avaliacao_feira, data_ultima_feira_realizada, numeros_projetos_proxima_edicao, numero_escolas_proxima_edicao,
        ultima_feira_numero_projetos_um_estudante, ultima_feira_numero_projetos_dois_estudantes, ultima_feira_numero_projetos_tres_estudantes, ultima_feira_numero_projetos_quatro_estudantes, ultima_feira_numero_projetos_cinco_ou_mais_estudantes,
        ultima_feira_numero_total_professores, ultima_feira_numero_escolas_publicas, ultima_feira_numero_escolas_privadas,
        todos_projetos_um_estudante, todos_projetos_dois_estudantes, todos_projetos_tres_estudantes, todos_projetos_quatro_estudantes, todos_projetos_cinco_ou_mais_estudantes,
        numero_total_estudantes, numero_total_de_orientadores, numero_total_escolas_publicas, numero_total_escolas_privadas, numero_total_projetos_credenciamento, numero_projetos_desejado_credenciamento,
        
        cod_endereco_feira, cod_cordenador, cod_instituicao, cod_cadastro) 
    values( default, nome_feira_in, site_in, peridiocidade_in, data_realizacao_mais_recente_in, data_realizacao_proxima_in, data_confirmada_in, 
		
        numero_edicao_in, tipo_de_feira_in, descricao_abrangencia_in, existe_comite_revisao_cientifica_in, 
        descricao_processo_selecao_in, descricao_processo_avaliacao_feira_in, data_ultima_feira_realizada_in, numero_projetos_proxima_edicao_in, numero_escolas_proxima_edicao_in,
        ultima_feira_numero_projetos_um_estudante_in, ultima_feira_numero_projetos_dois_estudantes_in, ultima_feira_numero_projetos_tres_estudantes_in, ultima_feira_numero_projetos_quatro_estudantes_in, ultima_feira_numero_projetos_cinco_ou_mais_estudantes_in,
        ultima_feira_numero_total_professores_in, ultima_feira_numero_escolas_publicas_in, ultima_feira_numero_escolas_privadas_in,
        todos_projetos_um_estudante_in, todos_projetos_dois_estudantes_in, todos_projetos_tres_estudantes_in, todos_projetos_quatro_estudantes_in, todos_projetos_cinco_ou_mais_estudantes_in,
		numero_total_estudantes_in, numero_total_de_orientadores_in, numero_total_escolas_publicas_in, numero_total_escolas_privadas_in, numero_total_projetos_credenciamento_in, numero_projetos_desejado_credenciamento_in,
        
        novo_cod_endereco, novo_cod_cordenador, novo_cod_instituicao, novo_cod_cadastro);
        
	
        
	set novo_cod_feira = last_insert_id();
    
    if nivel_escolas_ensino_infantil_in <> 'n' then
		insert into nivel_ensino_estudantes values( default, nivel_escolas_ensino_infantil_in, numero_projetos_ensino_infantil_in, numero_escolas_ensino_infantil_in, novo_cod_feira);
    end if;
    
    if nivel_escolas_ensino_fundamental_in <> 'n' then
		insert into nivel_ensino_estudantes values( default, nivel_escolas_ensino_fundamental_in, numero_projetos_ensino_fundamental_in, numero_escolas_ensino_fundamental_in, novo_cod_feira);
    end if;
    
    if nivel_escolas_ensino_medio_in <> 'n' then
		insert into nivel_ensino_estudantes values( default, nivel_escolas_ensino_medio_in, numero_projetos_ensino_medio_in, numero_escolas_ensino_medio_in, novo_cod_feira);
    end if;
    
    if nivel_escolas_ensino_superior_tecnico_in <> 'n' then
		insert into nivel_ensino_estudantes values( default, nivel_escolas_ensino_superior_tecnico_in, numero_projetos_ensino_superior_tecnico_in, numero_escolas_ensino_superior_tecnico_in, novo_cod_feira);
    end if;    
    
END;
