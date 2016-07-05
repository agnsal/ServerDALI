<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 11:33:13
         compiled from "smarty-dir\templates\profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:41785377d39da9ef78-99119636%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3002a8f7413404e366e5a61476e97a69eb28971f' => 
    array (
      0 => 'smarty-dir\\templates\\profilo.tpl',
      1 => 1410859791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41785377d39da9ef78-99119636',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5377d39daf4e87_71955380',
  'variables' => 
  array (
    'nome' => 0,
    'cognome' => 0,
    'foto' => 0,
    'email' => 0,
    'voti' => 0,
    'npost' => 0,
    'info' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5377d39daf4e87_71955380')) {function content_5377d39daf4e87_71955380($_smarty_tpl) {?><html>
<head>
<title>Profilo</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/elimina.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/profilo.css">
</head>
<body>
    
<div class="titolo"><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
</div>
    
<button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>
<button id="gl" name='GL' onClick="location.href='gl.php'">GL</button>

<div class="fotoProfilo"></div>
<img id="foto" src='<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
'></img>
<button id="cambia_foto" name='Modifica' onClick="location.href='modifica_foto.php'"> Modifica immagine </button>
</div>

<div class="dati">
</br>Email: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

</br>Voti ricevuti: <?php echo $_smarty_tpl->tpl_vars['voti']->value;?>

</br>Post pubblicati: <?php echo $_smarty_tpl->tpl_vars['npost']->value;?>

</br></br>Su di me:</br><?php echo $_smarty_tpl->tpl_vars['info']->value;?>

</br></br><button name='Modifica' onClick="location.href='modifica_dati.php'"> Modifica dati </button>
</div>

<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
    <div class="post">
    <img class="immagine" src='<?php echo $_smarty_tpl->tpl_vars['post']->value['fotoProfilo'];?>
'></img>
    <div class="autore"><?php echo $_smarty_tpl->tpl_vars['post']->value['nomeAutore'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['cognomeAutore'];?>
</div>
    <div class="testo"><?php echo $_smarty_tpl->tpl_vars['post']->value['testo'];?>
</div>
    <button class="elimina" id='<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
'>Elimina</button>
    </div>
<?php } ?>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

  
</body>
</html>
<?php }} ?>
