 <?php
 // Verbindungsdaten zur Datenbank
  $servername = "mysql-server";
   $username = "omambatagne";
    $password = "";
    $dbname = "omambatagne_db";
 
   // Verbindung zur Datenbank herstellen
   $conn = new mysqli($servername, $username, $password, $dbname);

  // Überprüfen, ob die Verbindung erfolgreich hergestellt wurde
  if ($conn->connect_error) {
      die("Verbindung fehlgeschlagen: " . $conn->connect_error);
 }
 
  // Die Daten aus dem Formular erhalten
  $userGroup = $_POST['userGroup'];
  $verkehrsmittel = $_POST['verkehrsmittel'];
 $field1 = $_POST['field']; // Feld 1
  $field2 = $_POST['field2']; // Feld 2
  $field3 = $_POST['field3']; // Feld 3
  $field4 = $_POST['field4']; // Feld 4
  $field5 = $_POST['field5']; // Feld 5
 $field6 = $_POST['field6']; // Feld 6
 
 
  // SQL-Befehl zum Einfügen der Daten in die Datenbank
  $sql = "INSERT INTO form_data (userGroup, verkehrsmittel,field1, field2, field3, field4, field5, field6) VALUES ('$userGroup', '$verkehrsmittel', '$field1', '$field2',     '$field3', '$field4', '$field5', '$field6')";
 
  // Überprüfen, ob die Daten erfolgreich eingefügt wurden
 if ($conn->query($sql) === TRUE) {
     echo "Daten erfolgreich in die Datenbank eingefügt";
  } else {
     echo "Fehler beim Einfügen der Daten: " . $conn->error;
 }

 // Verbindung zur Datenbank schließen
  $conn->close();
?>
