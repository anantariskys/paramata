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
        for ($i = 1; $i <= 20; $i++) {

             // Buat produk
             Products::create([
                'productname' => $faker->unique()->words(3, true),
                'description' => $faker->paragraph(),
                'picture' => "https://picsum.photos/800/600",
                'category_id' => $faker->numberBetween(1, 3),
                'subcategory_id' => $faker->numberBetween(1, 3),
            ]);
         
        }
    }
}
