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
         h1{
            color: #0066FF;
            font-size: 80px;
            font-family: Bradley Hand ITC;
            text-align: center;
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
   </head>
   <body>
      
          
        
            <div class="col-md-11">
               <h1>Alternanza Scuola Lavoro</h1>
            </div>
            <div class="col-md-1">
                <br><br>
                  <button type="button" class="btn btn-lg btn-primary" onclick="window.location.href='index.html'"><i class="fa fa-home fa-2x"></i></button>
               
            </div>
             
        
        
          <div class="col-md-4 col-md-offset-2">
              <form class="form-inline" method="post" action="lib/write.php" role="form">
                     <div class="row">
                        <div class="col-md-3">
                           <label for="nome">Nome:</label>
                        </div> 
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="nomeA" id="nomeA" placeholder="Nome">
                        </div>
                     </div> <!-- nome-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="cognome">Cognome:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="cognome" id="cognome" placeholder="Cognome">
                        </div>
                     </div> <!-- cognome-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="matricola">Matricola:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="matricola" id="matricola" placeholder="Matricola">
                        </div>
                     </div> <!-- matricola-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="anno">Anno Scolastico:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="anno" id="anno" placeholder="Anno Scolastico">
                        </div>
                     </div> <!-- anno solastico-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="asl">ASL:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="asl" id="asl" placeholder="ASL">
                        </div>
                     </div> <!-- ASL-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="azienda">Azienda:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="azienda" id="azienda" placeholder="Azienda">
                        </div>
                     </div> <!-- azienda-->
                     <div class="row">
                        <div class="col-md-3">
                           <label for="tutor">Tutor:</label>
                        </div>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="tutor" id="tutor" placeholder="Tutor">
                        </div>
                     </div> <!-- tutor-->
                     <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                           <br><br>
                           <button  type="submit" class="btn btn-lg btn-primary" id ="invia">Inserisci</button>
                        </div>
                     </div> <!-- bottone invia-->
              </form>
           </div>
         </div>
	
        
         <div class="col-md-4">
                 <img id="img" src="img\stage.jpg"/>
                  
              </div>  
        
        
     
   </body>
</html>
