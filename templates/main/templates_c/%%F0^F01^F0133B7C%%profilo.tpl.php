<?php /* Smarty version 2.6.26, created on 2014-10-19 15:15:48
         compiled from profilo.tpl */ ?>
<html>
<head>
<title>Profilo</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/bacheca.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/profilo.css">
</head>
<body>
    
<div class="titolo"><?php echo $this->_tpl_vars['persona']['nome']; ?>
 <?php echo $this->_tpl_vars['persona']['cognome']; ?>
</div>
    
<button id="logout" name='Logout' onClick="location.href='?t=l';"> Logout </button>
<button id="bacheca" name='Bacheca' onClick="location.href='?t=b';"> Bacheca </button>
<button id="gl" name='GL' onClick="location.href='?t=p&st=g';">GL</button>

<div class="fotoProfilo"></div>
<img id="foto" src='<?php echo $this->_tpl_vars['persona']['foto']; ?>
'></img>
<button id="cambia_foto" name='Modifica' onClick="location.href='?t=p&st=mf';"> Modifica immagine </button>
</div>

<div class="dati">
</br>Email: <?php echo $this->_tpl_vars['persona']['username']; ?>

</br>Voti ricevuti: <?php echo $this->_tpl_vars['persona']['voto']; ?>

</br>Post pubblicati: <?php echo $this->_tpl_vars['npost']; ?>

</br></br>Su di me:</br><?php echo $this->_tpl_vars['persona']['info']; ?>

</br></br><button name='Modifica' onClick="location.href='?t=p&st=md';"> Modifica dati </button>
</div>

<?php if ($this->_tpl_vars['posts'] == true): ?>
<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
    <div class="post">
    <img class="immagine" src='<?php echo $this->_tpl_vars['post']['fotoProfilo']; ?>
'></img>
    <div class="autore"><?php echo $this->_tpl_vars['post']['nomeAutore']; ?>
 <?php echo $this->_tpl_vars['post']['cognomeAutore']; ?>
</br>Voti: <?php echo $this->_tpl_vars['post']['voto']; ?>
</div>
    <div class="testo"><?php echo $this->_tpl_vars['post']['testo']; ?>
</div>
    <button class="elimina" id='<?php echo $this->_tpl_vars['post']['id']; ?>
'>Elimina</button>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

  
</body>
</html>