<x-app-layout>
<h2>{{$project->title}}</h2>
    <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <div class="max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}"
                         class="w-full h-40 object-cover rounded-lg">
                   
                    <h3 class="text-base font-bold tracking-tight text-gray-900 dark:text-white text-center">
                        {{ $project->title }}
                    </h3>
                   
                    <h5 class="text-lg text-gray-700 dark:text-gray-300 text-center">
                        {{ $project->description }}
                    </h5>
 
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
                </div>
        </div>
    </div>
    @section('scripts')
        <script>
            console.log('Hello from the index page!');
        </script>
    @endsection
</x-app-layout>