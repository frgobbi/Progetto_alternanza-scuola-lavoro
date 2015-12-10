
<?php

require("file_sequenziali.php");

$matricola=implode($_POST['select']);

if(strcmp($matricola,"Scegli...")!=0)
{
   

    
    $file = new file_sequenziali('../File/ASL.csv');
    $matricola=implode($_POST['select']);
    $array_record=$file->ricerca_studenti($matricola);

    $intestazione=explode(";", $array_record[0]);

    $htmlcode = '<table class="table table-bordered">';
    $htmlcode.='<caption>DATI STUDENTE</caption>';
    $htmlcode.='<thead>';
    foreach($intestazione as $elemento)
    {
        $htmlcode.='<th>'.$elemento.'</th>';
    }
    $htmlcode.='</thead>';
    $htmlcode.='<tbody>';

    for($i=1;$i<count($array_record);$i++)
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

    $htmlcode.='</tbody>';
    $htmlcode.='</table>';

    echo $htmlcode;
}

?>


