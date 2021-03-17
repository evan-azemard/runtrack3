<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Materialize</title>
</head>
<body>
    <header class="blue lighten-4">
        <nav class="blue lighten-4">
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="#">
            <p>
                <label>
                    <input name="group1" type="radio" checked />
                    <span>Monsieur</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="group1" type="radio" />
                    <span>Madame</span>
                </label>
            </p>
        </form>


        <!-- formulaire nom prenom adresse email password confirm -->
        <div class="row">
              <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                        <label for="first_name">Prénom</label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Nom</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Adresse" type="text" class="validate">
                        <label for="Adresse">Adresse</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Email" type="text" class="validate">
                        <label for="Email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="Password" type="password" class="validate">
                        <label for="Password">Mot de Passe</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="C_Password" type="password" class="validate">
                        <label for="C_Password">Confirmer le Mot de Passe</label>
                    </div>
                </div>
        </div>
        </form>
        <!-- choix loisirs -->
         <form action="#">
            <p>
                <label>
                    <input type="checkbox" value="informatique"/>
                    <span>informatique</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" value="voyages" />
                    <span>voyages</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" value="sport" />
                    <span>sport</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" value="lecture"/>
                    <span>lecture</span>
                </label>
            </p>
            <button class="btn waves-effect  indigo lighten-3" type="submit" name="action">
                <i class="material-icons right">Envoyer</i>
            </button>
        </form>


    </main>
    <footer>
        <nav class="blue lighten-4">
            <ul>
                <li><a href="index.php">Acceuil</a></li>
                <li><a href="index.php">Inscription</a></li>
                <li><a href="index.php">Connexion</a></li>
                <li><a href="index.php">Rechercher</a></li>
            </ul>
        </nav>
    </footer>

</body>

</html>