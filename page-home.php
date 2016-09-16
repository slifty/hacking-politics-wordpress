<?php get_header(); ?>

<div class="container">

<div class="page-header" id="banner">
  <video autoplay muted loop id="bgvid">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.ogv" type="video/ogv">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.mp4" type="video/mp4">
</video>
</div>
      <div class="jumbotron">
      <h1><a href="https://twitter.com/search?f=tweets&q=%23spintimetv">#spintimetv</a> is an online community remixing election 2016.</h1>
      <br>
      <br>
      <a class="btn btn-lg red button" href="http://spintime.tv/join" role="button">Sign up for updates</a>
      </div>
      <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-body">
      <h2>Spin Time TV begins September 26, 2016</h2>
                <p class="lead">10 weeks to election day!</p>
              <div class="progress progress-striped"><div class="progress-bar progress-bar-info" style="width: 1%"></div></div>
        <ul class="pager">
          <li class="previous disabled"><a href="#">&larr; Last week</a></li>
          <li>Now: <a href="http://spintime.tv/join">sign up!</a></li>
          <li class="next disabled"><a href="#">Next week &rarr;</a></li>
        </ul>
      </div>
      </div>

              </div>
          <div class="col-md-4">

            <a class="twitter-timeline"  href="https://twitter.com/hashtag/spintimetv" data-widget-id="757742999103213568">#spintimetv Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

              </div>
            </div>

        <?php wp_footer(); ?>
<?php include_once("analyticstracking.php") ?>
      </body>
      </html>
