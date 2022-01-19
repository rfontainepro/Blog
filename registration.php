<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/main.css">
    <title>Registration</title>
</head>
<body>
    <section>
        <div class="form-wrapper form-user">
            <h2>Nouvel utilisateur</h2>
            <form action="dbregistration.php" method="POST">
                <div>
                    <label for="username">Nom utilisateur</label>
                    <input type="text" name="username" id="username">
                </div>
                <div>
                    <label for="password">Création du mot de passe</label>
                    <input type="text" name="password" id="password">
                </div>
                <input type="submit" name="submit" value="S'enregistrer" class='btn upd'>
            </form>
        </div>
    </section>
</body>
</html>