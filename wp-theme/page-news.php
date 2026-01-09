<?php
/*
Template Name: News Page
*/
get_header(); ?>

<style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: transparent;
    }

    ::-webkit-scrollbar-thumb {
        background: #e5e7eb;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #d1d5db;
    }

    .glass-panel {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .hover-card-effect {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .hover-card-effect:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px -5px rgba(220, 38, 38, 0.15), 0 8px 10px -6px rgba(220, 38, 38, 0.1);
        border-color: rgba(220, 38, 38, 0.2);
    }
</style>

<div class="pt-24 pb-12 px-4 md:px-8 lg:px-40 max-w-[1440px] mx-auto flex flex-col gap-12">
    <section class="flex flex-col gap-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 border-b border-[#e5dcdc] pb-4">
            <div class="flex flex-col gap-2">
                <h2 class="text-[#171212] text-4xl font-bold tracking-tight font-display">Berita Terkini</h2>
                <p class="text-[#866565] text-lg">Update terbaru seputar operasional dan korporasi.</p>
            </div>
            <div class="flex gap-2 overflow-x-auto pb-1 md:pb-0 no-scrollbar">
                <a class="whitespace-nowrap px-4 py-2 rounded-full bg-[#171212] text-white text-sm font-bold transition-colors"
                    href="<?php echo home_url('/berita/'); ?>">Semua</a>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<a class="whitespace-nowrap px-4 py-2 rounded-full bg-white border border-[#e5dcdc] text-[#866565] hover:text-primary hover:border-primary/30 text-sm font-bold transition-colors" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                }
                ?>
            </div>
        </div>

        <?php
        // Custom Query for News Page Template
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'status' => 'publish'
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php while ($news_query->have_posts()):
                    $news_query->the_post(); ?>
                    <article
                        class="group bg-white rounded-xl overflow-hidden border border-gray-100 shadow-sm hover-card-effect flex flex-col h-full">
                        <div class="h-56 w-full bg-cover bg-center overflow-hidden relative"
                            style='background-image: url("<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'https://placehold.co/600x400'; ?>");'>
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300">
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-1">
                            <div class="flex items-center gap-2 mb-3">
                                <span class="text-primary text-xs font-bold uppercase tracking-wider">
                                    <?php
                                    $cats = get_the_category();
                                    if (!empty($cats)) {
                                        echo $cats[0]->name;
                                    } else {
                                        echo 'Umum';
                                    }
                                    ?>
                                </span>
                                <span class="text-gray-300">•</span>
                                <span class="text-[#866565] text-xs font-medium">
                                    <?php echo get_the_date(); ?>
                                </span>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="block group-hover:text-primary transition-colors">
                                <h3 class="text-[#171212] text-xl font-bold leading-tight mb-3 font-display">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <div class="text-[#866565] text-sm leading-relaxed mb-6 flex-1">
                                <?php the_excerpt(); ?>
                            </div>
                            <a class="inline-flex items-center text-primary text-sm font-bold hover:underline decoration-2 underline-offset-4"
                                href="<?php the_permalink(); ?>">
                                Baca Artikel <span class="material-symbols-outlined text-[16px] ml-1">arrow_outward</span>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <div class="flex justify-center mt-4">
                <?php
                // Custom Pagination
                $total_pages = $news_query->max_num_pages;
                if ($total_pages > 1) {
                    $current_page = max(1, get_query_var('paged'));
                    echo paginate_links(array(
                        'base' => get_pagenum_link(1) . '%_%',
                        'format' => 'page/%#%',
                        'current' => $current_page,
                        'total' => $total_pages,
                        'mid_size' => 2,
                        'prev_text' => __('Previous', 'bisnisspbu'),
                        'next_text' => __('Next', 'bisnisspbu'),
                    ));
                }
                ?>
            </div>

            <?php
            // Reset Post Data
            wp_reset_postdata();
            ?>

        <?php else: ?>
            <p>
                <?php esc_html_e('Belum ada berita.', 'bisnisspbu'); ?>
            </p>
        <?php endif; ?>

    </section>
</div>

<?php
get_footer();
