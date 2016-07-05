<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 11:59:15
         compiled from "smarty-dir\templates\visualizza_profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1207253f21bee6b59b8-60472887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '178e551d19192e8da6f680420683c7a75f7752e1' => 
    array (
      0 => 'smarty-dir\\templates\\visualizza_profilo.tpl',
      1 => 1410861552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207253f21bee6b59b8-60472887',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f21bee755c58_03623667',
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
<?php if ($_valid && !is_callable('content_53f21bee755c58_03623667')) {function content_53f21bee755c58_03623667($_smarty_tpl) {?><html>
<head>
<title>Visualizza Profilo</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/votazione.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/profilo.css">
</head>
<body>

<?php if ($_smarty_tpl->tpl_vars['autorizzato']->value==true) {?>
    <div class="titolo"><?php echo $_smarty_tpl->tpl_vars['persona']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['persona']->value['cognome'];?>
</div>
    
<button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
<button id="profilo" name='Profilo' onClick="location.href='profilo.php'"> Profilo </button>

<img id="foto" src="<?php echo $_smarty_tpl->tpl_vars['persona']->value['foto'];?>
"></img>
<div class="dati">
    <?php if ($_smarty_tpl->tpl_vars['persona']->value['rintracciabile']=="1") {?>
    <br/>Email: <?php echo $_smarty_tpl->tpl_vars['persona']->value['username'];?>

    <?php }?>
    </br>Post pubblicati: <?php echo $_smarty_tpl->tpl_vars['npost']->value;?>

    </br></br>Su di me:</br><?php echo $_smarty_tpl->tpl_vars['persona']->value['info'];?>

<div class="valutazione">
<br/>Voti ricevuti: <div id="voti"><?php echo $_smarty_tpl->tpl_vars['nvoti']->value;?>
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
    <div class="post">
    <img class="immagine"src='<?php echo $_smarty_tpl->tpl_vars['post']->value['fotoProfilo'];?>
'></img>
    <div class="autore"><?php echo $_smarty_tpl->tpl_vars['post']->value['nomeAutore'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['cognomeAutore'];?>
</div>
    <div class="testo"><?php echo $_smarty_tpl->tpl_vars['post']->value['testo'];?>
</div>
    </div>
<?php } ?>

<?php } else { ?>
    <button id="esci2" name='Logout' onClick="location.href='logout.php'"> Esci </button>
    <button id="bacheca2" name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
        
    <div class="descrizione">
        Per visualizzare il profilo di un utente bisogna essere iscritti ed avere effettuato il login.
    </div>
<?php }?>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

  
</body>
</html><?php }} ?>
