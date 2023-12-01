@extends('layout')

@section('header')
    @include('layouts.navigation')
@endsection

@section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="lg:py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if(Auth::user()?->getMedia('documents')->count())
                    <dd class="p-6 mt-2 text-sm text-white sm:col-span-2 sm:mt-0">
                        <ul role="list" class="divide-y divide-white/10 rounded-md border border-white/20">
                            @foreach(Auth::user()?->getMedia('documents') ?? [] as $document)
                                <li class="hidden lg:block flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                            <span class="truncate font-medium">{{ $document?->file_name }}</span>
                                            <span
                                                class="flex-shrink-0 text-gray-400">{{ formatFileSize($document->size) }}</span>
                                            <span
                                                class="flex-shrink-0 text-gray-400">Uploaded at {{ $document->created_at }}</span>
                                        </div>
                                    </div>

                                    <a target="_blank" href="#" download="{{ $document->getUrl() }}"
                                       class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                        {{ __('Download') }}
                                    </a>

                                    <form action="{{ route('profile.delete-document', ['uuid' => $document->uuid]) }}"
                                          method="POST">
                                        @csrf
                                        <x-danger-button class="ml-3">
                                            {{ __('Remove') }}
                                        </x-danger-button>
                                    </form>
                                </li>


                                <li class="block lg:hidden py-4 pl-4 pr-5 text-sm leading-6">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20"
                                             fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                            <span class="truncate font-medium">{{ $document?->file_name }}</span>
                                            <span
                                                class="flex-shrink-0 text-gray-400">{{ formatFileSize($document->size) }}</span>
                                            <span
                                                class="flex-shrink-0 text-gray-400">Uploaded at {{ $document->created_at }}</span>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <a target="_blank" href="#" download="{{ $document->getUrl() }}"
                                           class="cursor-pointer inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                            {{ __('Download') }}
                                        </a>

                                        <form action="{{ route('profile.delete-document', ['uuid' => $document->uuid]) }}"
                                              method="POST">
                                            @csrf
                                            <x-danger-button class="ml-3">
                                                {{ __('Remove') }}
                                            </x-danger-button>
                                        </form>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </dd>
                @else
                    <dd class="text-center p-6 mt-2 text-lg text-white sm:col-span-2 sm:mt-0">
                        Currently you did not upload any files!
                    </dd>
                @endif
                <form method="post" enctype='multipart/form-data' action="{{ route('profile.upload-document') }}"
                      class="p-6 border-2 lg:w-1/3 rounded mx-auto mb-6 text-center">
                    @csrf

                    <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                        {{ __('PLease upload pdf or image file') }}
                    </h2>


                    <div class="mt-6">
                        <div class="relative">
                            <input type="file" name="file" id="fileInput" class="absolute w-32 opacity-0" onchange="updateLabel()">
                            <label for="fileInput" id="fileLabel" class="cursor-pointer py-2 px-4 bg-[#786F51] text-white rounded transition duration-300 ease-in-out">
                                Choose file
                            </label>
                        </div>
                        <x-input-error :messages="$errors->fileUploading->get('file')" class="mt-2"/>
                    </div>

                    <div class="mt-6 flex justify-center">
                        <x-primary-button>
                            {{ __('Upload file') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function updateLabel() {
            var fileInput = document.getElementById('fileInput');
            var fileLabel = document.getElementById('fileLabel');
            var fileName = fileInput.files[0].name;
            fileLabel.textContent = fileName;
        }
    </script>
@endsection
