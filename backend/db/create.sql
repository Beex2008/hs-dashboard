CREATE DATABASE IF NOT EXISTS knzilewis_db;
USE knzilewis_db;

-- Erstellen der Tabelle 'UserGruppe'
CREATE TABLE UserGruppe (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    usergruppe_anzahl INT NOT NULL
);

-- Erstellen der Tabelle 'ArtVerkehrsmittel'
CREATE TABLE ArtVerkehrsmittel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Erstellen der Tabelle 'Verkehrsmittel'
CREATE TABLE Verkehrsmittel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    artverkehrsmittel_id INT NOT NULL,
    usergruppe_id INT NOT NULL,
    eisenbahn_nah DECIMAL(10,2),
    eisenbahn_fern DECIMAL(10,2),
    eisenbahn_mix DECIMAL(10,2),
    pkw DECIMAL(10,2),
    straßen_bahn DECIMAL(10,2),
    linienbus DECIMAL(10,2),
    reisebus DECIMAL(10,2),
    oepnv_mix DECIMAL(10,2),
    flugzeug_inland DECIMAL(10,2),
    flugzeug_ausland DECIMAL(10,2),
    motorrad DECIMAL(10,2),
    fahrrad DECIMAL(10,2),
    co2emissionen DECIMAL(10,2),
    fahrstrecke_pro_reise DECIMAL(10,2),
    FOREIGN KEY (artverkehrsmittel_id) REFERENCES ArtVerkehrsmittel(id),
    FOREIGN KEY (usergruppe_id) REFERENCES UserGruppe(id)
);

