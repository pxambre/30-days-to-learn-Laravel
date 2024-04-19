<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="flex justify-end space-x-3">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
        <button form="delete-form" class="py-2 px-5 bg-red-800 text-white font-semibold rounded shadow-md hover:bg-red-700 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-75">Delete</button>
    </div>

    <div>
            <h2 class="font-bold text-lg">{{ $job->title }}</h2>

            <p>
                This job pays {{ $job['salary'] }} per year!
            </p>
    </div>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
