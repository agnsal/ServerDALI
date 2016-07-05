<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 17:52:48
         compiled from "smarty-dir\templates\install.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3264454159e9faae016-11171508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3362c8498e0c4c6f6850df4937baca792f2544ee' => 
    array (
      0 => 'smarty-dir\\templates\\install.tpl',
      1 => 1410882765,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3264454159e9faae016-11171508',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54159e9faec825_18565559',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54159e9faec825_18565559')) {function content_54159e9faec825_18565559($_smarty_tpl) {?><html>
<head>
<title>Install</title>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/install.css">
</head>
<body>
    
    <div class="titolo">PAGINA DI INSTALLAZIONE</div>

<div>
  <form id="installazione" method="POST"  action="php/crea_config.php">
     Database Host: <input name="host"  type="text"  maxlength=50 placeholder="localhost">
     </br>Database Name: <input name="name"  type="text"  maxlength=50 placeholder="gl calculator">
     </br>Database UserName: <input name="user"  type="text"  maxlength=50 placeholder="nome">
     </br>Database Password: <input name="password"  type="password"  maxlength=50 placeholder="password">
     </br><input class="bottone" type="submit"  name="imposta" value="Imposta">
  </form>
</div>

    
    <img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html><?php }} ?>
