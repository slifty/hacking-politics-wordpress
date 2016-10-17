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

            <h1>Remix Submissions</h1>

            <?php
            // Start the Loop.
            while ( have_posts() ) : the_post();
                $post_metadata = get_fields();
                ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <h2><a href="<?php the_permalink(); ?>"><?php echo(the_title());?></a></h2>
                        <div>by <?php echo($post_metadata['submitter_name']); ?></div>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->
                <hr />

                <?php

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => 'Previous page',
                'next_text'          => 'Next page',
                'before_page_number' => '<span class="meta-nav screen-reader-text">Page </span>',
            ) );
        endif;
        ?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->
<?php get_footer(); ?>
