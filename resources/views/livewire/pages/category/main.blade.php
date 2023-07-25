<div>
    <div class="flex justify-between m-16">
        <div>
            <h1 class="font-semibold text-3xl mb-20">
                what kind of pet do you want ?
            </h1>
        </div>
        <div>
            <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">+</button>
        </div>

    </div>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
        @forelse ($category as $item)
            @livewire('pages.category.category-card', ['category' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Category Found</h1>
            </div>
        @endforelse
    </div>





    {{-- MODAL --}}
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                    data-modal-hide="authentication-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Add Category</h3>
                    <form class="space-y-6" action="#" wire:submit.prevent="add">
                        @csrf
                        <div class="w-full">
                            <label for="name" class="block  text-sm font-medium text-gray-900">Name</label>
                            <input type="text" id="name" wire:model='name'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="Dogs" required>
                        </div>
                        <div>
                            <label for="message" class="block  text-sm font-medium text-gray-900 ">
                                Description</label>
                            <textarea id="message" rows="2" wire:model="description"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                                placeholder="Write your description here..."></textarea>
                        </div>
                        <div>
                            <label class="block  text-sm font-medium text-gray-900 " for="file_input">Upload
                                image</label>
                            <input wire:model="image"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                                id="file_input" type="file">
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            Add Pet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
