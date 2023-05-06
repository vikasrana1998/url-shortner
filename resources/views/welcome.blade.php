<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:pm-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-whote border-b border-gray-200">
                    <form method="POST" action="{{ route('short.url')}}">
                        @csrf
                        <input type="url" name="original_url"/>
                        <button type="submit">Short</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>