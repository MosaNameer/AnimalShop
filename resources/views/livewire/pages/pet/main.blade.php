<div>
    <div class="grid grid-cols-1 gap-20 md:grid-cols-2 xl:grid-cols-4 mx-16 mt-20">
        @forelse ($pet as $item)
            @livewire('pages.pet.pet-card', ['pet' => $item], key($item->id))
        @empty
            <div class="text-center">
                <h1 class="text-3xl font-bold">No Pets Found</h1>
            </div>
        @endforelse
    </div>
</div>
