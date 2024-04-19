<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <x-form-input name="title" id="title" placeholder="Programmer" required/>
                        <x-form-error name="title"/>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Salary Per Year</x-form-label>
                        <x-form-input name="salary" id="salary" placeholder="$10,000" required/>
                        <x-form-error name="salary"/>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
