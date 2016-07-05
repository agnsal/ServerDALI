<?php /* Smarty version Smarty-3.1.18, created on 2014-09-16 17:53:27
         compiled from "smarty-dir\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2646253762e6e14ced2-06403936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0d467f5d8bce6a537db6dbb7dc4ff18ea8ef91f' => 
    array (
      0 => 'smarty-dir\\templates\\index.tpl',
      1 => 1410882343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2646253762e6e14ced2-06403936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53762e6e210400_97367628',
  'variables' => 
  array (
    'errata' => 0,
    'ok' => 0,
    'doppioni' => 0,
    'diverse' => 0,
    'nonConfermato' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53762e6e210400_97367628')) {function content_53762e6e210400_97367628($_smarty_tpl) {?><html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/index.css">
</head>
<body>
    
<div class="titolo"> GL CALCULATOR</div>
<div class="descrizione"> Il carico glicemico (in Inglese glycemic load, abbreviato in GL), &egrave molto importante per i diabetici, le persone a dieta, gli sportivi e, in generale, tutti quelli che vogliono avere un'alimentazione sana.
</br>Crea un profilo (gratuitamente) e GL Calculator ti seguir&agrave; passo passo nella pianificazione dei tuoi pasti, permettendoti di salvarli e di creare i relativi grafici.
Potrai inoltre condividere le ricette che pi&ugrave ti piacciono!
</div>

<button class="bottone" id='visita' onClick="location.href='bacheca.php'">Accedi</br>come ospite</button>

<form id="login" method="POST" action="php/verifica_accesso.php">
 Email: <input name="username"  type="email"  maxlength="50" required placeholder="esempio@gmail.com">
 </br>Password: <input name="password"  type="password"  maxlength=20 required placeholder="password">
</br><input class="bottone" type="submit"  name="submit" value="Login">
</form>
      
    <?php if ($_smarty_tpl->tpl_vars['errata']->value==true) {?>
    <div id="combinazione_errata" class="avviso">
    Combinazione errata!
    </div>
    <?php }?>

<form id="iscrizione" method="POST" action="php/crea_profilo.php">
Email: <input name="username" type="email"  maxlength=50 required placeholder="esempio@gmail.com">
</br>Password (tra 5 e 20 caratteri): <input name="password"  type="password" maxlength=20 pattern=".{5,}" required placeholder="password">
</br>Conferma Password: <input name="conferma_password"  type="password"  minlength=5 maxlength=20 required placeholder="password">
</br>Nome: <input name="nome"  type="name" maxlength=50 required placeholder="Mario">
</br>Cognome: <input name="cognome"  type="name" maxlength=50 required placeholder="Verdi">
</br><input class="bottone" type="submit"  name="crea_profilo" value="Crea Profilo">
</form>

  <?php if ($_smarty_tpl->tpl_vars['ok']->value==true) {?>
<div id="conferma">
    <div id="istruzioni">
   </br>Email di conferma inviata all'indirizzo email.
   </br>Inserire il codice presente nell'email per attivare il profilo.
   </br>In caso di mancato arrivo dell'email, provare a ricompilare i campi.
   </div>
  
<form id="codice" method="POST"  action="php/conferma_profilo.php">
Codice: <input name="numero"  type="password"  maxlength=20 placeholder="codice">
</br><input class="bottone" type="submit"  name="conferma" value="Conferma">
</form>
</div>
  
    </div>
   <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['doppioni']->value==true) {?>
    <div class="avviso">
    Email gi&agrave registrata!
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['diverse']->value==true) {?>
    <div class="avviso">
    Password non coincidenti!
    </div>
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['nonConfermato']->value==true) {?>
    <div class="avviso">
    Codice errato!
    </div>
  <?php }?>
  
<div class="nota">GL Calculator serve a calcolare indicaticamente il carico glicemico dei pasti assunti. In caso di patologie o di prescrizioni ricevute da un medico, attenersi a quanto detto dal medico. GL Calculator NON intende e NON pu&ograve sostituire il medico. GL Calculator NON si assume, quindi, alcuna responsabilit&agrave.
</div>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html>
<?php }} ?>
