<div>
    <div class="grid grid-cols-2 m-20">
        <div>
            <h1 class="text-3xl font-semibold">Name:
                <span>{{ $pet->name }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Age:
                <span>{{ $pet->age }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Price:
                <span>{{ $pet->price }}$</span>
            </h1>
            <h1 class="text-3xl font-semibold">Gender:
                <span>
                    @if ($pet->gender == 1)
                        male
                    @else
                        femail
                    @endif
                </span>
            </h1>
            <h1 class="text-3xl font-semibold">Breed:
                <span>{{ $pet->breed }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Color:
                <span>{{ $pet->color }}</span>
            </h1>

            {{-- description --}}
            <h1 class="text-3xl font-semibold">Pet Description:</h1>
            <p class="text-xl">
                {{ $pet->description }}
            </p>
        </div>
        <div>
            <div class="w-full">
                <img src="{{ asset($pet->image) }}" alt="">
            </div>
            @admin()
                <div class="flex justify-end mt-4 ">
                    <button type="button" wire:click="deletePet({{ $pet->id }})"
                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Delete</button>
                    <button type="button"
                        class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">Edit</button>
                </div>
            @endadmin
        </div>

    </div>
</div>
