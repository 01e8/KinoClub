<!DOCTYPE html>
<html lang="ru">
    
    
    
    <head>
        <title><?php bloginfo('name')?></title>
        <link rel="shortcut icon" href="icon/ico.ico">
        <meta charset="utf-8">
        <meta name="author" Content="Голубев">
        <meta name="copyright" Content="GOLUBEV"> 
        <meta name="keywords" content="КИНОКЛУБ,КИНО,КЛУБ">
        <meta name=viewport content="width=device-width, initial-scale=1.0 ">
        <link rel="stylesheet" href="style.css" />  <!-- http://cinemaclub.moscow/wp-content/themes/Daggers/       ?php bloginfo('template_url');?>/ -->
    </head>
    
    
    
    <body>
        <script type="text/javascript" src="script.js"></script>

        
        <!--Шапка сайта-->
        <header id="hat">
            <div id="videologo">
                <div id="video_contain">
                <video id="logovideo" autoplay loop muted>
                    <source src="video/long.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="video/long.webm" type='video/webm; codecs="vp8, vorbis"'>
                    <source src="video/long.ogv" type='video/ogg; codecs="theora, vorbis"'>
                </video>
                </div>
                <div id="logotext">
                    <a href="<?php echo home_url();?>">
                        <img id="logoimg" src="img/logo.png">
                        <img id="logoimgmini" src="img/logomini.png">
                    </a>
                </div>
                <nav class="navnav">
                    <ul class="navul">
                        <a href="<?php echo home_url();?>"><li class="buttomfirst">ГЛАВНАЯ</li></a>
                        <a href="@"><li>ВСТРЕЧИ</li></a>
                        <a href="@"><li>ЖУРНАЛ</li></a>
                        <a href="@"><li>УЧАСТНИКИ</li></a>
                        <a href="@"><li class="buttomlast">ВСТУПАЙ</li></a>
                    </ul>
                </nav>
            </div>
        </header>