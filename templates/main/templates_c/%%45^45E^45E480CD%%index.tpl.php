<?php /* Smarty version 2.6.26, created on 2014-09-26 14:22:56
         compiled from index.tpl */ ?>
<html>
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

<button class="bottone" id='visita' onClick="location.href='?o=1'">Accedi</br>come ospite</button>

<form id="login" method="POST" action="index.php">
 Email: <input name="username1"  type="email"  maxlength="50" required placeholder="esempio@gmail.com">
 </br>Password: <input name="password1"  type="password"  maxlength=20 required placeholder="password">
</br><input class="bottone" type="submit"  name="submit" value="Login">
</form>
      
    <?php if ($this->_tpl_vars['login'] === 'no'): ?>
    <div id="combinazione_errata" class="avviso">
    Combinazione errata!
    </div>
    <?php endif; ?>

<form id="iscrizione" method="POST" action="index.php">
Email: <input name="username" type="email"  maxlength=50 required placeholder="esempio@gmail.com">
</br>Password (tra 5 e 20 caratteri): <input name="password"  type="password" maxlength=20 pattern="<?php echo '.{5,}'; ?>
" required placeholder="password">
</br>Conferma Password: <input name="conferma_password"  type="password"  minlength=5 maxlength=20 required placeholder="password">
</br>Nome: <input name="nome"  type="name" maxlength=50 required placeholder="Mario">
</br>Cognome: <input name="cognome"  type="name" maxlength=50 required placeholder="Verdi">
</br><input class="bottone" type="submit"  name="crea_profilo" value="Crea Profilo">
</form>

  <?php if ($this->_tpl_vars['ok'] === true): ?>
<div id="conferma">
    <div id="istruzioni">
   </br>Email di conferma inviata all'indirizzo email.
   </br>Inserire il codice presente nell'email per attivare il profilo.
   </br>In caso di mancato arrivo dell'email, provare a ricompilare i campi.
   </div>
  
<form id="codice" method="POST"  action="index.php">
Codice: <input name="numero"  type="password"  maxlength=20 placeholder="codice">
</br><input class="bottone" type="submit"  name="conferma" value="Conferma">
</form>
</div>
  
    </div>
   <?php endif; ?>
  <?php if ($this->_tpl_vars['doppioni'] === true): ?>
    <div class="avviso">
    Email gi&agrave registrata!
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['diverse'] === true): ?>
    <div class="avviso">
    Password non coincidenti!
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['nonConfermato'] === true): ?>
    <div class="avviso">
    Codice errato!
    </div>
  <?php endif; ?>
  
<div class="nota">GL Calculator serve a calcolare indicaticamente il carico glicemico dei pasti assunti. In caso di patologie o di prescrizioni ricevute da un medico, attenersi a quanto detto dal medico. GL Calculator NON intende e NON pu&ograve sostituire il medico. GL Calculator NON si assume, quindi, alcuna responsabilit&agrave.
</div>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html>