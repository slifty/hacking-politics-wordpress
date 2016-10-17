<?php get_header(); ?>
<div class="container">


        <?php
            // Start the loop.
            while ( have_posts() )
            {
                the_post();
                $post_id = get_the_ID();
                $post_metadata = get_fields();
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <h1><?php echo(the_title());?></h1>
                        <div>by <?php echo($post_metadata['submitter_name']); ?></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                            $url = $post_metadata['url'];
                            if(strpos($url, "youtube.com") !== false) {
                                // Make sure it's set up for embed
                                if(strpos($url, "embed") === false) {
                                    $parts = parse_url($url);
                                    parse_str($parts['query'], $query);
                                    $url = "https://youtube.com/embed/".$query['v'];
                                }
                                ?>
                                <iframe width="100%" height="400" src="<?php echo($url); ?>" frameborder="0" allowfullscreen></iframe>
                                <?php
                            } else if(strpos($url, "youtu.be") !== false) {
                                // Make sure it's set up for embed
                                if(strpos($url, "embed") === false) {
                                    $id = strrchr($url, "/");
                                    $url = "https://youtube.com/embed".$id;
                                }
                                ?>
                                <iframe width="100%" height="400" src="<?php echo($url); ?>" frameborder="0" allowfullscreen></iframe>
                                <?php
                            } else if(strpos($url, "archive.org") !== false) {
                                // Make sure it's set up for embed
                                if(strpos($url, "embed") === false) {
                                    $id = substr(strrchr($url, "/"), 1);
                                    $url = "https://archive.org/pop/embed.html?debug=1&savedDataUrl=https%3A%2F%2Farchive.org%2Fservices%2Fmaker.php%3Fedl%3D".$id;
                                }
                                ?>
                                <iframe src='<?php echo($url); ?>' width='640' height='403' frameborder='0' mozallowfullscreen webkitallowfullscreen allowfullscreen></iframe>
                                <?php
                            } else if(strpos($url, "vimeo.com") !== false) {
                                if(strpos($url, "video") === false) {
                                    $id = strrchr($url, "/");
                                    $url = "https://player.vimeo.com/video".$id;
                                }
                                ?>
                                <iframe src="<?php echo($url); ?>" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                <?php
                            } else {
                                ?>
                                <a href="<?php echo($url);?>"><?php echo($url);?></a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                            echo($post_metadata['description']);
                        ?>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>
<?php get_footer(); ?>
