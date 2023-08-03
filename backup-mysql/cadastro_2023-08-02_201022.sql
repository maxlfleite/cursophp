CREATE DATABASE cadastro;
use cadastro;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET SQL_NOTES=0 */;
DROP TABLE IF EXISTS cursos;
CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `descricao` text DEFAULT NULL,
  `carga` int(10) unsigned DEFAULT NULL,
  `totaulas` int(10) unsigned DEFAULT NULL,
  `ano` year(4) DEFAULT 2016,
  PRIMARY KEY (`idcurso`),
  UNIQUE KEY `nome` (`nome`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS gafanhotos;
CREATE TABLE `gafanhotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `prof` varchar(20) NOT NULL DEFAULT ' ',
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `nacionalidade` varchar(20) DEFAULT 'Brasil',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO cursos(idcurso,nome,descricao,carga,totaulas,ano) VALUES(1,'HTML5',X'437572736f2064652048544d4c35',40,37,'2014'),(2,'Algoritmos',X'4cc3b3676963612064652070726f6772616d61c3a7c3a36f',20,15,'2014'),(3,'Photoshop',X'4469636173206433652050686f746f73686f70204343',10,8,'2014'),(4,'PHP',X'437572736f20646520504850207061726120496e696369616e746573',40,20,'2015'),(5,'Java',X'496e74726f6475c3a7c3a36f20c3a0204c696e67756167656d204a617661',40,29,'2015'),(6,'MySQL',X'42616e636f206465204461646f73204d7953514c',30,15,'2016'),(7,'Word',X'437572736f20436f6d706c65746f20646520576f7264',40,30,'2016');
INSERT INTO gafanhotos(id,nome,prof,nascimento,sexo,peso,altura,nacionalidade) VALUES(1,'Godofredo','','1984-01-02','M',78.50,1.83,'Brasil'),(2,'Maria','','1999-12-30','F',55.20,1.65,'Portugal'),(3,'Creuza','','1920-06-15','F',50.80,1.57,'Brasil'),(4,'Homer','','1978-10-20','M',80.20,1.79,'Irlanda'),(5,'Pedro Ferreira','','1980-07-10','M',80.00,1.80,'Brasil'),(6,'Ana Maria Silva','','1990-12-05','F',68.00,1.64,'Venezuela'),(7,'Luís Roberto Gonzales','','1975-02-20','M',90.00,1.75,'Espanha');

drop table cursos;
select * from cursos;
select * from gafanhotos;