<x-app-layout>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($projects as $project)
            <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}"
                    class="w-full h-40 object-cover rounded-lg">

                <h3 class="text-base font-bold tracking-tight text-gray-900 dark:text-white text-center">
                    {{ $project->title }}
                </h3>



                <p class="text-sm text-gray-600 dark:text-gray-400 text-center">
                    <strong>Status:</strong> {{ $project->active ? 'Actief' : 'Inactief' }}
                </p>

                <p class="text-sm text-yellow-500 text-center">
                    ⭐ {{ $project->stars }} / 5
                </p>

                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                    <strong>Aangemaakt op:</strong> {{ $project->created_at->format('d-m-Y H:i') }}
                </p>

                <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                    <strong>Bijgewerkt op:</strong> {{ $project->updated_at->format('d-m-Y H:i') }}
                </p>

                <button type="button" class="py-2.5 px-5 me-2 m-3 mb-2 text-sm font-medium text-white-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"><a class=" text-xs text-gray- dark:text-gray-400 text-center" href="{{route('project.show', $project)}}"> <strong>Bekijk dit item </strong></a></button>

            </div>
            @endforeach
        </div>
    </div>
    @section('scripts')
    <script>
        console.log('Hello from the index page!');
    </script>
    @endsection
</x-app-layout>