<?php
session_start(); // $_SESSION - Démarrage d'une session
require_once 'connect.php';




if(isset($_POST['username']) && isset ($_POST['password'])) {

    $req_user = "SELECT * FROM `users` WHERE username = :username";

    $resultat = $db->prepare($req_user);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashPassword = password_hash($password, PASSWORD_BCRYPT);
    $resultat->execute(array("username" => $username));
    $result = $resultat->fetchAll(PDO::FETCH_ASSOC);
    var_dump($resultat);

    if ($resultat->rowcount() == 1) {
        if (password_verify($_POST['password'],$result[0]['password'])){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $hashPassword;
            $authOK = true;
        
        }
        else {
            echo "AH PAS MARCHE !";
            var_dump($_SESSION);
            print_r($_SESSION);

            var_dump($resultat);
            print_r($resultat);

    }
}

};

?>

<html>
<head>
    <meta charset="UTF-8" />
    <title>Résultat de l'authentification</title>
</head>
<body>
    <h1>Résultat de l'authentification</h1>
    <?php
    if (isset($authOK)) {
        echo "<p>Vous avez été reconnu(e) en tant que " . $username . "</p>";
        echo '<a href="administration.php">Administration</a>';
    }
    else { ?>
        <p>Vous n'avez pas été reconnu(e)</p>
        <p><a href="index.php">Nouvel essai</p>
    <?php } ?>
</body>
</html>