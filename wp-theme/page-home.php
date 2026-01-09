<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<!-- Hero Section -->
<!-- Changed min-h-screen to py-32/pb-48 to ensure text sits higher and leaves room for the overlap card -->
<div class="relative flex flex-col pt-32 pb-48 md:pb-64 items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-slate-900/90 via-slate-900/70 to-accent-blue/30 z-10">
        </div>
        <img alt="Fasilitas Energi Industri" class="w-full h-full object-cover"
            data-alt="Kilang minyak industri menyala di malam hari dengan pipa dan lampu"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDvkCNyBMf0dFC841EoeUWCJPjXlYrqxuYlzpKj1CScxumug5EavfdFR0UnqIUqwmRuHzjL-xrHBz4ybjYAfBFuS5csK0_KNlxoyj8at0gYCEP6CwpToFe5S6h4XInyOk-Nb9A5S0aRtwmvXZovrOyqhSJX8d-lVlxkJBIJEQI9avzKXAWfdgYtnHDjGbZcJ1qcWtvf91GbE8Y4zWOcW_ZJgSWslrDY75b8ayET5FWKjt_HDHSk0N6rHNyT31T_Rqgn9qE9-3l_9Q0W" />
    </div>

    <!-- Content Wrapper -->
    <div class="relative z-20 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-start">
        <div
            class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 text-white text-xs font-semibold uppercase tracking-wider mb-6 animate-fade-in backdrop-blur-sm">
            <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
            Memberdayakan Masa Depan
        </div>
        <h1 class="text-5xl md:text-7xl font-black text-white leading-[1.1] tracking-tight max-w-4xl mb-6">
            Energi Terpercaya untuk <span
                class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-400">Indonesia yang
                Bergerak</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 max-w-2xl mb-10 leading-relaxed font-light">
            Mitra Pertamina DODO (Dealer Owned Dealer Operated) yang mandiri. Mengelola distribusi BBM dengan armada
            sendiri (PT Fikri Dhamawan) dan agen penyaluran LPG resmi khusus wilayah Kabupaten Melawi, Kalimantan
            Barat.
        </p>
        <div class="flex flex-wrap gap-4">
            <a class="group flex items-center justify-center gap-2 px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg shadow-primary/30 hover:bg-primary-hover hover:shadow-primary/50 hover:-translate-y-1 transition-all duration-300"
                href="<?php echo home_url('/services/'); ?>">
                Jelajahi Layanan
                <span
                    class="material-symbols-outlined text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <a class="group flex items-center justify-center gap-2 px-8 py-4 bg-white/10 text-white border border-white/20 font-bold rounded-lg hover:bg-white/20 hover:-translate-y-1 backdrop-blur-sm transition-all duration-300"
                href="https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20dengan%20layanan%20BisnisSPBU.">
                Hubungi Kami
            </a>
        </div>
    </div>
</div>

<!-- Stats Section - Overlapping -->
<!-- Adjusted margin to pull up slightly less aggressively, or ensure previous section padding accommodates it -->
<div class="relative z-30 -mt-32 md:-mt-40 px-4 mb-24 transition-all duration-300">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 bg-white border border-slate-100 rounded-2xl p-8 shadow-xl">
            <div class="flex flex-col items-center justify-center text-center p-4">
                <span class="text-4xl font-black text-primary mb-2">15+</span>
                <span class="text-sm font-medium text-slate-500 uppercase tracking-wide">Stasiun SPBU</span>
            </div>
            <div class="flex flex-col items-center justify-center text-center p-4 border-l border-slate-100">
                <span class="text-4xl font-black text-primary mb-2">1000+</span>
                <span class="text-sm font-medium text-slate-500 uppercase tracking-wide">Klien Puas</span>
            </div>
            <div class="flex flex-col items-center justify-center text-center p-4 border-l border-slate-100">
                <span class="text-4xl font-black text-primary mb-2">50+</span>
                <span class="text-sm font-medium text-slate-500 uppercase tracking-wide">Unit Armada</span>
            </div>
            <div class="flex flex-col items-center justify-center text-center p-4 border-l border-slate-100">
                <span class="text-4xl font-black text-primary mb-2">24/7</span>
                <span class="text-sm font-medium text-slate-500 uppercase tracking-wide">Siap Melayani</span>
            </div>
        </div>
    </div>
</div>

