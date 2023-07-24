<div>
    <h1 class="font-semibold text-3xl mt-16 mb-20 ml-16">
        what kind of pet do you want ?
    </h1>

    <div class="grid grid-cols-1 gap-4 md:grid-cols-2 xl:grid-cols-3">
        @for ($i = 0; $i < 10; $i++)
        @livewire('pages.category.category-card')
        @endfor
    </div>
</div>
