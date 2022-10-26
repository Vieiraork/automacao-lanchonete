CREATE TABLE usuario (
	`id_usuario` INT AUTO_INCREMENT,
    `no_usuario` VARCHAR(50),
    `senha` VARCHAR(255),
    `dt_registro` DATE,
    `dt_alteracao` DATE,
    PRIMARY KEY (`id_usuario`)
);

CREATE TABLE combos (
	`id_combo` INT AUTO_INCREMENT,
    `cd_combo` VARCHAR(10),
    `dt_criacao` DATE,
    `dt_alteracao` DATE,
	`qtd_combo` INT,
    PRIMARY KEY (`id_combo`),
    UNIQUE KEY (`cd_combo`)
);