<section class="py-20 relative overflow-hidden bg-white" id="services">
    <div class="absolute top-0 right-0 w-1/3 h-full bg-red-50 blur-[100px] pointer-events-none opacity-60"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-primary font-bold tracking-wider uppercase text-sm mb-2">Bisnis Inti Kami</h2>
                <h3 class="text-3xl md:text-5xl font-bold text-slate-900 tracking-tight">Solusi Energi Komprehensif
                </h3>
            </div>
            <p class="text-slate-500 max-w-md text-left">
                Kami menyediakan bahan bakar berkualitas tinggi, transportasi yang andal, dan distribusi gas yang
                aman di seluruh wilayah.
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div
                class="group relative bg-white border border-slate-200 rounded-2xl p-8 hover:border-primary/50 hover:shadow-xl hover:shadow-slate-200/50 transition-all duration-300 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Manajemen SPBU</h4>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Stasiun pengisian modern yang melayani bahan bakar berkualitas tinggi untuk semua jenis
                    kendaraan. Kami memastikan pengukuran yang presisi dan standar layanan premium.
                </p>
                <a class="inline-flex items-center text-primary font-semibold group-hover:text-primary-hover transition-colors"
                    href="<?php echo home_url('/spbu-ritel/'); ?>">
                    Pelajari lebih lanjut <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </a>
            </div>
            <div
                class="group relative bg-white border border-slate-200 rounded-2xl p-8 hover:border-primary/50 hover:shadow-xl hover:shadow-slate-200/50 transition-all duration-300 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-3xl">local_shipping</span>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Transportir Minyak</h4>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Armada Pengiriman Handal. Armada khusus untuk pengiriman yang aman dan tepat waktu ke mitra
                    industri dan lokasi komersial terpencil.
                </p>
                <a class="inline-flex items-center text-primary font-semibold group-hover:text-primary-hover transition-colors"
                    href="<?php echo home_url('/transporter-minyak/'); ?>">
                    Pelajari lebih lanjut <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </a>
            </div>
            <div
                class="group relative bg-white border border-slate-200 rounded-2xl p-8 hover:border-primary/50 hover:shadow-xl hover:shadow-slate-200/50 transition-all duration-300 hover:-translate-y-2">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                    <span class="material-symbols-outlined text-3xl">propane_tank</span>
                </div>
                <h4 class="text-2xl font-bold text-slate-900 mb-3">Distribusi LPG</h4>
                <p class="text-slate-600 mb-6 leading-relaxed">
                    Distribusi Gas Rumah Tangga &amp; Industri. Rantai pasokan aman yang menjamin ketersediaan LPG
                    untuk rumah tangga dan pabrik 24/7.
                </p>
                <a class="inline-flex items-center text-primary font-semibold group-hover:text-primary-hover transition-colors"
                    href="<?php echo home_url('/distribusi-elpiji/'); ?>">
                    Pelajari lebih lanjut <span class="material-symbols-outlined ml-2 text-sm">arrow_forward</span>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="py-20 bg-slate-50 relative" id="about">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl p-8 md:p-16 border border-slate-200 shadow-xl relative overflow-hidden">
            <div class="absolute right-0 top-0 h-full w-1/2 opacity-[0.03] bg-[url('https://images.unsplash.com/photo-1605218427368-35b86121a581?q=80&amp;w=2000&amp;auto=format&amp;fit=crop')] bg-cover bg-center pointer-events-none"
                data-alt="Tampilan abstrak pipa dan katup"></div>
            <div class="relative z-10 flex flex-col md:flex-row gap-12 items-center">
                <div class="flex-1">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6">Mengapa Pemimpin Industri Memilih
                        BisnisSPBU</h2>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Dalam industri di mana setiap detik berharga, keandalan bukan sekadar janji—itu adalah
                        standar dasar kami. Kami menggabungkan logistik mutakhir dengan protokol keselamatan yang
                        ketat.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">verified_user</span>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold text-lg">Terpercaya</h4>
                                <p class="text-slate-500 text-sm">Standar operasional bersertifikat dan praktik
                                    bisnis yang transparan.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">schedule</span>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold text-lg">Tepat Waktu</h4>
                                <p class="text-slate-500 text-sm">Perencanaan rute yang dioptimalkan memastikan
                                    bahan bakar tiba tepat saat dibutuhkan.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined">health_and_safety</span>
                            </div>
                            <div>
                                <h4 class="text-slate-900 font-bold text-lg">Aman</h4>
                                <p class="text-slate-500 text-sm">Kepatuhan HSE (Kesehatan, Keselamatan, Lingkungan)
                                    yang ketat untuk setiap tetes yang dikirimkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 w-full flex justify-center">
                    <div class="relative w-full max-w-md aspect-square">
                        <div class="absolute inset-0 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>
                        <img alt="Kontrol Kualitas"
                            class="relative w-full h-full object-cover rounded-2xl shadow-2xl border border-white"
                            data-alt="Close up katup gas industri modern"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4fKXPhCAWjX-76ApxhfIuO4XmzZV9WZIhwFhrhUwCmuhMJ3Q3j7x3NU0v8_GlOvo-tLylGw9GX3UTUngtYBxQ0D-B_efqAa31xdwHLjJP0rVRb80_aZhk-iDuJ_GUryBuCrtRGxskKhqpCc30zt28IyHTPzn4-2Af_xLxL_3ChUUct14Ss7akJCMynnj0UmTA1c6eKmSWjbAkzNpgLSKUl1VC0TNvAWLN34q9qWCa6L1hxYvOCI53zviLVVJg1EJnyZJYRoq0Zwxa" />
                        <div
                            class="absolute -bottom-6 -left-6 bg-white p-6 rounded-xl border border-slate-100 shadow-xl hidden md:block">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="material-symbols-outlined text-yellow-500">star</span>
                                <span class="material-symbols-outlined text-yellow-500">star</span>
                                <span class="material-symbols-outlined text-yellow-500">star</span>
                                <span class="material-symbols-outlined text-yellow-500">star</span>
                                <span class="material-symbols-outlined text-yellow-500">star</span>
                            </div>
                            <p class="text-slate-900 text-sm font-bold">Standar Industri</p>
                            <p class="text-slate-500 text-xs">Penghargaan Keunggulan 2026</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-slate-900 mb-16">Dipercaya oleh yang Terbaik</h2>
        <div class="max-w-4xl mx-auto bg-slate-50 p-10 rounded-2xl border border-slate-100 relative shadow-sm">
            <span class="material-symbols-outlined absolute top-8 left-8 text-6xl text-primary/10">format_quote</span>
            <p class="text-xl md:text-2xl text-slate-700 font-medium leading-relaxed mb-8 relative z-10">
                "BisnisSPBU telah menjadi kunci dalam operasi logistik kami. Pasokan bahan bakar mereka konsisten,
                kualitasnya terbaik, dan armada pengiriman mereka selalu tepat waktu bahkan dalam kondisi yang
                menantang. Mitra yang benar-benar dapat kami andalkan."
            </p>
            <div class="flex items-center justify-center gap-4">
                <div class="w-12 h-12 bg-slate-200 rounded-full overflow-hidden">
                    <img alt="Klien" class="w-full h-full object-cover" data-alt="Potret pengusaha Asia yang tersenyum"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCr1pWz7ke8h6X5OPq88sO9kySC1Rk_NmNK-fWSOws3HZfD3lt2QTk7tJsjd5UzDwncj1C10_l1HPIBBuvqX8f78RNCXatz3UrR4JWyEjhPJ4ZqSLElZLGHAjzE9vEG96keJk8IWTyV1ziRn0PTUfVV8nfE2qXoIPf85HrTdWgfT2_a0tSlmZeWzvcBbeUq-5dHXtxznEf_7XMJZ1Ip3w6930RtFvvFcbbwLMTisaOmz41t8T6OCRe_GuQ086MRkSW5OiY4ueSyRUHz" />
                </div>
                <div class="text-left">
                    <h5 class="text-slate-900 font-bold">Budi Santoso</h5>
                    <p class="text-primary text-sm">CEO, Logistik Jaya Indonesia</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-24 relative overflow-hidden bg-slate-900">
    <div class="absolute inset-0 bg-primary/20"></div>
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-30">
    </div>
    <div class="max-w-7xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-6">Siap bermitra dengan kami?</h2>
        <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto">
            Mari diskusikan bagaimana kami dapat mendukung bisnis Anda dengan solusi energi yang andal. Tim kami
            siap 24/7.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20dengan%20layanan%20BisnisSPBU."
                class="flex items-center justify-center gap-2 px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg shadow-primary/30 hover:bg-primary-hover hover:-translate-y-1 transition-all duration-300">
                <span class="material-symbols-outlined">call</span>
                Hubungi Penjualan
            </a>
            <a href="https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20mendapatkan%20penawaran%20harga."
                class="flex items-center justify-center gap-2 px-8 py-4 bg-white/10 text-white border border-white/20 font-bold rounded-lg hover:bg-white/20 hover:-translate-y-1 backdrop-blur-sm transition-all duration-300">
                <span class="material-symbols-outlined">mail</span>
                Dapatkan Penawaran
            </a>
        </div>
    </div>
</section>

<?php
// Elementor Support: Check if content exists to support Elementor editing
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<?php
get_footer();
