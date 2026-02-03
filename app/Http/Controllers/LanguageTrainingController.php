<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageTrainingController extends Controller
{
    public function index()
    {
        return view('pages.service', [
            'title' => 'Language Training', 
            'description' => 'Master global languages for business, travel, and academic success.',
            'longDescription' => 'At WeTrain, we believe language is the key to unlocking global potential. Our curriculum is designed not just to teach grammar, but to instill confidence and cultural fluency. Whether for corporate teams or individual learners, our immersive methods deliver rapid results.',
            'features' => [
                'Business English & Corporate Communication',
                'Conversational Fluency Programs',
                'Accent Reduction & Pronunciation',
                'Intensive Bootcamps',
                '1-on-1 Personalized Coaching'
            ],
            'benefits' => [
                'Native-level instructors',
                'Customized learning paths',
                'Flexible scheduling (Online/Offline)',
                'Certification upon completion'
            ]
        ]);
    }

    public function english()
    {
        return view('pages.service', [
            'title' => 'English Training', 
            'description' => 'Professional English courses tailored for career advancement.',
            'longDescription' => 'English is the lingua franca of international business. Our courses focus on practical application—preparing you for negotiations, presentations, and cross-border collaboration. Forget rote memorization; start communicating effectively from day one.',
            'features' => [
                'Business Email & Report Writing',
                'presentation Skills Workshop',
                'Industry-Specific Vocabulary (Tech, Finance, Medical)',
                'Networking & Small Talk Mastery',
                'Interview Preparation'
            ],
            'benefits' => [
                'Boost your employability globally',
                'Gain confidence in meetings',
                'Networking opportunities with fellow professionals'
            ]
        ]);
    }

    public function ieltsToefl()
    {
        return view('pages.service', [
            'title' => 'IELTS & TOEFL Prep', 
            'description' => 'Guaranteed score improvements for study and migration.',
            'longDescription' => 'Achieving a high score on IELTS or TOEFL opens doors to top universities and visa opportunities. Our proven strategies decode the exam structure, giving you the tactical edge to maximize your band score.',
            'features' => [
                'Mock Tests with Detailed Analysis',
                'Speaking & Writing Feedback Loop',
                'Time Management Strategies',
                'Listening & Reading Comprehension Drills',
                'Vocabulary Booster Packs'
            ],
            'benefits' => [
                'Average band score increase of 1.5 points',
                'Official Cambridge/ETS study materials',
                'Simulated exam environment'
            ]
        ]);
    }

    public function virtualAssistance()
    {
        return view('pages.service', [
            'title' => 'Virtual Assistance Training', 
            'description' => 'Become a top-tier VA with specialized administrative skills.',
            'longDescription' => 'The remote work economy is booming. We train aspiring Virtual Assistants not just in administrative tasks, but in modern tools like Notion, Asana, and Slack. Graduate as a "Day 1 Ready" professional capable of supporting global entrepreneurs.',
            'features' => [
                'Email & Calendar Management',
                'Social Media Scheduling & Basic Design',
                'Data Entry & CRM Management',
                'Remote Work Ethics & Communication',
                'Tool Mastery (Zoom, Trello, G-Suite)'
            ],
            'benefits' => [
                'Job placement assistance',
                'Portfolio creation workshop',
                'Access to global client network'
            ]
        ]);
    }

    public function seo()
    {
        return view('pages.service', [
            'title' => 'SEO Content Writing', 
            'description' => 'Craft content that ranks high and converts readers.',
            'longDescription' => 'Writing for the web requires a unique blend of creativity and data science. Learn how to research keywords, structure articles for readability, and optimize metadata without sacrificing the human voice.',
            'features' => [
                'Keyword Research & Competitor Analysis',
                'On-Page SEO Best Practices',
                'Writing for User Intent',
                'Content Structuring & Formatting',
                'Analytics & Performance Tracking'
            ],
            'benefits' => [
                'High-demand skill in the freelance market',
                'Learn to use tools like Ahrefs and SEMrush',
                'Build a writing portfolio during the course'
            ]
        ]);
    }
}
