<div>
    <div class="mb-6 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
        <div>
            <h1 class="text-2xl font-bold text-zinc-800">Kelola Artikel</h1>
            <p class="mt-1 text-sm text-zinc-500">Tambah, edit, dan hapus artikel blog</p>
        </div>
        <button wire:click="openCreateForm"
                class="inline-flex items-center gap-2 rounded-lg bg-primary-700 px-4 py-2.5 text-sm font-medium text-white shadow-sm transition-all hover:bg-primary-800">
            <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
            Tambah Artikel
        </button>
    </div>

    {{-- Search --}}
    <div class="mb-6">
        <div class="relative max-w-sm">
            <svg class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
            <input wire:model.live.debounce.300ms="search" type="text" placeholder="Cari artikel..."
                   class="w-full rounded-lg border border-zinc-200 bg-white py-2.5 pl-10 pr-4 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100" />
        </div>
    </div>

    {{-- Posts Table --}}
    <div class="overflow-hidden rounded-xl border border-zinc-100 bg-white shadow-sm">
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm">
                <thead class="border-b border-zinc-100 bg-zinc-50">
                    <tr>
                        <th class="px-4 py-3 font-medium text-zinc-500">Artikel</th>
                        <th class="px-4 py-3 font-medium text-zinc-500">Status</th>
                        <th class="px-4 py-3 font-medium text-zinc-500">Tanggal</th>
                        <th class="px-4 py-3 font-medium text-zinc-500 text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-zinc-50">
                    @forelse($posts as $post)
                    <tr class="hover:bg-zinc-50/50 transition-colors">
                        <td class="px-4 py-3">
                            <div class="flex items-center gap-3">
                                <img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}"
                                     class="h-10 w-14 rounded-lg object-cover border border-zinc-100" />
                                <div>
                                    <p class="font-medium text-zinc-800 line-clamp-1">{{ $post->title }}</p>
                                    <p class="text-xs text-zinc-400">{{ $post->slug }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 py-3">
                            @if($post->status === 'publish')
                                <span class="inline-flex items-center rounded-full bg-green-50 px-2.5 py-0.5 text-xs font-medium text-green-700">Publish</span>
                            @else
                                <span class="inline-flex items-center rounded-full bg-zinc-100 px-2.5 py-0.5 text-xs font-medium text-zinc-500">Draft</span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-zinc-500 text-sm">
                            {{ $post->published_at ? $post->published_at->format('d M Y') : '-' }}
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex items-center justify-end gap-1">
                                <button wire:click="openEditForm({{ $post->id }})"
                                        class="rounded-lg p-1.5 text-zinc-400 hover:bg-zinc-100 hover:text-zinc-600 transition-colors" title="Edit">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                                <button wire:click="confirmDelete({{ $post->id }})"
                                        class="rounded-lg p-1.5 text-zinc-400 hover:bg-red-50 hover:text-red-600 transition-colors" title="Hapus">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-4 py-12 text-center text-sm text-zinc-400">Belum ada artikel.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($posts->hasPages())
        <div class="border-t border-zinc-100 px-4 py-3">
            {{ $posts->links() }}
        </div>
        @endif
    </div>

    {{-- Blog Form Modal --}}
    @if($showForm)
    <div class="fixed inset-0 z-50 flex items-start justify-center overflow-y-auto bg-zinc-900/50 p-4 pt-10" wire:click.self="closeForm">
        <div class="w-full max-w-2xl rounded-xl bg-white shadow-xl" @click.stop>
            <div class="flex items-center justify-between border-b border-zinc-100 px-6 py-4">
                <h2 class="text-lg font-semibold text-zinc-800">
                    {{ $isEditing ? 'Edit Artikel' : 'Tambah Artikel' }}
                </h2>
                <button wire:click="closeForm" class="rounded-lg p-1 text-zinc-400 hover:bg-zinc-100 hover:text-zinc-600">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form wire:submit="save" class="p-6 space-y-5 max-h-[75vh] overflow-y-auto">
                {{-- Title --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Judul <span class="text-red-500">*</span></label>
                    <input wire:model.live="title" type="text" class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100" placeholder="Masukkan judul artikel" />
                    @error('title') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Slug --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Slug</label>
                    <input wire:model="slug" type="text" class="w-full rounded-lg border border-zinc-200 bg-zinc-50 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100" />
                    @error('slug') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Thumbnail --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Thumbnail</label>
                    @if($existing_thumbnail)
                        <div class="mb-2 flex items-center gap-3">
                            <img src="{{ asset('storage/' . $existing_thumbnail) }}" alt="Current" class="h-16 w-24 rounded-lg object-cover border" />
                            <button type="button" wire:click="removeThumbnail" class="text-xs text-red-500 hover:text-red-700">Hapus thumbnail</button>
                        </div>
                    @endif
                    <input wire:model="thumbnail" type="file" accept="image/*" class="w-full rounded-lg border border-zinc-200 px-4 py-2 text-sm file:mr-4 file:rounded-md file:border-0 file:bg-primary-50 file:px-3 file:py-1 file:text-sm file:font-medium file:text-primary-700" />
                    @error('thumbnail') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                    <div wire:loading wire:target="thumbnail" class="mt-2 text-xs text-primary-600">Mengupload...</div>
                </div>

                {{-- Excerpt --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Ringkasan</label>
                    <textarea wire:model="excerpt" rows="2" class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100" placeholder="Ringkasan singkat artikel"></textarea>
                    @error('excerpt') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Content --}}
                <div>
                    <label class="mb-1.5 block text-sm font-medium text-zinc-700">Konten</label>
                    <textarea wire:model="content" rows="10" class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100 font-mono" placeholder="Tulis konten artikel (mendukung HTML)"></textarea>
                    <p class="mt-1 text-xs text-zinc-400">Mendukung format HTML (contoh: &lt;h2&gt;, &lt;p&gt;, &lt;ul&gt;, &lt;a&gt;)</p>
                    @error('content') <p class="mt-1 text-xs text-red-500">{{ $message }}</p> @enderror
                </div>

                {{-- Status & Date --}}
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-zinc-700">Status</label>
                        <select wire:model="status" class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100">
                            <option value="draft">Draft</option>
                            <option value="publish">Publish</option>
                        </select>
                    </div>
                    <div>
                        <label class="mb-1.5 block text-sm font-medium text-zinc-700">Tanggal Publish</label>
                        <input wire:model="published_at" type="datetime-local" class="w-full rounded-lg border border-zinc-200 px-4 py-2.5 text-sm outline-none focus:border-primary-300 focus:ring-2 focus:ring-primary-100" />
                    </div>
                </div>

                {{-- Actions --}}
                <div class="flex items-center justify-end gap-3 border-t border-zinc-100 pt-5">
                    <button type="button" wire:click="closeForm"
                            class="rounded-lg border border-zinc-200 px-4 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50">
                        Batal
                    </button>
                    <button type="submit"
                            class="rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white shadow-sm hover:bg-primary-800"
                            wire:loading.attr="disabled" wire:loading.class="opacity-50">
                        <span wire:loading.remove wire:target="save">{{ $isEditing ? 'Perbarui' : 'Simpan' }}</span>
                        <span wire:loading wire:target="save">Menyimpan...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endif

    {{-- Delete Confirmation Modal --}}
    @if($showDeleteModal)
    <div class="fixed inset-0 z-50 flex items-center justify-center bg-zinc-900/50 p-4">
        <div class="w-full max-w-sm rounded-xl bg-white p-6 shadow-xl">
            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-red-100 text-red-600">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                </svg>
            </div>
            <h3 class="mt-4 text-lg font-semibold text-zinc-800">Hapus Artikel?</h3>
            <p class="mt-2 text-sm text-zinc-500">Tindakan ini tidak bisa dibatalkan. Artikel akan dihapus secara permanen.</p>
            <div class="mt-6 flex items-center gap-3">
                <button wire:click="$set('showDeleteModal', false)"
                        class="flex-1 rounded-lg border border-zinc-200 px-4 py-2.5 text-sm font-medium text-zinc-600 hover:bg-zinc-50">
                    Batal
                </button>
                <button wire:click="deletePost"
                        class="flex-1 rounded-lg bg-red-600 px-4 py-2.5 text-sm font-medium text-white hover:bg-red-700">
                    Hapus
                </button>
            </div>
        </div>
    </div>
    @endif
</div>
