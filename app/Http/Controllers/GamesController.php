<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class GamesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show($slug)
    {
        $game = Cache::remember('popular-games', 10, function () use ($slug){
            return Http::withHeaders(config('services.igdb'))
                ->withBody(
                    "fields name, cover.url, total_rating_count, platforms.abbreviation, rating,
                    slug, involved_companies.company.name, genres.name, aggregated_rating, summary, websites.*,
                    videos.*, screenshots.*, similar_games.cover.url, similar_games.name,
                    similar_games.rating, similar_games.aggregated_rating, similar_games.platforms.abbreviation, similar_games.slug;
                    where slug = \"{$slug}\";", "text/plain"
                )->post('https://api.igdb.com/v4/games')
                ->json();
        });

        abort_if(!$game, 404);

        return view('show', ['game' => $this->formatForView($game[0])]);
    }

    private function formatForView($game)
    {
        return collect($game)->merge([
            'coverImageUrl' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url'] ),
            'genres' => isset($game['genres']) ? collect($game['genres'])->implode('name', ', ') : null,
            'involvedCompanies' => isset($game['involved_companies']) ? $game['involved_companies'][0]['company']['name'] : null,
            'platforms' => isset($game['platforms']) ? collect($game['platforms'])->implode('abbreviation', ', ') : null,
            'memberRating' => isset($game['rating']) ? round($game['rating']) : null,
            'criticRating' => isset($game['aggregated_rating']) ? round($game['aggregated_rating']) : null,
            'trailer' =>  isset($game['videos']) ? 'https://youtube.com/embed/' . $game['videos'][0]['video_id'] : null,
            'screenshots' => collect($game['screenshots'])->map(function ($screenshot) {
                return [
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url']),
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                ];
            })->take(9),
            'social' => [
                'website' => collect($game['websites'])->first(),
                'facebook' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'facebook');
                })->first(),
                'twitter' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'twitter');
                })->first(),
                'instagram' => collect($game['websites'])->filter(function ($website) {
                    return Str::contains($website['url'], 'instagram');
                })->first(),
            ],
            'similarGames' => isset($game['similar_games']) ? collect($game['similar_games'])->map(function ($similar) {
                return [
                    'slug' => $similar['slug'],
                    'coverImageUrl' => isset($similar['cover']) ? Str::replaceFirst('thumb', '720p', $similar['cover']['url']) : 'https://via.placeholder.com/264x352',
                    'rating' => isset($similar['rating']) ? round($similar['rating']) : null,
                    'name' => $similar['name'],
                    'platforms' => isset($similar['platforms']) ? collect($similar['platforms'])->implode('abbreviation', ', ') : null,
                ];
            })->take(6) : null,
        ]);
    }
}
