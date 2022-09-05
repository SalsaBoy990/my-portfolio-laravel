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
            Portfolio works</h2>
    </div>

    <div class="projects-grid grid grid-cols-1 lg:grid-cols-2 justify-items-center gap-x-16 gap-y-12 z-10"
        style="max-width: 1165px; margin: 0 auto;">

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/numizmatika.jpg') }}" alt="Numizmatika app">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">Numizmatika app
                    </h3>
                    <p class="text-white87pc">Client: “Pénzmúzeum” (at DRB Services, 2022)</p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>React / Gatsby (in JavaScript) app for digital interactive table
                        (1920x1080px), with Strapi CMS
                        backend. It is made for a museum called “Pénzmúzeum” (Money Museum), next to
                        Széll Kálmán square,
                        Budapest.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://work.drb.services/V_numizmatika/" target="blank"
                        class="link">Numizmatika
                        WEBSITE</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/starcity.jpg') }}" alt="UDG landing page">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">UDG landing page
                    </h3>
                    <p class="text-white87pc">Client: “Urben Design Group” (at DRB Services, 2022)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>React/Gatsby (in TypeScript), backend: Strapi CMS with Postgres database.
                        Handling projects, pages,
                        taxonomies. Developing Strapi components fpr dynamic zone fields (basically
                        it provides a drag and
                        drop pagebuilder with existing components to add, reorder, or delete).
                        Contact form with Nodemailer
                        and MailGrid.
                    </p>
                    <p>The Github repo contains an updated starter project for an imagery brand, the
                        StarCity Group. This
                        starter is an improved version.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/gatsby4-frontend-for-strapi"
                        target="blank" class="link">GITHUB
                        (frontend)</a>

                    <a href="https://github.com/SalsaBoy990/strapi4-backend" target="blank"
                        class="link">GITHUB
                        (backend)</a>

                    <a href="https://starcitygroup.netlify.app/" target="blank"
                        class="link">WEBSITE</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/magento2.jpg') }}"
                    alt="Magento 2 stores - frontend development">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">Magento 2 stores -
                        frontend development
                    </h3>
                    <p class="text-white87pc">So Fragrance, Cutler & Gross, Musicarzenal (at DRB)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <ul class="list-disc ml-6">
                        <li>Create store for So Fragrance’s Auora and Bespoke perfume brands based
                            on design plans (in collab
                            with another dev). </li>
                        <li>Bugfixes, management and smaller new feature implementations for Cutler
                            and Gross, a British luxury
                            eyewear brand.</li>
                        <li>
                            Theme development for Hangszerarzenál / Musicarsenal store (a musical
                            instruments store)</li>
                    </ul>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.bespokelondonfragrance.com/" target="blank"
                        class="link">Bespoke</a>

                    <a href="https://www.cutlerandgross.com" target="blank"
                        class="link">Cutler&Gross</a>

                    <a href="https://hangszerarzenal.testit.zone/" target="blank"
                        class="link">Hangszerarzenál</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/home-assistant-app.jpg') }}"
                    alt="Home Assistant app - admin screen">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">Home Assistant admin app
                    </h3>
                    <p class="text-white87pc">Client: BarbeQUBE (at DRB Services, 2022)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>React (TypeScript) IoT app. The client provides containers equipped with fridge, oven, ventillators,
                    lights etc. for rent near turistic areas. The equipments have sensors and can be controlled
                    remotely. The smart devices can be switched on/off, their settings modified by calling REST API endpoints. The sensory data is continuously received through an
                    MQTT server. The app is made for Samsung Galaxy Tab A7 Lite SM-T 220 tablet. The test backend is running
                    on a Rasberry Pi. In addition, there is a React Native app (for customers) where I had to create screens showing the state of the test container.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                   
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/shopify.jpg') }}"
                    alt="Shopify webshop - frontend">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">Shopify webshop -
                        frontend
                    </h3>
                    <p class="text-white87pc">Client: JadedLondon (at DRB Services, 2022)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>Managing, bugfixing the store, implementing small frontend features.
                        JadedLondon is a streetwear,
                        fashion brand based in UK.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://jadedldn.com/" target="blank" class="link">JadedLondon</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/static-site-express.jpg') }}"
                    alt="My static site generator ( 2019-)">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">
                        static-site-express
                    </h3>
                    <p class="text-white87pc">My static site generator ( 2019-)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>static-site-express is a simple Node.js based static-site generator that uses
                        EJS and Markdown.
                        Deploy your static site to Netlify or any platform to your liking. Suited
                        for landing pages,
                        portfolio, blogs, documentation, hobby projects.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/static-site-express" target="blank"
                        class="link">GITHUB</a>
                    <a href="https://static-site-express.netlify.app/" target="blank"
                        class="link">WEBSITE</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/simirity.jpg') }}"
                    alt="WordPress website development">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">
                        WordPress development
                    </h3>
                    <p class="text-white87pc">Client: Simirity (at DRB Services, 2022-)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <p>Improving a WordPress marketing website, implementing subpages based on UI
                        design, creating custom
                        WP Backery page builder components. I received a half-done website.</p>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.simirity.com/" target="blank" class="link">SIMIRITY
                        WEBSITE</a>
                </nav>
            </div>
        </div>

        <div class="project z-10 rounded-md shadow-md flex flex-col">
            <div class="card-header relative w-full" style="height: 225px;">
                <img class="object-cover rounded-t-md" style="height: 225px;width: auto;"
                    src="{{ asset('storage/images/vuecommerce.jpg') }}"
                    alt="Wordpress / WooCommerce projects">
                <div class="project-description absolute bottom-5 left-6">
                    <h3 class="font-exo text-white text-xl sm:text-2xl font-bold">
                        Wordpress / WooCommerce projects
                    </h3>
                    <p class="text-white87pc">My hobby projects, (2021-2022)
                    </p>
                </div>
            </div>

            <div class="card-body px-6 py-6" style="min-height: 260px;">
                <div class="text-editor text-black-text">
                    <ul class="list-disc">
                        <li><b>Vuecommerce</b> Vue.js WP plugin for posts and products (filtering by
                            categories and attributes, search,
                            pagination) making requests throught REST APIs.
                        </li>
                        <li><b>Wulma</b>: a WordPress theme using the Bulma CSS framework, with
                            Vue.js
                            admin for the theme (in
                            progress)</li>
                        <li><b>Docker development environment</b> for WP projects with the Bedrock
                            boilerplate</li>
                        <li>Docker setup for local WordPress development, custom domain, https,
                            nginx reverse proxy</li>
                    </ul>
                </div>
            </div>

            <div class="card-footer border-t border-t-black-12pc flex justify-end"
                style="min-height: 63px;">
                <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/vuecommerce-plugin-wp-bedrock"
                        target="blank" class="link">VUECOMMERCE</a>
                    <a href="https://github.com/SalsaBoy990/wulma" target="blank"
                        class="link">WULMA</a>
                    <a href="https://github.com/SalsaBoy990/docker-wp-bedrock" target="blank"
                        class="link">Docker-Bedrock</a>
                    <a href="https://github.com/SalsaBoy990/docker-wordpress" target="blank"
                        class="link">Docker-WORDPRESS</a>
                </nav>
            </div>
        </div>


    </div>

    <div class="projects-image absolute top-0 right-0 left-0 bottom-0 h-full w-full z-0">
        <img src="{{ asset('storage/images/bg-pattern.jpg') }}" alt="">
    </div>


</section>