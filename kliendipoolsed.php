<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Kliendipoolsed</title>
</head>
<body>
    <button type="button" id="alertButton">
        Tere maailm!
    </button>

    <ul>
        <li><a href="http://www.khk.ee" id="alertLink">Tere maailm!</a></li><!--3. Tere maailm link-->
    </ul>


    <script>
        var oneButton = document.getElementById("alertButton"); //2. Tere maailm button
        oneButton.onclick = function() {
            alert("Tere maailm!");
        }

        var oneClick = document.getElementById("alertLink");  //3. Tere maailm link
        oneClick.onclick = function() {
            alert("Tere maailm");
        }

    </script>

</body>
</html>