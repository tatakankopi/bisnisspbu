<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-background-light text-text-main font-display overflow-x-hidden transition-colors duration-300 selection:bg-primary/20 selection:text-primary'); ?>>
    <?php wp_body_open(); ?>

    <nav class="fixed top-0 w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center gap-3">
                    <a href="<?php echo esc_url(home_url('/')); ?>"
                        class="flex items-center gap-3 hover:opacity-90 transition-opacity">
                        <div class="w-10 h-10 bg-primary/10 rounded-lg flex items-center justify-center">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"
                                alt="<?php bloginfo('name'); ?> Logo" class="w-7 h-7 object-contain">
                        </div>
                        <div>
                            <h1 class="text-xl font-bold tracking-tight text-slate-900 leading-none">
                                <?php bloginfo('name'); ?>
                            </h1>
                            <p
                                class="text-[8px] md:text-[10px] text-slate-500 uppercase tracking-normal md:tracking-widest">
                                Mitra Terpercaya Sejak 2025
                            </p>
                        </div>
                    </a>
                </div>

                <div class="hidden md:flex items-center gap-8">
                    <?php
                    // Main Navigation
                    // Ideally replaced by wp_nav_menu() but hardcoded for now to preserve strict styling without complex Walkers
                    ?>
                    <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                        href="<?php echo home_url('/'); ?>">Beranda</a>
                    <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                        href="<?php echo home_url('/about-us/'); ?>">Tentang Kami</a>
                    <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                        href="<?php echo home_url('/services/'); ?>">Layanan</a>
                    <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                        href="<?php echo home_url('/berita/'); ?>">Berita</a>
                    <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                        href="<?php echo home_url('/kontakt/'); ?>">Kontak</a>
                    <a class="px-5 py-2.5 bg-primary hover:bg-primary-hover text-white text-sm font-bold rounded-lg transition-all duration-300 shadow-[0_4px_14px_0_rgba(220,38,38,0.39)] hover:shadow-[0_6px_20px_rgba(220,38,38,0.23)] hover:-translate-y-0.5"
                        href="https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20dengan%20layanan%20BisnisSPBU.">
                        Hubungi Kami
                    </a>
                </div>

                <button id="mobile-menu-btn" class="md:hidden p-2 text-slate-600 hover:text-primary">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden absolute top-20 left-0 w-full bg-white border-b border-slate-200 shadow-lg p-4 flex flex-col gap-4">
            <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                href="<?php echo home_url('/'); ?>">Beranda</a>
            <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                href="<?php echo home_url('/about-us/'); ?>">Tentang
                Kami</a>
            <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                href="<?php echo home_url('/services/'); ?>">Layanan</a>
            <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                href="<?php echo home_url('/berita/'); ?>">Berita</a>
            <a class="text-sm font-medium text-slate-600 hover:text-primary transition-colors"
                href="<?php echo home_url('/kontakt/'); ?>">Kontak</a>
            <a class="px-5 py-2.5 bg-primary hover:bg-primary-hover text-white text-sm font-bold rounded-lg text-center transition-colors"
                href="https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20dengan%20layanan%20BisnisSPBU.">Hubungi
                Kami</a>
        </div>
    </nav>