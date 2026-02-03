<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataTrainingController extends Controller
{
    public function index()
    {
        return view('pages.service', [
            'title' => 'Data Training Services', 
            'description' => 'Powering the next generation of AI with high-quality, human-annotated data.',
            'longDescription' => 'In the rapidly evolving world of Artificial Intelligence, data is the new oil. However, raw data is often messy and unusable. Our Data Training services provide the essential refining process—structuring, labeling, and cleaning your data so your Machine Learning models can learn effectively.',
            'features' => [
                'Image & Video Annotation',
                'Audio Transcription & Labelling',
                'Text Categorization & Sentiment Analysis',
                'LiDAR & 3D Point Cloud Annotation',
                'Multilingual Data Collection'
            ],
            'benefits' => [
                '99.9% Accuracy verified by human experts',
                'Scalable workforce for massive datasets',
                'Secure data handling protocols (GDPR Compliant)',
                'Custom workflows tailored to your ML models'
            ]
        ]);
    }

    public function annotation()
    {
        return view('pages.service', [
            'title' => 'Data Annotation', 
            'description' => 'Precision labeling for Computer Vision and NLP models.',
            'longDescription' => 'Our annotation service produces ground truth data for machine learning. Whether you need bounding boxes for autonomous driving, polygon segmentation for medical imaging, or entity extraction for chatbots, our expert annotators deliver pixel-perfect precision.',
            'features' => [
                '2D Bounding Boxes',
                'Polygon & Semantic Segmentation',
                'Keypoint & Polyline Annotation',
                'Named Entity Recognition (NER)',
                'Optical Character Recognition (OCR) Verification'
            ],
            'benefits' => [
                'Reduces model training time by 40%',
                'Industry-specific domain experts (Medical, Legal, Auto)',
                'Real-time quality assurance feedback loop'
            ]
        ]);
    }

    public function transcribe()
    {
        return view('pages.service', [
            'title' => 'Transcription Services', 
            'description' => 'Turning speech into accurate, searchable text.',
            'longDescription' => 'From medical dictations to multi-speaker courtroom recordings, we convert audio to text with exceptional accuracy. Our transcribers are native speakers who understand nuance, dialect, and industry jargon.',
            'features' => [
                'Verbatim & Clean Read Transcription',
                'Time-stamping & Speaker Identification',
                'Subtitle & Caption Creation (SRT/VTT)',
                'Medical & Legal Transcription',
                'Audio Data Collection for ASR Training'
            ],
            'benefits' => [
                'Support for over 50 languages and dialects',
                'Fast turnaround times (24h available)',
                'Strict confidentiality and NDA adherence'
            ]
        ]);
    }

    public function translate()
    {
        return view('pages.service', [
            'title' => 'Translation & Localization', 
            'description' => 'Bridge cultural gaps with fluent, context-aware translation.',
            'longDescription' => 'Machine translation often misses the mark on tone and cultural context. Our human translators ensure your message resonates with local audiences, preserving the original intent and emotional impact.',
            'features' => [
                'Document & Website Translation',
                'Technical Manual Translation',
                'Marketing & Creative Transcreation',
                'App & Software GUI Localization',
                'Machine Translation Post-Editing (MTPE)'
            ],
            'benefits' => [
                'Certified translators in 100+ language pairs',
                'Cultural consultation included',
                'Consistency via Translation Memory tools'
            ]
        ]);
    }

    public function localization()
    {
        return view('pages.service', [
            'title' => 'software Localization', 
            'description' => 'Adapting your product for seamless global adoption.',
            'longDescription' => 'Localization goes beyond translation. It involves adapting date formats, currencies, UI layouts, and cultural references to make your software feel native to every user, everywhere.',
            'features' => [
                'UI/UX cultural adaptation testing',
                'Internationalization (i18n) consulting',
                'Multimedia (Audio/Video) localization',
                'Right-to-Left (RTL) language support',
                'Functional L10n testing'
            ],
            'benefits' => [
                'Increase global market penetration',
                'Reduce user friction and support tickets',
                'Launch simultaneously in multiple regions'
            ]
        ]);
    }
}
