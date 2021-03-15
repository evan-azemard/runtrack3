<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!--  <script>

        function mediaQ(value) {

            var x = window.matchMedia("(max-width: 1920px;)")

            var y = window.matchMedia("(max-width: 1680px;)")

            var z = window.matchMedia("(max-width: 1280px)")

            if (x.matches)
            {

                "<link rel="stylesheet" type="text/css" href="style1.css">"

            } else if (y.matches)
            {

                "<link rel="stylesheet" type="text/css" href="style2.css">"

            } else if (z.matches)
            {

                "<link rel="stylesheet" type="text/css" href="style3.css">"

            } else {
             "<link rel="stylesheet" type="text/css" href="style4.css">"
    }
}




mediaQ(value)

x.addListerner(mediaQ)
y.addListerner(mediaQ)
z.addListerner(mediaQ)

    </script>-->
    <style>
    @media screen and (max-width:1920px) {
            body {
                background-color: #88c1d0;
                color: black;
            }
        }

        /*quand la taille max est 1680px*/
        @media screen and (max-width:1680px) {
            body {
                background-color: #ffca4b;
                color: black;
            }
        }

        /*quand la taille max est 1280px*/
        @media screen and (max-width:1280px) {
            body {
                background-color: #275fa0;
                color: white;
            }
        }

        /*quand la taille max est 720px*/
        @media screen and (max-width:720px) {
            body {
                background-color: #ffffff;
                color: black;
            }
        }
    </style>
</head>
<body>

<p>Test</p>

<!--: style1.css par défaut, style2.css lorsque
la résolution est comprise entre 1680px et 1920px, style3.css entre 1280px
et 1680px, et style4.css lorsqu’elle est inférieure à 1280.

        if 1680px et  1920px
        echo style2
        else if 1280 et 1680
        echo style3
        else if < 1280
        echo style 4

        else echo style1
-->







</body>
</html>
