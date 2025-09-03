<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia - News</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        [x-cloak] {
            display: none !important
        }

        .slide-active {
            transform: translateY(-2px) scale(1.08);
            box-shadow: 0 2px 8px 0 rgba(255, 102, 0, 0.15);
            transition: all 0.3s;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4,0,0.6,1) infinite',
                        'slide-up': 'slideUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
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
                        }
                    }
                }
            }
        }

        // Translation data for Eastern Indonesia Expansion Article
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
                breadcrumb_current: 'PT. Enlulu Sukses Makmur Memperluas Operasi ke Indonesia Timur',

                // Article
                article_title: 'PT. Enlulu Sukses Makmur Memperluas Operasi ke Indonesia Timur',
                article_subtitle: 'Langkah strategis untuk memperkuat ekosistem tenaga kerja Indonesia',
                article_date: '15 Januari 2025',
                article_read_time: '5 menit baca',
                article_views: '1.247 kali dilihat',
                article_category: 'Berita Perusahaan',
                featured_story: 'Berita Utama',

                // Article Content
                content_intro: 'Dalam langkah strategis untuk memperluas jangkauan dan memperkuat ekosistem tenaga kerja Indonesia, PT. Enlulu Sukses Makmur dengan bangga mengumumkan ekspansi layanan outsourcing komprehensif kami ke Indonesia Timur, menandai pencapaian penting dalam perjalanan kami menuju keunggulan nasional.',

                content_section1_title: 'Gambaran Ekspansi Strategis',
                content_section1_text1: 'Ekspansi ini mewakili lebih dari sekadar pertumbuhan geografis—ini mewujudkan komitmen kami untuk membawa solusi outsourcing kelas dunia ke pasar berkembang di seluruh Indonesia. Operasi baru kami di Indonesia Timur akan mencakup rangkaian lengkap layanan kami, termasuk outsourcing tenaga kerja, manajemen SDM, program pelatihan, manajemen pengendalian hama, layanan kebersihan, dan solusi pencahayaan LED.',
                content_section1_text2: 'Keputusan untuk ekspansi ke timur datang setelah riset dan analisis pasar yang komprehensif, yang mengungkapkan permintaan signifikan untuk layanan outsourcing profesional di wilayah termasuk Sulawesi, Maluku, dan Papua. Daerah-daerah ini menunjukkan potensi luar biasa untuk pertumbuhan dan pengembangan bisnis, menciptakan lingkungan ideal untuk layanan khusus kami.',

                content_section2_title: 'Menciptakan Peluang untuk Pertumbuhan',
                content_section2_text1: 'Ekspansi kami akan menciptakan lebih dari 3.000 peluang kerja baru di berbagai tingkat keterampilan dan industri. Kami secara khusus fokus pada perekrutan talenta lokal dan menyediakan program pelatihan komprehensif untuk memastikan standar layanan tertinggi sambil berkontribusi pada pengembangan ekonomi regional.',
                content_section2_text2: 'Operasi baru akan ditempatkan secara strategis di pusat-pusat ekonomi kunci, memungkinkan kami melayani bisnis yang sudah mapan dan perusahaan berkembang yang mencari mitra outsourcing yang dapat diandalkan. Diversifikasi geografis ini juga memperkuat ketahanan dan kemampuan kami untuk melayani klien secara nasional.',
                content_section2_jobs: 'Peluang Kerja Baru',
                content_section2_offices: 'Lokasi Kantor Baru',
                content_section2_partnerships: 'Kemitraan Lokal',

                content_section3_title: 'Portofolio Layanan Komprehensif',
                content_section3_text1: 'Operasi Indonesia Timur kami akan menawarkan rangkaian lengkap layanan PT. Enlulu Sukses Makmur, yang disesuaikan untuk memenuhi kebutuhan unik pasar regional:',
                content_section3_text2: 'Setiap layanan akan disesuaikan untuk mengatasi tantangan dan peluang spesifik yang ada di pasar Indonesia Timur, memastikan efektivitas maksimum dan kepuasan klien.',
                content_section3_manpower_title: 'Solusi Tenaga Kerja',
                content_section3_manpower_item1: '• Rekrutmen dan seleksi profesional',
                content_section3_manpower_item2: '• Manajemen SDM komprehensif',
                content_section3_manpower_item3: '• Program pelatihan dan pengembangan keterampilan',
                content_section3_manpower_item4: '• Sistem manajemen kinerja',
                content_section3_facility_title: 'Manajemen Fasilitas',
                content_section3_facility_item1: '• Sistem pengendalian hama canggih',
                content_section3_facility_item2: '• Layanan kebersihan profesional',
                content_section3_facility_item3: '• Pencahayaan LED hemat energi',
                content_section3_facility_item4: '• Layanan pemeliharaan dan dukungan',

                content_section4_title: 'Komitmen Kepemimpinan',
                content_section4_quote: 'Ekspansi ini mewakili komitmen teguh kami terhadap pembangunan ekonomi Indonesia dan keyakinan kami pada potensi luar biasa pasar Indonesia Timur. Kami tidak hanya mendirikan kantor baru—kami membangun kemitraan yang langgeng dan berkontribusi pada pertumbuhan regional yang berkelanjutan.',
                content_section4_author: 'Direktur Utama, PT. Enlulu Sukses Makmur',

                content_section5_title: 'Timeline Implementasi',
                content_section5_phase1_title: 'Fase 1: Pengembangan Infrastruktur (Q1 2025)',
                content_section5_phase1_desc: 'Pendirian kantor pusat regional dan lokasi kantor awal di kota-kota besar.',
                content_section5_phase2_title: 'Fase 2: Rekrutmen Tim (Q2 2025)',
                content_section5_phase2_desc: 'Program rekrutmen dan pelatihan intensif untuk manajemen lokal dan tim operasional.',
                content_section5_phase3_title: 'Fase 3: Peluncuran Layanan (Q3 2025)',
                content_section5_phase3_desc: 'Peluncuran layanan resmi dengan kemampuan operasional penuh di semua unit bisnis.',

                content_section6_title: 'Melihat ke Depan',
                content_section6_text1: 'Ekspansi strategis ini memposisikan PT. Enlulu Sukses Makmur sebagai pemimpin outsourcing nasional yang sesungguhnya, dengan cakupan komprehensif di Jawa, Bali, Sumatra, dan kini Indonesia Timur. Kehadiran geografis yang diperkuat memungkinkan kami melayani klien yang ada dengan lebih baik sambil membuka pintu untuk kemitraan dan peluang baru.',
                content_section6_text2: 'Kami tetap berkomitmen pada nilai-nilai inti integritas, keunggulan, inovasi, dan dedikasi sambil menyesuaikan pendekatan kami untuk memenuhi kebutuhan unik dan nuansa budaya setiap wilayah yang kami layani. Ekspansi ini memperkuat posisi kami sebagai penyedia solusi outsourcing terkemuka di Indonesia.',
                content_section6_cta_title: 'Siap Bermitra dengan Kami?',
                content_section6_cta_subtitle: 'Temukan bagaimana kemampuan kami yang diperluas dapat mendukung pertumbuhan bisnis Anda di seluruh Indonesia.',
                content_section6_contact: 'Hubungi Kami Hari Ini',
                content_section6_learn_more: 'Pelajari Lebih Lanjut Tentang Kami',

                // Share and Tags
                share_text: 'Bagikan artikel ini:',
                tags_text: 'Tag:',
                tag_expansion: 'Ekspansi',
                tag_eastern_indonesia: 'Indonesia Timur',
                tag_growth: 'Pertumbuhan',

                // Related Articles
                related_title: 'Berita Terkait',
                related_read_more: 'Baca Selengkapnya',
                related_article1_title: 'Program Pelatihan Baru Diluncurkan',
                related_article1_desc: 'Inisiatif pengembangan keterampilan komprehensif...',
                related_article2_title: 'Sertifikasi ISO Diraih',
                related_article2_desc: 'Pengakuan standar manajemen kualitas...',
                related_article3_title: 'Aliansi Strategis Dibentuk',
                related_article3_desc: 'Kolaborasi baru dengan pemimpin industri...',
                related_category1: 'Update Perusahaan',
                related_category2: 'Pencapaian',
                related_category3: 'Kemitraan',

                // Back to News
                back_to_news: 'Kembali ke Semua Berita',

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
                breadcrumb_current: 'PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia',

                // Article
                article_title: 'PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia',
                article_subtitle: 'Strategic move to strengthen Indonesia\'s workforce ecosystem',
                article_date: 'January 15, 2025',
                article_read_time: '5 min read',
                article_views: '1,247 views',
                article_category: 'Company News',
                featured_story: 'Featured Story',

                // Article Content
                content_intro: 'In a strategic move to broaden our reach and strengthen Indonesia\'s workforce ecosystem, PT. Enlulu Sukses Makmur proudly announces the expansion of our comprehensive outsourcing services to Eastern Indonesia, marking a significant milestone in our journey toward nationwide excellence.',

                content_section1_title: 'Strategic Expansion Overview',
                content_section1_text1: 'This expansion represents more than geographical growth—it embodies our commitment to bringing world-class outsourcing solutions to emerging markets across Indonesia. Our new operations in Eastern Indonesia will encompass our full suite of services, including manpower outsourcing, HR management, training programs, pest control management, cleaning services, and LED lighting solutions.',
                content_section1_text2: 'The decision to expand eastward comes after comprehensive market research and analysis, which revealed significant demand for professional outsourcing services in regions including Sulawesi, Maluku, and Papua. These areas show tremendous potential for business growth and development, creating an ideal environment for our specialized services.',

                content_section2_title: 'Creating Opportunities for Growth',
                content_section2_text1: 'Our expansion will create over 3,000 new employment opportunities across various skill levels and industries. We are particularly focused on recruiting local talent and providing comprehensive training programs to ensure the highest service standards while contributing to regional economic development.',
                content_section2_text2: 'The new operations will be strategically located in key economic centers, enabling us to serve both established businesses and emerging enterprises seeking reliable outsourcing partners. This geographic diversification also strengthens our resilience and ability to serve clients nationwide.',
                content_section2_jobs: 'New Job Opportunities',
                content_section2_offices: 'New Office Locations',
                content_section2_partnerships: 'Local Partnerships',

                content_section3_title: 'Comprehensive Service Portfolio',
                content_section3_text1: 'Our Eastern Indonesia operations will offer the complete range of PT. Enlulu Sukses Makmur services, tailored to meet the unique needs of regional markets:',
                content_section3_text2: 'Each service will be adapted to address the specific challenges and opportunities present in Eastern Indonesian markets, ensuring maximum effectiveness and client satisfaction.',
                content_section3_manpower_title: 'Manpower Solutions',
                content_section3_manpower_item1: '• Professional recruitment and selection',
                content_section3_manpower_item2: '• Comprehensive HR management',
                content_section3_manpower_item3: '• Skills training and development programs',
                content_section3_manpower_item4: '• Performance management systems',
                content_section3_facility_title: 'Facility Management',
                content_section3_facility_item1: '• Advanced pest control systems',
                content_section3_facility_item2: '• Professional cleaning services',
                content_section3_facility_item3: '• Energy-efficient LED lighting',
                content_section3_facility_item4: '• Maintenance and support services',

                content_section4_title: 'Leadership Commitment',
                content_section4_quote: 'This expansion represents our unwavering commitment to Indonesia\'s economic development and our belief in the tremendous potential of Eastern Indonesian markets. We\'re not just establishing new offices—we\'re building lasting partnerships and contributing to sustainable regional growth.',
                content_section4_author: 'Managing Director, PT. Enlulu Sukses Makmur',

                content_section5_title: 'Implementation Timeline',
                content_section5_phase1_title: 'Phase 1: Infrastructure Development (Q1 2025)',
                content_section5_phase1_desc: 'Establishment of regional headquarters and initial office locations in major cities.',
                content_section5_phase2_title: 'Phase 2: Team Recruitment (Q2 2025)',
                content_section5_phase2_desc: 'Intensive recruitment and training programs for local management and operational teams.',
                content_section5_phase3_title: 'Phase 3: Service Launch (Q3 2025)',
                content_section5_phase3_desc: 'Official service launch with full operational capabilities across all business units.',

                content_section6_title: 'Looking Forward',
                content_section6_text1: 'This strategic expansion positions PT. Enlulu Sukses Makmur as a truly national outsourcing leader, with comprehensive coverage across Java, Bali, Sumatra, and now Eastern Indonesia. Our enhanced geographic presence enables us to better serve existing clients while opening doors to new partnerships and opportunities.',
                content_section6_text2: 'We remain committed to our core values of integrity, excellence, innovation, and dedication while adapting our approach to meet the unique needs and cultural nuances of each region we serve. This expansion reinforces our position as Indonesia\'s premier outsourcing solutions provider.',
                content_section6_cta_title: 'Ready to Partner With Us?',
                content_section6_cta_subtitle: 'Discover how our expanded capabilities can support your business growth across Indonesia.',
                content_section6_contact: 'Contact Us Today',
                content_section6_learn_more: 'Learn More About Us',

                // Share and Tags
                share_text: 'Share this article:',
                tags_text: 'Tags:',
                tag_expansion: 'Expansion',
                tag_eastern_indonesia: 'Eastern Indonesia',
                tag_growth: 'Growth',

                // Related Articles
                related_title: 'Related News',
                related_read_more: 'Read More',
                related_article1_title: 'New Training Programs Launch',
                related_article1_desc: 'Comprehensive skill development initiatives...',
                related_article2_title: 'ISO Certification Achieved',
                related_article2_desc: 'Quality management standards recognition...',
                related_article3_title: 'Strategic Alliance Formed',
                related_article3_desc: 'New collaboration with industry leaders...',
                related_category1: 'Company Update',
                related_category2: 'Achievement',
                related_category3: 'Partnership',

                // Back to News
                back_to_news: 'Back to All News',

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

