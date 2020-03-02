<?php

    $police_fuel = rand(1,100);
    $police_cons = 7.5;
    $my_fuel = rand(1,100);
    $my_cons = 11.5;

    $p_distance = round($police_fuel / $police_cons);
    $m_distance = round($my_fuel / $my_cons);

    $h1 = 'Pabegimo skaiciuokle';
    $li_1 = "Farai nuvaziuotu: $p_distance";
    $li_2 = "As nuvaziuociau: $m_distance";

?>

<html>
    <head>

    </head>
    <body>
        <h1><?php print $h1 ?></h1>
        <ul>
            <li><?php print $li_1 ?></li>
            <li><?php print $li_2 ?></li>
        </ul>
    </body>
</html>
