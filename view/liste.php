<?php

//include "../controller/dbmanager.php";

$servername = "localhost:3308";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tdw", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$stmt = $conn->prepare("SELECT designation FROM type_formation");
$stmt -> execute();

$arr = [];
$arr1 = [];
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row['type'];
}
$stmt = null;
for ($i=0;$i<count($arr);$i++){

    echo "<li class=\"dropdown\">
            <a href=\"#\" class=\"lien\">".$arr[${'i'}]."</a>
            <div class=\"dropdown-content\">";


    $stmt = $conn->prepare("SELECT designation FROM type_formation WHERE id_typeformation = ? ");
    $stmt -> execute([${'i'}+1]);

    $arr1 = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr1[] = $row['designation'];
    }
    for ($j=0;$j<count($arr1);$j++) {
        echo "<p><a href=\"#\" class=\"lien\">".$arr1[${'j'}]."</a></p>";
    }
    $stmt = null;
    echo "</div>
        </li>";


}