<body class="bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800 font-sans">

    <!-- Navbar -->
    <header x-data="{ open:false }" class="fixed w-full top-0 z-50 bg-white/80 backdrop-blur-xl shadow-lg border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-6 py-4">
            <a href="/" class="flex items-center space-x-2 group">
                <img src="/assets/images/enlulu.png" alt="Enlulu Logo" class="h-10 w-auto group-hover:scale-110 transition-transform duration-300">
            </a>
            <nav class="hidden md:flex space-x-8 font-medium">
                <a href="/" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_home">Home</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/about" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_about">About Us</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/news" class="relative text-orange-600 group">
                    <span data-translate="nav_news">News</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
                </a>
                <a href="/career" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_career">Career</span>
                    <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-orange-600 group-hover:w-full transition-all duration-300"></span>
                </a>
                <a href="/contact" class="relative hover:text-orange-600 transition-all duration-300 group">
                    <span data-translate="nav_contact">Contact Us</span>
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
        <div x-show="open" x-cloak x-transition class="md:hidden bg-white/95 backdrop-blur-xl shadow-lg border-t border-gray-200/50">
            <nav class="flex flex-col space-y-3 px-6 py-4 font-medium">
                <a href="/" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_home">Home</a>
                <a href="/about" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_about">About Us</a>
                <a href="/news" class="text-orange-600 py-2" data-translate="nav_news">News</a>
                <a href="/career" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_career">Career</a>
                <a href="/contact" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_contact">Contact Us</a>
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
                <span class="text-orange-600 font-medium" data-translate="breadcrumb_current">PT. Enlulu Sukses Makmur Memperluas Operasi ke Indonesia Timur</span>
            </nav>
        </div>
    </section>

    <!-- Article Header - Aligned with LED Smart Lighting Style -->
    <section class="py-16 bg-gradient-to-br from-blue-50 via-orange-50 to-red-50 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-blue-200/20 to-orange-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>

        <div class="relative max-w-4xl mx-auto px-6">
            <div class="text-center mb-8">
                <div class="flex justify-center items-center space-x-4 mb-6">
                    <span class="bg-orange-500 text-white px-4 py-2 rounded-xl font-bold text-sm">
                        <i class="fas fa-star mr-2"></i><span data-translate="article_category">Company News</span>
                    </span>
                    <div class="flex items-center space-x-4 text-gray-600">
                        <span class="flex items-center">
                            <i class="fas fa-calendar mr-1"></i>
                            <span data-translate="article_date">15 Januari 2025</span>
                        </span>

                    </div>
                </div>

                <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent leading-tight">
                    <span data-translate="article_title">PT. Enlulu Sukses Makmur Memperluas Operasi ke Indonesia Timur</span>
                </h1>

                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    <span data-translate="article_subtitle">Ekspansi Strategis Membuka Peluang Baru di Kawasan Indonesia Timur</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Article Image -->
    <section class="py-8">
        <div class="max-w-6xl mx-auto px-6">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80"
                    alt="PT Enlulu Expansion" class="w-full h-96 md:h-[500px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                <div class="absolute bottom-6 left-6 bg-black/50 backdrop-blur-sm text-white px-6 py-3 rounded-xl">
                    <p class="text-sm font-medium">Fasilitas operasi baru di Indonesia Timur</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Main Article -->
    <main class="py-16 bg-white">
        <article class="max-w-4xl mx-auto px-6">


            <!-- Article Content -->
            <div class="prose prose-lg max-w-none">
                <!-- Introduction -->
                <div class="bg-gradient-to-r from-orange-50 to-red-50 rounded-2xl p-8 mb-10">
                    <p class="text-xl text-gray-700 leading-relaxed font-medium italic" data-translate="content_intro">
                        In a strategic move to broaden our reach and strengthen Indonesia's workforce ecosystem, PT. Enlulu Sukses Makmur proudly announces the expansion of our comprehensive outsourcing services to Eastern Indonesia, marking a significant milestone in our journey toward nationwide excellence.
                    </p>
                </div>

                <!-- Main Content -->
                <div class="space-y-8 text-gray-700 leading-relaxed">
                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-orange-500 to-red-500 rounded-full mr-4"></div>
                            <span data-translate="content_section1_title">Strategic Expansion Overview</span>
                        </h2>
                        <p class="mb-4" data-translate="content_section1_text1">
                            This expansion represents more than geographical growth—it embodies our commitment to bringing world-class outsourcing solutions to emerging markets across Indonesia. Our new operations in Eastern Indonesia will encompass our full suite of services, including manpower outsourcing, HR management, training programs, pest control management, cleaning services, and LED lighting solutions.
                        </p>
                        <p data-translate="content_section1_text2">
                            The decision to expand eastward comes after comprehensive market research and analysis, which revealed significant demand for professional outsourcing services in regions including Sulawesi, Maluku, and Papua. These areas show tremendous potential for business growth and development, creating an ideal environment for our specialized services.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-blue-500 to-cyan-500 rounded-full mr-4"></div>
                            <span data-translate="content_section2_title">Creating Opportunities for Growth</span>
                        </h2>
                        <div class="bg-blue-50 rounded-2xl p-6 mb-6">
                            <div class="grid md:grid-cols-3 gap-6 text-center">
                                <div class="bg-white rounded-xl p-4 shadow-sm">
                                    <div class="text-3xl font-bold text-blue-600 mb-2">3,000+</div>
                                    <div class="text-sm text-gray-600" data-translate="content_section2_jobs">New Job Opportunities</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm">
                                    <div class="text-3xl font-bold text-green-600 mb-2">15</div>
                                    <div class="text-sm text-gray-600" data-translate="content_section2_offices">New Office Locations</div>
                                </div>
                                <div class="bg-white rounded-xl p-4 shadow-sm">
                                    <div class="text-3xl font-bold text-purple-600 mb-2">50+</div>
                                    <div class="text-sm text-gray-600" data-translate="content_section2_partnerships">Local Partnerships</div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4" data-translate="content_section2_text1">
                            Our expansion will create over 3,000 new employment opportunities across various skill levels and industries. We are particularly focused on recruiting local talent and providing comprehensive training programs to ensure the highest service standards while contributing to regional economic development.
                        </p>
                        <p data-translate="content_section2_text2">
                            The new operations will be strategically located in key economic centers, enabling us to serve both established businesses and emerging enterprises seeking reliable outsourcing partners. This geographic diversification also strengthens our resilience and ability to serve clients nationwide.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-green-500 to-teal-500 rounded-full mr-4"></div>
                            <span data-translate="content_section3_title">Comprehensive Service Portfolio</span>
                        </h2>
                        <p class="mb-6" data-translate="content_section3_text1">
                            Our Eastern Indonesia operations will offer the complete range of PT. Enlulu Sukses Makmur services, tailored to meet the unique needs of regional markets:
                        </p>

                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div class="bg-white border-l-4 border-orange-500 p-6 rounded-lg shadow-sm">
                                <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <i class="fas fa-users text-orange-500 mr-3"></i>
                                    <span data-translate="content_section3_manpower_title">Manpower Solutions</span>
                                </h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li data-translate="content_section3_manpower_item1">• Professional recruitment and selection</li>
                                    <li data-translate="content_section3_manpower_item2">• Comprehensive HR management</li>
                                    <li data-translate="content_section3_manpower_item3">• Skills training and development programs</li>
                                    <li data-translate="content_section3_manpower_item4">• Performance management systems</li>
                                </ul>
                            </div>

                            <div class="bg-white border-l-4 border-green-500 p-6 rounded-lg shadow-sm">
                                <h3 class="font-bold text-gray-800 mb-3 flex items-center">
                                    <i class="fas fa-shield-alt text-green-500 mr-3"></i>
                                    <span data-translate="content_section3_facility_title">Facility Management</span>
                                </h3>
                                <ul class="text-gray-600 space-y-2">
                                    <li data-translate="content_section3_facility_item1">• Advanced pest control systems</li>
                                    <li data-translate="content_section3_facility_item2">• Professional cleaning services</li>
                                    <li data-translate="content_section3_facility_item3">• Energy-efficient LED lighting</li>
                                    <li data-translate="content_section3_facility_item4">• Maintenance and support services</li>
                                </ul>
                            </div>
                        </div>

                        <p data-translate="content_section3_text2">
                            Each service will be adapted to address the specific challenges and opportunities present in Eastern Indonesian markets, ensuring maximum effectiveness and client satisfaction.
                        </p>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-purple-500 to-pink-500 rounded-full mr-4"></div>
                            <span data-translate="content_section4_title">Leadership Commitment</span>
                        </h2>
                        <div class="bg-gradient-to-r from-gray-50 to-orange-50 rounded-2xl p-8 mb-6">
                            <blockquote class="text-lg italic text-gray-700 mb-4" data-translate="content_section4_quote">
                                "This expansion represents our unwavering commitment to Indonesia's economic development and our belief in the tremendous potential of Eastern Indonesian markets. We're not just establishing new offices—we're building lasting partnerships and contributing to sustainable regional growth."
                            </blockquote>
                            <div class="flex items-center">
                            </div>
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-indigo-500 to-blue-500 rounded-full mr-4"></div>
                            <span data-translate="content_section5_title">Implementation Timeline</span>
                        </h2>
                        <div class="space-y-4 mb-6">
                            <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-orange-50 to-red-50 rounded-xl">
                                <div class="bg-orange-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm mt-1">Q1</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1" data-translate="content_section5_phase1_title">Phase 1: Infrastructure Development (Q1 2025)</h4>
                                    <p class="text-gray-600" data-translate="content_section5_phase1_desc">Establishment of regional headquarters and initial office locations in major cities.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-blue-50 to-cyan-50 rounded-xl">
                                <div class="bg-blue-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm mt-1">Q2</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1" data-translate="content_section5_phase2_title">Phase 2: Team Recruitment (Q2 2025)</h4>
                                    <p class="text-gray-600" data-translate="content_section5_phase2_desc">Intensive recruitment and training programs for local management and operational teams.</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-4 bg-gradient-to-r from-green-50 to-teal-50 rounded-xl">
                                <div class="bg-green-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold text-sm mt-1">Q3</div>
                                <div>
                                    <h4 class="font-semibold text-gray-800 mb-1" data-translate="content_section5_phase3_title">Phase 3: Service Launch (Q3 2025)</h4>
                                    <p class="text-gray-600" data-translate="content_section5_phase3_desc">Official service launch with full operational capabilities across all business units.</p>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center">
                            <div class="w-1 h-8 bg-gradient-to-b from-yellow-500 to-orange-500 rounded-full mr-4"></div>
                            <span data-translate="content_section6_title">Looking Forward</span>
                        </h2>
                        <p class="mb-4" data-translate="content_section6_text1">
                            This strategic expansion positions PT. Enlulu Sukses Makmur as a truly national outsourcing leader, with comprehensive coverage across Java, Bali, Sumatra, and now Eastern Indonesia. Our enhanced geographic presence enables us to better serve existing clients while opening doors to new partnerships and opportunities.
                        </p>
                        <p class="mb-6" data-translate="content_section6_text2">
                            We remain committed to our core values of integrity, excellence, innovation, and dedication while adapting our approach to meet the unique needs and cultural nuances of each region we serve. This expansion reinforces our position as Indonesia's premier outsourcing solutions provider.
                        </p>

                        <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-2xl p-8 text-center">
                            <h3 class="text-2xl font-bold mb-4" data-translate="content_section6_cta_title">Ready to Partner With Us?</h3>
                            <p class="mb-6 opacity-90" data-translate="content_section6_cta_subtitle">Discover how our expanded capabilities can support your business growth across Indonesia.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a href="/contact" class="bg-white text-orange-600 px-6 py-3 rounded-xl font-bold hover:bg-gray-100 transition-colors" data-translate="content_section6_contact">
                                    Contact Us Today
                                </a>
                                <a href="/about" class="border-2 border-white text-white px-6 py-3 rounded-xl font-bold hover:bg-white hover:text-orange-600 transition-colors" data-translate="content_section6_learn_more">
                                    Learn More About Us
                                </a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>


    </main>

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
                <span data-translate="back_to_news">Back to All News</span>
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
                                <img src="/assets/images/enlulu.png" alt="Enlulu Logo" class="h-16 object-contain">
                            </div>
                        </div>

                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-orange-400 to-red-400 bg-clip-text text-transparent" data-translate="footer_company_name">
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
                            Quick Links
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span data-translate="nav_home">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_about">About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_news">News</span>
                                </a>
                            </li>
                            <li>
                                <a href="/career" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_career">Career</span>
                                </a>
                            </li>
                            <li>
                                <a href="/contact" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-green-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_contact">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="space-y-6">
                    <div class="flex flex-col items-center md:items-start">
                        <h3 class="text-xl font-bold text-white relative" data-translate="footer_get_in_touch">
                            Get In Touch
                        </h3>
                        <div class="space-y-4">
                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-phone text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="footer_phone">Phone</p>
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
                                    <p class="text-gray-400 text-xs" data-translate="footer_location">Location</p>
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
                    Our Services
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
                    <div class="bg-gradient-to-br from-orange-500/10 to-red-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-users text-orange-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service1">Manpower</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service1_sub">Outsourcing</p>
                    </div>
                    <div class="bg-gradient-to-br from-blue-500/10 to-cyan-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-user-tie text-blue-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service2">HR</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service2_sub">Management</p>
                    </div>
                    <div class="bg-gradient-to-br from-green-500/10 to-teal-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-shield-alt text-green-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service3">Pest</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service3_sub">Control</p>
                    </div>
                    <div class="bg-gradient-to-br from-purple-500/10 to-pink-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-broom text-purple-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service4">Cleaning</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service4_sub">Service</p>
                    </div>
                    <div class="bg-gradient-to-br from-yellow-500/10 to-orange-500/10 rounded-2xl p-4 text-center group hover:scale-105 transition-transform">
                        <i class="fas fa-lightbulb text-yellow-400 text-2xl mb-2"></i>
                        <p class="text-white text-sm font-medium" data-translate="footer_service5">LED</p>
                        <p class="text-gray-400 text-xs" data-translate="footer_service5_sub">Lighting</p>
                    </div>
                </div>
            </div>

            <!-- Social Media -->
            <div class="border-t border-gray-700/50 pt-12 mb-12">
                <div class="text-center md:text-center">
                    <h3 class="text-xl font-bold mb-6 text-white" data-translate="footer_follow">Follow Us</h3>
                    <div class="flex justify-center md:justify-center space-x-4">
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
                        <p>&copy; <span data-translate="footer_copyright">2025 PT. ENLULU SUKSES MAKMUR. All rights reserved.</span></p>
                    </div>
                    <div class="flex items-center space-x-6">
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_privacy">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_terms">Terms of Service</a>
                        <a href="#" class="hover:text-white transition-colors" data-translate="footer_sitemap">Sitemap</a>
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
