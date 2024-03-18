<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Create Batch
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('batches.store') }}">
    @csrf

    <div class="grid grid-cols-6 gap-6">
        <div class="col-span-6 sm:col-span-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input id="name" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300" type="text" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="col-span-6 md:col-span-2">
            <label for="starting" class="block text-sm font-medium text-gray-700">Starting</label>
            <input id="starting" class="block mt-1 w-full rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 border-gray-300" type="date" name="starting" value="{{ old('starting') }}" required>
        </div>

        <div class="col-span-6 flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-indigo-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-indigo-700 active:bg-indigo-800 focus:outline-none focus:border-indigo-900 focus:ring focus:ring-indigo-300 disabled:opacity-25 transition">
                Create Batch
            </button>
        </div>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
