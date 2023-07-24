<div>
    <h1 class="font-semibold text-3xl mt-16 mb-20 ml-16">
        what kind of pet do you want ?
    </h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
        @forelse ($category as $item)
            @livewire('pages.category.category-card', ['category' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Category Found</h1>
            </div>
        @endforelse
    </div>
</div>
