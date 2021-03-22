<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head <?php language_attributes(); ?>>
    <title><?php bloginfo($show = 'name') ?></title>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <?php wp_head(); ?>
</head>

<body <?php body_class('is-preload'); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper">
        <!-- Header -->
        <header id="header">
            <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo($show = 'name'); ?></a></h1>
            <nav class="links">
                <?php wp_nav_menu(array('theme_location' => 'main', 'container' => 'ul')); ?>
            </nav>
            <nav class="main">
                <ul>
                    <li class="search">
                        <a class="fa-search" href="#search">Search</a>
                        <form id="search" method="get" action="#">
                            <input type="text" name="query" placeholder="Search" />
                        </form>
                    </li>
                    <li class="menu">
                        <a class="fa-bars" href="#menu">Menu</a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Menu -->
        <section id="menu">

            <!-- Search -->
            <section>
                <form class="search" method="get" action="#">
                    <input type="text" name="query" placeholder="Search" />
                </form>
            </section>

            <!-- Links -->
            <section>
                <?php $walker = new My_Menu_Walker; ?>
                <?php wp_nav_menu(array(
                    'theme_location' => 'burger',
                    'menu_class'     => 'links',
                    'walker'         => $walker
                )); ?>
            </section>

            <!-- Actions -->
            <section>
                <ul class="actions stacked">
                    <li><a href="#" class="button large fit">Log In</a></li>
                </ul>
            </section>
        </section>