<?php /* Smarty version Smarty-3.1.18, created on 2014-09-17 12:45:58
         compiled from "smarty-dir\templates\modifica_foto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1110053f4aa7ab71874-15256859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c5cba0306c6094ed226a76be2ea58c4ab8a0594' => 
    array (
      0 => 'smarty-dir\\templates\\modifica_foto.tpl',
      1 => 1410882332,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1110053f4aa7ab71874-15256859',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f4aa7ac29226_49079448',
  'variables' => 
  array (
    'ritaglio' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f4aa7ac29226_49079448')) {function content_53f4aa7ac29226_49079448($_smarty_tpl) {?><html>
<head>
<title>Modifica</title>
<link rel="stylesheet" type="text/css" href="css/imgareaselect-default.css" />
  <script type="text/javascript" src="lib/jquery.min.js"></script>
  <script type="text/javascript" src="lib/jquery.imgareaselect.pack.js"></script>
  <script type="text/javascript" src="script/modifica.js"></script>
  <link rel="stylesheet" href="css/generico.css">
  <link rel="stylesheet" href="css/modifica_foto.css">
</head>
<body>
    
    <div class="titolo">IMMAGINE DEL PROFILO</div>
    
    <button id="profilo" name='fatto' onClick="location.href='profilo.php'">Profilo</button>
    <button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>

<form id="selezione" action="php/upload.php" method="post"
enctype="multipart/form-data">
<label for="file">Immagine:</label>
</br><input type="file" name="file" id="file"><br>
</br><input type="submit" name="submit" value="Submit">
</form>
    
<?php if ($_smarty_tpl->tpl_vars['ritaglio']->value!=null) {?>
 <img id="photo" src='<?php echo $_smarty_tpl->tpl_vars['ritaglio']->value;?>
'></img>
<form id="crop" action="crop.php" method="post">
<table>
<tr class="nascosto">
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
<td> <input class="bottone" type="submit" name="submit" value="Applica" /></td>
</tr>
</table>
<?php }?>

    
    
    
    
</body>
</html><?php }} ?>
