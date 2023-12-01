@extends('layout')

@section('content')
    <img src="{{ $ourServices?->getMainUrl() }}" alt="Accounting Services" class="w-full">

    <div class="hidden lg:block flex justify-center items-center mt-8">
        <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-xl mx-auto">
            <img src="{{ $ourServices?->getBackgroundUrl() }}" alt="Frame" class="rounded-t-lg">
            <div class="absolute top-1/2 -translate-y-1/2 left-1/2 right-1/2 text-4xl text-white -translate-x-1/2 w-1/2 bg-white px-8 py-16">
                <p class="text-gray-700 text-sm mb-2">
                    @foreach(explode(PHP_EOL, $ourServices->content['content']) as $item)
                        <br>
                        <br>
                        {{ $item }}
                    @endforeach
                </p>
            </div>
        </div>
    </div>

    <div class="block lg:hidden flex justify-center items-center">
        <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-xl mx-auto">
            <p class="text-gray-700 text-md mb-2">
                @foreach(explode(PHP_EOL, $ourServices->content['content']) as $item)
                    @if(!$loop->first)
                        <br>
                        <br>
                    @endif
                    {{ $item }}
                @endforeach
            </p>
        </div>
    </div>
@endsection
