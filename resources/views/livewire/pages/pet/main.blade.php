<div>
    <div class="flex justify-between m-10">
        <div>
            <h1 class="text-3xl font-bold">Find youe Pet</h1>
            <p class="text-gray-500">There are all kinds of pets that you want here.</p>
        </div>
        <div class="flex gap-x-5">
            <div>
                <input type="search" id="search" wire:model="search"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Search" required>
            </div>

            <div>
                <button type="button" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">+</button>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-20 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 mx-16 mt-20 ">
        @forelse ($pet as $item)
            @livewire('pages.pet.pet-card', ['pet' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Pets Found</h1>
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
                    <h3 class="mb-4 text-xl font-medium text-gray-900">Add Pet</h3>
                    <form class="space-y-6" action="#" wire:submit.prevent="addPet">
                        @csrf
                        <div class="flex justify-between gap-x-8">
                            <div class="w-full">
                                <label for="name" class="block  text-sm font-medium text-gray-900">Name</label>
                                <input type="text" id="name" wire:model='name'
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="fluffy" required>
                            </div>
                            <div class="w-full">
                                <label for="age"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">Your
                                    age</label>
                                <input type="number" name="age" id="age" placeholder="1" wire:model="age"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                    required>
                            </div>
                        </div>


                        <div class="flex justify-between gap-x-8">
                            <div class="w-full">
                                <label for="price" class="block  text-sm font-medium text-gray-900">Price</label>
                                <input type="number" name="price" id="price" wire:model="price"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="50$" required>
                            </div>
                            <div class="w-full">
                                <label for="gender"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">Select a
                                    gender</label>
                                <select id="gender" wire:model="gender"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option selected>Choose a Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>
                        </div>


                        <div class="flex justify-between gap-x-8">
                            <div class="w-full">
                                <label for="breed" class="block  text-sm font-medium text-gray-900">Breed</label>
                                <input type="text" name="breed" id="breed" wire:model="breed"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                    placeholder="wolf" required>
                            </div>
                            <div class="w-full">

                                <label for="category"
                                    class="block  text-sm font-medium text-gray-900 dark:text-white">Select a
                                    category</label>
                                <select id="category" wire:model="category_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                    <option selected>Choose a category</option>
                                    @forelse ($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @empty
                                        <option>there is no categories</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="w-full">
                            <label for="color" class="block  text-sm font-medium text-gray-900">Color</label>
                            <input type="text" name="color" id="color" wire:model="color"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="black" required>
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
