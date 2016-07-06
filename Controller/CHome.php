<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CHome
 *
 * @author Agnese Salutari
 */
class CHome {
    
    public function impostaPagina(){
        $VHome= USingleton::getInstance('VHome');
        $VDati= USingleton::getInstance('VDati');
        $VHome->mostraPagina();
        $translator=new serverPROLOG();
        
        $dati=$VHome->getDati();         
         if($dati==true){
             $translator->delResult();
             $m=$magic->idConverter($dati[0]);
             $stringa='persona('.$m.').';
             $translator->ADDtoResult($stringa);
             $nome=[$dati[1],$dati[2],$m];
             $translator->ARRAYtoPpredicate($nome, "dati");
             $start=[$m,$dati[3]];
             $translator->ARRAYtoPpredicate($start, "start");
             $arrivo=[$m,$dati[4]];
             $translator->ARRAYtoPpredicate($arrivo, "arrivo");
             if($dati[5]==true){
                $ha=[$m, 'animali'];
             }
             $translator->ARRAYtoPpredicate($ha, "ha");
             $colore=[$m,$dati[6]];
             $translator->ARRAYtoPpredicate($colore, "colorepreferito");
             $amici=[$m,$dati[7]];
             $translator->ARRAYtoPpredicate($amici, "namici");
             $computer=[$m,$dati[8]];
             $translator->ARRAYtoPpredicate($computer, "orepc");
             
             $translator->RESULTtoPL("input","DALI/ServerDALImas", true);
             $translator->notificationTXT("notifica", "DALI/ServerDALImas");

             while(file_exists("DALI/ServerDALImas/notificaermes.txt")==false){
                 sleep(0.2);
             }
             $dati = fopen("DALI/ServerDALImas/risposta.php", "r") or die("Unable to open file!");
             eval(fread($dati,filesize("DALI/ServerDALImas/risposta.php")));
             fclose($dati);
             
             unlink("DALI/ServerDALImas/risposta.php");
             
             unlink("DALI/ServerDALImas/notificaermes.txt");
             $VDati->mostraPagina($l_c,$f_c,$t,$s_c);            
             
         }
         
   }  
}

?>
