<?php

require_once 'connect.php';

$id = $_GET['id'];

$thisArticle = $db->query("SELECT * FROM `recettes` WHERE `id_recette` = $id");
$post = $thisArticle->fetch(PDO::FETCH_ASSOC);

ob_start();

?>

<div id="formulaire_recette">
    <h2>ID: <?= $post['id_recette'] ?></h2>
    <form action="dbupdate.php" method="POST">
    <input type="hidden" name="id_recette" id="id_recette" value="<?= $post['id_recette']?>">
        <div>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?= $post['titre'] ?> ">
        </div>
        <div>
            <label for="prologue">Prologue</label>
            <textarea name="prologue" id="prologue" cols="30" rows="10"><?= $post['prologue']?></textarea>
        </div>
        <div>
            <label for="contenu">Recette</label>
            <textarea name="contenu" id="contenu" cols="30" rows="10"><?= $post['contenu']?></textarea>
        </div>

        <h3>Détails Temps (En minutes)</h3>
        <div>
            <label for="temps_preparation">Préparation</label>
            <input type="temps_preparation" name="temps_preparation" id="temps_preparation" value="<?= $post['temps_preparation'] ?> ">
        </div>
        <div>
            <label for="temps_repos">Repos</label>
            <input type="temps_repos" name="temps_repos" id="temps_repos" value="<?= $post['temps_repos'] ?> ">
        </div>
        <div>
            <label for="temps_cuisson">Cuisson</label>
            <input type="temps_cuisson" name="temps_cuisson" id="temps_cuisson" value="<?= $post['temps_cuisson'] ?> ">
        </div>

        <h3>Difficulté (1;2;3)</h3>
        <div>
            <label for="difficulte">Difficulté</label>
            <input type="difficulte" name="difficulte" id="difficulte" value="<?= $post['difficulte'] ?> ">
        </div>

        <h3>Détails Ingrédiants</h3>
        <div>
            <label for="farine">Farine</label>
            <input type="farine" name="farine" id="farine" value="<?= $post['farine'] ?> ">
            gr
        </div>
        <div>
            <label for="oeuf">Oeuf</label>
            <input type="oeuf" name="oeuf" id="oeuf" value="<?= $post['oeuf'] ?> ">
            pièce(s)
        </div>
        <div>
            <label for="sucre">Sucre</label>
            <input type="sucre" name="sucre" id="sucre" value="<?= $post['sucre'] ?> ">
            gr
        </div>
        <div>
            <label for="beurre">Beurre</label>
            <input type="beurre" name="beurre" id="beurre" value="<?= $post['beurre'] ?> ">
            gr
        </div>
        <div>
            <label for="cannelle">Cannelle</label>
            <input type="cannelle" name="cannelle" id="cannelle" value="<?= $post['cannelle'] ?> ">
            pièce(s)
        </div>
        <div>
            <label for="levure">Levure</label>
            <input type="levure" name="levure" id="levure" value="<?= $post['levure'] ?> ">
            gr
        </div>
        <div>
            <label for="lait">Lait</label>
            <input type="lait" name="lait" id="lait" value="<?= $post['lait'] ?> ">
            cl
        </div>
        <div>
            <label for="sel">Sel</label>
            <input type="sel" name="sel" id="sel" value="<?= $post['sel'] ?> ">
            pincée(s)
        </div>

        <input type="submit" name="submit" value="Mettre à jour" class='btn upd'>
    </form>
</div>

<?php

$content = ob_get_clean();

echo '<a href="administration.php" class="btn" style="margin-top:50px;float:right">Retour</a>';
require './views/template.php';

?>
