<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 17:32:54
         compiled from "smarty-dir\templates\public_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:206053762fa6144ff9-04791443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6575e5ed32399aaccb323c0b36ed54f4a5b9849c' => 
    array (
      0 => 'smarty-dir\\templates\\public_info.tpl',
      1 => 1275316952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '206053762fa6144ff9-04791443',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'identificato' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53762fa61b2618_37196757',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53762fa61b2618_37196757')) {function content_53762fa61b2618_37196757($_smarty_tpl) {?><html>
<head>
<title>Parte pubblica</title>
</head>
<body style="font-family: arial">

<?php if ($_smarty_tpl->tpl_vars['identificato']->value==true) {?>
   Benvenuto <b> <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 </b> nella parte pubblica <br>
<?php } else { ?>
   Benvenuto nella parte pubblica del nostro sito <br>   
<?php }?>


Queste sono le informazioni rilevanti:
<ul style="color: green">
   <li> Info pubblica 1 </li>
   <li> Info pubblica 2 </li>
   <li> .... </li>
</ul>
<hr>

<?php if ($_smarty_tpl->tpl_vars['identificato']->value==true) {?>
  <br>Vai alla sezione <a href="private_info.php"> privata </a>
  <br>Vai alla sezione <a href="public_info.php"> pubblica </a>
  <br><a href="logout.php">logout</a>
<?php } else { ?>
   <br><br><a href="index.php">home page</a>   
<?php }?>

</body>
</html>
<?php }} ?>
