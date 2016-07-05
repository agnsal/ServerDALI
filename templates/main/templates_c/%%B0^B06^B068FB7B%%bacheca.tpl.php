<?php /* Smarty version 2.6.26, created on 2014-10-19 15:03:45
         compiled from bacheca.tpl */ ?>
<html>
<head>
<title>Bacheca</title>
<script type="text/javascript" src="lib/jquery.min.js"></script>
<script type="text/javascript" src="script/bacheca.js"></script>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/bacheca.css">
</head>
<body>

<div class="titolo">BACHECA</div>

<?php if ($this->_tpl_vars['identificato'] == true): ?>
<button id="profilo" name='GL Calcolator' onClick="location.href='?t=p'"> Profilo </button>
<button id="logout" name='Logout' onClick="location.href='?t=l';"> Logout </button>

<form id="creaPost" action="index.php" method="post">
<textarea id="text_area" name="testo" type="text" placeholder="Condividi idee e ricette!"></textarea>
<input id="inviaPost" class="bottone" type="submit" name="submit" value="Invia">
</form>

<?php else: ?>
 <button id="esci" name='Indietro' onClick="location.href='index.php';"> Esci </button>
 <?php endif; ?>

 <div id="elenco_post">
     <?php if ($this->_tpl_vars['posts'] == true): ?>
<?php $_from = $this->_tpl_vars['posts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['post']):
?>
    <div class="post" id='<?php echo $this->_tpl_vars['post']['matricola']; ?>
'>
    <img class="immagine" src='<?php echo $this->_tpl_vars['post']['fotoProfilo']; ?>
'></img>
    <div class="autore" onClick="location.href='?t=vp&visitato='+'<?php echo $this->_tpl_vars['post']['matricola']; ?>
';"><?php echo $this->_tpl_vars['post']['nomeAutore']; ?>
 <?php echo $this->_tpl_vars['post']['cognomeAutore']; ?>
</br>Voti: <?php echo $this->_tpl_vars['post']['voto']; ?>
</div>
    <div class="testo"><?php echo $this->_tpl_vars['post']['testo']; ?>
</div>
    <?php if ($this->_tpl_vars['utente'] == $this->_tpl_vars['post']['matricola']): ?>
        <button class="elimina" id='<?php echo $this->_tpl_vars['post']['id']; ?>
' >Elimina</button>
    <?php endif; ?>
    </div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
</div>

<img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>



	
        





</body>
</html>