<!-- TODO: make a component -->
<section class="projects relative mb-12 sm:mb-20">

    <div class="flex items-center flex-col pt-6">
        <svg class="z-10" width="38" height="15" viewproject="0 0 38 15" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.3581 14.2496C19.0201 14.4776 18.5776 14.4776 18.2396 14.2496L0.551311 2.31733C-0.266575 1.76559 0.123966 0.48832 1.11055 0.48832L36.4871 0.48832C37.4737 0.48832 37.8643 1.76559 37.0464 2.31733L19.3581 14.2496Z"
                fill="#CA4164" />
        </svg>
        <h2 class="z-10 text-black font-serif text-2xl sm:text-4xl mt-3 mb-10 tracking-wide">
            {{ __("Portfolio works") }}
        </h2>
    </div>

    <div
        class="projects-grid grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-x-16 gap-y-12 z-10">

        @foreach ($projects as $project)
        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full">
                <img class="object-cover rounded-t-md" src="{{ asset($project->cover_image) }}"
                    alt="{{ $project->title }}">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">
                        {{ $project->title }}
                    </h3>
                    <p class="text-white87pc">{{ $project->client }}</p>
                </div>
            </div>

            <div class="card-body px-6 py-6">
                <div class="text-editor text-black-text">
                    {!! $project->content !!}
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end">
                {!! $project->links !!}
            </div>
        </div>
        @endforeach

    </div>

    <div class="projects-image absolute top-0 right-0 left-0 bottom-0 h-full w-full z-0">
        <img src="{{ asset('storage/images/bg-pattern.jpg') }}" alt="">
    </div>


</section>