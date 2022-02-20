<?php get_header(); ?>




<?php while (have_posts()) : the_post(); ?>
    <div class="" style="max-width: 1920px; margin: 0 auto;">
        <h1 class=""><?php the_title(); ?>
        </h1>

        <div class="">
            <!-- start content -->
            <h1>404: Page Not Found</h1>

            <?php the_content(); ?>
            <!-- end content -->
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer();
