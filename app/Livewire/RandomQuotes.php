<?php

namespace App\Livewire;

use App\Services\QuoteService;
use Livewire\Component;

class RandomQuotes extends Component
{
    public $quotes = [];

    public function mount(QuoteService $quoteService)
    {
        $this->fetchQuotes($quoteService);
    }

    public function fetchQuotes(QuoteService $quoteService)
    {
        $this->quotes = $quoteService->getRandomQuotes();
    }
    public function render()
    {
        return view('livewire.random-quotes');
    }
}
