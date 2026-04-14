<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Puncak Store - Supplier produk sabun dan kebersihan terpercaya untuk hotel, villa, apartemen, rumah sakit, dan industri hospitality." />

    <title>
        {{ filled($title ?? null) ? $title . ' - Puncak Store' : 'Puncak Store - Supplier Produk Kebersihan & Sabun Profesional' }}
    </title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="min-h-screen bg-white text-zinc-800 antialiased">

    {{-- Public Navbar --}}
    <x-public.navbar />

    {{-- Main Content --}}
    <main>
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <x-public.footer />

    {{-- Floating WhatsApp Button --}}
    <x-public.whatsapp-float />

    @livewireScripts
    @fluxScripts
</body>
</html>
