<?php
/*
Template Name: Service Transporter Minyak
*/

get_header(); ?>

<!-- Custom Config from transporter-minyak.html -->
<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#dc2626", // Consistent with site
                    "primary-dark": "#b91c1c",
                    "background-light": "#f8f6f6",
                    "background-dark": "#201212",
                    "text-main": "#1e293b",
                },
                fontFamily: {
                    "display": ["Poppins", "sans-serif"]
                },
                borderRadius: { "DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "2xl": "2rem", "full": "9999px" },
                boxShadow: {
                    'glass': '0 4px 30px rgba(0, 0, 0, 0.1)',
                }
            },
        },
    }
</script>
<style>
    .glass-panel {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .text-gradient {
        background: linear-gradient(to right, #dc2626, #b91c1c);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 40px -10px rgba(219, 41, 41, 0.15);
    }
</style>

<main class="flex flex-col w-full">
    <!-- Hero Section -->
    <section
        class="relative w-full min-h-[600px] flex items-center justify-center pt-8 px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 to-transparent z-10 w-full md:w-2/3">
            </div>
            <div class="w-full h-full bg-cover bg-center bg-no-repeat"
                data-alt="Modern oil tanker truck driving on a highway during sunset"
                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB69fxh7IuNB6OGiytTKP8gmfXMZ73t0YgoCJxtDrXZ5gBfqky7YvEueV54v-3gXmySkNBWBHraps3t-a9S-K2s3keVahN_CZzF3yJr9UQgjhI4E4780zJp95OMgCyuT5cTEddKAPp_JsuMb9J_dt_zV56oAGQ3H-nOz4xF4DNbK74d4RqvIBgq5mXDY-U_LjXyHmrpf8HRFO-iKwlFHepIoIn_WrScOQanwjtcAyUMYXfs0T1BsPhmc-ht4bSU8rsR9QsEVKtF-_yo");'>
            </div>
        </div>
        <div class="relative z-20 w-full max-w-[1280px] flex flex-col items-start gap-8 pt-20 pb-20">
            <div
                class="flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 backdrop-blur-sm">
                <span class="material-symbols-outlined text-primary text-sm">verified</span>
                <span class="text-primary text-xs font-bold uppercase tracking-wider">Terverifikasi Pertamina</span>
            </div>
            <div class="max-w-[720px] flex flex-col gap-6">
                <h1 class="text-[#171212] text-5xl md:text-6xl font-black leading-[1.1] tracking-[-0.033em]">
                    Transportasi Minyak <br /> <span class="text-gradient">Mandiri & Terpercaya</span>
                </h1>
                <p class="text-[#4a4a4a] text-lg md:text-xl font-normal leading-relaxed max-w-[600px]">
                    <strong>PT Fikri Dhamawan</strong> (BisnisSPBU) beroperasi sebagai transportir mandiri (DODO).
                    Kami tidak tergantung pada penunjukan pihak ketiga, menjamin kepastian armada dan ketepatan
                    waktu pengiriman BBM Anda.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                <a class="flex items-center justify-center h-14 px-8 rounded-xl bg-primary hover:bg-primary-dark text-white text-base font-bold transition-all shadow-lg shadow-primary/25 hover:shadow-primary/40"
                    href="#armada">
                    Lihat Armada Kami
                    <span class="material-symbols-outlined ml-2 text-[20px]">arrow_downward</span>
                </a>
                <button
                    onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20konsultasi%20rute%20transportasi%20minyak.', '_blank')"
                    class="flex items-center justify-center h-14 px-8 rounded-xl bg-white border border-[#e5dcdc] text-[#171212] hover:bg-[#f8f6f6] text-base font-bold transition-colors">
                    Konsultasi Rute
                </button>
            </div>

        </div>
    </section>
    <!-- Features / Why Us -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-[1280px] mx-auto flex flex-col gap-12">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6">
                <div class="max-w-[700px]">
                    <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-2">Mengapa Kami?</h2>
                    <h3 class="text-[#171212] text-3xl md:text-4xl font-black leading-tight tracking-tight">
                        Keunggulan Operasional &amp; Teknologi
                    </h3>
                </div>
                <p class="text-[#666] max-w-[500px] leading-relaxed">
                    Kami mengintegrasikan teknologi terkini dengan manajemen armada profesional untuk menjamin
                    efisiensi distribusi.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature Card 1 -->
                <div
                    class="group p-8 rounded-2xl bg-[#fcfcfc] border border-[#f0f0f0] hover-lift relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-primary">location_on</span>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-[28px]">location_on</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#171212] mb-3">GPS Real-Time Tracking</h4>
                    <p class="text-[#666] leading-relaxed">Pantau posisi armada dan estimasi waktu kedatangan secara
                        presisi melalui dashboard klien kami.</p>
                </div>
                <!-- Feature Card 2 -->
                <div
                    class="group p-8 rounded-2xl bg-[#fcfcfc] border border-[#f0f0f0] hover-lift relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-primary">security</span>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-[28px]">security</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#171212] mb-3">Driver Tersertifikasi HSE</h4>
                    <p class="text-[#666] leading-relaxed">Seluruh pengemudi memiliki sertifikat Defensive Driving
                        dan penanganan B3 standar Migas.</p>
                </div>
                <!-- Feature Card 3 -->
                <div
                    class="group p-8 rounded-2xl bg-[#fcfcfc] border border-[#f0f0f0] hover-lift relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined text-9xl text-primary">build_circle</span>
                    </div>
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-6 text-primary">
                        <span class="material-symbols-outlined text-[28px]">build_circle</span>
                    </div>
                    <h4 class="text-xl font-bold text-[#171212] mb-3">Maintenance Preventif</h4>
                    <p class="text-[#666] leading-relaxed">Bengkel internal dengan jadwal perawatan ketat untuk
                        meminimalisir risiko breakdown di jalan.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Fleet Showcase (Armada) -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-[#f8f6f6] relative" id="armada">
        <!-- Decorative gradient bg -->
        <div
            class="absolute top-0 left-0 w-full h-[500px] bg-gradient-to-b from-white to-transparent pointer-events-none">
        </div>
        <div class="max-w-[1280px] mx-auto relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-3">Armada Kami</h2>
                <h3 class="text-[#171212] text-3xl md:text-4xl font-black leading-tight mb-4">Pilihan Kapasitas
                    Sesuai Kebutuhan</h3>
                <p class="text-[#666]">Tersedia berbagai ukuran tangki untuk efisiensi pengiriman BBM Industri
                    maupun SPBU ke seluruh pelosok.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Truck Type 1 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-[#eee]">
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                            data-alt="Small capacity oil tanker truck 16KL side view"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB4VIU21Zdh1I5bpjlHOQsg6uDqiIFhO51nyVLLe91dA7h6gaf8onq-xD5tr__nUmnKeMyWOQwcUArljPDy4-4ulh8Q992uJ4kQmYaUyJvEQGI2CGLTf_wFvbAqQZkJ-j_b68EXF9Ipkja49VLn3oFtbmoSsYZJ7-BQevhtJdWtLaUJtB9MA9N9RdPdx1Eq9Q-69RmRdO3T8oPSfTvpZtVUwgMEOi23K_YXOtD0ixC7KYDv3z2gvEfKlp-I-o4hBIjaTBxtPwH6h5VM");'>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="text-2xl font-bold text-[#171212]">Rigid Tanker</h4>
                                <p class="text-[#666] text-sm mt-1">Ideal untuk area perkotaan</p>
                            </div>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-lg">16
                                KL</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Manuver tinggi di jalan sempit
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Bottom Loading System
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Digital Flowmeter
                            </li>
                        </ul>
                        <button
                            onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20tahu%20spesifikasi%20detail%20Rigid%20Tanker.', '_blank')"
                            class="w-full py-3 rounded-lg border border-[#e5dcdc] text-[#171212] font-bold hover:bg-[#171212] hover:text-white transition-colors">
                            Spesifikasi Detail
                        </button>
                    </div>
                </div>
                <!-- Truck Type 2 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-[#eee] relative">
                    <div
                        class="absolute top-4 right-4 z-20 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                        Most Popular</div>
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                            data-alt="Medium capacity oil tanker truck 24KL"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA7mFlSrHlyoQYbUki0KKL-JBF5N3ir3-p0tjVmIcL_VnTDn5Q3X4QZSmasKnb-xz4HO2WhAOFRSpH9x69K4WrhjrOOe1zWmbIxPv2nzZa2VgtC8ZbMuM1XwmiMaXGRyvtuULSqW0uAgtnogtr6C60JlEfYjDO8bnzOmdOT_yUgRKsg8UdocnhO42an9sktmUcqwbqKax2MrZ2hnSOWDNbBEQOULAristYRQ18jQp5u9aeD048eDCu3UmBM0HQhXbDo6i5B68GC4yok");'>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="text-2xl font-bold text-[#171212]">Tronton Tanker</h4>
                                <p class="text-[#666] text-sm mt-1">Efisiensi jarak menengah</p>
                            </div>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-lg">24
                                KL</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Kompartemen Multi-produk
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Suspensi Udara Stabil
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                GPS &amp; CCTV In-Cabin
                            </li>
                        </ul>
                        <button
                            onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20memesan%20Tronton%20Tanker.', '_blank')"
                            class="w-full py-3 rounded-lg bg-primary text-white font-bold hover:bg-primary-dark transition-colors shadow-lg shadow-primary/20">
                            Pesan Armada Ini
                        </button>
                    </div>
                </div>
                <!-- Truck Type 3 -->
                <div
                    class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 group border border-[#eee]">
                    <div class="h-64 bg-gray-100 overflow-hidden relative">
                        <div class="absolute inset-0 bg-black/5 group-hover:bg-transparent transition-colors z-10">
                        </div>
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                            data-alt="Large capacity oil tanker trailer 32KL"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTpm2TsLe5K3c--nzq5uqHes2dGyqgJlexx2ocsmOSUlnoHF_vZirkbi_N11WI9W7b53JVccAzvtJ0QGndV3W8tiznd8Qnmnm3_2gTxugficXEkObKw2fXjXR9L8iF6ddoNZyWPtOZzyedcQHsxF9wG3KA4smTF8cdWkDFaEL64zD7TVYhifj5EdZakn-Kln-6IkgD6tqCqmOGOJTSubvUOQPo3-srJuPRRD3oHyo5uvrPjbpUYbIFKU9cCdWmaKmH1-wMwqNq9OBJ");'>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h4 class="text-2xl font-bold text-[#171212]">Trailer Tanker</h4>
                                <p class="text-[#666] text-sm mt-1">Logistik volume besar</p>
                            </div>
                            <span class="px-3 py-1 bg-primary/10 text-primary text-sm font-bold rounded-lg">32+
                                KL</span>
                        </div>
                        <ul class="space-y-3 mb-6">
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Efisiensi Biaya per Liter
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Rute Antar Provinsi
                            </li>
                            <li class="flex items-center gap-3 text-sm text-[#4a4a4a]">
                                <span class="material-symbols-outlined text-primary text-lg">check_circle</span>
                                Sistem Pengereman ABS+EBS
                            </li>
                        </ul>
                        <button
                            onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20tahu%20spesifikasi%20detail%20Trailer%20Tanker.', '_blank')"
                            class="w-full py-3 rounded-lg border border-[#e5dcdc] text-[#171212] font-bold hover:bg-[#171212] hover:text-white transition-colors">
                            Spesifikasi Detail
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Safety & Standards -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
        <div class="max-w-[1280px] mx-auto">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="w-full lg:w-1/2 relative">
                    <!-- Decorative Shape -->
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/10 rounded-full blur-2xl"></div>
                    <div class="absolute -bottom-10 -right-10 w-60 h-60 bg-primary/5 rounded-full blur-3xl"></div>
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                        <div class="w-full h-[500px] bg-cover bg-center"
                            data-alt="Safety officer checking oil truck valves wearing PPE"
                            style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDbSQgaSxh38kkELljfHhuYQou0ZjiS6ajY3mWDfqcSlXHV4g1-oacciiYa-BNrBI_mu-absAp796RRsXrJNSlQ-1qeaVM6MrDXHg74bBRrq2R_bF4iZJVlYFZdoBW8yYXRvnFoQMBGkiw8KjR_2i4kPc9UYd1bj8BcK8NOqf1max73ab2b8HnZiSosBfDYxT70b3Ek_CSTk82ljZJ4ARuadwdko_T0AmQqpC99AAFefig3lEd9BF1JqVQyR1qRMiZ8dzVfpy7CNyf6");'>
                        </div>
                        <!-- Floating Glass Card -->
                        <div class="absolute bottom-8 left-8 right-8 glass-panel p-6 rounded-xl border border-white/60">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-green-500 text-white flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined">health_and_safety</span>
                                </div>
                                <div>
                                    <h5 class="font-bold text-[#171212]">Zero Accident Target</h5>
                                    <p class="text-xs text-[#333] mt-1">Kami menerapkan kebijakan "Stop Work
                                        Authority" jika kondisi tidak aman.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <h2 class="text-primary text-sm font-bold uppercase tracking-widest mb-3">Safety First</h2>
                    <h3 class="text-[#171212] text-3xl md:text-4xl font-black leading-tight mb-6">Standar
                        Keselamatan Tanpa Kompromi</h3>
                    <p class="text-[#666] mb-8 leading-relaxed">
                        Dalam bisnis transportasi bahan bakar mudah terbakar, keselamatan adalah segalanya. Kami
                        mematuhi regulasi ketat Pertamina dan standar internasional.
                    </p>
                    <div class="space-y-6">
                        <div class="flex gap-4 group">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#f8f6f6] group-hover:bg-primary/10 flex items-center justify-center transition-colors shrink-0">
                                <span
                                    class="material-symbols-outlined text-[#171212] group-hover:text-primary transition-colors">engineering</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#171212] text-lg">Inspeksi Harian Pra-Perjalanan</h4>
                                <p class="text-[#666] text-sm mt-1">100+ poin pengecekan wajib sebelum armada
                                    diizinkan keluar dari pool.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#f8f6f6] group-hover:bg-primary/10 flex items-center justify-center transition-colors shrink-0">
                                <span
                                    class="material-symbols-outlined text-[#171212] group-hover:text-primary transition-colors">psychology</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#171212] text-lg">Manajemen Kelelahan Driver</h4>
                                <p class="text-[#666] text-sm mt-1">Pengaturan jam kerja ketat dan tempat istirahat
                                    yang layak untuk mencegah microsleep.</p>
                            </div>
                        </div>
                        <div class="flex gap-4 group">
                            <div
                                class="w-12 h-12 rounded-xl bg-[#f8f6f6] group-hover:bg-primary/10 flex items-center justify-center transition-colors shrink-0">
                                <span
                                    class="material-symbols-outlined text-[#171212] group-hover:text-primary transition-colors">emergency</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#171212] text-lg">Emergency Response Team</h4>
                                <p class="text-[#666] text-sm mt-1">Tim reaksi cepat 24 jam siap menangani insiden
                                    tumpahan atau kendala teknis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div
            class="max-w-[1280px] mx-auto rounded-3xl bg-[#f8f6f6] border border-[#e5dcdc] p-8 md:p-16 flex flex-col md:flex-row items-center justify-between gap-10 relative overflow-hidden">
            <div
                class="absolute top-0 right-0 w-64 h-64 bg-primary/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2">
            </div>
            <div class="relative z-10 max-w-lg">
                <h2 class="text-[#171212] text-3xl md:text-4xl font-black leading-tight mb-4">Butuh Penawaran
                    Transportasi?</h2>
                <p class="text-[#666] text-lg">Dapatkan hitungan biaya per liter yang kompetitif dan transparan
                    untuk kebutuhan bisnis Anda.</p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 relative z-10 w-full md:w-auto">
                <button
                    onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20minta%20penawaran%20transportasi.', '_blank')"
                    class="flex items-center justify-center h-12 px-8 rounded-xl bg-primary hover:bg-primary-dark text-white font-bold transition-all shadow-lg shadow-primary/20">
                    Minta Penawaran
                </button>
                <button
                    onclick="window.open('https://wa.me/6285821763662?text=Halo,%20saya%20ingin%20chat%20dengan%20Admin.', '_blank')"
                    class="flex items-center justify-center h-12 px-8 rounded-xl bg-white border border-[#d1cccc] hover:bg-[#f0f0f0] text-[#171212] font-bold transition-colors">
                    <span class="material-symbols-outlined mr-2 text-lg">call</span>
                    WhatsApp Admin
                </button>
            </div>
        </div>
    </section>
</main>

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
