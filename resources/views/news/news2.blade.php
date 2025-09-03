<!DOCTYPE html>
<html lang="id">

<head>
    <style>
        .slide-active {
            transform: translateY(-2px) scale(1.08);
            box-shadow: 0 2px 8px 0 rgba(255, 102, 0, 0.15);
            transition: all 0.3s;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solusi Pencahayaan LED Pintar Diluncurkan - News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    backdropBlur: {
                        xs: '2px'
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4,0,0.6,1) infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                        'scale-in': 'scaleIn 0.6s ease-out',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        float: {
                            '0%,100%': {
                                transform: 'translateY(0px)'
                            },
                            '50%': {
                                transform: 'translateY(-15px)'
                            },
                        },
                        slideUp: {
                            '0%': {
                                transform: 'translateY(50px)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'translateY(0)',
                                opacity: '1'
                            },
                        },
                        fadeIn: {
                            '0%': {
                                opacity: '0'
                            },
                            '100%': {
                                opacity: '1'
                            },
                        },
                        scaleIn: {
                            '0%': {
                                transform: 'scale(0.9)',
                                opacity: '0'
                            },
                            '100%': {
                                transform: 'scale(1)',
                                opacity: '1'
                            },
                        },
                        glow: {
                            '0%': {
                                boxShadow: '0 0 20px rgba(251, 146, 60, 0.3)'
                            },
                            '100%': {
                                boxShadow: '0 0 40px rgba(251, 146, 60, 0.6)'
                            },
                        }
                    }
                }
            }
        }

        // Translation data for Smart LED Article
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Breadcrumb
                breadcrumb_home: 'Beranda',
                breadcrumb_news: 'Berita',
                breadcrumb_current: 'Solusi Pencahayaan LED Pintar',

                // Article
                article_title: 'Solusi Pencahayaan LED Pintar Diluncurkan',
                article_subtitle: 'Revolusi Pencahayaan Modern dengan Teknologi IoT dan Efisiensi Energi Tinggi',
                article_date: '3 Januari 2025',
                article_read_time: '6 menit baca',
                article_author: 'Tim Inovasi',
                article_category: 'Inovasi',

                // Article Content
                content_intro: 'PT. Enlulu Sukses Makmur dengan bangga memperkenalkan solusi pencahayaan LED pintar terbaru yang mengintegrasikan teknologi Internet of Things (IoT) untuk memberikan pengalaman pencahayaan yang lebih efisien, hemat energi, dan mudah dikelola.',

                content_section1_title: 'Teknologi IoT Terintegrasi',
                content_section1_text: 'Solusi LED pintar kami dilengkapi dengan sensor cerdas yang dapat mendeteksi tingkat cahaya ambient, kehadiran orang, dan kondisi lingkungan. Sistem ini secara otomatis menyesuaikan intensitas cahaya untuk mengoptimalkan kenyamanan dan efisiensi energi.',

                content_section2_title: 'Pemantauan Efisiensi Energi Real-time',
                content_section2_text: 'Dashboard komprehensif memungkinkan pengguna memantau konsumsi energi secara real-time, menganalisis pola penggunaan, dan mengidentifikasi peluang penghematan. Sistem pelaporan otomatis memberikan wawasan mendalam tentang performa pencahayaan.',

                content_section3_title: 'Sistem Kontrol Otomatis',
                content_section3_text: 'Fitur penjadwalan cerdas memungkinkan pengaturan otomatis berdasarkan waktu, aktivitas, atau kondisi cuaca. Integrasi dengan smart building systems memberikan kontrol terpusat untuk seluruh infrastruktur pencahayaan.',

                content_section4_title: 'Manfaat untuk Pelanggan',
                content_section4_text: 'Implementasi solusi LED pintar kami dapat mengurangi konsumsi energi hingga 60%, menurunkan biaya operasional secara signifikan, dan meningkatkan produktivitas karyawan melalui pencahayaan yang optimal.',

                // Features
                features_title: 'Fitur Utama',
                feature1: 'Kontrol Pintar Berbasis App',
                feature1_desc: 'Kontrol penuh melalui aplikasi mobile dan web',
                feature2: 'Sensor Adaptif',
                feature2_desc: 'Deteksi otomatis cahaya dan kehadiran',
                feature3: 'Analytics Dashboard',
                feature3_desc: 'Laporan efisiensi energi real-time',
                feature4: 'Smart Scheduling',
                feature4_desc: 'Penjadwalan otomatis berbasis AI',

                // Quote
                quote_text: 'Inovasi ini merupakan langkah strategis kami dalam menghadirkan solusi teknologi terdepan yang tidak hanya menghemat energi, tetapi juga meningkatkan kualitas lingkungan kerja.',
                quote_author: 'Direktur Teknologi PT. Enlulu Sukses Makmur',

                // Related articles
                related_title: 'Artikel Terkait',
                related_read_more: 'Baca Selengkapnya',

                // Contact CTA
                cta_title: 'Tertarik dengan Solusi LED Pintar Kami?',
                cta_subtitle: 'Hubungi tim kami untuk konsultasi gratis dan pelajari bagaimana solusi LED pintar dapat mengoptimalkan efisiensi energi bisnis Anda.',
                cta_contact: 'Hubungi Kami',
                cta_learn_more: 'Pelajari Lebih Lanjut',

                // Footer
                footer_company_name: 'PT. Enlulu Sukses Makmur',
                footer_quick_links: 'Tautan Cepat',
                footer_get_in_touch: 'Hubungi Kami',
                footer_services: 'Layanan Kami',
                footer_follow: 'Ikuti Kami',
                footer_service1: 'Tenaga Kerja',
                footer_service1_sub: 'Outsourcing',
                footer_service2: 'HR',
                footer_service2_sub: 'Manajemen',
                footer_service3: 'Pengendalian',
                footer_service3_sub: 'Hama',
                footer_service4: 'Layanan',
                footer_service4_sub: 'Kebersihan',
                footer_service5: 'LED',
                footer_service5_sub: 'Pencahayaan',
                footer_copyright: '2025 PT. ENLULU SUKSES MAKMUR. Seluruh hak cipta dilindungi.',
                footer_privacy: 'Kebijakan Privasi',
                footer_terms: 'Syarat Layanan',
                footer_sitemap: 'Peta Situs',
                footer_phone: 'Telepon',
                footer_email: 'Email',
                footer_location: 'Lokasi'
            },
            en: {
                // Navigation
                nav_home: 'Home',
                nav_about: 'About Us',
                nav_news: 'News',
                nav_career: 'Career',
                nav_contact: 'Contact Us',

                // Breadcrumb
                breadcrumb_home: 'Home',
                breadcrumb_news: 'News',
                breadcrumb_current: 'Smart LED Lighting Solutions',

                // Article
                article_title: 'Smart LED Lighting Solutions Launched',
                article_subtitle: 'Revolutionary Modern Lighting with IoT Technology and High Energy Efficiency',
                article_date: 'January 3, 2025',
                article_read_time: '6 min read',
                article_author: 'Innovation Team',
                article_category: 'Innovation',

                // Article Content
                content_intro: 'PT. Enlulu Sukses Makmur proudly introduces our latest smart LED lighting solutions that integrate Internet of Things (IoT) technology to deliver a more efficient, energy-saving, and easily manageable lighting experience.',

                content_section1_title: 'Integrated IoT Technology',
                content_section1_text: 'Our smart LED solutions are equipped with intelligent sensors that can detect ambient light levels, human presence, and environmental conditions. The system automatically adjusts light intensity to optimize comfort and energy efficiency.',

                content_section2_title: 'Real-time Energy Efficiency Monitoring',
                content_section2_text: 'A comprehensive dashboard allows users to monitor energy consumption in real-time, analyze usage patterns, and identify saving opportunities. Automated reporting systems provide deep insights into lighting performance.',

                content_section3_title: 'Automated Control System',
                content_section3_text: 'Smart scheduling features enable automatic adjustments based on time, activity, or weather conditions. Integration with smart building systems provides centralized control for entire lighting infrastructure.',

                content_section4_title: 'Customer Benefits',
                content_section4_text: 'Implementation of our smart LED solutions can reduce energy consumption by up to 60%, significantly lower operational costs, and improve employee productivity through optimal lighting.',

                // Features
                features_title: 'Key Features',
                feature1: 'Smart App-based Control',
                feature1_desc: 'Full control via mobile and web applications',
                feature2: 'Adaptive Sensors',
                feature2_desc: 'Automatic light and presence detection',
                feature3: 'Analytics Dashboard',
                feature3_desc: 'Real-time energy efficiency reports',
                feature4: 'Smart Scheduling',
                feature4_desc: 'AI-based automatic scheduling',

                // Quote
                quote_text: 'This innovation represents our strategic step in delivering cutting-edge technology solutions that not only save energy but also enhance work environment quality.',
                quote_author: 'Technology Director, PT. Enlulu Sukses Makmur',

                // Related articles
                related_title: 'Related Articles',
                related_read_more: 'Read More',

                // Contact CTA
                cta_title: 'Interested in Our Smart LED Solutions?',
                cta_subtitle: 'Contact our team for a free consultation and learn how smart LED solutions can optimize your business energy efficiency.',
                cta_contact: 'Contact Us',
                cta_learn_more: 'Learn More',

                // Footer
                footer_company_name: 'PT. Enlulu Sukses Makmur',
                footer_quick_links: 'Quick Links',
                footer_get_in_touch: 'Get In Touch',
                footer_services: 'Our Services',
                footer_follow: 'Follow Us',
                footer_service1: 'Manpower',
                footer_service1_sub: 'Outsourcing',
                footer_service2: 'HR',
                footer_service2_sub: 'Management',
                footer_service3: 'Pest',
                footer_service3_sub: 'Control',
                footer_service4: 'Cleaning',
                footer_service4_sub: 'Service',
                footer_service5: 'LED',
                footer_service5_sub: 'Lighting',
                footer_copyright: '2025 PT. ENLULU SUKSES MAKMUR. All rights reserved.',
                footer_privacy: 'Privacy Policy',
                footer_terms: 'Terms of Service',
                footer_sitemap: 'Sitemap',
                footer_phone: 'Phone',
                footer_email: 'Email',
                footer_location: 'Location'
            }
        };

        // Language functionality
        let currentLang = 'id';

        // Fungsi untuk mengganti bahasa
        function switchLanguage(lang) {
            currentLang = lang;
            document.documentElement.lang = lang;

            // Simpan pilihan bahasa ke localStorage
            localStorage.setItem('preferredLang', lang);

            // Update semua elemen yang bisa diterjemahkan
            Object.keys(translations[lang]).forEach(key => {
                const elements = document.querySelectorAll(`[data-translate="${key}"]`);
                elements.forEach(element => {
                    element.textContent = translations[lang][key];
                });
            });

            // Update tombol bahasa
            document.querySelectorAll('.lang-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-orange-500', 'text-white', 'slide-active');
                btn.classList.add('hover:bg-gray-100', 'text-gray-800');
            });
            document.querySelectorAll(`[data-lang="${lang}"]`).forEach(btn => {
                btn.classList.add('active', 'bg-orange-500', 'text-white', 'slide-active');
                btn.classList.remove('hover:bg-gray-100', 'text-gray-800');
            });
        }

        // Saat halaman dimuat, cek apakah ada bahasa yang tersimpan
        document.addEventListener('DOMContentLoaded', function() {
            const savedLang = localStorage.getItem('preferredLang') || 'id';
            switchLanguage(savedLang);
        });
    </script>
