<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 17:44:01
         compiled from "smarty-dir\templates\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1857654144e901db595-92130172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f737db9b089b4ee690308db48ffe7750ed945b' => 
    array (
      0 => 'smarty-dir\\templates\\404.tpl',
      1 => 1410882239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1857654144e901db595-92130172',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54144e90235328_83170798',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54144e90235328_83170798')) {function content_54144e90235328_83170798($_smarty_tpl) {?><html>
<head>
<title>404</title>
  <script type="text/javascript" src="lib/jquery.min.js"></script>
  <script type="text/javascript" src="script/404.js"></script>
  <link rel="stylesheet" href="css/generico.css">
  <link rel="stylesheet" href="css/404.css">
</head>
<body>

    <div class="titolo">?</div>
   
<div class="descrizione">
    Siamo spiacenti, la pagina richiesta non &egrave disponibile. Probabilmente c'&egrave stato un errore nella digitazione dell'indirizzo.
</div>

<button id='indietro'>Indietro</button>
 <button id="home" name='Indietro' onClick="location.href='index.php'">Home</button>
    
    <img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html><?php }} ?>
