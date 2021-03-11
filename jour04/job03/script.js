

$("#filtrer").click(function() {

                var id = $("#id").val().toString();
                var name = $("#name").val().toString();
                 $.ajax({
                     type: "GET", url: "pokemon.json", dataType: "text",
                     success: function (data) {

                         res = JSON.parse(data);

                         $('body').append("<p>"+res[id][name]+"</p>");
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
