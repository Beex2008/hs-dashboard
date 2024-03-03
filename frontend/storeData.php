<?php
$servername = "mysql-server";
$username = "knzilewis";
$password = "XaUfTpCfXtN2J5yHOtk3";
$dbname = "knzilewis_db";

// Connect to db
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Verbindung fehlgeschlagen: " . $conn->connect_error);
}

// Store data in variables and check for existing
$userGroup = $_POST['userGroup'] ?? NULL;
$verkehrsmittel = $_POST['verkehrsmittel'] ?? NULL;
$zufuss = $_POST['ZuFuß'] !== '' ? $_POST['ZuFuß'] : 0.00;
$fahrrad = $_POST['Fahrrad'] !== '' ? $_POST['Fahrrad'] : 0.00;
$eigenesfahrrad = $_POST['EigenemPKW'] !== '' ? $_POST['EigenemPKW'] : 0.00;
$dienstpkw = $_POST['Dienst-PKW'] !== '' ? $_POST['Dienst-PKW'] : 0.00;
$motorrad = $_POST['Motorrad'] !== '' ? $_POST['Motorrad'] : 0.00;
$busbahn = $_POST['Bus&Bahn'] !== '' ? $_POST['Bus&Bahn'] : 0.00;
$schiff = $_POST['Schiff'] !== '' ? $_POST['Schiff'] : 0.00;
$bus = $_POST['Bus'] !== '' ? $_POST['Bus'] : 0.00;
$bahn = $_POST['Bahn'] !== '' ? $_POST['Bahn'] : 0.00;
$flugzeug = $_POST['Flugzeug'] !== '' ? $_POST['Flugzeug'] : 0.00;
$pkw = $_POST['PKW'] !== '' ? $_POST['PKW'] : 0.00;
$opnv = $_POST['ÖPNV/Bahn'] !== '' ? $_POST['ÖPNV/Bahn'] : 0.00;
$parkride = $_POST['Park&Ride'] !== '' ? $_POST['Park&Ride'] : 0.00;



$sql = "INSERT INTO Verkehrsmittel (artverkehrsmittel, usergruppe, zufuss, fahrrad, eigenesfahrrad, dienstpkw, motorrad, busbahn, schiff, bus, bahn, flugzeug, pkw, opnv, parkride) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


$stmt = $conn->prepare($sql);


if (!$stmt) {
    // output the error if it's wrong
    die("Erreur de préparation: " . $conn->error);
}

// bind the parameter 
$stmt->bind_param("sssssssssssssss", $verkehrsmittel, $userGroup, $zufuss, $fahrrad, $eigenesfahrrad, $dienstpkw, $motorrad, $busbahn, $schiff, $bus, $bahn, $flugzeug, $pkw, $opnv, $parkride);

// Execute the request
if ($stmt->execute()) {
    echo "Daten erfolgreich in die Datenbank eingefügt";
} else {
    echo "Fehler beim Einfügen der Daten: " . $stmt->error;
}

//ini_set('display_errors', 1);
//error_reporting(E_ALL);
?>

