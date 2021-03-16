<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body class="body">


  <section class="section"> section 1 </section>
  <section class="section"> section 2 </section>
  <section class="section"> section 3 </section>
  <section class="section"> section 4 </section>


</body>
</html>
<script>
    var clickCount = 2;
        $("#hamburguer").click(function() {
            console.log(clickCount);
            clickCount ++ % 2 === 0 ? clickCount = 3 : clickCount = 0;
            if (clickCount === 3) {
                $("ul").css("display", "flex");
            } else {
                $("#hamburguer").css("display", "flex");
                $("ul").css("display", "none");
            }
        });</script>