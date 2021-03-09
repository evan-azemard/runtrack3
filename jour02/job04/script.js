
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


document.addEventListener("keydown", function(e) {

    var text = document.getElementById("keylogger");
    text.value += e.key;
});