
	$('#p1').css("display","none");

		$('#parabutton1').click( function()  //Si tu clique sur le button
		{

				para = $('#para')

				para.empty()



			p1 = $('#p1'); //Form c 'est le formulaire d'inscription
			$('#p2').css("display","none");  //On rend invisible tout les autres
			$('#p3').css("display","none");
			$('#p4').css("display","none");

			if(p1.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p1.css("display","flex");  //On atribut du flex pour le voir
			}
		});



	$('#p2').css("display","none");

		$('#parabutton2').click( function()  //Si tu clique sur le button
		{

				para = $('#para')

				para.empty()



			p2 = $('#p2'); //Form c 'est le formulaire d'inscription
			$('#p1').css("display","none");  //On rend invisible tout les autres
			$('#p3').css("display","none");
			$('#p4').css("display","none");

			if(p2.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p2.css("display","flex");  //On atribut du flex pour le voir
			}
		});


		$('#p3').css("display","none");

		$('#parabutton3').click( function()  //Si tu clique sur le button
		{

				para = $('#para')

				para.empty()


			p3 = $('#p3'); //Form c 'est le formulaire d'inscription
			$('#p2').css("display","none");  //On rend invisible tout les autres
			$('#p1').css("display","none");
			$('#p4').css("display","none");

			if(p3.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p3.css("display","flex");  //On atribut du flex pour le voir
			}
		});



		$('#p4').css("display","none");

		$('#parabutton4').click( function()  //Si tu clique sur le button
		{
				para = $('#para')

				para.empty()

			p4 = $('#p4'); //Form c 'est le formulaire d'inscription
			$('#p2').css("display","none");  //On rend invisible tout les autres
			$('#p3').css("display","none");
			$('#p1').css("display","none");

			if(p4.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p4.css("display","flex");  //On atribut du flex pour le voir
			}
		});







$('#buttonalpha').click( function()
{

	para = $('#para')
	p1 = $('#p1')
	p2 = $('#p2')
	p3 = $('#p3')
	p4 = $('#p4')
	para.empty()
	p1.empty()
	p2.empty()
	p3.empty()
	p4.empty()
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
