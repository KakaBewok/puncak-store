@props(['product'])

{{-- Product Card Component --}}
<div class="group overflow-hidden rounded-lg border border-zinc-100 bg-white transition-all duration-300 hover:border-zinc-200 hover:shadow-md">
    {{-- Image --}}
    <a href="{{ route('product.detail', $product->slug) }}" wire:navigate class="relative block aspect-[4/3] overflow-hidden bg-zinc-50">
        <img src="{{ $product->image_url }}"
             alt="{{ $product->name }}"
             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
             loading="lazy" />

        {{-- Promo Badge --}}
        @if($product->is_promo)
        <div class="absolute top-3 left-3">
            <span class="inline-flex items-center gap-1 rounded-md bg-rose-500 px-2.5 py-1 text-xs font-semibold text-white shadow-sm">
                <svg class="h-3 w-3" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>
                @if($product->discount_type === 'percentage')
                    Diskon {{ number_format($product->discount, 0) }}%
                @else
                    Diskon Rp {{ number_format($product->discount, 0, ',', '.') }}
                @endif
            </span>
        </div>
        @endif
    </a>

    {{-- Content --}}
    <div class="p-4">
        <a href="{{ route('product.detail', $product->slug) }}" wire:navigate>
            <h3 class="text-sm font-semibold text-zinc-800 transition-colors group-hover:text-primary-700 line-clamp-1">
                {{ $product->name }}
            </h3>
        </a>

        <p class="mt-1.5 text-xs text-zinc-400 line-clamp-2">
            {{ Str::limit(strip_tags($product->description), 80) }}
        </p>

        {{-- Price --}}
        <div class="mt-3 flex items-baseline gap-2">
            @if($product->is_promo && $product->discount > 0)
                <span class="text-base font-bold text-primary-700">{{ $product->formatted_final_price }}</span>
                <span class="text-xs text-zinc-400 line-through">{{ $product->formatted_price }}</span>
            @else
                <span class="text-base font-bold text-primary-700">{{ $product->formatted_price }}</span>
            @endif
        </div>

        {{-- Min Order --}}
        <p class="mt-1.5 text-xs text-zinc-400">Min. order: {{ $product->minimum_order }} pcs</p>

        {{-- CTA --}}
        <a href="{{ route('product.detail', $product->slug) }}" wire:navigate
           class="mt-3 flex w-full items-center justify-center gap-1.5 rounded-md bg-zinc-50 px-4 py-2 text-xs font-medium text-zinc-600 transition-all hover:bg-primary-50 hover:text-primary-700">
            Lihat Detail
            <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    </div>
</div>
