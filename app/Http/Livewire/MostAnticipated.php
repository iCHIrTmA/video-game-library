<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Component;

class MostAnticipated extends Component
{
    public $mostAnticipated = [];

    public function getMostAnticipated() {
        $mostAnticipatedUnformatted = Cache::remember('most-anticipated', 10, function () {
            $current = Carbon::now()->timestamp;
            $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;
    
            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "fields name, cover.url, first_release_date, total_rating_count, slug; 
                    where platforms = (48,49,130,6)
                    & (first_release_date >= {$current}
                    & first_release_date < {$afterFourMonths});
                    sort total_rating_count desc;
                    limit 4;", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();
        });

        $this->mostAnticipated = $this->formatForView($mostAnticipatedUnformatted);
    }

    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'coverImageUrl' => isset($game['cover']) ? Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'] ) : null,
                'releaseDate' => Carbon::parse($game['first_release_date'])->format('M d, Y')
            ])->toArray();
        });
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
