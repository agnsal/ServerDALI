<?php /* Smarty version 2.6.26, created on 2014-10-15 18:00:45
         compiled from install.tpl */ ?>
<html>
<head>
<title>Install</title>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/install.css">
</head>
<body>
    
    <div class="titolo">PAGINA DI INSTALLAZIONE</div>

<div>
  <form id="installazione" method="POST"  action="index.php">
     Database Host: <input name="host"  type="text"  maxlength=50 placeholder="localhost">
     </br>Database Name: <input name="name"  type="text"  maxlength=50 placeholder="gl calculator">
     </br>Database UserName: <input name="user"  type="text"  maxlength=50 placeholder="nome">
     </br>Database Password: <input name="password"  type="password"  maxlength=50 placeholder="password">
     </br><input class="bottone" type="submit"  name="imposta" value="Imposta">
  </form>
</div>

    
    <img id="ananas" src="img/ananas.png"></img>
<img id="carota" src="img/carota.png"></img>
<img id="uva" src="img/uva.png"></img>
<img id="bicchiere" src="img/bicchiere.png"></img>

</body>
</html>