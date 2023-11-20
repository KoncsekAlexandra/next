<?php
$sql = "CREATE TABLE adatok (
              id INT() AUTO_INCREMENT PRIMARY KEY,
              nev VARCHAR(30) NOT NULL,
              email VARCHAR,
              megjegyzes VARCHAR(255);
          )";

  // létrehozás sikerességének leellenőrzése
  if ($conn->query($sql) === false) {
    echo "Hiba a tábla létrehozása során: " . $conn->error;
  } else {
    echo "Sikeres a tábla létrehozása.";
  }

  INSERT INTO adatok (nev, email, megjegyzes)
  VALUES (nev, mail, megjegyzes);

?>