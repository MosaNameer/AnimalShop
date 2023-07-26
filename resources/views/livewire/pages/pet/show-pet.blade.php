<div>
    <div class="grid grid-cols-2 m-20">
        <div>
            <h1 class="text-3xl font-semibold">Name:
                <span>{{ $pet->name }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Type:
                <span>{{ $pet->category_id }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Age:
                <span>{{ $pet->age }}</span>
            </h1>
            <h1 class="text-3xl font-semibold">Price:
            <span>{{ $pet->price }}$</span>
            </h1>
            <h1 class="text-3xl font-semibold">Gender:
                <span>{{ $pet->gender }}</span>
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
        <div class="w-full">
            <img src="{{ asset('img/cat1.jpg') }}" alt="">
        </div>
    </div>
</div>
