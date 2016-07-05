<?php /* Smarty version Smarty-3.1.18, created on 2014-05-17 22:06:54
         compiled from "smarty-dir\templates\registrazione.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6070537766c104c496-76848744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bf7231a39719df1d1be9b24b706ca96fd3ba77c' => 
    array (
      0 => 'smarty-dir\\templates\\registrazione.tpl',
      1 => 1400357210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6070537766c104c496-76848744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537766c10c6298_38805781',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537766c10c6298_38805781')) {function content_537766c10c6298_38805781($_smarty_tpl) {?><html>
<head>
<title>Registrazione</title>
</head>
<body  style="font-family: arial">
    
  <center>
  <form method="POST"  action="crea_profilo.php">
  <table border>
  <tr>
     <td>username</td>
     <td><input name="username"  type="email"  maxlength=50></td>
  </tr>
  <tr>
     <td>password</td>
     <td><input name="password"  type="password"  minlength=1 maxlength=20></td>
  </tr>
    <tr>
     <td>conferma password</td>
     <td><input name="conferma_password"  type="password"  minlength=1 maxlength=20></td>
  </tr>
   <tr>
     <td>nome</td>
     <td><input name="nome"  type="name"  minlength=1 maxlength=50></td>
  </tr>
  <tr>
     <td>cognome</td>
     <td><input name="cognome"  type="name"  minlength=1 maxlength=50></td>
  </tr>
  <tr>
  <td><input type="submit"  name="crea_profilo" value="Crea Profilo"></td><td></td>
  </tr>
  </form>
  </table>
  </center>
  
</body>
</html><?php }} ?>
