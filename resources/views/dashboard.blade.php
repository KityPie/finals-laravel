<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Total Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-200 text-blue-800">

                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Total Posts</h5>
                                <p class="text-2xl">{{ $totalPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Published Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-green-200 text-green-800">
                                
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Published Posts</h5>
                                <p class="text-2xl">{{ $publishedPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Unpublished Posts Card -->
                <div class="bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 overflow-hidden shadow-lg sm:rounded-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-red-200 text-red-800">
                                
                            </div>
                            <div class="ml-4">
                                <h5 class="text-lg font-semibold">Unpublished Posts</h5>
                                <p class="text-2xl">{{ $unpublishedPosts }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>