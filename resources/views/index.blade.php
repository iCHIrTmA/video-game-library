@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <!-- <livewire:popular-games> -->
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
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
        <!-- End Popular Games section -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                <!-- <livewire:recently-reviewed> -->

                <div class="recently-reviewed-container space-y-12 mt-8">
                    @foreach($recentlyReviewed as $game)
                        <div class="game bg-gray-800 rounded-lg shadow-md flex px-6 py-6">
                            <div class="relative flex-none">
                                <a href="#">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) }}" alt="game cover" class="w-48 hover:opacity-75 transition ease-in-out duration-150">
                                </a>

                                @isset($game['rating'])
                                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-900 rounded-full -mr-5 -mb-5">
                                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                                            {{ round($game['rating']) . '%'}}
                                        </div>
                                    </div>
                                @endisset
                            </div>
                            <div class="ml-12">
                                <a href="#" class="block text-lg font-semibold leading-tight hover:text-gray-400 mt-4">
                                    {{ $game['name'] }}
                                </a>
                                <div class="text-gray-400 mt-1">
                                    @foreach($game['platforms'] as $platform)
                                        {{ $platform['abbreviation'] }},
                                    @endforeach
                                </div>
                                <p class="mt-6 text-gray-400 lg:block">
                                    {{ $game['summary']}}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="flex flex-col lg:w-1/4 mr-32">

                <div class="most-anticipated mt-12 lg:mt-0">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Most Anticipated
                    </h2>
                    <!-- <livewire:most-anticipated> -->
                    <div class="most-anticipated-container space-y-10 mt-8">
                        @foreach($mostAnticipated as $game)
                            <div class="game flex">
                                @isset($game['cover'])
                                    <a href="#">
                                        <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                                    </a>
                                @endisset
                                <div class="ml-4">
                                    <a href="#" class="hover:text-gray-300">
                                        {{ $game['name'] }}
                                    </a>
                                    <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="coming-soon py-12">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Coming Soon
                    </h2>
                    <!-- <livewire:coming-soon> -->
                    <div class="coming-soon-container space-y-10 mt-8">
                        @foreach($comingSoon as $game)
                            <div class="game flex">
                                <a href="#">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt="game cover" class="w-16 hover:opacity-75 transition ease-in-out duration-150">
                                </a>
                                <div class="ml-4">
                                    <a href="#" class="hover:text-gray-300">
                                        {{ $game['name'] }}
                                    </a>
                                    <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            <!-- End of Most Anticipated and Coming Soon Section -->
            </div>

        </div>

    </div>
    <!-- End Container -->
@endsection