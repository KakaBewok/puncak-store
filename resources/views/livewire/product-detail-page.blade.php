<div>
    {{-- Breadcrumb --}}
    <section class="bg-zinc-50 pt-28 pb-6 lg:pt-36">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center gap-2 text-sm text-zinc-400">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-primary-600 transition-colors">Beranda</a>
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                <a href="{{ route('products') }}" wire:navigate class="hover:text-primary-600 transition-colors">Produk</a>
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
                <span class="text-zinc-600">{{ $product->name }}</span>
            </nav>
        </div>
    </section>

    {{-- Product Detail --}}
    <section class="bg-zinc-50 pb-16 lg:pb-24">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mt-6 grid gap-10 lg:grid-cols-2">
                {{-- Product Image --}}
                <div class="relative overflow-hidden rounded-xl bg-white border border-zinc-100 shadow-sm">
                    <img src="{{ $product->image_url }}"
                         alt="{{ $product->name }}"
                         class="h-full w-full object-cover aspect-square lg:aspect-[4/3]" />

                    @if($product->is_promo)
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 rounded-md bg-rose-500 px-3 py-1.5 text-sm font-semibold text-white shadow-sm">
                            @if($product->discount_type === 'percentage')
                                Diskon {{ number_format($product->discount, 0) }}%
                            @else
                                Diskon Rp {{ number_format($product->discount, 0, ',', '.') }}
                            @endif
                        </span>
                    </div>
                    @endif
                </div>

                {{-- Product Info --}}
                <div>
                    <h1 class="text-2xl font-bold text-zinc-900 sm:text-3xl">{{ $product->name }}</h1>

                    {{-- Price --}}
                    <div class="mt-4 flex items-baseline gap-3">
                        @if($product->is_promo && $product->discount > 0)
                            <span class="text-3xl font-bold text-primary-700">{{ $product->formatted_final_price }}</span>
                            <span class="text-lg text-zinc-400 line-through">{{ $product->formatted_price }}</span>
                        @else
                            <span class="text-3xl font-bold text-primary-700">{{ $product->formatted_price }}</span>
                        @endif
                    </div>

                    {{-- Min order --}}
                    <div class="mt-4 flex items-center gap-2 rounded-lg bg-amber-50 border border-amber-100 px-4 py-3">
                        <svg class="h-5 w-5 text-amber-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                        </svg>
                        <span class="text-sm font-medium text-amber-800">Minimum order: {{ $product->minimum_order }} pcs</span>
                    </div>

                    {{-- Description --}}
                    <div class="mt-6">
                        <h3 class="text-sm font-semibold uppercase tracking-wider text-zinc-400">Deskripsi Produk</h3>
                        <div class="mt-3 text-base leading-relaxed text-zinc-600">
                            {!! nl2br(e($product->description)) !!}
                        </div>
                    </div>

                    {{-- CTA --}}
                    <div class="mt-8 space-y-3">
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener"
                           class="flex w-full items-center justify-center gap-2 rounded-lg bg-primary-700 px-6 py-3.5 text-sm font-semibold text-white shadow-sm transition-all hover:bg-primary-800 hover:shadow-md">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                            Hubungi Kami untuk Penawaran
                        </a>
                        <a href="{{ route('products') }}" wire:navigate
                           class="flex w-full items-center justify-center gap-2 rounded-lg border border-zinc-200 bg-white px-6 py-3 text-sm font-medium text-zinc-600 transition-all hover:border-zinc-300 hover:bg-zinc-50">
                            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                            Kembali ke Produk
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Products --}}
    @if($relatedProducts->count() > 0)
    <section class="bg-white py-16 lg:py-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-zinc-900">Produk Lainnya</h2>
            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach($relatedProducts as $related)
                    <x-public.product-card :product="$related" />
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
