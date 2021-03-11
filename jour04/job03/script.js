function slectionne(string,key) {
var id = $('#id')
var name = $('#name')
    console.log(id)
    $.ajax({
        type: "GET",
        url: "pokemon.json",

        success: function (data) {
            // affiche le contenu du fichier dans le conteneur dédié :
            let json = data


            let value = JSON.parse(string);

           var b =  value[key];

            document.write(b);
        }
    });
}



