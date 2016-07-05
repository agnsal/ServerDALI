<?php

include('serverPROLOG/serverPROLOG.php');
require_once 'includes/autoload.inc.php';
require_once 'includes/config.inc.php';


$masRunning = "masRunning.php";
    if(file_exists($masRunning)==false){
        system('echo ciao');
        system('start cmd');
        system('start" -bat /DALI/ServerDALImas/startmas.bat"');
        system('cd /DALI/ServerDALImas && sh ./startmas.sh');
        $handle = fopen($masRunning, 'w') or die('Cannot open file:  '.$masRunning); 
        $data = '';
        fwrite($handle, $data);
    }       

$CHome=USingleton::getInstance('CHome');
$CHome->impostaPagina();

?>
