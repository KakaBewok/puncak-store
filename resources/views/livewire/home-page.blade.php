<div>
    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-zinc-50 via-white to-primary-50/30 pt-32 pb-20 lg:pt-40 lg:pb-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="page-enter">
                    <div class="inline-flex items-center gap-2 rounded-full border border-primary-100 bg-primary-50 px-4 py-1.5 text-xs font-medium text-primary-700">
                        <span class="inline-block h-1.5 w-1.5 rounded-full bg-primary-500 animate-pulse"></span>
                        Supplier Terpercaya Sejak 2015
                    </div>
                    <h1 class="mt-6 text-4xl font-bold leading-tight tracking-tight text-zinc-900 sm:text-5xl lg:text-6xl">
                        Solusi <span class="text-primary-700">Kebersihan</span> untuk Bisnis Profesional
                    </h1>
                    <p class="mt-6 max-w-xl text-lg leading-relaxed text-zinc-500">
                        Kami menyediakan produk sabun dan pembersih berkualitas tinggi untuk hotel, villa, apartemen, rumah sakit, dan korporat. Kualitas terjamin, harga kompetitif.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center gap-4">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 rounded-lg bg-primary-700 px-6 py-3 text-sm font-semibold text-white shadow-sm transition-all hover:bg-primary-800 hover:shadow-md">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Hubungi Kami
                        </a>
                        <a href="{{ route('products') }}" wire:navigate
                           class="inline-flex items-center gap-2 rounded-lg border border-zinc-200 bg-white px-6 py-3 text-sm font-semibold text-zinc-700 shadow-sm transition-all hover:border-zinc-300 hover:shadow-md">
                            Lihat Produk
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                            </svg>
                        </a>
                    </div>

                    {{-- Trust badges --}}
                    <div class="mt-10 flex flex-wrap items-center gap-6 border-t border-zinc-100 pt-8">
                        <div class="flex items-center gap-2 text-sm text-zinc-400">
                            <svg class="h-5 w-5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Produk Bersertifikasi
                        </div>
                        <div class="flex items-center gap-2 text-sm text-zinc-400">
                            <svg class="h-5 w-5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            500+ Partner Bisnis
                        </div>
                        <div class="flex items-center gap-2 text-sm text-zinc-400">
                            <svg class="h-5 w-5 text-primary-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            Pengiriman Nasional
                        </div>
                    </div>
                </div>

                {{-- Hero Visual --}}
                <div class="relative hidden lg:block">
                    <div class="relative rounded-2xl bg-gradient-to-br from-primary-100/60 to-primary-50/30 p-8">
                        <img src="https://images.unsplash.com/photo-1563453392212-326f5e854473?w=600&h=500&fit=crop&q=80"
                             alt="Produk kebersihan profesional"
                             class="rounded-xl shadow-lg"
                             loading="lazy" />
                        {{-- Floating stats card --}}
                        <div class="absolute -bottom-4 -left-4 rounded-lg bg-white p-4 shadow-lg border border-zinc-100">
                            <div class="flex items-center gap-3">
                                <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-lg font-bold text-zinc-800">100+</p>
                                    <p class="text-xs text-zinc-400">Produk Tersedia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section class="py-20 lg:py-28" id="about">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid items-center gap-12 lg:grid-cols-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?w=600&h=450&fit=crop&q=80"
                         alt="Tentang Puncak Store"
                         class="rounded-xl shadow-md"
                         loading="lazy" />
                </div>
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-primary-600">Tentang Kami</p>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">
                        Mitra Terpercaya untuk Kebutuhan Kebersihan Bisnis Anda
                    </h2>
                    <p class="mt-5 text-base leading-relaxed text-zinc-500">
                        Puncak Store adalah supplier produk sabun dan kebersihan profesional yang telah dipercaya oleh ratusan hotel, villa, apartemen, rumah sakit, dan perusahaan di seluruh Indonesia. Kami berkomitmen menyediakan produk berkualitas tinggi dengan harga yang kompetitif.
                    </p>
                    <p class="mt-4 text-base leading-relaxed text-zinc-500">
                        Dengan pengalaman bertahun-tahun di industri cleaning supply, kami memahami kebutuhan spesifik setiap bisnis. Dari sabun tangan mewah untuk hotel bintang 5 hingga deterjen industri untuk bisnis laundry, kami memiliki solusi yang tepat untuk Anda.
                    </p>
                    <div class="mt-8 grid grid-cols-2 gap-6">
                        <div class="rounded-lg bg-zinc-50 p-4">
                            <p class="text-2xl font-bold text-primary-700">500+</p>
                            <p class="mt-1 text-sm text-zinc-500">Klien Aktif</p>
                        </div>
                        <div class="rounded-lg bg-zinc-50 p-4">
                            <p class="text-2xl font-bold text-primary-700">100+</p>
                            <p class="mt-1 text-sm text-zinc-500">Varian Produk</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Products Section --}}
    <section class="bg-zinc-50/50 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600">Produk Unggulan</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">
                    Produk Terlaris Kami
                </h2>
                <p class="mx-auto mt-4 max-w-2xl text-base text-zinc-500">
                    Pilihan produk kebersihan terbaik yang telah dipercaya oleh ratusan bisnis di seluruh Indonesia.
                </p>
            </div>

            <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($featuredProducts as $product)
                    <x-public.product-card :product="$product" />
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <a href="{{ route('products') }}" wire:navigate
                   class="inline-flex items-center gap-2 rounded-lg border border-zinc-200 bg-white px-6 py-3 text-sm font-medium text-zinc-700 shadow-sm transition-all hover:border-zinc-300 hover:shadow-md">
                    Lihat Semua Produk
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    {{-- Why Choose Us Section --}}
    <section class="py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-wider text-primary-600">Keunggulan Kami</p>
                <h2 class="mt-3 text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">
                    Mengapa Memilih Puncak Store?
                </h2>
            </div>

            <div class="mt-12 grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                {{-- Feature 1 --}}
                <div class="group rounded-xl border border-zinc-100 bg-white p-6 transition-all duration-300 hover:border-primary-100 hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-zinc-800">Produk Berkualitas</h3>
                    <p class="mt-2 text-sm text-zinc-500">Semua produk kami telah melalui uji kualitas ketat dan bersertifikasi resmi.</p>
                </div>

                {{-- Feature 2 --}}
                <div class="group rounded-xl border border-zinc-100 bg-white p-6 transition-all duration-300 hover:border-primary-100 hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-zinc-800">Harga Kompetitif</h3>
                    <p class="mt-2 text-sm text-zinc-500">Dapatkan harga terbaik untuk pembelian dalam jumlah besar. Semakin banyak, semakin hemat.</p>
                </div>

                {{-- Feature 3 --}}
                <div class="group rounded-xl border border-zinc-100 bg-white p-6 transition-all duration-300 hover:border-primary-100 hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 0 0-5.78 1.128 2.25 2.25 0 0 1-2.4 2.245 4.5 4.5 0 0 0 8.4-2.245c0-.399-.078-.78-.22-1.128Zm0 0a15.998 15.998 0 0 0 3.388-1.62m-5.043-.025a15.994 15.994 0 0 1 1.622-3.395m3.42 3.42a15.995 15.995 0 0 0 4.764-4.648l3.876-5.814a1.151 1.151 0 0 0-1.597-1.597L14.146 6.32a15.996 15.996 0 0 0-4.649 4.763m3.42 3.42a6.776 6.776 0 0 0-3.42-3.42" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-zinc-800">Custom Branding</h3>
                    <p class="mt-2 text-sm text-zinc-500">Layanan private label untuk meningkatkan citra profesional bisnis Anda.</p>
                </div>

                {{-- Feature 4 --}}
                <div class="group rounded-xl border border-zinc-100 bg-white p-6 transition-all duration-300 hover:border-primary-100 hover:shadow-md">
                    <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600 transition-colors group-hover:bg-primary-100">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-base font-semibold text-zinc-800">Support Profesional</h3>
                    <p class="mt-2 text-sm text-zinc-500">Tim support kami siap membantu konsultasi dan pemilihan produk yang tepat.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Blog Section --}}
    @if($latestPosts->count() > 0)
    <section class="bg-zinc-50/50 py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-wider text-primary-600">Blog & Artikel</p>
                    <h2 class="mt-3 text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">
                        Artikel Terbaru
                    </h2>
                </div>
                <a href="{{ route('blog') }}" wire:navigate
                   class="hidden items-center gap-1 text-sm font-medium text-primary-600 transition-colors hover:text-primary-700 sm:inline-flex">
                    Lihat Semua
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                    </svg>
                </a>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($latestPosts as $post)
                    <x-public.article-card :post="$post" />
                @endforeach
            </div>

            <div class="mt-8 text-center sm:hidden">
                <a href="{{ route('blog') }}" wire:navigate class="text-sm font-medium text-primary-600">Lihat Semua Artikel →</a>
            </div>
        </div>
    </section>
    @endif

    {{-- CTA Section --}}
    <section class="py-20 lg:py-28">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-hidden rounded-2xl bg-primary-700 px-8 py-16 text-center sm:px-16">
                {{-- Background pattern --}}
                <div class="absolute inset-0 opacity-10">
                    <svg class="h-full w-full" viewBox="0 0 400 400" fill="none">
                        <defs>
                            <pattern id="pattern" x="0" y="0" width="40" height="40" patternUnits="userSpaceOnUse">
                                <circle cx="1" cy="1" r="1" fill="white" />
                            </pattern>
                        </defs>
                        <rect width="100%" height="100%" fill="url(#pattern)" />
                    </svg>
                </div>

                <div class="relative">
                    <h2 class="text-3xl font-bold text-white sm:text-4xl">
                        Siap Bermitra dengan Kami?
                    </h2>
                    <p class="mx-auto mt-4 max-w-xl text-base text-primary-100">
                        Hubungi tim kami sekarang untuk konsultasi gratis dan penawaran harga terbaik untuk bisnis Anda.
                    </p>
                    <div class="mt-8 flex flex-wrap items-center justify-center gap-4">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                           class="inline-flex items-center gap-2 rounded-lg bg-white px-6 py-3 text-sm font-semibold text-primary-700 shadow-sm transition-all hover:bg-zinc-50 hover:shadow-md">
                            <svg class="h-5 w-5 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Hubungi Kami Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
