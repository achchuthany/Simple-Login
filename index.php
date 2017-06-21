<?php
session_start();
include_once 'config.php';
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Home | Simple-Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    </head>

    <body>
        <?php
        include_once("nav.php")
        ?>

            <?php
        if (isset($_SESSION['usr_id'])){
            echo'
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 well">      
                    <h1>Hi!'. $_SESSION['usr_name'].'</h1>            
                </div>
            </div>
        </div>';
        }
        ?>

                <script src="js/jquery-1.10.2.js"></script>
                <script src="js/bootstrap.min.js"></script>
    </body>

    </html>
