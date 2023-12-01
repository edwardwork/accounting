@extends('layout')

@section('content')
    <img src="{{ asset('images/Frame-18.jpg') }}" alt="" class="w-screen lg:h-1/2">

    <div class="hidden md:block">
        <div class="flex justify-center items-center">
            <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-lg">
                <img src="{{ asset('images/a-white-board-1.jpg') }}" alt="Frame" class="rounded-t-lg">
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 text-4xl text-white -translate-x-1/2">
                    <p class="text-gray-700 text-lg font-semibold mb-4 text-center">Our philosophy</p>
                    <p class="text-gray-700 text-base mb-2">• We maintain financial integrity, assisting in making informed
                        decisions, ensuring that our clients and their businesses meet their financial obligations and
                        goals.</p>
                    <p class="text-gray-700 text-base mb-2">• Our company specializes in multiple areas of accounting to
                        meet our clients unique needs.</p>
                    <p class="text-gray-700 text-base mb-2">• Our specialists take care of ledgers so you can attend to your
                        business.</p>
                    <p class="text-gray-700 text-base mb-2">• Complete and accurate documentation and accounting of income
                        and expenditure is crucial.</p>
                    <p class="text-gray-700 text-base">• Utilizing technology to optimize accounting processes to save you
                        time and money.</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mt-8">
            <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-lg mx-auto">
                <img src="{{ asset('images/a-note-1.jpg') }}" alt="Frame" class="rounded-t-lg">
                <div
                    class="absolute top-1/2 -translate-y-1/2 left-1/2 right-1/2 text-4xl text-white -translate-x-1/2 w-1/3">
                    <p class="text-gray-700 text-4xl font-semibold mb-8 text-center ">Our mission</p>
                    <p class="text-gray-700 text-xl mb-2 ">• We empower our clients by providing accurate ledgers enabling
                        informed and timely decision-making about their businesses helping them to achieve more.</p>
                    <p class="text-gray-700 text-xl mb-2 ">• Our team is committed to enhancing our clients’ financial
                        awareness.</p>
                </div>
            </div>
            <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-lg mx-auto">
                <img src="{{ asset('images/a-wall-1.jpg') }}" alt="Frame" class="rounded-t-lg">
                <div
                    class="absolute top-1/2 -translate-y-1/2 left-1/2 right-1/2 text-4xl text-white -translate-x-1/2 w-1/2">
                    <p class="text-gray-700 text-4xl font-semibold mb-4 text-center ">Our vision</p>
                    <p class="text-gray-700 text-xl mb-2 ">• Become the go-to accounting firm for small businesses across
                        the greater Toronto area for modern accounting solutions.</p>
                    <p class="text-gray-700 text-xl mb-2 ">• To simplify and automate bookkeeping and accounting process by
                        applying Cutting Edge technologies.</p>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center mt-8">
            <div class="relative bg-white p-8 shadow-lg rounded-lg max-w-screen-lg">
                <img src="{{ asset('images/a-wall-2.jpg') }}" alt="Frame" class="rounded-t-lg">
                <div class="absolute top-1/2 -translate-y-1/2 left-1/2 text-4xl text-white -translate-x-2/3 w-1/3">
                    <p class="text-gray-700 text-lg font-semibold text-center">About us</p>
                    <p class="text-gray-700 text-sm mt-2">We are passionate,
                        dedicated team of
                        professionals who meet the diverse needs of our client’s and strive for
                        progress not only perfection and timely
                        ledgers.
                        We are innovative people
                        who work collaboratively
                        to keep propelling your
                        businesses forward.</p>
                </div>
            </div>
        </div>
    </div>

    {{--  Mobile version  --}}
    <div class="block md:hidden flex justify-center items-center">
        <div class="bg-white rounded-lg p-8 mt-4">
            <div class="text-4xl text-black">
                <p class="text-gray-700 text-lg font-semibold mb-4 text-center">Our philosophy</p>
                <p class="text-gray-700 text-base mb-2">• We maintain financial integrity, assisting in making informed
                    decisions, ensuring that our clients and their businesses meet their financial obligations and
                    goals.</p>
                <p class="text-gray-700 text-base mb-2">• Our company specializes in multiple areas of accounting to
                    meet our clients unique needs.</p>
                <p class="text-gray-700 text-base mb-2">• Our specialists take care of ledgers so you can attend to your
                    business.</p>
                <p class="text-gray-700 text-base mb-2">• Complete and accurate documentation and accounting of income
                    and expenditure is crucial.</p>
                <p class="text-gray-700 text-base">• Utilizing technology to optimize accounting processes to save you
                    time and money.</p>

                <p class="text-gray-700 text-lg font-semibold my-4 text-center">Our mission</p>
                <p class="text-gray-700 text-base mb-2">• We empower our clients by providing accurate ledgers enabling
                    informed and timely decision-making about their businesses helping them to achieve more.</p>
                <p class="text-gray-700 text-base mb-2">• Our team is committed to enhancing our clients’ financial
                    awareness.</p>

                <p class="text-gray-700 text-lg font-semibold my-4 text-center">About us</p>
                <p class="text-gray-700 text-base mb-2">• We are passionate,
                    dedicated team of
                    professionals who meet the diverse needs of our client’s and strive for
                    progress not only perfection and timely
                    ledgers.
                    We are innovative people
                    who work collaboratively
                    to keep propelling your
                    businesses forward.</p>
            </div>
        </div>
    </div>
@endsection
