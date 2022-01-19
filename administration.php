<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_administration.css">
</head>
<body>

<?php
require_once 'connect.php';
session_start(); // $_SESSION - Démarrage d'une session
?>

 <!----------------------------------- HEADER ----------------------------------->

    <div id="header">
        <img src="images/logo.png" alt= Logo />

        <nav role="navigation">
            <div id="menuToggle">

                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <a>MENU</a>

                <ul id="menu">
                    <a href="index.php"><li>Acceuil</li></a>
                    <a href="registration.php"><li>Registration</li></a>
                    <a href="administration.php"><li>Administration</li></a>
                    <a href="logout.php"><li>Déconnexion</li></a>

                    <?php
                    echo "Bonjour " . $_SESSION['username'];
                    ?>
                    
                    <form action="dblogin.php" method="POST">
                        <div id="login">
                            <label for="username">Nom d'utilisateur</label>
                            <input type="text" name="username" id="username">
                        
                            <label for="password">Mot de passe</label>
                            <input type="text" name="password" id="password">

                            <input type="submit" name="submit" value="Log in" class='btn upd'>
                        </div> 
                    </form>
                </ul>
            </div>
        </nav>

        <div id="search">
            <label for="search"><br>
                <input type="search" id="search" value="Recherche"></input>   
            </label>
        </div>

    </div>

    <div id="content">

    <!----------------------------------- LAST RECETTE PHP ---------------------------->

<?php

$req = $db->query('SELECT * FROM `recettes` ORDER BY `id_recette` DESC LIMIT 1', PDO::FETCH_ASSOC);
foreach($req as $t)

?>

<!----------------------------------- LAST RECETTE HTML ---------------------------->

    <div id="recette_last">
        <h1>LAST RECETTE</h1><br>
        <img src="<?= $t['image'] ?>" alt= Recette_last /><br><br>
        <h1>ID:<?= $t['id_recette'] ?><br><?= $t['titre'] ?></h1><br>
    </div>

<!----------------------------------- LIST ARTICLE PHP ---------------------------->

<?php

$blog = $db->query('SELECT `id_recette`, `titre`, `prologue` FROM `recettes` ORDER BY `id_recette` ASC');

ob_start();

echo '<section>';
while ($recette = $blog->fetch(PDO::FETCH_ASSOC)) {
?>
    <div class="recette">
        <h2><?=$recette['titre']?></h2>
        <h3><?=$recette['prologue']?></h3>
        <div>
            <a href="update.php?id=<?=$recette['id_recette']?>" class="upd" target="_blank">Update</a>
            <a href="delete.php?id=<?=$recette['id_recette']?>" class="delete">Delete</a>
        </div>
    </div>
<?php
}
echo '</section>';


$content = ob_get_clean();
require 'views/template.php';

?>

        <!----------------------------------- NEW RECETTE ------------------------------>

        <div id="nouvelle_recette">
            <div id="formulaire_photo">
                <label for="avatar">Choisir une photo:</label>
                <input type="file"
                    id="avatar" name="avatar"
                    accept="image/png, image/jpeg">
                </input>
            </div>

            <div id="formulaire_recette">
                <h2>Nouvelle Recette</h2>
                <form action="dbcreate.php" method="POST">
                    <div>
                        <label for="titre">Titre</label>
                        <input type="text" name="titre" id="titre">
                    </div>
                    <div>
                        <label for="prologue">Prologue</label>
                        <textarea name="prologue" id="prologue" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <label for="contenu">Recette</label>
                        <textarea name="contenu" id="contenu" cols="30" rows="10"></textarea>
                    </div>

                    <h3>Détails Temps (En minutes)</h3>
                    <div>
                        <label for="temps_preparation">Préparation</label>
                        <input type="temps_preparation" name="temps_preparation" id="temps_preparation">
                    </div>
                    <div>
                        <label for="temps_repos">Repos</label>
                        <input type="temps_repos" name="temps_repos" id="temps_repos">
                    </div>
                    <div>
                        <label for="temps_cuisson">Cuisson</label>
                        <input type="temps_cuisson" name="temps_cuisson" id="temps_cuisson">
                    </div>

                    <h3>Difficulté (1;2;3)</h3>
                    <div>
                        <label for="difficulte">Difficulté</label>
                        <input type="difficulte" name="difficulte" id="difficulte">
                    </div>

                    <h3>Détails Ingrédiants</h3>
                    <div>
                        <label for="farine">Farine</label>
                        <input type="farine" name="farine" id="farine">
                        gr
                    </div>
                    <div>
                        <label for="oeuf">Oeuf</label>
                        <input type="oeuf" name="oeuf" id="oeuf">
                        pièce(s)
                    </div>
                    <div>
                        <label for="sucre">Sucre</label>
                        <input type="sucre" name="sucre" id="sucre">
                        gr
                    </div>
                    <div>
                        <label for="beurre">Beurre</label>
                        <input type="beurre" name="beurre" id="beurre">
                        gr
                    </div>
                    <div>
                        <label for="cannelle">Cannelle</label>
                        <input type="cannelle" name="cannelle" id="cannelle">
                        pièce(s)
                    </div>
                    <div>
                        <label for="levure">Levure</label>
                        <input type="levure" name="levure" id="levure">
                        gr
                    </div>
                    <div>
                        <label for="lait">Lait</label>
                        <input type="lait" name="lait" id="lait">
                        cl
                    </div>
                    <div>
                        <label for="sel">Sel</label>
                        <input type="sel" name="sel" id="sel">
                        pincée(s)
                    </div>

                    <input type="submit" name="submit" value="Enregistrer" class='btn upd'>
                </form>
            </div>

        </div>

    </div>

</body>
</html>