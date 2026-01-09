<?php
/*
Template Name: Service Distribusi LPG
*/

get_header(); ?>

<style>
    /* Custom scrollbar for smooth feel */
    html {
        scroll-behavior: smooth;
    }

    body::-webkit-scrollbar {
        width: 8px;
    }

    body::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    body::-webkit-scrollbar-thumb {
        background: #dc2828;
        border-radius: 4px;
    }

    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .bg-gradient-mesh {
        background-color: #f8f6f6;
        background-image:
            radial-gradient(at 0% 0%, rgba(220, 40, 40, 0.15) 0px, transparent 50%),
            radial-gradient(at 100% 0%, rgba(255, 255, 255, 0.5) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(220, 40, 40, 0.1) 0px, transparent 50%),
            radial-gradient(at 0% 100%, rgba(255, 255, 255, 0.5) 0px, transparent 50%);
    }
</style>

<!-- Decorative floating blobs -->
<div class="fixed top-20 left-[-10%] h-96 w-96 rounded-full bg-primary/10 blur-[100px] pointer-events-none z-0">
</div>
<div
    class="fixed bottom-20 right-[-10%] h-[500px] w-[500px] rounded-full bg-primary/5 blur-[120px] pointer-events-none z-0">
</div>

<!-- Main Content -->
<div class="flex flex-1 justify-center py-5 px-4 md:px-20 pt-28">
    <div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
        <!-- Hero Section -->
        <div class="@container mb-12">
            <div class="flex flex-col gap-6 py-10 @[864px]:flex-row items-center">
                <div class="flex flex-col gap-6 flex-1 @[864px]:pr-10">
                    <div class="flex flex-col gap-4 text-left">
                        <span
                            class="inline-block w-fit rounded-full bg-primary/10 px-3 py-1 text-xs font-bold text-primary">
                            Distribusi Terpercaya
                        </span>
                        <h1
                            class="text-[#171212] text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl lg:text-6xl">
                            Agen Resmi LPG <span class="text-primary">Kab. Melawi</span>
                        </h1>
                        <h2 class="text-gray-600 text-base font-normal leading-relaxed @[480px]:text-lg max-w-xl">
                            Agen penyaluran resmi untuk wilayah <strong>Kabupaten Melawi, Kalimantan Barat</strong>.
                            Menjamin ketersediaan stok aman dan distribusi lancar untuk rumah tangga dan pangkalan.
                        </h2>
                    </div>
                    <div class="flex gap-4 flex-col sm:flex-row">
                        <button
                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-primary hover:bg-red-700 transition-all hover:scale-105 text-white text-base font-bold leading-normal tracking-[0.015em] shadow-lg shadow-primary/30">
                            <span class="truncate">Cek Area Distribusi</span>
                        </button>
                        <button
                            class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-white border border-gray-200 hover:bg-gray-50 transition-all hover:border-primary/50 text-[#171212] text-base font-bold leading-normal tracking-[0.015em]">
                            <span class="truncate">Pelajari Layanan</span>
                        </button>
                    </div>
                </div>
                <div
                    class="w-full flex-1 aspect-square md:aspect-[4/3] rounded-2xl overflow-hidden shadow-2xl shadow-primary/10 relative group">
                    <!-- Image container with hover effect -->
                    <div
                        class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors duration-500 z-10">
                    </div>
                    <img alt="Red LPG cylinders stacked in a distribution warehouse"
                        class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAon18RyVY5-42Ta9oMh6qCmLMFDJuz_p3TkZaWSpKe7LBzmz_8aDLpuED9nj1pI9CfyUxpts59oWtWKjJm1EcIOHK_4Qs711pPt06ciQ0DnWHpupQuxdCmzrhg7CvXlGHc4h_m58qPIRa-ahWn5wftNB301VBq6iJOIR8-cqL8ACsUjMJCaqRbt5ef4LqnwtkFNfEtZX1e5MAzratV58exSAuL4tcOMRcMEiw_x_IOQfUsDVuF7eqPH1kbUb4SwwOFJmwp0OYpCiD9" />
                </div>
            </div>
        </div>

        <?php
        // In a real theme, Sections would ideally be flexible content.
        // Keeping hardcoded structure as requested for "Template Conversion".
        ?>

        <!-- Feature Section -->
        <div class="flex flex-col gap-10 py-10 @container">
            <div class="flex flex-col gap-2">
                <h2 class="text-primary font-bold tracking-wider uppercase text-sm">Keunggulan Kami</h2>
                <h1
                    class="text-[#171212] tracking-tight text-3xl font-bold leading-tight @[480px]:text-4xl max-w-[720px]">
                    Kenapa Memilih BisnisSPBU?
                </h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div
                    class="glass-card flex flex-1 gap-4 rounded-2xl p-6 flex-col hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl hover:shadow-primary/5 group">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">schedule</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#171212] text-xl font-bold leading-tight">Pengiriman 24/7</h2>
                        <p class="text-gray-600 text-sm font-normal leading-relaxed">Layanan antar gas kapan saja
                            anda butuhkan tanpa henti, memastikan bisnis anda tetap berjalan lancar.</p>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div
                    class="glass-card flex flex-1 gap-4 rounded-2xl p-6 flex-col hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl hover:shadow-primary/5 group">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">verified_user</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#171212] text-xl font-bold leading-tight">Terjamin Aman</h2>
                        <p class="text-gray-600 text-sm font-normal leading-relaxed">Seluruh tabung dan armada telah
                            lolos uji sertifikasi keamanan tinggi dan standar SNI.</p>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div
                    class="glass-card flex flex-1 gap-4 rounded-2xl p-6 flex-col hover:-translate-y-2 transition-transform duration-300 hover:shadow-xl hover:shadow-primary/5 group">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[28px]">map</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h2 class="text-[#171212] text-xl font-bold leading-tight">Jangkauan Luas</h2>
                        <p class="text-gray-600 text-sm font-normal leading-relaxed">Jaringan distribusi mencakup
                            seluruh kota besar dan area industri hingga ke pelosok daerah.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Products Section -->
        <div class="py-10">
            <div class="flex flex-col items-center text-center gap-4 mb-10 px-4">
                <h2 class="text-[#171212] text-3xl font-bold leading-tight tracking-[-0.015em]">Pilihan Paket &amp;
                    Produk</h2>
                <p class="text-gray-600 max-w-2xl">Kami menyediakan berbagai ukuran tabung LPG untuk memenuhi
                    kebutuhan energi Anda, mulai dari dapur rumah tangga hingga operasional industri.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Product 1: Rumah Tangga -->
                <div
                    class="glass-card flex flex-col gap-6 rounded-2xl p-8 transition-all hover:border-primary/30 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-primary">cottage</span>
                    </div>
                    <div class="flex flex-col gap-2 z-10">
                        <h1 class="text-[#171212] text-lg font-bold leading-tight">Rumah Tangga</h1>
                        <p class="flex items-baseline gap-1 text-primary">
                            <span class="text-4xl font-black leading-tight tracking-[-0.033em]">3kg / 12kg</span>
                        </p>
                        <span class="text-gray-500 text-sm font-medium leading-tight">per tabung</span>
                    </div>
                    <div class="flex flex-col gap-3 z-10 my-2">
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Subsidi &amp; Non-subsidi
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Pengiriman ke rumah
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Segel keamanan ganda
                        </div>
                    </div>
                    <button
                        onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20memesan%20LPG%20Rumah%20Tangga.', '_blank')"
                        class="mt-auto flex w-full cursor-pointer items-center justify-center rounded-xl h-12 px-4 bg-gray-100 group-hover:bg-primary group-hover:text-white transition-all text-[#171212] text-sm font-bold shadow-sm">
                        <span class="truncate">Pesan Sekarang</span>
                    </button>
                </div>
                <!-- Product 2: Bisnis -->
                <div
                    class="glass-card flex flex-col gap-6 rounded-2xl p-8 border-primary border-2 shadow-xl shadow-primary/10 relative overflow-hidden bg-white/80">
                    <div
                        class="absolute top-0 right-0 w-24 h-24 bg-primary text-white flex items-center justify-center text-xs font-bold rotate-45 translate-x-8 -translate-y-8 shadow-md">
                        POPULAR</div>
                    <div class="flex flex-col gap-2 z-10">
                        <h1 class="text-[#171212] text-lg font-bold leading-tight">Bisnis &amp; UMKM</h1>
                        <p class="flex items-baseline gap-1 text-primary">
                            <span class="text-4xl font-black leading-tight tracking-[-0.033em]">50kg</span>
                        </p>
                        <span class="text-gray-500 text-sm font-medium leading-tight">per tabung</span>
                    </div>
                    <div class="flex flex-col gap-3 z-10 my-2">
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Ideal untuk restoran
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Stok prioritas
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Dukungan teknis 24 jam
                        </div>
                    </div>
                    <button
                        onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20memesan%20LPG%20untuk%20Bisnis/UMKM.', '_blank')"
                        class="mt-auto flex w-full cursor-pointer items-center justify-center rounded-xl h-12 px-4 bg-primary text-white hover:bg-red-700 transition-colors text-sm font-bold shadow-lg shadow-primary/25">
                        <span class="truncate">Pesan Sekarang</span>
                    </button>
                </div>
                <!-- Product 3: Industri -->
                <div
                    class="glass-card flex flex-col gap-6 rounded-2xl p-8 transition-all hover:border-primary/30 relative overflow-hidden group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-primary">factory</span>
                    </div>
                    <div class="flex flex-col gap-2 z-10">
                        <h1 class="text-[#171212] text-lg font-bold leading-tight">Industri Bulk</h1>
                        <p class="flex items-baseline gap-1 text-primary">
                            <span class="text-4xl font-black leading-tight tracking-[-0.033em]">Custom</span>
                        </p>
                        <span class="text-gray-500 text-sm font-medium leading-tight">per pengiriman</span>
                    </div>
                    <div class="flex flex-col gap-3 z-10 my-2">
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Tangki penyimpanan
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Instalasi pipa industri
                        </div>
                        <div class="text-sm font-normal flex gap-3 text-gray-700 items-center">
                            <span class="material-symbols-outlined text-primary text-[20px]">check_circle</span>
                            Monitoring volume IoT
                        </div>
                    </div>
                    <button
                        onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20berkonsultasi%20tentang%20LPG%20Industri%20Bulk.', '_blank')"
                        class="mt-auto flex w-full cursor-pointer items-center justify-center rounded-xl h-12 px-4 bg-gray-100 group-hover:bg-primary group-hover:text-white transition-all text-[#171212] text-sm font-bold shadow-sm">
                        <span class="truncate">Hubungi Sales</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Coverage Map Section -->
        <div class="py-10 mb-10">
            <div class="glass-card rounded-2xl overflow-hidden p-0 flex flex-col md:flex-row">
                <div class="flex-1 p-8 md:p-12 flex flex-col justify-center gap-6">
                    <h2 class="text-[#171212] text-3xl font-bold leading-tight">Area Distribusi Kami</h2>
                    <p class="text-gray-600 leading-relaxed">
                        Kami melayani distribusi gas elpiji resmi khusus untuk wilayah <strong>Kabupaten Melawi,
                            Kalimantan Barat</strong>. Menjamin ketersediaan stok hingga ke pelosok daerah.
                    </p>
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">location_on</span>
                            <span class="font-medium text-gray-800">Kabupaten Melawi, Kalimantan Barat</span>
                        </div>
                    </div>
                </div>
                <div class="flex-1 bg-gray-200 min-h-[300px]">
                    <!-- Static Map Placeholder -->
                    <div class="w-full h-full bg-cover bg-center relative"
                        data-alt="Map of Indonesia showing distribution network connections"
                        data-location="Indonesia Map"
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA0b38ZZo8GpOSrtjKyK8-aFIDcP3N-GlBfo1JkY1MPV6EZBPl1c9cgZwTEbsHaZJsOjOqRhDJB_QpVghyJ4CqU6YueyD1FWwKpn2AAYPEZPs_UGC8xP5RA09qzItoDxquNTvIWfVJY6tJlWKkFPccs5iu6w0mUr_TdGqM5YY6HCb4wpS2bn4B7FoTdXcAIJqD1thQ52CN3-IwwNWu_HEvmRWsstgu-GUtaguEnspMmRKRRTuFOam8De1rclNGqg3LxbUBs4niPsW3Z');">
                        <div class="absolute inset-0 bg-primary/20 mix-blend-multiply"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span
                                class="glass-card px-4 py-2 rounded-lg text-xs font-bold shadow-lg flex items-center gap-2">
                                <span class="block w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                                Area Coverage: Melawi Only
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
