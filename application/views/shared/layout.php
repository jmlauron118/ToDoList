<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>ToDoList</title>
        <link rel="icon" href="<?php echo base_url(); ?>assets/images/icon.png">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"/>
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
                padding-top: calc(1rem + 60px);
                padding-left: calc(1rem + 60px);
                min-height: 100vh;
                background-color: #f2f2f2;
            }

            #sidebar{
                width: 60px;
                background-color: #f2f2f2;
                height: 100%;
                float: left;
                z-index: 1;
                position: fixed;
                box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.576);
                top: 60px;
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
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</html>