<?php
session_start();
if (!empty($_SESSION)){
   /// var_export($_SESSION);
}
?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ComparateurEcole</title>
        <link href="../public/css/index.css" rel="stylesheet">


    </head>
    <body>
    <ul id="bar">
        <li id="ilogout" style="float:right; color: #f9f9f9" ><a href="logout.php">LOGOUT</a></li>
        <li id="ilogin" style="float:left; color: #f9f9f9" ><?php echo "\t ".$_SESSION["username"] ?></li>
    </ul>


    <header>
        <div>
            <h1 id="titre_page">Ecole Prive <bdo>مدرسة خاصة </bdo></h1>
        </div>
        <div class="image_acuille">
            <img class="image_acuille1" src="../public/image/image%20accueil.jpg" width="100%" height="250px">
        </div>
    </header>
    <ul class="formations">
        <?php
        include "liste.php";
        ?>
    </ul>


    <table id="table" border="1px solid">
        <thead>
        <tr>
            <td></td>
            <td>formation</td>
            <td></td>
            <td>Volume Horaire</td>
            <td>prixHC</td>
            <td>Taxe %</td>
            <td>prixTTC</td>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($_SESSION['type'] == 1) {
            include "table.php";
        }else if($_SESSION['type'] == 0){
           include "tablead.php";
        }
        ?>
        </tbody>
    </table>
        <div id="myModal" class="modal">

            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <label>Nom formation : </label>
                <input type="text" id="nom_formation" name="type"><br>
                <label>VolumeHoraire : </label>
                <input type="number" id="volume_horaire" name="volumeHc"><br>
                <label>prix Hc : </label>
                <input type="number" id="prixHc" name="prixhc"><br>
                <label>Taxe : </label>
                <input type="number" id="Taxe" name="taxe"><br>
                <button id="okBtn">Submit</button>

            </div>

        </div>



    <!-- <div id="video">
         <video class="video_p" width="50%" controls><source src="public/image/Video%20accueil.mp4" type="video/mp4"></video>
     </div> -->
    <h1>AJOUTER FORMATION</h1>
    <br>
    <?php
        if ($_SESSION["type"] ==0) {
            ?>
            <div style="display: inline-block">
                <button id="ajout_type_formation"> Ajouter Type_Formation</button>
            </div>

            <?php
        }
?>

    <footer>
        <div>
            <p><a href="esi@esi.dz">CONTACT</a></p>
        </div>



    </footer>


    <!--<script src="public/js/index.js"> </script>-->
    <script src="../public/jquery/jquery-3.3.1.js"></script>
    <script src="../public/jquery/jquery-3.3.1.min.js"></script>
    <script src="../public/jquery/index_query.js"></script>


    </body>
    </html>
