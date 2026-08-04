@extends('layout.app')


{{-- =========================
Navbar
========================== --}}

<nav class="fixed inset-x-0 top-0 z-50 border-b border-white/10 bg-slate-950/70 backdrop-blur-xl">

    <div class="mx-auto flex h-20 max-w-7xl items-center justify-between px-6">

        <a href="/" class="text-3xl font-black tracking-widest">

            VISPA

        </a>

        <div class="hidden gap-10 text-sm lg:flex">

            <a href="#about" class="transition hover:text-cyan-400">About</a>

            <a href="#product" class="transition hover:text-cyan-400">Products</a>

            <a href="#story" class="transition hover:text-cyan-400">Story</a>

            <a href="#contact" class="transition hover:text-cyan-400">Contact</a>

        </div>

        <a href="#product"

           class="rounded-xl bg-cyan-500 px-5 py-3 font-semibold transition hover:bg-cyan-400">

            Explore

        </a>

    </div>

</nav>

{{-- =========================
Hero
========================== --}}

<section
class="relative flex min-h-screen overflow-hidden bg-slate-950">

<div
class="absolute left-0 top-0 h-[500px] w-[500px] rounded-full bg-cyan-500/20 blur-[140px]">

</div>

<div
class="absolute bottom-0 right-0 h-[450px] w-[450px] rounded-full bg-indigo-600/20 blur-[140px]">

</div>

<div
class="absolute left-1/2 top-1/2 h-[650px] w-[650px] -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/5 blur-[220px]">

</div>

<div
class="mx-auto grid min-h-screen max-w-7xl grid-cols-1 items-center gap-20 px-6 pt-24 lg:grid-cols-2">

{{-- LEFT --}}

<div>

<span

data-aos="fade-right"

class="inline-flex rounded-full border border-cyan-400/40 bg-cyan-500/10 px-5 py-2 text-sm">

Vispa Super Collection

</span>

<h1

class="hero-title mt-8 text-5xl font-black leading-tight lg:text-7xl">

Every Scent

<br>

Creates

<span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500 bg-clip-text text-transparent">

Memories

</span>

</h1>

<p

class="hero-subtitle mt-8 max-w-xl text-lg leading-8 text-slate-400">

Vispa menghadirkan parfum berkualitas premium dengan aroma yang elegan,
modern, dan tahan lama. Dirancang untuk menemani setiap perjalanan,
setiap cerita, dan setiap momen terbaik dalam hidupmu.

</p>

<div

class="mt-10 text-3xl font-bold text-cyan-400">

<span id="typed"></span>

</div>

<div

class="hero-buttons mt-12 flex flex-wrap gap-5">

<a

href="#product"

class="rounded-xl bg-cyan-500 px-8 py-4 font-semibold transition hover:scale-105 hover:bg-cyan-400">

Discover Collection

</a>

<a

href="#story"

class="rounded-xl border border-slate-700 px-8 py-4 transition hover:border-cyan-400">

Our Story

</a>

</div>

</div>

{{-- RIGHT --}}

<div

class="relative flex justify-center">

<div

class="perfume-card relative rounded-[40px] border border-white/10 bg-white/5 p-8 backdrop-blur-2xl">

<div

class="absolute -right-10 -top-10 h-32 w-32 rounded-full bg-cyan-500/20 blur-3xl">

</div>

<img

src="https://images.unsplash.com/photo-1594035910387-fea47794261f?auto=format&fit=crop&w=800&q=80"

class="mx-auto h-[520px] rounded-3xl object-cover"

alt="Vispa Perfume">

<div class="mt-8">

<div class="text-3xl font-bold">

Vispa Signature

</div>

<div class="mt-2 text-slate-400">

Luxury Inspired Fragrance

</div>

<div class="mt-6 flex items-center justify-between">

<div>

<div class="text-sm text-slate-500">

Starting From

</div>

<div class="text-3xl font-bold text-cyan-400">

Rp59K

</div>

</div>

<div>

<button

class="rounded-xl bg-cyan-500 px-6 py-3 transition hover:bg-cyan-400">

Buy Now

</button>

</div>

</div>

</div>

</div>

</div>

</div>

<div

class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">

