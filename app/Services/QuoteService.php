<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class QuoteService
{
    public function getRandomQuotes($count = 5)
    {
        $quotes = [];
        for ($i = 0; $i < $count; $i++) {
            $quotes[] = Http::get(config('apis.quotes'))->json()['quote'];
        }
        return $quotes;
    }
}
