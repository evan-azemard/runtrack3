
function bisextile(année)
{         //On demande la date du jour puis on sélectionne le mois de février de notre année actuelle
    var jours = new Date(année,2,0).getDate();
    if( jours == 29)   //Si on est dans l'année ou février comporte 29  jours
    {
        document.write(année + ' est bisextile');  //Pour l'écrire sur la page
        return(true);
    }
    else
    {
        document.write(année + " n'est pas bisextile");
        return(false);
    }
}