<a href="#about">

<svg xmlns="http://www.w3.org/2000/svg"

class="h-8 w-8 text-white"

fill="none"

viewBox="0 0 24 24"

stroke="currentColor">

<path stroke-linecap="round"

stroke-linejoin="round"

stroke-width="2"

d="M19 9l-7 7-7-7"/>

</svg>

</a>

</div>

</section>
{{-- ===================================================== --}}
{{-- ABOUT VISPA --}}
{{-- ===================================================== --}}

<section id="about" class="relative overflow-hidden bg-slate-900 py-28">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mx-auto max-w-3xl text-center">

            <span
                data-aos="fade-up"
                class="rounded-full border border-cyan-500/20 bg-cyan-500/10 px-5 py-2 text-sm font-medium text-cyan-300">

                OUR PHILOSOPHY

            </span>

            <h2
                data-aos="fade-up"
                data-aos-delay="100"
                class="mt-8 text-4xl font-black lg:text-6xl">

                We Don't Sell

                <span class="bg-gradient-to-r from-cyan-400 via-blue-500 to-indigo-500 bg-clip-text text-transparent">

                    Perfume

                </span>

            </h2>

            <p
                data-aos="fade-up"
                data-aos-delay="200"
                class="mx-auto mt-8 max-w-3xl text-lg leading-9 text-slate-400">

                Kami percaya bahwa parfum bukan sekadar aroma.
                Ia adalah kenangan yang tertinggal,
                identitas yang dikenang,
                dan pelengkap setiap perjalanan hidup.

                Itulah mengapa setiap aroma Vispa dipilih agar mampu menemani setiap cerita.

            </p>

        </div>

    </div>

</section>

{{-- ===================================================== --}}
{{-- PRODUCT COLLECTION --}}
{{-- ===================================================== --}}

<section id="product" class="bg-slate-950 py-28">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-16 text-center">

            <span
                data-aos="fade-up"
                class="text-cyan-400">

                VISPA COLLECTION

            </span>

            <h2
                data-aos="fade-up"
                class="mt-4 text-5xl font-black">

                Find Your Signature Scent

            </h2>

        </div>

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">

            @php

                $products = [

                    [
                        'title'=>'VENTI',
                        'image'=>'https://images.unsplash.com/photo-1541643600914-78b084683601?w=700',
                        'desc'=>'Fresh • Clean • Everyday'
                    ],

                    [
                        'title'=>'FIORA',
                        'image'=>'https://images.unsplash.com/photo-1615634262417-9dcb1c0cbaf5?w=700',
                        'desc'=>'Floral • Sweet • Feminine'
                    ],

                    [
                        'title'=>'VIS LEGACY',
                        'image'=>'https://images.unsplash.com/photo-1594035910387-fea47794261f?w=700',
                        'desc'=>'Luxury • Elegant • Exclusive'
                    ],

                    [
                        'title'=>'SIGNATURE',
                        'image'=>'https://images.unsplash.com/photo-1523293182086-7651a899d37f?w=700',
                        'desc'=>'Woody • Premium • Long Lasting'
                    ],

                ];

            @endphp

            @foreach($products as $product)

                <div

                    data-aos="zoom-in"

                    class="group overflow-hidden rounded-[30px] border border-white/10 bg-white/5 backdrop-blur-xl transition duration-500 hover:-translate-y-3 hover:border-cyan-400/40">

                    <div class="overflow-hidden">

                        <img

                            src="{{ $product['image'] }}"

                            class="h-80 w-full object-cover transition duration-700 group-hover:scale-110"

                            alt="">

                    </div>

                    <div class="p-8">

                        <h3 class="text-3xl font-bold">

                            {{ $product['title'] }}

                        </h3>

                        <p class="mt-4 text-slate-400">

                            {{ $product['desc'] }}

                        </p>

                        <button

                            class="mt-8 rounded-xl border border-cyan-500 px-6 py-3 transition hover:bg-cyan-500">

                            View Detail

                        </button>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ===================================================== --}}
{{-- WHY VISPA --}}
{{-- ===================================================== --}}

