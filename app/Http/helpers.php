<?php

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('businessSetting')) {
    function businessSetting($id = 1)
    {
        return Cache::remember('business-setting-' . $id, 86400, function () use ($id) {
            return BusinessSetting::find($id);
        });
    }
}

// Additional helper functions...
