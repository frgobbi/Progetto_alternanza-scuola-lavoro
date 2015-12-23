<html>
    <head>
        <title>Successo</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/regole.css">
        <meta http-equiv="refresh" content="5;URL=../inserimento.html">
    </head>
    <body>
        <?php
            /* 
            * Questa pagina consente l'inserimento di nuovi record
            * all'interno del file sequenziale.
            */
        
            /*Collegamento della pagina contenente la classe 
            * "file_sequenziali".
            */
            require("file_sequenziali.php");
               
            //Ottenimento dei valori inseriti dall'utente tramite la form.
            $nome = $_POST['nomeA']; 
            $cognome = $_POST['cognome'];
            $matricola = $_POST['matricola'];
            $anno = $_POST['anno'];
            $asl = $_POST['asl'];
            $azienda = $_POST['azienda'];
            $tutor = $_POST['tutor'];
            //Concatenazione dei vari elementi in una stringa.
            $stringa = $matricola.";".$nome.";".$cognome.";".$azienda.";".$asl.";".$anno.";".$tutor."\n";
            /*Scrittura della stringa sul file tramite il metodo statico
             * "scrivi_dati()" della classe "file_sequenziali".
             */
             file_sequenziali::scrivi_dati('../File/ASL.csv',$stringa);
            
            //Notifica all'utente che la registrazione è andata a buon fine.
            echo("<h3 id=\"red\"> Lo studente &egrave; stato registrato!</h3>");
            
            echo("<h3 id=\"red\">Reindirizzamento tra 5 secondi...</h3>");
           ?>
    </body>
</html>
      