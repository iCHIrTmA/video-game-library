<div wire:init="getPopularGames" class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
    @forelse($popularGames as $game)
        <x-game-card :game="$game" />
    @empty
        @foreach(range(1,12) as $game)
            <div class="game mt-8">
                <div class="relative inline-block">
                    <div class="bg-gray-800 w-44 h-56"></div>
                    <div class="block text-transparent text-lg bg-gray-700 leading-tight mt-4">Title goes here</div>
                    <div class="text-transparent bg-gray-700 inline-block rounded mt-3">PS4, PC, Switch</div>
                </div>
            </div>
        @endforeach
    @endforelse
</div>