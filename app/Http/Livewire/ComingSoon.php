<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ComingSoon extends Component
{
    public $comingSoon = [];

    public function getComingSoon() {
        $this->comingSoon = Cache::remember('coming-soon', 10, function () {
            $current = Carbon::now()->timestamp;

            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "fields name, cover.url, first_release_date, total_rating_count, slug; 
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$current}
                    & total_rating_count > 1);
                    sort first_release_date asc;
                    limit 4;", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();
        });
    }

    public function render()
    {
        return view('livewire.coming-soon');
    }
}
