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
                <button type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300  font-medium rounded-lg text-sm px-6 py-2.5 text-center mr-2 mb-2">Pets</button>
            </div>
        </div>
        <div class="w-full">
            <img class="" src="{{ asset('img/homePageCat.png') }}" alt="">
        </div>
    </div>

    {{-- category cards --}}

    <h1 class="ml-16 font-bold text-3xl">Categories</h1>
    <div class="flex w-full justify-center gap-x-10 my-5">
            @livewire('pages.home.pets-card')
    </div>
</div>
