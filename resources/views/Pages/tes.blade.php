<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Business Partners - PT. Enlulu Sukses Makmur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.3/cdn.min.js" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        [x-cloak] { display: none !important; }
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gradient-to-br from-gray-50 to-blue-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-gradient-to-r from-orange-500 to-red-600 text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Client Business Partners</h1>
            <p class="text-xl text-orange-100 mb-2">PT. Enlulu Sukses Makmur</p>
            <p class="text-orange-200">Trusted Workforce Solutions Across Industries</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-6 py-16">
        <!-- Stats Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-orange-600 mb-2">25+</div>
                <div class="text-gray-600">Active Partners</div>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-blue-600 mb-2">15+</div>
                <div class="text-gray-600">Industries Served</div>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-green-600 mb-2">100+</div>
                <div class="text-gray-600">Service Types</div>
            </div>
            <div class="bg-white rounded-2xl p-6 text-center shadow-lg">
                <div class="text-3xl font-bold text-purple-600 mb-2">National</div>
                <div class="text-gray-600">Coverage</div>
            </div>
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
                        { name: 'Receptionist', icon: 'fas fa-desk', color: 'purple' },
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
                    logo: 'assets/images/clients/jnt.png',
                    coverage: 'Jabodetabek Coverage',
                    services: [
                        { name: 'Resepsionis', icon: 'fas fa-desk', color: 'purple' },
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
                    name: 'Bali Tower',
                    logo: 'assets/images/clients/balitower.png',
                    coverage: 'Multi-Regional Coverage',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-handshake', color: 'blue' },
                        { name: 'Call Center', icon: 'fas fa-headset', color: 'green' },
                        { name: 'Tele Sales', icon: 'fas fa-phone', color: 'purple' },
                        { name: 'IKR (Teknisi)', icon: 'fas fa-tools', color: 'orange' },
                        { name: 'Trouble Shoot', icon: 'fas fa-wrench', color: 'red' },
                        { name: 'Cleaning Service', icon: 'fas fa-broom', color: 'yellow' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'pink' },
                        { name: 'Receptionist', icon: 'fas fa-desk', color: 'teal' }
                    ],
                    description: 'Comprehensive support untuk Bali Tower meliputi sales, technical, dan operational services di berbagai wilayah.'
                },
                'myrepublic': {
                    name: 'MyRepublic',
                    logo: 'assets/images/clients/myrepublic.png',
                    coverage: 'Multi-Regional Coverage',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-chart-line', color: 'purple' },
                        { name: 'Regional Coverage', icon: 'fas fa-map-marked-alt', color: 'pink' }
                    ],
                    description: 'Mendukung ekspansi MyRepublic dengan tim direct sales profesional di berbagai wilayah strategis.'
                },
                'balifiber': {
                    name: 'Balifiber',
                    logo: 'assets/images/clients/balifiber.png',
                    coverage: 'Multi-Service Provider',
                    services: [
                        { name: 'Direct Sales', icon: 'fas fa-handshake', color: 'orange' },
                        { name: 'IKR (Teknisi)', icon: 'fas fa-tools', color: 'blue' }
                    ],
                    description: 'Menyediakan tenaga sales dan teknisi untuk mendukung operasional Balifiber dalam layanan internet fiber.'
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
                    logo: 'assets/images/clients/cbn.png',
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
                        { name: 'Receptionist', icon: 'fas fa-desk', color: 'purple' },
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
                        { name: 'Receptionist', icon: 'fas fa-desk', color: 'red' },
                        { name: 'Office Boy', icon: 'fas fa-user-tie', color: 'blue' },
                        { name: 'Driver', icon: 'fas fa-car', color: 'green' }
                    ],
                    description: 'Dukungan operasional kantor untuk Miwon meliputi front office dan support services.'
                },
                'pg': {
                    name: 'P&G',
                    logo: 'assets/images/clients/pg.png',
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
                        <div class="w-12 h-12 bg-gray-200 rounded-xl flex items-center justify-center">
                            <i class="fas fa-building text-gray-400 text-lg"></i>
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
                                <div class="bg-white p-3 rounded-2xl">
                                    <i class="fas fa-building text-orange-500 text-2xl"></i>
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
                                <a href="#" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-6 py-3 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center">
                                    <i class="fas fa-phone mr-2"></i>
                                    Hubungi Kami
                                </a>
                                <a href="#" class="bg-white border border-gray-300 text-gray-700 px-6 py-3 rounded-xl hover:shadow-lg transition-all duration-300 flex items-center">
                                    <i class="fas fa-envelope mr-2"></i>
                                    Kirim Email
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Industry Categories -->
        <div class="bg-white rounded-3xl shadow-xl p-8 mb-16">
            <h2 class="text-3xl font-bold text-center mb-12 text-gray-800">Industries We Serve</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl">
                    <div class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Telecommunications</h3>
                    <p class="text-sm text-gray-600">Fiber optics, internet services, technical support</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 rounded-2xl">
                    <div class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Logistics & Delivery</h3>
                    <p class="text-sm text-gray-600">Express delivery, warehousing, cargo services</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-red-50 to-red-100 rounded-2xl">
                    <div class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-utensils text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Food & Beverage</h3>
                    <p class="text-sm text-gray-600">Restaurant chains, food delivery, catering</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl">
                    <div class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Healthcare</h3>
                    <p class="text-sm text-gray-600">Hospitals, clinics, medical facilities</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl">
                    <div class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Insurance & Finance</h3>
                    <p class="text-sm text-gray-600">Insurance companies, financial services</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-cyan-50 to-cyan-100 rounded-2xl">
                    <div class="w-16 h-16 bg-cyan-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shopping-cart text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Retail & Consumer Goods</h3>
                    <p class="text-sm text-gray-600">FMCG brands, retail chains, distribution</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-2xl">
                    <div class="w-16 h-16 bg-indigo-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-plane text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Aviation & Transportation</h3>
                    <p class="text-sm text-gray-600">Airlines, transportation services</p>
                </div>

                <div class="text-center p-6 bg-gradient-to-br from-pink-50 to-pink-100 rounded-2xl">
                    <div class="w-16 h-16 bg-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-database text-white text-2xl"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Technology & Data</h3>
                    <p class="text-sm text-gray-600">Tech companies, data services, IT solutions</p>
                </div>
            </div>
        </div>

        <!-- Why Choose Enlulu Section -->
        <div class="bg-gradient-to-r from-orange-500 to-red-500 text-white rounded-3xl p-12 mb-16">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4">Why Choose PT. Enlulu Sukses Makmur?</h2>
                <p class="text-xl text-orange-100">Your Trusted Workforce Solutions Partner</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-award text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Proven Excellence</h3>
                    <p class="text-orange-100 leading-relaxed">Over 25+ satisfied clients across multiple industries with consistent quality delivery and professional service standards.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Skilled Workforce</h3>
                    <p class="text-orange-100 leading-relaxed">Carefully selected and trained personnel to meet your specific industry requirements and operational standards.</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-handshake text-white text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Long-term Partnership</h3>
                    <p class="text-orange-100 leading-relaxed">We build lasting relationships with our clients, providing ongoing support and adapting to your evolving business needs.</p>
                </div>
            </div>
        </div>

        <!-- Call to Action Section -->
        <div class="text-center bg-white rounded-3xl shadow-xl p-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">Ready to Partner With Us?</h2>
            <p class="text-xl text-gray-600 mb-8 max-w-3xl mx-auto">Join the growing list of satisfied clients who trust PT. Enlulu Sukses Makmur for their workforce solutions. Let's discuss how we can support your business growth.</p>

            <div class="flex flex-wrap gap-6 justify-center">
                <a href="tel:+6221234567890" class="bg-gradient-to-r from-orange-500 to-red-500 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl transition-all duration-300 flex items-center transform hover:scale-105">
                    <i class="fas fa-phone mr-3"></i>
                    Call Us Now
                </a>
                <a href="mailto:info@enlulu.com" class="bg-white border-2 border-orange-500 text-orange-500 px-8 py-4 rounded-2xl text-lg font-semibold hover:bg-orange-50 transition-all duration-300 flex items-center transform hover:scale-105">
                    <i class="fas fa-envelope mr-3"></i>
                    Send Email
                </a>
                <a href="#" class="bg-green-500 text-white px-8 py-4 rounded-2xl text-lg font-semibold hover:shadow-2xl transition-all duration-300 flex items-center transform hover:scale-105">
                    <i class="fab fa-whatsapp mr-3"></i>
                    WhatsApp
                </a>
            </div>

            <div class="mt-8 pt-8 border-t border-gray-200">
                <p class="text-gray-500 mb-4">Follow us on social media for updates and opportunities</p>
                <div class="flex justify-center space-x-6">
                    <a href="#" class="text-gray-400 hover:text-blue-600 transition-colors text-2xl">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-500 transition-colors text-2xl">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-pink-500 transition-colors text-2xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-red-500 transition-colors text-2xl">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold mb-4 text-orange-500">PT. Enlulu Sukses Makmur</h3>
                    <p class="text-gray-400 mb-4">Your trusted partner for comprehensive workforce solutions across Indonesia.</p>
                    <div class="text-gray-400">
                        <p class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i>Jakarta, Indonesia</p>
                        <p class="mb-2"><i class="fas fa-phone mr-2"></i>+62 21 234 567 890</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@enlulu.com</p>
                    </div>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Our Services</h4>
                    <ul class="text-gray-400 space-y-2">
                        <li>Workforce Outsourcing</li>
                        <li>Technical Support</li>
                        <li>Sales & Marketing</li>
                        <li>Facility Management</li>
                        <li>Customer Service</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Industries</h4>
                    <ul class="text-gray-400 space-y-2">
                        <li>Telecommunications</li>
                        <li>Logistics & Delivery</li>
                        <li>Food & Beverage</li>
                        <li>Healthcare</li>
                        <li>Insurance & Finance</li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="text-gray-400 space-y-2">
                        <li><a href="#" class="hover:text-orange-500 transition-colors">About Us</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Career Opportunities</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Contact Us</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 PT. Enlulu Sukses Makmur. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Add smooth scrolling and additional interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Add animation on scroll for service cards
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe all service cards
            document.querySelectorAll('.service-card').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>
