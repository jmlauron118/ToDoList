<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ToDoList</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"/>
        <style type="text/css">
            html, body{
                padding: 0;
                margin: 0;
            }

            #header{
                width: 100%;
                height: 100px;
                background-color: red;
            }

            #footer{
                width: 100%;
                height: 100px;
                background-color: blue;
            }

            #main-content{
                /* width: 90%;
                height: 600px;
                background-color: gray;
                float: inline-start; */
                
                padding: 1rem;
                padding-top: calc(1rem + 100);
                min-height: 100vh;
                background-color: #f2f2f2;
            }

            .clear{
                clear: both;
            }
        </style>
    </head>
    <body>
        <?php if($header) {echo $header;} ?>
        <div id="main-content">
            <?php if($page) {echo $page;} ?>
        </div>
        <div class="clear"></div>
        <?php if($footer) {echo $footer;} ?>
    </body>
</html>