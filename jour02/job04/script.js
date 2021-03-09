
/*

$('form').keypress(function(e){
	console.log(e.keyCode);
	console.log(e.which);
});
*/

// le textarea
/*
var text = document.getElementById('text');

document.addEventListener('keydown', function (touche)
{
    var key = event.key;


    text.value += event.key;

})
*/
//addevenlistener c pour ajouter un évenement
//Event = e  contient la touche appuyé
//Text = textarea
//recupére la valeur du textarea et tu ajout un lettre en doublon
//.key double la valeur


document.addEventListener("keydown", function(e) {

    var text = document.getElementById("keylogger");
    text.value += e.key;
});