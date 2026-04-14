<div>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-zinc-800">Dashboard</h1>
        <p class="mt-1 text-sm text-zinc-500">Ringkasan data website Puncak Store</p>
    </div>

    {{-- Stats Cards --}}
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        {{-- Total Products --}}
        <div class="rounded-xl border border-zinc-100 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Total Produk</p>
                    <p class="mt-2 text-3xl font-bold text-zinc-800">{{ $totalProducts }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary-50 text-primary-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                </div>
            </div>
            <div class="mt-4 flex items-center gap-4 text-sm">
                <span class="text-zinc-400">Aktif: <span class="font-medium text-green-600">{{ $activeProducts }}</span></span>
                <span class="text-zinc-400">Promo: <span class="font-medium text-rose-500">{{ $promoProducts }}</span></span>
            </div>
        </div>

        {{-- Total Posts --}}
        <div class="rounded-xl border border-zinc-100 bg-white p-6 shadow-sm">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-zinc-500">Total Artikel</p>
                    <p class="mt-2 text-3xl font-bold text-zinc-800">{{ $totalPosts }}</p>
                </div>
                <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-blue-50 text-blue-600">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5" />
                    </svg>
                </div>
            </div>
            <div class="mt-4 text-sm">
                <span class="text-zinc-400">Dipublikasi: <span class="font-medium text-green-600">{{ $publishedPosts }}</span></span>
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="rounded-xl border border-zinc-100 bg-white p-6 shadow-sm">
            <p class="text-sm font-medium text-zinc-500">Aksi Cepat</p>
            <div class="mt-4 space-y-2">
                <a href="{{ route('admin.products') }}" wire:navigate
                   class="flex items-center gap-2 rounded-lg bg-zinc-50 px-4 py-2.5 text-sm font-medium text-zinc-700 transition-colors hover:bg-primary-50 hover:text-primary-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Produk
                </a>
                <a href="{{ route('admin.blog') }}" wire:navigate
                   class="flex items-center gap-2 rounded-lg bg-zinc-50 px-4 py-2.5 text-sm font-medium text-zinc-700 transition-colors hover:bg-primary-50 hover:text-primary-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    Tambah Artikel
                </a>
                <a href="{{ route('home') }}" target="_blank"
                   class="flex items-center gap-2 rounded-lg bg-zinc-50 px-4 py-2.5 text-sm font-medium text-zinc-700 transition-colors hover:bg-primary-50 hover:text-primary-700">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                    </svg>
                    Lihat Website
                </a>
            </div>
        </div>
    </div>
</div>
