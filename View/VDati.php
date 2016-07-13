<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VDati
 *
 * @author Agnese Salutari
 */
class VDati extends View{
    public function mostraPagina($l,$f,$t,$s){
        $this->assign('felice', $f);
        $this->assign('lavoro', $l);
        $this->assign('tempo', $t);
        $this->assign('saggezza', $s);
        $this->display('dati.tpl');
    }
}

?>
