/*
compte = document.getElementsByTagName("button")[0];
text = compte = document.getElementsByTagName("compteur")[1];

function addone(){
    if (compte.click){
        compte++
    }
}

console.log(compte)*/


//On récupére les les balises par l'id
var button = document.getElementById('button');
var compte = document.getElementById('compteur');
console.log(compte)
function addone() {
    var nbclick = compte.innerHTML;   //On place le nombre de clique dans la variable
    nbclick++; //on ajoute 1 à chaque cliques
    compte.innerHTML = nbclick;    //On définit le paragraphe avec le nombres de cliques
}
button.addEventListener('click',addone) //Si on à cliqué sur élément  on fait marcher la function