</head>

<body class="bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800 font-sans overflow-x-hidden">

    <!-- Navbar -->
    <header x-data="{ open:false }" class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-xl shadow-lg border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-6 py-4">
            <a href="/" class="flex items-center space-x-2 group">
                <img src="../assets/images/enlulu.png" alt="Enlulu Logo" class="h-10 w-auto group-hover:scale-110 transition-transform duration-300">
            </a>
            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_home">Beranda</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/about" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_about">Tentang Kami</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/news" class="relative text-orange-600 group">
                    <span data-translate="nav_news">Berita</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
                </a>
                <a href="/career" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_career">Karir</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_contact">Kontak</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <div class="ml-4">
                    <button onclick="switchLanguage('id')" data-lang="id" class="lang-btn px-3 py-1 rounded text-sm font-medium mr-1 transition-all duration-300">ID</button>
                    <button onclick="switchLanguage('en')" data-lang="en" class="lang-btn px-3 py-1 rounded text-sm font-medium transition-all duration-300">EN</button>
                </div>
            </nav>
            <button @click="open=!open" class="md:hidden p-2 rounded-lg hover:bg-gray-100 transition-colors">
                <i :class="open?'fa-solid fa-xmark':'fa-solid fa-bars'" class="text-xl"></i>
            </button>
        </div>
        <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" class="md:hidden bg-white/95 backdrop-blur-xl shadow-lg border-t border-gray-200/50">
            <nav class="flex flex-col space-y-3 px-6 py-4 font-medium">
                <a href="/" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_home">Beranda</a>
                <a href="/about" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_about">Tentang Kami</a>
                <a href="/news" class="text-orange-600 py-2" data-translate="nav_news">Berita</a>
                <a href="/career" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_career">Karir</a>
                <a href="/contact" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_contact">Kontak</a>
                <div class="flex space-x-1 mt-4">
                    <button onclick="switchLanguage('id')" data-lang="id" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">ID</button>
                    <button onclick="switchLanguage('en')" data-lang="en" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">EN</button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Breadcrumb -->
    <section class="pt-24 pb-8 bg-gradient-to-r from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-6">
            <nav class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="/" class="hover:text-orange-600 transition-colors" data-translate="breadcrumb_home">Beranda</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <a href="/news" class="hover:text-orange-600 transition-colors" data-translate="breadcrumb_news">Berita</a>
                <i class="fas fa-chevron-right text-xs"></i>
                <span class="text-orange-600 font-medium" data-translate="breadcrumb_current">Solusi Pencahayaan LED Pintar</span>
            </nav>
        </div>
    </section>

    <!-- Article Header -->
    <section class="py-16 bg-gradient-to-br from-yellow-50 via-orange-50 to-red-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-yellow-200/20 to-orange-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>

        <div class="relative max-w-4xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="flex justify-center items-center space-x-4 mb-6">
                    <span class="bg-yellow-500 text-white px-4 py-2 rounded-xl font-bold text-sm">
                        <i class="fas fa-lightbulb mr-2"></i><span data-translate="article_category">Inovasi</span>
                    </span>
                    <div class="flex items-center space-x-4 text-gray-600">
                        <span class="flex items-center">
                            <i class="fas fa-calendar mr-1"></i>
                            <span data-translate="article_date">3 Januari 2025</span>
                        </span>
                        <span class="flex items-center">
                            <i class="fas fa-clock mr-1"></i>
                            <span data-translate="article_read_time">6 menit baca</span>
                        </span>
                    </div>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent leading-tight">
                    <span data-translate="article_title">Solusi Pencahayaan LED Pintar Diluncurkan</span>
                </h1>

                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    <span data-translate="article_subtitle">Revolusi Pencahayaan Modern dengan Teknologi IoT dan Efisiensi Energi Tinggi</span>
                </p>

                <div class="flex items-center justify-center mt-8 space-x-4">
                </div>
            </div>
        </div>
    </section>

    <!-- Article Image -->
    <section class="py-8">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                    alt="Smart LED Lighting" class="w-full h-96 md:h-[500px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-lg max-w-none">

                <!-- Introduction -->
                <div class="bg-gradient-to-r from-yellow-50 to-orange-50 rounded-3xl p-8 mb-12 border-l-4 border-yellow-500">
                    <p class="text-lg leading-relaxed text-gray-700" data-translate="content_intro">
                        PT. Enlulu Sukses Makmur dengan bangga memperkenalkan solusi pencahayaan LED pintar terbaru yang mengintegrasikan teknologi Internet of Things (IoT) untuk memberikan pengalaman pencahayaan yang lebih efisien, hemat energi, dan mudah dikelola.
                    </p>
                </div>

                <!-- Section 1 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-microchip text-white"></i>
                        </div>
                        <span data-translate="content_section1_title">Teknologi IoT Terintegrasi</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section1_text">
                        Solusi LED pintar kami dilengkapi dengan sensor cerdas yang dapat mendeteksi tingkat cahaya ambient, kehadiran orang, dan kondisi lingkungan. Sistem ini secara otomatis menyesuaikan intensitas cahaya untuk mengoptimalkan kenyamanan dan efisiensi energi.
                    </p>
                </div>

                <!-- Section 2 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-chart-line text-white"></i>
                        </div>
                        <span data-translate="content_section2_title">Pemantauan Efisiensi Energi Real-time</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section2_text">
                        Dashboard komprehensif memungkinkan pengguna memantau konsumsi energi secara real-time, menganalisis pola penggunaan, dan mengidentifikasi peluang penghematan. Sistem pelaporan otomatis memberikan wawasan mendalam tentang performa pencahayaan.
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 mb-12">
                    <h3 class="text-2xl font-bold text-center mb-8 text-gray-800" data-translate="features_title">Fitur Utama</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-mobile-alt text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature1">Kontrol Pintar Berbasis App</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature1_desc">Kontrol penuh melalui aplikasi mobile dan web</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-eye text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature2">Sensor Adaptif</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature2_desc">Deteksi otomatis cahaya dan kehadiran</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-chart-bar text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature3">Analytics Dashboard</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature3_desc">Laporan efisiensi energi real-time</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-robot text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature4">Smart Scheduling</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature4_desc">Penjadwalan otomatis berbasis AI</p>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-cog text-white"></i>
                        </div>
                        <span data-translate="content_section3_title">Sistem Kontrol Otomatis</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section3_text">
                        Fitur penjadwalan cerdas memungkinkan pengaturan otomatis berdasarkan waktu, aktivitas, atau kondisi cuaca. Integrasi dengan smart building systems memberikan kontrol terpusat untuk seluruh infrastruktur pencahayaan.
                    </p>
                </div>

                <!-- Quote Section -->
                <div class="bg-gradient-to-r from-orange-500 to-red-500 rounded-3xl p-8 mb-12 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full transform translate-x-16 -translate-y-16"></div>
                    <div class="relative">
                        <i class="fas fa-quote-left text-4xl opacity-50 mb-4"></i>
                        <blockquote class="text-xl md:text-2xl font-medium leading-relaxed mb-6" data-translate="quote_text">
                            Inovasi ini merupakan langkah strategis kami dalam menghadirkan solusi teknologi terdepan yang tidak hanya menghemat energi, tetapi juga meningkatkan kualitas lingkungan kerja.
                        </blockquote>
                        <cite class="text-orange-100 font-medium" data-translate="quote_author">
                            - Direktur Teknologi PT. Enlulu Sukses Makmur
                        </cite>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-star text-white"></i>
                        </div>
                        <span data-translate="content_section4_title">Manfaat untuk Pelanggan</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section4_text">
                        Implementasi solusi LED pintar kami dapat mengurangi konsumsi energi hingga 60%, menurunkan biaya operasional secara signifikan, dan meningkatkan produktivitas karyawan melalui pencahayaan yang optimal.
                    </p>
                </div>

                <!-- Benefits Grid -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="text-center bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-leaf text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">60% Penghematan Energi</h4>
                        <p class="text-gray-600 text-sm">Efisiensi energi yang signifikan</p>
                    </div>

                    <div class="text-center bg-gradient-to-br from-blue-50 to-cyan-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-dollar-sign text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Biaya Operasional Rendah</h4>
                        <p class="text-gray-600 text-sm">ROI yang cepat dan berkelanjutan</p>
                    </div>

                    <div class="text-center bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Produktivitas Meningkat</h4>
                        <p class="text-gray-600 text-sm">Lingkungan kerja yang optimal</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Articles -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent" data-translate="related_title">
                    Artikel Terkait
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Related Article 1 -->
                <article class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Partnership" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-indigo-500 text-white px-3 py-1 rounded-xl text-sm font-bold">
                            <i class="fas fa-handshake mr-1"></i>Kemitraan
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar mr-2"></i>28 Desember 2024
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-1"></i>5 menit baca
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-orange-600 transition-colors">
                            Kemitraan Strategis dengan Universitas Terkemuka
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Kami telah menjalin kemitraan dengan universitas-universitas terkemuka di Indonesia untuk menciptakan program magang...
                        </p>
                        <a href="/news/Kemitraan-Strategis-dengan-Universitas-Terkemuka" class="text-orange-600 font-medium hover:text-red-600 transition-colors flex items-center space-x-1">
                            <span data-translate="related_read_more">Baca Selengkapnya</span>
                            <i class="fas fa-chevron-right text-xs"></i>
                        </a>
                    </div>
                </article>

                <!-- Related Article 2 -->
                <article class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1518186285589-2f7649de83e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Digital Transformation" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-purple-500 text-white px-3 py-1 rounded-xl text-sm font-bold">
                            <i class="fas fa-microchip mr-1"></i>Teknologi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar mr-2"></i>15 Desember 2024
                            <span class="mx-2">•</span>
                            <i class="fas fa-clock mr-1"></i>8 menit baca
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-orange-600 transition-colors">
                            Transformasi Digital dalam Industri Outsourcing
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Menjelajahi tren terbaru dalam transformasi digital dan bagaimana teknologi otomasi membentuk kembali...
                        </p>
                        <a href="/news/Transformasi-Digital-dalam-Industri-Outsourcing" class="text-orange-600 font-medium hover:text-red-600 transition-colors flex items-center space-x-1">
                            <span data-translate="related_read_more">Baca Selengkapnya</span>
                            <i class="fas fa-chevron-right text-xs"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <!-- Back to News -->
    <div class="bg-white py-8">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <a href="/news" class="inline-flex items-center space-x-2 bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-lg transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-arrow-left"></i>
                <span data-translate="back_to_news">Kembali ke Semua Berita</span>
            </a>
        </div>
    </div>

    <!-- Modern Footer -->
    <footer class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-0 right-0 w-72 h-72 bg-gradient-to-tl from-blue-500/10 to-purple-500/10 rounded-full blur-3xl animate-float" style="animation-delay: -3s;"></div>
            <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-gradient-to-r from-green-500/5 to-teal-500/5 rounded-full blur-3xl animate-float" style="animation-delay: -6s;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 md:px-6 py-16 md:py-20">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12">

                <!-- Company Info -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Logo Section -->
                    <div class="flex flex-col items-center md:items-start">
                        <div class="group relative mb-6">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-2xl blur opacity-50 group-hover:opacity-75 transition-opacity"></div>
                            <div class="relative bg-white p-4 rounded-2xl">
                                <img src="../assets/images/enlulu.png" alt="Enlulu Logo" class="h-16 object-contain">
                            </div>
                        </div>

                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent">
                                <span data-translate="footer_company_name">PT. Enlulu Sukses Makmur</span>
                            </h3>
                            <div class="space-y-3 text-gray-300 leading-relaxed flex flex-col items-center md:items-start">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-building text-orange-400 mt-1 text-sm"></i>
                                    <div class="text-sm">
                                        <p>Graha Mustika Ratu Lt. Annex</p>
                                        <p>Jl. Gatot Subroto, Kav 74-75</p>
                                        <p>Jakarta Selatan 12870</p>
                                    </div>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-phone text-blue-400 text-sm"></i>
                                    <span class="text-sm">(021) 8306658</span>
                                </div>

                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-fax text-green-400 text-sm"></i>
                                    <span class="text-sm">(021) 8306659</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-xl font-bold text-white relative">
                            <span data-translate="footer_quick_links">Tautan Cepat</span>
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span data-translate="nav_home">Beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_about">Tentang Kami</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_news">Berita</span>
                                </a>
                            </li>
                            <li>
                                <a href="/career" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_career">Karir</span>
                                </a>
                            </li>
                            <li>
                                <a href="/contact" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-green-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_contact">Kontak</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-xl font-bold text-white relative">
                            <span data-translate="footer_get_in_touch">Hubungi Kami</span>
                        </h3>
                        <div class="space-y-4">
                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-phone text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="footer_phone">Telepon</p>
                                    <p class="text-white font-medium">(021) 8306658</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-envelope text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="footer_email">Email</p>
                                    <p class="text-white font-medium text-sm">trio@enlulu.co.id</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="footer_location">Lokasi</p>
                                    <p class="text-white font-medium">Jakarta Selatan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Preview -->
            <div class="border-t border-gray-700/50 pt-12 mb-12">
                <h3 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent">
                    <span data-translate="footer_services">Layanan Kami</span>
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div class="bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-users text-orange-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service1">Tenaga Kerja</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service1_sub">Outsourcing</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500/10 to-cyan-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-user-tie text-blue-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service2">HR</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service2_sub">Manajemen</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-500/10 to-teal-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-shield-alt text-green-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service3">Pengendalian</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service3_sub">Hama</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-broom text-purple-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service4">Layanan</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service4_sub">Kebersihan</p>
                    </div>
                    <div class="bg-gradient-to-br from-yellow-500/10 to-orange-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-lightbulb text-yellow-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service5">LED</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service5_sub">Pencahayaan</p>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="border-t border-gray-700/50 pt-12 mb-12">
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-6 text-white" data-translate="footer_follow">Ikuti Kami</h3>
                    <div class="flex justify-center space-x-4">
                        <a href="https://www.facebook.com/p/PT-Enlulu-Sukses-Makmur-100063922750338/" class="group w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                            <i class="fab fa-facebook-f text-white group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://www.instagram.com/pt.enlulu_sukses_makmur/" class="group w-12 h-12 bg-gradient-to-r from-pink-600 to-red-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                            <i class="fab fa-instagram text-white group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/pt-enlulu-sukses-makmur" class="group w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                            <i class="fab fa-linkedin-in text-white group-hover:scale-125 transition-transform"></i>
                        </a>
                        <a href="https://wa.me/6281391000688" class="group w-12 h-12 bg-gradient-to-r from-green-600 to-green-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                            <i class="fab fa-whatsapp text-white group-hover:scale-125 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="border-t border-gray-700/50 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center text-gray-400 text-sm">
                    <div class="flex items-center space-x-2 mb-4 md:mb-0">
                        <div class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></div>
                        <p data-translate="footer_copyright">&copy; 2025 PT. ENLULU SUKSES MAKMUR. Seluruh hak cipta dilindungi.</p>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_privacy">Kebijakan Privasi</a>
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_terms">Syarat Layanan</a>
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_sitemap">Peta Situs</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <div class="fixed bottom-8 right-8 z-50">
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="group w-14 h-14 bg-gradient-to-r from-orange-500 to-red-500 rounded-full shadow-2xl hover:shadow-orange-500/25 hover:scale-110 transition-all duration-300 flex items-center justify-center">
                <i class="fas fa-chevron-up text-white group-hover:scale-125 transition-transform"></i>
            </button>
        </div>
    </footer>

</body>

</html>
