<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 19:38:16
         compiled from "smarty-dir\templates\modifica_dati.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2455553f4ab2199ee88-33875021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '673830d35a135396331f4ec7b7fa4ec60d9c1b87' => 
    array (
      0 => 'smarty-dir\\templates\\modifica_dati.tpl',
      1 => 1410882319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2455553f4ab2199ee88-33875021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53f4ab21a4acb2_32907571',
  'variables' => 
  array (
    'nome' => 0,
    'cognome' => 0,
    'info' => 0,
    'rintracciabile' => 0,
    'errore' => 0,
    'cambiata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f4ab21a4acb2_32907571')) {function content_53f4ab21a4acb2_32907571($_smarty_tpl) {?><html>
<head>
<title>Modifica</title>
<script src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/elimina_profilo.js"></script>
  <link rel="stylesheet" href="css/generico.css">
  <link rel="stylesheet" href="css/modifica_dati.css">
</head>
<body>

    <div class="titolo">DATI PERSONALI</div>
    
    <button id="logout" name='Logout' onClick="location.href='logout.php'"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='bacheca.php'"> Bacheca </button>

<form id="cambia_dati" action="php/salva_dati.php" method="post">
Nome: <input type="text" name="nome" maxlength=50 placeholder="<?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
" required></input>
</br>Cognome: <input type="text" name="cognome" maxlength=50 placeholder="<?php echo $_smarty_tpl->tpl_vars['cognome']->value;?>
" required></input>
</br></br>Su di me: <textarea id="info" name="testo" type="text" maxlength=1000><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</textarea>
</br><input class="bottone" type="submit" name="submit" value="Salva">
</form>

<form id="cambia_password" action="php/cambia_password.php" method="post">
Nuova password (tra 5 e 20 caratteri): <input type="password" name="passwordNuova" maxlength=20 pattern=".{5,}" required placeholder="nuova password"></input>
</br>Vecchia password: <input type="password" name="passwordVecchia" maxlength=20 required placeholder="vecchia password"></input>
</br><input class="bottone" type="submit" name="submit" value="Cambia">
</form>

<?php if ($_smarty_tpl->tpl_vars['rintracciabile']->value=="0") {?>
<form id="rintracciabilità" action="php/cambia_rintracciabile.php" method="post">
  <input type="radio" name="rintracciabile" value="0" checked>Mantieni il mio indirizzo email privato.<br>
  <input type="radio" name="rintracciabile" value="1">Rendi visibile il mio indirizzo email.<br>
  <input class="bottone" type="submit" value="Imposta">
</form>
    <?php } else { ?>
        <form id="rintracciabilità" action="php/cambia_rintracciabile.php" method="post">
        <input type="radio" name="rintracciabile" value="0">Mantieni il mio indirizzo email privato.<br>
        <input type="radio" name="rintracciabile" value="1" checked>Rendi visibile il mio indirizzo email.<br>
        <input class="bottone" type="submit" value="Imposta">
        </form>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errore']->value==true) {?>
    <div class="avviso">
    Password non valida!
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['cambiata']->value==true) {?>
    <div class="avviso">
    Password cambiata
    </div>
<?php }?>

<button id="fatto" name='fatto' onClick="location.href='profilo.php'">Profilo</button>

<button id="elimina_utente" name='elimina_utente'>Elimina Profilo</button>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html><?php }} ?>
