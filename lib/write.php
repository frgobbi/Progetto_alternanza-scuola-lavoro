<html>
    <head>
   <!--     <title>Inserimento_Alunni</title>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      
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
                <div class="col-md-4 col-md-offset-4">-->
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
                            $matricola = $_POST['matricola'];
                            $anno = $_POST['anno'];
                            $asl = $_POST['asl'];
                            $azienda = $_POST['azienda'];
                            $tutor = $_POST['tutor'];

                            $file = $_SESSION['File'];

                            $stringa = $matricola.";".$nome.";".$cognome.";".$anno.";".$asl.";".$azienda.";".$tutor."\n";

                           // $file->scrivi_dati('File/ASL.csv',$stringa);
                           echo($stringa);   
                            echo("<h3> Lo studente &egrave; stato registrato!! :-)</h3>");
                        ?><!--
                </div> 
            </div>
        </div>
       
    </body>
</html>
-->

    



