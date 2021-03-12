

$("#button").click(function() {
                 $.ajax({
                     type: "GET", url: "user.php", dataType: "text",
                     success: function (data) {

                         res = JSON.stringify(data);
                         console.log(res)
                          $('table').append("<td>"+res+"</td>");
                     }
             })
    })
