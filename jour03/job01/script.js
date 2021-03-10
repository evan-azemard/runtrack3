/*
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
document.getElementById("button").onclick = showhide;*/


//Au moment ou tu clique sur le button
$('#button').click(function (){
   //Tu envoie le texte dans la div
   $('#mydiv').append('<p>le $ est un bon élément monétaire. Le # de twitter est une bonne ID. Il faudra faire le point avec la classe pour cacher cet élément.</p>')
});

//Empty cache le la div
$('#buttonHide').click(function (){
   $('#mydiv').empty();
});
