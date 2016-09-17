<?php get_header(); ?>

<div class="container">
	<div class="page-header">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10">
                <h1>Join</h1>
                <p class="lead">Sign up for Spin Time TV so you can remix election 2016.</p>
                <p>Spin Time TV kicks off September 26th, 2016. It's free. We'll email you about once a week so you can follow along and participate. </p>
            </div>
        </div>
    </div>
    <div class="row">

		<div class="col-lg-8">
            <div class="well bs-component">
                <?php chimpy_form(); ?>
            </div>
        </div>
        <div class="col-lg-4">
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/spintimetv" data-widget-id="757742999103213568">#spintimetv Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div>
    </div>
</div>


<?php get_footer(); ?>
