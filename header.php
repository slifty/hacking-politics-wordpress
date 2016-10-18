<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="icon" type="image/ico" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/img/icon/favicon.ico">
        <title>Spin Time TV</title>
        <?php wp_head(); ?>

    </head>

    <body>
        <nav class="navbar navbar-default" id="navbar-main">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spintime-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>/home"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="logotop"></a>
                </div>
                <div class="collapse navbar-collapse" id="spintime-navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li id="faq-nav"><a href="<?php bloginfo('url'); ?>/about">About</a></li>
                        <li id="speakers-nav"><a href="<?php bloginfo('url'); ?>/speakers">Speakers</a></li>
                        <li id="submissions-nav"><a href="<?php bloginfo('url'); ?>/submission">Submissions</a></li>
                        <li class="dropdown">
                            <a href="<?php bloginfo('url'); ?>/resources" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tools <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="https://archive.org/pop/editor.html">TV News Editor</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php bloginfo('url'); ?>/resources">Tutorials</a></li>
                            </ul>
                        </li>
                        <li id="speakers-nav"><a href="<?php bloginfo('url'); ?>/credits">Credits</a></li>
                        <li id="join-nav"><a href="<?php bloginfo('url'); ?>/join" >Join</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="main" style="padding-top: 50px">
