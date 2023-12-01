@extends('layout')

@section('content')
    <div class="relative w-full h-96">
        <img src="{{ $homePage->getServiceBlockImageUrl() }}" alt="Building" class="w-full h-full object-cover">
        <div class="absolute bottom-1 left-1/2 text-4xl text-white -translate-x-1/2 text-center">{{ $homePage->service_block_title }}</div>
    </div>

    <div class="bg-[#E5E5E5] w-full">
        <div class="flex flex-wrap justify-between w-4/5 mx-auto py-6">
            <div class="bg-white mx-auto p-8 my-2 min-w-[200px] max-w-[300px] flex-grow">
                <h3 class="text-center p-2 text-lg bg-[#F2F7F8]">{{ $homePage->service_first_block['title'] }}</h3>
                <ul class="px-2">
                    @foreach(explode(PHP_EOL, $homePage['service_first_block']['content']) as $line)
                        <li class="mt-4">{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white mx-auto p-8 my-2 min-w-[200px] max-w-[300px] flex-grow">
                <h3 class="text-center p-2 text-lg bg-[#F2F7F8]">{{ $homePage->service_second_block['title'] }}</h3>
                <ul class="px-2">
                    @foreach(explode(PHP_EOL, $homePage['service_second_block']['content']) as $line)
                        <li class="mt-4">{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="bg-white mx-auto p-8 my-2 min-w-[200px] max-w-[300px] flex-grow">
                <h3 class="text-center p-2 text-lg bg-[#F2F7F8]">{{ $homePage->service_third_block['title'] }}</h3>
                <ul class="px-2">
                    @foreach(explode(PHP_EOL, $homePage['service_third_block']['content']) as $line)
                        <li class="mt-4">{{ $line }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="relative w-full">
        <img src="{{ $homePage->getCloudBasedBlockImageUrl() }}" alt="Building" class="w-full min-h-[80px] object-cover">
        <div class="absolute xs:font-bold md:font-normal bottom-1 left-1/2 xs:text-sm sm:text-4xl text-white -translate-x-1/2 text-center">{{ $homePage->cloud_based_block_title }}</div>
    </div>

    <div class="flex flex-wrap">
        <div class="w-full flex justify-around my-4">
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['first_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['second_block'] }}</p>
            </div>
        </div>

        <div class="w-full flex justify-around my-4">
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['third_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['fourth_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['fifth_block'] }}</p>
            </div>
        </div>

        <div class="w-full flex justify-around my-4">
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['sixth_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['seventh_block'] }}</p>
            </div>
        </div>

        <div class="w-full flex justify-around my-4">
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['eighth_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['ninth_block'] }}</p>
            </div>
            <div class="md:w-1/2 p-2 max-w-sm text-center">
                <p>{{ $homePage->cloud_based_blocks['tenth_block'] }}</p>
            </div>
        </div>
    </div>
@endsection
