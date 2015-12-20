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
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- Bootstrap library -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- Font awesome library -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="controller/font-awesome-4.5.0/css/font-awesome.css">
        <link rel="stylesheet" href="controller/font-awesome-4.5.0/css/font-awesome.min.css">
        <!-- Collegamento al file contenente tutte le regole CSS -->
        <link rel="stylesheet" href="./CSS/regole.css">
        <!-- jQuery User Interface (jQuery UI) library -->
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <style type="text/css">
        @font-face {
            font-family: "myfont";
            src: url("controller/font-awesome-4.5.0/fonts/fontawesome-webfont.woff") format('woff');
            font-weight: bold;
        }
        
        @font-face {
            font-family: "myfont";
            src: url("controller/font-awesome-4.5.0/fonts/fontawesome-webfont.woff2") format('woff2');
            font-weight: bold;
        }
        
        @font-face {
            font-family: 'font_name';
            src: url('controller/font-awesome-4.5.0/fonts/fontawesome-webfont.ttf') format('truetype');
            ;
        }
        </style>
        
        <script type="text/javascript">
            var link='controller/ricerca.php';
            var dati;
            /*Funzione messa a disposizione dalla libreria jQuery User Interface
             * che consente di visualizzare i tooltip con i dati relativi alle
             * aziende al passaggio con il mouse sulle rispettive celle.
             */
            $(function() {
		$( document ).tooltip();
            });
            /*Funzione avviaChiamata(): questa funzione consente di avviare la
             * chiamata "Ajax" che farà sì che la tabella restituita dal file
             * "ricerca.php" venga inserita in un'apposita "div", con 
             * id "tabella", definita nel codice html della pagina.
             */
            function avviaChiamata()
            {
                dati = $('form').serialize();
                $.ajax({
                    //Type of Ajax call (GET).
                    type: "POST",
                    //URL of the php resource, that generate the data of the chart.
                    url: link,
                    timeout:5000,
                    data: dati,
                    success: function(response)
                    {
                        $("#tabella").html(response);
                    },
                    error: function(){
                            //If there are some problems with the Ajax call a message error will be generated.
                            alert("Si e' verificato un errore con la chiamata Ajax, impossibile trovare file!");
                    },
                });
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
            <form class="form-group">
                <label for="select">Seleziona una matricola</label>
                <select id="select" name="select[]" class="form-control" onchange=avviaChiamata()>
                    <?php
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
                            echo "<option id=\"$elemento\">".$elemento."</option>";
                        }
                    ?>
                </select>
            </form>
        </div>
        <div class="col-md-4">
            <img id="img" src="img\stage.jpg"/>
        </div>
        <div class="col-md-8 col-md-offset-2" id="tabella">
                 <!--Tabella popolata dinamicamente-->
        </div>
    </body>
</html>
		