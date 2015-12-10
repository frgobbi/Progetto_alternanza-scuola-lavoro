<html>
   <head>
      <title>Inserimento_Alunni</title>
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./lib/font-awesome-4.5.0/css/font-awesome.css">
      <link rel="stylesheet" href="./lib/font-awesome-4.5.0/css/font-awesome.min.css">
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
         body {
            background-color: #F4B183;
         }
         #title {
            color: #0066FF;
            font-size: 80px;
            font-family: Bradley Hand ITC;
            text-align: left;
            font-weight: 900;
         }
         h3{
            color: #0066FF;
            font-size: 36px;
            font-family: Bradley Hand ITC;
            text-align:center;
            font-weight: 900;
         }
         table{
            text-align:center;
         }
         img {
            height: 210px;
            width: 373px;
         }
         #invia {
             align-content: center;
         }
      </style>
      
      <script type="text/javascript">
            var link='lib/ricerca.php';
            
            console.log(link);
            var dati;
            function avviaChiamata()
            {
                dati = $('form').serialize();
                console.log(dati);
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
                        
                        $("#conferma").html(response);
                    },
                    error: function(){
                            //If there are some problems with the Ajax call a message error will be generated.
                            alert("Si e' verificato un errore con la chiamata Ajax, impossibile trovare file! "+link);
                    },
                });
            }
        </script>
   </head>
   <body>
      <div class="container-fluid">
          
         <div class="row">
            <div class="col-md-8">
               <h1 id="title">
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alternanza Scuola Lavoro
               </h1>
            </div>
            <div class="col-md-3">
               <br><br>
               <img id="img" src="img\stage.jpg"/>
            </div>
             <div class="col-md-1">
                  <br>
                  <button type="button" class="btn btn-lg btn-primary" onclick="window.location.href='index.php'"><i class="fa fa-home fa-2x"></i></button>
              </div>   
         </div>
         <div class="row">
            <div class="col-md-12">
               <br><br><br>
            </div>
         </div>
         <div class="row">
          <div class="col-md-4">
            </div>
          <div class="col-md-4">
              <form class="form-inline" method="POST" role="form">
                  <div class="row">
                        <div class="col-md-3">
                           <label for="nome">Nome:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="nome" placeholder="Nome">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="cognome">Cognome:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="cognome" placeholder="Cognome">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="matricola">Matricola:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="matricola" placeholder="Matricola">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="anno">Anno Scolastico:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="anno" placeholder="Anno Scolastico">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="asl">ASL:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="asl" placeholder="ASL">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-9">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="azienda">Azienda:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="azienda" placeholder="Azienda">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="tutor">Tutor:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" id="tutor" placeholder="Tutor">
                        </div>
                     </div>
                     <div class="row">
                        
                        <div class="col-md-4 col-md-offset-4">
                           <br><br>
                           <button onclick=avviaChiamata() class="btn btn-lg btn-primary" id ="invia">Inserisci</button>
                        </div>
                     </div>
              </form>
           </div>
         <div class="col-md-4">
          </div>
         </div>
          
         <div class="row">
		
		<div class="col-md-4 col-md-offset-4" id="conferma">
                    
		</div>
		<div class="col-md-4">
		</div>
	</div>    
       
      </div>
   </body>
</html>
