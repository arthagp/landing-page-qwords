<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qwords : Cloud Web Hosting Indonesia Akses Cepat Aman</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Poppins:wght@300;400;600&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body>
    <header class="p-4">
        <nav class="flex items-center justify-between">
            <img src="{{asset('/assets/logo-qwords.png')}}" alt="logo-qwords" class="h-10 w-auto">
            <ul class="flex space-x-7">
                <li class="text-black font-semibold relative">
                    Cloud Hosting
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Server
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Domain
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Email Suite
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Services
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Internal Access
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-black font-semibold relative">Customer Care
                    <svg class="-mr-1 h-5 w-5 text-gray-500 absolute top-1/2 transform -translate-y-1/2 -right-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </li>
            </ul>
            <div>
                <button class="bg-white font-semibold text-orange-500 py-2 px-4 rounded-3xl border border-orange-500">Daftar</button>
                <button class="bg-white font-semibold text-orange-500 py-2 px-4 rounded-3xl border border-orange-500">Login</button>
            </div>
        </nav>
    </header>
    <main>
        <section id="hero-section">
            <div class="max-w-[950px] flex justify-center flex-col gap-10 text-center mx-auto py-10 m">
                <h1 class="mt-10 font-extrabold text-7xl">Cloud Hosting Indonesia
                    untuk <span class="text-orange-500">Kesuksesan</span> Websitemu!
                </h1>
                <p class="px-10 mx-10">Qwords menawarkan layanan Cloud Hosting Akses Cepat, Standar Keamanan Tinggi, Uptime Server 99,99%, Fitur Lengkap dan Dukungan Pelanggan 24 jam untuk memenuhi kebutuhan website Anda.
                    Tersertifikasi ISO 27001 dengan Data Center Tier 3 dan Network Tier 1
                </p>
                <div class="flex justify-center gap-x-2">
                    <img src="{{ asset('/assets/akreditasi.webp') }}" alt="akreditasi-ICANN" class="max-w-full h-24">
                    <img src="{{ asset('/assets/bsi.webp') }}" alt="akreditasi-BSI" class="max-w-full h-24">
                    <img src="{{ asset('/assets/akreditasi-id.webp') }}" alt="akreditasi-ID" class="max-w-full h-24">
                </div>
                <button class="max-w-[350px] mx-auto bg-orange-500 font-semibold text-2xl text-white py-3 px-6 rounded-3xl">Cek Domain Dulu</button>
            </div>
        </section>
        <section id="cek-domain">
            <div class="flex justify-center flex-col text-center bg-orange-500 py-10 my-32 text-white gap-5">
                <h1 class="font-bold text-3xl">Cari Nama Domainmu</h1>
                <p class="max-w-[550px] mx-auto text-center">Nama Domain digunakan untuk mempermudah pengunjung menuju ke situs Anda. Pilih nama domain yang paling mencerminkan bisnis, produk, atau layanan Anda.</p>
                <div class="flex justify-center items-center gap-x-4 text-black">
                    <input class="w-[650px] px-6 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring focus:border-blue-300" type="text" placeholder="Cari Nama Domain Anda">
                    <select class="w-[150px] px-6 py-4 border border-gray-300 rounded-xl focus:outline-none focus:ring focus:border-blue-300" name="" id="">
                        <option value="id" selected>.id</option>
                        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                    </select>
                    <button class="bg-black font-semibold text-2xl text-white py-3 px-6 rounded-3xl">Cari</button>
                </div>
                <div class="flex justify-center text-center m-10">
                    <div class="px-4">
                        <h3>.com</h3>
                        <p class="text-xl font-bold">Rp 165.000</p>
                    </div>
                    <hr class="border-r border-gray-300 h-14 mx-4">
                    <div class="px-4">
                        <h3>.id</h3>
                        <p class="text-xl font-bold">Rp 225.000</p>
                    </div>
                    <hr class="border-r border-gray-300 h-14 mx-4">
                    <div class="px-4">
                        <h3>.info</h3>
                        <p class="text-xl font-bold">Rp 77.000</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="domain-list">
            <div class="flex justify-center flex-col text-center mx-14 my-32">
                <h1 class="text-4xl font-bold max-w-[500px] mx-auto">
                    Cloud Hosting Indonesia <span class="text-orange-500">Diskon Hingga 50%</span>
                </h1>
                <p class="my-10 font-extralight">Layanan cloud hosting indonesia terbaik dengan teknologi andal untuk website anda</p>
                <div class="flex justify-around items-center">
                    <div id="VCH1" class="p-3 rounded-xl shadow-2xl w-[300px]">
                        <h3 class="text-start p-1 font-medium">Value Cloud Hosting</h3>
                        <h1 class="text-start p-1 font-bold text-2xl">VCH1</h1>
                        <p class="text-start p-1 line-through opacity-50">Rp 24.500</p>
                        <p class="text-start p-1 text-3xl text-orange-500 font-bold">Rp 14.500</p>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/disk.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Disk</p>
                                <h3 class="text-start font-bold">3 GB</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/bandwidth.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Bandwith</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/cpu.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Core CPU</p>
                                <h3 class="text-start font-bold">0.5 Core</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/addon.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Addon / parked domain</p>
                                <h3 class="text-start font-bold">No</h3>
                            </div>
                        </div>
                        <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 px-12 m-2">Pesan Sekarang</button>
                    </div>
                    <div id="Signature" class="p-3 rounded-xl shadow-2xl w-[300px]">
                        <h3 class="text-start p-1 font-medium">Unlimited Hosting</h3>
                        <h1 class="text-start p-1 font-bold text-2xl">Signature</h1>
                        <p class="text-start p-1 line-through opacity-50">Rp 109.000</p>
                        <p class="text-start p-1 text-3xl text-orange-500 font-bold">Rp 89.900</p>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/disk.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Disk</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/bandwidth.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Bandwith</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/cpu.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Core CPU</p>
                                <h3 class="text-start font-bold">1 Core</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/addon.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Addon / parked domain</p>
                                <h3 class="text-start font-bold">5/5</h3>
                            </div>
                        </div>
                        <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 px-12 m-2">Pesan Sekarang</button>
                    </div>
                    <div id="HPCH" class="p-3 rounded-xl shadow-2xl w-[300px]">
                        <h3 class="text-start p-1 font-medium">High Performance</h3>
                        <h1 class="text-start p-1 font-bold text-2xl">HPCH Bisnis 1</h1>
                        <p class="text-start p-1 line-through opacity-50">Rp 90.000</p>
                        <p class="text-start p-1 text-3xl text-orange-500 font-bold">Rp 79.000</p>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/disk.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Disk</p>
                                <h3 class="text-start font-bold">3 GB</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/bandwidth.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Bandwith</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/cpu.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Core CPU</p>
                                <h3 class="text-start font-bold">1 Core</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/addon.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Addon / parked domain</p>
                                <h3 class="text-start font-bold">-</h3>
                            </div>
                        </div>
                        <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 px-12 m-2">Pesan Sekarang</button>
                    </div>
                    <div id="VPS" class="p-3 rounded-xl shadow-2xl w-[300px]">
                        <h3 class="text-start p-1 font-medium">Cloud VPS KVM SSD</h3>
                        <h1 class="text-start p-1 font-bold text-2xl">VPS SC1</h1>
                        <p class="text-start p-1 line-through opacity-50">Rp 135.000</p>
                        <p class="text-start p-1 text-3xl text-orange-500 font-bold">Rp 75.000</p>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/disk.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Disk</p>
                                <h3 class="text-start font-bold">25 GB</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/bandwidth.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Bandwith</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/cpu.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Core CPU</p>
                                <h3 class="text-start font-bold">1 Core</h3>
                            </div>
                        </div>
                        <div class="flex gap-x-4 my-5">
                            <img class="h-9 w-auto text-center my-auto" src="{{asset('/assets/addon.webp')}}" alt="disk-img">
                            <div class="flex flex-col">
                                <p>Addon / parked domain</p>
                                <h3 class="text-start font-bold">Unlimited</h3>
                            </div>
                        </div>
                        <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 px-12 m-2">Pesan Sekarang</button>
                    </div>
                </div>
            </div>
        </section>
        <section id="layanan">
            <div class="bg-orange-50 flex justify-center items-center">
                <div class="flex flex-col justify-center items-center my-32 gap-y-10">
                    <h1 class="text-4xl font-bold">Lihat Juga Layanan Kami Yang Lain</h1>
                    <p class="text-normal w-[50%] font-extralight text-center">Optimalkan performa website bisnis Anda dengan berbagai layanan berkualitas dari Qwords</p>
                    <div class="flex gap-x-7">
                        <div class="flex flex-col gap-y-4 p-3 rounded-3xl shadow-2xl w-[400px] bg-white">
                            <h3 class="text-start p-1 flex justify-start items-center gap-x-2 font-semibold text-xl"><span><img src="{{asset('/assets/ssl.webp')}}" alt=""></span>SSL</h3>
                            <h1 class="text-start p-1 text-normal">Jadikan website Anda lebih terpercaya dan disukai oleh search engine dengan menggunakan SSL Certificate.</h1>
                            <p class="text-start p-1">Mulai dari</p>
                            <p class="text-start p-1"><span class="text-orange-500 font-bold text-3xl">Rp. 112.000</span> / tahun</p>
                            <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 m-2">Pesan Sekarang</button>
                        </div>
                        <div class="flex flex-col gap-y-4 p-3 rounded-3xl shadow-2xl w-[400px] bg-white">
                            <h3 class="text-start p-1 flex justify-start items-center gap-x-2 font-semibold text-xl"><span><img src="{{asset('/assets/dbstack.webp')}}" alt=""></span>Dedicated Server</h3>
                            <h1 class="text-start p-1 text-normal">Nikmati kelola Dedicated Server sendiri dengan akses remote dari seluruh dunia tanpa batas</h1>
                            <p class="text-start p-1">Mulai dari</p>
                            <p class="text-start p-1"><span class="text-orange-500 font-bold text-3xl">Rp. 499.000</span> / bulan</p>
                            <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 m-2">Pesan Sekarang</button>
                        </div>
                        <div class="flex flex-col gap-y-4 p-3 rounded-3xl shadow-2xl w-[400px] bg-white">
                            <h3 class="text-start p-1 flex justify-start items-center gap-x-2 font-semibold text-xl"><span><img src="{{asset('/assets/disk.webp')}}" alt=""></span>Colocation Server</h3>
                            <h1 class="text-start p-1 text-normal">Akses cepat dari seluruh dunia dengan fasilitas 24x7 full monitoring dengan cooling system terbaik serta fire extinguisher</h1>
                            <p class="text-start p-1">Mulai dari</p>
                            <p class="text-start p-1"><span class="text-orange-500 font-bold text-3xl">Rp. 500.000</span> / bulan</p>
                            <button class="text-lg font-semibold text-white bg-orange-500 rounded-2xl py-1 m-2">Pesan Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="solution">
            <div class="flex flex-col justify-center items-center my-32">
                <div class="flex flex-col justify-center items-center gap-y-5">
                    <h1 class="text-4xl font-bold">Solusi Paket Hosting Terbaik dari Kami</h1>
                    <p class="w-[50%] text-center font-extralight">Kami menawarkan solusi paket hosting terbaik untuk segala kebutuhan website dan sistem Anda. Mulai dari blog hingga website bisnis dan perusahaan</p>
                </div>
                <div class="my-5 grid grid-cols-3 gap-6 mb-4">
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/company.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">Perusahaan</h1>
                            <p class="font-extralight text-sm w-64">
                                Wujudkan website perusahaan profesional dan berkelas dengan dukungan web hosting terbaik dan fitur keamanan ekstra
                            </p>
                        </div>
                    </div>
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/umkm.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">UMKM dan Toko Online</h1>
                            <p class="font-extralight text-sm w-64">
                                Memberikan hosting terbaik untuk mendukung kebutuhan website pemasaran barang/jasa secara online.
                            </p>
                        </div>
                    </div>
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/orgs.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">Organisasi dan Komunitas</h1>
                            <p class="font-extralight text-sm w-64">
                                Bikin website organisasi atau komunitas Anda dengan paket hosting unggulan yang ramah kantong.
                            </p>
                        </div>
                    </div>
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/school.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">Sekolah</h1>
                            <p class="font-extralight text-sm w-64">
                                Infrastruktur web hosting terbaik untuk menunjang kegiatan e-learning. Didukung platform MOODLE khusus pembelajaran daring
                            </p>
                        </div>
                    </div>
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/dev.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">Developer</h1>
                            <p class="font-extralight text-sm w-64">
                                Tersedia paket hosting Indonesia dengan spesifikasi khusus yang dev-friendly. Ekstra NodeJS dan Git Version Control
                            </p>
                        </div>
                    </div>
                    <div class="relative bg-orange-500 rounded-3xl text-white">
                        <img src="{{ asset('/assets/blog.webp') }}" alt="company-img" class="w-[400px] h-auto rounded-3xl">
                        <div class="absolute flex flex-col gap-y-3 top-0 left-0 p-3">
                            <h1 class="font-bold text-xl">Blogger dan Personal</h1>
                            <p class="font-extralight text-sm w-64">
                                Memfasilitasi blogger dengan infrastruktur hosting Indonesia terbaik serta template website premium untuk tampil lebih profesional
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="komitmen">
            <div class="flex flex-col justify-center items-center my-32">
                <div class="flex flex-col justify-center items-center gap-y-6">
                    <h1 class="text-4xl font-bold">Komitmen Qwords</h1>
                    <p class="font-extralight">Berbagai alasan mengapa pelanggan memilih sewa hosting di Qwords</p>
                </div>
                <div class="grid grid-cols-3 gap-10 mt-14 mb-9">
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/call.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Layanan 24/7</h1>
                        <p class="font-extralight">Tim Technical Support dan Customer Service Qwords siap membantu Anda selama 24 jam, 7 hari. Anda dapat menghubungi melalui Live chat, Call Center, dan Support Ticket.</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/book.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Panduan Manual Lengkap</h1>
                        <p class="font-extralight">Qwords dilengkapi dengan halaman knowledge base berisi tutorial dan tips seputar pengelolaan website dan hosting. Dapat diakses dengan mudah dan solutif</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/router.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Up time 99.99%</h1>
                        <p class="font-extralight">Uptime Network & Server di atas 99. 99% dengan konfigurasi server yang tepat. Didukung manajemen jaringan dan multiple upstream tier 1 provider network serta multiple peering.</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/guard.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Jaminan keamanan</h1>
                        <p class="font-extralight">Keamanan menjadi fokus utama kami di Qwords. Tindakan pemantauan dan pencegahan yang berstandar & berkelanjutan telah menjadi perhatian utama kami.</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/networkAlt.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Clustered DNS</h1>
                        <p class="font-extralight">DNS Server Cloud Hosting Qwords terhubung satu dengan yang lainnya. Hal ini membuat DNS Server akan selalu dapat di akses karena saling membackup antar server.</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/diamond.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">High Enterprise Server</h1>
                        <p class="font-extralight">Standar server Qwords adalah server kelas enterprise Dual Xeon Octa Core yang merupakan hardware kelas terbaik. Hardware ini biasa digunakan oleh perusahaan terkemuka.</p>
                    </div>
                </div>
                <div class="flex justify-center items-center gap-10">
                    <div class="flex flex-col justify-start items-start w-[400px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/router.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Tier 1 Network</h1>
                        <p class="font-extralight">Tier 1 Network merupakan jaringan dunia tanpa transit network, yang membuat jaringan lebih cepat serta jalur routing yang lebih pendek dan ketersediaan backup network.</p>
                    </div>
                    <div class="flex flex-col justify-start items-start w-[400px] h-[305px] bg-orange-100 rounded-3xl p-5 gap-y-2 shadow-md">
                        <img src="{{asset('/assets/network.webp')}}" alt="call-img">
                        <h1 class="font-bold text-xl">Peering Network</h1>
                        <p class="font-extralight">Jaringan di Qwords terhubung langsung ke public peering seperti OpenIXP dan CDIX yang membuat latency atau waktu tunggu pengiriman data semakin kecil.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="jasa-web">
            <div class="w-[1100px] bg-orange-100 rounded-3xl flex justify-center items-center my-32 gap-20 mx-auto p-10 ">
                <div class="w-[50%] flex justify-center mx-auto">
                    <img class="w-[70%] h-auto" src="{{asset('/assets/bw.webp')}}" alt="logo-bw">
                </div>
                <div class="flex flex-col w-[50%] gap-y-6">
                    <h1 class="font-bold text-4xl"><span class="text-orange-500">Bikin website impian</span> dengan mudah disini hanya 1 jutaan</h1>
                    <p class="text-sm font-extralight">Bikin website impian include paket hosting Indonesia terbaik hanya 1 jutaan Jasa pembuatan website profesional untuk Perusahaan, Bisnis & UKM. Bikin Website Impian dengan mudah di sini, desain website elegan dan mudah dikelola</p>
                    <button class="rounded-3xl bg-orange-500 text-white max-w-[200px] py-2 px-5 font-semibold text-sm">Lihat Selengkapnya</button>
                </div>
            </div>
        </section>
        <section id="trust-company">
            <div class="flex flex-col justify-center items-center gap-14 my-32">
                <h1 class="font-bold text-4xl">Telah Dipercaya oleh 45.000+ Pelanggan Aktif</h1>
                <div class="flex justify-center items-center gap-x-5">
                    <img class="w-[12%]" src="{{asset('/assets/Cimory.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Forisa.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Elsheskin.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/icon.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Horison.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/MD.webp')}}" alt="Cimory-img">
                </div>
                <a class="flex font-semibold text-orange-500" href="#">Dan Masih Banyak yang Lainnya <span class="ml-4"><img class="w-[50%]" src="{{asset('/assets/Right.webp')}}" alt=""></span></a>
            </div>
            <div class="flex flex-col justify-center items-center gap-14 my-32">
                <h1 class="font-bold text-4xl">Partner Kami</h1>
                <div class="flex justify-center items-center gap-x-5">
                    <img class="w-[12%]" src="{{asset('/assets/Google.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Cpanel.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Idea.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/Archi.webp')}}" alt="Cimory-img">
                    <img class="w-[12%]" src="{{asset('/assets/dotid.webp')}}" alt="Cimory-img">
                </div>
                <a class="flex font-semibold text-orange-500" href="#">Lihat Semua Partner <span class="ml-4"><img class="w-[50%]" src="{{asset('/assets/Right.webp')}}" alt=""></span></a>
            </div>
        </section>
        <section id="garansi">
            <div class="flex justify-center items-center p-32 bg-orange-100">
                <div class="w-[50%]">
                    <img src="{{asset('/assets/guarantee.webp')}}" alt="guarante-img">
                </div>
                <div class="flex flex-col justify-center gap-y-10 w-[50%]">
                    <h1 class="text-5xl font-bold">Garansi 30 Hari <span class="text-orange-500">Uang Kembali</span></h1>
                    <p class="font-extralight text-sm">Untuk menjaga kepuasan pelanggan, kami memberikan garansi uang kembali yang berlaku hingga 30 hari setelah hosting aktif.</p>
                </div>
            </div>
        </section>
        <section id="testi">
            <div class="flex flex-col justify-center items-center my-32 max-w-[1100px] mx-auto gap-y-10">
                <h1 class="text-4xl font-bold">Apa Kata Mereka?</h1>
                <p class="w-[50%] font-extralight text-sm text-center">Apa kata mereka yang sudah menggunakan layanan web hosting Indonesia dari Qwords? Simak pengalaman mereka yang telah membuktikan sendiri fitur dari layanan kami.</p>
            </div>
        </section>
        <section id="liputan-payment">
            <div class="flex flex-col justify-center items-center gap-14 my-32">
                <h1 class="font-bold text-4xl">Diliput Oleh</h1>
                <div class="flex justify-center items-center w-[80%] flex-wrap">
                    <img src="{{asset('/assets/Detikcom.webp')}}" alt="Cimory-img">
                    <img src="{{asset('/assets/Liputan6.webp')}}" alt="Cimory-img">
                    <img src="{{asset('/assets/TribunJogja.webp')}}" alt="Cimory-img">
                    <img src="{{asset('/assets/antara.webp')}}" alt="Cimory-img">
                    <img src="{{asset('/assets/RM.webp')}}" alt="Cimory-img">
                    <img src="{{asset('/assets/KoranBernas.webp')}}" alt="Cimory-img">
                </div>
                <a class="flex font-semibold text-orange-500" href="#">Lihat Semua Liputan <span class="ml-4"><img class="w-[50%]" src="{{asset('/assets/Right.webp')}}" alt="right-img"></span></a>
            </div>
            <div class="flex flex-col justify-center items-center gap-14 my-32">
                <h1 class="w-[50%] text-center font-bold text-xl">Pilih metode e-payment otomatis. Layanan Domain, Hosting, VPS langsung aktif tanpa perlu konfirmasi bayar.</h1>
                <div class="flex justify-center items-center gap-x-5">
                    <img class="w-[80%]" src="{{asset('/assets/all-payment.webp')}}" alt="all-payment">
                </div>
                <a class="flex font-semibold text-orange-500" href="#">Lihat Panduan Pembayaran <span class="ml-4"><img class="w-[50%]" src="{{asset('/assets/Right.webp')}}" alt="right-img"></span></a>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>