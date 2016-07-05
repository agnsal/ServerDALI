<?php /* Smarty version Smarty-3.1.18, created on 2014-08-20 15:52:46
         compiled from "smarty-dir\templates\modifica.tpl" */ ?>
<?php /*%%SmartyHeaderCode:987253e629d40e31a6-20502976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b74b50e7d6ff77dc9424419ee1e7407530ee05' => 
    array (
      0 => 'smarty-dir\\templates\\modifica.tpl',
      1 => 1408542760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '987253e629d40e31a6-20502976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53e629d413cf35_47118374',
  'variables' => 
  array (
    'nome' => 0,
    'cognome' => 0,
    'ritaglio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53e629d413cf35_47118374')) {function content_53e629d413cf35_47118374($_smarty_tpl) {?><html>
<head>
<title>Modifica</title>
<link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" />
  <script type="text/javascript" src="lib/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.imgareaselect.pack.js"></script>
  <script type="text/javascript" src="script/modifica.js"></script>
  <script type="text/javascript" src="script/input_focusing.js"></script>
</head>
<body  style="font-family: arial">

<form action="cambia_nome.php" method="post">
<input class="input_focusing" type="text" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
"></input>
<input class="input_focusing" type="text" name="cognome" value="<?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
"></input>
<input type="submit" name="submit" value="Invia">
</form>

<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">Foto Profilo:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
    
<?php if ($_smarty_tpl->tpl_vars['ritaglio']->value!=null) {?>
    <img id="photo" src='<?php echo $_smarty_tpl->tpl_vars['ritaglio']->value;?>
'></img>
    <form action="crop.php" method="post">
<table>
<tr>
<td>Image source</td>
<td><input type="text" name="img_url" value="" /></td>
</tr>

<tr>
<td>Image x1 value</td>
<td> <input type="text" name="x1" value="" /></td>
</tr>

<tr>
<td>Image y1 value</td>
<td> <input type="text" name="y1" value="" /> </td>
</tr>

<tr>
<td>Image x2 value</td>
<td> <input type="text" name="x2" value="" /> </td>
</tr>

<tr>
<td>Image y2 value</td>
<td> <input type="text" name="y2" value="" /> </td>
</tr>

<tr>
<td>selected height</td>
<td> <input type="text" name="height" value="" /> </td>
</tr>

<tr>
<td>selected width</td>
<td> <input type="text" name="width" value="" /> </td>
</tr>

<tr>
<td>&nbsp;</td>
<td> <input type="submit" name="submit" value="crop image" /> </td>
</tr>
</table>
<?php }?>

    
    
    
    
</body>
</html><?php }} ?>
