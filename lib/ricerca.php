
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require("file_sequenziali.php");
session_start();

$matricola=implode($_POST['select']);

if(strcmp($matricola,"Scegli...")!=0)
{

$oggetto=$_SESSION['oggetto'];



$array_record=$oggetto->ricerca_studenti($matricola);


$htmlcode = '<table class="table table-bordered" id="tab">';


  
for($i=0;$i<count($array_record);$i++)
{
    $oreASL=0;
    $htmlcode.='<tr>'."\n";
    $campi = explode(";",$array_record[$i]);
    $oreASL+=$campi[4];
    
    foreach($campi as $campo)
    {
        $htmlcode.= "   <td>".$campo."</td>"."\n";
        
    }
    $htmlcode.='</tr>';
    
}


$htmlcode.='</table>';


/*
$htmlcode.='<tr>';
$htmlcode.='<td>Ore totali ASL</td>';
$htmlcode.='<td colspan=6>'.$oreASL.'</td>';
$htmlcode.='</tr>';
 * 
 */

echo $htmlcode;
}





?>


