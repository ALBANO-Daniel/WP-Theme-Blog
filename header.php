<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">

    <?php
    wp_head();
    ?>

</head>

<body>
    <header class="header text-center">

        <a class="site-title pt-lg-4 mb-0" href="index.html">

            <?php echo get_bloginfo('name'); // site name input 
            ?>

        </a>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                // get the functions.php  the_custom_logo func from add_theme_support hook
                if (function_exists('the_custom_logo')) {
                    // codex 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    //array $logo
                    $logo = wp_get_attachment_image_src($custom_logo_id);  // all info of img SRC
                    // instead of   the_custom_logo();
                }
                ?>
                <img class="mb-3 mx-auto logo" src="<?= $logo[0] ?>" alt="logo">

                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',   // connect to the primary in nav_menus
                        'container' => '',
                        'theme_location' => 'primary', // location on the nav_menus function
                        // %3$s == ref to menu itens ????   
                        // id and class empty to overide the injected from WP
                        // declares template for the list in menu
                        'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left" >%3$s</ul>'
                    )
                );
                ?>

                <!-- <hr>
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul> -->

                <!-- as example of template areas -->
                <?php
                // the ID of the sidebar
                dynamic_sidebar('sidebar-1');
                ?>
            </div>

        </nav>
    </header>
    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <!-- the_title() to show on h1, the title of the post backend -->
            <h1 class="heading"><?php the_title(); ?></h1>
        </header>