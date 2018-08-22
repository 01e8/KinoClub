<!DOCTYPE html>
<html lang="ru">
    
    <head>
        <meta charset="utf-8">
        <title><?php bloginfo('name') ?></title>
        <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/icon/ico.ico">
        <meta name=viewport content="width=device-width, initial-scale=1.0 ">
        <meta name="author" Content="Голубев">
        <meta name="copyright" Content="GOLUBEV"> 
        <meta name="keywords" content="КИНОКЛУБ,КИНО,КЛУБ">
        
        <?php wp_enqueue_script('jquery'); ?>
        
        <script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.masonry.min.js"></script>
        
        <?php wp_head(); ?>
        
        <script type="text/javascript">
        jQuery(document).ready(function($){
            $(window).load(function () {
                $('#content_masonry').masonry({ singleMode: true });
            });
        });
        </script>
        
    </head>
    
    <body>
        <script type="text/javascript" src="<?php bloginfo('template_url');?>/script.js"></script>

        <header id="hat">
            <div id="videologo">
                <div id="video_contain">
                <video id="logovideo" autoplay loop muted>
                    <source src="<?php bloginfo('template_url');?>/video/<?php echo rand(1, 3); ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
                    <source src="<?php bloginfo('template_url');?>/video/<?php echo rand(1, 3); ?>.webm" type='video/webm; codecs="vp8, vorbis"'>
                    <source src="<?php bloginfo('template_url');?>/video/<?php echo rand(1, 3); ?>.ogv" type='video/ogg; codecs="theora, vorbis"'>
                </video>
                </div>
                <div id="logotext">
                    <a href="<?php echo home_url();?>">
                        <img id="logoimg" src="<?php bloginfo('template_url');?>/img/logo.png">
                        <img id="logoimgmini" src="<?php bloginfo('template_url');?>/img/logomini.png">
                    </a>
                </div>
                <nav class="navnav">
                    <?php wp_nav_menu(array('theme_location'=>'menu','container'=>'false','link_before'=>'<div class="menubutton">','link_after'=>'</div>')); ?>
                    <!--
                    <ul class="navul">
                        <a href="<?php echo home_url();?>"><li>ГЛАВНАЯ</li></a>
                        <a href="@"><li>ВСТРЕЧИ</li></a>
                        <a href="@"><li>ЖУРНАЛ</li></a>
                        <a href="@"><li>УЧАСТНИКИ</li></a>
                        <a href="@"><li>ВСТУПАЙ</li></a>
                    </ul>-->
                </nav>
            </div>
        </header>
