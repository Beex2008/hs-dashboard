 <?php
  2     $servername = "mysql-server";
  3     $username = "omambatagne";
  4     $password = "2aNHthUo5Zvn7CBYLK98";
  5     $dbname = "omambatagne_db";
  6
  7     // Create connection
  8     $conn = new mysqli($servername, $username, $password, $dbname);
  9
 10    // Check connection
 11    if ($conn->connect_error) {
 12    die("Connection failed: " . $conn->connect_error);
 13     }
 14
 15     $sql = "SELECT verkehrsmittel, prozentsatz_studierende, prozentsatz_beschaeftigte  FROM tägliche_wegezurhochschule";
 16    $result = $conn->query($sql);
 17
 18     #Initialisierung ders Arrays
 19   $array = [];
 20
 21   // output data of each row
 22    while($row = $result->fetch_assoc()) {
 23     $data[] = $row;
 24    }
 25
 26   echo json_encode($data);
 27  $conn->close();
 28 ?>
