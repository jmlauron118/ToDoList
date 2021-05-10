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
                padding: 1rem;
                padding-top: calc(1rem + 50px);
                padding-left: calc(1rem + 50px);
                min-height: 100vh;
                background-color: #f2f2f2;
            }

            #sidebar{
                width: 50px;
                background-color: #5cdb95;
                height: 100%;
                float: left;
                z-index: 1;
                position: fixed;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.576);
            }

            .clear{
                clear: both;
            }
        </style>
    </head>
    <body>
        <?php if($header) {echo $header;} ?>
        <?php if($sidebar) {echo $sidebar;} ?>
        <div id="main-content">
            <?php if($page) {echo $page;} ?>
        </div>
        <div class="clear"></div>
        <?php if($footer) {echo $footer;} ?>
    </body>
</html>