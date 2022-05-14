<div wire:init="getMostAnticipated" class="most-anticipated-container space-y-10 mt-8">
    @forelse($mostAnticipated as $game)
        <x-game-card-small :game="$game" />
    @empty
        @foreach(range(1,4) as $skeleton)
            <x-game-card-small-skeleton />
        @endforeach
    @endforelse
</div>