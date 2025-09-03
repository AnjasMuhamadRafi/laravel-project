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
    <title>Contact Us - PT. ENLULU SUKSES MAKMUR</title>
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

        // Translation data for Contact page
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Hero Section
                hero_title: 'Hubungi Kami',
                hero_subtitle: 'Siap bermitra dengan kami? Kami ingin mendengar dari Anda dan mendiskusikan bagaimana kami dapat membantu kesuksesan bisnis Anda.',
                hero_btn_send: 'Kirim Pesan',
                hero_btn_call: 'Telepon Sekarang',

                // Contact Info Cards
                contact_office_title: 'Kantor Kami',
                contact_office_address: 'Graha Mustika Ratu Lt. Annex\nJl. Gatot Subroto, Kav 74-75\nJakarta Selatan 12870\nIndonesia',
                contact_office_map: 'Lihat di Maps',

                contact_phone_title: 'Telepon Kami',
                contact_phone_office: 'Kantor:',
                contact_phone_fax: 'Fax:',
                contact_phone_mobile: 'Seluler:',

                contact_person_title: 'Kontak Person',
                contact_person_name: 'Trio',
                contact_person_position: 'Manager Pengembangan Bisnis',

                // Contact Form
                form_title: 'Kirim Pesan',
                form_subtitle: 'Isi formulir di bawah ini dan kami akan menghubungi Anda secepatnya.',
                form_name: 'Nama Lengkap',
                form_name_required: 'Nama Lengkap',
                form_name_placeholder: 'Nama lengkap Anda',
                form_email: 'Alamat Email',
                form_email_required: 'Alamat Email',
                form_email_placeholder: 'email.anda@contoh.com',
                form_phone: 'Nomor Telepon',
                form_phone_placeholder: '+62 xxx xxxx xxxx',
                form_company: 'Nama Perusahaan',
                form_company_placeholder: 'Perusahaan Anda',
                form_service: 'Layanan yang Diminati',
                form_service_select: 'Pilih layanan',
                form_service_recruitment: 'Rekrutmen & HR',
                form_service_pest: 'Manajemen Pengendalian Hama',
                form_service_cleaning: 'Layanan Kebersihan',
                form_service_security: 'Layanan Keamanan',
                form_service_led: 'Pencahayaan LED',
                form_service_other: 'Lainnya',
                form_message: 'Pesan',
                form_message_required: 'Pesan',
                form_message_placeholder: 'Ceritakan lebih lanjut tentang kebutuhan Anda...',
                form_btn_send: 'Kirim Pesan',
                form_btn_sending: 'Mengirim...',
                form_success: 'Pesan Anda telah berhasil dikirim!',

                // Map Section
                map_title: 'Lokasi Kami',

                // Business Hours
                hours_title: 'Jam Operasional',
                hours_weekdays: 'Senin - Jumat',
                hours_weekdays_time: '08:30 - 17:30',
                hours_saturday: 'Sabtu',
                hours_sunday: 'Minggu',
                hours_closed: 'Tutup',
                hours_emergency: 'Untuk keperluan darurat, silakan hubungi hotline darurat kami:',

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
                hero_title: 'Get In Touch',
                hero_subtitle: 'Ready to partner with us? We\'d love to hear from you and discuss how we can help your business succeed.',
                hero_btn_send: 'Send Message',
                hero_btn_call: 'Call Now',

                // Contact Info Cards
                contact_office_title: 'Our Office',
                contact_office_address: 'Graha Mustika Ratu Lt. Annex\nJl. Gatot Subroto, Kav 74-75\nJakarta Selatan 12870\nIndonesia',
                contact_office_map: 'View on Maps',

                contact_phone_title: 'Call Us',
                contact_phone_office: 'Office:',
                contact_phone_fax: 'Fax:',
                contact_phone_mobile: 'Mobile:',

                contact_person_title: 'Contact Person',
                contact_person_name: 'Trio',
                contact_person_position: 'Business Development Manager',

                // Contact Form
                form_title: 'Send Us a Message',
                form_subtitle: 'Fill out the form below and we\'ll get back to you as soon as possible.',
                form_name: 'Full Name',
                form_name_required: 'Full Name',
                form_name_placeholder: 'Your full name',
                form_email: 'Email Address',
                form_email_required: 'Email Address',
                form_email_placeholder: 'your.email@example.com',
                form_phone: 'Phone Number',
                form_phone_placeholder: '+62 xxx xxxx xxxx',
                form_company: 'Company Name',
                form_company_placeholder: 'Your company',
                form_service: 'Service Interest',
                form_service_select: 'Select a service',
                form_service_recruitment: 'Recruitment & HR',
                form_service_pest: 'Pest Control Management',
                form_service_cleaning: 'Cleaning Service',
                form_service_security: 'Security Service',
                form_service_led: 'LED Lighting',
                form_service_other: 'Other',
                form_message: 'Message',
                form_message_required: 'Message',
                form_message_placeholder: 'Tell us more about your requirements...',
                form_btn_send: 'Send Message',
                form_btn_sending: 'Sending...',
                form_success: 'Your message has been sent successfully!',

                // Map Section
                map_title: 'Our Location',

                // Business Hours
                hours_title: 'Business Hours',
                hours_weekdays: 'Monday - Friday',
                hours_weekdays_time: '08:30 - 17:30',
                hours_saturday: 'Saturday',
                hours_sunday: 'Sunday',
                hours_closed: 'Closed',
                hours_emergency: 'For urgent matters, please contact our emergency hotline:',

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
                <a href="/contact" class="relative text-orange-600 group">
                    <span data-translate="nav_contact">Kontak</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
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
                <a href="/news" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_news">Berita</a>
                <a href="/career" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_career">Karir</a>
                <a href="/contact" class="text-orange-600 py-2" data-translate="nav_contact">Kontak</a>
                <div class="flex space-x-1 mt-4">
                    <button onclick="switchLanguage('id')" data-lang="id" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">ID</button>
                    <button onclick="switchLanguage('en')" data-lang="en" class="lang-btn px-4 py-2 rounded-xl text-sm font-medium transition-all duration-300">EN</button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative pt-36 pb-12 bg-gradient-to-br from-orange-500 via-orange-600 to-red-600 text-white text-center overflow-hidden">
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

        <div class="max-w-4xl mx-auto px-4 md:px-6 text-center relative z-10">
            <div class="relative max-w-6xl mx-auto px-4 md:px-6 text-center">
                <div class="animate-slide-up">
                    <div class="mb-6">
                        <i class="fas fa-envelope text-5xl md:text-6xl mb-4 animate-float"></i>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-bold mb-4" data-translate="hero_title">Hubungi Kami</h1>
                    <p class="text-lg md:text-xl mb-6 opacity-90" data-translate="hero_subtitle">
                        Siap bermitra dengan kami? Kami ingin mendengar dari Anda dan mendiskusikan bagaimana kami dapat membantu kesuksesan bisnis Anda.
                    </p>
                    <div class="flex flex-col md:flex-row gap-4 justify-center items-center">
                        <a href="#contact-form" class="group bg-white text-orange-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3">
                            <span data-translate="hero_btn_send">Kirim Pesan</span>
                            <i class="fas fa-paper-plane mr-2"></i>
                        </a>
                        <a href="tel:+622183306658" class="group bg-transparent border-2 border-white text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-3">
                            <span data-translate="hero_btn_call">Telepon Sekarang</span>
                            <i class="fas fa-phone mr-2"></i>
                        </a>
                    </div>
                </div>
    </section>



    <!-- Contact Info Cards -->
    <section class="py-16 bg-white relative">
        <div class="max-w-6xl mx-auto px-4 md:px-6 pt-8">
            <div class="grid md:grid-cols-3 gap-8">

                <!-- Office Location -->
                <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800" data-translate="contact_office_title">Kantor Kami</h3>
                    <p class="text-gray-600 leading-relaxed" data-translate="contact_office_address">
                        Graha Mustika Ratu Lt. Annex<br>
                        Jl. Gatot Subroto, Kav 74-75<br>
                        Jakarta Selatan 12870<br>
                        Indonesia
                    </p>
                    <a href="https://www.google.com/maps/place/PT.+Enlulu+Sukses+Makmur/@-6.2420816,106.8396387,17z/data=!3m1!4b1!4m6!3m5!1s0x2e69f33673f2be45:0x76df9a46e31353b7!8m2!3d-6.2420816!4d106.842219!16s%2Fg%2F11h40xr4wg?entry=ttu" target="_blank" class="inline-block mt-4 text-orange-600 font-semibold hover:text-orange-700 transition">
                        <i class="fas fa-external-link-alt mr-1"></i><span data-translate="contact_office_map">Lihat di Maps</span>
                    </a>
                </div>

                <!-- Phone & Email -->
                <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800" data-translate="contact_phone_title">Telepon Kami</h3>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            <strong data-translate="contact_phone_office">Kantor:</strong><br>
                            <a href="tel:+622183306658" class="text-blue-600 hover:text-blue-700 font-semibold">
                                (021) 8306658
                            </a>
                        </p>
                        <p class="text-gray-600">
                            <strong data-translate="contact_phone_fax">Fax:</strong><br>
                            <a href="tel:+622183306659" class="text-blue-600 hover:text-blue-700 font-semibold">
                                (021) 8306659
                        </p>
                        <p class="text-gray-600">
                            <strong data-translate="contact_phone_mobile">Seluler:</strong><br>
                            <a href="tel:+6281391000688" class="text-blue-600 hover:text-blue-700 font-semibold">
                                081391000688
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Contact Person -->
                <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-6 md:p-8 text-center hover:shadow-xl hover:scale-105 transition-all duration-300">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
                        <i class="fas fa-user text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl mb-4 text-gray-800" data-translate="contact_person_title">Kontak Person</h3>
                    <div class="space-y-3">
                        <p class="text-gray-600">
                            <strong class="text-gray-800">Trio</strong><br>
                            <span data-translate="contact_person_position">Manager Pengembangan Bisnis'</span>
                        </p>
                        <p class="text-gray-600">
                            <i class="fas fa-envelope mr-2"></i>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=trio@enlulu.co.id" class="text-green-600 hover:text-green-700 font-semibold">
                                trio@enlulu.co.id
                            </a>
                        </p>
                        <div class="flex justify-center gap-4 mt-4">
                            <a href="https://wa.me/6282246842008" target="_blank" class="bg-green-500 text-white p-3 rounded-full hover:bg-green-600 transition">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=trio@enlulu.co.id" class="bg-green-500 text-white p-3 rounded-full hover:bg-green-600 transition">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Form & Map Section -->
    <section id="contact-form" class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 md:px-6">
            <div class="grid lg:grid-cols-2 gap-12 items-start">

                <!-- Contact Form -->
                <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8">
                    <div class="text-center mb-8">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4" data-translate="form_title">Kirim Pesan</h2>
                        <p class="text-gray-600" data-translate="form_subtitle">Isi formulir di bawah ini dan kami akan menghubungi Anda secepatnya.</p>
                    </div>

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
                        @csrf

                        <!-- Success Message -->
                        @if(session('success'))
                        <div class="bg-green-50 border border-green-200 rounded-xl p-4 text-green-700">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle mr-3 text-green-500"></i>
                                <span class="font-semibold">{{ session('success') }}</span>
                            </div>
                        </div>
                        @endif

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2"><span data-translate="form_name">Nama Lengkap </span>
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="text"
                                    name="name"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                    data-translate="form_name_placeholder"
                                    placeholder="Nama lengkap Anda">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2"><span data-translate="form_email">Alamat Email</span>
                                    <span class="text-red-500">*</span>
                                </label>
                                <input
                                    type="email"
                                    name="email"
                                    required
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                    data-translate="form_email_placeholder"
                                    placeholder="email.anda@contoh.com">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" data-translate="form_phone">Nomor Telepon</label>
                                <input
                                    type="tel"
                                    name="phone"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                    data-translate="form_phone_placeholder"
                                    placeholder="+62 xxx xxxx xxxx">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-2" data-translate="form_company">Nama Perusahaan</label>
                                <input
                                    type="text"
                                    name="company"
                                    class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                    data-translate="form_company_placeholder"
                                    placeholder="Perusahaan Anda">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2" data-translate="form_service">Layanan yang Diminati</label>
                            <select
                                name="service"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300">
                                <option value="" data-translate="form_service_select">Pilih layanan</option>
                                <option value="recruitment" data-translate="form_service_recruitment">Rekrutmen & HR</option>
                                <option value="pest-control" data-translate="form_service_pest">Manajemen Pengendalian Hama</option>
                                <option value="cleaning" data-translate="form_service_cleaning">Layanan Kebersihan</option>
                                <option value="security" data-translate="form_service_security">Layanan Keamanan</option>
                                <option value="led-lighting" data-translate="form_service_led">Pencahayaan LED</option>
                                <option value="other" data-translate="form_service_other">Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2"><span data-translate="form_message">Pesan</span>
                                <span class="text-red-500">*</span>
                            </label>
                            <textarea
                                name="message"
                                required
                                rows="5"
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 transition-all duration-300"
                                data-translate="form_message_placeholder"
                                placeholder="Ceritakan lebih lanjut tentang kebutuhan Anda..."></textarea>
                        </div>

                        <button
                            type="submit"
                            :disabled="isSubmitting"
                            class="w-full bg-gradient-to-r from-orange-500 to-orange-600 text-white font-semibold py-4 rounded-xl hover:from-orange-600 hover:to-orange-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl disabled:opacity-70 disabled:cursor-not-allowed"
                            :class="{ 'animate-pulse': isSubmitting }">

                            <span x-show="!isSubmitting" class="flex items-center justify-center">
                                <i class="fas fa-paper-plane mr-2"></i><span data-translate="form_btn_send">Kirim Pesan</span>
                            </span>
                            <span x-show="isSubmitting" x-cloak class="flex items-center justify-center">
                                <i class="fas fa-spinner fa-spin mr-2"></i>
                                Sending...
                            </span>
                        </button>
                    </form>
                </div>

                <!-- Map & Additional Info -->
                <div class="space-y-8">
                    <!-- Interactive Map -->
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                        <div class="p-6 border-b border-gray-100">
                            <h3 class="text-xl font-bold text-gray-800 flex items-center">
                                <i class="fas fa-map-marked-alt mr-3 text-orange-500"></i>
                                <span data-translate="map_title">Lokasi Kami</span>
                            </h3>
                        </div>
                        <div class="relative">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.183460013389!2d106.8396386749964!3d-6.242081593726612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f33673f2be45%3A0x76df9a46e31353b7!2sPT.%20Enlulu%20Sukses%20Makmur!5e0!3m2!1sid!2sid!4v1723977434294!5m2!1sid!2sid"
                                width="100%"
                                height="350"
                                style="border:0;"
                                allowfullscreen=""
                                loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"
                                class="hover:grayscale-0 grayscale transition-all duration-300">
                            </iframe>
                        </div>
                    </div>

                    <!-- Business Hours -->
                    <div class="bg-white rounded-3xl shadow-xl p-6 md:p-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center">
                            <i class="fas fa-clock mr-3 text-orange-500"></i>
                            <span data-translate="hours_title">Jam Operasional</span>
                        </h3>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center py-2 border-b border-gray-100">
                                <span class="font-semibold text-gray-700" data-translate="hours_weekdays">Senin - Jumat</span>
                                <span class="text-gray-600" data-translate="hours_weekdays_time">08:30 - 17:30</span>
                            </div>
                            <div class="flex justify-between items-center py-2 ">
                                <span class="font-semibold text-gray-700" data-translate="hours_saturday">Sabtu</span>
                                <span class="text-red-500 font-semibold" data-translate="hours_closed">Tutup</span>
                            </div>
                            <div class="flex justify-between items-center py-2">
                                <span class="font-semibold text-gray-700" data-translate="hours_sunday">Minggu</span>
                                <span class="text-red-500 font-semibold" data-translate="hours_closed">Tutup</span>
                            </div>
                        </div>
                        <div class="mt-6 p-4 bg-orange-50 rounded-xl">
                            <p class="text-sm text-orange-700">
                                <i class="fas fa-info-circle mr-2"></i>
                                <span data-translate="hours_emergency">Untuk keperluan darurat, silakan hubungi hotline darurat kami:</span> <strong>081391000688</strong>
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
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_home">Beranda</span>
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
                                <a href="/contact" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
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
                                    <p class="text-gray-400 text-xs" data-translate="contact_phone_office">Kantor:</p>
                                    <p class="text-white font-medium">(021) 8306658</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-envelope text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="form_email">Alamat Email</p>
                                    <p class="text-white font-medium text-sm">trio@enlulu.co.id</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="contact_office_title">Kantor Kami</p>
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

            <!-- Social Media & Newsletter -->
            <div class="border-t border-gray-700/50 pt-12 mb-12">
                <div class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent">
                    <div class="text-center md:text-center">
                        <h3 class="text-xl font-bold mb-6 text-white" data-translate="footer_follow">Ikuti Kami</h3>
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
