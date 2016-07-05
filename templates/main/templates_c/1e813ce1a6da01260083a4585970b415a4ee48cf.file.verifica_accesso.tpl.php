<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 18:55:41
         compiled from "smarty-dir\templates\verifica_accesso.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2539537630929fd8a9-78851021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e813ce1a6da01260083a4585970b415a4ee48cf' => 
    array (
      0 => 'smarty-dir\\templates\\verifica_accesso.tpl',
      1 => 1400259200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2539537630929fd8a9-78851021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53763092a72bc4_03649194',
  'variables' => 
  array (
    'nome' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53763092a72bc4_03649194')) {function content_53763092a72bc4_03649194($_smarty_tpl) {?><html>
<head>
<title>Esito dell'accesso</title>
</head>
<body style="font-family: arial">

	Benvenuto <b> <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 </b> 
	<hr>
	<br>

	<a href="logout.php">logout</a>	




</body>
</html>
<?php }} ?>
