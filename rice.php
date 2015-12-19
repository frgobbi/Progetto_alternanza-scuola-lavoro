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

        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./lib/font-awesome-4.5.0/css/font-awesome.css">
        <link rel="stylesheet" href="./lib/font-awesome-4.5.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="./CSS/regole.css">
         <style type="text/css">
        @font-face {
            font-family: "myfont";
            src: url("./lib/font-awesome-4.5.0/fonts/fontawesome-webfont.woff") format('woff');
            font-weight: bold;
        }
        
        @font-face {
            font-family: "myfont";
            src: url("./lib/font-awesome-4.5.0/fonts/fontawesome-webfont.woff2") format('woff2');
            font-weight: bold;
        }
        
        @font-face {
            font-family: 'font_name';
            src: url('./lib/font-awesome-4.5.0/fonts/fontawesome-webfont.ttf') format('truetype');
            ;
        }
        </style>
        
        <script type="text/javascript">
            var link='lib/ricerca.php';
            var dati;
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
                        console.log(dati);
                        console.log(response);
                        
                        $("#tabella").html(response);
                    },
                    error: function(){
                            //If there are some problems with the Ajax call a message error will be generated.
                            alert("Si e' verificato un errore con la chiamata Ajax, impossibile trovare file!");
                    },
                });
            }
            
            function GPopup() {
                console.log("CIAO!");
               $('#overlay').fadeIn('slow');
               $('#popupBox').fadeIn('slow');
               //$('#map').off('click');
               //funzione che permette di chiudere il popup
               $('#overlay, .deleteMeetingCancel').click(function() {
               $('#overlay').fadeOut('slow');
               $('#popupBox').fadeOut('slow');
               $('#popupContent').fadeOut('slow');
                  //sblocca il mvimento della mappa
                   //map.dragging.enable();
               });
               //blocca il movimento della mappa
               //map.dragging.disable();
           }
            
            function visualizza(){
                console.log("ciao sono arrivato qui");
                //$("[data-toggle='tooltip']").tooltip();
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
                                require("lib/file_sequenziali.php");
                                
                                
                                $file = new file_sequenziali('File/ASL.csv');
                                //$_SESSION['File'] = $file;
                               

                                $array_mat=$file->preleva_matricole();

                                

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
                
                <div id="popupBox"></div>
                <div id="overlay"></div>
        </div> 
    </body>
</html>
		