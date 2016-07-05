<?php /* Smarty version 2.6.26, created on 2014-10-19 15:24:09
         compiled from modifica_dati.tpl */ ?>
<html>
<head>
<title>Modifica</title>
<script src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/elimina_profilo.js"></script>
  <link rel="stylesheet" href="css/generico.css">
  <link rel="stylesheet" href="css/modifica_dati.css">
</head>
<body>

    <div class="titolo">DATI PERSONALI</div>
    
    <button id="logout" name='Logout' onClick="location.href='?t=l'"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='?t=b'"> Bacheca </button>

<form id="cambia_dati" action="index.php?t=p&st=md" method="post">
Nome: <input type="text" name="nome" maxlength=50 placeholder="<?php echo $this->_tpl_vars['persona']['nome']; ?>
" required></input>
</br>Cognome: <input type="text" name="cognome" maxlength=50 placeholder="<?php echo $this->_tpl_vars['persona']['cognome']; ?>
" required></input>
</br></br>Su di me: <textarea id="info" name="testo" type="text" maxlength=1000><?php echo $this->_tpl_vars['persona']['info']; ?>
</textarea>
</br><input class="bottone" type="submit" name="submit" value="Salva">
</form>

<form id="cambia_password" action="index.php?t=p&st=md" method="post">
Nuova password (tra 5 e 20 caratteri): <input type="password" name="passwordNuova" maxlength=20 pattern="<?php echo '.{5,}'; ?>
" required placeholder="nuova password"></input>
</br>Vecchia password: <input type="password" name="passwordVecchia" maxlength=20 required placeholder="vecchia password"></input>
</br><input class="bottone" type="submit" name="submit" value="Cambia">
</form>

<?php if ($this->_tpl_vars['rintracciabile'] === '0'): ?>
<form id="rintracciabilità" action="index.php?t=p&st=md" method="post">
    Indirizzo email privato.</br>
  <input type="radio" name="rintracciabile" value="no" checked>Mantieni il mio indirizzo email privato.<br>
  <input type="radio" name="rintracciabile" value="si">Rendi visibile il mio indirizzo email.<br>
  <input class="bottone" type="submit" value="Imposta">
</form>
    <?php else: ?>
        <form id="rintracciabilità" action="index.php?t=p&st=md" method="post">
            Indirizzo email visibile.</br>
        <input type="radio" name="rintracciabile" value="no">Mantieni il mio indirizzo email privato.<br>
        <input type="radio" name="rintracciabile" value="si" checked>Rendi visibile il mio indirizzo email.<br>
        <input class="bottone" type="submit" value="Imposta">
        </form>
<?php endif; ?>

<?php if ($this->_tpl_vars['errore'] == true): ?>
    <div class="avviso">
    Password non valida!
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['cambiata'] == true): ?>
    <div class="avviso">
    Password cambiata
    </div>
<?php endif; ?>

<button id="fatto" name='fatto' onClick="location.href='?t=p';">Profilo</button>

<button id="elimina_utente" name='elimina_utente'>Elimina Profilo</button>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html>