-- Einfügen von Werten in 'UserGruppe'
INSERT INTO UserGruppe (name, usergruppe_anzahl) VALUES 
('Studierende', 1500),
('Beschäftigte', 300),
('Lehrbeauftragte', 100);

-- Einfügen von Werten in 'ArtVerkehrsmittel'
INSERT INTO ArtVerkehrsmittel (name) VALUES 
('Tägliche Dienstwege'),
('Tägliche Wege'),
('Dienstreise'),
('Jährliche Fahrzeugkilometer');

-- Einfügen von Werten in 'Verkehrsmittel'
INSERT INTO Verkehrsmittel (name, artverkehrsmittel_id, usergruppe_id, co2emissionen, fahrstrecke_pro_reise) VALUES 
('Eisenbahn Fernverkehr', 3, 2, 11.00, 300.00),
('Fahrrad', 2, 3, 0.00, 5.00),
('Pkw (alle, Mittelwert)', 1, 2, 200.00, 15.00),
('Eisenbahn Nahverkehr', 1, 1, 64.00, 10.00),
('Eisenbahn Fernverkehr', 1, 1, 11.00, 300.00),
('Eisenbahn-Mix', 1, 1, 33.00, 50.00),
('Straßen-, S- und U-Bahn', 1, 1, 52.00, 12.00),
('Linienbus', 1, 1, 55.00, 8.00),
('ÖPNV-Mix', 1, 1, 54.00, 20.00),
('Reisebus', 1, 1, 44.00, 250.00),
('Flugzeug (Inland)', 1, 1, 236.00, 500.00),
('Flugzeug (Ausland)', 1, 1, 153.00, 1000.00),
('Motorrad', 1, 1, 106.00, 20.00);
