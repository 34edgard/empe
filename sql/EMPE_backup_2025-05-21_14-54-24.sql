

CREATE TABLE `Contenidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `autor` varchar(100) DEFAULT NULL,
  `fecha_publicacion` date DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `tipo_contenido` enum('libro','manga') NOT NULL,
  `descripcion` text DEFAULT NULL,
  `popularidad` int(11) DEFAULT 0,
  `fecha_agregado` datetime DEFAULT current_timestamp(),
  `img_url` varchar(500) NOT NULL DEFAULT '/src/img/logo.pnj',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('1', 'La verga verdadera ', 'El machete', '2024-12-22', 'Gggg', 'manga', 'Fffg', '0', '2024-12-22 13:11:38', '../src/img/6dfc7253cf3db6115bdf47e70198dfae_01BD7J4QW3FV2KKNRBZ6XJZ2BC.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('2', 'Vghvh', 'Vvv', '2024-12-22', 'Hhh', 'manga', 'Gggg', '0', '2024-12-22 13:13:22', '../src/img/dea6b10d39d45860ef8f5c3346a3d20d_01BG1XZV66NHZSEM34CZNCQPW4.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('3', 'ðŸ˜šðŸ˜˜ðŸ˜ˆðŸ˜ˆðŸ˜‘ðŸ˜ˆðŸ˜ˆðŸ–•', 'ðŸ˜˜ðŸ˜…ðŸ˜ðŸ˜ðŸ¥°', '2024-12-22', 'Sexo', 'manga', 'Fggggggvv', '0', '2024-12-22 13:17:34', '../src/img/93231151fffb0022faa60e8bf073ab54_01BD7KF14HY7S6NQCVBZREJ7W5.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('4', 'Pito', 'El machete', '2024-12-22', 'Hhh', 'libro', 'Ggghhb', '0', '2024-12-22 13:50:56', '../src/img/d9acec9e67e4fce4455c50eb2ec31e07_01BD7M2A6Q3STJSSF01M8786N4.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('5', 'Titulo', 'Autor', '2024-12-22', 'CategorÃ­a', 'libro', 'Gggg', '0', '2024-12-22 14:16:40', '../src/img/ac869824420e4355633f06410164feb8_01BD7KPNK2EGJJ2XG83J0FVA3Y.315x0.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('6', 'El titulo', 'El autor', '2024-12-22', 'La categiria', 'libro', 'La descr', '0', '2024-12-22 14:22:13', '../src/img/d9c7b80ebfb70dfbf0abce41fc1093bf_01BD7M2QPWT3EPEBWZY229604M.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('7', 'La verga verdadera ', 'El machete', '2024-12-23', 'Hhh', 'libro', 'Gggggggg', '0', '2024-12-23 17:46:47', '../src/img/e238dde6d25bac6514b9_01EYRFJE3FJB4JKAZPAWCND3DY.315x0.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('8', 'Buenos huevo ', 'Kulo', '2024-12-23', 'Anoo', 'libro', 'Dolo', '0', '2024-12-23 19:37:10', '../src/img/2f92bc4b3ab104ab3765_01EYPE3FXTG07E7AGN2T4T2GV1.315x0.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('9', 'La verga verdadera ', 'El machete', '2024-12-23', 'Hhhh', 'libro', 'Gggh', '0', '2024-12-23 19:54:49', '../src/img/540052a53b4ec76a18d4f3e738ac4b61_01BD7K9JSP224VW6NK2AB3105V.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('10', 'Vghvh', 'El machete', '2024-12-24', 'Hhh', 'libro', 'Fgfggggg', '0', '2024-12-23 21:08:10', '../src/img/3f668891af3a652e0b3693ba1d540091_01BD7HVY394VB70WH4WNADYM7R.315x0.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('11', 'Gggg hhhhhhh jjjjj kkkkk', 'Vhvhhvjh jjbj jjj', '2024-12-24', 'Jjvjhj jjbjjbj jbjjjj', 'libro', ' V v v v v v. V ', '0', '2024-12-23 21:42:44', '../src/img/1733225152764.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('12', 'Peu', 'Pue', '2024-12-24', 'Pue', 'libro', 'Ppu', '0', '2024-12-24 11:21:19', './src/img/b5d8074adc5b1e50cec9cbb3f7f1185a_01BD7KREMEDN76Z2RGQM2PBC35.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('13', 'Vghvh', 'Vvv', '2024-12-24', 'Gggg', 'libro', 'Dfgggg', '0', '2024-12-24 13:53:17', './src/img/3957124f7139338a60e124ff1c898f75_01BD7KCK28FA5BWB9KZKPSWSM4.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('14', 'Vjjbbjbbjjjjjjjjjjjj', 'Kolu', '2024-12-24', 'Jolo', 'libro', 'Bjjjnj', '0', '2024-12-24 14:00:16', './src/img/234bff37138095002877f7e4384c98a9_01BD7JQJR7MRY15C4KXZQJ1BHE.315x0~2.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('15', 'Yyyyy6', 'Yyyyy', '2025-04-30', 'Yyyy', 'libro', 'Tttyttt', '0', '2025-04-30 09:21:54', './src/img/Screenshot_2025-04-24-15-13-21-478.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('16', '1111111', '11111', '2025-05-05', '11111', 'libro', '111111', '0', '2025-05-05 08:37:31', './src/img/1745435186715.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('17', '11111', '11111', '2025-05-05', '1111', 'libro', '1111111', '0', '2025-05-05 08:53:46', './src/img/3377409.picsmall.jpg');
INSERT INTO Contenidos (id, titulo, autor, fecha_publicacion, categoria, tipo_contenido, descripcion, popularidad, fecha_agregado, img_url) VALUES ('18', 'La verga verdadera ', 'Vvv', '2025-05-06', 'Gggg', 'libro', 'Jjj', '0', '2025-05-06 09:04:50', './src/img/3377409.picsmall.jpg');


CREATE TABLE `Historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `contenido_id` int(11) DEFAULT NULL,
  `fecha_accion` datetime DEFAULT current_timestamp(),
  `tipo_accion` enum('compra','descarga') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `contenido_id` (`contenido_id`),
  CONSTRAINT `Historial_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `Usuarios` (`id`),
  CONSTRAINT `Historial_ibfk_2` FOREIGN KEY (`contenido_id`) REFERENCES `Contenidos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `Noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `contenido` text NOT NULL,
  `fecha_publicacion` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `PreguntasFrecuentes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `Reseñas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenido_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `calificacion` int(11) DEFAULT NULL CHECK (`calificacion` between 1 and 5),
  `comentario` text DEFAULT NULL,
  `fecha_resena` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `contenido_id` (`contenido_id`),
  KEY `usuario_id` (`usuario_id`),
  CONSTRAINT `Reseñas_ibfk_1` FOREIGN KEY (`contenido_id`) REFERENCES `Contenidos` (`id`),
  CONSTRAINT `Reseñas_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `Usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `Soporte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_contacto` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;



CREATE TABLE `SubidaContenidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) DEFAULT NULL,
  `contenido_id` int(11) DEFAULT NULL,
  `estado` enum('en_revision','publicado','rechazado') NOT NULL DEFAULT 'en_revision',
  `fecha_subida` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`),
  KEY `contenido_id` (`contenido_id`),
  CONSTRAINT `SubidaContenidos_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `Usuarios` (`id`),
  CONSTRAINT `SubidaContenidos_ibfk_2` FOREIGN KEY (`contenido_id`) REFERENCES `Contenidos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('1', '1', '3', 'publicado', '2024-12-22 13:17:34');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('2', '3', '4', 'publicado', '2024-12-22 13:50:56');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('3', '7', '5', 'publicado', '2024-12-22 14:16:40');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('4', '3', '6', 'en_revision', '2024-12-22 14:22:13');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('5', '1', '7', 'en_revision', '2024-12-23 17:46:48');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('6', '1', '8', 'publicado', '2024-12-23 19:37:11');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('7', '1', '9', 'en_revision', '2024-12-23 19:54:49');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('8', '1', '10', 'publicado', '2024-12-23 21:08:10');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('9', '1', '11', 'en_revision', '2024-12-23 21:42:44');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('10', '1', '13', 'en_revision', '2024-12-24 13:53:17');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('11', '1', '14', 'en_revision', '2024-12-24 14:00:16');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('12', '1', '17', 'en_revision', '2025-05-05 08:53:46');
INSERT INTO SubidaContenidos (id, usuario_id, contenido_id, estado, fecha_subida) VALUES ('13', '1', '18', 'en_revision', '2025-05-06 09:04:50');


CREATE TABLE `Usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `fecha_registro` datetime DEFAULT current_timestamp(),
  `TipoDeUsuario` enum('Usuario','Administrador','Cliente') NOT NULL DEFAULT 'Usuario',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('1', 'Edgardhhhh', 'pateteedgard@gmail.com', '$2y$10$Bb/Av9NFOJuJ/6UQTR6GveL5X9nN8Sibo7iBBI9PdhYErUx9NtDFe', '2024-12-21 12:58:00', 'Administrador');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('2', 'Pep', '30117454cgcv', '$2y$10$876gsD3XjuFKS/tbmF2.Xe46vNXtRTntVAyQ1mXYW7n0VSi0I14CO', '2024-12-21 01:18:00', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('3', 'Piti', 'root', '$2y$10$U7XAjQbPThFqM.UDhvoS/OjxihAdBE0UzYHqSafTEG7hO7ZWfq1p.', '2024-12-21 01:21:00', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('4', 'Ffffff', 'ffffg', '$2y$10$cV7TCdwJFPbML9O9sYA/3enVPQmm97peTVPxrfJan9zI4IXS4VXZa', '2024-12-21 11:07:19', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('5', 'Wwww', 'yyyy', '$2y$10$8HZPgppozEhz.wWpVx0eK.2mPyLy334JNpZOQb6zi/.vpYeAwaNNO', '2024-12-21 15:07:17', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('7', 'yu', 'yu', '$2y$10$MD.BrNsy9aGikupje5rRseCOkTvXRLTZRqKPmDV3Nqow7VX4Rwqcy', '2024-12-21 16:14:19', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('8', 'Lo', 'Lo', '$2y$10$BjligS5Q4Hl47SM2yohknOMUlizlRvN/AmmPQl0WthnXgRsADoJ9O', '2024-12-24 10:53:58', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('9', 'Unknj', 'pateteedgard3@gmail.com', '$2y$12$gcpasvFjUQ0DEMfDyu3X4exZX9qzFV/1Md.cFnxep2c3xyjJLJNDa', '2025-05-06 16:39:07', 'Usuario');
INSERT INTO Usuarios (id, nombre, email, contrasena, fecha_registro, TipoDeUsuario) VALUES ('11', 'Edgard', 'patetedgard3@gmail.com', '$2y$12$Y6HOzuhj17.xI8K2XJwM1ui0uV2dC1Mjm8tgl9OJZE2UACuxkIYNm', '2025-05-07 09:49:35', 'Usuario');
