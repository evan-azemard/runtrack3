

$("#filtrer").click(function() {

                var id = $("#id").val().toString()-1;
                var name = $("#name").val().toString();
                 $.ajax({
                     type: "GET", url: "pokemon.json", dataType: "text",
                     success: function (data) {

                         res = JSON.parse(data);
                            //Si c'est un object on transpforme en tableaux
                        /* $('body').append("<p>"+res[id][name]+"</p>");*/

                         var tab  = [];

                         tab.push(res[id][name])

                          $('body').append("<p>"+tab+"</p>");
                     }
             })
    })


/*
function jsonValueKey(re, name)
{
    return res[name];
}*/


//Si tu demande le name on te donne le name


                         /*   $("#filtrer").click(function() {
                                    var val = json();
                                    console.log(value)
                            })*/


/*
$("#filtrer").click(function() {
/!*
    var key = $("#id").val();
*!/
    var date = jsonValueKey("pokemon.json")

    console.log(date);

})
*/
