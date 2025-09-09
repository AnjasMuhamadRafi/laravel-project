<!-- Success Alert -->
@if(session('success'))
<div id="success-alert" class="fixed inset-0 flex items-center justify-center z-[9999]">
    <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-8 rounded-2xl shadow-2xl flex flex-col items-center space-y-4 animate-fade-in w-full max-w-md mx-auto">
        <i class="fas fa-check-circle text-4xl mb-2"></i>
        <span class="font-semibold text-lg text-center">{{ session('success') }}</span>
        <button onclick="document.getElementById('success-alert').style.display='none'" class="mt-4 bg-white text-orange-600 font-bold px-6 py-2 rounded-lg shadow hover:bg-orange-100 transition-all duration-300">OK</button>
    </div>
</div>
<style>
    @keyframes fade-in {
        0% {
            opacity: 0;
            transform: scale(0.95);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-in {
        animation: fade-in 0.4s ease;
    }
</style>
@endif
<!-- Error Alert -->
@if($errors->any())
<div class="fixed top-20 left-1/2 transform -translate-x-1/2 z-50">
    <div class="bg-gradient-to-r from-red-500 to-orange-500 text-white px-8 py-4 rounded-xl shadow-lg flex items-center space-x-4 animate-slide-down">
        <i class="fas fa-exclamation-circle text-2xl"></i>
        <span class="font-semibold">{{ $errors->first() }}</span>
        <button onclick="this.parentElement.parentElement.style.display='none'" class="ml-4 text-white hover:text-gray-200"><i class="fas fa-times"></i></button>
    </div>
</div>
@endif
<!DOCTYPE html>
<html lang="id">
<style>
    .slide-active {
        transform: translateY(-2px) scale(1.08);
        box-shadow: 0 2px 8px 0 rgba(255, 102, 0, 0.15);
        transition: all 0.3s;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - PT. ENLULU SUKSES MAKMUR</title>
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
        // Translation data for Career page
        const translations = {
            id: {
                // Navigation
                nav_home: 'Beranda',
                nav_about: 'Tentang Kami',
                nav_news: 'Berita',
                nav_career: 'Karir',
                nav_contact: 'Kontak',

                // Hero Section
                hero_title: 'Bergabunglah dengan Tim Kami',
                hero_subtitle: 'Bangun Karir Anda bersama Perusahaan Outsourcing Terdepan di Indonesia',
                hero_subtitle_trust: 'Lebih dari 5000 profesional mempercayai kami untuk pertumbuhan karir mereka',
                hero_btn_browse: 'Lihat Lowongan',
                hero_btn_apply: 'Lamar Sekarang',

                // Why Choose Us Section
                why_choose_title: 'Mengapa Memilih PT. Enlulu?',
                stats_years: 'Tahun Berkembang',
                stats_members: 'Anggota Tim',
                stats_programs: 'Program Pelatihan',
                stats_regions: 'Wilayah Utama',

                // Benefits Cards
                benefits_career_title: 'Pertumbuhan Karir',
                benefits_career_desc: 'Jalur perkembangan karir yang jelas dengan program mentoring dan pengembangan kepemimpinan.',
                benefits_balance_title: 'Keseimbangan Hidup-Kerja',
                benefits_balance_desc: 'Pengaturan kerja fleksibel, manfaat kesehatan komprehensif, dan program kesejahteraan karyawan.',
                benefits_culture_title: 'Budaya Inklusif',
                benefits_culture_desc: 'Lingkungan kerja yang beragam dan inklusif di mana kontribusi setiap anggota tim dihargai dan diakui.',

                // Job Search Section
                jobs_title: 'Lowongan Kerja Saat Ini',
                jobs_subtitle: 'Temukan peran yang sempurna untuk Anda dan mulai bangun karir bersama kami hari ini.',
                jobs_search_title: 'Pencarian Kerja',
                jobs_search_placeholder: 'Cari posisi...',
                jobs_dept_select: 'Pilih Departemen',
                jobs_type_select: 'Tipe Pekerjaan',
                jobs_reset: 'Reset',
                jobs_view_details: 'Lihat Detail',
                jobs_apply_now: 'Lamar Sekarang',
                jobs_no_results: 'Tidak ada pekerjaan ditemukan',
                jobs_adjust_criteria: 'Coba sesuaikan kriteria pencarian Anda',

                // Job Listings
                job_requirements: 'Persyaratan Kerja:',
                job_skills: 'Keahlian yang Dibutuhkan',
                job_close: 'Tutup',
                job_description: 'Deskripsi Pekerjaan',

                // Job Positions
                position_sales_wifi: 'Sales Wifi',
                position_kurir_paket: 'Kurir Paket',


                // Experience Levels
                exp_0_1: '0-1 Tahun',
                exp_1_3: '1-3 Tahun',
                exp_2_4: '2-4 Tahun',
                exp_5_plus: '5+ Tahun',

                // Job Types
                type_full_time: 'Penuh Waktu',
                type_part_time: 'Paruh Waktu',
                type_contract: 'Kontrak',

                // Departments
                dept_internet: 'Internet',
                dept_kurir: 'Kurir',

                // Application Modal
                apply_title: 'Lamar untuk Posisi',
                apply_subtitle: 'Lamaran Umum',
                apply_position_label: 'Posisi:',
                apply_full_name: 'Nama Lengkap',
                apply_full_name_placeholder: 'Nama lengkap Anda',
                apply_email: 'Alamat Email',
                apply_email_placeholder: 'email.anda@contoh.com',
                apply_phone: 'Nomor Telepon',
                apply_phone_placeholder: '+62 xxx-xxxx-xxxx',
                apply_experience: 'Tahun Pengalaman',
                apply_exp_select: 'Pilih pengalaman',
                apply_exp_fresh: '0-1 Tahun (Fresh Graduate)',
                apply_exp_1_3: '1-3 Tahun',
                apply_exp_3_5: '3-5 Tahun',
                apply_exp_5_plus: '5+ Tahun',
                apply_position: 'Posisi yang Dilamar',
                apply_position_select: 'Pilih Posisi',
                apply_cover_letter: 'Surat Pengantar',
                apply_cover_letter_placeholder: 'Ceritakan mengapa Anda tertarik dengan posisi ini dan apa yang membuat Anda kandidat yang tepat...',
                apply_resume: 'Resume/CV',
                apply_resume_drop: 'Letakkan resume Anda di sini atau klik untuk browse',
                apply_resume_formats: 'Format yang didukung: PDF, DOC, DOCX (Maksimal 5MB)',
                apply_submit: 'Kirim Lamaran',
                apply_cancel: 'Batal',

                // Benefits Section
                benefits_title: 'Tunjangan Karyawan',
                benefits_subtitle: 'Kami percaya untuk merawat anggota tim kami dengan manfaat komprehensif dan peluang pertumbuhan.',

                // Benefit Categories
                benefit_health_title: 'Kesehatan & Kebugaran',
                benefit_health_insurance: 'Asuransi Kesehatan Komprehensif',
                benefit_health_checkup: 'Pemeriksaan Kesehatan Tahunan',
                benefit_health_mental: 'Dukungan Kesehatan Mental',
                benefit_health_wellness: 'Program Kesejahteraan',

                benefit_financial_title: 'Keamanan Finansial',
                benefit_financial_salary: 'Paket Gaji Kompetitif',
                benefit_financial_bonus: 'Bonus Kinerja',
                benefit_financial_retirement: 'Rencana Tabungan Pensiun',
                benefit_financial_insurance: 'Asuransi Jiwa',

                benefit_worklife_title: 'Keseimbangan Hidup-Kerja',
                benefit_worklife_flexible: 'Jam Kerja Fleksibel',
                benefit_worklife_remote: 'Opsi Kerja Jarak Jauh',
                benefit_worklife_timeoff: 'Cuti Berbayar',
                benefit_worklife_family: 'Kebijakan Cuti Keluarga',

                benefit_career_title: 'Pertumbuhan Karir',
                benefit_career_training: 'Program Pelatihan Profesional',
                benefit_career_mentorship: 'Peluang Mentoring',
                benefit_career_promotion: 'Prioritas Promosi Internal',
                benefit_career_skills: 'Dukungan Pengembangan Keahlian',

                benefit_culture_title: 'Budaya Tim',
                benefit_culture_inclusive: 'Lingkungan Kerja Inklusif',
                benefit_culture_building: 'Aktivitas Team Building',
                benefit_culture_recognition: 'Program Penghargaan',
                benefit_culture_communication: 'Komunikasi Terbuka',

                benefit_perks_title: 'Fasilitas Tambahan',
                benefit_perks_discounts: 'Diskon Karyawan',
                benefit_perks_transport: 'Tunjangan Transportasi',
                benefit_perks_meals: 'Subsidi Makan',
                benefit_perks_events: 'Acara Perusahaan',

                // Contact CTA Section
                cta_title: 'Siap Memulai Perjalanan Anda?',
                cta_subtitle: 'Bergabunglah dengan tim profesional yang bersemangat dan bangun karir yang memuaskan bersama salah satu perusahaan outsourcing terdepan di Indonesia.',
                cta_apply_now: 'Lamar Sekarang',
                cta_contact_hr: 'Hubungi HR',
                cta_contact_title: 'Hubungi Kami',
                cta_hr_email: 'Email HR',
                cta_phone: 'Telepon',
                cta_whatsapp: 'WhatsApp',
                cta_response_time: 'Waktu respons: Dalam 24 jam',

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

                // Job Requirements (common phrases)
                req_have_vehicle: 'Memiliki kendaraan bermotor',
                req_male_female: 'Pria/wanita',
                req_age_limit: 'Usia max 45 tahun',
                req_sales_experience: 'Memiliki pengalaman minimal 1 thn di bidang sales/marketing',
                req_teamwork: 'Terbiasa bekerja dengan team',
                req_pressure: 'Siap bekerja di bawah tekanan',

                // Skills (common phrases)
                skill_marketing_sales: 'Marketing, Sales'
            },
            en: {
                // Navigation
                nav_home: 'Home',
                nav_about: 'About Us',
                nav_news: 'News',
                nav_career: 'Career',
                nav_contact: 'Contact Us',

                // Hero Section
                hero_title: 'Join Our Team',
                hero_subtitle: 'Build Your Career with Indonesia\'s Leading Outsourcing Company',
                hero_subtitle_trust: 'Over 5000 professionals trust us with their career growth',
                hero_btn_browse: 'Browse Jobs',
                hero_btn_apply: 'Apply Now',

                // Why Choose Us Section
                why_choose_title: 'Why Choose PT. Enlulu?',
                stats_years: 'Years Growth',
                stats_members: 'Team Members',
                stats_programs: 'Training Programs',
                stats_regions: 'Major Regions',

                // Benefits Cards
                benefits_career_title: 'Career Growth',
                benefits_career_desc: 'Clear career progression paths with mentorship programs and leadership development opportunities.',
                benefits_balance_title: 'Work-Life Balance',
                benefits_balance_desc: 'Flexible working arrangements, comprehensive health benefits, and employee wellness programs.',
                benefits_culture_title: 'Inclusive Culture',
                benefits_culture_desc: 'Diverse and inclusive workplace where every team member\'s contribution is valued and recognized.',

                // Job Search Section
                jobs_title: 'Current Job Openings',
                jobs_subtitle: 'Find your perfect role and start building your career with us today.',
                jobs_search_title: 'Job Search',
                jobs_search_placeholder: 'Search job title...',
                jobs_dept_select: 'Select Department',
                jobs_type_select: 'Job Type',
                jobs_reset: 'Reset',
                jobs_view_details: 'View Details',
                jobs_apply_now: 'Apply Now',
                jobs_no_results: 'No jobs found',
                jobs_adjust_criteria: 'Try adjusting your search criteria',

                // Job Listings
                job_requirements: 'Job Requirements',
                job_skills: 'Required Skills',
                job_close: 'Close',
                job_description: 'Job Description',

                // Job Positions
                position_sales_wifi: 'Wifi Sales',
                position_kurir_paket: 'Package Courier',

                // Experience Levels
                exp_0_1: '0-1 Years',
                exp_1_3: '1-3 Years',
                exp_2_4: '2-4 Years',
                exp_5_plus: '5+ Years',

                // Job Types
                type_full_time: 'Full Time',
                type_part_time: 'Part Time',
                type_contract: 'Contract',

                // Departments
                dept_internet: 'Internet',
                dept_kurir: 'Courier',

                // Application Modal
                apply_title: 'Apply for Position',
                apply_subtitle: 'General Application',
                apply_position_label: 'Position:',
                apply_full_name: 'Full Name',
                apply_full_name_placeholder: 'Your full name',
                apply_email: 'Email Address',
                apply_email_placeholder: 'your.email@example.com',
                apply_phone: 'Phone Number',
                apply_phone_placeholder: '+62 xxx-xxxx-xxxx',
                apply_experience: 'Years of Experience',
                apply_exp_select: 'Select experience',
                apply_exp_fresh: '0-1 Years (Fresh Graduate)',
                apply_exp_1_3: '1-3 Years',
                apply_exp_3_5: '3-5 Years',
                apply_exp_5_plus: '5+ Years',
                apply_position: 'Position Applied For',
                apply_position_select: 'Select Position',
                apply_cover_letter: 'Cover Letter',
                apply_cover_letter_placeholder: 'Tell us why you\'re interested in this position and what makes you a great candidate...',
                apply_resume: 'Resume/CV',
                apply_resume_drop: 'Drop your resume here or click to browse',
                apply_resume_formats: 'Supported formats: PDF, DOC, DOCX (Max 5MB)',
                apply_submit: 'Submit Application',
                apply_cancel: 'Cancel',

                // Benefits Section
                benefits_title: 'Employee Benefits',
                benefits_subtitle: 'We believe in taking care of our team members with comprehensive benefits and growth opportunities.',

                // Benefit Categories
                benefit_health_title: 'Health & Wellness',
                benefit_health_insurance: 'Comprehensive Health Insurance',
                benefit_health_checkup: 'Annual Health Check-ups',
                benefit_health_mental: 'Mental Health Support',
                benefit_health_wellness: 'Wellness Programs',

                benefit_financial_title: 'Financial Security',
                benefit_financial_salary: 'Competitive Salary Package',
                benefit_financial_bonus: 'Performance Bonuses',
                benefit_financial_retirement: 'Retirement Savings Plan',
                benefit_financial_insurance: 'Life Insurance Coverage',

                benefit_worklife_title: 'Work-Life Balance',
                benefit_worklife_flexible: 'Flexible Working Hours',
                benefit_worklife_remote: 'Remote Work Options',
                benefit_worklife_timeoff: 'Paid Time Off',
                benefit_worklife_family: 'Family Leave Policies',

                benefit_career_title: 'Career Growth',
                benefit_career_training: 'Professional Training Programs',
                benefit_career_mentorship: 'Mentorship Opportunities',
                benefit_career_promotion: 'Internal Promotion Priority',
                benefit_career_skills: 'Skills Development Support',

                benefit_culture_title: 'Team Culture',
                benefit_culture_inclusive: 'Inclusive Work Environment',
                benefit_culture_building: 'Team Building Activities',
                benefit_culture_recognition: 'Recognition Programs',
                benefit_culture_communication: 'Open Communication',

                benefit_perks_title: 'Additional Perks',
                benefit_perks_discounts: 'Employee Discounts',
                benefit_perks_transport: 'Transportation Allowance',
                benefit_perks_meals: 'Meal Subsidies',
                benefit_perks_events: 'Company Events',

                // Contact CTA Section
                cta_title: 'Ready to Start Your Journey?',
                cta_subtitle: 'Join our team of passionate professionals and build a rewarding career with one of Indonesia\'s leading outsourcing companies.',
                cta_apply_now: 'Apply Now',
                cta_contact_hr: 'Contact HR',
                cta_contact_title: 'Get In Touch',
                cta_hr_email: 'HR Email',
                cta_phone: 'Phone',
                cta_whatsapp: 'WhatsApp',
                cta_response_time: 'Response time: Within 24 hours',

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

                // Job Requirements (common phrases)
                req_have_vehicle: 'Must have a motorcycle/vehicle',
                req_male_female: 'Male/Female',
                req_age_limit: 'Maximum age 45 years',
                req_sales_experience: 'Minimum 1 year experience in sales/marketing field',
                req_teamwork: 'Able to work in team environment',
                req_pressure: 'Ready to work under pressure',

                // Skills (common phrases)
                skill_marketing_sales: 'Marketing, Sales'
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

<body class="bg-gradient-to-br from-gray-50 via-white to-gray-100 text-gray-800 font-sans overflow-x-hidden"
    x-data="{
        showApplyModal: false,
        selectedJob: null,
        applicationData: {
            fullName: '',
            email: '',
            phone: '',
            position: '',
            experience: '',
            coverLetter: '',
            resume: null
        },
        submitApplication() {
            alert('Application submitted successfully! We will contact you soon.');
            this.showApplyModal = false;
            this.applicationData = {
                fullName: '',
                email: '',
                phone: '',
                position: '',
                experience: '',
                coverLetter: '',
                resume: null
            };
        }
    }">

    <!-- Success Alert -->
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
                <a href="/career" class="relative text-orange-600 group">
                    <span data-translate="nav_career">Karir</span>
                    <span class="absolute -bottom-1 left-0 w-full h-0.5 bg-orange-600"></span>
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
                <a href="/news" class="hover:text-orange-600 transition-colors py-2" data-translate="nav_news">Berita</a>
                <a href="/career" class="text-orange-600 py-2" data-translate="nav_career">Karir</a>
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
                <h1 class="text-3xl md:text-7xl font-bold mb-4 md:mb-6 leading-tight md:leading-[1.35] bg-gradient-to-r from-white via-orange-100 to-white bg-clip-text text-transparent" data-translate="hero_title">
                    Bergabunglah dengan Tim Kami
                </h1>

                <div class="w-32 h-1 bg-white mx-auto mb-8 rounded-full"></div>
            </div>

            <div class="text-xl md:text-2xl opacity-90 leading-relaxed md:leading-[1.6] max-w-4xl mx-auto mb-12 flex flex-col gap-2 items-center">
                <span data-translate="hero_subtitle" class="block text-center">Bangun Karir Anda bersama Perusahaan Outsourcing Terdepan di Indonesia</span>
                <span data-translate="hero_subtitle_trust" class="block text-center text-orange-200">Lebih dari 5000 profesional mempercayai kami untuk pertumbuhan karir mereka</span>
            </div>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="#jobs" class="group bg-white text-orange-600 px-10 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center space-x-3">
                    <span data-translate="hero_btn_browse">Lihat Lowongan</span>
                    <i class="fas fa-search group-hover:translate-x-1 transition-transform"></i>
                </a>
                <button @click="showApplyModal = true" class="group bg-transparent border-2 border-white text-white px-10 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center space-x-3">
                    <span data-translate="hero_btn_apply">Lamar Sekarang</span>
                    <i class="fas fa-paper-plane group-hover:scale-110 transition-transform"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section class="py-20 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-orange-50/50 to-red-50/50"></div>
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-2xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent leading-tight md:leading-[1.35] break-words whitespace-normal" data-translate="why_choose_title">Mengapa Memilih PT. Enlulu?</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-16">
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-orange-500 to-red-500 text-white rounded-3xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-chart-line text-3xl mb-3"></i>
                        <div class="text-2xl font-bold mb-2">17+</div>
                        <div class="text-xs opacity-90" data-translate="stats_years">Tahun Berkembang</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-blue-500 to-cyan-500 text-white rounded-3xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-users text-3xl mb-3"></i>
                        <div class="text-2xl font-bold mb-2">5000+</div>
                        <div class="text-xs opacity-90" data-translate="stats_members">Anggota Tim</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-green-500 to-teal-500 text-white rounded-3xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-graduation-cap text-3xl mb-3"></i>
                        <div class="text-2xl font-bold mb-2">100+</div>
                        <div class="text-xs opacity-90" data-translate="stats_programs">Program Pelatihan</div>
                    </div>
                </div>
                <div class="text-center group">
                    <div class="bg-gradient-to-br from-purple-500 to-pink-500 text-white rounded-3xl p-6 transform hover:scale-110 transition-all duration-300 hover:shadow-2xl mb-4">
                        <i class="fas fa-map-marker-alt text-3xl mb-3"></i>
                        <div class="text-2xl font-bold mb-2">3</div>
                        <div class="text-xs opacity-90" data-translate="stats_regions">Wilayah Utama</div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-orange-50 to-red-50 p-8 rounded-3xl hover:shadow-xl transition-all duration-300">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 leading-[2] pb-1" data-translate="benefits_career_title">Pertumbuhan Karir</h3>
                    <p class="text-gray-600 leading-relaxed pb-1" style="line-height:1.7;" data-translate="benefits_career_desc">Jalur perkembangan karir yang jelas dengan program mentoring dan pengembangan kepemimpinan.</p>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-cyan-50 p-8 rounded-3xl hover:shadow-xl transition-all duration-300">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 leading-[2] pb-1" data-translate="benefits_balance_title">Keseimbangan Hidup-Kerja</h3>
                    <p class="text-gray-600 leading-relaxed pb-1" style="line-height:1.7;" data-translate="benefits_balance_desc">Pengaturan kerja fleksibel, manfaat kesehatan komprehensif, dan program kesejahteraan karyawan.</p>
                </div>

                <div class="bg-gradient-to-br from-green-50 to-teal-50 p-8 rounded-3xl hover:shadow-xl transition-all duration-300">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 leading-[2] pb-1" data-translate="benefits_culture_title">Budaya Inklusif</h3>
                    <p class="text-gray-600 leading-relaxed pb-1" style="line-height:1.7;" data-translate="benefits_culture_desc">Lingkungan kerja yang beragam dan inklusif di mana kontribusi setiap anggota tim dihargai dan diakui.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Job Search Section -->
    <section id="jobs" x-data="{
        selectedDept: '',
        selectedType: '',
        searchTerm: '',
        departments: ['', 'Internet','Pemasaran', 'Kurir'],
        jobTypes: ['', 'Full Time', 'Part Time', 'Contract'],
        jobs: [
            {
        title: 'Sales Wifi',
        dept: ['Internet', 'Pemasaran'], // Changed to array with both departments
        type: 'Full Time',
        experience: '1-3 Years',
        requirements: [
        'Memiliki kendaraan bermotor',
        'Pria/wanita, usia maksimal 45 tahun',
        'Pengalaman minimal 1 tahun di bidang sales/marketing',
        'Terbiasa bekerja dengan tim',
        'Siap bekerja di bawah tekanan'
        ],
        skills: ['Marketing', 'Sales', 'Komunikasi', 'Negosiasi'],
        description: 'Sales Wifi bertugas untuk memasarkan produk layanan internet kepada calon pelanggan melalui promosi, sosialisasi, dan presentasi. Sales Wifi juga membantu proses registrasi pelanggan, memastikan layanan terpasang dengan baik, serta menjaga hubungan dengan pelanggan.\n\n📝 Catatan Penting: Dalam surat pengantar Anda, harap sebutkan provider internet pilihan dan lokasi penempatan yang diinginkan sesuai dengan domisili anda atau opsi yang tersedia di bawah ini.',
        responsibilities: [
        'Melakukan promosi dan presentasi produk Wifi secara offline maupun online',
        'Mencari dan mendapatkan pelanggan baru',
        'Membantu calon pelanggan dalam proses registrasi',
        'Mengawal proses hingga layanan aktif',
        'Menjaga komunikasi dengan pelanggan untuk layanan purna jual',
        'Mencapai target penjualan bulanan yang ditetapkan'
        ],
        remuneration: {
        salary: 'Gaji pokok sesuai kebijakan perusahaan',
        incentives: 'Insentif penjualan berdasarkan pencapaian',
        facilities: ['Seragam (opsional)', 'ID Card', 'BPJS (jika ada)']
        },
        provider: [
        'CBN',
        'MyRepublic',
        'Balifiber',
        'Greenet'
        ],
        placement: [
        'Jakarta',
        'Bandung',
        'Surabaya',
        'Bali',
        ]
        },
            {
                title: 'Kurir Paket',
                dept: 'Kurir',
                type: 'Full Time',
                experience: '1-3 Years',
                requirements: [
                    'Memiliki kendaraan bermotor',
                    'Pria',
                    'Usia max 45 tahun',
                    'Memiliki Sim C',
                    'Terbiasa bekerja mandiri dan dengan team',
                    'Siap bekerja di bawah tekanan'
                ],
                skills: ['Berkendara', 'Baca Map', 'Navigasi', 'Manajemen Waktu'],
                description: 'Bergabunglah dengan tim kurir profesional kami! Sebagai Kurir Paket, Anda akan bertanggung jawab untuk mengantarkan paket dengan aman dan tepat waktu kepada pelanggan. Kami menawarkan lingkungan kerja yang mendukung dengan pelatihan komprehensif dan peluang pengembangan karier yang menarik.'
            }
        ],
        filteredJobs() {
            return this.jobs.filter(job => {
                const matchesDept = !this.selectedDept ||
                    (Array.isArray(job.dept) ? job.dept.includes(this.selectedDept) : job.dept === this.selectedDept);
                const matchesType = !this.selectedType || job.type === this.selectedType;
                const matchesSearch = !this.searchTerm || job.title.toLowerCase().includes(this.searchTerm.toLowerCase());
                return matchesDept && matchesType && matchesSearch;
            });
        },
        selectedJob: null,
        showJobDetail: false
    }" class="py-24 bg-gradient-to-br from-gray-50 to-white relative overflow-hidden">
        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-gray-800 to-orange-600 bg-clip-text text-transparent leading-tight md:leading-[1.35] break-words whitespace-normal" data-translate="jobs_title">
                    Lowongan Kerja Saat Ini
                </h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto" data-translate="jobs_subtitle">
                    Temukan peran yang sempurna untuk Anda dan mulai bangun karir bersama kami hari ini.
                </p>
            </div>

            <!-- Job Filters -->
            <div class="bg-white rounded-3xl p-8 shadow-xl mb-12 border border-gray-100">
                <h3 class="text-2xl font-bold mb-6 text-gray-800" data-translate="jobs_search_title">Pencarian Kerja</h3>
                <div class="grid md:grid-cols-4 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search Jobs</label>
                        <div class="relative">
                            <input x-model="searchTerm" type="text" data-translate="jobs_search_placeholder" placeholder="Cari posisi..." class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="jobs_dept_select">Pilih Departemen</label>
                        <select x-model="selectedDept" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Pilih Departemen</option>
                            <option value="Internet">Internet</option>
                            <option value="Pemasaran">Pemasaran</option>
                            <option value="Kurir">Kurir</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="jobs_type_select">Tipe Pekerjaan</label>
                        <select x-model="selectedType" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                            <option value="">Tipe Pekerjaan</option>
                            <option value="Full Time">Penuh Waktu</option>
                            <option value="Part Time">Paruh Waktu</option>
                            <option value="Contract">Kontrak</option>
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button @click="selectedDept=''; selectedType=''; searchTerm=''" class="w-full bg-gradient-to-r from-gray-500 to-gray-600 text-white px-6 py-3 rounded-xl hover:from-gray-600 hover:to-gray-700 transition-all duration-300 font-medium">
                            <i class="fas fa-refresh mr-2"></i><span data-translate="jobs_reset">Reset</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Job Listings -->
            <div class="space-y-6">
                <template x-for="job in filteredJobs()" :key="job.title">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 group">
                        <div class="flex flex-col md:flex-row md:items-center justify-between">
                            <div class="flex-1">
                                <div class="flex flex-col md:flex-row md:items-center md:space-x-6 mb-4">
                                    <h3 class="text-2xl font-bold text-gray-800 group-hover:text-orange-600 transition-colors leading-relaxed pb-1" x-text="job.title"></h3>
                                    <div class="flex items-center space-x-4 mt-2 md:mt-0">
                                        <!-- Updated department display for arrays -->
                                        <template x-if="Array.isArray(job.dept)">
                                            <div class="flex space-x-2">
                                                <template x-for="dept in job.dept">
                                                    <span class="bg-orange-100 text-orange-600 px-3 py-1.5 rounded-full text-sm font-medium leading-relaxed" x-text="dept"></span>
                                                </template>
                                            </div>
                                        </template>
                                        <template x-if="!Array.isArray(job.dept)">
                                            <span class="bg-orange-100 text-orange-600 px-3 py-1.5 rounded-full text-sm font-medium leading-relaxed" x-text="job.dept"></span>
                                        </template>
                                        <span class="bg-blue-100 text-blue-600 px-3 py-1.5 rounded-full text-sm font-medium leading-relaxed" x-text="job.type"></span>
                                        <span class="bg-green-100 text-green-600 px-3 py-1.5 rounded-full text-sm font-medium leading-relaxed" x-text="job.experience"></span>
                                    </div>
                                </div>
                                <div class="text-gray-600">
                                    <p class="mb-2"><strong data-translate="job_requirements">Persyaratan Kerja:</strong></p>
                                    <ul class="list-disc list-inside space-y-1 text-sm">
                                        <template x-for="req in job.requirements.slice(0,3)">
                                            <li x-text="req" class="pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"></li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-6 md:mt-0 md:ml-6 flex flex-col space-y-3">
                                <button @click="selectedJob = job; showJobDetail = true" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-xl hover:from-orange-600 hover:to-red-600 transition-all duration-300 font-medium group-hover:scale-105">
                                    <i class="fas fa-eye mr-2"></i><span data-translate="jobs_view_details">Lihat Detail</span>
                                </button>
                                <button @click="selectedJob = job; showApplyModal = true" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-6 py-3 rounded-xl hover:from-green-600 hover:to-teal-600 transition-all duration-300 font-medium">
                                    <i class="fas fa-paper-plane mr-2"></i><span data-translate="jobs_apply_now">Lamar Sekarang</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>

                <div x-show="filteredJobs().length === 0" class="text-center py-12">
                    <i class="fas fa-search text-6xl text-gray-300 mb-4"></i>
                    <h3 class="text-2xl font-bold text-gray-500 mb-2" data-translate="jobs_no_results">Tidak ada pekerjaan ditemukan</h3>
                    <p class="text-gray-400" data-translate="jobs_adjust_criteria">Coba sesuaikan kriteria pencarian Anda</p>
                </div>
            </div>
        </div>

        <!-- Job Detail Modal -->
        <div x-show="showJobDetail" x-cloak class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4" @click.self="showJobDetail = false">
            <div class="bg-white rounded-3xl max-w-4xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
                <div class="p-8">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-2" x-text="selectedJob?.title"></h2>
                            <div class="flex items-center space-x-4">
                                <!-- Updated department display in modal -->
                                <template x-if="selectedJob && Array.isArray(selectedJob.dept)">
                                    <div class="flex space-x-2">
                                        <template x-for="dept in selectedJob.dept">
                                            <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-medium" x-text="dept"></span>
                                        </template>
                                    </div>
                                </template>
                                <template x-if="selectedJob && !Array.isArray(selectedJob.dept)">
                                    <span class="bg-orange-100 text-orange-600 px-3 py-1 rounded-full text-sm font-medium" x-text="selectedJob?.dept"></span>
                                </template>
                                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-sm font-medium" x-text="selectedJob?.type"></span>
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium" x-text="selectedJob?.experience"></span>
                            </div>
                        </div>
                        <button @click="showJobDetail = false" class="text-gray-400 hover:text-gray-600 text-2xl">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="space-y-6">
                        <!-- Job Description Section -->
                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4" data-translate="job_description">Deskripsi Pekerjaan</h3>
                            <div class="text-gray-600 leading-relaxed">
                                <p x-text="selectedJob?.description" class="mb-3"></p>
                            </div>
                        </div>

                        <!-- Job Responsibilities -->
                        <div x-show="selectedJob?.responsibilities">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Tanggung Jawab Pekerjaan</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <template x-for="resp in selectedJob?.responsibilities">
                                    <li x-text="resp"></li>
                                </template>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4" data-translate="job_requirements">Persyaratan Kerja</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <template x-for="req in selectedJob?.requirements">
                                    <li x-text="req"></li>
                                </template>
                            </ul>
                        </div>

                        <div>
                            <h3 class="text-xl font-bold text-gray-800 mb-4" data-translate="job_skills">Keahlian yang Dibutuhkan</h3>
                            <ul class="list-disc list-inside space-y-2 text-gray-600">
                                <template x-for="skill in selectedJob?.skills">
                                    <li x-text="skill"></li>
                                </template>
                            </ul>
                        </div>

                        <!-- Remuneration -->
                        <div x-show="selectedJob?.remuneration">
                            <h3 class="text-xl font-bold text-gray-800 mb-4">Remunerasi & Fasilitas</h3>
                            <div class="bg-green-50 p-4 rounded-xl">
                                <div class="grid md:grid-cols-2 gap-4">
                                    <div>
                                        <p class="font-semibold text-green-800 mb-2">Gaji:</p>
                                        <p class="text-green-700" x-text="selectedJob?.remuneration?.salary"></p>
                                    </div>
                                    <div>
                                        <p class="font-semibold text-green-800 mb-2">Insentif:</p>
                                        <p class="text-green-700" x-text="selectedJob?.remuneration?.incentives"></p>
                                    </div>
                                </div>
                                <div class="mt-4" x-show="selectedJob?.remuneration?.facilities">
                                    <p class="font-semibold text-green-800 mb-2">Fasilitas:</p>
                                    <ul class="list-disc list-inside text-green-700 text-sm">
                                        <template x-for="facility in selectedJob?.remuneration?.facilities">
                                            <li x-text="facility"></li>
                                        </template>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Provider & Placement -->
                        <div class="grid md:grid-cols-2 gap-6">
                            <div x-show="selectedJob?.provider">
                                <h3 class="text-xl font-bold text-gray-800 mb-4">Provider Internet</h3>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="provider in selectedJob?.provider">
                                        <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium" x-text="provider"></span>
                                    </template>
                                </div>
                            </div>

                            <div x-show="selectedJob?.placement">
                                <h3 class="text-xl font-bold text-gray-800 mb-4">Penempatan</h3>
                                <div class="flex flex-wrap gap-2">
                                    <template x-for="place in selectedJob?.placement">
                                        <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium" x-text="place"></span>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="flex space-x-4 pt-6">
                            <button @click="showJobDetail = false; showApplyModal = true" class="bg-gradient-to-r from-green-500 to-teal-500 text-white px-8 py-3 rounded-xl hover:from-green-600 hover:to-teal-600 transition-all duration-300 font-medium">
                                <i class="fas fa-paper-plane mr-2"></i><span data-translate="jobs_apply_now">Lamar Sekarang</span>
                            </button>
                            <button @click="showJobDetail = false" class="bg-gradient-to-r from-gray-500 to-gray-600 text-white px-8 py-3 rounded-xl hover:from-gray-600 hover:to-gray-700 transition-all duration-300 font-medium">
                                <i class="fas fa-times mr-2"></i><span data-translate="job_close">Tutup</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Application Modal -->
        <div x-show="showApplyModal" x-cloak class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4">
            <div class="bg-white rounded-3xl max-w-2xl w-full max-h-[90vh] overflow-y-auto" @click.stop>
                <div class="p-8">
                    <div class="flex justify-between items-center mb-8">
                        <div>
                            <h2 class="text-3xl font-bold text-gray-800 mb-2" data-translate="apply_title">Apply for Position</h2>
                            <p class="text-gray-600" data-translate="apply_subtitle" x-text="selectedJob ? `${translations[currentLang].apply_position_label} ${selectedJob.title}` : translations[currentLang].apply_subtitle"></p>
                        </div>
                        <button @click="showApplyModal = false" class="text-gray-400 hover:text-gray-600 text-2xl">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <form action="{{ route('career.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_full_name">Full Name *</label>
                                <input name="fullName" type="text" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="Your full name" data-translate-placeholder="apply_full_name_placeholder" value="{{ old('fullName') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_email">Email Address *</label>
                                <input name="email" type="email" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="your.email@example.com" data-translate-placeholder="apply_email_placeholder" value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_phone">Phone Number *</label>
                                <input name="phone" type="tel" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent" placeholder="+62 xxx-xxxx-xxxx" data-translate-placeholder="apply_phone_placeholder" value="{{ old('phone') }}">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_experience">Years of Experience</label>
                                <select name="experience" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                    <option value="" data-translate="apply_exp_select">Select experience</option>
                                    <option value="0-1" {{ old('experience')=='0-1'?'selected':'' }} data-translate="apply_exp_fresh">0-1 Years (Fresh Graduate)</option>
                                    <option value="1-3" {{ old('experience')=='1-3'?'selected':'' }} data-translate="apply_exp_1_3">1-3 Years</option>
                                    <option value="3-5" {{ old('experience')=='3-5'?'selected':'' }} data-translate="apply_exp_3_5">3-5 Years</option>
                                    <option value="5+" {{ old('experience')=='5+'?'selected':'' }} data-translate="apply_exp_5_plus">5+ Years</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_position">Position Applied For</label>
                            <select name="position" required class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent">
                                <option value="" data-translate="apply_position_select">Select Position</option>
                                <option value="Sales Wifi" {{ old('position')=='Sales Wifi'?'selected':'' }} data-translate="position_sales_wifi">Sales Wifi</option>
                                <option value="Kurir Paket" {{ old('position')=='Kurir Paket'?'selected':'' }} data-translate="position_kurir_paket">Kurir Paket</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_cover_letter">Cover Letter *</label>
                            <textarea name="coverLetter" required rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-orange-500 focus:border-transparent resize-none" placeholder="Tell us why you're interested in this position and what makes you a great candidate..." data-translate-placeholder="apply_cover_letter_placeholder">{{ old('coverLetter') }}</textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2" data-translate="apply_resume">Resume/CV *</label>
                            <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center hover:border-orange-500 transition-colors">
                                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                                <p class="text-gray-600 mb-2" data-translate="apply_resume_drop">Drop your resume here or click to browse</p>
                                <input type="file" name="resume" accept=".pdf,.doc,.docx" class="block mx-auto mb-2" required>
                                <p class="text-xs text-gray-500 mt-2" data-translate="apply_resume_formats">Supported formats: PDF, DOC, DOCX (Max 5MB)</p>
                            </div>
                        </div>

                        <div class="flex space-x-4 pt-6">
                            <button type="submit" class="flex-1 bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-xl hover:from-orange-600 hover:to-red-600 transition-all duration-300 font-medium text-lg">
                                <i class="fas fa-paper-plane mr-2"></i><span data-translate="apply_submit">Submit Application</span>
                            </button>
                            <button type="button" @click="showApplyModal = false" class="bg-gradient-to-r from-gray-500 to-gray-600 text-white px-8 py-4 rounded-xl hover:from-gray-600 hover:to-gray-700 transition-all duration-300 font-medium">
                                <i class="fas fa-times mr-2"></i><span data-translate="apply_cancel">Cancel</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>

    <!-- Benefits Section -->
    <section class="py-24 bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 left-1/4 w-64 h-64 bg-orange-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-red-500/10 rounded-full blur-3xl"></div>
            <div class="absolute top-1/2 left-0 w-48 h-48 bg-blue-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-white via-orange-300 to-red-300 bg-clip-text text-transparent leading-tight md:leading-[1.35] break-words whitespace-normal" data-translate="benefits_title">Employee Benefits</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-orange-500 to-red-500 rounded-full mx-auto mb-8"></div>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto" data-translate="benefits_subtitle">We believe in taking care of our team members with comprehensive benefits and growth opportunities.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Health & Wellness -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-green-500 to-teal-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_health_title">Health & Wellness</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-green-400 mr-3 text-xs"></i><span data-translate="benefit_health_insurance">Comprehensive Health Insurance</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-green-400 mr-3 text-xs"></i><span data-translate="benefit_health_checkup">Annual Health Check-ups</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-green-400 mr-3 text-xs"></i><span data-translate="benefit_health_mental">Mental Health Support</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-green-400 mr-3 text-xs"></i><span data-translate="benefit_health_wellness">Wellness Programs</span></li>
                    </ul>
                </div>

                <!-- Financial Benefits -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-blue-500 to-cyan-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-coins text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_financial_title">Financial Security</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-blue-400 mr-3 text-xs"></i><span data-translate="benefit_financial_salary">Competitive Salary Package</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-blue-400 mr-3 text-xs"></i><span data-translate="benefit_financial_bonus">Performance Bonuses</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-blue-400 mr-3 text-xs"></i><span data-translate="benefit_financial_retirement">Retirement Savings Plan</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-blue-400 mr-3 text-xs"></i><span data-translate="benefit_financial_insurance">Life Insurance Coverage</span></li>
                    </ul>
                </div>

                <!-- Work-Life Balance -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-balance-scale text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_worklife_title">Work-Life Balance</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-purple-400 mr-3 text-xs"></i><span data-translate="benefit_worklife_flexible">Flexible Working Hours</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-purple-400 mr-3 text-xs"></i><span data-translate="benefit_worklife_remote">Remote Work Options</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-purple-400 mr-3 text-xs"></i><span data-translate="benefit_worklife_timeoff">Paid Time Off</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-purple-400 mr-3 text-xs"></i><span data-translate="benefit_worklife_family">Family Leave Policies</span></li>
                    </ul>
                </div>

                <!-- Career Development -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-orange-500 to-red-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-rocket text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_career_title">Career Growth</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-orange-400 mr-3 text-xs"></i><span data-translate="benefit_career_training">Professional Training Programs</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-orange-400 mr-3 text-xs"></i><span data-translate="benefit_career_mentorship">Mentorship Opportunities</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-orange-400 mr-3 text-xs"></i><span data-translate="benefit_career_promotion">Internal Promotion Priority</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-orange-400 mr-3 text-xs"></i><span data-translate="benefit_career_skills">Skills Development Support</span></li>
                    </ul>
                </div>

                <!-- Team Culture -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-yellow-500 to-orange-500 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_culture_title">Team Culture</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-yellow-400 mr-3 text-xs"></i><span data-translate="benefit_culture_inclusive">Inclusive Work Environment</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-yellow-400 mr-3 text-xs"></i><span data-translate="benefit_culture_building">Team Building Activities</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-yellow-400 mr-3 text-xs"></i><span data-translate="benefit_culture_recognition">Recognition Programs</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-yellow-400 mr-3 text-xs"></i><span data-translate="benefit_culture_communication">Open Communication</span></li>
                    </ul>
                </div>

                <!-- Additional Perks -->
                <div class="group bg-gradient-to-br from-white/10 to-white/5 backdrop-blur-sm rounded-3xl p-8 hover:bg-white/15 transition-all duration-500 transform hover:-translate-y-2 hover:shadow-2xl border border-white/10">
                    <div class="bg-gradient-to-r from-indigo-500 to-blue-600 w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-gift text-white text-2xl"></i>
                    </div>
                    <h3 class="font-bold text-xl text-white mb-4 leading-[2] pb-1" data-translate="benefit_perks_title">Additional Perks</h3>
                    <ul class="space-y-3 text-sm text-gray-300 leading-[1.7] pb-1">
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-indigo-400 mr-3 text-xs"></i><span data-translate="benefit_perks_discounts">Employee Discounts</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-indigo-400 mr-3 text-xs"></i><span data-translate="benefit_perks_transport">Transportation Allowance</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-indigo-400 mr-3 text-xs"></i><span data-translate="benefit_perks_meals">Meal Subsidies</span></li>
                        <li class="flex items-center pb-1" style="line-height:1.8; vertical-align:baseline; overflow:visible;"><i class="fas fa-check text-indigo-400 mr-3 text-xs"></i><span data-translate="benefit_perks_events">Company Events</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="relative bg-gradient-to-r from-orange-600 via-red-600 to-pink-600 text-white py-20 overflow-hidden">
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-black/20"></div>
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-white/10 rounded-full animate-float"></div>
            <div class="absolute -bottom-32 -right-32 w-64 h-64 bg-white/5 rounded-full animate-float" style="animation-delay: -3s;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6" data-translate="cta_title">Ready to Start Your Journey?</h2>
                    <p class="text-xl mb-8 opacity-90 leading-relaxed" data-translate="cta_subtitle">
                        Join our team of passionate professionals and build a rewarding career with one of Indonesia's leading outsourcing companies.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <button @click="showApplyModal = true" class="group bg-white text-orange-600 px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl flex items-center justify-center space-x-3">
                            <span data-translate="cta_apply_now">Apply Now</span>
                            <i class="fas fa-paper-plane group-hover:translate-x-1 transition-transform"></i>
                        </button>
                        <a href="/contact" class="group bg-transparent border-2 border-white text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-orange-600 transition-all duration-300 transform hover:scale-105 flex items-center justify-center space-x-3">
                            <span data-translate="cta_contact_hr">Contact HR</span>
                            <i class="fas fa-users group-hover:scale-110 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                        <h3 class="text-2xl font-bold mb-6 text-center" data-translate="cta_contact_title">Get In Touch</h3>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-envelope text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-200 text-xs" data-translate="cta_hr_email">HR Email</p>
                                    <p class="text-white font-medium">trio@enlulu.co.id</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-phone text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-200 text-xs" data-translate="cta_phone">Phone</p>
                                    <p class="text-white font-medium">(021) 8306658</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center">
                                    <i class="fab fa-whatsapp text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-200 text-xs" data-translate="cta_whatsapp">WhatsApp</p>
                                    <p class="text-white font-medium">+62 813-9100-0688</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <p class="text-sm opacity-90">
                                <i class="fas fa-clock mr-2"></i>
                                <span data-translate="cta_response_time">Response time: Within 24 hours</span>
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
                            <span data-translate="footer_quick_links"></span>
                        </h3>
                        <ul class="space-y-3">
                            <li>
                                <a href="/" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-yellow-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_home">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="/about" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-blue-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_about">About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="/news" class="group flex items-center space-x-3 text-gray-300 hover:text-white transition-all duration-300">
                                    <div class="w-2 h-2 bg-purple-400 rounded-full opacity-50 group-hover:opacity-100 group-hover:scale-125 transition-all"></div>
                                    <span class="group-hover:translate-x-1 transition-transform" data-translate="nav_news">News</span>
                                </a>
                            </li>
                            <li>
                                <a href="/career" class="group flex items-center space-x-3 text-orange-400 font-medium">
                                    <div class="w-2 h-2 bg-orange-400 rounded-full"></div>
                                    <span data-translate="nav_career">Career</span>
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
                            <span data-translate="footer_get_in_touch"></span>
                        </h3>
                        <div class="space-y-4">
                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-orange-500 to-red-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-phone text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="cta_phone">Phone</p>
                                    <p class="text-white font-medium">(021) 8306658</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-envelope text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="cta_hr_email">Email</p>
                                    <p class="text-white font-medium text-sm">trio@enlulu.co.id</p>
                                </div>
                            </div>

                            <div class="group flex items-center space-x-4 p-3 rounded-xl hover:bg-white/5 transition-colors">
                                <div class="w-10 h-10 bg-gradient-to-r from-green-500 to-teal-500 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                    <i class="fas fa-map-marker-alt text-white text-sm"></i>
                                </div>
                                <div>
                                    <p class="text-gray-400 text-xs" data-translate="footer_follow">Location</p>
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

            <!-- Social Media & Newsletter -->
            <div class="border-t border-gray-700/50 pt-12 mb-12">
                <div class="text-2xl font-bold text-center mb-8 bg-gradient-to-r from-orange-400 via-red-400 to-pink-400 bg-clip-text text-transparent">
                    <div class="text-center md:text-center">
                        <h3 class="text-xl font-bold mb-6 text-white" data-translate="footer_follow">Follow Us</h3>
                        <div class="flex justify-center md:justify-center space-x-4">
                            <a href="https://www.facebook.com/p/PT-Enlulu-Sukses-Makmur-100063922750338/" class="group w-12 h-12 bg-gradient-to-r from-blue-600 to-blue-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
                                <i class="fab fa-facebook-f text-white group-hover:scale-125 transition-transform"></i>
                            </a>
                            <a href="https://www.instagram.com/pt_enlulu_sukses_makmur/" class="group w-12 h-12 bg-gradient-to-r from-pink-600 to-red-500 rounded-xl flex items-center justify-center hover:scale-110 hover:rotate-6 transition-all duration-300">
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
