



function jourtravaille(date) {

    //On l'utilisera pour formater la date, en string puis int puis string puis int
    const options = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};


    //Contient les jours férié

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



        console.log(jourferies)
        //Variable e correspond à la date
        var e = date;

        //toiSOString renvoie la date directement et split dans un tableaux
        e = e.toISOString().split('T')[0];

        //Afficher la date heure française formater en int et string
        var d = date.toLocaleDateString('fr-FR', options);

        //On place dans la varibla jour la key 0 de la date française (le jour)
        jour = d.split(" ")[0];

        if (jour === "samedi" || jour === "dimanche") {
            document.write("Non, " + d + " est un week-end")
            stop() //On stope le script
        }
        //Includes détermine si une chaine de caractére est contenue dans une autre et renvoi true / false
        if (jourferies.includes(e) === true) {
            document.write(d + " est un jour ferié");
        } else {
            document.write("Oui, " + d + " est un jour travaillé");
        }
}




