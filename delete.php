<?php
require_once 'connect.php';

$id = $_GET['id'];

$del = $db->query("DELETE FROM `recettes` WHERE `id_recette` = '$id'");
if($del){
    header('Location: administration.php');
} else {
    echo "AH PAS MARCHE !";
};