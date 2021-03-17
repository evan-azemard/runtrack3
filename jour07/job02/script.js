
	$('#p1').css("display","none");

		$('#parabutton1').click( function()
		{


			p1 = $('#p1');
			$('#p2').css("display","none");  //On rend invisible tout les autres
			$('#p3').css("display","none");
			$('#p4').css("display","none");
			$('#para').css("display","none");


			if(p1.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p1.css("display","flex");  //On atribut du flex pour le voir
			}
		});



	$('#p2').css("display","none");

		$('#parabutton2').click( function()
		{


			p2 = $('#p2');
			$('#p1').css("display","none");
			$('#p3').css("display","none");
			$('#p4').css("display","none");
			$('#para').css("display","none");

			if(p2.css("display")=== 'none')
			{
				p2.css("display","flex");
			}
		});


		$('#p3').css("display","none");

		$('#parabutton3').click( function()
		{


				para = $('#para')

				para.empty()



			p3 = $('#p3');
			$('#p2').css("display","none");
			$('#p1').css("display","none");
			$('#p4').css("display","none");
			$('#para').css("display","none");

			if(p3.css("display")=== 'none')
			{
				p3.css("display","flex");
			}
		});



		$('#p4').css("display","none");

		$('#parabutton4').click( function()
		{





			p4 = $('#p4');
			$('#p2').css("display","none");
			$('#p3').css("display","none");
			$('#p1').css("display","none");
			$('#para').css("display","none");


			if(p4.css("display")=== 'none')
			{
				p4.css("display","flex");
			}
		});







$('#buttonalpha').click( function()
{
		para = $('#para')

		if(para.css("display")=== 'none')
				{
					para.css("display","flex");
				}
	p1 = $('#p1')
	p2 = $('#p2')
	p3 = $('#p3')
	p4 = $('#p4')
	para.empty()



	$('#p1').css("display","none");
	$('#p2').css("display","none");  //On rend invisible tout les autres
	$('#p3').css("display","none");
	$('#p4').css("display","none");


	function text() {

	}


    text = new text();
    number = 0;

	// ici, on defini les messages
    text[number++] = "Roy Batty : Quelle expérience de vivre dans la peur ! Voilà ce que c'est que d'être un esclave."
    text[number++] = "Rick Deckard : Secouée ? Moi aussi. Je m'y fais pas. Ça fait partie du business.Rachel : Je ne suis pas dans le business. C'est moi le business."
    text[number++] = "Eldon Tyrell : Le commerce est notre seul but chez Tyrell. Plus humain que l'humain est notre devise."
    text[number++] = "Il existe plusieurs vision du terme :"+
    "Le monde est la matiere, l'espace et les phénomènes qui nous sont accessibles par le sens, l'experience ou la raison."+
      "Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel."

    increment = Math.floor(Math.random() * number);
    	$('#para').append(text[increment]);

});


/*Mettre en active*/
function active(value)  /*Value = l'id du ul cliqué . Pas réussi à la récup autrement */
{
		relo = $('.relo')

		relo.css("background-color", "white")  /*Réinisitalise toutes les class relo (tout les ul)*/


		relo.css("color", "black")


		act1 = value						/*Passe en couleur celui cliqué*/

		act1.css("background-color", "#0D6EFD")
		act1.css("color", "white")

}
/*
function r(){
		location.reload()
	}


$('#11').click( function(){

	r();
	active(value);

})

*/


$('#bM').click( function()
{


	 val = 30;
    bar = $('.barre').width();

    console.log(bar)

    $('.barre').width(bar-val);



	/*bar = $('.progress');

	valeur = document.getElementById('.progress').offsetWidth

	console.log(valeur)
	bar.css("width", "1000px")

	 val = bar.style(width)

	console.log(val)*/
/*	val += 30*/

})


$('#bp').click( function() {


	val = 30;
	bar = $('.barre').width();

	console.log(bar)

	$('.barre').width(bar + val);

})


	/*Function pour modifier la couleur du spiner*/
function g() {
	mail = $('#exampleInputEmail1').val();
	mmdp = $('#exampleInputPassword1').val();
	if (mail != "" && mmdp != "") {
		tab = [
			"text-danger",
			"text-secondary",
			"text-success",
			"text-warning",
			"text-info",
			"text-dark",
			"text-info",
			"text-primary"
		];
		x = Math.round(Math.random() * 7);
		window.document.getElementById("cerc").classList = "spinner-border";
		window.document.getElementById("cerc").classList.add(tab[x]);

	}
}



var string = "";  //Contient rien
var b = document.body; //Contient le body
window.addEventListener('keydown', function(event)  //Permet de retenir les touche appuyé en mémoire
{
    var key = event.key; //Contient la touche
    string += key; //ajoute en plus la touche cliqué
    if(string === "DGC") //Si c'est le même
    {
	/*	tab = ["<body onload='document.getElementById('monLien').click();'>"]

		$('body').classList.add(tab[0]);*/
		$('#exampleModal1').modal('show');  /*Rendre visible le modal*/


    }else {
    	$('#myModal').modal('hide');
    }
})

