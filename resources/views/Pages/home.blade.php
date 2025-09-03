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
    <title>PT. ENLULU SUKSES MAKMUR - Professional Outsourcing Solutions</title>
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
                        'bounce-slow': 'bounce 3s infinite',
                        'spin-slow': 'spin 8s linear infinite',
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

        // Translation data
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Hero Section
                hero_subtitle: 'Penyedia Solusi Outsourcing & Bisnis Profesional Terpercaya sejak 2008',
                hero_description: 'Melayani lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera',
                hero_btn_services: 'Jelajahi Layanan',
                hero_btn_learn: 'Pelajari Lebih Lanjut',

                // Statistics
                stats_title: 'Pencapaian Kami',
                stats_employees: 'Karyawan',
                stats_regions: 'Wilayah',
                stats_partners: 'Mitra',
                stats_years: 'Tahun',

                // About Section
                about_title: 'Tentang Kami',
                about_text1: 'adalah perusahaan Manpower Outsourcing terkemuka dengan keahlian luar biasa dalam Rekrutmen, Manajemen HR & Pelatihan. Kami juga beroperasi dalam Manajemen Pengendalian Hama, Layanan Kebersihan, dan Pencahayaan LED.',
                about_text2: 'Didirikan resmi pada tahun 2008, semangat kewirausahaan kami dan tim profesional muda memungkinkan kami untuk beradaptasi, menyusun strategi, dan memberikan solusi inovatif untuk setiap tantangan bisnis dengan lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera.',
                about_btn: 'Pelajari Lebih Lanjut Tentang Kami',

                // Services Section
                services_title: 'Layanan Kami',
                services_subtitle: 'Solusi komprehensif yang dirancang untuk memenuhi semua kebutuhan bisnis Anda dengan kualitas dan keahlian yang tak tertandingi.',
                service1_title: 'Rekrutmen & Manajemen HR',
                service1_desc: 'Layanan Manajemen HR & Pelatihan komprehensif untuk memastikan talenta yang tepat untuk pekerjaan yang tepat dengan keunggulan profesional.',
                service1_point1: 'Rekrutmen Profesional',
                service1_point2: 'Manajemen HR',
                service1_point3: 'Program Pelatihan',
                service2_title: 'Manajemen Pengendalian Hama',
                service2_desc: 'Solusi manajemen hama yang andal dan berkelanjutan untuk bisnis dan industri dengan pendekatan ramah lingkungan.',
                service2_point1: 'Perawatan Pencegahan',
                service2_point2: 'Pemantauan Berkala',
                service2_point3: 'Solusi Ramah Lingkungan',
                service3_title: 'Kebersihan & Pencahayaan LED',
                service3_desc: 'Layanan kebersihan profesional dan solusi pencahayaan LED inovatif untuk kebutuhan operasional bisnis modern.',
                service3_point1: 'Kebersihan Profesional',
                service3_point2: 'Instalasi LED',
                service3_point3: 'Dukungan Pemeliharaan',

                // Line of Business
                business_title: 'Lini Bisnis',
                business_subtitle: 'Solusi bisnis komprehensif di berbagai sektor untuk memenuhi beragam kebutuhan industri.',
                business1_title: 'Manajemen Outsourcing',
                business1_point1: 'Outsourcing Tenaga Kerja',
                business1_point2: 'Proyek Tenaga Kerja',
                business1_point3: 'Pencari Bakat',
                business1_point4: 'Manajemen Pelatihan',
                business2_title: 'Manajemen Fasilitas',
                business2_point1: 'Layanan Kebersihan',
                business2_point2: 'Pembersihan Umum',
                business2_point3: 'Pengendalian Vektor & Hama',
                business2_point4: 'Pemeliharaan',
                business3_title: 'Manajemen Layanan Keamanan',
                business3_point1: 'Satuan Pengamanan',
                business3_point2: 'Manajemen Pelatihan',
                business3_point3: 'Keamanan Profesional',
                business3_point4: 'Pemantauan 24/7',
                business4_title: 'Pencahayaan LED',
                business4_point1: 'Manufaktur',
                business4_point2: 'Kontrak EPC',
                business4_point3: 'Instalasi',
                business4_point4: 'Solusi Energi',

                // Recruitment Process
                process_title: '5 Langkah Proses Rekrutmen',
                process_subtitle: 'Pendekatan sistematis kami memastikan kami menemukan kandidat yang sempurna untuk kebutuhan bisnis Anda.',
                process1_title: 'Identifikasi Pekerjaan',
                process1_desc: 'Analisis komprehensif dan konfirmasi persyaratan dan ekspektasi spesifik klien.',
                process2_title: 'Proses Saluran Pencarian',
                process2_desc: 'Akses ke basis data ekstensif dari 5000+ calon karyawan dan kandidat yang berkualitas.',
                process3_title: 'Penyaringan Aplikasi',
                process3_desc: 'Penyortiran dan evaluasi kandidat yang ketat sesuai dengan kualifikasi spesifik yang dibutuhkan.',
                process4_title: 'Proses Wawancara',
                process4_desc: 'Proses wawancara profesional didukung dengan alat evaluasi psikotes komprehensif.',
                process5_title: 'Penempatan',
                process5_desc: 'Penempatan strategis calon karyawan terbaik yang berkualitas dan terpilih untuk hasil optimal.',

                // Why Choose Us
                why_title: 'Mengapa Memilih Kami',
                why_subtitle: 'Temukan apa yang membuat kami menjadi mitra yang dipilih untuk bisnis di seluruh Indonesia.',
                why1_title: 'Pengalaman 17+ Tahun',
                why1_desc: 'Rekam jejak terbukti sejak 2008 dengan pengetahuan dan keahlian industri yang mendalam dalam solusi outsourcing.',
                why2_title: '5000+ Karyawan',
                why2_desc: 'Manajemen tenaga kerja yang ekstensif di Jawa, Bali, dan Sumatera dengan beragam keahlian dan kompetensi.',
                why3_title: 'Solusi Terintegrasi',
                why3_desc: 'Solusi bisnis lengkap dari manajemen HR hingga fasilitas, keamanan, dan layanan pencahayaan LED.',
                why4_title: 'Kemitraan Terpercaya',
                why4_desc: 'Hubungan jangka panjang dengan 100+ klien yang puas di berbagai industri dan sektor bisnis.',
                why5_title: 'Fokus Inovasi',
                why5_desc: 'Tim profesional muda dengan semangat kewirausahaan, selalu beradaptasi dengan tren dan teknologi industri terbaru.',
                why6_title: 'Jaminan Kualitas',
                why6_desc: 'Proses kontrol kualitas yang ketat dan perbaikan berkelanjutan untuk memastikan standar penyampaian layanan yang sangat baik.',

                // Contact CTA
                cta_title: 'Siap Bermitra Dengan Kami?',
                cta_subtitle: 'Bergabunglah dengan ratusan klien yang puas yang mempercayai kami dengan kebutuhan outsourcing mereka. Mari diskusikan bagaimana kami dapat membantu mengembangkan bisnis Anda.',
                cta_btn1: 'Hubungi Kami Hari Ini',
                cta_btn2: 'Bergabung dengan Tim Kami',
                cta_connect: 'Terhubung Dengan Kami',
                cta_response_time: 'Waktu respon: Dalam 24 jam',

                // Footer
                footer_quick_links: 'Tautan Cepat',
                footer_get_in_touch: 'Hubungi Kami',
                footer_phone: 'Telepon',
                footer_email: 'Email',
                footer_location: 'Lokasi',
                footer_services: 'Layanan Kami',
                footer_follow: 'Ikuti Kami',
                footer_copyright: '2025 PT. ENLULU SUKSES MAKMUR. Seluruh hak cipta dilindungi.',
                footer_privacy: 'Kebijakan Privasi',
                footer_terms: 'Syarat Layanan',
                footer_sitemap: 'Peta Situs',
                footer_service1: 'Tenaga Kerja',
                footer_service1_sub: 'Outsourcing',
                footer_service2: 'HR',
                footer_service2_sub: 'Manajemen',
                footer_service3: 'Pengendalian',
                footer_service3_sub: 'Hama',
                footer_service4: 'Layanan',
                footer_service4_sub: 'Kebersihan',
                footer_service5: 'LED',
                footer_service5_sub: 'Pencahayaan'
            },
            en: {
                // Navigation
                nav_home: 'Home',
                nav_about: 'About Us',
                nav_news: 'News',
                nav_career: 'Career',
                nav_contact: 'Contact Us',

                // Hero Section
                hero_subtitle: 'Trusted Professional Outsourcing & Business Solutions Provider since 2008',
                hero_description: 'Serving over 5000 employees across Java, Bali, and Sumatra',
                hero_btn_services: 'Explore Services',
                hero_btn_learn: 'Learn More',

                // Statistics
                stats_title: 'Our Achievements',
                stats_employees: 'Employees',
                stats_regions: 'Regions',
                stats_partners: 'Partners',
                stats_years: 'Years',

                // About Section
                about_title: 'About Us',
                about_text1: 'is a leading Manpower Outsourcing company with exceptional expertise in Recruitment, HR Management & Training. We also operate in Pest Control Management, Cleaning Service, and LED Lighting.',
                about_text2: 'Founded officially in 2008, our entrepreneurial spirit and team of young professionals enable us to adapt, strategize, and deliver innovative solutions for every business challenge with over 5000 employees across Java, Bali, and Sumatra.',
                about_btn: 'Learn More About Us',

                // Services Section
                services_title: 'Our Services',
                services_subtitle: 'Comprehensive solutions designed to meet all your business needs with unparalleled quality and expertise.',
                service1_title: 'Recruitment & HR Management',
                service1_desc: 'Comprehensive HR Management & Training services to ensure the right talent for the right job with professional excellence.',
                service1_point1: 'Professional Recruitment',
                service1_point2: 'HR Management',
                service1_point3: 'Training Programs',
                service2_title: 'Pest Control Management',
                service2_desc: 'Reliable and sustainable pest management solutions for businesses and industries with eco-friendly approaches.',
                service2_point1: 'Preventive Treatment',
                service2_point2: 'Regular Monitoring',
                service2_point3: 'Eco-friendly Solutions',
                service3_title: 'Cleaning & LED Lighting',
                service3_desc: 'Professional cleaning services and innovative LED lighting solutions for modern business operational needs.',
                service3_point1: 'Professional Cleaning',
                service3_point2: 'LED Installation',
                service3_point3: 'Maintenance Support',

                // Line of Business
                business_title: 'Line of Business',
                business_subtitle: 'Comprehensive business solutions across multiple sectors to meet diverse industry requirements.',
                business1_title: 'Outsource Management',
                business1_point1: 'Manpower Outsourcing',
                business1_point2: 'Manpower Project',
                business1_point3: 'Head Hunter',
                business1_point4: 'Training Management',
                business2_title: 'Facilities Management',
                business2_point1: 'Cleaning Service',
                business2_point2: 'General Cleaning',
                business2_point3: 'Vector & Pest Control',
                business2_point4: 'Maintenance',
                business3_title: 'Security Service Management',
                business3_point1: 'Security Guard',
                business3_point2: 'Training Management',
                business3_point3: 'Professional Security',
                business3_point4: '24/7 Monitoring',
                business4_title: 'LED Lighting',
                business4_point1: 'Manufacture',
                business4_point2: 'EPC Contract',
                business4_point3: 'Installation',
                business4_point4: 'Energy Solutions',

                // Recruitment Process
                process_title: '5 Steps Recruitment Process',
                process_subtitle: 'Our systematic approach ensures we find the perfect candidates for your business needs.',
                process1_title: 'Job Identification',
                process1_desc: 'Comprehensive analysis and confirmation of client\'s specific requirements and expectations.',
                process2_title: 'Search Channel Process',
                process2_desc: 'Access to extensive database of 5000+ qualified prospective employees and candidates.',
                process3_title: 'Screening Application',
                process3_desc: 'Rigorous sorting and evaluation of candidates according to specific qualifications needed.',
                process4_title: 'Interview Process',
                process4_desc: 'Professional interview process supported with comprehensive psychotest evaluation tools.',
                process5_title: 'Placement',
                process5_desc: 'Strategic placement of the best qualified and selected prospective employees for optimal results.',

                // Why Choose Us
                why_title: 'Why Choose Us',
                why_subtitle: 'Discover what makes us the preferred partner for businesses across Indonesia.',
                why1_title: '17+ Years Experience',
                why1_desc: 'Proven track record since 2008 with deep industry knowledge and expertise in outsourcing solutions.',
                why2_title: '5000+ Employees',
                why2_desc: 'Extensive workforce management across Java, Bali, and Sumatra with diverse skill sets and expertise.',
                why3_title: 'Integrated Solutions',
                why3_desc: 'Complete business solutions from HR management to facilities, security, and LED lighting services.',
                why4_title: 'Trusted Partnerships',
                why4_desc: 'Long-term relationships with 100+ satisfied clients across various industries and business sectors.',
                why5_title: 'Innovation Focus',
                why5_desc: 'Young professional team with entrepreneurial spirit, always adapting to latest industry trends and technologies.',
                why6_title: 'Quality Assurance',
                why6_desc: 'Rigorous quality control processes and continuous improvement to ensure excellent service delivery standards.',

                // Contact CTA
                cta_title: 'Ready to Partner With Us?',
                cta_subtitle: 'Join hundreds of satisfied clients who trust us with their outsourcing needs. Let\'s discuss how we can help grow your business.',
                cta_btn1: 'Contact Us Today',
                cta_btn2: 'Join Our Team',
                cta_connect: 'Connect With Us',
                cta_response_time: 'Response time: Within 24 hours',

                // Footer
                footer_quick_links: 'Quick Links',
                footer_get_in_touch: 'Get In Touch',
                footer_phone: 'Phone',
                footer_email: 'Email',
                footer_location: 'Location',
                footer_services: 'Our Services',
                footer_follow: 'Follow Us',
                footer_copyright: '2025 PT. ENLULU SUKSES MAKMUR. All rights reserved.',
                footer_privacy: 'Privacy Policy',
                footer_terms: 'Terms of Service',
                footer_sitemap: 'Sitemap',
                footer_service1: 'Manpower',
                footer_service1_sub: 'Outsourcing',
                footer_service2: 'HR',
                footer_service2_sub: 'Management',
                footer_service3: 'Pest',
                footer_service3_sub: 'Control',
                footer_service4: 'Cleaning',
                footer_service4_sub: 'Service',
                footer_service5: 'LED',
                footer_service5_sub: 'Lighting'
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

<body class="bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800 font-sans overflow-x-hidden" x-data="{ open: false }">



    <!-- Navbar -->
    <header class="fixed w-full top-0 z-40 bg-white/80 backdrop-blur-xl shadow-lg border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-6 py-4">
            <a href="/" class="flex items-center space-x-2 group">
                <img src="assets/images/enlulu.png" alt="Enlulu Logo" class="h-10 w-auto group-hover:scale-110 transition-transform duration-300">
            </a>
            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="relative text-orange-600 group">
                    <span data-translate="nav_home">Beranda</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
                </a>
                <a href="/about" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_about">Tentang Kami</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/news" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_news">Berita</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
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
                <a href="/" class="text-orange-600 py-2" data-translate="nav_home">Beranda</a>
                <a href="/about" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_about">Tentang Kami</a>
                <a href="/news" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_news">Berita</a>
                <a href="/career" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_career">Karir</a>
                <a href="/contact" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_contact">Kontak</a>
                <div class="flex space-x-1 mt-4">
                    <button onclick="switchLanguage('id')" data-lang="id" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">ID</button>
                    <button onclick="switchLanguage('en')" data-lang="en" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">EN</button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/dot-grid.png')] opacity-10"></div>
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full animate-float"></div>
                <div class="absolute top-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float" style="animation-delay: -2s;"></div>
                <div class="absolute bottom-20 left-1/3 w-64 h-64 bg-white/10 rounded-full animate-float" style="animation-delay: -4s;"></div>
                <div class="absolute top-32 right-1/4 w-48 h-48 bg-white/8 rounded-full animate-pulse-slow"></div>
                <div class="absolute bottom-32 right-16 w-32 h-32 bg-white/12 rounded-full animate-bounce-slow"></div>
            </div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 md:px-6 text-center">
            <div class="animate-slide-up">
                <div class="mb-8">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white via-orange-100 to-white bg-clip-text text-transparent">
                        PT. ENLULU SUKSES MAKMUR
                    </h1>
                    <div class="w-32 h-1 bg-white mx-auto mb-8 rounded-full"></div>
                </div>

                <p class="text-xl md:text-2xl opacity-90 leading-relaxed max-w-4xl mx-auto mb-12">
                    <span data-translate="hero_subtitle">Penyedia Solusi Outsourcing & Bisnis Profesional Terpercaya sejak 2008</span>
                    <br class="hidden md:block">
                    <span class="text-orange-200" data-translate="hero_description">Melayani lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="#services" class="group bg-white text-orange-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3">
                        <span data-translate="hero_btn_services">Jelajahi Layanan</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="/about" class="group bg-transparent border-2 border-white text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-3">
                        <span data-translate="hero_btn_learn">Pelajari Lebih Lanjut</span>
                        <i class="fas fa-info-circle group-hover:scale-110 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll indicator
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-2xl opacity-70"></i>
        </div> -->
    </section>

    <!-- Company Statistics -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-50/50 to-red-50/50"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="stats_title">
                    Pencapaian Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-3xl p-8 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-users text-4xl mb-4"></i>
                        <div class="text-4xl font-bold mb-2">5000+</div>
                        <div class="text-sm opacity-90" data-translate="stats_employees">Karyawan</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-3xl p-8 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-map-marker-alt text-4xl mb-4"></i>
                        <div class="text-4xl font-bold mb-2">3</div>
                        <div class="text-sm opacity-90" data-translate="stats_regions">Wilayah</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-green-500 to-teal-500 text-white rounded-3xl p-8 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-handshake text-4xl mb-4"></i>
                        <div class="text-4xl font-bold mb-2">100+</div>
                        <div class="text-sm opacity-90" data-translate="stats_partners">Mitra</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-3xl p-8 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-award text-4xl mb-4"></i>
                        <div class="text-4xl font-bold mb-2">17+</div>
                        <div class="text-sm opacity-90" data-translate="stats_years">Tahun</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-200/20 to-red-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative group order-2 md:order-1">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 group-hover:rotate-6 transition-transform duration-300"></div>
                    <img src="assets/images/about.png" alt="About Us" class="relative rounded-3xl shadow-2xl hover:scale-[1.02] transition-transform duration-500 z-10">
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-orange-400 rounded-full animate-float opacity-80"></div>
                    <div class="absolute -bottom-6 -left-6 w-12 h-12 bg-red-400 rounded-full animate-float opacity-60" style="animation-delay: -2s;"></div>
                </div>

                <div class="space-y-8 order-1 md:order-2">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 via-orange-600 to-red-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="about_title">
                            Tentang Kami
                        </h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mb-8"></div>
                    </div>

                    <div class="space-y-6">
                        <p class="text-gray-700 leading-relaxed text-lg">
                            <span class="font-semibold text-orange-600">PT. ENLULU SUKSES MAKMUR</span> <span data-translate="about_text1">adalah perusahaan Manpower Outsourcing terkemuka dengan keahlian luar biasa dalam Rekrutmen, Manajemen HR & Pelatihan. Kami juga beroperasi dalam Manajemen Pengendalian Hama, Layanan Kebersihan, dan Pencahayaan LED.</span>
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            <span data-translate="about_text2">Didirikan resmi pada tahun 2008, semangat kewirausahaan kami dan tim profesional muda memungkinkan kami untuk beradaptasi, menyusun strategi, dan memberikan solusi inovatif untuk setiap tantangan bisnis dengan lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera.</span>
                        </p>
                    </div>

                    <div class="pt-6">
                        <a href="/about" class="group bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-2xl font-bold hover:shadow-xl transition-all duration-300 transform hover:scale-105 inline-flex items-center space-x-3">
                            <span data-translate="about_btn">Pelajari Lebih Lanjut Tentang Kami</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-200/20 to-cyan-200/20 rounded-full transform -translate-x-48 translate-y-48"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="services_title">
                    Layanan Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="services_subtitle">
                    Solusi komprehensif yang dirancang untuk memenuhi semua kebutuhan bisnis Anda dengan kualitas dan keahlian yang tak tertandingi.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="group bg-gradient-to-br from-orange-50 to-red-50 p-10 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service1_title">Rekrutmen & Manajemen HR</h3>
                    <p class="text-gray-600 leading-relaxed mb-6" data-translate="service1_desc">Layanan Manajemen HR & Pelatihan komprehensif untuk memastikan talenta yang tepat untuk pekerjaan yang tepat dengan keunggulan profesional.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i><span data-translate="service1_point1">Rekrutmen Profesional</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i><span data-translate="service1_point2">Manajemen HR</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-orange-500 mr-2"></i><span data-translate="service1_point3">Program Pelatihan</span></li>
                    </ul>
                </div>

                <div class="group bg-gradient-to-br from-green-50 to-teal-50 p-10 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service2_title">Manajemen Pengendalian Hama</h3>
                    <p class="text-gray-600 leading-relaxed mb-6" data-translate="service2_desc">Solusi manajemen hama yang andal dan berkelanjutan untuk bisnis dan industri dengan pendekatan ramah lingkungan.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i><span data-translate="service2_point1">Perawatan Pencegahan</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i><span data-translate="service2_point2">Pemantauan Berkala</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-green-500 mr-2"></i><span data-translate="service2_point3">Solusi Ramah Lingkungan</span></li>
                    </ul>
                </div>

                <div class="group bg-gradient-to-br from-blue-50 to-cyan-50 p-10 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-20 h-20 rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service3_title">Kebersihan & Pencahayaan LED</h3>
                    <p class="text-gray-600 leading-relaxed mb-6" data-translate="service3_desc">Layanan kebersihan profesional dan solusi pencahayaan LED inovatif untuk kebutuhan operasional bisnis modern.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i><span data-translate="service3_point1">Kebersihan Profesional</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i><span data-translate="service3_point2">Instalasi LED</span></li>
                        <li class="flex items-center"><i class="fas fa-check text-blue-500 mr-2"></i><span data-translate="service3_point3">Dukungan Pemeliharaan</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Line of Business -->
    <section id="business" class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-0 w-48 h-48 bg-blue-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-white via-orange-300 to-red-300 bg-clip-text text-transparent" data-translate="business_title">
                    Lini Bisnis
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-translate="business_subtitle">
                    Solusi bisnis komprehensif di berbagai sektor untuk memenuhi beragam kebutuhan industri.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Outsource Management -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users-cog text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-6" data-translate="business1_title">Manajemen Outsourcing</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-center"><i class="fas fa-arrow-right text-orange-400 mr-3 text-xs"></i><span data-translate="business1_point1">Outsourcing Tenaga Kerja</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-orange-400 mr-3 text-xs"></i><span data-translate="business1_point2">Proyek Tenaga Kerja</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-orange-400 mr-3 text-xs"></i><span data-translate="business1_point3">Pencari Bakat</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-orange-400 mr-3 text-xs"></i><span data-translate="business1_point4">Manajemen Pelatihan</span></li>
                    </ul>
                </div>

                <!-- Facilities Management -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-building text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-6" data-translate="business2_title">Manajemen Fasilitas</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-center"><i class="fas fa-arrow-right text-green-400 mr-3 text-xs"></i><span data-translate="business2_point1">Layanan Kebersihan</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-green-400 mr-3 text-xs"></i><span data-translate="business2_point2">Pembersihan Umum</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-green-400 mr-3 text-xs"></i><span data-translate="business2_point3">Pengendalian Vektor & Hama</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-green-400 mr-3 text-xs"></i><span data-translate="business2_point4">Pemeliharaan</span></li>
                    </ul>
                </div>

                <!-- Security Service Management -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-6" data-translate="business3_title">Manajemen Layanan Keamanan</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-center"><i class="fas fa-arrow-right text-blue-400 mr-3 text-xs"></i><span data-translate="business3_point1">Satuan Pengamanan</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-blue-400 mr-3 text-xs"></i><span data-translate="business3_point2">Manajemen Pelatihan</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-blue-400 mr-3 text-xs"></i><span data-translate="business3_point3">Keamanan Profesional</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-blue-400 mr-3 text-xs"></i><span data-translate="business3_point4">Pemantauan 24/7</span></li>
                    </ul>
                </div>

                <!-- LED Lighting -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-yellow-500 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-6" data-translate="business4_title">Pencahayaan LED</h3>
                    <ul class="space-y-3 text-sm text-gray-300">
                        <li class="flex items-center"><i class="fas fa-arrow-right text-yellow-400 mr-3 text-xs"></i><span data-translate="business4_point1">Manufaktur</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-yellow-400 mr-3 text-xs"></i><span data-translate="business4_point2">Kontrak EPC</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-yellow-400 mr-3 text-xs"></i><span data-translate="business4_point3">Instalasi</span></li>
                        <li class="flex items-center"><i class="fas fa-arrow-right text-yellow-400 mr-3 text-xs"></i><span data-translate="business4_point4">Solusi Energi</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Recruitment Process Section -->
    <section id="process" class="py-24 bg-gradient-to-br from-white to-gray-50 relative overflow-hidden">
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="process_title">
                    5 Langkah Proses Rekrutmen
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="process_subtitle">
                    Pendekatan sistematis kami memastikan kami menemukan kandidat yang sempurna untuk kebutuhan bisnis Anda.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Step 1 -->
                <div class="relative group">
                    <div class="bg-white shadow-xl rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-orange-500">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-orange-500 to-red-500 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">
                            01
                        </div>
                        <div class="pt-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-orange-100 to-red-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-search text-orange-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800 text-center" data-translate="process1_title">Identifikasi Pekerjaan</h3>
                            <p class="text-gray-600 text-sm text-center leading-relaxed" data-translate="process1_desc">Analisis komprehensif dan konfirmasi persyaratan dan ekspektasi spesifik klien.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="relative group">
                    <div class="bg-white shadow-xl rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-blue-500">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">
                            02
                        </div>
                        <div class="pt-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-blue-100 to-cyan-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-database text-blue-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800 text-center" data-translate="process2_title">Proses Saluran Pencarian</h3>
                            <p class="text-gray-600 text-sm text-center leading-relaxed" data-translate="process2_desc">Akses ke basis data ekstensif dari 5000+ calon karyawan dan kandidat yang berkualitas.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="relative group">
                    <div class="bg-white shadow-xl rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-green-500">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-green-500 to-teal-500 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">
                            03
                        </div>
                        <div class="pt-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-green-100 to-teal-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-filter text-green-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800 text-center" data-translate="process3_title">Penyaringan Aplikasi</h3>
                            <p class="text-gray-600 text-sm text-center leading-relaxed" data-translate="process3_desc">Penyortiran dan evaluasi kandidat yang ketat sesuai dengan kualifikasi spesifik yang dibutuhkan.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="relative group">
                    <div class="bg-white shadow-xl rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-purple-500">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">
                            04
                        </div>
                        <div class="pt-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-purple-100 to-pink-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-comments text-purple-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800 text-center" data-translate="process4_title">Proses Wawancara</h3>
                            <p class="text-gray-600 text-sm text-center leading-relaxed" data-translate="process4_desc">Proses wawancara profesional didukung dengan alat evaluasi psikotes komprehensif.</p>
                        </div>
                    </div>
                </div>

                <!-- Step 5 -->
                <div class="relative group">
                    <div class="bg-white shadow-xl rounded-3xl p-8 hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border-t-4 border-indigo-500">
                        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-gradient-to-r from-indigo-500 to-blue-600 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:scale-110 transition-transform">
                            05
                        </div>
                        <div class="pt-8">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-100 to-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform">
                                <i class="fas fa-user-check text-indigo-600 text-2xl"></i>
                            </div>
                            <h3 class="font-bold text-lg mb-4 text-gray-800 text-center" data-translate="process5_title">Penempatan</h3>
                            <p class="text-gray-600 text-sm text-center leading-relaxed" data-translate="process5_desc">Penempatan strategis calon karyawan terbaik yang berkualitas dan terpilih untuk hasil optimal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-blue-200/20 to-purple-200/20 rounded-full transform -translate-x-48 -translate-y-48"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="why_title">
                    Mengapa Memilih Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="why_subtitle">
                    Temukan apa yang membuat kami menjadi mitra yang dipilih untuk bisnis di seluruh Indonesia.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-medal text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why1_title">Pengalaman 17+ Tahun</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why1_desc">Rekam jejak terbukti sejak 2008 dengan pengetahuan dan keahlian industri yang mendalam dalam solusi outsourcing.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why2_title">5000+ Karyawan</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why2_desc">Manajemen tenaga kerja yang ekstensif di Jawa, Bali, dan Sumatera dengan beragam keahlian dan kompetensi.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-cogs text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why3_title">Solusi Terintegrasi</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why3_desc">Solusi bisnis lengkap dari manajemen HR hingga fasilitas, keamanan, dan layanan pencahayaan LED.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why4_title">Kemitraan Terpercaya</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why4_desc">Hubungan jangka panjang dengan 100+ klien yang puas di berbagai industri dan sektor bisnis.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-yellow-500 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why5_title">Fokus Inovasi</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why5_desc">Tim profesional muda dengan semangat kewirausahaan, selalu beradaptasi dengan tren dan teknologi industri terbaru.</p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 group">
                    <div class="bg-gradient-to-r from-indigo-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800" data-translate="why6_title">Jaminan Kualitas</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="why6_desc">Proses kontrol kualitas yang ketat dan perbaikan berkelanjutan untuk memastikan standar penyampaian layanan yang sangat baik.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="relative bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white py-20 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/10 rounded-full animate-float"></div>
            <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-white/5 rounded-full animate-float" style="animation-delay: -3s;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6" data-translate="cta_title">Siap Bermitra Dengan Kami?</h2>
                    <p class="text-xl mb-8 opacity-90 leading-relaxed" data-translate="cta_subtitle">
                        Bergabunglah dengan ratusan klien yang puas yang mempercayai kami dengan kebutuhan outsourcing mereka. Mari diskusikan bagaimana kami dapat membantu mengembangkan bisnis Anda.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="/contact" class="group bg-white text-orange-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center space-x-3">
                            <span data-translate="cta_btn1">Hubungi Kami Hari Ini</span>
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                        </a>
                        <a href="/career" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3">
                            <span data-translate="cta_btn2">Bergabung dengan Tim Kami</span>
                            <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                        <h3 class="text-2xl font-bold mb-6 text-center" data-translate="cta_connect">Terhubung Dengan Kami</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <a href="https://www.facebook.com/p/PT-Enlulu-Sukses-Makmur-100063922750338/" target="_blank" class="group bg-white/20 hover:bg-white hover:text-orange-600 rounded-2xl p-4 flex flex-col items-center space-y-2 transition-all duration-300 hover:scale-105">
                                <i class="fab fa-facebook-f text-2xl"></i>
                                <span class="text-sm font-medium">Facebook</span>
                            </a>
                            <a href="https://www.instagram.com/pt.enlulu_sukses_makmur/" target="_blank" class="group bg-white/20 hover:bg-white hover:text-pink-600 rounded-2xl p-4 flex flex-col items-center space-y-2 transition-all duration-300 hover:scale-105">
                                <i class="fab fa-instagram text-2xl"></i>
                                <span class="text-sm font-medium">Instagram</span>
                            </a>
                            <a href="https://www.linkedin.com/company/pt-enlulu-sukses-makmur" target="_blank" class="group bg-white/20 hover:bg-white hover:text-blue-600 rounded-2xl p-4 flex flex-col items-center space-y-2 transition-all duration-300 hover:scale-105">
                                <i class="fab fa-linkedin-in text-2xl"></i>
                                <span class="text-sm font-medium">LinkedIn</span>
                            </a>
                            <a href="https://wa.me/6281391000688" target="_blank" class="group bg-white/20 hover:bg-white hover:text-green-600 rounded-2xl p-4 flex flex-col items-center space-y-2 transition-all duration-300 hover:scale-105">
                                <i class="fab fa-whatsapp text-2xl"></i>
                                <span class="text-sm font-medium">WhatsApp</span>
                            </a>
                        </div>
                        <div class="mt-6 text-center">
                            <p class="text-sm opacity-90">
                                <i class="fas fa-envelope mr-2"></i>
                                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=trio@enlulu.co.id" class="hover:text-orange-200 underline">trio@enlulu.co.id</a>
                            </p>
                            <p class="text-sm opacity-90 mt-2">
                                <i class="fas fa-clock mr-2"></i>
                                <span data-translate="cta_response_time">Waktu respon: Dalam 24 jam</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                                <img src="assets/images/enlulu.png" alt="Enlulu Logo" class="h-16 object-contain">
                            </div>
                        </div>

                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent">
                                PT. Enlulu Sukses Makmur
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
                        <h3 class="text-xl font-bold text-white relative" data-translate="footer_quick_links">
                            Tautan Cepat
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
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
                                <a href="/news" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
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
                        <h3 class="text-xl font-bold text-white relative" data-translate="footer_get_in_touch">
                            Hubungi Kami
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
                <h3 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent" data-translate="footer_services">
                    Layanan Kami
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

            <!-- Social Media & Newsletter -->
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
                <div class="flex justify-center items-center text-gray-400 text-sm">
                    <div class="flex items-center space-x-2">
                        <div class="w-2 h-2 bg-orange-400 rounded-full animate-pulse"></div>
                        <p>&copy; <span data-translate="footer_copyright">2025 PT. ENLULU SUKSES MAKMUR. Seluruh hak cipta dilindungi.</span></p>
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
