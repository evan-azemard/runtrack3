

$("#filtrer").click(function() {

                var id = $("#id").val().toString();
                 $.ajax({
                     type: "GET", url: "pokemon.json", dataType: "text",
                     success: function (data) {

                         res = JSON.parse(data);


                         console.log(res[id])

                     }

             })
    })





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