<section id="story" class="relative bg-slate-900 py-32">

    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,#0891b233,transparent_35%)]"></div>

    <div class="relative mx-auto grid max-w-7xl gap-20 px-6 lg:grid-cols-2">

        <div>

            <span
                data-aos="fade-right"
                class="text-cyan-400">

                WHY VISPA

            </span>

            <h2

                data-aos="fade-right"

                class="mt-5 text-5xl font-black">

                More Than

                <br>

                Just Fragrance.

            </h2>

            <p

                data-aos="fade-right"

                class="mt-8 leading-9 text-slate-400">

                Vispa lahir dengan satu tujuan sederhana.

                Menghadirkan parfum berkualitas tinggi
                yang mampu digunakan siapa saja,
                tanpa harus membayar harga yang terlalu mahal.

                Kami percaya bahwa setiap orang pantas memiliki aroma yang mampu meningkatkan rasa percaya diri.

            </p>

        </div>

        <div class="grid gap-6">

            <div
                data-aos="fade-left"
                class="rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur-xl">

                <div class="text-5xl">

                    ✨

                </div>

                <h3 class="mt-5 text-2xl font-bold">

                    Premium Ingredients

                </h3>

                <p class="mt-4 text-slate-400">

                    Menggunakan bibit parfum berkualitas
                    sehingga aroma terasa lebih mewah dan tahan lama.

                </p>

            </div>

            <div
                data-aos="fade-left"
                data-aos-delay="150"
                class="rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur-xl">

                <div class="text-5xl">

                    ❤️

                </div>

                <h3 class="mt-5 text-2xl font-bold">

                    Crafted With Passion

                </h3>

                <p class="mt-4 text-slate-400">

                    Setiap botol diracik dengan perhatian terhadap detail,
                    agar setiap pelanggan mendapatkan pengalaman terbaik.

                </p>

            </div>

            <div
                data-aos="fade-left"
                data-aos-delay="250"
                class="rounded-3xl border border-white/10 bg-white/5 p-8 backdrop-blur-xl">

                <div class="text-5xl">

                    🌎

                </div>

                <h3 class="mt-5 text-2xl font-bold">

                    Inspired By The World

                </h3>

                <p class="mt-4 text-slate-400">

                    Terinspirasi dari berbagai aroma terbaik dunia,
                    dipadukan menjadi karakter khas Vispa.

                </p>

            </div>

        </div>

    </div>

</section>

<section
id="statistics"
class="bg-slate-950 py-28">

<div class="mx-auto max-w-7xl px-6">

<div class="grid gap-8 md:grid-cols-2 xl:grid-cols-4">

@php

$stats=[

["2500","+","Happy Customer"],

["120","+","Perfume Variant"],

["98","%","Customer Satisfaction"],

["15","+","Cities Reached"]

];

@endphp

@foreach($stats as $stat)

<div

data-aos="zoom-in"

class="rounded-3xl border border-white/10 bg-white/5 p-10 text-center backdrop-blur-xl">

<div class="text-6xl font-black text-cyan-400">

<span data-count="{{ $stat[0] }}">0</span>{{ $stat[1] }}

</div>

<div class="mt-5 text-slate-400">

{{ $stat[2] }}

</div>

</div>

@endforeach

</div>

</div>

</section>

<section

class="bg-slate-900 py-32">

<div class="mx-auto max-w-6xl px-6">

<div class="text-center">

<span class="text-cyan-400">

THE EXPERIENCE

</span>

<h2 class="mt-5 text-5xl font-black">

How Vispa Completes

Your Story

</h2>

</div>

<div class="relative mt-20">

<div class="absolute left-1/2 top-0 hidden h-full w-px bg-cyan-500/30 lg:block">

</div>

@php

$steps=[

["01","Choose","Temukan aroma yang paling menggambarkan dirimu."],

["02","Wear","Gunakan dalam setiap aktivitas penting."],

["03","Remember","Biarkan aroma menjadi identitasmu."],

["04","Repeat","Bangun kenangan baru setiap hari."]

];

@endphp

@foreach($steps as $index=>$step)

<div

data-aos="{{ $index%2==0?'fade-right':'fade-left' }}"

class="relative mb-16 grid items-center gap-10 lg:grid-cols-2">

@if($index%2==0)

<div>

