<?php
require_once 'connect.php';

$titre = $_POST['titre'];
$prologue = $_POST['prologue'];
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
$created = $db->prepare('INSERT INTO `recettes` (titre, prologue, contenu, temps_preparation, temps_repos, temps_cuisson, difficulte, farine, oeuf, sucre, beurre, cannelle, levure, lait, sel)
VALUES (:titre, :prologue, :contenu, :temps_preparation, :temps_repos, :temps_cuisson, :difficulte, :farine, :oeuf, :sucre, :beurre, :cannelle, :levure, :lait, :sel)');
    $created->execute([
        'titre' => $titre,
        'prologue' => $prologue,
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

if($created){
    header('Location: administration.php');
} else {
    echo "AH PAS MARCHE...";
    var_dump($created);
    print_r($created);
};