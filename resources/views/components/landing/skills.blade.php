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
            {{ __("Highlighted skills") }}</h2>
    </div>

    <div
        class="skills-grid grid grid-cols-1 mobile:grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-8 justify-items-center">

        <div class="box bg-main-800 rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">{{ __("JavaScript development") }}</h3>
            <div class="text-editor leading-loose">
                <ul class="list-disc ml-8 mt-3 mr-4 text-white87pc">
                    <li>React</li>
                    <li>TypeScript</li>
                    <li>Gatsby.js</li>
                    <li>Vue.js</li>
                    <li>{{ __("jQuery library") }}</li>
                    <li>Strapi CMS</li>
                    <li>Node.js <small>{{ __("(basics)") }}</small></li>
                </ul>
            </div>
        </div>

        <div class="box bg-grass-green rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                {{ __("PHP, CMS, database") }}
            </h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose">
                <ul class="list-disc text-white87pc">
                    <li>PHP 7-8</li>
                    <li>MySQL</li>
                    <li>WordPress</li>
                    <li>Magento 2</li>
                    <li>Laravel <small>{{ __("(under learning)") }}</small></li>
                    <li>Drupal CMS <small>{{ __("(basics)") }}</small></li>
                </ul>
            </div>
        </div>

        <div class="box bg-turquoise rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                HTML, CSS, sitebuild</h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose">
                <ul class="list-disc text-white87pc">
                    <li>Bootstrap 3-5</li>
                    <li>TailwindCSS</li>
                    <li>Bulma</li>
                    <li>{{ __("LESS, SCSS preprocessors") }}</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>
            </div>
        </div>

        <div class="box bg-brown rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                {{ __("Git, Docker, Linux etc.") }}
            </h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose">
                <ul class="list-disc text-white87pc">
                    <li>{{ __("Git flow methodology") }}</li>
                    <li>{{ __("Docker dev environments") }}</li>
                    <li>{{ __("Ubuntu linux distro") }}</li>
                    <li>{{ __("Bundling tool: Webpack") }}</li>
                </ul>
            </div>
        </div>

        <div class="box bg-main-400 rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                {{ __("Other skills") }}
            </h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose">
                <ul class="list-disc text-white87pc">
                    <li>{{ __("English") }} <small>{{ __("(intermediate)") }}</small></li>
                    <li>Github, Gitlab</li>
                    <li>Jira, Redmine</li>
                </ul>
            </div>
        </div>

        <div class="box bg-darkpurple rounded-md shadow-md">
            <h3 class="box-heading w-full h-16 text-left pl-8 border-b border-b-white12pc font-exo text-lg mobile:text-xl font-bold tracking-wide">
                {{ __("UI/UX design knowledge") }}
            </h3>
            <div class="text-editor ml-8 mt-3 mr-4 leading-loose text-white87pc">
                <p>{{ __("Completed the Digital Product Design course of UXStudio, in Budapest") }}
                </p>
                <p>{{ __("Design Software: Figma") }}</p>
                <p>{{ __("Images, graphics: GIMP 2") }}</p>
                <p>{{ __("Video editing: KdenLive") }}</p>
            </div>
        </div>

    </div>

</section>