<!DOCTYPE html>
<!--?php
while ($row = $formationsQuery->fetch()) {
    $formations[] = $row; // Inside while loop
}
$dropDownQuery = $dbh->query('SELECT * FROM formation');
while ($row = $dropDownQuery->fetch()) {
    $drop[$row['typeFormationId']][] = $row;
}
?-->
<html class="html">
<style>
<meta charset="UTF-8">
</style>
<head>
  <ul id="bar">
        <li id="ilogin" style="float:right"><a href="view/login.php">Log in</a></li>
    </ul>
<title> Premier site</title>
<link href="public/css/style.css" rel="stylesheet" type="text/css" />
<h1 class="titre" align="center"> Ecole privée <bdi> المدرسة  الخاصة </bdi></h1>
<img class = "image" src="public/Image/image_accueil.jpg" alt="photo d'accueil" title="accueil"  />
</head>
<section>
<div class="diaporama">
	</div>
<div>
<p id="txt">
Liste des formations de l'école :
<ul>
<li><a class= "lien" href="http://www.esi.dz" target="_blank">Bureautique </a></li>
<li><a class= "lien" href="http://www.esi.dz" target="_blank">Inforgraphie </a></li>
<li><a class= "lien" href="http://www.esi.dz" target="_blank">Langues </a></li>
<li><a class= "lien" href="http://www.esi.dz" target="_blank">Management</a></li>
<li><a class= "lien" href="http://www.esi.dz" target="_blank">Comptabilité </a></li>
</ul>
</p>
</div>
<div class="video">
<video src="public/Vidéo/Video_accueil.mp4"  preload="auto" controls="autoplay">
</video>
</div>
<table  id="tableau" class = "tableau" border="1px" style="background-color: lightGray">
<thead>
<tr>
<th class="entete" scope="col">Formation (heures)</th>
<th class="entete" scope="col">volume horaire(heures)</th>
<th class="entete" scope="col">Prix HT(DA)</th>
<th class="entete" scope="col">Taux de la taxe (%)</th>
<th class="entete" scope="col">Prix TTC (DA)</th>
</tr>
</thead>
<tbody align="center">
<tr>
<td class="entete2" scope="row">Bureautique</td>
<td style="background-color: red">5</td>
<td class='prix'>2500</td>
<td class='taxe'  style="background-color: white">17</td>
<td class="resultat"> </td>
</tr>
<tr>
<td class="entete2" scope="row">Inforgraphie</td>
<td style="background-color: red">5</td>
<td class="prix">1500</td>
<td class='taxe'  style="background-color: white">17</td>
<td class="resultat"></td>
</tr>
<tr>
<td class="entete2" scope="row">Langues</td>
<td>2</td>
<td class="prix"style="background-color: yellow">1600</td>
<td class="taxe">0</td>
<td class="resultat" style="background-color: yellow"></td>
</tr><tr>
<td class="entete2" scope="row">Management</td>
<td style="background-color: green">4</td>
<td class="prix">1650</td>
<td class="taxe" style="background-color: blue">19</td>
<td class="resultat"></td></tr><tr>
<td class="entete2" scope="row">Comptabilité</td>
<td  style="background-color: green">4</td>
<td class="prix">1700</td>
<td class="taxe"  style="background-color: blue">19</td>
<td class="resultat"></td>
</tr><tr>
</tr></tbody>
</table>
<meta http-equiv="pragma" content="no-cache"/>
<div>
        <button id="ajout_formation"> Ajouter Formation</button>
    </div>
	<div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <label>Nom formation : </label>
            <input type="text" id="nom_formation"><br>
            <label>Volume Horaire : </label>
            <input type="number" id="volume_horaire"><br>
            <label>Prix Hors Taxe : </label>
            <input type="number" id="prixHc"><br>
            <label>Taxe :</label>
            <input type="number" id="Taxe"><br>
            <button id="ok">OK</button>
        </div>
    </div>
    <!--table id="table" border="1px solid">
            <thead>
            <tr>
                <td>Formation</td>
                <td>Volume Horaire</td>
                <td>Prix hors taxe</td>
                <td>Taux de la taxe % </td>
                <td>Prix TTC</td>
            </tr>
            </thead>
            <tbody>
            <?php
               include "/view/tablead.php";
            ?>
            </tbody>
        </table-->

	<!--?php
                    include "view/tablead.php";
                    ?-->
<script src="public/jquery/jquery-3.3.1.min.js" > </script>
<script src="public/jquery/jquery-3.3.1.js" > </script>
<script src="public/jquery/calcul.js"> </script>
</section>
<footer>
<p> Contactez nous en cliquant <a class= "lien" href="http://www.esi.dz" target="_blank">ici</a>
</p>
</footer>
</html>
