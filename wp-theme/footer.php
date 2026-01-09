<footer class="bg-white border-t border-slate-200 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <div>
                <div class="flex items-center gap-2 text-slate-900 mb-6">
                    <span class="material-symbols-outlined text-primary text-3xl">local_fire_department</span>
                    <span class="text-xl font-bold">
                        <?php bloginfo('name'); ?>
                    </span>
                </div>
                <p class="text-slate-500 text-sm leading-relaxed mb-6">
                    Penyedia energi terkemuka yang mengkhususkan diri dalam distribusi bahan bakar, logistik, dan
                    solusi gas untuk Indonesia yang terus bergerak.
                </p>
                <div class="flex gap-4">
                    <a class="w-10 h-10 rounded-full bg-slate-100 flex items-center justify-center text-slate-400 hover:bg-primary hover:text-white transition-colors"
                        href="#">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path clip-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                fill-rule="evenodd"></path>
                        </svg>
                    </a>
                    <!-- Add other social links if needed -->
                </div>
            </div>
            <div>
                <h4 class="text-slate-900 font-bold mb-6">Tautan Cepat</h4>
                <ul class="space-y-4">
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/about-us/'); ?>">Tentang Perusahaan</a></li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/services/'); ?>">Layanan Kami</a></li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="#">Keberlanjutan</a></li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm" href="#">Karir</a>
                    </li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/berita/'); ?>">Berita &amp; Acara</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-slate-900 font-bold mb-6">Layanan</h4>
                <ul class="space-y-4">
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/spbu-ritel/'); ?>">Stasiun SPBU</a></li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/transporter-minyak/'); ?>">Distribusi BBM</a></li>
                    <li><a class="text-slate-500 hover:text-primary transition-colors text-sm"
                            href="<?php echo home_url('/distribusi-elpiji/'); ?>">LPG Industri</a></li>
                    <!-- Duplicate logic from HTML, simplifying -->
                </ul>
            </div>
            <div id="contact">
                <h4 class="text-slate-900 font-bold mb-6">Hubungi Kami</h4>
                <ul class="space-y-4">
                    <li class="flex items-start gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-primary text-[20px] mt-0.5">location_on</span>
                        <span>Jl. Nanga Pinoh- Kotabaru, km.4,<br />Kecamatan Nanga Pinoh, Kabupaten Melawi, Kode
                            Pos 79672, Kalimantan Barat.</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-primary text-[20px]">call</span>
                        <span>+62 858 2176 3662</span>
                    </li>
                    <li class="flex items-center gap-3 text-slate-500 text-sm">
                        <span class="material-symbols-outlined text-primary text-[20px]">mail</span>
                        <span>spbufikridarmawan@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-slate-500 text-xs">©
                <?php echo date('Y'); ?> BisnisSPBU. Hak Cipta Dilindungi.
            </p>
            <div class="flex gap-6">
                <a class="text-slate-500 hover:text-primary text-xs transition-colors" href="#">Kebijakan
                    Privasi</a>
                <a class="text-slate-500 hover:text-primary text-xs transition-colors" href="#">Syarat Layanan</a>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>