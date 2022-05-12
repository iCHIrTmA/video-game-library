<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $before = Carbon::now()->subMonths(2)->timestamp;
        $after = Carbon::now()->addMonths(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $afterFourMonths = Carbon::now()->addMonths(4)->timestamp;

        $mostAnticipated = Cache::remember('most-anticipated', 1, function () use ($current, $afterFourMonths) {
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

        $comingSoon = Cache::remember('coming-soon', 1, function () use ($current) {
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

        return view('index', compact('mostAnticipated', 'comingSoon'));
    }
}
