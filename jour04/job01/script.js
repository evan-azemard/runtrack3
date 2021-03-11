


function lire_fichier() {

    $.ajax({
        type: "GET",
        url: "expression.txt",

        success: function (data) {
            // affiche le contenu du fichier dans le conteneur dédié :
            $('body').append("<p>"+data+"</p>");
        }
    });
}





/*
var a;
a = $.ajax({
    url: 'expression.txt',
    type: 'POST',
    datatype: 'text',


})

var b =    $('#id_objet-a-remplir').text(expression)





document.write(b)

*/


/*
document.write(test)
*/
/*
var test = <object data="expression.txt">;
*/
