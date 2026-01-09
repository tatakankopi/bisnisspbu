<?php
/*
Template Name: Services Page
*/

get_header(); ?>

<!-- Custom Styles and Scripts for this page -->
<script>
    // Ideally moved to custom-scripts.js or footer but here for direct conversion
    tailwind.config.theme.extend.colors["deep-blue"] = "#1a365d";
    tailwind.config.theme.extend.colors["flame-red"] = "#dc2626";
    tailwind.config.theme.extend.colors["card-bg"] = "#ffffff";
    tailwind.config.theme.extend.colors["card-border"] = "#e2e8f0";
    tailwind.config.theme.extend.fontFamily["heading"] = ["Poppins", "sans-serif"];
</script>
<style>
    .glass-card {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(220, 38, 38, 0.1);
        transition: all 0.3s ease;
        box-shadow: 0 4px 20px -5px rgba(0, 0, 0, 0.05);
    }

    .glass-card:hover {
        transform: translateY(-8px);
        border-color: #dc2626;
        background: rgba(255, 255, 255, 1);
        box-shadow: 0 20px 40px -10px rgba(220, 38, 38, 0.15);
    }

    .icon-glow {
        box-shadow: 0 0 20px rgba(220, 38, 38, 0.1);
    }

    .bg-gradient-orb {
        background: radial-gradient(circle, rgba(220, 38, 38, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
    }

    .bg-gradient-orb-2 {
        background: radial-gradient(circle, rgba(26, 54, 93, 0.08) 0%, rgba(255, 255, 255, 0) 70%);
    }
</style>

<!-- Main Content -->
<div class="relative min-h-screen flex flex-col pt-20">
    <!-- Background Orbs -->
    <div class="fixed inset-0 pointer-events-none z-0 overflow-hidden">
        <div
            class="absolute top-0 left-1/4 w-[800px] h-[800px] bg-gradient-orb rounded-full mix-blend-multiply opacity-70 blur-3xl">
        </div>
        <div
            class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-gradient-orb-2 rounded-full mix-blend-multiply opacity-50 blur-3xl">
        </div>
    </div>

    <div class="relative z-10 flex flex-1 flex-col layout-container w-full justify-start items-center pt-12 pb-20">
        <div class="layout-content-container flex flex-col max-w-[1200px] w-full px-6 lg:px-10">
            <div class="flex flex-col items-center text-center gap-4 mb-16 animate-fade-in-up">
                <span
                    class="text-primary font-bold tracking-widest text-xs uppercase bg-red-50 px-3 py-1 rounded-full border border-red-100">Solusi
                    Energi Terpadu</span>
                <h1
                    class="text-slate-900 font-heading font-extrabold text-4xl md:text-5xl lg:text-6xl tracking-tight leading-tight">
                    LAYANAN <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-red-400">KAMI</span>
                </h1>
                <p class="text-slate-600 text-base md:text-lg font-normal leading-relaxed max-w-2xl">
                    Kami menyediakan ekosistem energi yang handal, mulai dari distribusi bahan bakar, transportasi
                    logistik, hingga penyaluran gas untuk kebutuhan industri dan rumah tangga.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8 w-full">
                <div
                    class="glass-card rounded-2xl p-8 flex flex-col gap-6 group relative overflow-hidden bg-white shadow-xl shadow-slate-200/50">
                    <div
                        class="absolute top-0 right-0 p-32 bg-red-50 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:bg-red-100 opacity-60">
                    </div>
                    <div
                        class="relative z-10 size-16 rounded-xl bg-gradient-to-br from-red-50 to-white border border-red-100 flex items-center justify-center group-hover:border-primary/30 transition-colors icon-glow shadow-sm">
                        <span class="material-symbols-outlined text-primary !text-[32px]">local_gas_station</span>
                    </div>
                    <div class="relative z-10 flex flex-col gap-3 flex-1">
                        <h3
                            class="text-slate-900 font-heading text-2xl font-bold leading-tight group-hover:text-primary transition-colors">
                            SPBU &amp; Ritel</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Jaringan stasiun pengisian bahan bakar umum modern dengan jaminan kualitas dan takaran
                            pas untuk mendukung mobilitas kendaraan Anda setiap hari.
                        </p>
                    </div>
                    <div class="relative z-10 mt-auto pt-4">
                        <button class="flex items-center text-slate-900 text-sm font-bold group/btn"
                            onclick="window.location.href='<?php echo home_url('/spbu-ritel/'); ?>'">
                            <span class="mr-2 group-hover:text-primary transition-colors">Lihat Detail</span>
                            <span
                                class="material-symbols-outlined !text-[18px] transform transition-transform group-hover/btn:translate-x-1 text-primary">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div
                    class="glass-card rounded-2xl p-8 flex flex-col gap-6 group relative overflow-hidden bg-white shadow-xl shadow-slate-200/50">
                    <div
                        class="absolute top-0 right-0 p-32 bg-blue-50 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:bg-blue-100 opacity-60">
                    </div>
                    <div
                        class="relative z-10 size-16 rounded-xl bg-gradient-to-br from-blue-50 to-white border border-blue-100 flex items-center justify-center group-hover:border-blue-500/30 transition-colors shadow-sm">
                        <span class="material-symbols-outlined text-deep-blue !text-[32px]">local_shipping</span>
                    </div>
                    <div class="relative z-10 flex flex-col gap-3 flex-1">
                        <h3
                            class="text-slate-900 font-heading text-2xl font-bold leading-tight group-hover:text-deep-blue transition-colors">
                            Transporter Minyak</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Armada logistik tangki BBM berstandar keamanan tinggi, memastikan distribusi bahan bakar
                            yang efisien, aman, dan tepat waktu ke seluruh pelosok.
                        </p>
                    </div>
                    <div class="relative z-10 mt-auto pt-4">
                        <button class="flex items-center text-slate-900 text-sm font-bold group/btn"
                            onclick="window.location.href='<?php echo home_url('/transporter-minyak/'); ?>'">
                            <span class="mr-2 group-hover:text-deep-blue transition-colors">Lihat Detail</span>
                            <span
                                class="material-symbols-outlined !text-[18px] transform transition-transform group-hover/btn:translate-x-1 text-deep-blue">arrow_forward</span>
                        </button>
                    </div>
                </div>
                <div
                    class="glass-card rounded-2xl p-8 flex flex-col gap-6 group relative overflow-hidden bg-white shadow-xl shadow-slate-200/50">
                    <div
                        class="absolute top-0 right-0 p-32 bg-orange-50 rounded-full blur-3xl -mr-16 -mt-16 transition-all group-hover:bg-orange-100 opacity-60">
                    </div>
                    <div
                        class="relative z-10 size-16 rounded-xl bg-gradient-to-br from-orange-50 to-white border border-orange-100 flex items-center justify-center group-hover:border-orange-500/30 transition-colors shadow-sm">
                        <span
                            class="material-symbols-outlined text-orange-500 !text-[32px]">local_fire_department</span>
                    </div>
                    <div class="relative z-10 flex flex-col gap-3 flex-1">
                        <h3
                            class="text-slate-900 font-heading text-2xl font-bold leading-tight group-hover:text-orange-600 transition-colors">
                            Distribusi Elpiji</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Layanan penyediaan dan distribusi gas LPG yang handal untuk memenuhi kebutuhan memasak
                            rumah tangga hingga operasional industri skala besar.
                        </p>
                    </div>
                    <div class="relative z-10 mt-auto pt-4">
                        <button class="flex items-center text-slate-900 text-sm font-bold group/btn"
                            onclick="window.location.href='<?php echo home_url('/distribusi-elpiji/'); ?>'">
                            <span class="mr-2 group-hover:text-orange-600 transition-colors">Lihat Detail</span>
                            <span
                                class="material-symbols-outlined !text-[18px] transform transition-transform group-hover/btn:translate-x-1 text-orange-600">arrow_forward</span>
                        </button>
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
