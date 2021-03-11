<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
</head>
<body style="display: flex; justify-content: center;">

<form style="display: flex; flex-direction: column; width: 20%; margin-top: 20%;">
    <label for="id"></label>
        <input type="text"  id="id" placeholder=" rentrer id" required/>
    <label for="name"></label>
        <input type="text" id="name" placeholder="rentrer name" required/>

    <input type="submit" value="filtrer" onclick="slectionne()">

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="script.js"></script>

</body>
</html>
