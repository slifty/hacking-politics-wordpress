<?php get_header(); ?>

<div class="container">

<div class="page-header" id="banner">
  <video autoplay muted loop id="bgvid">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.ogv" type="video/ogv">
    <source src="<?php bloginfo('stylesheet_directory'); ?>/img/background.mp4" type="video/mp4">
</video>
</div>
      <div class="jumbotron">
        <div class="container">
          <div>
            <h1><a href="https://twitter.com/search?f=tweets&q=%23spintimetv">#spintimetv</a> is an online community remixing election 2016.</h1>
            <br>
            <br>
            <a class="btn btn-lg red button" href="http://spintime.tv/join" role="button">Sign up for updates</a>
          </div>
        </div>
      </div>

      <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
            <div class="panel-body">
                <p class="lead">3 weeks to election day!</p>
              <div class="progress progress-striped"><div class="progress-bar progress-bar-info" style="width: 70%"></div></div>
      <h2>Debates, Then and Now</h2>
<center>      <a href="https://www.youtube.com/watch?v=xYrgx1G_CW4"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/1clay.jpg"></a>
      <a href="https://www.youtube.com/watch?v=ipLoS44xfO4"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/1aubrey.jpg"></a>
</center>        
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
