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


    <script>
        var oneButton = document.getElementById("alertButton"); //2. Tere maailm button
        oneButton.onclick = function() {
            alert("Tere maailm!");
        }

    </script>

</body>
</html>