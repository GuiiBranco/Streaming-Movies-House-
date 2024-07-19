DROP DATABASE IF EXISTS Filmes;

CREATE DATABASE Filmes;

USE Filmes;

CREATE TABLE filme(
	id_filme INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    descricao VARCHAR(350) NOT NULL,
    capa VARCHAR(120) NOT NULL UNIQUE,
    arte VARCHAR(200) NOT NULL,
    classificacao CHAR(1) NOT NULL
);

CREATE TABLE lista(
	id_lista INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL UNIQUE
);

CREATE TABLE lista_filme(
	fk_filme INT UNIQUE NOT NULL,
    fk_lista INT UNIQUE NOT NULL,
    FOREIGN KEY (fk_filme) REFERENCES filme(id_filme),
    FOREIGN KEY (fk_lista) REFERENCES lista(id_lista)
);

-- Inserts da tabela--
INSERT INTO filme(nome, capa) VALUES ("O Círculo", "https://midias.imagemfilmes.com.br/capas/ac713c0b-0aa9-4e21-b07a-2d7b3f18d420_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Todo Tempo Que Temos", "https://midias.imagemfilmes.com.br/capas/8ce1814d-2826-4fd1-a666-11474cc1b94b_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Juntos E Enrolados", "https://midias.imagemfilmes.com.br/capas/8084539c-346f-4cac-80cd-e9851a4f5f26_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("O Apocalipse", "https://midias.imagemfilmes.com.br/capas/cd37448d-9641-4958-8c08-29fbce03c919_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("À Procura", "https://midias.imagemfilmes.com.br/capas/c00df41f-2510-443a-924c-dea2fb4e221c_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Café Society", "https://midias.imagemfilmes.com.br/capas/f181a8c5-be7c-4c4b-8392-8a18fee12d87_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Cães Selvagens", "https://midias.imagemfilmes.com.br/capas/739dfecb-cace-47cc-a319-17b992942788_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("O Porteiro", "https://midias.imagemfilmes.com.br/capas/09b3134a-981e-4f79-9daa-2b04e60222dd_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Carga Explosiva 3", "https://midias.imagemfilmes.com.br/capas/d67e68c0-9e81-4d3a-9ced-7523c0d17d35_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("1408", "https://midias.imagemfilmes.com.br/capas/ef25ae2d-1472-4acf-916c-a1999d18f02e_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Terrifier 2", "https://midias.imagemfilmes.com.br/capas/69f1d800-ff60-4687-9f0b-fd03faef87ee_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Pinóquio", "https://midias.imagemfilmes.com.br/capas/24eeb037-b3d9-4c93-bc62-e63d7ac0e557_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Carcereiros", "https://midias.imagemfilmes.com.br/capas/03997d27-3a3d-491b-a801-bbd401c4d2db_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Big Pai Big Filho", "https://midias.imagemfilmes.com.br/capas/f165fd1e-86a8-42e5-b43e-6d1a10f8506d_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Os Oito Odiados", "https://midias.imagemfilmes.com.br/capas/875f43e4-b4fb-41f2-be5a-c9dd68b3cde0_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Um Pouco De Caos", "https://midias.imagemfilmes.com.br/capas/8a3d0c2b-f6c8-4a8b-a521-1282846fe314_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("Simplesmente Acontece", "https://midias.imagemfilmes.com.br/capas/8b6e6fcc-88e8-4b56-9357-6b1cb4319d3a_m.jpg");
INSERT INTO filme(nome, capa) VALUES ("O Homem Duplicado", "https://midias.imagemfilmes.com.br/capas/032f3de5-aeb6-4812-9a27-145614bc68a8_m.jpg");