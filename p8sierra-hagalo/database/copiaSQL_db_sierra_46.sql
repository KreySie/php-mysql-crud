-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bd_sierra_hagalo
CREATE DATABASE IF NOT EXISTS `bd_sierra_hagalo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `bd_sierra_hagalo`;

-- Volcando estructura para tabla bd_sierra_hagalo.registros
CREATE TABLE IF NOT EXISTS `registros` (
  `IdPersona` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Producto_Comprado` varchar(500) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Tema_Consulta` varchar(100) NOT NULL,
  `Problema_C_P` varchar(1000) NOT NULL,
  PRIMARY KEY (`IdPersona`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla bd_sierra_hagalo.registros: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` (`IdPersona`, `Nombre`, `Apellido`, `Producto_Comprado`, `Precio`, `Cantidad`, `Tema_Consulta`, `Problema_C_P`) VALUES
	(11, 'Johan', 'Sierra Favela', 'Pintura', 300, 2, 'Atencion al cliente', 'Mi Pintura no ha llegado y la pedi hace 3 semanas'),
	(12, 'Eliseo', 'Nava', 'Marro', 150, 1, 'Garantia', 'Me salio defectuoso');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
