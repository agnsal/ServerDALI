<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/generico.css">
<link rel="stylesheet" href="css/home.css">
</head>
<body>
    
<div class="titolo">SERVER DALI</div>
<div class="descrizione">I dati inseriti verranno passati agli agenti DALI.</div>

<form id="dati" method="POST"  action="index.php">
Matricola: <input name="matricola"  type="number"  maxlength=20 placeholder="matricola"/>
</br>Nome:<input name="nome"  type="name" maxlength=50 required placeholder="Mario"/>
</br>Cognome: <input name="cognome"  type="name" maxlength=50 required placeholder="Verdi"/>
</br>Ora partenza:<input name="x"  type="number" maxlength=4 required placeholder="0"/>
</br>Ora arrivo:<input name="y"  type="number" maxlength=4 required placeholder="0"/>
</br><input type="checkbox" name="animali" value="animali"/> Ho amimali domestici.
</br>Colore preferito:<input name="colore"  type="name" maxlength=50 required placeholder="blu"/>
</br>Numero di amici:<input name="amici"  type="number" maxlength=4 required placeholder="0"/>
</br>Ore passate al computer in un giorno:<input name="pc"  type="number" maxlength=2 required placeholder="0"/>
</br><input class="bottone" type="submit"  name="invia" value="Invia">
</form>
</div>

</body>
</html>
