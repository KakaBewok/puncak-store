<div>
    {{-- Page Header --}}
    <section class="bg-zinc-50 pt-28 pb-12 lg:pt-36 lg:pb-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-3xl font-bold tracking-tight text-zinc-900 sm:text-4xl">Blog & Artikel</h1>
                <p class="mx-auto mt-4 max-w-2xl text-base text-zinc-500">
                    Tips, panduan, dan informasi terbaru seputar produk kebersihan dan industri hospitality.
                </p>
            </div>
        </div>
    </section>

    {{-- Blog Grid --}}
    <section class="py-12 lg:py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            @if($posts->count() > 0)
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($posts as $post)
                        <x-public.article-card :post="$post" />
                    @endforeach
                </div>

                <div class="mt-10">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="py-20 text-center">
                    <svg class="mx-auto h-12 w-12 text-zinc-300" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 0 1-2.25 2.25M16.5 7.5V18a2.25 2.25 0 0 0 2.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 0 0 2.25 2.25h13.5" />
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-zinc-600">Belum ada artikel</h3>
                    <p class="mt-2 text-sm text-zinc-400">Artikel akan segera tersedia.</p>
                </div>
            @endif
        </div>
    </section>
</div>
