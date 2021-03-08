function afficherjourssemaines()
{
    //Le tableaux qui contient les jours.
    var jourssemaines = ["Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche"];
    for (i = 0; i < 7; i++) //i servira d'index au tableaux.

    {
            const esp = '<br>';

        document.write(jourssemaines[i] + esp);
    }
}
