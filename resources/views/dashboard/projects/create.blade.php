<x-app-layout>
    <x-slot name="header">
        <h1> dut is de formulier pagina</h1>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-red-900 dark:text-gray-100">
                    {{ __("Project Overzicht") }}
                </div>
            </div>
            <div class="bg-red dark:bg-white p-6 text-red-900 dark:text-black">
                @foreach($projects as $project)
                <a href="{{route('project.show', $project)}}">{{ $project->title }}</a><br>
                @endforeach
                <a href="{{route('admin.create')}}" class="bg-green hover:bg-green text-white font-bold py-2 px-4 rounded float-right">
                    {{ __('New project') }}
                </a>

            </div>
        </div>
    </div>
</x-app-layout>