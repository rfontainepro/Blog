<?php
require_once 'connect.php';

$id = $_POST['id_recette'];
$titre = $_POST['titre'];
$content = $_POST['contenu'];

$temps_preparation = $_POST['temps_preparation'];
$temps_repos = $_POST['temps_repos'];
$temps_cuisson = $_POST['temps_cuisson'];

$difficulte = $_POST['difficulte'];

$farine = $_POST['farine'];
$oeuf = $_POST['oeuf'];
$sucre = $_POST['sucre'];
$beurre = $_POST['beurre'];
$cannelle = $_POST['cannelle'];
$levure = $_POST['levure'];
$lait = $_POST['lait'];
$sel = $_POST['sel'];


if(isset($_POST['submit'])) {
    $edited = $db->prepare('UPDATE recettes SET titre = :titre,
                                                contenu = :contenu,
                                                temps_preparation = :temps_preparation,
                                                temps_repos = :temps_repos,
                                                temps_cuisson = :temps_cuisson,
                                                difficulte = :difficulte,
                                                farine = :farine,
                                                oeuf = :oeuf,
                                                sucre = :sucre,
                                                beurre = :beurre,
                                                cannelle = :cannelle,
                                                levure = :levure,
                                                lait = :lait,
                                                sel = :sel
                                                WHERE id_recette = :id');

    $edited->execute([
        
        'id' => $id,
        'titre' => $titre,
        'contenu' => $content,
        'temps_preparation' => $temps_preparation,
        'temps_repos' => $temps_repos,
        'temps_cuisson' => $temps_cuisson,
        'difficulte' => $difficulte,
        'farine' => $farine,
        'oeuf' => $oeuf,
        'sucre' => $sucre,
        'beurre' => $beurre,
        'cannelle' => $cannelle,
        'levure' => $levure,
        'lait' => $lait,
        'sel' => $sel,
    ]);

}

if($edited){
    header('Location: administration.php');
} else {
    echo "AH PAS MARCHE...";
    var_dump($edited);
    print_r($edited);
};