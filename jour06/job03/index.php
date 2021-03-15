<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body class="body">

<div id="droit">
    <div  class="dd">
        <section class="section"> section 1 </section>
        <section class="section"> section 2 </section>
    </div>
    <div class="dd">
        <section class="section"> section 3 </section>
        <section class="section"> section 4 </section>
    </div>
</div>


</body>
</html>

    <script>




        //   Si c plus petit que 1599px  on atribut du flex pour faire 2 lignes




    /*    function myFunction(width){
            if (width.matches){
                $(".dd").css("display", "flex");
            }
        }

        var width = window.matchMedia("(max-width: 1599px)");

        myFunction(width)

        width.addListener(myFunction)*/


         // Si c plus petit que 768 = une colone


       /* function myFunctionA(ligne){
            if (ligne.matches){
                $(".dd").css("display","flex");
                $("#droit").css("flex-direction","column");

            }
        }

        var ligne = window.matchMedia("(min-width: 767px)");

        myFunctionA(ligne)

        ligne.addListener(myFunctionA)





         function myFunctionAB(double){
            if (double.matches){
                $(".dd").css("display","flex");
                $("#droit").css("display","flex");

            }
        }

        var double = window.matchMedia("(min-width: 769px)");

        myFunctionAB(double)

        double.addListener(myFunctionAB)
*/

    </script>