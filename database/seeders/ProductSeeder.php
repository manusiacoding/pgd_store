<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Deskirpsi Website Builder
        $deskripsiWebsiteBuilder =
        '<p>Design sendiri website pesantren Anda dengan berbagai template yang mudah digunakan</p>
            <ol>
                <li>Profil Pesantren</li>
                <li>Kegiatan Pesantren</li>
                <li>Berita Pesantren</li>
                <li>Belajar Digital</li>
                <li>Toko Online</li>
            </ol>' ;

        // Data Website Builder
        $website_builder = [
            'nama' => 'Website Builder',
            'deskripsi' => $deskripsiWebsiteBuilder,
            'harga' => '900,000',
            'slug' => 'website-builder',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/03/Website-Builder.png'
        ];

        // Deskripsi Kartu Santri
        $deskripsiKartuSantri =
        '<p>Kartu digital untuk memudahkan transaksi dan administrasi santri di lingkungan pesantren</p>
            <ol>
                <li>Identitas Digital</li>
                <li>Alat pembayaran Digital</li>
                <li>Top Up Saldo</li>
                <li>Monitoring oleh Orang Tua</li>
                <li>Device Terminal User</li>
            </ol>';

        // Data Kartu Santri
        $kartu_santri = [
            'nama' => 'Kartu Santri',
            'deskripsi' => $deskripsiKartuSantri,
            'harga' => '700,000',
            'slug' => 'kartu-santri',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/03/Kartu-Santri-POS.png'
        ];

        // Deskripsi Konektifitas
        $deskripsiKonektifitas =
        '<p>Jangkau lebih banyak calon santri dimanapun dan kapanpun melalui konektivitas tanpa batas.</p>
            <ol>
                <li>Live Streaming</li>
                <li>Internet Fiber Optic</li>
                <li>Internet Modem Portable</li>
                <li>Wifi Corner</li>
            </ol>';

        // Data Konektifitas
        $konektifitas = [
            'nama' => 'Konektifitas',
            'deskripsi' => $deskripsiKonektifitas,
            'harga' => '800,000',
            'slug' => 'konektifitas',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/03/Indihome-Orbit.png'
        ];

        // Deskripsi Edukasi Digital
        $deskripsiEdukasiDigital =
        '<p>Tingkatkan kualitas belajar dan mengajar santri dan pesantren anda dengan digital learning dari Pijar Sekolah di masa pandemi ini .</p>
            <ol>
                <li>Absensi Digital</li>
                <li>Tugas & Ujian Online</li>
                <li>Kelas Virtual</li>
                <li>Database Pengajar</li>
                <li>Database Santri</li>
            </ol>';

        // Data Edukasi Digital
        $edukasi_digital = [
            'nama' => 'Edukasi Digital',
            'deskripsi' => $deskripsiEdukasiDigital,
            'harga' => '600,000',
            'slug' => 'edukasi-digital',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/03/Image-4.png'
        ];

        // Deskripsi E Commerce
        $deskripsieCommerce =
        '<p>Digitalisasi penjualan produk Pesantren anda secara online maupun offline dengan layanan commerce dari kami.</p>
            <ol>
                <li>Pembuatan Toko Online</li>
                <li>Solusi Pembayaran Cashless</li>
                <li>Pengembangan UMKM</li>
                <li>Aplikasi & Mesin Kasir Digital</li>
            </ol>';

        // Data E Commerce
        $eCommerce = [
            'nama' => 'E Commerce',
            'deskripsi' => $deskripsieCommerce,
            'harga' => '500,000',
            'slug' => 'e-commerce',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/03/sakoo-1.png'
        ];

        // Deskripsi Dakwah Digital
        $deskripsiDakwahDigital =
        '<p>Jadikan pesantren Anda sebagai kontributor eksklusif untuk video dakwah pada aplikasi belajar islam Muslim Life</p>
            <ol>
                <li>Kajian Live Streaming</li>
                <li>Kajian Online Premium</li>
                <li>Live Streaming Pesantren</li>
                <li>Video Conference</li>
            </ol>';

        // Data Dakwah Digital
        $DakwahDigital = [
            'nama' => 'Dakwah Digital',
            'deskripsi' => $deskripsiDakwahDigital,
            'harga' => '400,000',
            'slug' => 'dakwah-digital',
            'foto' => 'https://pesantrengodigital.id/wp-content/uploads/2021/02/material-foto-Pgd.png'
        ];

        // SaveProduct
            // Save Website Builder
            $saveWebsiteBuilder = Product::create($website_builder);

            // Save Kartu Santri
            $saveKartuSantri = Product::create($kartu_santri);

            // Save Konektifitas
            $saveKonektifitas = Product::create($konektifitas);

            // Save Edukasi Digital
            $saveEdukasiDigital = Product::create($edukasi_digital);

            // Save E Commerce
            $saveECommerce = Product::create($eCommerce);

            // Save Dakwah Digital
            $saveDakwahDigital = Product::create($DakwahDigital);

    }
}
