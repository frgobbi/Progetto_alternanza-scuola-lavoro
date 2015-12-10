<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("file_sequenziali.php");

session_start();

$nome = $_POST['nome']; 
$cognome = $_POST['cognome'];
$matricola = $_POST['matrcola'];
$anno = $_POST['anno'];
$asl = $_POST['asl'];
$azienda = $_POST['azienda'];
$tutor = $_POST['tutor'];

$file = $_SESSION['File'];

$stringa = $matricola.";".$nome.";".$cognome.";".$anno.";".$asl.";".$azienda.";".$tutor."\n";

//$file->scrivi_dati('File/ASL.csv',$stringa);


echo("<h3> Lo studente &egrave; stato registrato!! :-)</h3>");
    

?>


    



