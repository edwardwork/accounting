@extends('layout')

@section('content')
    <div class="hidden lg:block">
        <div class="flex bg-[#3E1515] w-full">
            <div class="text-white shadow-lg w-1/3">
                <p class="mt-16 ml-16">Financial Advisor Network Opportunities</p>
                <p class="mt-16 ml-16">Corporate Opportunities</p>
                <p class="mt-16 ml-16">Acculedgers  corp achievements</p>
                <p class="mt-16 ml-16">Top reasons to work for Acculedgers</p>
                <p class="mt-16 ml-16">Unlock your potential</p>
                <p class="mt-16 ml-16 mb-16">Automate tax entries  and stay prepared for the tax season</p>
            </div>
            <div class="text-white w-2/3">
                <p class="mt-16 ml-16">Simplify bank account reconciliation</p>
                <p class="mt-16 ml-16">Advertise with us</p>
                <p class="mt-16 ml-16">Cloud based technololgy</p>
                <img class="mt-16 ml-auto" src="{{ asset('images/Frame-45.jpg') }}" alt="">
            </div>
        </div>

        <div class="bg-[#5F3838] w-full h-4">

        </div>
    </div>

    <div class="block lg:hidden">
        <div class="flex justify-between bg-[#3E1515] w-full px-4">
            <div class="text-white shadow-lg text-center">
                <p class="mt-16">Financial Advisor Network Opportunities</p>
                <p class="mt-16">Corporate Opportunities</p>
                <p class="mt-16">Acculedgers  corp achievements</p>
                <p class="mt-16">Top reasons to work for Acculedgers</p>
                <p class="mt-16">Unlock your potential</p>
                <p class="mt-16 mb-16">Automate tax entries  and stay prepared for the tax season</p>
            </div>
            <div class="text-white text-center">
                <p class="mt-16">Simplify bank account reconciliation</p>
                <p class="mt-16">Advertise with us</p>
                <p class="mt-16">Cloud based technololgy</p>
            </div>
        </div>
        <img class="ml-auto" src="{{ asset('images/Frame-45.jpg') }}" alt="">
        <div class="bg-[#5F3838] w-full h-4">

        </div>
    </div>

@endsection
