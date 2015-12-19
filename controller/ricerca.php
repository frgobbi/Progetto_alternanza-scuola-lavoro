<?php
/*Questa pagina PHP consente di estrapolare i dati dal file sequenziale (tramite
 * i metodi definiti nella classe "file_sequenziali") per poi genereare con essi
 *  l'apposita tabella.
 */

//Collegamento alla pagine php contenente la classe "file sequenziali".
require("file_sequenziali.php");

//$matricola=implode($_POST['select']);

/*Definizione delle operazioni da eseguire nel caso in cui l'utente abbia
 * scelto una matricola dalla select.
 */
if(strcmp($matricola,"Scegli...")!=0)
{
    /*Creazione di un nuovo oggetto ($file) appartenente alla classe 
     * "file_sequenziali().
     */
    $file = new file_sequenziali('../File/ASL.csv');
    /*Salvataggio della matricola inviata tramite la form all'interno della 
    * variabile "$matricola".
    */
    $matricola=implode($_POST['select']);
    /*Ottenimento dell'array contenente i vari record del file tramite il metodo
     * "ricerca_studenti().
     */
    $array_record=$file->ricerca_studenti($matricola);
    /*Ottenimento dei vari campi che compongono l'intestazione della tabella
     * tramite la funzione "explode()".
     */
    $intestazione=explode(";", $array_record[0]);
    //-----Definizione del codice html della tabella.-----
    $htmlcode = '<table class="table table-bordered">';
    $htmlcode.='<caption>DATI STUDENTE</caption>';
    /*Definizione dell'intestazione della tabella.*/
    $htmlcode.='<thead>';
    foreach($intestazione as $elemento)
    {
        $htmlcode.='<th>'.$elemento.'</th>';
    }
    $htmlcode.='</thead>';
    $htmlcode.='<tbody>';
    //Popolamento della tabella per riga.
    for($i=1;$i<count($array_record);$i++)
    {
        //$oreASL=0;
        $htmlcode.='<tr>'."\n";
        $campi = explode(";",$array_record[$i]);
        //$oreASL+=$campi[4];
        //Popolamento dei campi della tabella.
        for($j=0;$j<count($campi);$j++)
        {
            /*Il controllo serve a definire su quali campi dovrà essere gestito
             * il tooltip, in particolare sui campi che riportano l'ID
             * dell'azienda.
             */
            if($j==3)
            {
                $htmlcode.= "<td class=\"test\" onmouseover=\"settaTitolo(this)\">".$campi[$j]."</td>"."\n";
            }
            else
            {
                $htmlcode.='<td>'.$campi[$j].'</td>'."\n";
            }
        }
        //Chiusura della riga.
        $htmlcode.='</tr>';

    }
    //Chiusura del corpo della tabella.
    $htmlcode.='</tbody>';
    //Chiusura della tabella.
    $htmlcode.='</table>';
    //La pagine restituisce il codice html di tutta la tabella.
    echo $htmlcode;
}

?>


