--CREATE DATABASE IF NOT EXISTS knzilewis_db;
USE knzilewis_db;

-- Erstellen der Tabelle 'UserGruppe'
--CREATE TABLE UserGruppe (
--    id INT AUTO_INCREMENT PRIMARY KEY,
--    name VARCHAR(255) NOT NULL,
--    usergruppe_anzahl INT NOT NULL
--);

-- Erstellen der Tabelle 'ArtVerkehrsmittel'
--CREATE TABLE ArtVerkehrsmittel (
--    id INT AUTO_INCREMENT PRIMARY KEY,
--    name VARCHAR(255) NOT NULL
--);

-- Erstellen der Tabelle 'Verkehrsmittel'
CREATE TABLE Verkehrsmittel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artverkehrsmittel_id INT NOT NULL,
    usergruppe_id INT NOT NULL,
    zufuss DECIMAL(10,2),
    fahrrad DECIMAL(10,2),
    eigenesfahrrad DECIMAL(10,2),
    dienstpkw DECIMAL(10,2),
    motorrad DECIMAL(10,2),
    busbahn DECIMAL(10,2),
    schiff DECIMAL(10,2),
    bus DECIMAL(10,2),
    bahn DECIMAL(10,2),
    flugzeug DECIMAL(10,2),
    pkw DECIMAL(10,2),
    opnv DECIMAL(10,2),
    parkride DECIMAL(10,2),
    fahrstrecke_pro_reise DECIMAL(10,2),
    FOREIGN KEY (artverkehrsmittel_id) REFERENCES ArtVerkehrsmittel(id),
    FOREIGN KEY (usergruppe_id) REFERENCES UserGruppe(id)
);

