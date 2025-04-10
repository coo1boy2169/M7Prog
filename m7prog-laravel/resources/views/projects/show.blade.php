<x-app-layout>
    <div class="container mx-auto p-4 bg-gray-900">
        <h2 class="text-3xl font-bold text-white border-b-4 border-yellow-400 pb-3 uppercase">
            {{$project->title}}
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="md:col-span-2 text-gray-300 leading-relaxed">
                <p class="text-lg">
                    {{ $project->description }}
                </p>
            </div>
            
            <div class="max-w-sm p-4 bg-gray-800 border border-gray-700 rounded-lg shadow-lg transition-transform transform hover:scale-105">
                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}"
                     class="w-full h-48 object-cover rounded-lg">
                
                <h3 class="text-lg font-bold text-white text-center mt-3 uppercase">
                    {{ $project->title }}
                </h3>
                
                <p class="text-xs text-gray-400 text-center mt-3">
                    <strong>Status:</strong> 
                    <span class="{{ $project->active ? 'text-green-400' : 'text-red-400' }}">
                        {{ $project->active ? 'Actief' : 'Inactief' }}
                    </span>
                </p>
                
                <p class="text-sm text-yellow-400 text-center mt-3 font-semibold">
                    ⭐ {{ $project->stars }} / 5
                </p>
                
                <p class="text-xs text-gray-500 text-center mt-3">
                    <strong>Aangemaakt op:</strong> {{ $project->created_at->format('d-m-Y H:i') }}
                </p>
                
                <p class="text-xs text-gray-500 text-center">
                    <strong>Bijgewerkt op:</strong> {{ $project->updated_at->format('d-m-Y H:i') }}
                </p>
            </div>
        </div>
    </div>
    
    @section('scripts')
        <script>
            console.log('Hello from the NU.nl-stijl pagina!');
        </script>
    @endsection
</x-app-layout>