<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Park Now | <?php echo (isset($titulo) ? $titulo : 'Salve'); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icon-kit/dist/css/iconkit.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/ionicons/dist/css/ionicons.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css');?>">
     <!--   <link rel="stylesheet" href="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/weather-icons/css/weather-icons.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/c3/c3.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl.carousel/dist/assets/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/plugins/owl.carousel/dist/assets/owl.theme.default.min.css');?>"> -->
        
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/theme.min.css');?>">
        <?php if (isset($styles)) : 
            foreach($styles as $style):?>
                <link rel="stylesheet" href="<?php echo base_url('assets/'. $style);?>">
    <?php   endforeach;
            endif;?>
       <!--<script src="<?php echo base_url('assets/src/js/vendor/modernizr-2.8.3.min.js');?>"></script>-->
       <script>
            var base_url = "<?php echo base_url(); ?>";
       </script>
       <style>
            .error{
                color: red;
                border-color: red;
                font-weight: 900;
            }
            .alerta{
                padding: 20px 40px;
                min-width: 420px;
                position: absolute;
                right: 0px;
                top: 10px;
                box-shadow: 10px 10px 5px lightblue;
                opacity: 0;
                pointer-events: none;
            }
            .alerta.showAlerta{
                opacity: 1;
                pointer-events: auto;
            }
            .alerta.show{
                animation: show_slide 1s ease forwards;
            }
            @keyframes show_slide{
                0%{
                    transform: translateX(100%);
                }
                40%{
                    transform: translateX(-10%);
                }
                80%{
                    transform: translateX(0%);
                }
                100%{
                    transform: translateX(-10px);
                }
            }
            .alerta.hide{
                animation: hide_slide 1s ease forwards;
            }
            @keyframes hide_slide{
                0%{
                    transform: translateX(-10px);
                }
                40%{
                    transform: translateX(0%);
                }
                80%{
                    transform: translateX(-10%);
                }
                100%{
                    transform: translateX(100%);
                }
            }
            .text-red{
                cursor: pointer;
            }
       </style>
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper">