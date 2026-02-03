<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInquiryRequest;
use App\Services\InquiryService;

class TrainingInquiryController extends Controller
{
    protected $inquiryService;

    public function __construct(InquiryService $inquiryService)
    {
        $this->inquiryService = $inquiryService;
    }

    public function store(StoreInquiryRequest $request)
    {
        // Validated data is automatically available
        $inquiry = $this->inquiryService->createInquiry($request->validated());

        // Redirect to WhatsApp
        $adminPhone = '6281234567890'; // Replace with actual admin number if available
        $message = "Hello WeTrain, I would like to inquire about training.\n\nEmail: {$inquiry->email}\nPhone: {$inquiry->phone}";
        
        $whatsappUrl = "https://wa.me/{$adminPhone}?text=" . urlencode($message);

        return redirect()->away($whatsappUrl);
    }
}
