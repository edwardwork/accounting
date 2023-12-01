@extends('layout')

@section('content')
    <div class="hidden lg:block">
        <div class="mt-8 flex justify-between">
            <div class="relative h-full">
                <img src="{{ asset('images/visit-card.jpg') }}" alt="">
                <p class="absolute top-1/2 -translate-y-1/2 left-1/2 text-sm -translate-x-3/4">
                    <span class="mb-2">Info@acculedgers.ca</span> <br>
                    <span class="mb-2">www.aculledgers.ca</span> <br>
                    <span class="mb-2">+14167233993</span> <br>
                </p>
            </div>

            <div class="w-full">
                <div class="mx-auto p-5 rounded-lg w-1/3">
                    <div class="bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Call us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            Accounting: <br> <a href="tel:4167233993" class="text-maroon-300 hover:text-maroon-500">(416)723-3993</a>
                        </div>
                        <div class="font-semibold pt-2">
                            Client relations: <br> <a href="tel:6477210199" class="text-maroon-300 hover:text-maroon-500">(647)721-0199</a>
                        </div>
                    </div>

                    <div class="mt-8 bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Write to us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            info@acculedgers.ca
                        </div>
                    </div>

                    <div class="mt-8 bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Connect with us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            Facebook
                        </div>
                        <div class="font-semibold pt-2">
                            Linkedin
                        </div>
                        <div class="font-semibold pt-2">
                            Google
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="relative w-full">
            <img src="{{ asset('images/network-concept-1.jpg') }}" alt="Building" class="w-full object-cover">
            <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 bg-maroon-600 p-2 text-center bg-white rounded-tl-full rounded-br-full">
                <button class="px-8 py-2">Sign in to your accounting</button>
            </div>
        </div>

        <div class="flex justify-start   mt-8">
            <div class="bg-white p-8 rounded-lg max-w-screen-lg">
                <div class="text-4xl text-white ">
                    <p class="text-gray-700 text-xl mb-2 ">Head office</p>
                    <p class="text-gray-700 text-xl mb-2 ">26 Isaac Murray</p>
                    <p class="text-gray-700 text-xl mb-2 ">Ave Maple ON</p>
                    <p class="text-gray-700 text-xl mb-2 ">C6A 2R8</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block lg:hidden">
        <div>
            <div class="relative h-full">
                <img src="{{ asset('images/visit-card.jpg') }}" alt="">
                <p class="absolute top-1/2 -translate-y-1/2 left-1/2 text-sm -translate-x-3/4">
                    <span class="mb-2">Info@acculedgers.ca</span> <br>
                    <span class="mb-2">www.aculledgers.ca</span> <br>
                    <span class="mb-2">+14167233993</span> <br>
                </p>
            </div>

            <div class="w-full">
                <div class="mx-auto p-5 rounded-lg text-center">
                    <div class="bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Call us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            Accounting: <br> <a href="tel:4167233993" class="text-maroon-300 hover:text-maroon-500">(416)723-3993</a>
                        </div>
                        <div class="font-semibold pt-2">
                            Client relations: <br> <a href="tel:6477210199" class="text-maroon-300 hover:text-maroon-500">(647)721-0199</a>
                        </div>
                    </div>

                    <div class="mt-8 bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Write to us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            info@acculedgers.ca
                        </div>
                    </div>

                    <div class="mt-8 bg-maroon-600 p-2 text-center bg-[#5B2626] rounded-tl-full rounded-br-full">
                        <button class="font-bold text-white">Connect with us</button>
                    </div>
                    <div class="pt-4">
                        <div class="font-semibold">
                            Facebook
                        </div>
                        <div class="font-semibold pt-2">
                            Linkedin
                        </div>
                        <div class="font-semibold pt-2">
                            Google
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="relative w-full">
            <img src="{{ asset('images/network-concept-1.jpg') }}" alt="Building" class="w-full object-cover h-32">
            <div class="absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 bg-maroon-600 p-2 text-center bg-white rounded-tl-full rounded-br-full">
                <button class="px-8 py-2">Sign in to your accounting</button>
            </div>
        </div>

        <div class="flex justify-start   mt-8">
            <div class="bg-white p-8 rounded-lg max-w-screen-lg">
                <div class="text-4xl text-white ">
                    <p class="text-gray-700 text-xl mb-2 ">Head office</p>
                    <p class="text-gray-700 text-xl mb-2 ">26 Isaac Murray</p>
                    <p class="text-gray-700 text-xl mb-2 ">Ave Maple ON</p>
                    <p class="text-gray-700 text-xl mb-2 ">C6A 2R8</p>
                </div>
            </div>
        </div>
    </div>

@endsection
