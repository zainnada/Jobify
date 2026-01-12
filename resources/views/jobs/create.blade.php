<x-layout title="Create Job">
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">

            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Create a New Job</h2>
                <p class="mt-1 text-sm/6 text-gray-600">We just need a handful of details from you.</p>

                <x-form-field>
                    <x-form-label for="title">Title</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="title" name="title" type="text" placeholder="CEO" required/>
                        <x-form-error name="title"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salary</x-form-label>
                    <div class="mt-2">
                        <x-form-input id="salary" name="salary" type="text" placeholder="$50,000 USD" required/>
                        <x-form-error name="salary"/>
                    </div>
                </x-form-field>

            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>


</x-layout>
