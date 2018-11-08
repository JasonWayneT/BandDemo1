<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title();?></title>
     <? wp_head();?>   

</head>
<body>
<!---------------------------- NAV ---------------------------->
<header>
    <nav class="row align-items-center nav ">
        <div class=" col-3 nav__hamburger "  id='toggle'>
            <div class="nav__bar1"></div>
            <div class="nav__bar2"></div>
            <div class="nav__bar3"></div>
        </div>
        <div class="col-9 nav__artistName"> 
            <h1><?php bloginfo('name')?></h1> 
        </div>

        
        <section class="nav__menu" id='menu'>
            <ul>
                <a href="#home" id='navItem0'> <li>Home</li></a>
                <a href="#tour" id='navItem1'><li>Tours</li></a>
                <a href="#merch" id='navItem2'><li>Merch</li></a>
                <a href="#contact" id='navItem3'><li>Contact</li></a>
            </ul>
        </section>
    </nav>
        <?php
         $defaults = array(
            'container' => false,
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav__menu'
        );

        wp_nav_menu( $defaults );
        
        ?>
     
</header>
<!----------------------------  NAV END ---------------------------->