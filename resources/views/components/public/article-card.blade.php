@props(['post'])

{{-- Article Card Component --}}
<article class="group overflow-hidden rounded-lg border border-zinc-100 bg-white transition-all duration-300 hover:border-zinc-200 hover:shadow-md">
    {{-- Thumbnail --}}
    <a href="{{ route('blog.detail', $post->slug) }}" wire:navigate class="relative block aspect-[16/9] overflow-hidden bg-zinc-50">
        <img src="{{ $post->thumbnail_url }}"
             alt="{{ $post->title }}"
             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
             loading="lazy" />
    </a>

    {{-- Content --}}
    <div class="p-5">
        <div class="flex items-center gap-2 text-xs text-zinc-400">
            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
            </svg>
            {{ $post->formatted_date }}
        </div>

        <a href="{{ route('blog.detail', $post->slug) }}" wire:navigate>
            <h3 class="mt-2.5 text-base font-semibold text-zinc-800 transition-colors group-hover:text-primary-700 line-clamp-2">
                {{ $post->title }}
            </h3>
        </a>

        <p class="mt-2 text-sm text-zinc-500 line-clamp-2">
            {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 120) }}
        </p>

        <a href="{{ route('blog.detail', $post->slug) }}" wire:navigate
           class="mt-4 inline-flex items-center gap-1 text-sm font-medium text-primary-600 transition-colors hover:text-primary-700">
            Baca selengkapnya
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    </div>
</article>
