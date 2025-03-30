<?php

namespace Database\Seeders;

use App\Models\NewsBlog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Faker\Factory as Faker;
use Carbon\Carbon;

class NewsBlogSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        
        // Pastikan folder exists
        $directory = public_path('images/news');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }
        
        // Generate 9 berita
        for ($i = 1; $i <= 9; $i++) {
            $imageUrl = "https://picsum.photos/800/500"; // Gambar random untuk berita
            $imageName = "news{$i}.jpg";
            $path = public_path("images/news/{$imageName}");
            
            // Download dan simpan gambar
            file_put_contents($path, file_get_contents($imageUrl));

            NewsBlog::create([
                'title' => $faker->unique()->sentence(6),
                'content' => $faker->paragraphs(3, true),
                'image' => "images/news/{$imageName}",
                'author' => $faker->name(),
                'published_at' => Carbon::now()->subDays(rand(1, 30))->format('Y-m-d')
            ]);
        }
    }
}