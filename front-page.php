<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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

<div class="container">

<div class="page-header" id="banner">
	<video autoplay loop muted="true" id="bgvid">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.ogv" type="video/ogv">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.mp4" type="video/mp4">
</video>
</div>
			<div class="jumbotron">
			<h1><a href="https://twitter.com/search?f=tweets&q=%23spintimetv">#spintimetv</a> is an online community that explores election 2016 through video remix.</h1>
			<br>
			<a class="btn btn-lg red button" href="<?php bloginfo('url'); ?>/join" role="button">Sign up today</a>
			</div>
			<div class="row">
		    	<div class="col-md-8">
					  <div class="panel panel-default">
					  <div class="panel-body">
		            <p class="lead">12 weeks to election day!</p>
		         	<div class="progress progress-striped"><div class="progress-bar progress-bar-info" style="width: 80%"></div></div>
				<ul class="pager">
				  <li class="previous disabled"><a href="#">&larr; Last week</a></li>
				  <li>This week: are ads too negative?</li>
				  <li class="next"><a href="#">Next week &rarr;</a></li>
				</ul>
			</div>
			</div>
					  <div class="panel panel-default">
					  <div class="panel-body">
					  	<h3>September 26th: Television and debates</h3>
					  	How has television has changed the horserace, and defined the various stages of the presidential election lifecycle: primary debates, primary contests, nominating conventions, debates and election night. How has 2016 differed? How have culture jammers used video to challenge or subvert this process?
					  	<br><br>
					  	<strong>Your spin</strong>: Make a supercut of themes across 2016 political advertising <b class="caret-right"></b>
            	</div>
            	</div>
            	</div>
		    	<div class="col-md-4">

		            <a class="twitter-timeline"  href="https://twitter.com/hashtag/spintimetv" data-widget-id="757742999103213568">#spintimetv Tweets</a>
		            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

            	</div>
            </div>

        <?php wp_footer(); ?>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
	</body>
</html>
