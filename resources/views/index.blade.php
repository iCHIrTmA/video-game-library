@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
            Popular Games
        </h2>
        <livewire:popular-games>
        <!-- End Popular Games section -->

        <div class="flex flex-col lg:flex-row my-10">
            <div class="recently-reviewed w-full lg:w-3/4 mr-0 lg:mr-32">
                <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                    Recently Reviewed
                </h2>
                <livewire:recently-reviewed>
            </div>

            <div class="flex flex-col lg:w-1/4 mr-32">

                <div class="most-anticipated mt-12 lg:mt-0">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Most Anticipated
                    </h2>
                    <livewire:most-anticipated>
                </div>

                <div class="coming-soon py-12">
                    <h2 class="text-blue-500 uppercase tracking-wide font-semibold">
                        Coming Soon
                    </h2>
                    <livewire:coming-soon>
                </div>
            <!-- End of Most Anticipated and Coming Soon Section -->
            </div>

        </div>

    </div>
    <!-- End Container -->
@endsection