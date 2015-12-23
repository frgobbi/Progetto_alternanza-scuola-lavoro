<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ricerca_Matricole</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Font awesome library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Collegamento al file contenente le regole CSS -->
        <link rel="stylesheet" href="./CSS/regole.css">
        <!-- jQuery User Interface (jQuery UI) library -->
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script type="text/javascript">
            var link='Controller/ricerca.php';
            var dati;
            var descrizione;
            /*Funzione "apriTooltip()", necessaria per la visualizzazione dei
             * tooltip contenenti le informazioni sull'azienda.
             */
            function apriTooltip(pulsante)
            {
                /*Il testo del tooltip viene ricavato dal valore dell'attributo
                * "data-title" dell'elemento html.
                */
               descrizione = pulsante.getAttribute('data-title')
               /*Quando l'utente clicca sull'elemento html interessato, viene
                * fatto apparire il tooltip.
                */
               $(pulsante).tooltip({ items: ".cella",content: descrizione});
               $(pulsante).tooltip("open");
                
            }
            /*Funzione "chiudiTooltip()".Quando l'utente porta il puntatore del 
             * mouse fuori dal tooltip esso viene nascosto.
             */
            function chiudiTooltip(pulsante)
            {
                $(pulsante).tooltip("disable");
            }
        </script>
    </head>
    <body>
        <div class="col-md-11">
           <h1>Alternanza Scuola Lavoro </h1>
        </div>
        <div class="col-md-1">
            <br><br>
            <button type="button" class="btn btn-lg btn-primary" onclick="window.location.href='index.html'"><i class="fa fa-home fa-2x"></i></button>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <form class="form-group" action=ricerca_matricole.php method="POST">
                <label for="select">Seleziona una matricola</label>
                <select id="select" name="select[]" class="form-control" onchange=submit()>
                    <?php
                        function generaTooltip($id)
                        {
                            $string ="TOOLTIP DI PROVA"."\n";
                            $string.="L'azienda selezionata ha ID: ".$id;
                            return  $string;
                        }
                        function generaTabella($matricola,$file)
                        {
                            /*Definizione delle operazioni da eseguire nel caso in cui l'utente abbia
                             * scelto una matricola dalla select.
                             */
                            if(strcmp($matricola,"Scegli...")!=0)
                            {
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
                                            $htmlcode.= "<td class=\"cella\">".$campi[$j]."<br>"."<button onclick=apriTooltip(this) onmouseout=chiudiTooltip(this) data-title=\"".generaTooltip($campi[$j])."\" class=\"btn btn-info btn-block\"><i class=\"fa fa-info\"></i></button>"."</td>"."\n";
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
                        }
                        /*Funzione utilizzata per generare alcuni dei contenuti
                         * della pagina tra cui la select e la div contenente
                         * l'immagine.
                         */
                        function generaContenuti()
                        {
                            /*Il seguente frammento di codice php consente di 
                             * popolare la select delle matricole.
                            */
                            /*Collegamento della pagina contenente la classe
                            * "file_sequenziali".
                            */
                            require("controller/file_sequenziali.php");
                            /*Creazione di un oggetto appartenente alla classe
                            * "file_sequenziali" ($file).
                            */
                            $file = new file_sequenziali('File/ASL.csv');
                            /*Salvataggio delle matricole in un array chiamato
                            * "array_mat".
                            */
                            $array_mat=$file->preleva_matricole();
                            //Stampa dei differenti elementi della select.
                            echo "<option id=\"vuota\">Scegli...</option>";
                            foreach ($array_mat as $elemento)
                            {
                                $opzione = '<option';            
                                if(isset($_POST['select']))
                                {
                                    if(strcmp($elemento,implode($_POST['select']))==0)
                                    {
                                        $opzione.=" "."selected";
                                    }
                                }    
                                $opzione.= " value=\"$elemento\">".$elemento."</option>"."\n";
                                echo $opzione;
                            }
                            /*Chiusra della select e della relativa form.*/
                            echo ("</select>");
                            echo ("</form>");
                            echo("</div>");
                            /*Stampa della div contenente l'immagine.*/
                            echo ("<div class=\"col-md-4\">");
                            echo ("<img id=\"img\" src=\"http://francescobinucci.altervista.org/progetto2/img/stage.jpg\"/>");
                            echo ("</div>");
                            /*Se l'utente ha selezionato una delle opzioni
                             * dalla select verrà generata la tabella.
                             */
                            if(isset($_POST['select']))
                            {
                                echo ("<div class=\"col-md-8 col-md-offset-2\" id=\"tabella\">");
                                generaTabella(implode($_POST['select']),$file);
                                echo ("</div>");             
                            }
                        }  
                        //Invocazione della funzione "generaContenuti".
                        generaContenuti();
                    ?>
    </body>
</html>
		