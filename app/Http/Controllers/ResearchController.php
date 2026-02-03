<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResearchController extends Controller
{
    public function index()
    {
        return view('pages.service', [
            'title' => 'Research & Development', 
            'description' => 'Pushing the boundaries of linguistics and AI interaction.',
            'longDescription' => 'At WeTrain, we don\'t just follow trends; we study them. Our dedicated R&D wing focuses on the intersection of human language acquisition and Natural Language Processing (NLP). We publish papers, conduct case studies, and refine our training methodologies based on empirical data.',
            'features' => [
                'Linguistic Pattern Analysis',
                'AI Model Bias Detection Studies',
                'Pedagogical Efficiency Research',
                'Corpus Creation for Low-Resource Languages',
                'Human-in-the-Loop Workflow Optimization'
            ],
            'benefits' => [
                'Access to proprietary whitepapers',
                'Collaboration opportunities for universities',
                'Data-driven training curriculum updates'
            ]
        ]);
    }
}
