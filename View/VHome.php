<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VHome
 *
 * @author Agnese Salutari
 */
class VHome extends View{
    
    public function mostraPagina(){
        $this->display('home.tpl');
    }
    
    public function getDati(){
        if(isset($_POST['matricola'])) {
            $dati=array($_POST['matricola'],$_POST['nome'],$_POST['cognome'],$_POST['x'],$_POST['y'],$_POST['animali'],$_POST['colore'],$_POST['amici'],$_POST['pc']);
            return $dati;
        }
        else return false;
    }
    
}

?>
