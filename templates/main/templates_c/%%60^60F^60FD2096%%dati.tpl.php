<?php /* Smarty version 2.6.26, created on 2014-12-14 16:53:32
         compiled from dati.tpl */ ?>
<html>
<head>
<title>Dati</title>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
    
    <div id="risposta">
    Dati elaborati dagli agenti:
    </br>Atena ha valutato che le ore al pc sono
       <?php if ($this->_tpl_vars['saggezza'] == '0'): ?> troppe
           <?php else: ?> giuste
        <?php endif; ?>.
    </br>Crono ha elaborato <?php echo $this->_tpl_vars['tempo']; ?>
 come tempo di viaggio.
    </br>Mnemosine 
        <?php if ($this->_tpl_vars['lavoro'] != '0'): ?> ha riscontrato l'incarico <?php echo $this->_tpl_vars['lavoro']; ?>

             <?php else: ?> non ha riscontrato alcun incarico
        <?php endif; ?>.
    </br>Psiche ha valutato che sei felice <?php echo $this->_tpl_vars['felice']; ?>
 su 10.
    </div>

</body>
</html>