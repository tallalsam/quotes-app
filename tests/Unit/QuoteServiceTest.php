<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\QuoteService;
use Illuminate\Support\Facades\Http;

class QuoteServiceTest extends TestCase
{
    public function test_get_random_quotes_returns_correct_number_of_quotes()
    {
        // Mocked response data
        $mockQuote = ['quote' => 'This is a test quote'];

        // Fake HTTP response
        Http::fake([
            config('apis.quotes') => Http::response($mockQuote, 200),
        ]);

        // Instantiate the QuoteService
        $service = new QuoteService();

        // Set the count of quotes you expect
        $count = 5;
        $quotes = $service->getRandomQuotes($count);

        // Assert the number of quotes returned matches the expected count
        $this->assertCount($count, $quotes);

        // Assert each quote matches the mocked response
        foreach ($quotes as $quote) {
            $this->assertEquals($mockQuote['quote'], $quote);
        }
    }
}
