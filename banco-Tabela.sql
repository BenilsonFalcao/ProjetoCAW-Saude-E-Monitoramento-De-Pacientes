CREATE TABLE paciente (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    imc FLOAT NOT NULL,
    pressao_sistolica INT NOT NULL
);
