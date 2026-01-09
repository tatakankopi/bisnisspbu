<?php
get_header(); ?>

<style>
    .prose p {
        margin-bottom: 1.5em;
        color: #4b5563;
    }

    .prose h3 {
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        color: #171212;
        margin-top: 2em;
        margin-bottom: 0.75em;
        font-size: 1.5rem;
    }

    .prose blockquote {
        border-left: 4px solid #dc2626;
        padding-left: 1rem;
        font-style: italic;
        color: #171212;
        margin-bottom: 1.5em;
    }

    .prose ul {
        list-style-type: disc;
        padding-left: 1.5rem;
        margin-bottom: 1.5em;
        color: #4b5563;
    }

    .prose li {
        margin-bottom: 0.5em;
    }
</style>

<main class="pt-24 pb-12 px-4 md:px-8 lg:px-40 max-w-[1440px] mx-auto flex flex-col gap-8">
    <nav class="flex text-sm font-medium text-[#866565] mb-4">
        <ol class="flex items-center gap-2">
            <li><a class="hover:text-primary transition-colors" href="<?php echo home_url(); ?>">Beranda</a></li>
            <li><span class="material-symbols-outlined text-base">chevron_right</span></li>
            <li><a class="hover:text-primary transition-colors"
                    href="<?php echo get_post_type_archive_link('post'); ?>">Berita</a></li>
            <li><span class="material-symbols-outlined text-base">chevron_right</span></li>
            <li class="text-primary truncate max-w-[200px] md:max-w-xs">
                <?php the_title(); ?>
            </li>
        </ol>
    </nav>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <article class="lg:col-span-8 flex flex-col gap-6">
                    <header class="flex flex-col gap-4">
                        <div class="flex items-center gap-3">
                            <span
                                class="px-3 py-1 bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider rounded-full">
                                <?php
                                $cats = get_the_category();
                                if (!empty($cats)) {
                                    echo $cats[0]->name;
                                } else {
                                    echo 'Berita';
                                }
                                ?>
                            </span>
                            <span class="text-gray-400">•</span>
                            <span class="text-[#866565] text-sm font-medium">
                                <?php echo get_the_date(); ?>
                            </span>
                        </div>
                        <h1 class="text-[#171212] text-3xl md:text-4xl lg:text-5xl font-bold font-display leading-tight">
                            <?php the_title(); ?>
                        </h1>
                        <div class="flex items-center gap-3 py-2">
                            <div class="size-10 rounded-full bg-gray-200 overflow-hidden">
                                <?php echo get_avatar(get_the_author_meta('ID'), 40, '', '', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-[#171212] font-bold text-sm">
                                    <?php the_author(); ?>
                                </span>
                                <span class="text-[#866565] text-xs">Penulis</span>
                            </div>
                        </div>
                    </header>
                    <div class="w-full rounded-2xl overflow-hidden shadow-lg h-[400px] md:h-[500px]">
                        <?php if (has_post_thumbnail()): ?>
                            <img alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover"
                                src="<?php the_post_thumbnail_url('full'); ?>" />
                        <?php else: ?>
                            <img alt="Placeholder" class="w-full h-full object-cover" src="https://placehold.co/800x500" />
                        <?php endif; ?>
                    </div>
                    <div class="prose max-w-none text-lg leading-relaxed text-[#4b5563]">
                        <?php the_content(); ?>
                    </div>
                    <div class="border-t border-[#e5dcdc] pt-8 mt-4 flex items-center justify-between">
                        <div class="flex gap-4">
                            <span class="text-[#171212] font-bold text-sm">Bagikan:</span>
                            <a class="text-[#866565] hover:text-primary transition-colors" href="#"><span
                                    class="material-symbols-outlined text-xl">share</span></a>
                            <a class="text-[#866565] hover:text-primary transition-colors" href="#"><span
                                    class="material-symbols-outlined text-xl">link</span></a>
                        </div>
                        <div class="flex gap-2">
                            <?php
                            $tags = get_the_tags();
                            if ($tags) {
                                foreach ($tags as $tag) {
                                    echo '<span class="px-3 py-1 bg-gray-100 text-[#866565] text-xs font-medium rounded-full hover:bg-gray-200 cursor-pointer transition-colors">#' . $tag->name . '</span>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="mt-8">
                        <a class="group flex items-center gap-3 text-primary font-bold hover:text-red-700 transition-colors w-fit"
                            href="<?php echo home_url('/berita'); ?>">
                            <span
                                class="material-symbols-outlined group-hover:-translate-x-1 transition-transform">arrow_back</span>
                            Kembali ke Berita
                        </a>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        <aside class="lg:col-span-4 flex flex-col gap-8">
            <div class="glass-panel p-6 rounded-xl border border-[#e5dcdc]">
                <h3 class="text-[#171212] text-xl font-bold font-display mb-6 pb-2 border-b border-[#e5dcdc]">Berita
                    Terkini</h3>
                <div class="flex flex-col gap-6">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                        'ignore_sticky_posts' => 1
                    ));

                    if ($recent_posts->have_posts()):
                        while ($recent_posts->have_posts()):
                            $recent_posts->the_post();
                            ?>
                            <a class="group flex flex-col gap-3" href="<?php the_permalink(); ?>">
                                <div class="h-40 w-full rounded-lg overflow-hidden relative">
                                    <img alt="<?php the_title_attribute(); ?>"
                                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                        src="<?php echo get_the_post_thumbnail_url() ? get_the_post_thumbnail_url() : 'https://placehold.co/600x400'; ?>" />
                                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <span class="text-xs font-bold text-primary uppercase tracking-wider">
                                        <?php
                                        $cats = get_the_category();
                                        if (!empty($cats)) {
                                            echo $cats[0]->name;
                                        }
                                        ?>
                                    </span>
                                    <h4
                                        class="text-[#171212] font-bold leading-snug group-hover:text-primary transition-colors font-display">
                                        <?php the_title(); ?>
                                    </h4>
                                    <span class="text-xs text-[#866565]">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                            </a>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </div>
            </div>
        </aside>
    </div>
</main>

<?php
get_footer();
