<?php

include "./controller/dbmanager.php";
$arr = [];
$stmt = $conn->prepare("SELECT id,volume_horaire,prix_ht,taux FROM formation ");
$stmt -> execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $arr[] = $row;
}
$stmt = null;

foreach ($arr as $var){
    $id = $var["id"];
    $prixhc = $var['prix_ht'];
    $taxe = $var['taux'];
    $ttc = $prixhc + ($prixhc * $taxe /100);


    $stmt = $conn->prepare("SELECT designation FROM type_formation WHERE id_typeformation = ? ");
    $stmt -> execute([$id]);
    $arr1 = null;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $arr1[] = $row['designation'];
    }


    $nombreligne = ($arr1 != null) ? count($arr1) : 0;
                    echo "<tr class=\"ligne\" id=\"".$var['type']."\">
                    <td rowspan='".$nombreligne."'>".$var['type']."</td>
                    <td>".$arr1[0]."</td>
                    <td><button>-</button></td>
                    <td rowspan='".$nombreligne."'>".$var['volume_horaire']."</td>
                    <td rowspan='".$nombreligne."'>".$prixhc."</td>
                    <td rowspan='".$nombreligne."'>".$taxe."</td>
                    <td rowspan='".$nombreligne."'>".$ttc."</td>
                    <td rowspan='".$nombreligne."'><button class=\"mod\" id='".$var['type']."'>M</button></td>
                    <td rowspan='".$nombreligne."'><button class=\"del\" id=\"".$var['type']."\">-</button></td>
                    <td rowspan='".$nombreligne."'><button class='add' id='".$var['type']."'>+</button></td>
                </tr>";
    if ($arr1 != null){
        for ($j=1;$j<count($arr1);$j++){
            echo "<tr>
                    <td>".$arr1[$j]."</td>
                    <td><button>-</button></td>
                </tr>";
        }
    }
}
?>
<script src="../public/jquery/jquery-3.3.1.js"></script>
<script src="../public/jquery/jquery-3.3.1.min.js"></script>


