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
    <title>News - PT. ENLULU SUKSES MAKMUR</title>
    <link rel="icon" type="image/png" href="assets/images/enlulu.png">
    <link rel="shortcut icon" type="image/png" href="assets/images/enlulu.png">
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

        // Translation data for News page
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Hero Section
                hero_title: 'Berita & Pembaruan Terkini',
                hero_subtitle: 'Tetap terinformasi dengan perkembangan terbaru, pencapaian, dan wawasan dari PT. Enlulu Sukses Makmur',

                // News Filter Section
                filter_all_news: 'Semua Berita',
                filter_company_news: 'Berita Perusahaan',
                filter_achievements: 'Pencapaian',
                filter_industry_news: 'Berita Industri',

                // Featured Section
                featured_title: 'Berita Utama',
                featured_badge: 'Unggulan',
                featured_company_news: 'Berita Perusahaan',
                featured_headline: 'PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia',
                featured_excerpt: 'Dalam langkah strategis untuk memperluas jangkauan, kami dengan bangga mengumumkan ekspansi layanan outsourcing kami ke Indonesia Timur, membawa keahlian terbukti kami ke pasar baru dan menciptakan ribuan peluang kerja baru.',
                featured_read_more: 'Baca Selengkapnya',

                // Recent Updates Section
                recent_title: 'Pembaruan Terbaru',
                recent_subtitle_showing: 'Menampilkan',
                recent_subtitle_of: 'dari',
                recent_subtitle_articles: 'artikel',
                recent_subtitle_company: 'artikel perusahaan',
                recent_subtitle_achievement: 'artikel pencapaian',
                recent_subtitle_industry: 'artikel industri',

                // Load More
                load_more: 'Muat Artikel Lainnya',
                show_less: 'Tampilkan Lebih Sedikit',
                no_articles_found: 'Tidak Ada Artikel Ditemukan',
                no_articles_category: 'Belum ada artikel dalam kategori ini.',

                // Article Data
                article_smart_led_title: 'Solusi Pencahayaan LED Pintar Diluncurkan',
                article_smart_led_excerpt: 'Memperkenalkan solusi pencahayaan LED pintar inovatif kami dengan integrasi IoT, pemantauan efisiensi energi, dan sistem kontrol otomatis...',
                article_smart_led_author: 'Tim Inovasi',
                article_smart_led_badge: 'Inovasi',
                article_smart_led_date: '3 Januari 2025',
                article_smart_led_read_time: '6 menit baca',

                article_partnership_title: 'Kemitraan Strategis dengan Universitas Terkemuka',
                article_partnership_excerpt: 'Kami telah menjalin kemitraan dengan universitas-universitas terkemuka di Indonesia untuk menciptakan program magang dan mengembangkan jalur talenta untuk industri outsourcing...',
                article_partnership_author: 'Tim Kemitraan',
                article_partnership_badge: 'Kemitraan',
                article_partnership_date: '28 Desember 2024',
                article_partnership_read_time: '5 menit baca',

                article_digital_title: 'Transformasi Digital dalam Industri Outsourcing',
                article_digital_excerpt: 'Menjelajahi tren terbaru dalam transformasi digital dan bagaimana teknologi otomasi membentuk kembali lanskap outsourcing di Asia Tenggara...',
                article_digital_author: 'Analis Industri',
                article_digital_badge: 'Teknologi',
                article_digital_date: '15 Desember 2024',
                article_digital_read_time: '8 menit baca',

                // Common Elements
                read_more: 'Baca Selengkapnya',
                min_read: 'menit baca',

                // Contact CTA Section
                cta_title: 'Ada Pertanyaan Tentang Layanan Kami?',
                cta_subtitle: 'Tim kami siap mendiskusikan bagaimana kami dapat membantu bisnis Anda berkembang dengan solusi outsourcing komprehensif kami.',
                cta_contact_today: 'Hubungi Kami Hari Ini',
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

                // Hero Section
                hero_title: 'Latest News & Updates',
                hero_subtitle: 'Stay informed with the latest developments, achievements, and insights from PT. Enlulu Sukses Makmur',

                // News Filter Section
                filter_all_news: 'All News',
                filter_company_news: 'Company News',
                filter_achievements: 'Achievements',
                filter_industry_news: 'Industry News',

                // Featured Section
                featured_title: 'Featured Story',
                featured_badge: 'Featured',
                featured_company_news: 'Company News',
                featured_headline: 'PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia',
                featured_excerpt: 'In a strategic move to broaden our reach, we are proud to announce the expansion of our outsourcing services to Eastern Indonesia, bringing our proven expertise to new markets and creating thousands of new job opportunities.',
                featured_read_more: 'Read More',

                // Recent Updates Section
                recent_title: 'Recent Updates',
                recent_subtitle_showing: 'Showing',
                recent_subtitle_of: 'of',
                recent_subtitle_articles: 'articles',
                recent_subtitle_company: 'company articles',
                recent_subtitle_achievement: 'achievement articles',
                recent_subtitle_industry: 'industry articles',

                // Load More
                load_more: 'Load More Articles',
                show_less: 'Show Less',
                no_articles_found: 'No Articles Found',
                no_articles_category: 'There are no articles in this category yet.',

                // Article Data
                article_smart_led_title: 'Smart LED Lighting Solutions Launched',
                article_smart_led_excerpt: 'Introducing our innovative smart LED lighting solutions with IoT integration, energy efficiency monitoring, and automated control systems...',
                article_smart_led_author: 'Innovation Team',
                article_smart_led_badge: 'Innovation',
                article_smart_led_date: 'January 3, 2025',
                article_smart_led_read_time: '6 min read',

                article_partnership_title: 'Strategic Partnership with Leading Universities',
                article_partnership_excerpt: 'We\'ve established partnerships with top Indonesian universities to create internship programs and develop talent pipeline for the outsourcing industry...',
                article_partnership_author: 'Partnership Team',
                article_partnership_badge: 'Partnership',
                article_partnership_date: 'December 28, 2024',
                article_partnership_read_time: '5 min read',

                article_digital_title: 'Digital Transformation in Outsourcing Industry',
                article_digital_excerpt: 'Exploring the latest trends in digital transformation and how automation technologies are reshaping the outsourcing landscape in Southeast Asia...',
                article_digital_author: 'Industry Analyst',
                article_digital_badge: 'Technology',
                article_digital_date: 'December 15, 2024',
                article_digital_read_time: '8 min read',

                // Common Elements
                read_more: 'Read More',
                min_read: 'min read',

                // Contact CTA Section
                cta_title: 'Have Questions About Our Services?',
                cta_subtitle: 'Our team is ready to discuss how we can help your business grow with our comprehensive outsourcing solutions.',
                cta_contact_today: 'Contact Us Today',
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
    <script>
        function newsFilter() {
            return {
                activeCategory: 'all',
                showingAll: false,
                get articles() {
                    return [{
                            id: 1,
                            category: 'company',
                            title: translations[currentLang]['article_smart_led_title'],
                            excerpt: translations[currentLang]['article_smart_led_excerpt'],
                            image: 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80', // Smart LED lighting
                            date: translations[currentLang]['article_smart_led_date'],
                            readTime: translations[currentLang]['article_smart_led_read_time'],
                            author: translations[currentLang]['article_smart_led_author'],
                            authorImage: 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80',
                            badge: translations[currentLang]['article_smart_led_badge'],
                            badgeClass: 'bg-yellow-500',
                            icon: 'fas fa-lightbulb'
                        },
                        {
                            id: 2,
                            category: 'company',
                            title: translations[currentLang]['article_partnership_title'],
                            excerpt: translations[currentLang]['article_partnership_excerpt'],
                            image: 'https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                            date: translations[currentLang]['article_partnership_date'],
                            readTime: translations[currentLang]['article_partnership_read_time'],
                            author: translations[currentLang]['article_partnership_author'],
                            authorImage: 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80',
                            badge: translations[currentLang]['article_partnership_badge'],
                            badgeClass: 'bg-indigo-500',
                            icon: 'fas fa-handshake'
                        },
                        {
                            id: 3,
                            category: 'industry',
                            title: translations[currentLang]['article_digital_title'],
                            excerpt: translations[currentLang]['article_digital_excerpt'],
                            image: 'https://images.unsplash.com/photo-1518186285589-2f7649de83e0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80',
                            date: translations[currentLang]['article_digital_date'],
                            readTime: translations[currentLang]['article_digital_read_time'],
                            author: translations[currentLang]['article_digital_author'],
                            authorImage: 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=50&q=80',
                            badge: translations[currentLang]['article_digital_badge'],
                            badgeClass: 'bg-purple-500',
                            icon: 'fas fa-microchip'
                        },
                    ];
                },

                get filteredArticles() {
                    if (this.activeCategory === 'all') {
                        return this.articles;
                    }
                    return this.articles.filter(article => article.category === this.activeCategory);
                },

                get visibleArticles() {
                    const filtered = this.filteredArticles;
                    return this.showingAll ? filtered : filtered.slice(0, 3);
                },

                setCategory(category) {
                    this.activeCategory = category;
                    this.showingAll = false;
                },

                shouldShowArticle(article) {
                    return this.activeCategory === 'all' || article.category === this.activeCategory;
                },

                canLoadMore() {
                    return this.filteredArticles.length > 3;
                },

                toggleLoadMore() {
                    this.showingAll = !this.showingAll;
                },

                getStatusText() {
                    const total = this.filteredArticles.length;
                    const visible = this.visibleArticles.length;

                    if (total === 0) return '';
                    if (this.activeCategory === 'all') {
                        return `Showing ${visible} of ${total} articles`;
                    }
                    const categoryName = this.activeCategory.charAt(0).toUpperCase() + this.activeCategory.slice(1);
                    return `Showing ${visible} of ${total} ${categoryName.toLowerCase()} articles`;
                }
            }
        }
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

    <!-- Hero Section -->
    <section class="relative min-h-[60vh] flex items-center justify-center bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white overflow-hidden">
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

        <div class="relative max-w-6xl mx-auto px-4 md:px-6 text-center py-20">
            <div class="animate-slide-up">
                <h1 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-white via-orange-100 to-white bg-clip-text text-transparent" data-translate="hero_title">
                    Latest News & Updates
                </h1>
                <div class="w-32 h-1 bg-white mx-auto mb-8 rounded-full"></div>

                <p class="text-xl md:text-2xl opacity-90 leading-relaxed max-w-4xl mx-auto" data-translate="hero_subtitle">
                    Stay informed with the latest developments, achievements, and insights from PT. Enlulu Sukses Makmur
                </p>
            </div>
        </div>
        <!-- Scroll indicator
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-2xl opacity-70"></i>
        </div> -->
    </section>

    <!-- News Filter Section -->
    <section class="py-12 bg-white relative" x-data="newsFilter()">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button @click="setCategory('all')" :class="activeCategory === 'all' ? 'bg-gradient-to-r from-orange-500 to-red-500 text-white' : 'bg-white text-gray-600 hover:text-orange-600'"
                    class="px-6 py-3 rounded-2xl font-medium border-2 border-gray-200 hover:border-orange-300 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-th-large mr-2"></i><span data-translate="filter_all_news"></span>
                </button>
                <button @click="setCategory('company')" :class="activeCategory === 'company' ? 'bg-gradient-to-r from-blue-500 to-cyan-500 text-white' : 'bg-white text-gray-600 hover:text-blue-600'"
                    class="px-6 py-3 rounded-2xl font-medium border-2 border-gray-200 hover:border-blue-300 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-building mr-2"></i><span data-translate="filter_company_news"></span>
                </button>
                <button @click="setCategory('achievement')" :class="activeCategory === 'achievement' ? 'bg-gradient-to-r from-green-500 to-teal-500 text-white' : 'bg-white text-gray-600 hover:text-green-600'"
                    class="px-6 py-3 rounded-2xl font-medium border-2 border-gray-200 hover:border-green-300 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-trophy mr-2"></i><span data-translate="filter_achievements"></span>
                </button>
                <button @click="setCategory('industry')" :class="activeCategory === 'industry' ? 'bg-gradient-to-r from-purple-500 to-pink-500 text-white' : 'bg-white text-gray-600 hover:text-purple-600'"
                    class="px-6 py-3 rounded-2xl font-medium border-2 border-gray-200 hover:border-purple-300 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-industry mr-2"></i><span data-translate="filter_industry_news"></span>
                </button>
            </div>
        </div>

        <!-- Featured News Section -->
        <section class="py-16 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-gradient-to-br from-orange-200/20 to-red-200/20 rounded-full transform translate-x-48 -translate-y-48"></div>

            <div class="relative max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent" data-translate="featured_title">
                        Featured Story
                    </h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto"></div>
                </div>

                <div class="bg-white rounded-3xl shadow-2xl overflow-hidden hover:shadow-3xl transition-all duration-500 transform hover:-translate-y-2">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden group">
                            <div class="absolute inset-0 bg-gradient-to-r from-orange-400 to-red-400 opacity-0 group-hover:opacity-20 transition-opacity duration-300"></div>
                            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                                alt="Featured News"
                                class="w-full h-96 md:h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute top-4 left-4 bg-gradient-to-r from-orange-500 to-red-500 text-white px-4 py-2 rounded-xl font-bold text-sm">
                                <i class="fas fa-star mr-2"></i><span data-translate="featured_badge"></span>
                            </div>
                        </div>
                        <div class="p-8 md:p-12 flex flex-col justify-center">
                            <div class="mb-4">
                                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium" data-translate="featured_company_news">Company News</span>
                                <span class="text-gray-500 ml-3"><i class="fas fa-calendar mr-1"></i><span data-translate="featured_date">January 15, 2025</span></span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-800 leading-tight">
                                <span data-translate="featured_headline">PT. Enlulu Sukses Makmur Expands Operations to Eastern Indonesia</span>
                            </h3>
                            <p class="text-gray-600 text-lg leading-relaxed mb-6">
                                <span data-translate="featured_excerpt">In a strategic move to broaden our reach, we are proud to announce the expansion of our outsourcing services to Eastern Indonesia, bringing our proven expertise to new markets and creating thousands of new job opportunities.</span>
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-4">
                                </div>
                                <a href="/news/PT.Enlulu-Sukses-Makmur-Memperluas-Operasi-ke-Indonesia-Timur" class="group bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-2xl font-bold hover:shadow-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-2">
                                    <span data-translate="featured_read_more">Read More</span>
                                    <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Grid Section -->
        <section class="py-20 bg-white relative overflow-hidden">
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-gradient-to-tr from-blue-200/20 to-cyan-200/20 rounded-full transform -translate-x-48 translate-y-48"></div>

            <div class="relative max-w-6xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent" data-translate="recent_title">Recent Updates</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                    <p class="text-gray-600" x-text="getStatusText()"></p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <template x-for="article in visibleArticles" :key="article.id">
                        <article class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 overflow-hidden border border-gray-100"
                            x-show="shouldShowArticle(article)"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 transform scale-95"
                            x-transition:enter-end="opacity-100 transform scale-100">
                            <div class="relative overflow-hidden">
                                <img :src="article.image"
                                    :alt="article.title"
                                    class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute top-4 left-4 px-3 py-1 rounded-xl text-sm font-bold text-white"
                                    :class="article.badgeClass">
                                    <i :class="article.icon + ' mr-1'"></i>
                                    <span :data-translate="'article_' + article.id + '_badge'" x-text="article.badge"></span>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-500 mb-3">
                                    <i class="fas fa-calendar mr-2"></i>
                                    <span :data-translate="'article_' + article.id + '_date'" x-text="article.date"></span>
                                    <span class="mx-2">•</span>
                                    <i class="fas fa-clock mr-1"></i>
                                    <span :data-translate="'article_' + article.id + '_read_time'" x-text="article.readTime"></span>
                                </div>
                                <h3 class="text-xl font-bold mb-3 text-gray-800 group-hover:text-orange-600 transition-colors"
                                    :data-translate="'article_' + article.id + '_title'" x-text="article.title">
                                </h3>
                                <p class="text-gray-600 text-sm leading-relaxed mb-4"
                                    :data-translate="'article_' + article.id + '_excerpt'" x-text="article.excerpt">
                                </p>
                                <div class="flex items-center justify-between">
                                    <a :href="
                                        article.id === 1 ? '/news/Solusi-Pencahayaan-LED-Pintar' :
                                        article.id === 2 ? '/news/Kemitraan-Strategis-dengan-Universitas-Terkemuka' :
                                        article.id === 3 ? '/news/Transformasi-Digital-dalam-Industri-Outsourcing' : '#'
                                    " class="text-orange-600 font-medium hover:text-red-600 transition-colors flex items-center space-x-1">
                                        <span data-translate="read_more">Read More</span>
                                        <i class="fas fa-chevron-right text-xs"></i>
                                    </a>
                                </div>
                            </div>
                        </article>
                    </template>
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12" x-show="canLoadMore()">
                    <button @click="toggleLoadMore()"
                        class="group bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-2xl font-bold text-lg hover:shadow-xl transition-all duration-300 transform hover:scale-105 flex items-center space-x-3 mx-auto">
                        <span x-text="showingAll ? 'Show Less' : 'Load More Articles'"></span>
                        <span x-text="showingAll ? translations[currentLang].show_less : translations[currentLang].load_more"></span>
                        <i :class="showingAll ? 'fas fa-arrow-up group-hover:-translate-y-1' : 'fas fa-arrow-down group-hover:translate-y-1'"
                            class="transition-transform"></i>
                    </button>
                </div>

                <!-- No articles message -->
                <div x-show="filteredArticles.length === 0"
                    class="text-center py-16"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100">
                    <div class="text-gray-400 mb-4">
                        <i class="fas fa-newspaper text-6xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-600 mb-2">No Articles Found</h3>
                    <h3 class="text-xl font-bold text-gray-600 mb-2" data-translate="no_articles_found">No Articles Found</h3>
                    <p class="text-gray-500">There are no articles in this category yet.</p>
                    <p class="text-gray-500" data-translate="no_articles_category">There are no articles in this category yet.</p>
                </div>
            </div>
        </section>
    </section>


    <!-- Contact CTA -->
    <section class="relative bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white py-16 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/10 rounded-full animate-float"></div>
            <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-white/5 rounded-full animate-float" style="animation-delay: -3s;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center">

                <h2 class="text-3xl md:text-4xl font-bold mb-6" data-translate="cta_title">Have Questions About Our Services?</h2>
                <p class="text-xl mb-8 opacity-90 leading-relaxed max-w-3xl mx-auto">
                    <span data-translate="cta_subtitle">Our team is ready to discuss how we can help your business grow with our comprehensive outsourcing solutions.</span>
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" class="group bg-white text-orange-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center space-x-3">

                        <span data-translate="cta_contact_today">Contact Us Today</span>
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="/about" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3">

                        <span data-translate="cta_learn_more">Learn More</span>
                        <i class="fas fa-info-circle group-hover:scale-110 transition-transform"></i>
                    </a>
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
                            <span data-translate="footer_quick_links">Quick Links</span>
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
                        <h3 class="text-xl font-bold text-white relative">
                            <span data-translate="footer_get_in_touch">Get In Touch</span>
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
                <h3 class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent">
                    <span data-translate="footer_services">Our Services</span>
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
                <div class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent">
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
                            <a href="https://wa.me/6282246842008" class="group w-12 h-12 bg-gradient-to-r from-green-600 to-green-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                                <i class="fab fa-whatsapp text-white group-hover:scale-125 transition-transform"></i>
                            </a>
                        </div>
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
