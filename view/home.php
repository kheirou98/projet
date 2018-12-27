<?php
  session_start();
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  else{
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  /******************************************************/
  $dbh = new PDO('mysql:host=localhost:3308;dbname=tdw', "root", "");
$formationsQuery = $dbh->query('SELECT * FROM typeFormation');
while ($row = $formationsQuery->fetch()) {
    $formations[] = $row; // Inside while loop
}
$dropDownQuery = $dbh->query('SELECT * FROM formation');
while ($row = $dropDownQuery->fetch()) {
    $drop[$row['typeFormationId']][] = $row;
}
    if(isset($_POST['submit'])){
        $text = $_POST['text'];
        $heure = $_POST['heure'];
        $ht = $_POST['ht'];
        $taxe= $_POST['taxe'];
        $q="INSERT INTO typeFormation (nom, volumeHorraire, prixht,taux) VALUES ('$text', '$heure', '$ht', '$taxe')";
        $dbh->query($q);
    }
	if(isset($_POST['submit-type'])){
		$type = $_POST['type1'];

		$formationstypeQuery = $dbh->query("SELECT id FROM typeFormation WHERE nom='$type'");
	    $form= $formationstypeQuery->fetch();

		$name = $_POST['name'];
		$s="INSERT INTO formation (nom,typeFormationId) VALUES ('$name', '$form[0]')";
        $dbh->query($s);
  }}
?>

<!DOCTYPE html>
<html class="html">
<style>
<meta charset="utf16_general-ci">
</style>
<link href="../public/css/login.css" rel="stylesheet" type="text/css" />
<head>
	<title>Home</title>

</head>
<body>
<div class="header">
	<h2>Home Page</h2>
</div>
<form action="home.php" method="post">
    <h1 align="center">Ajout d'un type d'une formation</h1>
    <hr>

	   <div class="input-group">
         <label for="text">Nom de la formation </label>
		 <input type="text" id="text" name="text" required><br>
		</div>
	   <div class="input-group">
         <label for="heure">Volume horraire</label>
		 <input type="text" id="heure" name="heure"><br>
	   </div>
	   <div class="input-group">
         <label for="ht">Prix HT</label>
		 <input type="text" id="ht" name="ht"><br>
	   </div>
	   <div class="input-group">
         <label for="taxe">Taxe</label>
	   <input type="text" id="taxe" name="taxe"><br>
	    </div>
	   <div class="input-group">
         <input type="submit" name="submit" ></input>
		 </div>

    <hr>

</form></br>
<div class="header">
    	<h2>Home Page</h2>
    </div>
<form action="home.php" method="post">
    <h1 align="center">Ajout d'une formation</h1>
    <hr>
	   <div class="input-group">
         <label for="text">Nom de la formation </label>
		 <input type="text" id="text" name="name" required><br>
		</div>
	   <div class="input-group">
         <label for="text">Indiquer le type </label>
		 <input type="text" id="text" name="type1" required><br>
		</div>
	   <div class="input-group">
         <input type="submit" name="submit-type" ></input>
		 </div>
    <hr>
</form>
<div class="sticky">
    <ul>
        <?php foreach ($formations as $row) { ?>
            <li>
                <a>
                    <?php echo $row['nom']; ?>
                </a>
                <?php
                if (isset($drop[$row["id"]])) {
                    echo '<div>';
                    foreach ($drop[$row["id"]] as $row2)
                        echo "<p href=''>" . $row2["nom"] . "</p>";
                    echo '</div>';
                }
                ?>
            </li>
        <?php } ?>

    </ul>
</div>
</body>
</html>