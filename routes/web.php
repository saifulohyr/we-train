<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DataTrainingController;
use App\Http\Controllers\LanguageTrainingController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\TrainingInquiryController;
use App\Http\Controllers\LanguageController;

// Language Switcher
Route::get('locale/{locale}', [LanguageController::class, 'switch'])->name('locale.switch');

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Data Training
Route::prefix('data-training')->name('data-training.')->group(function () {
    Route::get('/', [DataTrainingController::class, 'index'])->name('index');
    Route::get('/annotation', [DataTrainingController::class, 'annotation'])->name('annotation');
    Route::get('/transcribe', [DataTrainingController::class, 'transcribe'])->name('transcribe');
    Route::get('/translate', [DataTrainingController::class, 'translate'])->name('translate');
    Route::get('/localization', [DataTrainingController::class, 'localization'])->name('localization');
});

// Language Training
Route::prefix('language-training')->name('language-training.')->group(function () {
    Route::get('/', [LanguageTrainingController::class, 'index'])->name('index');
    Route::get('/english', [LanguageTrainingController::class, 'english'])->name('english');
    Route::get('/ielts-toefl', [LanguageTrainingController::class, 'ieltsToefl'])->name('ielts-toefl');
    Route::get('/virtual-assistance', [LanguageTrainingController::class, 'virtualAssistance'])->name('virtual-assistance');
    Route::get('/seo', [LanguageTrainingController::class, 'seo'])->name('seo');
});

// Research
Route::get('/research', [ResearchController::class, 'index'])->name('research');

// Training Inquiry (Form submission)
Route::post('/inquiry', [TrainingInquiryController::class, 'store'])->name('inquiry.store');
