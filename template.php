<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_template.css">
</head>

<!----------------------------------- REQUEST DB ----------------------------------->

<?php

    require_once 'connect.php';

    //$id = $_GET['id'];

    $req = $db->query("SELECT * FROM `recettes` WHERE `id_recette` = '2'");
    $recette = $req->fetch(PDO::FETCH_ASSOC);

    //var_dump($req);
    //print_r($req);

?>

<body>

    <!----------------------------------- HEADER ----------------------------------->

    <div id="header">
        <img src="images/canelle_recette.jpg" alt= "Photo_Recette" />

        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <a>MENU</a>
      
                <ul id="menu">
                    <a href="index.html"><li>Acceuil</li></a>
                    <a href="XXX.html"><li>XXX</li></a>
                    <a href="XXX.html"><li>XXX</li></a>
                    <a href="XXX.html"><li>XXX</li></a>
                    <br>
                    <label for="user"><br>
                        <input type="user" id="user" value="User"></input>   
                    </label>
                    <label for="password"><br>
                        <input type="password" id="password" value="Password"></input>   
                    </label>
                    <button id="ok">Ok</button>
                </ul>
            </div>
        </nav>


        <div id="preambule_recette">
            <!--<img src="images/roulee_canelle_preambule.jpg" alt= Canelle />-->
            <img src="<?= $recette['image'] ?>" alt= "Photo_Recette" />
        </div>

    </div>

<!----------------------------------- CALCUL TEMPS TOTAL -------------------------------------->

<?php

    $temps = $recette['temps_préparation']+$recette['temps_repos']+$recette['temps_cuisson'];

?>

<!----------------------------------- BANDEREAU DETAILS TEMPS --------------------------------->

        <div id="technique_recette">

            <div id="temps_total">
                <p>Temps total: <?=$temps?> min</p>
            </div>
            <div id="trait"></div> <!---- DIV VIDE Trait de séparation ---->
            <div id="temps_préparation">
                <p>Préparation:<br><p><?= $recette['temps_préparation'] ?> min</p><br><br>
            </div>
            <div id="temps_repos">
                <p>Repos:<br><p><?= $recette['temps_repos'] ?> min</p><br><br>
            </div>
            <div id="temps_cuisson">
                <p>Cuisson:<br><p><?= $recette['temps_cuisson'] ?> min</p><br><br>
            </div>

        </div>

        <!----------------------------------- GRID INGREDIANTS ----------------------------------->

    <div id="content">

        <div id="grid_ingrédiant">

            <div id="ingrédiant_un">
                <img src="images/vignette_01.png" alt= ingrédiant_01 /><p><?= $recette['farine'] ?></p>
            </div>

            <div id="ingrédiant_deux">
                <img src="images/vignette_02.png" alt= ingrédiant_02 /><p><?= $recette['oeuf'] ?></p>
            </div>

            <div id="ingrédiant_trois">
                <img src="images/vignette_03.png" alt= ingrédiant_03 /><p><?= $recette['sucre'] ?></p>
            </div>

            <div id="ingrédiant_quatre">
                <img src="images/vignette_04.png" alt= ingrédiant_04 /><p><?= $recette['beurre'] ?></p>
            </div>

            <div id="ingrédiant_cinq">
                <img src="images/vignette_05.png" alt= ingrédiant_05 /><p><?= $recette['cannelle'] ?></p>
            </div>

            <div id="ingrédiant_six">
                <img src="images/vignette_06.png" alt= ingrédiant_06 /><p><?= $recette['levure'] ?></p>
            </div>

            <div id="ingrédiant_sept">
                <img src="images/vignette_07.png" alt= ingrédiant_07 /><p><?= $recette['lait'] ?></p>
            </div>

            <div id="ingrédiant_huit">
                <img src="images/vignette_08.png" alt= ingrédiant_08 /><p><?= $recette['sel'] ?></p>
            </div>

        </div>

        <!-----------------------  TITRE + RECETTE -------------------------------->

        <div id="titre">
            <h1><?= $recette['titre'] ?></h1>
        </div>

        <div id="explication_recette">
            <p><?= $recette['contenu'] ?></p>
        </div>

    </div>

    <div id="footer">
        <img src="images/footer.jpg" alt= Canelle_dans_pot />
    </div>

</body>
</html>