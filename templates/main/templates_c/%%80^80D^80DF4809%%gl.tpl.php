<?php /* Smarty version 2.6.26, created on 2014-10-19 16:19:16
         compiled from gl.tpl */ ?>
<html>  
<head>
  <meta charset="utf-8">
  <title>GL</title>
  <script src="lib/jquery.min.js"></script>
  <script src="lib/jquery-ui/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="lib/jquery-ui/jquery-ui.min.css">
  <link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/gl.css">
<script type="text/javascript" src="script/gl.js"></script> 
 
</head>
<body>
    <div class="titolo">CALCOLO DEL GL</div>
     
<button id="logout" name='Logout' onClick="location.href='?t=l';"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='?t=b'"> Bacheca </button>
<button id="profilo" name='Profilo' onClick="location.href='?t=p'">Profilo</button>

<button id='salva' name='salva'>Salva Progetto</button>
<button id='cancella' name='cancella'>Nuovo Progetto</button>

  <div class="calcolo">
      
   <div class="GL" name="lun" vecchio="<?php echo $this->_tpl_vars['GLlun']; ?>
" valore="<?php echo $this->_tpl_vars['GLlun']; ?>
">GL: <?php echo $this->_tpl_vars['GLlun']; ?>
</div>
   <div class="GLnascosto" name="mar" vecchio="<?php echo $this->_tpl_vars['GLmar']; ?>
" valore="<?php echo $this->_tpl_vars['GLmar']; ?>
">GL: <?php echo $this->_tpl_vars['GLmar']; ?>
</div>
   <div class="GLnascosto" name="mer" vecchio="<?php echo $this->_tpl_vars['GLmer']; ?>
" valore="<?php echo $this->_tpl_vars['GLmer']; ?>
">GL: <?php echo $this->_tpl_vars['GLmer']; ?>
</div>
   <div class="GLnascosto" name="gio" vecchio="<?php echo $this->_tpl_vars['GLgio']; ?>
" valore="<?php echo $this->_tpl_vars['GLgio']; ?>
">GL: <?php echo $this->_tpl_vars['GLgio']; ?>
</div>
   <div class="GLnascosto" name="ven" vecchio="<?php echo $this->_tpl_vars['GLven']; ?>
" valore="<?php echo $this->_tpl_vars['GLven']; ?>
">GL: <?php echo $this->_tpl_vars['GLven']; ?>
</div>
   <div class="GLnascosto" name="sab" vecchio="<?php echo $this->_tpl_vars['GLsab']; ?>
" valore="<?php echo $this->_tpl_vars['GLsab']; ?>
">GL: <?php echo $this->_tpl_vars['GLsab']; ?>
</div>
   <div class="GLnascosto" name="dom" vecchio="<?php echo $this->_tpl_vars['GLdom']; ?>
" valore="<?php echo $this->_tpl_vars['GLdom']; ?>
">GL: <?php echo $this->_tpl_vars['GLdom']; ?>
</div>
   
   <div id="scelto" class="scelto"></div>
  
  <div id="quantità">
    Quantità: <input id="peso" name="peso" maxlength=4> g
    <button id="selezione">Aggiungi</button>
  </div>
   
  </div>
   
   <div id="legenda">
       <div class="orange">Arancione=GL basso</div>
       <div class="green">Verde=GL medio </div>
       <div class="red">Rosso=GL alto </div>
   </div>
      
<div id="tabs1">   
  <ul>
    <li><a href="#tabs-1">Bevande e sciroppi</a></li>
    <li><a href="#tabs-2">Cereali e derivati</a></li>
    <li><a href="#tabs-3">Dolci e dolcificanfi</a></li>
    <li><a href="#tabs-4">Frutta</a></li>
    <li><a href="#tabs-5">Latte e derivati</a></li>
    <li><a href="#tabs-6">Ortaggi e derivati</a></li>
    <li><a href="#tabs-7">Spezie, 
            </br>condimenti e altro</a></li>
  </ul>  
    
    
  <div class="lista" id="tabs-1">
      <ul>
      <?php $_from = $this->_tpl_vars['bevandeEsciroppi']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=1 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
  </div>
  
  <div class="lista" id="tabs-2">
      <ul>
      <?php $_from = $this->_tpl_vars['cerealiEderivati']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=2 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
        <?php endforeach; endif; unset($_from); ?>
        </ul>
  </div>
  
  <div class="lista" id="tabs-3">
      <ul>
    <?php $_from = $this->_tpl_vars['dolciEdolcificanti']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=3 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-4">
      <ul>
    <?php $_from = $this->_tpl_vars['frutta']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=4 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-5">
      <ul>
    <?php $_from = $this->_tpl_vars['latteEderivati']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=5 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-6">
       <ul>
    <?php $_from = $this->_tpl_vars['ortaggiEderivati']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=6 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-7">
      <ul>
    <?php $_from = $this->_tpl_vars['spezieEcondimentiEaltro']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="cibo" id="<?php echo $this->_tpl_vars['alimento']['id']; ?>
