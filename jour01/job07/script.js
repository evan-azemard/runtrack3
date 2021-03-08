



function jourtravaille(date)
{

    //Une constante qui en contient d'autre ?
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };


    //Contient les jours fériré
    var jourferies = [
      '2020-01-01',
      '2020-04-13',
      '2020-05-01',
      '2020-05-08',
      '2020-05-21',
      '2020-06-01',
      '2020-07-14',
      '2020-08-15',
      '2020-11-01',
      '2020-11-11',
      '2020-12-25']

//Variable e correspond à la date
    var e = date;

    //toiSOString renvoie la date directement

    e = e.toISOString().split('T')[0];

    //Afficher la date heure fr en lettre ou chiffres
    var d = date.toLocaleDateString('fr-FR', options);

    //On place dans la varibla jour la key 0 de la date française (le jour)
    jour = d.split(" ")[0];

//Includes détermine si une chaine de caractére est contenue dans une autre et renvoi true / false

    if (jour === "samedi" || jour === "dimanche")
    {
        document.write("c'est un week-end")
        stop()
    }

    if(jourferies.includes(e) === true )
    {
        document.write(d + " est un jour ferié");
    } else
    {
        document.write(d + " n'est pas un jour ferié");
    }

}


//Le formulaire de saisie
saisie = prompt("Date : yyyy-mm-dd");

var date = new Date(saisie);

jourtravaille(date);




