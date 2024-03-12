<x-app-layout>
    <x-slot name="header">
        <h2 class="font-sans font-bold text-white text-xl">
            {{ __('Gutenbergs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="my-6 p-6 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                <a href="{{ route('gutenbergs.create') }}" class="w-auto h-10 bg-white tracking-wide text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Create
                                                                                                                                                                                                                                                                          gutenbergs</a>
            </div>

            <div class="gap-6">
                @forelse($gutenbergs as $gutenberg)
                <div class="p-4 mt-4 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                        <div class="justify-between items-center my-4">
                            <strong class="my-4">Titel: </strong>{{ $gutenberg->titel }} <br>
                            <strong class="my-4">Slug: </strong>{{ $gutenberg->slug }} <br>
                            <strong class="my-4">Inhoud: </strong>{{ $gutenberg->inhoud }}
                            <br><br>
                            <div class="w-52 flex">
                                <a href="{{ route('gutenbergs.edit', $gutenberg->slug) }}" class="w-auto h-8 bg-white text-gray-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Edit</a>
                                <a href="{{ route('gutenbergs.show', $gutenberg->slug)  }}" class="w-auto h-8 ml-2 mr-2 bg-white float-right text-gray-800 font-bold rounded border-b-2 border-orange-500 hover:border-orange-600 hover:bg-orange-500 hover:text-white shadow-md py-2 px-6 inline-flex items-center">Show</a>

                                @include('parsels.gutenbergDelete')
                            </div>
                            <div id="confirmationPopup-{{ $gutenberg->slug }}" class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 flex items-center justify-center" style="display: none;"></div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</x-app-layout>

@include('parsels.confirmation')
