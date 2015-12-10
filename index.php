<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Gestione Alternanza Scuola Lavoro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
                    text-align: center;
                    font-weight: 900;
                }
        </style>
    </head>
    <body>
        <?php
            
            
            
            require("lib/file_sequenziali.php");
            
            session_start();
            $file = new file_sequenziali('File/ASL.csv');
            
           
            
            $_SESSION['File'] = $file;
            
        ?>
            <div class="container-fluid">
            <div class="row">
                    <div class="col-md-12">
                            <h1 id="title">Alternanza Scuola Lavoro</h1>
                            <br><br><br><br><br><br><br><br>
                            <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                            </div>
                            <div class="row">
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-3">

                                            <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='rice.php'">
                                                Ricerca &nbsp; <i class="fa fa-search fa-2x"></i>
                                            </button>
                                    </div>
                                    <div class="col-md-2">
                                    </div>
                                    <div class="col-md-3">

                                            <button type="button" class="btn btn-lg btn-primary btn-block" onclick="window.location.href='ins.php'">
                                                Inserisci Studente &nbsp; <i class="fa fa-cog fa-2x"></i>
                                            </button>
                                    </div>
                                    <div class="col-md-2">
                                        <br><br><br><br><br><br><br><br>
                                    </div>
                            </div> 
                            
                            
                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <img id="img" src="img\stage.jpg"/>
                                    </div>
                                    <div class="col-md-4">
                                    </div>
                            </div>
                    </div>
             </div>
    </div>
</body> 
</html>