<div class="rounded-3xl border border-white/10 bg-white/5 p-10">

<div class="text-6xl font-black text-cyan-400">

{{ $step[0] }}

</div>

<h3 class="mt-5 text-3xl font-bold">

{{ $step[1] }}

</h3>

<p class="mt-5 text-slate-400">

{{ $step[2] }}

</p>

</div>

</div>

<div></div>

@else

<div></div>

<div>

<div class="rounded-3xl border border-white/10 bg-white/5 p-10">

<div class="text-6xl font-black text-cyan-400">

{{ $step[0] }}

</div>

<h3 class="mt-5 text-3xl font-bold">

{{ $step[1] }}

</h3>

<p class="mt-5 text-slate-400">

{{ $step[2] }}

</p>

</div>

</div>

@endif

</div>

@endforeach

</div>

</div>

</section>

<section

class="bg-slate-950 py-28">

<div class="mx-auto max-w-7xl px-6">

<div class="text-center">

<h2 class="text-5xl font-black">

Loved By

Thousands

</h2>

</div>

<div class="mt-20 grid gap-8 lg:grid-cols-3">

@foreach([1,2,3] as $i)

<div

data-aos="fade-up"

class="rounded-3xl border border-white/10 bg-white/5 p-10 backdrop-blur-xl">

<div class="mb-6 text-yellow-400">

★★★★★

</div>

<p class="leading-8 text-slate-300">

"Vispa berhasil menjadi parfum favorit saya.
Aromanya elegan, tahan lama, dan tidak berlebihan."

</p>

<div class="mt-8 flex items-center gap-4">

<div class="h-14 w-14 rounded-full bg-cyan-500">

</div>

<div>

<div class="font-bold">

Customer {{ $i }}

</div>

<div class="text-sm text-slate-400">

Verified Buyer

</div>

</div>

</div>

</div>

@endforeach

</div>

</div>

</section>

<section

class="relative overflow-hidden bg-gradient-to-br from-cyan-600 via-blue-600 to-indigo-700 py-32">

<div class="absolute inset-0 bg-black/20">

</div>

<div class="relative mx-auto max-w-4xl px-6 text-center">

<h2 class="text-5xl font-black">

Ready To Find

Your Signature Scent?

</h2>

<p class="mx-auto mt-8 max-w-2xl text-lg leading-8">

Temukan aroma yang mampu menceritakan siapa dirimu.

Karena setiap perjalanan selalu memiliki aroma yang layak dikenang.

</p>

<div class="mt-12 flex flex-wrap justify-center gap-6">

<a

href="#contact"

class="rounded-xl bg-white px-8 py-4 font-bold text-slate-900 transition hover:scale-105">

Shop Now

</a>

<a

href="#about"

class="rounded-xl border border-white px-8 py-4 transition hover:bg-white/10">

Learn More

</a>

</div>

</div>

</section>

{{-- ===================================================== --}}
{{-- FAQ --}}
{{-- ===================================================== --}}

<section id="faq" class="bg-slate-950 py-28">

    <div class="mx-auto max-w-5xl px-6">

        <div class="text-center">

            <span class="text-cyan-400 uppercase tracking-[0.3em]">

                FAQ

            </span>

            <h2 class="mt-5 text-5xl font-black">

                Frequently Asked Questions

            </h2>

            <p class="mt-6 text-slate-400">

                Beberapa pertanyaan yang sering ditanyakan mengenai Vispa.

            </p>

        </div>

        <div class="mt-20 space-y-5">

            @php

                $faq = [

                    [
                        "q"=>"Apakah parfum Vispa tahan lama?",
                        "a"=>"Ya. Ketahanan parfum tergantung aktivitas dan jenis kulit, namun secara umum dapat bertahan 6–10 jam."
                    ],

                    [
                        "q"=>"Apakah Vispa memiliki parfum pria dan wanita?",
                        "a"=>"Ya. Kami memiliki koleksi pria, wanita, serta unisex."
                    ],

                    [
                        "q"=>"Apakah bisa membeli secara online?",
                        "a"=>"Tentu. Kamu dapat memesan melalui marketplace maupun media sosial resmi Vispa."
                    ],

                    [
                        "q"=>"Apakah menerima reseller?",
                        "a"=>"Ya. Kami membuka peluang reseller dan kolaborasi."
                    ],

                ];

            @endphp

            @foreach($faq as $item)

                <div
                    x-data="{ open:false }"
                    class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-xl">

                    <button
                        @click="open=!open"
                        class="flex w-full items-center justify-between px-8 py-6 text-left">

                        <span class="text-xl font-semibold">

                            {{ $item['q'] }}

                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 transition"
                            :class="{ 'rotate-180': open }"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"/>

                        </svg>

                    </button>

                    <div
                        x-show="open"
                        x-collapse
                        class="px-8 pb-8 text-slate-400">

                        {{ $item['a'] }}

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ===================================================== --}}
{{-- CONTACT --}}
{{-- ===================================================== --}}

