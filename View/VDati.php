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
    public function mostraPagina($l_c,$f_c,$t,$s_c){
        $this->assign('felice', $f_c);
        $this->assign('lavoro', $l_c);
        $this->assign('tempo', $t);
        $this->assign('saggezza', $s_c);
        $this->display('dati.tpl');
    }
}

?>
