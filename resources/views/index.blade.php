@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">Popular Games</h2>
        <!-- <livewire:popular-games> -->
        <div class="popular-games text-sm grid grid-cols-6 gap-12 border-b border-gray-800 pb-16">
            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('ff7.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy 7 Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('animalcrossing.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">
                    Nintendo Switch
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('doom.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4, PC
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('alyx.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">
                    PC
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('luigi.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">
                    Nintendo Switch
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('resident.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">
                    PC, Playstation 4, XBox One X
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('resident.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Resident Evil 3
                </a>
                <div class="text-gray-400 mt-1">
                    PC, Playstation 4, XBox One X
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('luigi.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Luigi's Mansion 3
                </a>
                <div class="text-gray-400 mt-1">
                    Nintendo Switch
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('alyx.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Half Life: Alyx
                </a>
                <div class="text-gray-400 mt-1">
                    PC
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('doom.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Doom Eternal
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4, PC
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('animalcrossing.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Animal Crossing: New Horizons
                </a>
                <div class="text-gray-400 mt-1">
                    Nintendo Switch
                </div>
            </div>

            <div class="game mt-8">
                <div class="relative inline-block">
                    <a href="#">
                        <img src="{{ asset('ff7.jpg') }}" alt="game cover" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-gray-800 rounded-full -mr-5 -mb-5">
                        <div class="font-semibold text-xs flex justify-center items-center h-full">
                            80%
                        </div>
                    </div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                    Final Fantasy VII Remake
                </a>
                <div class="text-gray-400 mt-1">
                    Playstation 4
                </div>
            </div>
        </div>
        <!-- End Popular Games section -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                <!-- <livewire:recently-reviewed> -->
            </div>

            <div class="flex flex-col lg:w-1/4 mr-32">

                <div class="most-anticipated mt-12 lg:mt-0">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Most Anticipated
                    </h2>
                    <!-- <livewire:most-anticipated> -->
                </div>

                <div class="coming-soon py-12">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Coming Soon
                    </h2>
                    <!-- <livewire:coming-soon> -->
                </div>
            <!-- End of Most Anticipated and Coming Soon Section -->
            </div>

        </div>

    </div>
    <!-- End Container -->
@endsection