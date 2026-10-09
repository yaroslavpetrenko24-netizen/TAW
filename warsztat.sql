CREATE OR REPLACE DATABASE warsztat;

CREATE OR REPLACE TABLE uslugi(
    id int PRIMARY KEY AUTO_INCREMENT,
    nazwa VARCHAR(50),
    cena DECIMAL(6,2)
);

CREATE OR REPLACE TABLE zgloszenia(
	id int PRIMARY KEY AUTO_INCREMENT,
    klient VARCHAR(60),
    nr_rejestracyjny VARCHAR(10),
    uslugi_id int,
    CONSTRAINT fk_uslugi FOREIGN KEY (uslugi_id) REFERENCES uslugi(id),
    opis TEXT
);

INSERT INTO uslugi(nazwa, cena) VALUES ("Wymiana oleju", 150.00), ("Wymiana klocków hamulcowych", 250.00), ("Diagnostyka komputerowa", 100.00);
