<section class="introduction -mt-9 flex flex-col justify-center">

    <div class="greeting-box flex flex-col sm:flex-row gap-5 pb-10 sm:pb-0 text-left justify-center items-start sm:items-center align-center z-10">
        <img src="{{ asset($profilePhoto) }}" class="h-156 w-156 ml-4 md:ml-0"
            alt="András Gulácsi's profile photo">

        <div class="introduction-text px-5 md:px-0">
            <h2 class="text-black font-exo font-extrabold text-2xl sm:text-32px leading-tight mb-6">
                {{ __($greetingHeadline) }}</h2>
            <p class="text-black-text text-lg leading-normal">{{ __($greetingDescription) }}</p>
        </div>

    </div>
</section>