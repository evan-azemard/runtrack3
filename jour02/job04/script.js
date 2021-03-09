
/*

$('form').keypress(function(e){
	console.log(e.keyCode);
	console.log(e.which);
});
*/

var text = document.getElementById('text');

document.addEventListener('keydown', function (touche)
{
    var key = event.key;
    text.value += key;

})
