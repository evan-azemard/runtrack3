


	$('#p1').css("display","none");

		$('#parabutton1').click( function()  //Si tu clique sur le button
		{
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
			p4 = $('#p4'); //Form c 'est le formulaire d'inscription
			$('#p2').css("display","none");  //On rend invisible tout les autres
			$('#p3').css("display","none");
			$('#p1').css("display","none");

			if(p4.css("display")=== 'none') //Si le paragraphe etait sur la position invisible, tu le rend visible
			{
				p4.css("display","flex");  //On atribut du flex pour le voir
			}
		});
