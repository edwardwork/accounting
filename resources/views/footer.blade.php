<div class="xs:h-16 sm:h-32" style="background: linear-gradient(white, #714545);">
</div>
<div class="bg-[#714545] p-6 w-full">
    <div class="md:w-3/4 mx-auto">
        <div class="flex flex-col md:flex-row space-x-0 md:space-x-4 space-y-2 md:space-y-0 justify-between xs:text-md sm:text-2xl text-white text-center break-words">
            <a href="{{ route('resources') }}" class="hover:underline">For clients</a>
            <a href="{{ route('for-professionals') }}" class="hover:underline">For professionals</a>
            <a href="{{ route('contact-us') }}" class="hover:underline">Our contacts</a>
            <a href="{{ route('dashboard') }}" class="hover:underline">Upload documents</a>
        </div>
    </div>
</div>
<p class="bg-[#714545] xs:text-xs sm:text-sm text-white text-center pb-2">
    Copyright {{ now()->format('Y') }} Acculedgers - All rights Reserved
</p>
