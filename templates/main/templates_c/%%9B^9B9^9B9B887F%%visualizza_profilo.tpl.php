<?php /* Smarty version 2.6.26, created on 2014-10-19 16:40:20
         compiled from visualizza_profilo.tpl */ ?>
<html>
<head>
<title>Visualizza Profilo</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/visualizza_profilo.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/profilo.css">
</head>
<body>

<?php if ($this->_tpl_vars['autorizzato'] == true): ?>
    <div class="titolo"><?php echo $this->_tpl_vars['persona']['nome']; ?>
 <?php echo $this->_tpl_vars['persona']['cognome']; ?>
</div>
    
<button id="logout" name='Logout' onClick="location.href='?t=l';"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='?t=b';"> Bacheca </button>
<button id="profilo" name='Profilo' onClick="location.href='?t=p';"> Profilo </button>

<img id="foto" src="<?php echo $this->_tpl_vars['persona']['foto']; ?>
"></img>
<div class="dati">
    <?php if ($this->_tpl_vars['persona']['rintracciabile'] == '1'): ?>
    <br/>Email: <?php echo $this->_tpl_vars['persona']['username']; ?>

    <?php endif; ?>
    </br>Post pubblicati: <?php echo $this->_tpl_vars['npost']; ?>

    </br></br>Su di me:</br><?php echo $this->_tpl_vars['persona']['info']; ?>

<div class="valutazione">
<br/>Voti ricevuti: <div id="voti"><?php echo $this->_tpl_vars['persona']['voto']; ?>
</div>
</div>
</div>

<div id="punteggio" class="votazione">
    <?php if (! $this->_tpl_vars['havotato']): ?>
   <input type="button" class="vota" id="<?php echo $this->_tpl_vars['persona']['voto']; ?>
" value="Vota!"/>
   <input type="button" class="annullaVoto" id="<?php echo $this->_tpl_vars['persona']['voto']; ?>
" value="Annulla voto" style="visibility:hidden"/> 
    <?php else: ?>
   <input type="button" class="annullaVoto" id="<?php echo $this->_tpl_vars['persona']['voto']; ?>
" value="Annulla voto"/>
   <input type="button" class="vota" id="<?php echo $this->_tpl_vars['persona']['voto']; ?>
" value="Vota!" style="visibility:hidden"/>
    <?php endif; ?>
</div>

    <?php if ($this->_tpl_vars['posts'] == true): ?>
<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
    <div class="post">
    <img class="immagine"src='<?php echo $this->_tpl_vars['post']['fotoProfilo']; ?>
'></img>
    <div class="autore"><?php echo $this->_tpl_vars['post']['nomeAutore']; ?>
 <?php echo $this->_tpl_vars['post']['cognomeAutore']; ?>
</br>Voti: <?php echo $this->_tpl_vars['post']['voto']; ?>
</div>
    <div class="testo"><?php echo $this->_tpl_vars['post']['testo']; ?>
</div>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<?php else: ?>
    <button id="esci2" name='Logout' onClick="location.href='?t=l'"> Esci </button>
    <button id="bacheca2" name='Bacheca' onClick="location.href='?t=b'"> Bacheca </button>
        
    <div class="descrizione">
        Per visualizzare il profilo di un utente bisogna essere iscritti ed avere effettuato il login.
    </div>
<?php endif; ?>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

  
</body>
</html>