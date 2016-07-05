<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 17:56:14
         compiled from "smarty-dir\templates\bacheca.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19119537649d0ee1d34-51786793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0d6ea827e2b3bd55b8ed7b2b718292a3b895eb0' => 
    array (
      0 => 'smarty-dir\\templates\\bacheca.tpl',
      1 => 1410882259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19119537649d0ee1d34-51786793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537649d100cf56_57810162',
  'variables' => 
  array (
    'identificato' => 0,
    'posts' => 0,
    'post' => 0,
    'id' => 0,
    'utente' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537649d100cf56_57810162')) {function content_537649d100cf56_57810162($_smarty_tpl) {?><html>
<head>
<title>Bacheca</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/elimina.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/bacheca.css">
</head>
<body>

<div class="titolo">BACHECA</div>

<?php if ($_smarty_tpl->tpl_vars['identificato']->value==true) {?>
<button id="profilo" name='GL Calcolator' onClick="location.href='profilo.php'"> Profilo </button>
<button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>

<form action="php/nuovo_post.php" method="post">
<textarea id="text_area" name="testo" type="text" placeholder="Condividi idee e ricette!"></textarea>
<input class="bottone" type="submit" name="submit" value="Invia">
</form>

<?php } else { ?>
 <button id="esci" name='Indietro' onClick="location.href='index.php'"> Esci </button>
 <?php }?>

 <div id="elenco_post">
<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['post']->value['matricola'];?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars["id"] = new Smarty_variable($_tmp1, null, 0);?>
    <div class="post">
    <img class="immagine" src='<?php echo $_smarty_tpl->tpl_vars['post']->value['fotoProfilo'];?>
'></img>
    <div class="autore" onClick="location.href='visualizza_profilo.php?param='+'<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'"><?php echo $_smarty_tpl->tpl_vars['post']->value['nomeAutore'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['cognomeAutore'];?>
</br>Voti: <?php echo $_smarty_tpl->tpl_vars['post']->value['voto'];?>
</div>
    <div class="testo"><?php echo $_smarty_tpl->tpl_vars['post']->value['testo'];?>
</div>
    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['post']->value['matricola'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['utente']->value==$_tmp2) {?>
        <button class="elimina" id='<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
' >Elimina</button>
    <?php }?>
    </div>
<?php } ?>
</div>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>



	
        





</body>
</html>
<?php }} ?>
