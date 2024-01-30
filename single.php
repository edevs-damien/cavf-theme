<?php get_header(); ?>

<div class="single-mid-container">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <script>
            window.addEventListener("scroll", function () {
                var image = document.getElementById("img1");
                var position = window.scrollY;
                image.style.marginTop = position * 0.2 + "px";
            });

        </script>
        <div class="single-article-image-container">
            <?php the_post_thumbnail('post-thumbnail', array( 'class' => 'single-article-image', 'id' => 'img1' ) ); ?>
        </div>

        <div class="single-article-content">
            <h1><?php the_title(); ?></h1>

            <div class="post__meta">
                <p>
                    Publié le <?php the_date(); ?>
                </p>
            </div>

            <div class="post__content">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; endif; ?>
</div>



<?php get_footer(); ?>