<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<div class="container">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <h1>Submissions</h1>

      <div class="row">
          <div class="col-md-8">

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();
                $post_metadata = get_fields();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <h2><a href="<?php the_permalink(); ?>"><?php echo(the_title());?></a></h2>
                        <div class="date"><?php echo(get_the_date()); ?></div>
                        <div>by <?php echo($post_metadata['submitter_name']); ?></div>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->
                <hr />

                <?php

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => '<<',
                'next_text'          => '>>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">[</span>',
                'after_page_number' => '<span class="meta-nav screen-reader-text">] </span>',
            ) );
        endif;
        ?>
		</div>
          <div class="col-md-4">
          	<div>
            	<div class="panel panel-default">
           		<div class="panel-body">
                	<p class="lead">Make your own video</p>
					<a href="https://archive.org/pop/editor.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/popcorn.png" class="centered-stuff" style="width: 75%"></a><br>
					<span class="wrapright">Check out Popcorn, a web-based video editor that helps you remix media from across the web. You can use Popcorn to make video essays, supercuts, sequences and more.</span><br><br>
           			 <a class="btn red button" href="https://archive.org/pop/editor.html" role="button">Try Popcorn</a><br><br>

					 <a class="btn red button" href="http://spintime.tv/submit" role="button">Submit a video</a>

                </div>
           		</div>
          	</div>
            <a class="twitter-timeline"  href="https://twitter.com/hashtag/spintimetv" data-widget-id="757742999103213568">#spintimetv Tweets</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

              </div>
		</div>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php get_footer(); ?>
