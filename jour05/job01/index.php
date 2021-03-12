<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <style>

    body{
        display: flex;
        flex-direction: column;
        justify-content: center;

    }
#f_connexion
    display: none;
}


    main{
        display: flex;
        justify-content: center;
    }

    div{
        width: 30vw;
        display: flex;
        justify-content: center;
    }
    form{
        display: none;
        width: 60%;
    }

    .error{
        display: none;
        color: red;
    }
</style>
    </head>
    <body>
        <main>
            <div>
                <nav ><button id="b_inscription">Inscription</button><button id="b_connexion">Connexion</button></nav>
                    <form  method="post" action="" id="f_inscription" style="display: flex; flex-direction: column; width: 20%; margin-top: 20%;  ">
                        <p class="error" id="passwordError">Le mot de passe doit contenir au moins 8 characteres dont majuscule, minuscule et symbole</p>
                        <p class="error" id="passwordVError">Les mot de passes ne correspondent pas !</p>
                        <p class="error" id="emailError">Cet Email est déja pris</p>


                        <label for="prenom">Prenom</label>
                        <input type="text" id="prenom" name="prenom"/>

                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom"/>

                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"/>

                        <label for="password">Password</label>
                        <input type="password" id="password" name="password"/>

                        <label for="r_password">Confirmer password</label>
                        <input type="password" id="r_password" name="r_password"/>

                        <input type="submit" name="inscription" id="inscription" value="inscription">
                    </form>

                    <form  method="post" action="" id="f_connexion" style="display: flex; flex-direction: column; width: 20%; margin-top: 20%;">

                        <label for="cn_nom">Nom</label>
                        <input type="text" id="cn_prenom" name="nom"/>

                        <label for="cn_password">Password</label>
                        <input type="password" id="cn_password" name="password"/>

                        <input type="submit" id="connexion" value="Se Connecter"/>
                    </form>
                </div>
		</main>
    </body>
</html>

        <script type="text/javascript" src="script.js"></script>


