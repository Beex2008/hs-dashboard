<?php
$servername = "mysql-server";
$username = "knzilewis";
$password = "XaUfTpCfXtN2J5yHOtk3";
$dbname = "knzilewis_db";

//connect to db
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// store data in variables
$userGroup = $_POST['userGroup'];
$artverkehrsmittel = $_POST['verkehrsmittel'];

// for user group: Beschäftigte + Dienstwege
$zufuss = $_POST['ZuFuß'];
$fahrrad = $_POST['Fahrrad']; 
$eigenesfahrrad = $_POST['EigenemPKW']; 
$dienstpkw = $_POST['Dienst-PKW']; 
$motorrad= $_POST['Motorrad']; 
$busbahn = $_POST['Bus&Bahn']; 

// for user group : Beschäftigte + Dienstreise
$schiff = $_POST['Schiff'];
$bus = $_POST['Bus'];
$bahn = $_POST['Bahn'];
$flugzeug = $_POST['Flugzeug'];

// for user group : all/studierende
$pkw = $_POST['PKW'];
$opnv = $_POST['ÖPNV/Bahn'];
$parkride = $_POST['Park&Ride'];


$sql = "INSERT INTO Verkehrsmittel(id, artverkehrsmittel_id, usergruppe_id, zufuss, fahrrad, eigenesfahrrad, dienstpkw, motorrad, busbahn, schiff, bus, bahn, flugzeug, pkw, opnv, parkride, fahrstrecke_pro_reise) VALUES ('$verkehrsmittel', '$userGroup', '$zufuss', '$fahrrad', '$eigenesfahrrad', '$dienstpkw', '$motorrad','$busbahn','$schiff', '$bus', '$bahn', '$flugzeug', '$pkw', '$opnv', '$parkride','')";


// verify if data is successful sended
if ($conn->query($sql) === TRUE) {
  echo "Daten erfolgreich in die Datenbank eingefügt";
} else {
  echo "Fehler beim Einfügen der Daten: " . $conn->error;
}

$conn->close();
?>
