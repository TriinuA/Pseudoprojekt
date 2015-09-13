<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Serveripoolsed</title>
</head>
<body>
     <?php

        $first_name = "Triinu";
        $last_name = "Ausmees";
        $birth_year	= 1979;
        $this_year 	= date('Y');
        $my_age = ($this_year - $birth_year);

        echo("$first_name $last_name (").$my_age.(')');
     ?>

</body>
</html>

