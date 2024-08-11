<div>
    <div class="flex w-full">
        <div class="w-full font-bold ml-16 mt-24">
            <p class="text-left text-5xl">
                find your pet and get a new friend
            </p>
            <p class="text-left text-3xl">
                with a lower prices
            </p>

            <div class="mt-16">
                <a type="button" href="{{ route('pet') }}"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300  font-medium rounded-lg text-sm px-6 py-2.5 text-center mr-2 mb-2">Pets</a>
            </div>
        </div>
        <div class="w-full">
            <img class="" src="{{ asset('img/homePageCat.png') }}" alt="">
        </div>
    </div>

    {{-- category cards --}}
    <div class="flex justify-between mb-10">
        <h1 class="ml-16 font-bold text-3xl">Categories</h1>
        <u>
            <a href="{{ route('category') }}" class="mr-16 font-semibold text-xl">more</a>
        </u>
    </div>

    <div class="grid grid-cols-3 mx-16 justify-items-center">
        @forelse ($categories as $item)
            @livewire('pages.home.category-card', ['category' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Category Found</h1>
            </div>
        @endforelse
    </div>


    {{-- pets card --}}
    <div class="flex justify-between mb-10 mt-36">
        <h1 class="ml-16 font-bold text-3xl">Pets</h1>
        <u>
            <a href="{{ route('pet') }}" class="mr-16 font-semibold text-xl">more</a>
        </u>

    </div>

    <div class="grid grid-cols-1 gap-20 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 mx-16 mt-20 ">
        @forelse ($pets as $item)
            @livewire('pages.home.pets-card', ['pet' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Pets Found</h1>
            </div>
        @endforelse
    </div>
</div>
