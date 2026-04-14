<div>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-zinc-800">Pengaturan WhatsApp</h1>
        <p class="mt-1 text-sm text-zinc-500">Konfigurasi nomor WhatsApp dan pesan default CTA</p>
    </div>

    <div class="max-w-xl">
        <form wire:submit="save" class="space-y-6 rounded-xl border border-zinc-100 bg-white p-6 shadow-sm">
            {{-- WhatsApp Number --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-zinc-700">Nomor WhatsApp <span class="text-red-500">*</span></label>
                <input wire:model="whatsapp_number" type="text"
                       class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                       placeholder="Contoh: 6281234567890" />
                <p class="mt-1 text-xs text-zinc-400">Format internasional tanpa tanda + (contoh: 6281234567890)</p>
                @error('whatsapp_number') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Default Message --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-zinc-700">Pesan Default CTA <span class="text-red-500">*</span></label>
                <textarea wire:model="whatsapp_message" rows="3"
                          class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                          placeholder="Pesan yang akan terisi otomatis saat pelanggan klik tombol WhatsApp"></textarea>
                <p class="mt-1 text-xs text-zinc-400">Pesan ini akan langsung muncul di chat WhatsApp saat pelanggan mengklik tombol CTA</p>
                @error('whatsapp_message') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Preview --}}
            <div class="rounded-lg border border-zinc-100 bg-zinc-50 p-4">
                <p class="text-xs font-medium uppercase tracking-wider text-zinc-400 mb-2">Preview Link</p>
                <p class="break-all text-sm text-primary-600">
                    https://wa.me/{{ $whatsapp_number }}?text={{ urlencode($whatsapp_message) }}
                </p>
            </div>

            {{-- Save --}}
            <div class="flex justify-end">
                <button type="submit"
                        class="rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary-800"
                        wire:loading.attr="disabled" wire:loading.class="opacity-50">
                    <span wire:loading.remove wire:target="save">Simpan Pengaturan</span>
                    <span wire:loading wire:target="save">Menyimpan...</span>
                </button>
            </div>
        </form>
    </div>
</div>
