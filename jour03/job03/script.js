
//Je n'ai pas réussi à le faire , j'ai pris un code au hasard et je les seulment commenté du mieux que je pouvais comprendre.

//J'ai tout de même tenter avant sans succé .








function getPos(element)
{
	var enfants = $("body").children(); //Ce que contient le body
	for(i=1;i<enfants.length;i++)  //Si le chiffre est plus petit que enfants on rajoute 1
	{
		if($(enfants[i]).attr("id") == element.attr("id")) //on compare les 2 id (attr récupére la valeur )
		{

			return i;
		}
	}
}

var width = 0;
var height = 0;

for(i=0;i<8;i++) /*on veut 9 tour  de boucle*/
{
	$("body").append("<div class='imgbox' id='box"+i+"'></div>"); // On rentre dans le body
	$("#box"+i).css("background-image","url(plateforme.png)"); //On applique en bg le logo, une taille et la position avec un modulo
	$("#box"+i).css("background-size","443px 443px");
	$("#box"+i).css("background-position",width+"% "+height+"%");

	width += 50; //Width vaut 50
	if(i>=2)  //a partitre de la 2 e boucle
	{
		if(width == 150)
		{
			width = 0; //Quand ça vaut 150 on réinitialise à 0
		}
		if(i >=5)
		{
			height = 100;		  //Même principe en bas aussi
		}
		else
		{
			height = 50;
		}
	}
}
$("body").append("<div class='imgbox' id='emptyBox'></div>"); //On créer créer une div et on aplique du css

$(".imgbox").css("width","143px");
$(".imgbox").css("height","143px");
$(".imgbox").css("margin","1%");
$(".imgbox").css("border","2px solid black");


for(i=0;i<8;i++)
{
	var rand = Math.floor(Math.random()*8); //On va faire des maths récup un entier le plus grand, mélanger des chifres
	$("#box"+i).after($("#box"+rand));     // les div avec une id box ont leur atribut l'id mélangé
}

$(".imgbox").click(function() {   //Si tu clique sur une des boc (imgbox)
	//Va récup l'id d'un élément enfant à la div imgbox
	if($(this).next().attr("id")=="emptyBox" && getPos($(this))%3 != 0)
	{

		($(this)).insertAfter($("#emptyBox")); //Peut être pour insséré après la boxe blanche


	}
	else if($(this).prev().attr("id")=="emptyBox") //Sélectionne l'id de la boxe précédente et si elle à la même valeur que boxe
	{
		($(this)).insertBefore($("#emptyBox"));  //Peut être pour insséré avant la boxe blanche
	}
	else if($(this).next().next().next().attr("id")=="emptyBox")
	{ 														 //Inconue
		var before = $(this).prev();
		$(this).insertAfter($("#emptyBox"));
		$("#emptyBox").insertAfter(before);
	}
	else if($(this).prev().prev().prev().attr("id")=="emptyBox")
	{														 //Inconue
		var before = $(this).prev();
		$(this).insertBefore($("#emptyBox"));
		$("#emptyBox").insertAfter(before);
	}

	var code = ["box0","box1","box2","box3","box4","box5","box6","box7","emptyBox"]; //Un tabl qui contient les box
	var childs = $("body").children("div") //Les enfant des div (donc les box ? )

	win = false; //Pour s'avoir si tu perd ou pas

	for(i=0;i<childs.length;i++)   //Pour avoir les boulce uniquement au moment ou (child  ... ) (contient les bon nombres de cartes ? )
	{
		if($(childs[i]).attr("id") !== code[i])
		{
			break;   //On arrête le script
		}
	}
	if(i === childs.length) //On compte le nombres dans child pour le comparé à la valeur de i 'qui est une boulce)
	{
		$("body").append("<p style='color:green;'>Vous avez gagné</p>");

		//Si le nombres est égal à celui attendu, c'est que l'on à gagné
	}
})