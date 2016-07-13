<html>
<head>
<title>Dati</title>
<link rel="stylesheet" href="css/home.css">
</head>
<body>
    
    <div id="risposta">
    Dati elaborati dagli agenti:
    </br>Atena ha valutato che le ore al pc sono
       {if $saggezza==0} troppe
           {else} giuste
        {/if}.
    </br>Crono ha elaborato {$tempo} come tempo di viaggio.
    </br>Tempo 
        {if $tempo<0} impossibile
            {else} possibile
        {/if}
    </br>Mnemosine 
        {if $lavoro==="0"} non ha riscontrato alcun incarico
             {else} ha riscontrato l'incarico {$lavoro}
        {/if}.
    </br>Psiche ha valutato che sei felice {$felice} su 10.
    </div>

</body>
</html>
