<div>
    {{-- Page Header --}}
    <section class="bg-zinc-50 pt-28 pb-12 lg:pt-36 lg:pb-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">Produk Kami</h1>
                <p class="mx-auto mt-4 max-w-2xl text-base text-zinc-500">
                    Temukan rangkaian produk sabun dan kebersihan profesional untuk bisnis Anda.
                </p>
            </div>
        </div>
    </section>

    {{-- Filter & Search --}}
    <section class="border-b border-zinc-100 bg-white">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between gap-4 py-4 sm:flex-row">
                {{-- Search --}}
                <div class="relative w-full sm:max-w-xs">
                    <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input wire:model.live.debounce.300ms="search"
                           type="text"
                           placeholder="Cari produk..."
                           class="w-full rounded-lg border border-zinc-200 bg-zinc-50 py-2.5 pl-10 pr-4 text-sm text-zinc-700 outline-none transition-colors placeholder:text-zinc-400 focus:border-primary-300 focus:bg-white focus:ring-2 focus:ring-primary-100" />
                </div>

                {{-- Filter --}}
                <div class="flex gap-2">
                    <button wire:click="$set('filter', 'all')"
                            class="rounded-lg px-4 py-2 text-sm font-medium transition-colors
                            {{ $filter === 'all' ? 'bg-primary-700 text-white' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}">
                        Semua
                    </button>
                    <button wire:click="$set('filter', 'promo')"
                            class="rounded-lg px-4 py-2 text-sm font-medium transition-colors
                            {{ $filter === 'promo' ? 'bg-primary-700 text-white' : 'bg-zinc-100 text-zinc-600 hover:bg-zinc-200' }}">
                        🏷️ Promo
                    </button>
                </div>
            </div>
        </div>
    </section>

    {{-- Product Grid --}}
    <section class="py-12 lg:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($products->count() > 0)
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach($products as $product)
                        <x-public.product-card :product="$product" />
                    @endforeach
                </div>

                <div class="mt-10">
                    {{ $products->links() }}
                </div>
            @else
                <div class="py-20 text-center">
                    <svg class="mx-auto h-12 w-12 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-zinc-600">Produk tidak ditemukan</h3>
                    <p class="mt-2 text-sm text-zinc-400">Coba ubah kata kunci pencarian atau filter.</p>
                </div>
            @endif
        </div>
    </section>
</div>
