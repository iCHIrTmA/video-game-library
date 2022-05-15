<div class="relative">
    <input
        wire:model.debounce.300ms="search"
        type="text" 
        class="bg-gray-800 text-sm rounded-full focus:outline-none focus:shadow-outline px-3 pl-8 py-1 w-64" 
        placeholder="Search..."
    >
    <div class="absolute top-0 flex items-center h-full ml-2">
        <svg class="fill-current text-gray-400 w-4" viewBox="0 0 24 24"><path class="heroicon-ui" d="M16.32 14.9l5.39 5.4a1 1 0 01-1.42 1.4l-5.38-5.38a8 8 0 111.41-1.41zM10 16a6 6 0 100-12 6 6 0 000 12z" /></svg>
    </div>

    
    <svg wire:loading class="animate-spin h-4 w-4 text-white top-0 right-0 mr-2 mt-1.5" style="position:absolute" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <circle class="opacity-50" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>

    @if (strlen($search) > 2)
        <div class="absolute z-50 bg-gray-800 text-sm rounded w-64 mt-2">
            @if (count($searchResults) > 0)
            <ul>
                @foreach ($searchResults as $game)
                    <li>
                        <a href="{{ route('games.show', $game['slug']) }}" class="block hover:bg-gray-700 flex items-center transition ease-in-out duration-150 px-3 py-3">
                            @if (isset($game['cover']))
                                <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url'] ) }}" alt="cover" class="w-10">
                            @else
                                <img src="https://via.placeholder.com/264x352" alt="game_cover" class="w-10">
                            @endif
                            <span class="ml-4"> {{ $game['name'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            @else
                <div class="px-3 py-3">
                    No Results for "{{ $search }}"
                </div>
            @endif
        </div>
    @endif
</div>