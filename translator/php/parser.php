<?php

include($argv[1]);

$row = "";
$conter=0;
$taille=count($arr);
foreach ($arr as $key => $value) {
    $conter++;
    echo " \t traduction terminer a :  ";
    print_r(($conter/$taille)*100);
    echo " % \r";
    
    $output=shell_exec ("cd ../python/
    ./main.py ".strval($value));
    
    $arr[$key]=$output;
    $row .= "'".$key."' =>  '".$output."', \n";

    
};

echo("\n");
print_r($row);
$fich=fopen('../data/translate.php','w+');
fwrite($fich,$row);
fclose($fich);

echo " terminer ! allez voire le fichier /media/root/persistence/code/projet/python/translator/data/translate.php \r";
echo("\n");