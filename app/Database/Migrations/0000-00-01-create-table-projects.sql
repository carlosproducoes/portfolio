CREATE TABLE projects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL
);

INSERT INTO projects
    (name, description, image)
VALUES
    ('SISTEMA FINANCEIRO', 'Sistema financeiro tanto pessoal quanto empresarial', 'images/teste.jpeg');