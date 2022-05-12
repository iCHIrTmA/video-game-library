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

        $popularGames = Cache::remember('popular-games', 1, function () use ($before, $after) {
            return Http::withHeaders([
                'Client-ID' => '3pwtotz4s9x6eucs8xvel3ghlgej5a',
                'Authorization' => 'Bearer q7ro5oz4onykko23k26lfliiewau0o'
            ])->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug; 
                where platforms = (48,49,130,6)
                & (first_release_date > {$before}
                & first_release_date < {$after}
                & total_rating_count > 7);
                sort total_rating_count desc;
                limit 12;", "text/plain"
            )->post('https://api.igdb.com/v4/games')
            ->json();
        });
        dump($popularGames);

        return view('index');
    }
}