<section
id="contact"
class="bg-slate-900 py-28">

<div class="mx-auto max-w-7xl px-6">

<div class="grid gap-20 lg:grid-cols-2">

<div>

<span class="text-cyan-400">

CONTACT US

</span>

<h2 class="mt-5 text-5xl font-black">

Let's Talk

</h2>

<p class="mt-8 leading-9 text-slate-400">

Punya pertanyaan?
Ingin bekerja sama?
Atau ingin menjadi reseller Vispa?

Tim kami siap membantu.

</p>

<div class="mt-12 space-y-5">

<div>

<div class="font-semibold">

Email

</div>

<div class="text-slate-400">

hello@vispa.id

</div>

</div>

<div>

<div class="font-semibold">

Instagram

</div>

<div class="text-slate-400">

@vispa.official

</div>

</div>

<div>

<div class="font-semibold">

WhatsApp

</div>

<div class="text-slate-400">

+62 xxx xxxx xxxx

</div>

</div>

</div>

</div>

<div>

<form
class="space-y-6 rounded-3xl border border-white/10 bg-white/5 p-10 backdrop-blur-xl">

<input

type="text"

placeholder="Full Name"

class="w-full rounded-xl border border-white/10 bg-transparent px-5 py-4 outline-none focus:border-cyan-400">

<input

type="email"

placeholder="Email"

class="w-full rounded-xl border border-white/10 bg-transparent px-5 py-4 outline-none focus:border-cyan-400">

<input

type="text"

placeholder="Subject"

class="w-full rounded-xl border border-white/10 bg-transparent px-5 py-4 outline-none focus:border-cyan-400">

<textarea

rows="6"

placeholder="Message"

class="w-full rounded-xl border border-white/10 bg-transparent px-5 py-4 outline-none focus:border-cyan-400"></textarea>

<button

class="w-full rounded-xl bg-cyan-500 py-4 font-bold transition hover:bg-cyan-400">

Send Message

</button>

</form>

</div>

</div>

</div>

</section>

<footer
class="border-t border-white/10 bg-slate-950">

<div class="mx-auto max-w-7xl px-6 py-20">

<div class="grid gap-10 lg:grid-cols-4">

<div>

<div class="text-4xl font-black">

VISPA

</div>

<p class="mt-6 text-slate-400">

Every scent tells a story.

Temukan aroma yang melengkapi setiap perjalanan hidupmu.

</p>

</div>

<div>

<h4 class="mb-5 font-bold">

Navigation

</h4>

<div class="space-y-3 text-slate-400">

<div>Home</div>

<div>Products</div>

<div>About</div>

<div>Contact</div>

</div>

</div>

<div>

<h4 class="mb-5 font-bold">

Collection

</h4>

<div class="space-y-3 text-slate-400">

<div>Venti</div>

<div>Fiora</div>

<div>Legacy</div>

<div>Signature</div>

</div>

</div>

<div>

<h4 class="mb-5 font-bold">

Social Media

</h4>

<div class="space-y-3 text-slate-400">

<div>Instagram</div>

<div>TikTok</div>

<div>Shopee</div>

<div>WhatsApp</div>

</div>

</div>

</div>

<div class="mt-20 border-t border-white/10 pt-10 text-center text-slate-500">

© {{ date('Y') }} Vispa.

Made with ❤️ in Indonesia.

</div>

</div>

</footer>