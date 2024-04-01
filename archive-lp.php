<?php get_header(); ?>
<main>
    <?php if( have_posts()): while( have_posts()): the_post(); ?>
        <div class="inner max-w[90rem]">
            <!-- <div class="max-w[90rem]">
                <h1>
                    <picture>
                        <source srcset="/img/page-about_mv.png" media="(min-width: 900px)" >
                        <img src="/img/page_mu.png" alt="">
                        <p></p>
                    </picture>
                </h1>
            </div> -->
        
            <section>
                <?php the_content(); ?>
            </section>
        </div>    
        <?php endwhile; else: ?>
    <?php endif; ?>
</main>
<?php get_footer(); ?>