{{-- <div>
    <a href="{{ route('showCategory', $category->id) }}">
        <div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
            <div
                class="relative mx-4 mt-4 h-56 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700 shadow-lg bg-cover">
                <img src="{{ asset('img/cat1.jpg') }}" class="bg-cover" alt="profile-picture" />
            </div>
            <div class="p-6 text-center">
                <h4
                    class="mb-2 block font-sans text-2xl font-semibold leading-snug tracking-normal text-blue-gray-900 antialiased">
                    {{ $category->name }}
                </h4>
                <p
                    class="block bg-gradient-to-tr from-pink-600 to-pink-400 bg-clip-text font-sans text-base font-medium leading-relaxed text-transparent antialiased">

                </p>
            </div>
            <div class="flex justify-center gap-7 p-6 pt-2">
                <a href="" type="button"
                    class="text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">GO</a>
            </div>
        </div>
    </a>
</div> --}}


<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{ route('showCategory', $category->id) }}">
        <img class="rounded-t-lg" src="{{ asset('img/cat1.jpg') }}" alt="" />
    </a>
    <div class="p-5">
        <a href="{{ route('showCategory', $category->id) }}">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                {{ $category->name }}</h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ $category->description }}</p>
        <a href="#"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            more pets
            <svg class="w-3.5 h-3.5 ml-2 mt-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
