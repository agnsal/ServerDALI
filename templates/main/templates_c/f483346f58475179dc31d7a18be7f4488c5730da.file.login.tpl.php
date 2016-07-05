<?php /* Smarty version Smarty-3.1.18, created on 2014-05-17 14:56:23
         compiled from "smarty-dir\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2233553762fa29eefb0-78724259%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f483346f58475179dc31d7a18be7f4488c5730da' => 
    array (
      0 => 'smarty-dir\\templates\\login.tpl',
      1 => 1400331382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2233553762fa29eefb0-78724259',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53762fa2a87558_08759268',
  'variables' => 
  array (
    'identificato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53762fa2a87558_08759268')) {function content_53762fa2a87558_08759268($_smarty_tpl) {?>
<html>
<head>
<title>Login Page</title>
</head>
<body  style="font-family: arial">
<?php if ($_smarty_tpl->tpl_vars['identificato']->value==false) {?>
  <center>
  <form method="POST"  action="verifica_accesso.php">
  <table border>
  <tr>
     <td>username</td>
     <td><input name="username"  type="email"  maxlength=50></td>
  </tr>
  <tr>
     <td>password</td>
     <td><input name="password"  type="password"  maxlength=20></td>
  </tr>
  <tr>
  <td><input type="submit"  name="submit" value="accedi"></td><td></td>
  </tr>
  </form>
  </table>
  </center>

<?php }?>

  
</body>
</html>
<?php }} ?>
