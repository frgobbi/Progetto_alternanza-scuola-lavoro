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
        
         <meta http-equiv="refresh" content="5;URL=../ins.php">
        <style type="text/css">
            body {
                background-color: #F4B183;
            }
            h3 {
                color: #0066FF;
                text-align:center;
            }
        </style>
    </head>
    <body>
        <?php
               /* 
                * To change this license header, choose License Headers in Project Properties.
                * To change this template file, choose Tools | Templates
                * and open the template in the editor.
                */

               require("file_sequenziali.php");

               $nome = $_POST['nomeA']; 
               $cognome = $_POST['cognome'];
               $matricola = $_POST['matricola'];
               $anno = $_POST['anno'];
               $asl = $_POST['asl'];
               $azienda = $_POST['azienda'];
               $tutor = $_POST['tutor'];

               //session_start();

               //$file = $_SESSION['File'];

               $stringa = $matricola.";".$nome.";".$cognome.";".$anno.";".$asl.";".$azienda.";".$tutor."\n";

             file_sequenziali::scrivi_dati('../File/ASL.csv',$stringa);
            
            
            echo("<h3> Lo studente &egrave; stato registrato!</h3>");
            
            echo("<h3>Reindirizzamento tra 5 secondi...</h3>");
           ?>
    </body>
</html>
      