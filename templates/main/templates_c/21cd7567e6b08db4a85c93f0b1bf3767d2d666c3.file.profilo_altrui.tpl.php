<?php /* Smarty version Smarty-3.1.18, created on 2014-08-18 17:00:46
         compiled from "smarty-dir\templates\profilo_altrui.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1375053ea418d3ca4b7-48181955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21cd7567e6b08db4a85c93f0b1bf3767d2d666c3' => 
    array (
      0 => 'smarty-dir\\templates\\profilo_altrui.tpl',
      1 => 1408374042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1375053ea418d3ca4b7-48181955',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53ea418d42fdc4_35821215',
  'variables' => 
  array (
    'autorizzato' => 0,
    'persona' => 0,
    'npost' => 0,
    'nvoti' => 0,
    'havotato' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53ea418d42fdc4_35821215')) {function content_53ea418d42fdc4_35821215($_smarty_tpl) {?><html>
<head>
<title>Visualizza Profilo</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/votazione.js"></script>
</head>
<body  style="font-family: arial">
    <div id="PROVA" style="display:none;height:100px;width:300px;border:1px solid black;background-color:yellow;"></div>

<?php if ($_smarty_tpl->tpl_vars['autorizzato']->value==true) {?>
<button name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
<button name='Profilo' onClick="location.href='profilo.php'"> Profilo </button>

<div class="persona">
<img src="<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto'];?>
"></img>
<div class="dati"><?php echo $_smarty_tpl->tpl_vars['persona']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['persona']->value['cognome'];?>
</div>
<div class="valutazione">
Post pubblicati: <?php echo $_smarty_tpl->tpl_vars['npost']->value;?>

Voti ricevuti: <div id="voti"><?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
</div>
</div>
</div>

<div id="punteggio" class="votazione">
    <?php if (!$_smarty_tpl->tpl_vars['havotato']->value) {?>
   <input type="button" class="vota" id="<?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
" value="Vota!"/>
   <input type="button" class="annullaVoto" id="<?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
" value="Annulla voto" style="visibility:hidden"/> 
    <?php } else { ?>
   <input type="button" class="annullaVoto" id="<?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
" value="Annulla voto"/>
   <input type="button" class="vota" id="<?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
" value="Vota!" style="visibility:hidden"/>
    <?php }?>
</div>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="post" style="border:5px solid black">
    <img class="immagine"src='<?php echo $_smarty_tpl->tpl_vars['post']->value['fotoProfilo'];?>
' heigth="200px" width="200px"></img>
    <div class="autore"><?php echo $_smarty_tpl->tpl_vars['post']->value['nomeAutore'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['cognomeAutore'];?>
</div>
    <div class="testo"><?php echo $_smarty_tpl->tpl_vars['post']->value['testo'];?>
</div>
    </div>
<?php } ?>

<?php } else { ?>
    <button name='Logout' onClick="location.href='logout.php'"> Esci </button>
    <button name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
        
    <div class="messaggio">
        Per visualizzare il profilo di un utente bisogna essere iscritti ed avere effettuato il login.
    </div>
<?php }?>

  
</body>
</html><?php }} ?>
