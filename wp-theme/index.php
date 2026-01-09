<?php
get_header(); ?>

<main class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-12' ); ?>>
                    <?php if ( ! is_front_page() ) : ?>
                        <header class="mb-8">
                            <h1 class="text-3xl md:text-5xl font-bold text-slate-900 tracking-tight mb-4"><?php the_title(); ?></h1>
                        </header>
                    <?php endif; ?>

                    <div class="prose prose-slate max-w-none">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            endwhile;
        else :
            ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'bisnisspbu' ); ?></p>
            <?php
        endif;
        ?>
    </div>
</main>

<?php
get_footer();
