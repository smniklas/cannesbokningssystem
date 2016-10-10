<?php
    class Mainview{
        public function render($loginview){
            echo'
            <!DOCTYPE html>
            <html>
                <head>
                    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
                    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
                    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
                    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
                    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
                </head>
                <body>
                    '.$loginview->htmlloginrespons().'
                
                
                
                    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                    <script src="../js/materialize.js"></script>
                    <script src="../js/init.js"></script>
                </body>
            </html>
            ';
        }    
    }
?>