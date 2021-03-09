var string = "";  //Contient rien
var b = document.body; //Contient le body
window.addEventListener('keydown', function(event)  //Permet de retenir les touche appyé en mémoire
{
    var key = event.key; //Contient la touche
    string += key; //ajoute en plus la touche cliqué
    if(string === "ArrowUpArrowUpArrowDownArrowDownArrowLeftArrowRightArrowLeftArrowRightba") //Si c'est le même
    {
        var footer = document.createElement('footer');
        b.prepend(footer);//Car on le veut  que le body exsite uniquement si i rentre dans la condition
        var main = document.createElement('main');
        b.prepend(main);
        var header = document.createElement('header');
        var title = document.createTextNode('La Plateforme.io');
        b.prepend(header);
        header.append(title);
        main.append(titlemain);
        footer.append(titlefooter);
    }else {


    }
})