<?php
if (!empty($_POST)) {
    $servername = "localhost:3308";
    $username = "root";
    $password = "";

    try {
        $dbh = new PDO("mysql:host=$servername;dbname=tdw", $username, $password);
        // set the PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

//$stmt = $conn->prepare("SELECT id,volume_horaire,prix_ht,taux FROM formation ");
//$stmt -> execute();

    echo $_POST["id"];
    echo $_POST["volume_horaire"];
    echo $_POST["prix_ht"];
    echo $_POST["taux"];
    $stmt = $dbh->prepare("INSERT INTO typeformation (id, volume_horaire, prix_ht,taux) VALUES (?, ?, ?, ?)");
    $stmt->execute([$_POST['id'], $_POST["volume_horaire"], $_POST["prix_ht"], $_POST["taux"]]);
    $stmt = null;
}
