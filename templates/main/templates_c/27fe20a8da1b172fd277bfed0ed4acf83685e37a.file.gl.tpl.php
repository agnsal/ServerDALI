<?php /* Smarty version Smarty-3.1.18, created on 2014-09-17 18:00:59
         compiled from "smarty-dir\templates\gl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1619953f626696ebc34-20731413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27fe20a8da1b172fd277bfed0ed4acf83685e37a' => 
    array (
      0 => 'smarty-dir\\templates\\gl.tpl',
      1 => 1410969652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1619953f626696ebc34-20731413',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f62669764dd9_52629874',
  'variables' => 
  array (
    'GLlun' => 0,
    'GLmar' => 0,
    'GLmer' => 0,
    'GLgio' => 0,
    'GLven' => 0,
    'GLsab' => 0,
    'GLdom' => 0,
    'bevandeEsciroppi' => 0,
    'alimento' => 0,
    'cerealiEderivati' => 0,
    'dolciEdolcificanti' => 0,
    'frutta' => 0,
    'latteEderivati' => 0,
    'ortaggiEderivati' => 0,
    'spezieEcondimentiEaltro' => 0,
    'lun' => 0,
    'mar' => 0,
    'mer' => 0,
    'gio' => 0,
    'ven' => 0,
    'sab' => 0,
    'dom' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f62669764dd9_52629874')) {function content_53f62669764dd9_52629874($_smarty_tpl) {?><html>  
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
     
<button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
<button id="profilo" name='Profilo' onClick="location.href='profilo.php'">Profilo</button>

<button id='salva' name='salva'>Salva Progetto</button>
<button id='cancella' name='cancella'>Nuovo Progetto</button>

  <div class="calcolo">
      
   <div class="GL" name="lun" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLlun']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLlun']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLlun']->value;?>
</div>
   <div class="GLnascosto" name="mar" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLmar']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLmar']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLmar']->value;?>
</div>
   <div class="GLnascosto" name="mer" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLmer']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLmer']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLmer']->value;?>
</div>
   <div class="GLnascosto" name="gio" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLgio']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLgio']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLgio']->value;?>
</div>
   <div class="GLnascosto" name="ven" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLven']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLven']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLven']->value;?>
</div>
   <div class="GLnascosto" name="sab" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLsab']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLsab']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLsab']->value;?>
</div>
   <div class="GLnascosto" name="dom" vecchio="<?php echo $_smarty_tpl->tpl_vars['GLdom']->value;?>
" valore="<?php echo $_smarty_tpl->tpl_vars['GLdom']->value;?>
">GL: <?php echo $_smarty_tpl->tpl_vars['GLdom']->value;?>
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
      <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bevandeEsciroppi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=1 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
        <?php } ?>
        </ul>
  </div>
  
  <div class="lista" id="tabs-2">
      <ul>
      <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cerealiEderivati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=2 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
        <?php } ?>
        </ul>
  </div>
  
  <div class="lista" id="tabs-3">
      <ul>
    <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dolciEdolcificanti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=3 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
    <?php } ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-4">
      <ul>
    <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frutta']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=4 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
    <?php } ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-5">
      <ul>
    <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['latteEderivati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=5 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
    <?php } ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-6">
       <ul>
    <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ortaggiEderivati']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=6 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
    <?php } ?>
    </ul>
  </div>
  
  <div class="lista" id="tabs-7">
      <ul>
    <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['spezieEcondimentiEaltro']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="cibo" id="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['id'];?>
" tipo=7 nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            <br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>

            </div>
    <?php } ?>
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
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lun']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 - Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="mar">
        <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="mer">
  <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="gio">
  <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gio']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="ven">
  <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ven']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="sab">
  <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sab']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  <div class="giorno" id="dom">
  <ul>
  <?php  $_smarty_tpl->tpl_vars['alimento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['alimento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dom']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['alimento']->key => $_smarty_tpl->tpl_vars['alimento']->value) {
$_smarty_tpl->tpl_vars['alimento']->_loop = true;
?>
            <div class="selezionato" numero="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
" tipo="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['tipo'];?>
" nome="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>
" gi="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
" carb="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
" glProprio="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>
">
                <?php echo $_smarty_tpl->tpl_vars['alimento']->value['nome'];?>

            </br>GI: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['GI'];?>
 - Carboidrati: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['carb'];?>
 Peso: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['peso'];?>
 - GL: <?php echo $_smarty_tpl->tpl_vars['alimento']->value['gl'];?>

            </br><button class="elimina" eliminare="<?php echo $_smarty_tpl->tpl_vars['alimento']->value['numero'];?>
">X</button>
            </div>
        <?php } ?>
        </ul>
  </div>
  
</div>
        
<div id= "grafico" class="chart">
  Lunedì: <div class="linea" g="lun" style="width:<?php echo $_smarty_tpl->tpl_vars['GLlun']->value;?>
;"></div>
  Martedì: <div class="linea" g="mar" style="width:<?php echo $_smarty_tpl->tpl_vars['GLmar']->value;?>
;"></div>
  Mercoledì: <div class="linea" g="mer" style="width:<?php echo $_smarty_tpl->tpl_vars['GLmer']->value;?>
;"></div>
  Giovedì: <div class="linea" g="gio" style="width:<?php echo $_smarty_tpl->tpl_vars['GLgio']->value;?>
;"></div>
  Venerdì: <div class="linea" g="ven" style="width:<?php echo $_smarty_tpl->tpl_vars['GLven']->value;?>
;"></div>
  Sabato: <div class="linea" g="sab" style="width:<?php echo $_smarty_tpl->tpl_vars['GLsab']->value;?>
;"></div>
  Domenica: <div class="linea" g="dom" style="width:<?php echo $_smarty_tpl->tpl_vars['GLdom']->value;?>
;"></div>
  </br>
</div>

  <img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>
        

 
</body>
</html>
 

  

<?php }} ?>
