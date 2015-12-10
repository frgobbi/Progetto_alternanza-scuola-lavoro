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
            
            table{
                text-align:center;
            }
            img {
                height: 210px;
                width: 373px;
            }
            #tab{
                background-color: #ffffff;
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
                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                          <form class="form-group">
                                 <select name="select[]" class="form-control" onchange=avviaChiamata()>
                          <?php
                              
                              require("lib/file_sequenziali.php");
                              session_start();
                              


                              //$oggetto = new file_sequenziali("File/ASL.csv");

                              $file = $_SESSION['File'];
                              

                              $array_mat=$file->preleva_matricole();
                              
                              //setcookie('File',$file);
                              
                              $_SESSION['File'] = $file;

                              

                              
                              echo "<option id=\"vuota\">Scegli...</option>";
                              foreach ($array_mat as $elemento)
                              {
                                  echo "<option id=\"$elemento\">".$elemento."</option>";
                              }



                          ?>
                      </select>
                      </div>
                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                              <div class="row">
                                      <div class="col-md-6">
                                      </div>
                                      <div class="col-md-6">
                                      </div>
                              </div>
                      </div>
              </div>


              <div class="row">
                      <div class="col-md-12">
                          <br><br><br>
                      </div>
                     
              </div>
              <div class="row">
                      <div class="col-md-1">
                      </div>
                      <div class="col-md-10" id="tabella">

                      </div>
                      <div class="col-md-1">
                      </div>
              </div>
      </div> 
    </body>
</html>
		