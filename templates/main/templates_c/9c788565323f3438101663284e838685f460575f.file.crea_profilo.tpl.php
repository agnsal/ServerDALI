<?php /* Smarty version Smarty-3.1.18, created on 2014-05-17 23:17:39
         compiled from "smarty-dir\templates\crea_profilo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200345377b3cb3bb7d6-90711655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c788565323f3438101663284e838685f460575f' => 
    array (
      0 => 'smarty-dir\\templates\\crea_profilo.tpl',
      1 => 1400361356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200345377b3cb3bb7d6-90711655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5377b3cb4355d1_94357681',
  'variables' => 
  array (
    'identificato' => 0,
    'doppioni' => 0,
    'vuoto' => 0,
    'diverse' => 0,
    'ok' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5377b3cb4355d1_94357681')) {function content_5377b3cb4355d1_94357681($_smarty_tpl) {?><html>
<head>
<title>crea_profilo</title>
</head>
<body  style="font-family: arial">

<?php if ($_smarty_tpl->tpl_vars['identificato']->value==true) {?>
<avviso> Utente connesso! </avviso>
<br>
<button name='Indietro' onClick="location.href='registrazione.php'"> Indietro </button>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['doppioni']->value==true) {?>
<avviso> Email non valida! </avviso>
<br>
<button name='Indietro' onClick="location.href='registrazione.php'"> Indietro </button>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['vuoto']->value==true) {?>
<avviso> Riempire tutti i campi! </avviso>
<br>
<button name='Indietro' onClick="location.href='registrazione.php'"> Indietro </button>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['diverse']->value==true) {?>
<avviso> Password non coincidente! </avviso>
<br>
<button name='Indietro' onClick="location.href='registrazione.php'"> Indietro </button>
<?php } else { ?>
<?php if ($_smarty_tpl->tpl_vars['ok']->value==true) {?>
<avviso> Profilo creato correttamente! </avviso>
<br>
<button name='Login' onClick="location.href='index.php'"> Login </button>
<?php }?>
<?php }?>
<?php }?>
<?php }?>
<?php }?>

</body>
</html><?php }} ?>
