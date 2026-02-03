<?php

namespace App\Services;

use App\Models\TrainingInquiry;
use App\Services\GoogleSheetsService;

class InquiryService
{
    protected $sheetsService;

    public function __construct(GoogleSheetsService $sheetsService)
    {
        $this->sheetsService = $sheetsService;
    }

    /**
     * Create a new inquiry and trigger notifications.
     *
     * @param array $data
     * @return TrainingInquiry
     */
    public function createInquiry(array $data): TrainingInquiry
    {
        // 1. Save to Database
        $inquiry = TrainingInquiry::create([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'status' => 'pending',
            'language' => app()->getLocale(),
        ]);

        // 2. Send to Google Sheets
        try {
            $this->sheetsService->appendRow([
                'id' => $inquiry->id,
                'email' => $inquiry->email,
                'phone' => $inquiry->phone,
                'language' => $inquiry->language,
                'created_at' => $inquiry->created_at->toDateTimeString(),
            ]);
        } catch (\Exception $e) {
            // Don't fail the request if Sheets fails, just log it
            logger()->error('Failed to append to Google Sheets: ' . $e->getMessage());
        }

        // 3. Send Email (TODO: Implement Mail)
        
        return $inquiry;
    }
}
