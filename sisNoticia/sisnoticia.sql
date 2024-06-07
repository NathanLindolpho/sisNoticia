CREATE TABLE `noticias` (
  `id` int NOT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `noticia` text,
  `imagem` varchar(255) DEFAULT NULL,
  `ipUsuario` varchar(40) DEFAULT NULL,
  `dataPostagem` datetime DEFAULT CURRENT_TIMESTAMP,
  `fk_Usuario_id` int DEFAULT NULL
) ENGINE=InnoDB;

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB;

ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Noticias_2` (`fk_Usuario_id`);

ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);


ALTER TABLE `noticias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
  

ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `noticias`
  ADD CONSTRAINT `FK_Noticias_2` FOREIGN KEY (`fk_Usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;




