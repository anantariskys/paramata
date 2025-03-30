<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Gas Detector',
            'description' => 'Gas detector is a device used to detect the presence of hazardous or flammable gases in an environment. It serves as an early warning system to prevent accidents such as gas leaks, explosions, or poisoning. Gas detectors are widely used in industries such as oil and gas, mining, manufacturing, and other high-risk workplaces. These devices operate with sensors that identify specific gas concentrations in the air and trigger alarms—through sound, light, or automated systems—if gas levels exceed safety limits.',
        ]);
        Category::create([
            'name' => 'Noise Measurement',
            'description' => 'Noise measurement is the process of measuring and analyzing sound levels in an environment. It is used to assess the quality of sound and its impact on human health and productivity. Noise measurement is essential in various industries, including construction, manufacturing, and transportation, where noise levels can affect worker safety and productivity.',
        ]);
        Category::create([
            'name' => 'Mercury Analyzer',
            'description' => 'Mercury analyzer is a device used to measure the concentration of mercury in air or water. It is used in various industries, including mining, manufacturing, and environmental monitoring, to ensure compliance with safety standards and regulations.',
        ]);
        
        
    }
}
