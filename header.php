<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Super News Time!</title>
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="container-fluid">
            <div id="main">
                <div id="header" class="row">
                    <div id="branding" class="col-xs-8 col-sm-6 col-md-5 col-lg-6">
                        Super News Time!
                    </div>
                    <div id="menu" class="col-xs-4 col-sm-6 col-md-7 col-lg-6">
                        <nav id="navbar">
                            <ul>
                                <li id="faq-nav"><a href="<?php bloginfo('url'); ?>/faq">FAQ</a></li>
                                <li id="speakers-nav"><a href="<?php bloginfo('url'); ?>/speakers">Speakers</a></li>
                                <li id="syllabus-nav"><a href="<?php bloginfo('url'); ?>/syllabus">Syllabus</a></li>
                                <li id="resources-nav"><a href="<?php bloginfo('url'); ?>/resources">Resources</a></li>
                                <li id="join-nav"><a href="<?php bloginfo('url'); ?>/join">Join</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
