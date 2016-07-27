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
        <div class="navbar navbar-default navbar-fixed-top" id="navbar-main">
        <div class="container">
            <div class="navbar-header">
                <a href="<?php bloginfo('url'); ?>/home" class="navbar-brand"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="logotop"></a>
            </div>
        <ul class="nav navbar-nav navbar-right">
                                <li id="faq-nav"><a href="<?php bloginfo('url'); ?>/about">About</a></li>
                                <li id="speakers-nav"><a href="<?php bloginfo('url'); ?>/speakers">Talks</a></li>
                                <li id="syllabus-nav"><a href="<?php bloginfo('url'); ?>/syllabus">Schedule</a></li>
                                <li class="dropdown">
                                    <a href="<?php bloginfo('url'); ?>/resources" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Resources <span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                      <li><a href="http://archive.org/pop/editor.html">TV News Editor</a></li>
                                      <li class="divider"></li>
                                      <li><a href="<?php bloginfo('url'); ?>/resources">Tools</a></li>
                                      <li><a href="<?php bloginfo('url'); ?>/resources">References</a></li>
                                      <li><a href="<?php bloginfo('url'); ?>/resources">Content</a></li>
                                    </ul>
                                  </li>
                                <li id="speakers-nav"><a href="<?php bloginfo('url'); ?>/credits">Credits</a></li>
<a href="<?php bloginfo('url'); ?>/join" class="btn btn-info">Join</a>
         <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
          </ul>
</div>
        </div>
            <div id="main" style="padding-top: 50px">
