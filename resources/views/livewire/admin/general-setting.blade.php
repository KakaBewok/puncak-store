<div>
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-zinc-800">Pengaturan Umum</h1>
        <p class="mt-1 text-sm text-zinc-500">Konfigurasi informasi perusahaan dan kontak</p>
    </div>

    <div class="max-w-xl">
        <form wire:submit="save" class="space-y-6 rounded-xl border border-zinc-100 bg-white p-6 shadow-sm">
            {{-- Company Name --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-zinc-700">Nama Perusahaan <span class="text-red-500">*</span></label>
                <input wire:model="company_name" type="text"
                       class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                       placeholder="Nama perusahaan" />
                @error('company_name') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Address --}}
            <div>
                <label class="mb-1.5 block text-sm font-medium text-zinc-700">Alamat</label>
                <textarea wire:model="company_address" rows="2"
                          class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                          placeholder="Alamat lengkap perusahaan"></textarea>
                @error('company_address') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
            </div>

            {{-- Email & Phone --}}
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Email</label>
                    <input wire:model="company_email" type="email"
                           class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                           placeholder="info@company.com" />
                    @error('company_email') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Telepon</label>
                    <input wire:model="company_phone" type="text"
                           class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                           placeholder="021-12345678" />
                    @error('company_phone') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>
            </div>

            {{-- Social Media --}}
            <div class="space-y-4">
                <p class="text-sm font-semibold text-zinc-700">Media Sosial</p>
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-500">Instagram URL</label>
                    <input wire:model="instagram" type="url"
                           class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                           placeholder="https://instagram.com/username" />
                    @error('instagram') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-500">Facebook URL</label>
                    <input wire:model="facebook" type="url"
                           class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100"
                           placeholder="https://facebook.com/pagename" />
                    @error('facebook') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>
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
