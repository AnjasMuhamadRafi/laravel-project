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
    <title>Kemitraan Strategis dengan Universitas Terkemuka - News</title>
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

        // Translation data for Partnership Article
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
                breadcrumb_current: 'Kemitraan Strategis dengan Universitas',

                // Article
                article_title: 'Kemitraan Strategis dengan Universitas Terkemuka',
                article_subtitle: 'Membangun Jembatan Antara Dunia Akademis dan Industri untuk Masa Depan yang Berkelanjutan',
                article_date: '28 Desember 2024',
                article_read_time: '5 menit baca',
                article_author: 'Tim Kemitraan',
                article_category: 'Kemitraan',

                // Article Content
                content_intro: 'PT. Enlulu Sukses Makmur dengan bangga mengumumkan kemitraan strategis dengan beberapa universitas terkemuka di Indonesia untuk menciptakan program magang, penelitian bersama, dan pengembangan talenta yang berkelanjutan.',

                content_section1_title: 'Program Magang Terintegrasi',
                content_section1_text: 'Kami telah mengembangkan program magang komprehensif yang memberikan mahasiswa pengalaman praktis di berbagai divisi perusahaan. Program ini dirancang untuk menjembatani kesenjangan antara teori akademis dan praktik industri yang sesungguhnya.',

                content_section2_title: 'Penelitian dan Pengembangan Bersama',
                content_section2_text: 'Kolaborasi riset dengan fakultas-fakultas terkemuka menghasilkan inovasi dalam bidang teknologi SDM, manajemen operasional, dan pengembangan produk. Partnership ini menciptakan sinergi yang menguntungkan kedua belah pihak.',

                content_section3_title: 'Pengembangan Kurikulum Industri',
                content_section3_text: 'Kami berpartisipasi aktif dalam penyusunan kurikulum yang relevan dengan kebutuhan industri modern. Hal ini memastikan lulusan memiliki keterampilan yang sesuai dengan demand pasar kerja saat ini.',

                content_section4_title: 'Manfaat Kemitraan',
                content_section4_text: 'Kemitraan ini menghasilkan pipeline talenta berkualitas, meningkatkan kemampuan inovasi perusahaan, dan memberikan kontribusi positif terhadap pengembangan ekosistem pendidikan tinggi di Indonesia.',

                // Features
                features_title: 'Program Kemitraan',
                feature1: 'Magang Profesional',
                feature1_desc: 'Program magang 3-6 bulan dengan mentoring',
                feature2: 'Riset Kolaboratif',
                feature2_desc: 'Penelitian bersama dosen dan mahasiswa',
                feature3: 'Workshop Industri',
                feature3_desc: 'Pelatihan praktis sesuai kebutuhan industri',
                feature4: 'Career Development',
                feature4_desc: 'Jalur karir dan rekrutmen berkelanjutan',

                // Quote
                quote_text: 'Kemitraan dengan universitas adalah investasi jangka panjang kami untuk membangun ekosistem talenta yang unggul dan berkelanjutan di Indonesia.',
                quote_author: 'Direktur SDM PT. Enlulu Sukses Makmur',

                // Stats
                stats_title: 'Dampak Kemitraan',
                stat1_number: '15+',
                stat1_label: 'Universitas Mitra',
                stat2_number: '200+',
                stat2_label: 'Mahasiswa Magang',
                stat3_number: '25+',
                stat3_label: 'Proyek Riset',

                // Universities
                universities_title: 'Universitas Mitra',
                university1: 'Universitas Indonesia',
                university2: 'Institut Teknologi Bandung',
                university3: 'Universitas Gadjah Mada',
                university4: 'Institut Pertanian Bogor',

                // Related articles
                related_title: 'Artikel Terkait',
                related_read_more: 'Baca Selengkapnya',

                // Contact CTA
                cta_title: 'Tertarik Berkolaborasi dengan Kami?',
                cta_subtitle: 'Hubungi tim kemitraan kami untuk membahas peluang kolaborasi akademis dan pengembangan program bersama.',
                cta_contact: 'Hubungi Tim Kemitraan',
                cta_learn_more: 'Pelajari Program',

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
                footer_location: 'Lokasi',
                back_to_news: 'Kembali ke Semua Berita'
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
                breadcrumb_current: 'Strategic Partnership with Universities',

                // Article
                article_title: 'Strategic Partnership with Leading Universities',
                article_subtitle: 'Building Bridges Between Academic World and Industry for Sustainable Future',
                article_date: 'December 28, 2024',
                article_read_time: '5 min read',
                article_author: 'Partnership Team',
                article_category: 'Partnership',

                // Article Content
                content_intro: 'PT. Enlulu Sukses Makmur proudly announces strategic partnerships with several leading universities in Indonesia to create internship programs, joint research, and sustainable talent development.',

                content_section1_title: 'Integrated Internship Program',
                content_section1_text: 'We have developed a comprehensive internship program that provides students with hands-on experience across various company divisions. This program is designed to bridge the gap between academic theory and real industry practice.',

                content_section2_title: 'Joint Research and Development',
                content_section2_text: 'Research collaboration with leading faculties produces innovations in HR technology, operational management, and product development. This partnership creates synergy that benefits both parties.',

                content_section3_title: 'Industry Curriculum Development',
                content_section3_text: 'We actively participate in developing curricula relevant to modern industry needs. This ensures graduates have skills that match current job market demands.',

                content_section4_title: 'Partnership Benefits',
                content_section4_text: 'This partnership creates a quality talent pipeline, enhances company innovation capabilities, and provides positive contributions to higher education ecosystem development in Indonesia.',

                // Features
                features_title: 'Partnership Programs',
                feature1: 'Professional Internship',
                feature1_desc: '3-6 month internship with mentoring',
                feature2: 'Collaborative Research',
                feature2_desc: 'Joint research with professors and students',
                feature3: 'Industry Workshops',
                feature3_desc: 'Practical training according to industry needs',
                feature4: 'Career Development',
                feature4_desc: 'Career path and continuous recruitment',

                // Quote
                quote_text: 'Partnership with universities is our long-term investment to build an excellent and sustainable talent ecosystem in Indonesia.',
                quote_author: 'HR Director, PT. Enlulu Sukses Makmur',

                // Stats
                stats_title: 'Partnership Impact',
                stat1_number: '15+',
                stat1_label: 'Partner Universities',
                stat2_number: '200+',
                stat2_label: 'Intern Students',
                stat3_number: '25+',
                stat3_label: 'Research Projects',

                // Universities
                universities_title: 'Partner Universities',
                university1: 'University of Indonesia',
                university2: 'Bandung Institute of Technology',
                university3: 'Gadjah Mada University',
                university4: 'Bogor Agricultural University',

                // Related articles
                related_title: 'Related Articles',
                related_read_more: 'Read More',

                // Contact CTA
                cta_title: 'Interested in Collaborating with Us?',
                cta_subtitle: 'Contact our partnership team to discuss academic collaboration opportunities and joint program development.',
                cta_contact: 'Contact Partnership Team',
                cta_learn_more: 'Learn About Programs',

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
                footer_location: 'Location',
                back_to_news: 'Back to All News'
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
                <span class="text-orange-600 font-medium" data-translate="breadcrumb_current">Kemitraan Strategis dengan Universitas</span>
            </nav>
        </div>
    </section>

    <!-- Article Header -->
    <section class="py-16 bg-gradient-to-br from-indigo-50 via-blue-50 to-purple-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-indigo-200/20 to-purple-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>

        <div class="relative max-w-4xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="flex justify-center items-center space-x-4 mb-6">
                    <span class="bg-indigo-500 text-white px-4 py-2 rounded-xl font-bold text-sm">
                        <i class="fas fa-handshake mr-2"></i><span data-translate="article_category">Kemitraan</span>
                    </span>
                    <div class="flex items-center space-x-4 text-gray-600">
                        <span class="flex items-center">
                            <i class="fas fa-calendar mr-1"></i>
                            <span data-translate="article_date">28 Desember 2024</span>
                        </span>
                    </div>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-indigo-600 bg-clip-text text-transparent leading-tight">
                    <span data-translate="article_title">Kemitraan Strategis dengan Universitas Terkemuka</span>
                </h1>

                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    <span data-translate="article_subtitle">Membangun Jembatan Antara Dunia Akademis dan Industri untuk Masa Depan yang Berkelanjutan</span>
                </p>

            </div>
        </div>
    </section>

    <!-- Article Image -->
    <section class="py-8">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                    alt="Partnership" class="w-full h-96 md:h-[500px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                <div class="absolute bottom-6 left-6 bg-black/50 backdrop-blur-sm text-white px-6 py-3 rounded-xl">
                    <p class="text-sm font-medium">Kemitraan strategis dengan universitas terkemuka</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Article Content -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6">
            <div class="prose prose-lg max-w-none">

                <!-- Introduction -->
                <div class="bg-gradient-to-r from-indigo-50 to-purple-50 rounded-3xl p-8 mb-12 border-l-4 border-indigo-500">
                    <p class="text-lg leading-relaxed text-gray-700" data-translate="content_intro">
                        PT. Enlulu Sukses Makmur dengan bangga mengumumkan kemitraan strategis dengan beberapa universitas terkemuka di Indonesia untuk menciptakan program magang, penelitian bersama, dan pengembangan talenta yang berkelanjutan.
                    </p>
                </div>

                <!-- Section 1 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-graduation-cap text-white"></i>
                        </div>
                        <span data-translate="content_section1_title">Program Magang Terintegrasi</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section1_text">
                        Kami telah mengembangkan program magang komprehensif yang memberikan mahasiswa pengalaman praktis di berbagai divisi perusahaan. Program ini dirancang untuk menjembatani kesenjangan antara teori akademis dan praktik industri yang sesungguhnya.
                    </p>
                </div>

                <!-- Statistics Section -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 mb-12">
                    <h3 class="text-2xl font-bold text-center mb-8 text-gray-800" data-translate="stats_title">Dampak Kemitraan</h3>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center bg-gradient-to-br from-indigo-50 to-blue-50 rounded-2xl p-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-indigo-500 to-blue-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-university text-white text-xl"></i>
                            </div>
                            <h4 class="text-3xl font-bold text-gray-800 mb-2" data-translate="stat1_number">15+</h4>
                            <p class="text-gray-600" data-translate="stat1_label">Universitas Mitra</p>
                        </div>

                        <div class="text-center bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-user-graduate text-white text-xl"></i>
                            </div>
                            <h4 class="text-3xl font-bold text-gray-800 mb-2" data-translate="stat2_number">200+</h4>
                            <p class="text-gray-600" data-translate="stat2_label">Mahasiswa Magang</p>
                        </div>

                        <div class="text-center bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-6">
                            <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                                <i class="fas fa-flask text-white text-xl"></i>
                            </div>
                            <h4 class="text-3xl font-bold text-gray-800 mb-2" data-translate="stat3_number">25+</h4>
                            <p class="text-gray-600" data-translate="stat3_label">Proyek Riset</p>
                        </div>
                    </div>
                </div>

                <!-- Section 2 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-flask text-white"></i>
                        </div>
                        <span data-translate="content_section2_title">Penelitian dan Pengembangan Bersama</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section2_text">
                        Kolaborasi riset dengan fakultas-fakultas terkemuka menghasilkan inovasi dalam bidang teknologi SDM, manajemen operasional, dan pengembangan produk. Partnership ini menciptakan sinergi yang menguntungkan kedua belah pihak.
                    </p>
                </div>

                <!-- Partnership Programs Grid -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 mb-12">
                    <h3 class="text-2xl font-bold text-center mb-8 text-gray-800" data-translate="features_title">Program Kemitraan</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-briefcase text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature1">Magang Profesional</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature1_desc">Program magang 3-6 bulan dengan mentoring</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-microscope text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature2">Riset Kolaboratif</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature2_desc">Penelitian bersama dosen dan mahasiswa</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-chalkboard-teacher text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature3">Workshop Industri</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature3_desc">Pelatihan praktis sesuai kebutuhan industri</p>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mr-4">
                                    <i class="fas fa-chart-line text-white"></i>
                                </div>
                                <h4 class="font-bold text-gray-800" data-translate="feature4">Career Development</h4>
                            </div>
                            <p class="text-gray-600" data-translate="feature4_desc">Jalur karir dan rekrutmen berkelanjutan</p>
                        </div>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-book text-white"></i>
                        </div>
                        <span data-translate="content_section3_title">Pengembangan Kurikulum Industri</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section3_text">
                        Kami berpartisipasi aktif dalam penyusunan kurikulum yang relevan dengan kebutuhan industri modern. Hal ini memastikan lulusan memiliki keterampilan yang sesuai dengan demand pasar kerja saat ini.
                    </p>
                </div>

                <!-- Universities Section -->
                <div class="bg-gradient-to-br from-indigo-50 to-purple-50 rounded-3xl p-8 mb-12">
                    <h3 class="text-2xl font-bold text-center mb-8 text-gray-800" data-translate="universities_title">Universitas Mitra</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-red-500 to-orange-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-university text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800" data-translate="university1">Universitas Indonesia</h4>
                                <p class="text-gray-600 text-sm">Fakultas Ekonomi & Bisnis</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-university text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800" data-translate="university2">Institut Teknologi Bandung</h4>
                                <p class="text-gray-600 text-sm">Fakultas Teknologi Industri</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-university text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800" data-translate="university3">Universitas Gadjah Mada</h4>
                                <p class="text-gray-600 text-sm">Fakultas Psikologi</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow flex items-center space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-yellow-500 to-orange-500 rounded-xl flex items-center justify-center">
                                <i class="fas fa-university text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800" data-translate="university4">Institut Pertanian Bogor</h4>
                                <p class="text-gray-600 text-sm">Fakultas Ekonomi & Manajemen</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quote Section -->
                <div class="bg-gradient-to-r from-indigo-500 to-purple-500 rounded-3xl p-8 mb-12 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full transform translate-x-16 -translate-y-16"></div>
                    <div class="relative">
                        <i class="fas fa-quote-left text-4xl opacity-50 mb-4"></i>
                        <blockquote class="text-xl md:text-2xl font-medium leading-relaxed mb-6" data-translate="quote_text">
                            Kemitraan dengan universitas adalah investasi jangka panjang kami untuk membangun ekosistem talenta yang unggul dan berkelanjutan di Indonesia.
                        </blockquote>
                        <cite class="text-indigo-100 font-medium" data-translate="quote_author">
                            - Direktur SDM PT. Enlulu Sukses Makmur
                        </cite>
                    </div>
                </div>

                <!-- Section 4 -->
                <div class="mb-12">
                    <h2 class="text-3xl font-bold mb-6 text-gray-800 flex items-center">
                        <div class="w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center mr-4">
                            <i class="fas fa-trophy text-white"></i>
                        </div>
                        <span data-translate="content_section4_title">Manfaat Kemitraan</span>
                    </h2>
                    <p class="text-gray-600 leading-relaxed text-lg" data-translate="content_section4_text">
                        Kemitraan ini menghasilkan pipeline talenta berkualitas, meningkatkan kemampuan inovasi perusahaan, dan memberikan kontribusi positif terhadap pengembangan ekosistem pendidikan tinggi di Indonesia.
                    </p>
                </div>

                <!-- Benefits Grid -->
                <div class="grid md:grid-cols-3 gap-6 mb-12">
                    <div class="text-center bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-users text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Pipeline Talenta</h4>
                        <p class="text-gray-600 text-sm">Akses ke lulusan berkualitas tinggi</p>
                    </div>

                    <div class="text-center bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-lightbulb text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Inovasi Berkelanjutan</h4>
                        <p class="text-gray-600 text-sm">Penelitian dan pengembangan bersama</p>
                    </div>

                    <div class="text-center bg-gradient-to-br from-green-50 to-teal-50 rounded-2xl p-6">
                        <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-graduation-cap text-white text-xl"></i>
                        </div>
                        <h4 class="font-bold text-gray-800 mb-2">Kontribusi Pendidikan</h4>
                        <p class="text-gray-600 text-sm">Peningkatan kualitas pendidikan tinggi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Related Articles -->
    <section class="py-16 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-indigo-600 bg-clip-text text-transparent" data-translate="related_title">
                    Artikel Terkait
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-full mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Related Article 1 -->
                <article class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                            alt="Smart LED" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4 bg-yellow-500 text-white px-3 py-1 rounded-xl text-sm font-bold">
                            <i class="fas fa-lightbulb mr-1"></i>Inovasi
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-3">
                            <i class="fas fa-calendar mr-2"></i>3 Januari 2025
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-indigo-600 transition-colors">
                            Solusi Pencahayaan LED Pintar Diluncurkan
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            PT. Enlulu Sukses Makmur memperkenalkan solusi pencahayaan LED pintar dengan teknologi IoT...
                        </p>
                        <a href="/news/Solusi-Pencahayaan-LED-Pintar" class="text-indigo-600 font-medium hover:text-purple-600 transition-colors flex items-center space-x-1">
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
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-indigo-600 transition-colors">
                            Transformasi Digital dalam Industri Outsourcing
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed mb-4">
                            Menjelajahi tren terbaru dalam transformasi digital dan bagaimana teknologi otomasi membentuk kembali...
                        </p>
                        <a href="/news/Transformasi-Digital-dalam-Industri-Outsourcing" class="text-indigo-600 font-medium hover:text-purple-600 transition-colors flex items-center space-x-1">
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
