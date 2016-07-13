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
             $m=$translator->idConverter($dati[0]);
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
             $risposta = fopen("DALI/ServerDALImas/risposta.php", "r") or die("Unable to open file!");
             
             eval(fread($risposta,filesize("DALI/ServerDALImas/risposta.php")));
             fclose($risposta);
             
             unlink("DALI/ServerDALImas/risposta.php");
             
             unlink("DALI/ServerDALImas/notificaermes.txt");
             
             $lavoro=${'l_' . $m};
             $felix=${'f_' . $m};
             $tempo=${'t_' . $m};
             $sagg=${'s_' . $m};
             
             $VDati->mostraPagina($lavoro,$felix,$tempo,$sagg);            
             
         }
         
   }  
}

?>
