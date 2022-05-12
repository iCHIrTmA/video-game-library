<div wire:init="getPopularGames" class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @foreach($popularGames as $game)
        <div class="game mt-8">
            <div class="relative inline-block">
                <a href="#">
                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                </a>
                @isset($game['rating'])
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            {{ round($game['rating']) . '%' }}
                        </div>
                    </div>
                @endisset
            </div>
            <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] }}
            </a>
            <div class="text-gray-400 mt-1">
                @foreach($game['platforms'] as $platform)
                    {{ $platform['abbreviation'] }},
                @endforeach
            </div>
        </div>
    @endforeach
</div>