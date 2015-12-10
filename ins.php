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
          /*
            $(document).ready(function() {

              //al click sul bottone del form
              $("#invia").click(function(){

                //associo variabili
                var nome = $("#nome").val();
                var mansione = $("#mansione").val();

              //chiamata ajax
                $.ajax({

                 //imposto il tipo di invio dati (GET O POST)
                  type: "POST",

                  //Dove devo inviare i dati recuperati dal form?
                  url: "lib/write.php",

                  //Quali dati devo inviare?
                  
                  data: "matricola=" + matricola + "nome=" + nomeA + "cognome=" + cognome + "anno=" + anno + "asl=" + asl + "azienda=" + azienda + "tutor=" + tutor,
                  dataType: "html",

                  //Inizio visualizzazione errori
                  success: function(response)
                  {
                      console.log("successo");
                    $("#tabella").html(response);
                  },
                  error: function()
                  {
                    alert("Chiamata fallita, si prega di riprovare..."); //sempre meglio impostare una callback in caso di fallimento
                  }
                });
              });
            });
            */
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
              <form class="form-inline" method="post" action="lib/write.php" role="form">
                  <div class="row">
                        <div class="col-md-3">
                           <label for="nome">Nome:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="nomeA" id="nomeA" placeholder="Nome">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="cognome">Cognome:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="cognome" id="cognome" placeholder="Cognome">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="matricola">Matricola:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="matricola" id="matricola" placeholder="Matricola">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="anno">Anno Scolastico:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="anno" id="anno" placeholder="Anno Scolastico">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="asl">ASL:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="asl" id="asl" placeholder="ASL">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="azienda">Azienda:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="azienda" id="azienda" placeholder="Azienda">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <label for="tutor">Tutor:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="tutor" id="tutor" placeholder="Tutor">
                        </div>
                     </div>
                     <div class="row">
                        
                        <div class="col-md-4 col-md-offset-4">
                           <br><br>
                           <button  type="submit" class="btn btn-lg btn-primary" id ="invia">Inserisci</button>
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
