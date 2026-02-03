<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class GoogleSheetsService
{
    /**
     * Append a row to the configured Google Sheet.
     * 
     * @param array $data
     * @return bool
     */
    public function appendRow(array $data): bool
    {
        // For now, we log the data. Real integration will happen once credentials are provided.
        // Option A: Use a Google Apps Script Web App URL (Simplest)
        // Option B: Native Google Sheets API (Requires JSON Key)
        
        Log::info('GoogleSheetsService: Would append row', $data);

        // Implementation placeholder
        // Http::post(config('services.google.sheets_webhook'), $data);

        return true;
    }
}
