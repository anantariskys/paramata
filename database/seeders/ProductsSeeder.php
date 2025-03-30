<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Artisan;

class ProductsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        // Pastikan direktori exists
        $directory = storage_path('app/public/products');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        // Buat symlink jika belum ada
        if (!File::exists(public_path('storage'))) {
            Storage::disk('public')->makeDirectory('products');
            Artisan::call('storage:link');
        }
        
        // Generate 9 produk
        for ($i = 1; $i <= 9; $i++) {
            $imageUrl = "https://picsum.photos/800/600";
            $imageName = "product{$i}.jpg";
            
            try {
                // Download gambar menggunakan curl
                $ch = curl_init($imageUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $imageData = curl_exec($ch);
                curl_close($ch);

                if ($imageData) {
                    // Simpan gambar menggunakan Storage facade
                    Storage::disk('public')->put("products/{$imageName}", $imageData);

                    // Buat produk
                    Products::create([
                        'productname' => $faker->unique()->words(3, true),
                        'description' => $faker->paragraph(),
                        'picture' => "products/{$imageName}",
                        'category_id' => $faker->numberBetween(1, 3),
                    ]);
                }
            } catch (\Exception $e) {
                echo "Error downloading image {$i}: " . $e->getMessage() . "\n";
            }
        }
    }
}
