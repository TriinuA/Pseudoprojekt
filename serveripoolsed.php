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
        $first_name_begins_vowel = false;
        $persons = array($first_name, $last_name, $my_age,);
        $vowels = array('A', 'E', 'I', 'O', 'U', 'Ä', 'Ö', 'Ü', 'Õ');
        $a = 1.23;
        $b = 2.34;
     ?>

     <?php
        echo("$first_name $last_name (").$my_age.(')');
     ?>

     <p><?php echo $persons[0]." ". $persons[1]."  (".$persons[2].")"?> </p>
     <?php
         if ($first_name_begins_vowel){
             echo "Eesnimi algab vokaaliga";
         }
         else
             echo "Eesnimi ei alga vokaaliga";
     ?>
     <br>
     <?php
         if (in_array(substr($first_name,0,1),$vowels)){
             echo "Eesnimi algab vokaaliga";
         }
         else
             echo "Eesnimi ei alga vokaaliga";
     ?>
     <br>
    <?php
        echo $a + $b;
    ?>




</body>
</html>

