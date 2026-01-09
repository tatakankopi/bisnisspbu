<?php
/*
Template Name: Service SPBU Ritel
*/

get_header(); ?>

<!-- Custom Config from spbu-ritel.html -->
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#dc2828",
                    "primary-hover": "#b91c1c",
                    "background-light": "#ffffff",
                    "background-subtle": "#f9fafb",
                    "text-main": "#171212",
                    "text-muted": "#6b7280",
                },
                fontFamily: {
                    "display": ["Poppins", "sans-serif"]
                },
                borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "2xl": "2rem", "full": "9999px" },
            },
        },
    }
</script>
<style>
    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Glassmorphism utilities */
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .glass-header {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
    }

    /* Hover Micro-animations */
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        transform: translateY(-4px);
        box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);
    }

    /* Gradient Text */
    .text-gradient {
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-image: linear-gradient(to right, #dc2828, #ef4444);
    }
</style>

<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center justify-center pt-20 overflow-hidden">
    <!-- Background Gradient/Blob -->
    <div
        class="absolute top-0 right-0 w-[500px] h-[500px] bg-red-100 rounded-full blur-3xl opacity-50 translate-x-1/3 -translate-y-1/4 -z-10">
    </div>
    <div
        class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-red-50 rounded-full blur-3xl opacity-60 -translate-x-1/4 translate-y-1/4 -z-10">
    </div>
    <div
        class="max-w-[1280px] w-full mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
        <!-- Text Content -->
        <div class="flex-1 flex flex-col gap-6 text-center lg:text-left z-10">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-50 border border-red-100 w-fit mx-auto lg:mx-0">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                <span class="text-xs font-semibold text-primary uppercase tracking-wider">Terpercaya Sejak
                    2010</span>
            </div>
            <h1 class="text-5xl lg:text-6xl font-black leading-[1.1] tracking-tight text-text-main">
                Layanan <span class="text-gradient">SPBU DODO Mandiri</span> Terlengkap
            </h1>
            <p class="text-lg text-text-muted max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                Pengelolaan mandiri (Dealer Owned Dealer Operated) dengan standar Pertamina. Kami menjamin kualitas
                dan ketersediaan BBM melalui manajemen penebusan dan transportasi sendiri.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mt-2">
                <button
                    class="bg-primary hover:bg-primary-hover text-white h-12 px-8 rounded-xl font-bold transition-all shadow-lg shadow-primary/30 hover:shadow-primary/50 flex items-center justify-center gap-2">
                    <span>Temukan SPBU</span>
                    <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </button>
                <button
                    onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20dengan%20layanan%20BisnisSPBU.', '_blank')"
                    class="bg-white border border-gray-200 hover:border-primary/30 hover:bg-red-50 text-text-main h-12 px-8 rounded-xl font-bold transition-all flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-primary">call</span>
                    <span>Hubungi Kami</span>
                </button>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="flex-1 w-full max-w-[600px] relative">
            <div
                class="absolute -inset-4 bg-gradient-to-tr from-primary/20 to-transparent rounded-[2.5rem] blur-xl opacity-40">
            </div>
            <div class="relative rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white">
                <img alt="Modern gas station at night with bright lights"
                    class="w-full h-[500px] object-cover hover:scale-105 transition-transform duration-700"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCllfdqAr4vZWtD3i3dsRUX5qzJIXsUT0It9gcAKEKe5G6-e87VtQ46Js8_pn0xbKuYSxQWBf0BiS3mt-AA3Tctanx5eOPepVNmROpdvEoX-xTcnRn9tzkKJId32BaEwtEIVyhAGq_5FhBxniaEON46gj0t6e2iil1fJTb6cU_FBCGLvz-8Qm_7jQM9jrJGqBfk0f0zF4hRE_rJ4INdcObxsKvJPltANc1oIXh0VIVKx78EYLg0OnqZc6sC2qHwgTeOS1W7Pif28ics" />
                <!-- Floating Glass Card -->
                <div class="absolute bottom-6 left-6 right-6 glass-card p-4 rounded-xl flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center text-green-600 shrink-0">
                        <span class="material-symbols-outlined">verified</span>
                    </div>
                    <div>
                        <p class="text-sm font-bold text-text-main">Kualitas Terjamin</p>
                        <p class="text-xs text-text-muted">Bahan bakar lolos uji standar internasional</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-12 border-y border-gray-100 bg-background-subtle">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="flex flex-col items-center justify-center text-center gap-1 group">
                <div class="text-4xl font-black text-primary mb-2 group-hover:scale-110 transition-transform">50+
                </div>
                <div class="text-sm font-bold text-text-main uppercase tracking-wide">Lokasi Tersebar</div>
                <div class="text-xs text-text-muted">Di seluruh Indonesia</div>
            </div>
            <div class="flex flex-col items-center justify-center text-center gap-1 group">
                <div class="text-4xl font-black text-primary mb-2 group-hover:scale-110 transition-transform">24/7
                </div>
                <div class="text-sm font-bold text-text-main uppercase tracking-wide">Jam Operasional</div>
                <div class="text-xs text-text-muted">Siap melayani kapanpun</div>
            </div>
            <div class="flex flex-col items-center justify-center text-center gap-1 group">
                <div class="text-4xl font-black text-primary mb-2 group-hover:scale-110 transition-transform">100+
                </div>
                <div class="text-sm font-bold text-text-main uppercase tracking-wide">Mitra Retail</div>
                <div class="text-xs text-text-muted">Fasilitas lengkap</div>
            </div>
            <div class="flex flex-col items-center justify-center text-center gap-1 group">
                <div class="text-4xl font-black text-primary mb-2 group-hover:scale-110 transition-transform">1
                    Juta+</div>
                <div class="text-sm font-bold text-text-main uppercase tracking-wide">Pelanggan Puas</div>
                <div class="text-xs text-text-muted">Setiap bulannya</div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Grid -->
<section class="py-20 lg:py-28 relative">
    <div class="max-w-[1280px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-primary font-bold tracking-wider uppercase text-sm">Fasilitas Kami</span>
            <h2 class="text-3xl md:text-4xl font-bold mt-2 mb-4 text-text-main">Kenyamanan Perjalanan Anda <br />
                Adalah Prioritas Kami</h2>
            <p class="text-text-muted">Kami menghadirkan lebih dari sekadar tempat pengisian bahan bakar. Nikmati
                berbagai fasilitas premium yang dirancang untuk kebutuhan Anda.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">local_gas_station</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">BBM Berkualitas</h3>
                <p class="text-text-muted leading-relaxed">Menyediakan berbagai jenis bahan bakar (Pertamax,
                    Pertalite, Dexlite) dengan takaran pas dan kualitas murni.</p>
            </div>
            <!-- Card 2 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">storefront</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">Mini Market 24 Jam</h3>
                <p class="text-text-muted leading-relaxed">Lengkapi kebutuhan perjalanan Anda di minimarket kami
                    yang lengkap, nyaman, dan buka 24 jam non-stop.</p>
            </div>
            <!-- Card 3 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">mosque</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">Mushola &amp; Toilet Bersih</h3>
                <p class="text-text-muted leading-relaxed">Fasilitas ibadah yang tenang dan toilet yang senantiasa
                    dijaga kebersihannya demi kenyamanan pengunjung.</p>
            </div>
            <!-- Card 4 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">atm</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">ATM Center</h3>
                <p class="text-text-muted leading-relaxed">Tersedia berbagai mesin ATM dari bank-bank terkemuka
                    untuk memudahkan transaksi keuangan Anda.</p>
            </div>
            <!-- Card 5 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">tire_repair</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">Isi Angin &amp; Nitrogen</h3>
                <p class="text-text-muted leading-relaxed">Layanan pengisian angin dan nitrogen mandiri untuk
                    memastikan tekanan ban kendaraan Anda selalu optimal.</p>
            </div>
            <!-- Card 6 -->
            <div
                class="bg-white p-8 rounded-2xl border border-gray-100 hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 hover-lift transition-all group">
                <div
                    class="w-14 h-14 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
                    <span class="material-symbols-outlined text-3xl">restaurant</span>
                </div>
                <h3 class="text-xl font-bold text-text-main mb-3">Rest Area &amp; Food Court</h3>
                <p class="text-text-muted leading-relaxed">Istirahat sejenak sambil menikmati hidangan lezat di area
                    food court kami yang bersih dan nyaman.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 px-4">
    <div
        class="max-w-[1280px] mx-auto bg-primary rounded-[2.5rem] p-8 md:p-16 text-center text-white relative overflow-hidden shadow-2xl shadow-primary/30">
        <!-- Decorative circles -->
        <div class="absolute top-0 left-0 w-64 h-64 bg-white opacity-10 rounded-full -translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 right-0 w-96 h-96 bg-white opacity-10 rounded-full translate-x-1/3 translate-y-1/3">
        </div>
        <div class="relative z-10 max-w-2xl mx-auto space-y-6">
            <h2 class="text-3xl md:text-5xl font-black tracking-tight">Siap Bermitra Dengan Kami?</h2>
            <p class="text-red-100 text-lg md:text-xl">Bergabunglah menjadi mitra bisnis SPBU kami dan dapatkan
                keuntungan serta dukungan operasional penuh dari tim profesional.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4 pt-4">
                <button
                    onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20tertarik%20mengajukan%20kemitraan%20SPBU.', '_blank')"
                    class="bg-white text-primary px-8 py-3.5 rounded-xl font-bold hover:bg-red-50 transition-all shadow-lg">
                    Ajukan Kemitraan
                </button>
                <button
                    class="bg-transparent border-2 border-white/30 text-white px-8 py-3.5 rounded-xl font-bold hover:bg-white/10 transition-all">
                    Pelajari Syarat &amp; Ketentuan
                </button>
            </div>
        </div>
    </div>
</section>

<?php
// Elementor Support
if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_content();
    }
}
?>

<?php
get_footer();
