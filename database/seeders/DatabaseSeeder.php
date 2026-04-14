<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use App\Models\Product;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        User::factory()->create([
            'name' => 'Admin Puncak Store',
            'email' => 'admin@puncakstore.com',
            'password' => bcrypt('password'),
        ]);

        // Seed settings
        $settings = [
            'whatsapp_number' => '6281234567890',
            'whatsapp_message' => 'Halo, saya tertarik dengan produk Puncak Store. Bisa info lebih lanjut?',
            'company_name' => 'Puncak Store',
            'company_address' => 'Jl. Industri Bersih No. 88, Kawasan Industri Jababeka, Cikarang, Bekasi 17530',
            'company_email' => 'info@puncakstore.com',
            'company_phone' => '021-89123456',
            'instagram' => 'https://instagram.com/puncakstore',
            'facebook' => 'https://facebook.com/puncakstore',
        ];

        foreach ($settings as $key => $value) {
            Setting::set($key, $value);
        }

        // Seed products
        $products = [
            [
                'name' => 'Hand Soap Premium',
                'slug' => 'hand-soap-premium',
                'description' => 'Sabun cuci tangan premium dengan formula antibakteri yang lembut di kulit. Cocok untuk penggunaan di hotel, villa, dan apartemen. Tersedia dalam berbagai aroma segar yang menenangkan. Diformulasikan khusus untuk penggunaan intensif di area publik.',
                'price' => 45000,
                'is_promo' => false,
                'discount' => 0,
                'minimum_order' => 12,
                'is_featured' => true,
                'status' => 'active',
                'sort_order' => 1,
            ],
            [
                'name' => 'Floor Cleaner Industrial',
                'slug' => 'floor-cleaner-industrial',
                'description' => 'Pembersih lantai industrial dengan daya bersih maksimal. Formula khusus untuk lantai marmer, keramik, dan granit. Aman digunakan untuk semua jenis lantai. Meninggalkan aroma segar tahan lama.',
                'price' => 85000,
                'is_promo' => true,
                'discount' => 15,
                'discount_type' => 'percentage',
                'minimum_order' => 6,
                'is_featured' => true,
                'status' => 'active',
                'sort_order' => 2,
            ],
            [
                'name' => 'Laundry Detergent Pro',
                'slug' => 'laundry-detergent-pro',
                'description' => 'Deterjen laundry profesional untuk bisnis laundry dan hotel. Membersihkan noda membandel dengan efektif tanpa merusak serat kain. Formula hemat yang menghasilkan busa optimal.',
                'price' => 120000,
                'is_promo' => false,
                'discount' => 0,
                'minimum_order' => 10,
                'is_featured' => true,
                'status' => 'active',
                'sort_order' => 3,
            ],
            [
                'name' => 'Glass Cleaner Streak-Free',
                'slug' => 'glass-cleaner-streak-free',
                'description' => 'Pembersih kaca tanpa bekas dengan teknologi anti-streak. Sempurna untuk kaca, cermin, dan permukaan mengkilap. Hasil bersih dan berkilau dalam sekali usap.',
                'price' => 35000,
                'is_promo' => true,
                'discount' => 10,
                'discount_type' => 'percentage',
                'minimum_order' => 24,
                'is_featured' => false,
                'status' => 'active',
                'sort_order' => 4,
            ],
            [
                'name' => 'Toilet Bowl Cleaner',
                'slug' => 'toilet-bowl-cleaner',
                'description' => 'Pembersih toilet dengan formula descaling power yang mampu menghilangkan kerak dan noda membandel. Mengandung disinfektan untuk membunuh kuman dan bakteri.',
                'price' => 28000,
                'is_promo' => false,
                'discount' => 0,
                'minimum_order' => 24,
                'is_featured' => false,
                'status' => 'active',
                'sort_order' => 5,
            ],
            [
                'name' => 'Multi-Surface Disinfectant',
                'slug' => 'multi-surface-disinfectant',
                'description' => 'Disinfektan multi-permukaan dengan perlindungan antibakteri 99.9%. Aman untuk semua permukaan. Ideal untuk rumah sakit, hotel, dan area publik.',
                'price' => 65000,
                'is_promo' => true,
                'discount' => 20,
                'discount_type' => 'percentage',
                'minimum_order' => 12,
                'is_featured' => true,
                'status' => 'active',
                'sort_order' => 6,
            ],
            [
                'name' => 'Dish Washing Liquid',
                'slug' => 'dish-washing-liquid',
                'description' => 'Sabun pencuci piring cair dengan formula anti-grease yang efektif mengangkat minyak dan lemak. Lembut di tangan namun keras terhadap kotoran.',
                'price' => 32000,
                'is_promo' => false,
                'discount' => 0,
                'minimum_order' => 24,
                'is_featured' => false,
                'status' => 'active',
                'sort_order' => 7,
            ],
            [
                'name' => 'Air Freshener Spray',
                'slug' => 'air-freshener-spray',
                'description' => 'Pengharum ruangan spray dengan aroma premium. Tersedia dalam varian Fresh Linen, Ocean Breeze, dan Lavender Dream. Cocok untuk lobby hotel dan ruang meeting.',
                'price' => 42000,
                'is_promo' => false,
                'discount' => 0,
                'minimum_order' => 12,
                'is_featured' => false,
                'status' => 'active',
                'sort_order' => 8,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }

        // Seed blog posts
        $posts = [
            [
                'title' => 'Tips Memilih Produk Cleaning Supply untuk Hotel Bintang 5',
                'slug' => 'tips-memilih-produk-cleaning-supply-hotel',
                'excerpt' => 'Panduan lengkap dalam memilih produk kebersihan yang tepat untuk hotel bintang 5. Dari sabun tangan hingga disinfektan, pastikan standar kebersihan hotel Anda terjaga.',
                'content' => '<p>Memilih produk cleaning supply untuk hotel bintang 5 memerlukan perhatian khusus. Standar kebersihan yang tinggi harus diimbangi dengan produk yang berkualitas dan aman.</p>
<h2>1. Perhatikan Sertifikasi Produk</h2>
<p>Pastikan produk yang Anda pilih telah memiliki sertifikasi dari BPOM dan SNI. Ini menjamin keamanan produk untuk digunakan di area publik.</p>
<h2>2. Pilih Produk dengan Aroma yang Menyenangkan</h2>
<p>Aroma produk pembersih sangat mempengaruhi pengalaman tamu hotel. Pilih produk dengan aroma yang lembut dan tidak menyengat.</p>
<h2>3. Pertimbangkan Efektivitas dan Efisiensi</h2>
<p>Produk yang baik tidak hanya efektif membersihkan, tetapi juga efisien dalam penggunaan. Pilih produk yang memiliki dosis pakai yang ekonomis.</p>
<h2>4. Evaluasi Keamanan untuk Berbagai Permukaan</h2>
<p>Hotel memiliki berbagai jenis permukaan mulai dari marmer, kayu, kaca, hingga stainless steel. Pastikan produk yang dipilih aman untuk semua jenis permukaan tersebut.</p>',
                'status' => 'publish',
                'published_at' => now()->subDays(2),
                'user_id' => 1,
            ],
            [
                'title' => 'Mengapa Bisnis Laundry Perlu Produk Deterjen Berkualitas?',
                'slug' => 'bisnis-laundry-deterjen-berkualitas',
                'excerpt' => 'Deterjen berkualitas adalah kunci keberhasilan bisnis laundry. Pelajari mengapa investasi pada produk deterjen premium dapat meningkatkan kepuasan pelanggan.',
                'content' => '<p>Dalam bisnis laundry, kualitas hasil cucian adalah segalanya. Deterjen yang Anda gunakan memainkan peran penting dalam menentukan kepuasan pelanggan.</p>
<h2>Kualitas Hasil Cucian</h2>
<p>Deterjen berkualitas mampu mengangkat noda membandel tanpa merusak serat kain. Ini berarti pakaian pelanggan tetap awet dan bersih sempurna.</p>
<h2>Efisiensi Biaya Jangka Panjang</h2>
<p>Meskipun harga deterjen premium lebih tinggi, dosis pakai yang lebih sedikit membuat biaya per cucian justru lebih hemat.</p>
<h2>Kepuasan Pelanggan</h2>
<p>Pakaian yang bersih, wangi, dan lembut akan membuat pelanggan kembali menggunakan jasa laundry Anda.</p>',
                'status' => 'publish',
                'published_at' => now()->subDays(5),
                'user_id' => 1,
            ],
            [
                'title' => 'Panduan Protokol Kebersihan untuk Apartemen dan Villa',
                'slug' => 'panduan-protokol-kebersihan-apartemen-villa',
                'excerpt' => 'Standar kebersihan apartemen dan villa perlu ditingkatkan. Berikut panduan lengkap protokol kebersihan yang wajib diterapkan.',
                'content' => '<p>Protokol kebersihan yang ketat adalah keharusan bagi pengelola apartemen dan villa. Berikut panduan yang bisa Anda terapkan.</p>
<h2>Area Lobby dan Resepsionis</h2>
<p>Area lobby adalah kesan pertama penghuni dan tamu. Pastikan lantai selalu bersih dan mengkilap, serta sediakan hand sanitizer di setiap titik strategis.</p>
<h2>Kamar dan Unit</h2>
<p>Setiap unit harus dibersihkan secara menyeluruh sebelum penghuni baru masuk. Gunakan disinfektan pada semua permukaan yang sering disentuh.</p>
<h2>Area Kolam Renang dan Gym</h2>
<p>Area basah memerlukan perhatian ekstra. Gunakan pembersih anti-jamur dan pastikan sirkulasi air kolam renang terjaga dengan baik.</p>',
                'status' => 'publish',
                'published_at' => now()->subDays(8),
                'user_id' => 1,
            ],
            [
                'title' => 'Custom Branding: Solusi Produk Kebersihan dengan Label Sendiri',
                'slug' => 'custom-branding-produk-kebersihan',
                'excerpt' => 'Tingkatkan citra bisnis Anda dengan produk kebersihan berlabel sendiri. Puncak Store menyediakan layanan custom branding untuk kebutuhan B2B.',
                'content' => '<p>Custom branding atau private label adalah strategi yang semakin populer di industri hospitality. Dengan produk berlabel sendiri, hotel atau villa Anda akan terlihat lebih eksklusif.</p>
<h2>Keuntungan Custom Branding</h2>
<p>Produk dengan label hotel Anda sendiri memberikan kesan premium dan profesional kepada tamu. Ini juga menjadi bagian dari strategi branding yang konsisten.</p>
<h2>Proses Pemesanan</h2>
<p>Puncak Store menyediakan layanan custom branding dengan minimum order yang terjangkau. Hubungi tim kami untuk konsultasi desain dan pemilihan produk.</p>',
                'status' => 'publish',
                'published_at' => now()->subDays(12),
                'user_id' => 1,
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }
}
