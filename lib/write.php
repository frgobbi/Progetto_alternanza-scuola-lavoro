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
       
       session_start();

       $file = $_SESSION['File'];

       $stringa = $matricola.";".$nome.";".$cognome.";".$anno.";".$asl.";".$azienda.";".$tutor."\n";

     // $file->scrivi_dati('File/ASL.csv',$stringa);
      echo($stringa);   
       echo("<h3> Lo studente &egrave; stato registrato!! :-)</h3>");
   ?>
      