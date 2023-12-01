<div x-data="{ show: false, message: '' }"
     x-show="show"
     x-transition:enter="transition ease-out duration-300"
     x-transition:enter-start="opacity-0 transform scale-90"
     x-transition:enter-end="opacity-100 transform scale-100"
     x-transition:leave="transition ease-in duration-300"
     x-transition:leave-start="opacity-100 transform scale-100"
     x-transition:leave-end="opacity-0 transform scale-90"
     x-on:flash.window="message = $event.detail.message; show = true; setTimeout(() => show = false, 3000);"
     class="fixed bottom-4 right-4 bg-green-500 text-white py-2 px-4 rounded-lg shadow-lg z-50">
    <p x-text="message"></p>
</div>
