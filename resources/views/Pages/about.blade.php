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
    <title>About Us - PT. ENLULU SUKSES MAKMUR</title>
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

        // Translation data for About page
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Hero Section
                hero_title: 'Tentang Kami',
                hero_subtitle: 'Temukan perjalanan, nilai-nilai, dan komitmen kami yang tak tergoyahkan terhadap keunggulan dalam setiap layanan yang kami berikan.',

                // Company Statistics
                stats_employees_label: 'Karyawan',
                stats_regions_label: 'Wilayah',
                stats_clients_label: 'Klien',
                stats_years_label: 'Tahun',

                // Company Profile Section
                profile_title: 'Siapa Kami',
                profile_text1: 'PT. ENLULU SUKSES MAKMUR adalah perusahaan Manpower Outsourcing terkemuka dengan keahlian luar biasa dalam Rekrutmen, Manajemen HR & Pelatihan. Portofolio bisnis komprehensif kami meluas ke Manajemen Pengendalian Hama, Layanan Kebersihan, dan solusi Pencahayaan LED.',
                profile_text2: 'Saat ini, kami dengan bangga mengelola lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera, memberikan klien kami yang berharga solusi inovatif yang disesuaikan untuk mengatasi setiap tantangan bisnis dengan keunggulan dan presisi.',

                // Key Features
                feature_professional: 'Keunggulan Profesional',
                feature_innovative: 'Solusi Inovatif',
                feature_trusted: 'Kemitraan Terpercaya',
                feature_sustainable: 'Pertumbuhan Berkelanjutan',

                // Services Overview
                services_title: 'Layanan Kami',
                services_subtitle: 'Solusi komprehensif yang dirancang untuk memenuhi semua kebutuhan bisnis Anda dengan kualitas dan keahlian yang tak tertandingi.',
                service1_title: 'Manpower Outsourcing',
                service1_desc: 'Layanan rekrutmen dan manajemen HR ahli untuk membantu Anda menemukan dan mengelola talenta yang tepat untuk kebutuhan bisnis Anda.',
                service2_title: 'Pengendalian Hama',
                service2_desc: 'Layanan manajemen pengendalian hama profesional untuk menjaga lingkungan yang aman dan sehat untuk bisnis Anda.',
                service3_title: 'Pencahayaan LED & Kebersihan',
                service3_desc: 'Layanan kebersihan komprehensif dan solusi pencahayaan LED hemat energi untuk operasi bisnis yang optimal.',

                // Vision & Mission
                vision_mission_title: 'Visi & Misi',
                vision_mission_subtitle: 'Prinsip panduan kami yang mendorong kami menuju keunggulan dan pertumbuhan berkelanjutan dalam segala yang kami lakukan.',
                vision_title: 'Visi Kami',
                vision_text: 'Menjadi perusahaan outsourcing yang terpercaya dan profesional yang menyediakan solusi inovatif dan berkontribusi pada pertumbuhan bisnis berkelanjutan untuk semua mitra dan pemangku kepentingan kami.',
                mission_title: 'Misi Kami',
                mission_point1: 'Memberikan layanan outsourcing berkualitas tinggi dengan integritas dan profesionalisme.',
                mission_point2: 'Mendukung klien dengan tenaga kerja yang dapat diandalkan dan manajemen HR yang efektif.',
                mission_point3: 'Menyediakan solusi berkelanjutan dalam Pengendalian Hama, Kebersihan, dan Pencahayaan.',
                mission_point4: 'Memberdayakan karyawan melalui pelatihan dan pengembangan karir.',

                // Company Values
                values_title: 'Nilai-Nilai Inti Kami',
                values_subtitle: 'Prinsip-prinsip fundamental yang memandu tindakan kami dan menentukan budaya perusahaan kami.',
                value1_title: 'Integritas',
                value1_desc: 'Kami menjalankan bisnis dengan kejujuran, transparansi, dan prinsip-prinsip etika.',
                value2_title: 'Keunggulan',
                value2_desc: 'Kami berusaha untuk mencapai standar tertinggi dalam segala hal yang kami berikan.',
                value3_title: 'Inovasi',
                value3_desc: 'Kami merangkul ide-ide baru dan teknologi untuk meningkatkan layanan kami.',
                value4_title: 'Komitmen',
                value4_desc: 'Kami berdedikasi untuk membangun kemitraan jangka panjang dengan klien kami.',

                // Leadership
                leadership_title: 'Keunggulan Kepemimpinan',
                leadership_subtitle: 'Tim kepemimpinan berpengalaman kami mendorong inovasi dan memastikan pemberian layanan luar biasa di semua unit bisnis.',
                leader1_title: 'Kepemimpinan Eksekutif',
                leader1_desc: 'Visi strategis dan keunggulan bisnis',
                leader2_title: 'Manajemen Operasional',
                leader2_desc: 'Keunggulan dan efisiensi operasional',
                leader3_title: 'Pengembangan HR',
                leader3_desc: 'Pengembangan dan pertumbuhan orang',

                // Trusted Clients
                clients_title: 'Klien Terpercaya Kami',
                clients_subtitle: 'Kami bangga bermitra dengan perusahaan-perusahaan terkemuka di berbagai industri, memberikan solusi outsourcing luar biasa dan membangun hubungan kepercayaan jangka panjang.',
                client_stats_partners_label: 'Mitra Terpercaya',
                client_stats_satisfaction_label: 'Kepuasan Klien',
                client_stats_renewal_label: 'Tingkat Perpanjangan',
                client_testimonial: '"Kesuksesan kami diukur dari kepercayaan yang diberikan klien kepada kami. Kami berkomitmen untuk memberikan keunggulan dalam setiap kemitraan, memastikan pertumbuhan berkelanjutan untuk bisnis di seluruh Jawa, Bali, dan Sumatera."',

                // Call to Action
                cta_title: 'Siap Bermitra dengan Kami?',
                cta_subtitle: 'Temukan bagaimana keahlian dan komitmen kami dapat mendorong bisnis Anda maju. Mari membangun kesuksesan bersama.',
                cta_contact: 'Hubungi Kami Hari Ini',
                cta_career: 'Bergabung dengan Tim Kami',

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
                footer_sitemap: 'Peta Situs'
            },
            en: {
                // Navigation
                nav_home: 'Home',
                nav_about: 'About Us',
                nav_news: 'News',
                nav_career: 'Career',
                nav_contact: 'Contact Us',

                // Hero Section
                hero_title: 'About Us',
                hero_subtitle: 'Discover our journey, values, and unwavering commitment to excellence in every service we provide.',

                // Company Statistics
                stats_employees_label: 'Employees',
                stats_regions_label: 'Regions',
                stats_clients_label: 'Clients',
                stats_years_label: 'Years',

                // Company Profile Section
                profile_title: 'Who We Are',
                profile_text1: 'PT. ENLULU SUKSES MAKMUR is a leading Manpower Outsourcing company with exceptional expertise in Recruitment, HR Management & Training. Our comprehensive business portfolio extends to Pest Control Management, Cleaning Service, and LED Lighting solutions.',
                profile_text2: 'Today, we proudly manage over 5000 employees across Java, Bali, and Sumatra, providing our valued clients with innovative solutions tailored to overcome every business challenge with excellence and precision.',

                // Key Features
                feature_professional: 'Professional Excellence',
                feature_innovative: 'Innovative Solutions',
                feature_trusted: 'Trusted Partnership',
                feature_sustainable: 'Sustainable Growth',

                // Services Overview
                services_title: 'Our Services',
                services_subtitle: 'Comprehensive solutions designed to meet all your business needs with unparalleled quality and expertise.',
                service1_title: 'Manpower Outsourcing',
                service1_desc: 'Expert recruitment and HR management services to help you find and manage the right talent for your business needs.',
                service2_title: 'Pest Control',
                service2_desc: 'Professional pest control management services to maintain a safe and healthy environment for your business.',
                service3_title: 'LED Lighting & Cleaning',
                service3_desc: 'Comprehensive cleaning services and energy-efficient LED lighting solutions for optimal business operations.',

                // Vision & Mission
                vision_mission_title: 'Vision & Mission',
                vision_mission_subtitle: 'Our guiding principles that drive us toward excellence and sustainable growth in everything we do.',
                vision_title: 'Our Vision',
                vision_text: 'To become a trusted and professional outsourcing company that provides innovative solutions and contributes to sustainable business growth for all our partners and stakeholders.',
                mission_title: 'Our Mission',
                mission_point1: 'Deliver high-quality outsourcing services with integrity and professionalism.',
                mission_point2: 'Support clients with reliable manpower and effective HR management.',
                mission_point3: 'Provide sustainable solutions in Pest Control, Cleaning, and Lighting.',
                mission_point4: 'Empower employees through training and career development.',

                // Company Values
                values_title: 'Our Core Values',
                values_subtitle: 'The fundamental principles that guide our actions and define our company culture.',
                value1_title: 'Integrity',
                value1_desc: 'We conduct business with honesty, transparency, and ethical principles.',
                value2_title: 'Excellence',
                value2_desc: 'We strive for the highest standards in everything we deliver.',
                value3_title: 'Innovation',
                value3_desc: 'We embrace new ideas and technologies to improve our services.',
                value4_title: 'Commitment',
                value4_desc: 'We are dedicated to building long-term partnerships with our clients.',

                // Leadership
                leadership_title: 'Leadership Excellence',
                leadership_subtitle: 'Our experienced leadership team drives innovation and ensures exceptional service delivery across all business units.',
                leader1_title: 'Executive Leadership',
                leader1_desc: 'Strategic vision and business excellence',
                leader2_title: 'Operations Management',
                leader2_desc: 'Operational excellence and efficiency',
                leader3_title: 'HR Development',
                leader3_desc: 'People development and growth',

                // Trusted Clients
                clients_title: 'Our Trusted Clients',
                clients_subtitle: 'We are proud to partner with leading companies across various industries, delivering exceptional outsourcing solutions and building long-term trusted relationships.',
                client_stats_partners_label: 'Trusted Partners',
                client_stats_satisfaction_label: 'Client Satisfaction',
                client_stats_renewal_label: 'Renewal Rate',
                client_testimonial: '"Our success is measured by the trust our clients place in us. We are committed to delivering excellence in every partnership, ensuring sustainable growth for businesses across Java, Bali, and Sumatra."',

                // Call to Action
                cta_title: 'Ready to Partner With Us?',
                cta_subtitle: 'Discover how our expertise and commitment can drive your business forward. Let\'s build success together.',
                cta_contact: 'Contact Us Today',
                cta_career: 'Join Our Team',

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
                footer_sitemap: 'Sitemap'
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
                <img src="assets/images/enlulu.png" alt="Enlulu Logo" class="h-10 w-auto group-hover:scale-110 transition-transform duration-300">
            </a>
            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_home">Beranda</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/about" class="relative text-orange-600 group">
                    <span data-translate="nav_about">Tentang Kami</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
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
                <a href="/" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_home">Beranda</a>
                <a href="/about" class="text-orange-600 py-2" data-translate="nav_about">Tentang Kami</a>
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

    <!-- Hero -->
    <section class="relative pt-32 pb-24 bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white text-center overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0 pointer-events-none">
            <div class="absolute inset-0 bg-[url('https://www.toptal.com/designers/subtlepatterns/patterns/dot-grid.png')] opacity-10"></div>
            <div class="absolute top-0 left-0 w-full h-full">
                <div class="absolute top-20 left-10 w-72 h-72 bg-white/10 rounded-full animate-float"></div>
                <div class="absolute top-40 right-20 w-96 h-96 bg-white/5 rounded-full animate-float" style="animation-delay: -2s;"></div>
                <div class="absolute bottom-20 left-1/3 w-64 h-64 bg-white/10 rounded-full animate-float" style="animation-delay: -4s;"></div>
                <div class="absolute top-32 right-1/4 w-48 h-48 bg-white/8 rounded-full animate-pulse-slow"></div>
                <div class="absolute bottom-32 right-16 w-32 h-32 bg-white/12 rounded-full animate-bounce-slow"></div>
            </div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 md:px-6 flex flex-col items-center justify-center text-center" style="z-index:1;">
            <div class="animate-slide-up w-full">
                <h1 class="text-4xl md:text-7xl font-bold mb-4" data-translate="hero_title">Tentang Kami</h1>
                <div class="w-24 h-1 bg-white mx-auto mb-8 rounded-full"></div>
                <p class="text-xl md:text-2xl opacity-90 leading-relaxed max-w-2xl mx-auto" data-translate="hero_subtitle"></p>
            </div>

    </section>

    <!-- Company Statistics -->
    <section class="py-16 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-50/50 to-red-50/50"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="group">
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-2xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl">
                        <i class="fas fa-users text-3xl mb-3"></i>
                        <div class="text-3xl font-bold mb-1">5000+</div>
                        <div class="text-sm opacity-90" data-translate="stats_employees_label">Karyawan</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-2xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl">
                        <i class="fas fa-map-marker-alt text-3xl mb-3"></i>
                        <div class="text-3xl font-bold mb-1">3</div>
                        <div class="text-sm opacity-90" data-translate="stats_regions_label">Wilayah</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-green-500 to-teal-500 text-white rounded-2xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl">
                        <i class="fas fa-briefcase text-3xl mb-3"></i>
                        <div class="text-3xl font-bold mb-1">100+</div>
                        <div class="text-sm opacity-90" data-translate="stats_clients_label">Klien</div>
                    </div>
                </div>
                <div class="group">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-2xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl">
                        <i class="fas fa-star text-3xl mb-3"></i>
                        <div class="text-3xl font-bold mb-1">10+</div>
                        <div class="text-sm opacity-90" data-translate="stats_years_label">Tahun</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Profile -->
    <section class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-200/20 to-red-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 rounded-3xl transform rotate-3 group-hover:rotate-6 transition-transform duration-300"></div>
                    <img src="assets/images/companyteam.png" alt="Company Team" class="relative rounded-3xl shadow-2xl hover:scale-[1.02] transition-transform duration-500 z-10">
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-orange-400 rounded-full animate-float opacity-80"></div>
                    <div class="absolute -bottom-6 -left-6 w-12 h-12 bg-red-400 rounded-full animate-float opacity-60" style="animation-delay: -2s;"></div>
                </div>

                <div class="space-y-8">
                    <div>
                        <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 via-orange-600 to-red-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="profile_title">
                            Siapa Kami
                        </h2>
                        <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mb-8"></div>
                    </div>

                    <div class="space-y-6">
                        <p class="text-gray-700 leading-relaxed text-lg" data-translate="profile_text1">
                            PT. ENLULU SUKSES MAKMUR adalah perusahaan Manpower Outsourcing terkemuka dengan keahlian luar biasa dalam Rekrutmen, Manajemen HR & Pelatihan. Portofolio bisnis komprehensif kami meluas ke Manajemen Pengendalian Hama, Layanan Kebersihan, dan solusi Pencahayaan LED.
                        </p>
                        <p class="text-gray-700 leading-relaxed text-lg" data-translate="profile_text2">
                            Saat ini, kami dengan bangga mengelola lebih dari 5000 karyawan di seluruh Jawa, Bali, dan Sumatera, memberikan klien kami yang berharga solusi inovatif yang disesuaikan untuk mengatasi setiap tantangan bisnis dengan keunggulan dan presisi.
                        </p>
                    </div>

                    <!-- Key Features -->
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-3 h-3 bg-orange-500 rounded-full"></div>
                            <span class="text-gray-700 font-medium" data-translate="feature_professional">Keunggulan Profesional</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <span class="text-gray-700 font-medium" data-translate="feature_innovative">Solusi Inovatif</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                            <span class="text-gray-700 font-medium" data-translate="feature_trusted">Kemitraan Terpercaya</span>
                        </div>
                        <div class="flex items-center space-x-3 p-4 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow">
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                            <span class="text-gray-700 font-medium" data-translate="feature_sustainable">Pertumbuhan Berkelanjutan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-24 bg-white relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-200/20 to-cyan-200/20 rounded-full transform -translate-x-48 translate-y-48"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="services_title">
                    Layanan Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="services_subtitle">
                    Solusi komprehensif yang dirancang untuk memenuhi semua kebutuhan bisnis Anda dengan kualitas dan keahlian yang tak tertandingi.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="group bg-gradient-to-br from-orange-50 to-red-50 p-8 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service1_title">Manpower Outsourcing</h3>
                    <p class="text-gray-600 leading-relaxed mb-4" data-translate="service1_desc">Layanan rekrutmen dan manajemen HR ahli untuk membantu Anda menemukan dan mengelola talenta yang tepat untuk kebutuhan bisnis Anda.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Rekrutmen & Seleksi</li>
                        <li>• Manajemen HR</li>
                        <li>• Pelatihan & Pengembangan</li>
                    </ul>
                </div>

                <div class="group bg-gradient-to-br from-green-50 to-teal-50 p-8 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service2_title">Pengendalian Hama</h3>
                    <p class="text-gray-600 leading-relaxed mb-4" data-translate="service2_desc">Layanan manajemen pengendalian hama profesional untuk menjaga lingkungan yang aman dan sehat untuk bisnis Anda.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Perawatan Preventif</li>
                        <li>• Pemantauan Berkala</li>
                        <li>• Solusi Ramah Lingkungan</li>
                    </ul>
                </div>

                <div class="group bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-3xl hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-gray-800" data-translate="service3_title">Pencahayaan LED & Kebersihan</h3>
                    <p class="text-gray-600 leading-relaxed mb-4" data-translate="service3_desc">Layanan kebersihan komprehensif dan solusi pencahayaan LED hemat energi untuk operasi bisnis yang optimal.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li>• Kebersihan Kantor</li>
                        <li>• Instalasi LED</li>
                        <li>• Layanan Pemeliharaan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-0 w-48 h-48 bg-blue-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-white via-orange-300 to-red-300 bg-clip-text text-transparent" data-translate="vision_mission_title">
                    Visi & Misi
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-translate="vision_mission_subtitle">
                    Prinsip panduan kami yang mendorong kami menuju keunggulan dan pertumbuhan berkelanjutan dalam segala yang kami lakukan.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Vision Card -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-orange-600 to-red-600 rounded-3xl transform rotate-1 group-hover:rotate-2 transition-transform duration-300"></div>
                    <div class="relative bg-white text-gray-800 p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-1">
                        <div class="flex items-center mb-8">
                            <div class="bg-gradient-to-r from-orange-500 to-red-500 w-14 h-14 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-eye text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-orange-600" data-translate="vision_title">Visi Kami</h3>
                        </div>
                        <p class="text-gray-700 leading-relaxed text-lg" data-translate="vision_text">
                            Menjadi perusahaan outsourcing yang terpercaya dan profesional yang menyediakan solusi inovatif dan berkontribusi pada pertumbuhan bisnis berkelanjutan untuk semua mitra dan pemangku kepentingan kami.
                        </p>
                        <!-- Decorative elements -->
                        <div class="absolute top-4 right-4 w-6 h-6 bg-orange-200 rounded-full opacity-50"></div>
                        <div class="absolute bottom-6 left-6 w-4 h-4 bg-red-200 rounded-full opacity-30"></div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="relative group">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-600 to-purple-600 rounded-3xl transform -rotate-1 group-hover:-rotate-2 transition-transform duration-300"></div>
                    <div class="relative bg-white text-gray-800 p-10 rounded-3xl shadow-2xl hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-1">
                        <div class="flex items-center mb-8">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-500 w-14 h-14 rounded-2xl flex items-center justify-center mr-4">
                                <i class="fas fa-rocket text-white text-xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-blue-600" data-translate="mission_title">Misi Kami</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-3 group/item">
                                <div class="w-2 h-2 bg-blue-500 rounded-full mt-3 group-hover/item:scale-150 transition-transform"></div>
                                <p class="text-gray-700 leading-relaxed" data-translate="mission_point1">
                                    Memberikan layanan outsourcing berkualitas tinggi dengan integritas dan profesionalisme.
                                </p>
                            </div>
                            <div class="flex items-start space-x-3 group/item">
                                <div class="w-2 h-2 bg-purple-500 rounded-full mt-3 group-hover/item:scale-150 transition-transform"></div>
                                <p class="text-gray-700 leading-relaxed" data-translate="mission_point2">
                                    Mendukung klien dengan tenaga kerja yang dapat diandalkan dan manajemen HR yang efektif.
                                </p>
                            </div>
                            <div class="flex items-start space-x-3 group/item">
                                <div class="w-2 h-2 bg-green-500 rounded-full mt-3 group-hover/item:scale-150 transition-transform"></div>
                                <p class="text-gray-700 leading-relaxed" data-translate="mission_point3">
                                    Menyediakan solusi berkelanjutan dalam Pengendalian Hama, Kebersihan, dan Pencahayaan.
                                </p>
                            </div>
                            <div class="flex items-start space-x-3 group/item">
                                <div class="w-2 h-2 bg-orange-500 rounded-full mt-3 group-hover/item:scale-150 transition-transform"></div>
                                <p class="text-gray-700 leading-relaxed" data-translate="mission_point4">
                                    Memberdayakan karyawan melalui pelatihan dan pengembangan karir.
                                </p>
                            </div>
                        </div>
                        <!-- Decorative elements -->
                        <div class="absolute top-4 left-4 w-6 h-6 bg-blue-200 rounded-full opacity-50"></div>
                        <div class="absolute bottom-6 right-6 w-4 h-4 bg-purple-200 rounded-full opacity-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Values -->
    <section class="py-24 bg-gradient-to-br from-white to-gray-50 relative overflow-hidden">
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent" data-translate="values_title">
                    Nilai-Nilai Inti Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="values_subtitle">
                    Prinsip-prinsip fundamental yang memandu tindakan kami dan menentukan budaya perusahaan kami.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-orange-100 to-red-100 w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-handshake text-orange-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800" data-translate="value1_title">Integritas</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="value1_desc">Kami menjalankan bisnis dengan kejujuran, transparansi, dan prinsip-prinsip etika.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-blue-100 to-cyan-100 w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-award text-blue-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800" data-translate="value2_title">Keunggulan</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="value2_desc">Kami berusaha untuk mencapai standar tertinggi dalam segala hal yang kami berikan.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-green-100 to-teal-100 w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-lightbulb text-green-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800" data-translate="value3_title">Inovasi</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="value3_desc">Kami merangkul ide-ide baru dan teknologi untuk meningkatkan layanan kami.</p>
                </div>

                <div class="text-center group">
                    <div class="bg-gradient-to-br from-purple-100 to-pink-100 w-20 h-20 rounded-3xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
                        <i class="fas fa-heart text-purple-600 text-3xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3 text-gray-800" data-translate="value4_title">Komitmen</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="value4_desc">Kami berdedikasi untuk membangun kemitraan jangka panjang dengan klien kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Leadership -->
    <section class="py-24 bg-gradient-to-br from-gray-100 to-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-72 h-72 bg-gradient-to-br from-orange-200/20 to-red-200/20 rounded-full transform translate-x-36 -translate-y-36"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="leadership_title">
                    Keunggulan Kepemimpinan
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="leadership_subtitle">
                    Tim kepemimpinan berpengalaman kami mendorong inovasi dan memastikan pemberian layanan luar biasa di semua unit bisnis.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-orange-400 to-red-500 rounded-full mx-auto flex items-center justify-center text-white text-4xl font-bold shadow-2xl group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800" data-translate="leader1_title">Kepemimpinan Eksekutif</h3>
                    <p class="text-gray-600 mb-4" data-translate="leader1_desc">Visi strategis dan keunggulan bisnis</p>
                    <div class="flex justify-center space-x-2">
                        <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                    </div>
                </div>

                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-blue-400 to-cyan-500 rounded-full mx-auto flex items-center justify-center text-white text-4xl font-bold shadow-2xl group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800" data-translate="leader2_title">Manajemen Operasional</h3>
                    <p class="text-gray-600 mb-4" data-translate="leader2_desc">Keunggulan dan efisiensi operasional</p>
                    <div class="flex justify-center space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-cyan-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                    </div>
                </div>

                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-teal-500 rounded-full mx-auto flex items-center justify-center text-white text-4xl font-bold shadow-2xl group-hover:scale-110 transition-all duration-300">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-500 rounded-full border-4 border-white"></div>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-800" data-translate="leader3_title">Pengembangan HR</h3>
                    <p class="text-gray-600 mb-4" data-translate="leader3_desc">Pengembangan dan pertumbuhan orang</p>
                    <div class="flex justify-center space-x-2">
                        <div class="w-2 h-2 bg-green-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-teal-400 rounded-full"></div>
                        <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Clients Section -->
    <section class="py-24 bg-gradient-to-br from-white via-gray-50 to-gray-100 relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-96 h-96 bg-gradient-to-br from-orange-100/30 to-red-100/30 rounded-full transform -translate-x-48 -translate-y-48"></div>
            <div class="absolute bottom-0 right-0 w-80 h-80 bg-gradient-to-tl from-blue-100/30 to-cyan-100/30 rounded-full transform translate-x-40 translate-y-40"></div>
            <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-gradient-to-r from-green-100/20 to-teal-100/20 rounded-full transform -translate-x-32 -translate-y-32"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="clients_title">
                    Klien Terpercaya Kami
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed" data-translate="clients_subtitle">
                    Kami bangga bermitra dengan perusahaan-perusahaan terkemuka di berbagai industri, memberikan solusi outsourcing luar biasa dan membangun hubungan kepercayaan jangka panjang.
                </p>
            </div>

            <!-- Client Logos Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 mb-16" x-data="{
            showModal: false,
            currentClient: null,
            clients: {
                'lippoinsurance': {
                    name: 'Lippo Insurance',
                    logo: 'assets/images/clients/lippo.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'blue' },
                        { name: 'Pest Control', icon: 'fas fa-bug', color: 'green' },
                        { name: 'Security', icon: 'fas fa-shield-alt', color: 'red' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'orange' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'purple' },
                        { name: 'Sales & Marketing', icon: 'fas fa-chart-line', color: 'cyan' },
                        { name: 'Parking Service', icon: 'fas fa-parking', color: 'yellow' },
                        { name: 'Data Entry', icon: 'fas fa-keyboard', color: 'pink' },
                        { name: 'Customer Service', icon: 'fas fa-headset', color: 'teal' }
                    ],
                    description: 'Kerjasama dengan Lippo Insurance dalam menyediakan berbagai layanan operasional dan dukungan bisnis dengan cakupan nasional.'
                },
                'pertani': {
                    name: 'Pertani',
                    logo: 'assets/images/clients/pertani.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'green' },
                        { name: 'Pest Control', icon: 'fas fa-bug', color: 'red' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'blue' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'orange' },
                        { name: 'Receptionist', icon: 'fas fa-concierge-bell', color: 'purple' },
                        { name: 'Parking Service', icon: 'fas fa-parking', color: 'yellow' },
                        { name: 'Customer Service', icon: 'fas fa-headset', color: 'cyan' }
                    ],
                    description: 'Mendukung operasional Pertani dengan berbagai layanan fasilitas dan dukungan administratif di wilayah Jabodetabek.'
                },
                'harapanbunda': {
                    name: 'RS. Harapan Bunda',
                    logo: 'assets/images/clients/harapanbunda.png',
                    coverage: 'Pest & Rodent Control',
                    services: [
                        { name: 'Pest Control Specialist', icon: 'fas fa-bug', color: 'green' },
                        { name: 'Rodent Control', icon: 'fas fa-mouse', color: 'red' },
                        { name: 'Sanitization', icon: 'fas fa-spray-can', color: 'blue' },
                        { name: 'Maintenance', icon: 'fas fa-tools', color: 'orange' }
                    ],
                    description: 'Spesialis pengendalian hama dan tikus untuk menjaga standar kebersihan dan keamanan di lingkungan rumah sakit.'
                },
                'jne': {
                    name: 'JNE Express',
                    logo: 'assets/images/clients/jne.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Helper Gudang', icon: 'fas fa-warehouse', color: 'blue' },
                        { name: 'Pelaksana Gudang (Freelance)', icon: 'fas fa-boxes', color: 'orange' },
                        { name: 'Driver', icon: 'fas fa-truck', color: 'green' },
                        { name: 'Kurir', icon: 'fas fa-shipping-fast', color: 'red' }
                    ],
                    description: 'Menyediakan tenaga operasional untuk mendukung layanan pengiriman JNE di wilayah Jabodetabek.'
                },
                'jnt': {
                    name: 'J&T Express',
                    logo: '/assets/images/clients/jnt.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Resepsionis', icon: 'fas fa-concierge-bell', color: 'purple' },
                        { name: 'Staff Gudang', icon: 'fas fa-warehouse', color: 'blue' },
                        { name: 'Pelaksana Gudang (Freelance)', icon: 'fas fa-boxes', color: 'orange' },
                        { name: 'Driver', icon: 'fas fa-truck', color: 'green' }
                    ],
                    description: 'Dukungan operasional komprehensif untuk J&T Express meliputi front office, warehouse, dan logistik.'
                },
                'jds': {
                    name: 'JDS - PT Jelajah Data Semesta',
                    logo: 'assets/images/clients/jds.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Building Acquisition', icon: 'fas fa-building', color: 'blue' },
                        { name: 'Supervisor Marketing Acquisition', icon: 'fas fa-user-plus', color: 'green' },
                        { name: 'Team Leader SPG', icon: 'fas fa-users', color: 'purple' },
                        { name: 'Marketing Acquisition', icon: 'fas fa-chart-line', color: 'orange' },
                        { name: 'SPG', icon: 'fas fa-female', color: 'pink' }
                    ],
                    description: 'Mendukung JDS dalam ekspansi dan akuisisi pasar dengan tim marketing dan sales profesional di seluruh Indonesia.'
                },
                'fastock': {
                    name: 'Fastock',
                    logo: 'assets/images/clients/fastock.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Helper Gudang', icon: 'fas fa-warehouse', color: 'red' },
                        { name: 'Admin Gudang', icon: 'fas fa-clipboard', color: 'blue' },
                        { name: 'Customer Service', icon: 'fas fa-headset', color: 'green' },
                        { name: 'Consultan Executive B2B', icon: 'fas fa-handshake', color: 'purple' }
                    ],
                    description: 'Menyediakan dukungan operasional gudang dan layanan konsultasi B2B untuk Fastock di wilayah Jabodetabek.'
                },
                'imoo': {
                    name: 'imoo',
                    logo: 'assets/images/clients/imoo.png',
                    coverage: 'Regional Coverage',
                    services: [
                        { name: 'Storage Support', icon: 'fas fa-database', color: 'orange' },
                        { name: 'Pelaksana Gudang (Freelance)', icon: 'fas fa-boxes', color: 'blue' }
                    ],
                    description: 'Dukungan penyimpanan dan pengelolaan gudang untuk produk imoo dengan cakupan regional.'
                },
                'kalbe': {
                    name: 'Kalbe',
                    logo: 'assets/images/clients/kalbe.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Telesales', icon: 'fas fa-phone', color: 'green' },
                        { name: 'Outbound Call', icon: 'fas fa-phone-alt', color: 'blue' },
                        { name: 'Inbound Call', icon: 'fas fa-headset', color: 'purple' },
                        { name: 'Data Entry', icon: 'fas fa-keyboard', color: 'orange' },
                        { name: 'Customer Service', icon: 'fas fa-users', color: 'cyan' }
                    ],
                    description: 'Mendukung Kalbe dengan layanan call center, telesales, dan customer service berskala nasional.'
                },
                'balitower': {
                name: 'Bali Tower & Balifiber',
                logo: 'assets/images/clients/balitower.png',
                coverage: 'Multi-Regional & Multi-Service Provider',
                services: [
                { name: 'Direct Sales', icon: 'fas fa-handshake', color: 'blue' },
                { name: 'Call Center', icon: 'fas fa-headset', color: 'green' },
                { name: 'Tele Sales', icon: 'fas fa-phone', color: 'purple' },
                { name: 'IKR (Teknisi)', icon: 'fas fa-tools', color: 'orange' },
                { name: 'Trouble Shoot', icon: 'fas fa-wrench', color: 'red' },
                { name: 'Jointer Shift', icon: 'fas fa-clock', color: 'indigo' },
                { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'yellow' },
                { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'pink' },
                { name: 'Receptionist', icon: 'fas fa-concierge-bell', color: 'teal' },
                { name: 'Surveyor', icon: 'fas fa-map-marked-alt', color: 'cyan' },
                { name: 'Waspang Civil', icon: 'fas fa-hard-hat', color: 'amber' },
                { name: 'Waspang Corporate', icon: 'fas fa-building', color: 'slate' },
                { name: 'Waspang CME', icon: 'fas fa-cog', color: 'emerald' },
                { name: 'Waspang FO', icon: 'fas fa-eye', color: 'rose' },
                { name: 'Helper', icon: 'fas fa-hands-helping', color: 'lime' },
                { name: 'Asset Property Management', icon: 'fas fa-home', color: 'violet' },
                { name: 'Logistic', icon: 'fas fa-truck', color: 'sky' },
                { name: 'Sales KSO', icon: 'fas fa-handshake-alt', color: 'fuchsia' },
                { name: 'Sales Force', icon: 'fas fa-users', color: 'mint' },
                { name: 'Sales Support', icon: 'fas fa-user-plus', color: 'coral' },
                { name: 'Sitac', icon: 'fas fa-shield-alt', color: 'navy' },
                { name: 'Admin Support', icon: 'fas fa-clipboard', color: 'gold' },
                { name: 'Assistant Manager FO', icon: 'fas fa-user-cog', color: 'crimson' },
                { name: 'Data Center', icon: 'fas fa-server', color: 'darkgreen' }
                ],
                description: 'Comprehensive support untuk Bali Tower dan Bali fiber meliputi sales, technical, operational, management, dan specialized services di berbagai wilayah dengan layanan internet fiber dan infrastruktur telekomunikasi.'
                },
                'myrepublic': {
                    name: 'MyRepublic',
                    logo: 'assets/images/clients/myrep.png',
                    coverage: 'Multi-Regional Coverage',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-chart-line', color: 'purple' },
                        { name: 'Regional Coverage', icon: 'fas fa-map-marked-alt', color: 'pink' }
                    ],
                    description: 'Mendukung ekspansi MyRepublic dengan tim direct sales profesional di berbagai wilayah strategis.'
                },
                'greenet': {
                    name: 'Greenet',
                    logo: 'assets/images/clients/greenet.png',
                    coverage: 'Technical Support',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-chart-line', color: 'green' },
                        { name: 'IKR (Teknisi)', icon: 'fas fa-tools', color: 'blue' }
                    ],
                    description: 'Dukungan teknis dan penjualan untuk Greenet dalam pengembangan infrastruktur fiber optik.'
                },
                'cbnfiber': {
                    name: 'CBN Fiber',
                    logo: '/assets/images/clients/cbn.png',
                    coverage: 'Regional Coverage',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-handshake', color: 'blue' },
                        { name: 'Admin Sales', icon: 'fas fa-clipboard', color: 'cyan' }
                    ],
                    description: 'Mendukung CBN Fiber dengan tim sales dan administrasi untuk ekspansi layanan internet berkecepatan tinggi.'
                },
                'tracon': {
                    name: 'Tracon',
                    logo: 'assets/images/clients/tracon.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'blue' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'orange' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'green' },
                        { name: 'Receptionist', icon: 'fas fa-concierge-bell', color: 'purple' },
                        { name: 'Pest Control', icon: 'fas fa-bug', color: 'red' }
                    ],
                    description: 'Layanan fasilitas dan operasional komprehensif untuk Tracon di wilayah Jabodetabek.'
                },
                'sriwijayaair': {
                    name: 'Sriwijaya Air',
                    logo: 'assets/images/clients/sriwijaya.png',
                    coverage: 'Tangerang Coverage',
                    services: [
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'gold' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'blue' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'green' },
                        { name: 'Pest Control', icon: 'fas fa-bug', color: 'red' }
                    ],
                    description: 'Mendukung operasional Sriwijaya Air dengan layanan kebersihan dan fasilitas di area Tangerang.'
                },
                'pizzahut': {
                    name: 'Pizza Hut',
                    logo: 'assets/images/clients/pizzahut.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Termite Control', icon: 'fas fa-bug', color: 'red' },
                        { name: 'Maintenance', icon: 'fas fa-tools', color: 'orange' },
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'blue' },
                        { name: 'Supplier Services', icon: 'fas fa-truck', color: 'green' }
                    ],
                    description: 'Layanan maintenance dan pest control untuk outlet Pizza Hut di seluruh Indonesia.'
                },
                'phd': {
                    name: 'PHD',
                    logo: 'assets/images/clients/phd.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Maintenance', icon: 'fas fa-tools', color: 'orange' },
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'blue' }
                    ],
                    description: 'Dukungan maintenance dan cleaning service untuk jaringan PHD secara nasional.'
                },
                'marugameudon': {
                    name: 'Marugame Udon',
                    logo: 'assets/images/clients/marugame.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Maintenance', icon: 'fas fa-tools', color: 'red' },
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'blue' }
                    ],
                    description: 'Layanan maintenance dan kebersihan untuk seluruh outlet Marugame Udon di Indonesia.'
                },
                'hokben': {
                    name: 'HokBen',
                    logo: 'assets/images/clients/hokben.png',
                    coverage: 'Jabodetabek & Lampung Coverage',
                    services: [
                        { name: 'Driver', icon: 'fas fa-car', color: 'orange' },
                        { name: 'Dispatcher', icon: 'fas fa-headset', color: 'blue' },
                        { name: 'Staff Administration', icon: 'fas fa-clipboard', color: 'green' }
                    ],
                    description: 'Mendukung operasional HokBen dengan driver, dispatcher, dan staff administrasi di Jabodetabek dan Lampung.'
                },
                'siloamclinic': {
                    name: 'Siloam Clinic',
                    logo: 'assets/images/clients/siloam.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Consultant Advisor', icon: 'fas fa-user-md', color: 'blue' },
                        { name: 'Corporate Support', icon: 'fas fa-building', color: 'green' },
                        { name: 'Business Development', icon: 'fas fa-chart-growth', color: 'purple' }
                    ],
                    description: 'Menyediakan tenaga konsultan dan business development untuk pengembangan jaringan Siloam Clinic.'
                },
                'lonsum': {
                    name: 'Lonsum',
                    logo: 'assets/images/clients/lonsum.png',
                    coverage: 'National Coverage',
                    services: [
                        { name: 'Sales Coordinator', icon: 'fas fa-users', color: 'green' },
                        { name: 'Sales Canvaser', icon: 'fas fa-handshake', color: 'blue' },
                        { name: 'SPG & SPB', icon: 'fas fa-female', color: 'pink' },
                        { name: 'Sales Support Staff', icon: 'fas fa-chart-line', color: 'orange' }
                    ],
                    description: 'Tim sales komprehensif untuk mendukung distribusi produk Lonsum di seluruh Indonesia.'
                },
                'miwon': {
                    name: 'Miwon',
                    logo: 'assets/images/clients/miwon.png',
                    coverage: 'Regional Coverage',
                    services: [
                        { name: 'Receptionist', icon: 'fas fa-concierge-bell', color: 'red' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'blue' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'green' }
                    ],
                    description: 'Dukungan operasional kantor untuk Miwon meliputi front office dan support services.'
                },
                'pg': {
                    name: 'P&G',
                    logo: 'assets/images/clients/p&g.png',
                    coverage: 'Regional Coverage',
                    services: [
                        { name: 'Sales Motoris', icon: 'fas fa-motorcycle', color: 'blue' }
                    ],
                    description: 'Tim sales motoris untuk mendukung distribusi produk P&G di wilayah regional.'
                }
            }
        }">
                <!-- Generate client cards dynamically -->
                <template x-for="(client, key) in clients" :key="key">
                    <div @click="currentClient = client; showModal = true" class="group bg-white rounded-2xl p-4 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 cursor-pointer">
                        <div class="flex items-center justify-center h-16 relative mb-3">
                            <div class="w-12 h-12 bg-gray-200 rounded-xl flex items-center justify-center overflow-hidden">
                                <template x-if="client.logo">
                                    <img :src="client.logo" :alt="client.name" class="w-full h-full object-contain" />
                                </template>
                                <template x-if="!client.logo">
                                    <i class="fas fa-building text-gray-400 text-lg"></i>
                                </template>
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-500/0 to-red-500/0 group-hover:from-orange-500/10 group-hover:to-red-500/10 rounded-xl transition-all duration-500"></div>
                        </div>

                        <div class="text-center">
                            <h4 x-text="client.name" class="font-semibold text-gray-800 group-hover:text-orange-600 transition-colors text-sm mb-1"></h4>
                            <p x-text="client.coverage" class="text-xs text-gray-500 mb-2"></p>
                            <p class="text-xs text-gray-400 opacity-0 group-hover:opacity-100 transition-opacity">Klik untuk detail</p>
                        </div>
                    </div>
                </template>

                <!-- Modal Pop-up -->
                <div x-show="showModal"
                    x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm px-4"
                    @click.self="showModal = false">

                    <div x-show="showModal"
                        x-transition:enter="transition ease-out duration-300 transform"
                        x-transition:enter-start="opacity-0 scale-95 translate-y-4"
                        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200 transform"
                        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
                        x-transition:leave-end="opacity-0 scale-95 translate-y-4"
                        class="bg-white rounded-3xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-y-auto">

                        <!-- Modal Header -->
                        <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white p-6 rounded-t-3xl">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                    <div class="bg-white p-3 rounded-2xl flex items-center justify-center w-14 h-14 overflow-hidden">
                                        <template x-if="currentClient?.logo">
                                            <img :src="currentClient.logo" :alt="currentClient.name" class="w-full h-full object-contain" />
                                        </template>
                                        <template x-if="!currentClient?.logo">
                                            <i class="fas fa-building text-orange-500 text-2xl"></i>
                                        </template>
                                    </div>

                                    <div>
                                        <h3 x-text="currentClient?.name" class="text-2xl font-bold"></h3>
                                        <p x-text="currentClient?.coverage" class="text-orange-100 font-medium"></p>
                                    </div>
                                </div>
                                <button @click="showModal = false" class="text-white hover:bg-white/20 p-2 rounded-full transition-colors">
                                    <i class="fas fa-times text-xl"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Modal Content -->
                        <div class="p-8">
                            <!-- Description -->
                            <div class="mb-8">
                                <h4 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                                    <i class="fas fa-handshake text-orange-500 mr-3"></i>
                                    Kerjasama Kami
                                </h4>
                                <p x-text="currentClient?.description" class="text-gray-600 leading-relaxed text-lg"></p>
                            </div>

                            <!-- Services Grid -->
                            <div class="mb-6">
                                <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                                    <i class="fas fa-cogs text-blue-500 mr-3"></i>
                                    Layanan yang Disediakan
                                </h4>
                                <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4">
                                    <template x-for="service in currentClient?.services || []" :key="service.name">
                                        <div class="service-card bg-gradient-to-br from-gray-50 to-white border border-gray-200 rounded-2xl p-6 text-center hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1">
                                            <div class="w-14 h-14 bg-gradient-to-r from-orange-400 to-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                                <i :class="service.icon" class="text-white text-xl"></i>
                                            </div>
                                            <h5 x-text="service.name" class="font-semibold text-gray-800 text-sm"></h5>
                                        </div>
                                    </template>
                                </div>
                            </div>

                            <!-- Contact CTA -->
                            <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-6 text-center">
                                <h5 class="text-lg font-semibold text-gray-800 mb-2">Tertarik dengan Layanan Serupa?</h5>
                                <p class="text-gray-600 mb-4">Hubungi kami untuk konsultasi kebutuhan tenaga kerja perusahaan Anda</p>
                                <div class="flex flex-wrap gap-4 justify-center">
                                    <a href="/contact" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center">
                                        <i class="fas fa-phone mr-2"></i>
                                        Hubungi Kami
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client Testimonial or Partnership Stats -->
        <div class="bg-gradient-to-r from-orange-50 via-red-50 to-pink-50 rounded-3xl p-8 md:p-12">
            <div class="text-center">
                <div class="grid md:grid-cols-3 gap-8 mb-8">
                    <div class="group">
                        <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300">
                            <i class="fas fa-handshake text-3xl mb-3"></i>
                            <div class="text-3xl font-bold mb-1">100+</div>
                            <div class="text-sm opacity-90" data-translate="client_stats_partners_label">Mitra Terpercaya</div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300">
                            <i class="fas fa-award text-3xl mb-3"></i>
                            <div class="text-3xl font-bold mb-1">98%</div>
                            <div class="text-sm opacity-90" data-translate="client_stats_satisfaction_label">Kepuasan Klien</div>
                        </div>
                    </div>
                    <div class="group">
                        <div class="bg-gradient-to-br from-green-500 to-teal-500 text-white rounded-2xl p-6 transform hover:scale-105 transition-all duration-300">
                            <i class="fas fa-sync-alt text-3xl mb-3"></i>
                            <div class="text-3xl font-bold mb-1">85%</div>
                            <div class="text-sm opacity-90" data-translate="client_stats_renewal_label">Tingkat Perpanjangan</div>
                        </div>
                    </div>
                </div>
                <div class="max-w-3xl mx-auto">
                    <p class="text-lg text-gray-700 leading-relaxed italic" data-translate="client_testimonial">
                        "Kesuksesan kami diukur dari kepercayaan yang diberikan klien kepada kami. Kami berkomitmen untuk memberikan keunggulan dalam setiap kemitraan, memastikan pertumbuhan berkelanjutan untuk bisnis di seluruh Jawa, Bali, dan Sumatera."
                    </p>
                    <div class="mt-6">
                        <div class="w-16 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white relative overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/10 rounded-full animate-float"></div>
            <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-white/5 rounded-full animate-float" style="animation-delay: -3s;"></div>
        </div>

        <div class="relative max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-6" data-translate="cta_title">Siap Bermitra dengan Kami?</h2>
            <p class="text-xl mb-10 opacity-90 leading-relaxed" data-translate="cta_subtitle">
                Temukan bagaimana keahlian dan komitmen kami dapat mendorong bisnis Anda maju. Mari membangun kesuksesan bersama.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="/contact" class="group bg-white text-orange-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3">
                    <span data-translate="cta_contact">Bergabung dengan Tim Kami</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <a href="/career" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-3">
                    <span data-translate="cta_career">Bergabung dengan Tim Kami</span>
                    <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                </a>
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
                                <a href="/" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span data-translate="nav_home">Beranda</span>
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full "></div>
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
                <h3 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 leading-tight md:leading-[1.35] bg-clip-text text-transparent" data-translate="footer_services">
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
                        <a href="https://wa.me/6282246842008" class="group w-12 h-12 bg-gradient-to-r from-green-600 to-green-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
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
