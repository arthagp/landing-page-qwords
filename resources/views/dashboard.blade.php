<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Qwords</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;700&family=Poppins:wght@300;400;600&family=Quicksand:wght@500;700&display=swap" rel="stylesheet">

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
            <div class="max-w-[950px] flex justify-center flex-col gap-10 text-center mx-auto py-10">
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
            <div class="flex justify-center flex-col text-center bg-orange-500 py-10 mt-10 text-white gap-5">
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
        <section>
            
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>