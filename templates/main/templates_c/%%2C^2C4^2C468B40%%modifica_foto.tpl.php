<?php /* Smarty version 2.6.26, created on 2014-10-19 15:34:48
         compiled from modifica_foto.tpl */ ?>
<html>
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
    
    <button id="profilo" name='fatto' onClick="location.href='?t=p'">Profilo</button>
    <button id="logout" name='Logout' onClick="location.href='?t=l'"> Logout </button>

<form id="selezione" action="index.php?t=p&st=mf" method="post"
enctype="multipart/form-data">
<label for="file">Immagine:</label>
</br><input type="file" name="file" id="file"><br>
</br><input type="submit" name="submit" value="Submit">
</form>
    
<?php if ($this->_tpl_vars['ritaglio'] != null): ?>
 <img id="photo" src='<?php echo $this->_tpl_vars['ritaglio']; ?>
'></img>
<form id="crop" action="index.php?t=p&st=mf" method="post">
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
<?php endif; ?>

    
    
    
    
</body>
</html>