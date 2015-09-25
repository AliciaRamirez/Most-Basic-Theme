<?php get_header(); ?>
    <div class="grid grid-pad">
        <div class="col-8-12">

            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <?php // Start of the loop ?>

                <article id="post-<?php the_ID(); ?>">
                    <div class="featured-image">
                        <?php the_post_thumbnail("full-size"); ?>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="by-line">By
                        <?php the_author(); ?>
                    </p>
                    <div class="posted-date">
                        <?php the_time("jS \of F, Y"); ?>
                    </div>

                    <div class="text">
                        <?php the_content("Continue Reading »"); ?>
                    </div>
                    <footer class="article-footer">
                        <p>Categories:
                            <?php the_category(', '); ?>
                        </p>
                        <p>
                            <?php the_tags();?>
                        </p>
                    </footer>
                </article>
               <?php comments_number();?>
                <?php comments_template(); ?>
                

            <?php // End of the loop ?>
            <?php endwhile;?> 
            
    <div class="navigation">
<div class="alignleft">
    <?php previous_posts_link('&laquo; Newer Entries') ?>

</div>

<div class="alignright">
    <?php next_posts_link('Older Entries &raquo;') ?>

</div>
    </div>
            <?php endif; ?>

        </div>
        <div class="col-4-12">
            <?php get_sidebar(); ?>
        </div>
    </div>
    <?php get_footer(); ?>