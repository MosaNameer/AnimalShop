<div>
    <div class="grid grid-cols-1 gap-20 md:grid-cols-2 xl:grid-cols-4 mx-16 mt-20">
        @for ($i = 0; $i < 10; $i++)
            @livewire('pages.pet.pet-card')
        @endfor
    </div>
</div>