" tipo=7 nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            <br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>

            </div>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
  </div>
  </div>
  
  <div id="tabs2">
  <ul>
    <li class="settimana" nome="lun"><a href="#lun">Lunedì</a></li>
    <li class="settimana" nome="mar"><a href="#mar">Martedì</a></li>
    <li class="settimana" nome="mer"><a href="#mer">Mercoledì</a></li>
    <li class="settimana" nome="gio"><a href="#gio">Giovedì</a></li>
    <li class="settimana" nome="ven"><a href="#ven">Venerdì</a></li>
    <li class="settimana" nome="sab"><a href="#sab">Sabato</a></li>
    <li class="settimana" nome="dom"><a href="#dom">Domenica</a></li>
  </ul>
      
  <div class="giorno" id="lun">
      <ul>
          <?php if ($this->_tpl_vars['lun'] == true): ?>
  <?php $_from = $this->_tpl_vars['lun']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 - Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="mar">
        <ul>
            <?php if ($this->_tpl_vars['mar'] == true): ?>
  <?php $_from = $this->_tpl_vars['mar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="mer">
  <ul>
      <?php if ($this->_tpl_vars['mer'] == true): ?>
  <?php $_from = $this->_tpl_vars['mer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="gio">
  <ul>
      <?php if ($this->_tpl_vars['gio'] == true): ?>
  <?php $_from = $this->_tpl_vars['gio']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
        <?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="ven">
  <ul>
      <?php if ($this->_tpl_vars['ven'] == true): ?>
  <?php $_from = $this->_tpl_vars['ven']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="sab">
  <ul>
<?php if ($this->_tpl_vars['sab'] == true): ?>
  <?php $_from = $this->_tpl_vars['sab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
        </ul>
  </div>
  <div class="giorno" id="dom">
  <ul>
<?php if ($this->_tpl_vars['dom'] == true): ?>
  <?php $_from = $this->_tpl_vars['dom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['alimento']):
?>
            <div class="selezionato" numero="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
" tipo="<?php echo $this->_tpl_vars['alimento']['tipo']; ?>
" nome="<?php echo $this->_tpl_vars['alimento']['nome']; ?>
" gi="<?php echo $this->_tpl_vars['alimento']['GI']; ?>
" carb="<?php echo $this->_tpl_vars['alimento']['carb']; ?>
" glProprio="<?php echo $this->_tpl_vars['alimento']['gl']; ?>
">
                <?php echo $this->_tpl_vars['alimento']['nome']; ?>

            </br>GI: <?php echo $this->_tpl_vars['alimento']['GI']; ?>
 - Carboidrati: <?php echo $this->_tpl_vars['alimento']['carb']; ?>
 Peso: <?php echo $this->_tpl_vars['alimento']['peso']; ?>
 - GL: <?php echo $this->_tpl_vars['alimento']['gl']; ?>

            </br><button class="elimina" eliminare="<?php echo $this->_tpl_vars['alimento']['numero']; ?>
">X</button>
            </div>
        <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
        </ul>
  </div>
  
</div>
        
<div id= "grafico" class="chart">
  Lunedì: <div id="glun" class="linea" g="lun" style="width:<?php echo $this->_tpl_vars['GLlun']; ?>
;"></div>
  Martedì: <div id="gmar" class="linea" g="mar" style="width:<?php echo $this->_tpl_vars['GLmar']; ?>
;"></div>
  Mercoledì: <div id="gmer" class="linea" g="mer" style="width:<?php echo $this->_tpl_vars['GLmer']; ?>
;"></div>
  Giovedì: <div id="ggio" class="linea" g="gio" style="width:<?php echo $this->_tpl_vars['GLgio']; ?>
;"></div>
  Venerdì: <div id="gven" class="linea" g="ven" style="width:<?php echo $this->_tpl_vars['GLven']; ?>
;"></div>
  Sabato: <div id="gsab" class="linea" g="sab" style="width:<?php echo $this->_tpl_vars['GLsab']; ?>
;"></div>
  Domenica: <div id="gdom" class="linea" g="dom" style="width:<?php echo $this->_tpl_vars['GLdom']; ?>
;"></div>
  </br>
</div>
  <div id="metro">
      <div id="zero">|</br>0</div>
      <div id="cinquanta">|</br>50</div>
      <div id="cento">|</br>100</div>
      <div id="centocinquanta">|</br>150</div>
      <div id="duecento">|</br>200</div>
      <div id="duecentocinquanta">|</br>250</div>
      <div id="trecento">|</br>300</div>
  </div>

  <img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>
        

 
</body>
</html>
 

  
