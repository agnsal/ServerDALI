<?php /* Smarty version Smarty-3.1.18, created on 2014-05-16 19:42:36
         compiled from "smarty-dir\templates\diario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3232553764e0c741d52-73196360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73104eca6c35e7c6b35fed9bcb76637b8163bd2c' => 
    array (
      0 => 'smarty-dir\\templates\\diario.tpl',
      1 => 1400262076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3232553764e0c741d52-73196360',
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
  'unifunc' => 'content_53764e0c7e5e77_07645927',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53764e0c7e5e77_07645927')) {function content_53764e0c7e5e77_07645927($_smarty_tpl) {?><html>
<head>
<title>Parte Privata</title>
</head>
<body  style="font-family: arial">

<?php if ($_smarty_tpl->tpl_vars['identificato']->value==true) {?>
   Benvenuto <b> <?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
 </b> nella parte privata <br>
   Queste sono le informazioni rilevanti:
  <ul style="color: red">
    <li> Info privata 1 </li>
    <li> Info privata 2 </li>
    <li> .... </li>
  </ul>


<button name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>


<?php } else { ?>
   <H1><B>Accesso non autorizzato</B></H1>
   <a href="index.php">torna all'inizio</a>   
<?php }?>

</body>
</html>
<?php }} ?>
