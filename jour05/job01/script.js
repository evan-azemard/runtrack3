$(document).ready( function() //Pour démarer le script en dernier
	{
		$('#b_inscription').click( function()  //Si tu clique sur le button inscription
		{
			form = $('#f_inscription'); //Form c 'est le formulaire d'inscription
			$('#f_connexion').css("display","none");  //On rend invisible celui de connexion

			if(form.css("display")=== 'none') //Si le formulaire etait sur la position invisible, tu le rend visible
			{
				form.css("display","flex");  //On atribut du flex pour le voir
			}

		});

		$('#b_connexion').click( function()
		{
			form = $('#f_connexion');
			$('#f_inscription').css("display","none");
			if(form.css("display") === 'none')
			{
				form.css("display","flex");
			}
		});







		$("#inscription").click(function()
		{

			email = $('#email').val();
			password = $('#password').val();
			c_password = $('#r_password').val();

			length = /.{8,30}/;
			 symbol = /\W/;
			 letter = /\w/;
			 digit = /\d/;        /* une forme de regex pour js */
/*
			if (preg_match('%^(?=[^A-Z]*+.)(?=[^a-z]*+.)(?=[^0-9]*+.)(?=[^\W]*+.)%',password) ){
*/
			 //exec pour dire que l'on utilise du regexp
			if(length.exec(password) == null || symbol.exec(password) == null || letter.exec(password) == null || digit.exec(password)  == null)
			{
				$("#passwordError").css("display","block");
				return false;
			}
			else
			{
				$("#passwordError").css("display","none"); //Si ya pas d'erreurs tu affiche rien
			}

			if(password !== c_password)
			{
				$('#passwordVError').css("display","block");
				return false;
			}

			//Pour prendre les post du form et aller dans la page inscription.php
			$.post(
				"inscription.php",
				{
					nom: $("#nom").val(),
					prenom: $('#prenom').val(),
					email: $('#email').val(),
					password: $('#password').val()
				},
				function(data)
				{
					if(data === "success")        //Si tu à insséré un utilisateur tu rend invisible le form d'inscription et visible l'autre
					{
						$("#f_inscription").css("display", "none");
						$("#f_connexion").css("display", "flex");
					}
					else if(data === "errMail")
					{
						$("main").prepend($("<p></p>").text("Le mail est déja pris.")); //Tu push sur le main une balise p
					}
				},
				'text'
			);
		});







		$("#connexion").click(function()
		{

			$.post(
				"connexion.php",
				{
					email: $('#cn_prenom').val(),
					password: $('#cn_password').val()
				},
				function(data){
					$("#f_connexion").css("display", "none");
					$("body").prepend($('<p></p>').text("Bonjour "+data["nom"]));
				},
				"json"
			);

		});
	});