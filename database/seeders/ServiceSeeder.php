<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ServiceCategory;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataTraining = ServiceCategory::create([
            'name' => 'Data Training', 
            'slug' => 'data-training',
            'description' => 'Comprehensive data training services including annotation and processing.',
            'icon' => 'server' // Placeholder
        ]);
        
        $languageTraining = ServiceCategory::create([
            'name' => 'Language Training', 
            'slug' => 'language-training',
            'description' => 'Professional language training for career advancement.',
            'icon' => 'language' // Placeholder
        ]);

        $dataTraining->services()->createMany([
            ['name' => 'Annotation', 'slug' => 'annotation', 'description' => 'High-quality data annotation for AI models.'],
            ['name' => 'Transcribe', 'slug' => 'transcribe', 'description' => 'Accurate audio and video transcription.'],
            ['name' => 'Translate', 'slug' => 'translate', 'description' => 'Professional document and content translation.'],
            ['name' => 'Localization', 'slug' => 'localization', 'description' => 'Adapting content for local markets.'],
        ]);

        $languageTraining->services()->createMany([
            ['name' => 'English Training', 'slug' => 'english-training', 'description' => 'Business and conversational English courses.'],
            ['name' => 'IELTS/TOEFL Training', 'slug' => 'ielts-toefl', 'description' => 'Preparation for international English exams.'],
            ['name' => 'Virtual Assistance', 'slug' => 'virtual-assistance', 'description' => 'Training for remote virtual assistants.'],
            ['name' => 'SEO', 'slug' => 'seo', 'description' => 'SEO strategies and content optimization training.'],
        ]);
    }
}
