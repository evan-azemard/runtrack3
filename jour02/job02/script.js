/*

const article = "<article><p>“L'important n'est pas la chute, mais l'atterrissage.”</p></article>";

const article2 = "<article><p>“L'important n'est pas la chute, mais l'atterrissage.!!”</p></article>";



const but = "<button style='background-color: red' onclick='javascript:location.reload();'> </button>"


function showhide(){
    document.write(article)
    document.write(but)
}

function hide(){
    document.write(article2)
}

*/


//Si tu clique sur le button
//On envoie le texte
//On envoie un nouveaux button

//Si tu clique sur le nouveaux button
//On supprime le text
//On envoie le premier button


//Le button à une valu="1"

//Si tu clique tu augmente la value de plus 1

//Si la valeur est différente  d'une boucle qui augemente aussi à chaque clique mais qui est un chiffre plus petit que le button

//


function showhide()
{
    article = document.getElementsByTagName("article")[0];
    if(article.style.display !== 'none')
    {
        article.style.display = 'none';
    }
    else
    {
        article.style.display = 'block';
    }
}
document.getElementById("button").onclick = showhide;