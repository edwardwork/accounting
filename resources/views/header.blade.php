<div class="header pt-8 bg-[#3E1515]">
    <div style="background: linear-gradient(white, #340F02)"
         class="bg-[#340F02] mx-auto sm:w-1/2 lg:w-1/3 bg-brown-900 text-white py-10 flex flex-col items-center justify-center text-center rounded">
        <div class="w-24 h-24 mb-4">
            <img src="{{ $homePage?->getLogoUrl() }}" alt="Logo">
        </div>
        <h1 class="text-[#EBD2A1] text-xl font-bold mb-2 uppercase">{{ $homePage?->company_title }}</h1>
        <p class="text-[#D5B67B] text-xs text-sm uppercase">{{ $homePage?->company_subtitle }}</p>
    </div>
    <div class="lg:mt-8 flex justify-center nav-links md:w-4/5 mx-auto pb-4 flex-wrap gap-4 p-4">
        <a href="{{ route('home') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Home</a>
        <a href="{{ route('our-services') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Our services</a>
        <a href="{{ route('resources') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Resources</a>
        <a href="{{ route('about-us') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">About us</a>
        <a href="{{ route('contact-us') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Contact us</a>
        @guest()
            <a href="{{ route('login') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Log in / Register</a>
        @else
            <a href="{{ route('dashboard') }}" class="bg-[#786F51] text-white px-4 py-2 rounded-lg transition-bg duration-300 hover:bg-[#6F3D3D] text-center">Personal cabinet</a>
        @endguest()
    </div>
</div>
