<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
    require_once 'connect.php';
    session_start(); // $_SESSION - Démarrage d'une session
?>

<body>

   <!----------------------------------- HEADER ----------------------------------->

    
    <div id="header">
        <img src="images/canelle_background.jpg" alt= Canelle />

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

        <div id="difficulte_recette">
            <p>Difficulté Recette:</p>

            <div>
                <input type="radio" id="facile" name="drone" value="facile"checked>
                <label for="facile">Facile</label>
            </div>

            <div>
                <input type="radio" id="moyen" name="drone" value="moyen">
                <label for="moyen">Moyen</label>
            </div>

            <div>
                <input type="radio" id="dur" name="drone" value="dur">
                <label for="dur">Dur</label>
            </div>
        </div>

        <div id="search">
            <label for="search"><br>
                <input type="search" id="search" value="Recherche"></input>   
            </label>
        </div>

    </div>


   <!----------------------------------- GRID RECETTES ----------------------------------->

    <div id="content">

        <div id="grid_recettes">

            <div id="recette_un">
                <img src="images/roulee_cannelle.png" alt= Recette_01 /><br><br>
                <h1>Roulé à la cannelle</h1><br><br>
                <p>On part pour le Portugal cette recette maison tellement moelleuse, un dessert tellement bon, tellement irrésistible !</p>
                <br><button class="button_01"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_deux">
                <img src="images/cake_cannelle_pommes.png" alt= Recette_02 /><br><br>
                <h1>Cake Pommes Cannelle</h1><br><br>
                <p>Un cake avec peu de beurre mais très savoureux et très facile à faire !</p>
                <br><br><button class="button_02"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_trois">
                <img src="images/tarte_pommes_cannelle.png" alt= Recette_07 /><br><br>
                <h1>Tarte<br> aux pommes</h1><br><br>
                <p>Tarte aux pommes légère avec.... De la cannelle ! Idéal avec un grand café !</p>
                <br><br><button class="button_03"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_quatre">
                <img src="images/pain_perdu.png" alt= Recette_08 /><br><br>
                <h1>Pain<br> Perdu "retrouvé"</h1><br><br>
                <p>Un pain “retrouvé” que vous saurez apprécier par sa douceur en compagnie de vos enfants !</p>
                <br><button class="button_04"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_cinq">
                <img src="images/sablé.png" alt= Recette_05 /><br><br>
                <h1>Sablé<br> au Chocolat</h1><br><br>
                <p>Ces sablés à la cannelle sont trempés à moitié dans du chocolat noir fondu. Un visuel et un goût surprenants !</p>
                <br><button class="button_05"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_six">
                <img src="images/briquette_noix.png" alt= Recette_06 /><br><br>
                <h1>Briquettes<br> de Noix</h1><br><br>
                <p>Oh, des briquettes de Noël ! Vous connaissez ? Ce sont de délicieux biscuits !</p>
                <br><button class="button_06"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_sept">
                <img src="images/tiramisu_canelle_pommes.png" alt= Recette_03 /><br><br>
                <h1>Tiramisu<br> Cannelle</h1><br><br>
                <p>Succulent dessert Italien à la façon Française, un délice pour les yeux et pour les papilles !</p>
                <br><button class="button_07"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

            <div id="recette_huit">
                <img src="images/crumble.png" alt= Recette_04 /><br><br>
                <h1>Crumble<br> Parisienne</h1><br><br>
                <p>Dessert d’automne par excellence. Le classique avec des pommes et une pincée de cannelle est un vrai régal !</p>
                <br><button class="button_08"
                    type="button">EN SAVOIR PLUS
                </button>
            </div>

        </div>

        <!------------------------- PAGINATION ----------------------------------->

        <div id="pagination">
            <button class="page_01"
                    type="button">1
            </button>
            <button class="page_02"
                    type="button">2
            </button>
            <button class="page_03"
                    type="button">3
            </button>
            <button class="suivant"
                    type="button">>
            </button>
        </div>

    </div>

    <div id="footer">
        <img src="images/footer.jpg" alt= Canelle_dans_pot />
    </div>

</body>
</html>