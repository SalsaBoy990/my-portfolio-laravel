<section class="skills mb-12 sm:mb-20">

    <!-- TODO: make a component -->
    <div class="flex items-center flex-col mt-6">
        <svg width="38" height="15" viewBox="0 0 38 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.3581 14.2496C19.0201 14.4776 18.5776 14.4776 18.2396 14.2496L0.551311 2.31733C-0.266575 1.76559 0.123966 0.48832 1.11055 0.48832L36.4871 0.48832C37.4737 0.48832 37.8643 1.76559 37.0464 2.31733L19.3581 14.2496Z"
                fill="#CA4164" />
        </svg>
        <h2 class="font-serif text-2xl sm:text-4xl text-white mt-3 mb-10 tracking-wide">
            {{ __("Highlighted skills") }}
        </h2>
    </div>

    <div
        class="skills-grid grid grid-cols-1 mobile:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-8 justify-items-center">

        @foreach ($skills as $skill)
        <div class="box {{ $skill->bg_color }} rounded-md shadow-md">
            <h3
                class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                {{ $skill->title }}
            </h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose">
                {!! $skill->content !!}
            </div>
        </div>
        @endforeach

    </div>

</section>