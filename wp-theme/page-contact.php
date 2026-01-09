<?php
/*
Template Name: Contact Page
*/

get_header(); ?>

<!-- Contact Page Styles - direct from source or custom styles needed -->
<style>
    .map-container iframe {
        width: 100%;
        height: 100%;
        filter: grayscale(0.2) contrast(1.1);
    }
</style>

<!-- Main Content -->
<div class="relative pt-32 pb-20 overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-96 bg-gradient-to-b from-white to-background-dark -z-10"></div>
    <div class="absolute -top-20 -right-20 w-[600px] h-[600px] bg-red-100 rounded-full blur-[120px] opacity-60 -z-10">
    </div>
    <div class="absolute top-40 -left-20 w-[400px] h-[400px] bg-blue-50 rounded-full blur-[100px] opacity-60 -z-10">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16 animate-fade-in">
            <div
                class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-50 text-primary text-xs font-bold uppercase tracking-wider mb-4 border border-red-100">
                <span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
                Hubungi Kami
            </div>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-6 tracking-tight">Mari Diskusikan Kebutuhan
                Energi Anda</h1>
            <p class="text-lg text-slate-600 font-light leading-relaxed">
                Tim ahli kami siap membantu Anda 24/7. Apakah Anda memiliki pertanyaan tentang kemitraan SPBU,
                transportasi minyak, atau distribusi LPG, kami di sini untuk memberikan solusi.
            </p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-1 space-y-6">
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Kantor Pusat</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Jl. Nanga Pinoh- Kotabaru, km.4,<br />Kecamatan Nanga Pinoh, Kabupaten Melawi, Kode Pos
                        79672, Kalimantan Barat.
                    </p>
                    <a class="inline-flex items-center text-sm font-semibold text-primary hover:text-primary-hover group-hover:translate-x-1 transition-all"
                        href="https://maps.google.com" target="_blank">
                        Lihat di Google Maps <span class="material-symbols-outlined text-base ml-1">arrow_forward</span>
                    </a>
                </div>
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined">call</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Telepon &amp; Fax</h3>
                    <div class="space-y-2">
                        <p class="text-slate-500 text-sm flex items-center gap-2">
                            <span class="font-medium text-slate-700 w-16">Telepon:</span> +62 858 2176 3662
                        </p>
                        <p class="text-slate-500 text-sm flex items-center gap-2">
                            <span class="font-medium text-slate-700 w-16">Fax:</span> +62 21 5555 8889
                        </p>
                        <p class="text-slate-500 text-sm flex items-center gap-2">
                            <span class="font-medium text-slate-700 w-16">Hotline:</span> 1500-SPBU
                        </p>
                    </div>
                </div>
                <div
                    class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-lg transition-all duration-300 group">
                    <div
                        class="w-12 h-12 bg-red-50 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Email &amp; Dukungan</h3>
                    <div class="space-y-2">
                        <a class="text-slate-500 text-sm flex items-center gap-2 hover:text-primary transition-colors"
                            href="mailto:spbufikridarmawan@gmail.com">
                            <span class="font-medium text-slate-700 w-20">Umum:</span> spbufikridarmawan@gmail.com
                        </a>
                        <a class="text-slate-500 text-sm flex items-center gap-2 hover:text-primary transition-colors"
                            href="mailto:spbufikridarmawan@gmail.com">
                            <span class="font-medium text-slate-700 w-20">Penjualan:</span>
                            spbufikridarmawan@gmail.com
                        </a>
                        <a class="text-slate-500 text-sm flex items-center gap-2 hover:text-primary transition-colors"
                            href="mailto:spbufikridarmawan@gmail.com">
                            <span class="font-medium text-slate-700 w-20">Dukungan:</span>
                            spbufikridarmawan@gmail.com
                        </a>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-2">
                <div
                    class="bg-white rounded-2xl shadow-xl border border-slate-100 overflow-hidden h-full flex flex-col">
                    <div class="p-8 md:p-10 flex-grow">
                        <h2 class="text-2xl font-bold text-slate-900 mb-6">Kirim Pesan</h2>
                        <form action="#" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2" for="firstName">Nama
                                        Depan</label>
                                    <input
                                        class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm"
                                        id="firstName" name="firstName" placeholder="John" type="text" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2" for="lastName">Nama
                                        Belakang</label>
                                    <input
                                        class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm"
                                        id="lastName" name="lastName" placeholder="Doe" type="text" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2" for="email">Alamat
                                        Email</label>
                                    <input
                                        class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm"
                                        id="email" name="email" placeholder="john@company.com" type="email" />
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-700 mb-2" for="phone">Nomor
                                        Telepon</label>
                                    <input
                                        class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm"
                                        id="phone" name="phone" placeholder="+62 812 3456 7890" type="tel" />
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2"
                                    for="subject">Perihal</label>
                                <select
                                    class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm"
                                    id="subject" name="subject">
                                    <option value="">Pilih topik pembicaraan</option>
                                    <option value="partnership">Kemitraan SPBU</option>
                                    <option value="logistics">Layanan Transportasi BBM</option>
                                    <option value="lpg">Distribusi LPG</option>
                                    <option value="other">Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-slate-700 mb-2" for="message">Pesan</label>
                                <textarea
                                    class="w-full px-4 py-3 rounded-lg border-slate-200 bg-slate-50 focus:bg-white focus:border-primary focus:ring-primary transition-colors text-sm resize-none"
                                    id="message" name="message"
                                    placeholder="Tuliskan detail pertanyaan atau kebutuhan bisnis Anda di sini..."
                                    rows="5"></textarea>
                            </div>
                            <div class="pt-2">
                                <button
                                    class="w-full md:w-auto px-8 py-4 bg-primary text-white font-bold rounded-lg shadow-lg shadow-primary/30 hover:bg-primary-hover hover:shadow-primary/50 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2"
                                    type="submit">
                                    <span class="material-symbols-outlined">send</span>
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-20">
            <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-3 h-[450px]">
                <div class="w-full h-full rounded-xl overflow-hidden map-container relative">
                    <iframe allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126906.9602434604!2d106.73295286595703!3d-6.284240974751543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%20Selatan%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1689654123456!5m2!1sid!2sid"
                        style="border:0;"></iframe>
                    <div
                        class="absolute bottom-6 left-6 md:bottom-10 md:left-10 bg-white/90 backdrop-blur-md p-6 rounded-xl shadow-lg max-w-xs border border-white/50 hidden sm:block">
                        <div class="flex items-center gap-3 mb-2">
                            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-white">
                                <span class="material-symbols-outlined text-sm">business</span>
                            </div>
                            <h4 class="font-bold text-slate-900">BisnisSPBU HQ</h4>
                        </div>
                        <p class="text-xs text-slate-500 mb-3">Pusat operasional dan manajemen untuk seluruh
                            wilayah Indonesia.</p>
                        <a class="text-xs font-bold text-primary hover:text-primary-hover flex items-center gap-1"
                            href="#">
                            Petunjuk Arah <span class="material-symbols-outlined text-xs">directions</span>
                        </a>
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
