<!DOCTYPE html>
<html <?php language_attributes(); ?>>
 <head>
   <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
   <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>
 </head>

 <body <?php body_class(); ?>>
    <main>
        <aside>
            <header>
                <a href="<?php echo get_site_url(); ?>" class="logo" id="main-logo">
                    <svg id="logo_pk" width="777" height="777" viewBox="0 0 777 777"> 
                        <path id="scare" d="M 0.00407534,0.00439078 0.00856041,0.66694248 384.31685,392.68831 l 392.0211,384.30829 0.66097,0.005 0.006,-0.66556 L 392.12651,383.77777 0.6692329,0.00609905 Z" />
                        <path id="letters" d="m 324.14612,347.26902 -88.99836,-95.1569 v 122.6415 h 47.48516 c 12.606,0 23.221,-4.3574 31.9406,-13.2648 4.1704,-4.3574 7.3923,-9.1 9.5726,-14.2198 z m -88.99836,-127.95384 92.50516,86.44214 v -52.3212 c 0,-13.64995 -4.1696,-24.64381 -12.2264,-32.98146 -8.0567,-8.24941 -19.0505,-12.41424 -32.7936,-12.41424 h -47.48516 z m 320.07436,319.97704 -39.4332,-101.3199 -19.1468,38.5748 z M 0.66364,0 156.76596,145.96133 v -18.10372 h 123.78216 c 38.2905,0 68.7128,12.03705 91.4628,36.29571 21.137,23.03092 31.6573,52.41741 31.6573,88.0551 v 75.7291 c 0,15.1587 -2.279,29.2822 -6.9173,42.4587 l 5.1118,4.8309 12.4222,13.2729 V 127.85761 h 78.3769 v 185.76391 l 95.3492,-185.76391 h 84.0744 l -107.3861,213.16021 125.6744,308.1246 h -32.3154 L 777.00002,776.34202 601.56462,597.48732 441.74519,434.40104 392.67442,384.32722 179.60738,175.43607 Z m 491.99818,511.71132 v 137.4311 h -78.3769 v -210.7849 l -36.4,-33.9365 c -3.1296,3.9803 -6.4438,7.8722 -10.1431,11.5636 -24.0708,24.363 -53.0736,36.5847 -87.0998,36.5847 h -45.49426 v 196.5731 h -78.3818 V 168.22991 L 0,0.65803 175.43698,179.6009 l 208.89184,213.07192 213.1593,208.8911 178.8539,175.4361 -136.6762,-127.8576 h -41.608 l -23.7851,-61.1323 -81.6109,-76.2988" />
                    </svg>
                </a>
                <div id="icon-menu" class="d-lg-none">
                    <span></span><span></span><span></span><span></span>
                </div>
                <nav>
                    <?php wp_nav_menu( array( 'header-menu' => 'header-menu', 'container' => false, ) ); ?>
                </nav>
            </header>
            <div class="stage">
                <h1><?php the_title(); ?></h1>
                <div class="actor" id="actor_1"></div>
                <div class="actor" id="actor_2"></div>
                <div class="actor" id="actor_3"></div>            
                <footer class="d-none d-md-block">
                    <p>Copyright &copy; <?php echo date("Y"); ?> piwnica-kata.pl - Wszystkie&nbsp;prawa&nbsp;zastrzeżone.</p>
                    <p>Piwnica Kata prowadzona jest przez:</p>
                    <ul>
                        <li><a href="https://tourguidemg.pl/" target="_blank"></a></li>
                        <li><a href="https://fabrykaturystyki.pl/" target="_blank"></a></li>
                    </ul>
                </footer>                
            </div>
        </aside>
