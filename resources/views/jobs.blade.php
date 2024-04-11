<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-300 bg-gray-200 rounded-lg ">
                <div class="font-bold text-blue-500 text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong> : Pays {{ $job['salary'] }} per year!
                </div>
            </a>
        @endforeach
    </div>

    <div class="py-6">
        {{ $jobs->links() }}
    </div>
</x-layout>

