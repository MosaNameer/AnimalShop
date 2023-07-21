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
            <a href="" class="mr-16 font-semibold text-xl">more</a>
        </u>

    </div>
    <div class="grid grid-cols-3 mx-16   justify-items-center">
        @for ($i = 0; $i < 3; $i++)
            @livewire('pages.home.category-card')
        @endfor
    </div>


    {{-- pets card --}}
    <div class="flex justify-between mb-10 mt-36">
        <h1 class="ml-16 font-bold text-3xl">Pets</h1>
        <u>
            <a href="" class="mr-16 font-semibold text-xl">more</a>
        </u>

    </div>
    <div class="grid grid-cols-4 mx-16   justify-items-center">
        @for ($i = 0; $i < 4; $i++)
            @livewire('pages.home.pets-card')
        @endfor
    </div>
</div>
