<?php

if(isset($_POST["opt1on"])){
    
    }
if(isset($_POST["opt1off"])){
       
    }
if(isset($_POST["opt2on"])){
       
    }
if(isset($_POST["opt2off"])){
       
    }
if(isset($_POST["opt3on"])){
       
    }
if(isset($_POST["opt3off"])){
       
    }
if(isset($_POST["opt4on"])){
       
    }
if(isset($_POST["opt4off"])){
       
    }

if(isset($_POST["sender1"])){
    
        shell_exec('mpc play 1');
    }

if(isset($_POST["sender2"])){
    
        shell_exec('mpc play 2');   
    }

if(isset($_POST["sender3"])){
    
        shell_exec('mpc play 3');
    }


if(isset($_POST["pause"])){
        shell_exec('mpc toggle');
       
    }

if(isset($_POST["mute"])){
    
        shell_exec('mpc volume -10');
       
    }


if(isset($_POST["back"])){
    
        sleep(2);
        shell_exec('mpc prev');
    
    }

if(isset($_POST["play"])){
    
        shell_exec('mpc toggle');
       
    }

if(isset($_POST["forw"])){
    
        sleep(2);
        shell_exec('mpc next'); 
    
    }

if(isset($_POST["volup"])){
    
        shell_exec('mpc volume +10');
       
    }

?>


    
<!doctype html>
<html lang="de">
  <head>
        <!--
            +-----------------------+
            |Internetradio Steuerung|
            +-----------------------+


            -   CDN für CSS,JS,Font Awesome
            -   Bootstrap 4
            -   Made by Fabian S.

        -->
      
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>Radio Steuerung</title>
      
    <style>
        /* Text mittig */
        .mitte {
           text-align: center; 
        }
        
        /* Vergrauen der Fontawesome Icons */
        .fa-grau {
            opacity: 0.3;
        }
        
        /* Sticky Zentrale */
        html {
            position: relative;
            min-height: 100%;
        }
        body {
            margin-bottom: 110px;
        }
        .zentrale {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 110px;
        }

      </style>  
  </head>
  <body>
      <form action="index.php" method="post">
          <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mitte">
                        <!-- Auswahl der 4 Bereiche 
                            - evtl. aendeungen am Design on/off
                        -->
                        <table class="table">
                            <tr>
                                <td>Raum1</td>
                                <td><input type="submit" name="opt1on" value="On" class="btn btn-success btn-block"/></td>
                                <td><input type="submit" name="opt1off" value="Off" class="btn btn-danger btn-block"/></td>
                            </tr>
                            <tr>
                                <td>Raum2</td>
                                <td><input type="submit" name="opt2on" value="On" class="btn btn-success btn-block"/></td>
                                <td><input type="submit" name="opt2off" value="Off" class="btn btn-danger btn-block"/></td>
                            </tr>
                            <tr>
                                <td>Raum3</td>
                                <td><input type="submit" name="opt3on" value="On" class="btn btn-success btn-block"/></td>
                                <td><input type="submit" name="opt3off" value="Off" class="btn btn-danger btn-block"/></td>
                            </tr>
                            <tr>
                                <td>Raum4</td>
                                <td><input type="submit" name="opt4on" value="On" class="btn btn-success btn-block"/></td>
                                <td><input type="submit" name="opt4off" value="Off" class="btn btn-danger btn-block"/></td>
                            </tr>
                        </table>
                        <hr>
                            <!-- Senderauswahl -->
                            <input type="submit" name="sender1" value="Sender 1" class="btn btn-primary btn-block"/>
                            <input type="submit" name="sender2" value="Sender 2" class="btn btn-primary btn-block"/>
                            <input type="submit" name="sender3" value="Sender 3" class="btn btn-primary btn-block"/>
                        <br>
                     </div>
                </div>
              </div>
            </div>
        </form>
    </body>
        <!-- Steuer Zentrale --> 
        <footer class="zentrale">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="index.php" method="post">
                        <table class="table table-sm">
                            <!-- Erste Reihe -->
                            <tr>
                                <td></td>
                                <td><button type="submit" name="pause" class="btn btn-danger btn-block"><i class="fas fa-pause"></i></button></td>
                                <td></td>
                                <td><button type="submit" name="mute" class="btn btn-danger btn-block"><i class="fas fa-volume-mute fa-grau"></i></button></td>
                            </tr>
                            <!-- Zweite Reihe -->
                             <tr>
                                <td><button type="submit" name="back" class="btn btn-danger btn-block"><i class="fas fa-backward"></i></button></td>
                                <td><button type="submit" name="play" class="btn btn-danger btn-block"><i class="fas fa-play"></i></button></td>
                                <td><button type="submit" name="forw" class="btn btn-danger btn-block"><i class="fas fa-forward"></i></button></td>
                                <td><button type="submit" name="volup" class="btn btn-danger btn-block"><i class="fas fa-volume-up"></i></button></td>
                            </tr>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</html>
