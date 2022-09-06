<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [

            new Project(
                [
                    'language' => 'en',
                    'title' => 'Numizmatika app',
                    'client' => 'Client: “Pénzmúzeum” (at DRB Services, 2022)',
                    'content' => '<p>React / Gatsby (in JavaScript) app for digital interactive table (1920x1080px), with Strapi CMS backend. It is made for a museum called “Pénzmúzeum” (Money Museum), next to Széll Kálmán square, Budapest.</p>',
                    'cover_image' => 'storage/images/numizmatika.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://work.drb.services/V_numizmatika/" target="blank"
                        class="link">Numizmatika
                        WEBSITE</a>
                    </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'Numizmatika app',
                    'client' => 'Kliens: “Pénzmúzeum” (DRB Services-nél, 2022)',
                    'content' => '<p>Numizmatika: React/Gatsby (JavaScript) alkalmazás fullstack fejlesztése digitális interaktív táblára (1920*1080px), Strapi backend-del. Megtekinthető a Pénzmúzeumban (Postapalota, Széll Kálmán tér mellett).</p>',
                    'cover_image' => 'storage/images/numizmatika.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://work.drb.services/V_numizmatika/" target="blank"
                        class="link">Numizmatika
                        WEBOLDAL</a>
                    </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'UDG landing page',
                    'client' => 'Client: “Urben Design Group” (at DRB Services, 2022)',
                    'content' => '<p>React/Gatsby (in TypeScript), backend: Strapi CMS with Postgres database.
                        Handling projects, pages,
                        taxonomies. Developing Strapi components fpr dynamic zone fields (basically
                        it provides a drag and
                        drop pagebuilder with existing components to add, reorder, or delete).
                        Contact form with Nodemailer
                        and MailGrid.
                    </p>
                    <p>The Github repo contains an updated starter project for an imagery brand, the
                        StarCity Group. This
                        starter is an improved version.</p>',
                    'cover_image' => 'storage/images/starcity.jpg',
                    'links' => ' <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/gatsby4-frontend-for-strapi"
                        target="blank" class="link">GITHUB
                        (frontend)</a>

                    <a href="https://github.com/SalsaBoy990/strapi4-backend" target="blank"
                        class="link">GITHUB
                        (backend)</a>

                    <a href="https://starcitygroup.netlify.app/" target="blank"
                        class="link">WEBSITE</a>
                    </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'UDG landing oldal',
                    'client' => 'Kliens: “Urben Design Group” (DRB Services-nél, 2022)',
                    'content' => '<p>UDG: React/Gatsby v4 TypeScript-tel, backend: Strapi v4, Postgres, GraphQL használatával. Projektek, oldalak kezelése, amelyek taxonómiai kategóriákba tartoznak. Strapi komponensek fejlesztése, amelyek dynamiczone mezőhöz hozzáadhatók (egy page builder-hez hasonlatosan adhatunk hozzá egyedi komponenseket egy ilyen mezőhöz, amelyek sorrendje változtatható). Kapcsolatfelvétel - Nodemailer, MailGrid integráció.</p>',
                    'cover_image' => 'storage/images/starcity.jpg',
                    'links' => ' <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/gatsby4-frontend-for-strapi"
                        target="blank" class="link">GITHUB
                        (frontend)</a>

                    <a href="https://github.com/SalsaBoy990/strapi4-backend" target="blank"
                        class="link">GITHUB
                        (backend)</a>

                    <a href="https://starcitygroup.netlify.app/" target="blank"
                        class="link">WEBOLDAL</a>
                    </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'Home Assistant admin app',
                    'client' => 'Client: BarbeQUBE (at DRB Services, 2022)',
                    'content' => '<p>React (TypeScript) IoT app. The client provides containers equipped with
                        fridge, oven, ventillators,
                        lights etc. for rent near turistic areas. The equipments have sensors and
                        can be controlled
                        remotely. The smart devices can be switched on/off, their settings modified
                        by calling REST API endpoints. The sensory data is continuously received
                        through an
                        MQTT server. The app is made for Samsung Galaxy Tab A7 Lite SM-T 220 tablet.
                        The test backend is running
                        on a Rasberry Pi. In addition, there is a React Native app (for customers)
                        where I had to create screens showing the state of the test container.</p>',
                    'cover_image' => 'storage/images/home-assistant-app.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center"></nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'Home Assistant admin app',
                    'client' => 'Kliens: BarbeQUBE (DRB Services-nél, 2022)',
                    'content' => '<p>React/TypeScript (teljes app), React Native technológiákkal (egy meglévő appba integráció). A BarbeQUBE konténereket biztosít bérlésre, turisztikai objektumok közelében. E kockák belseje fel van szerelve főzőlapokkal, grillsütővel, hűtővel, vízcsappal, ventillátorokkal, lámpákkal, ami az appon keresztül vezérelhetők, illetve a szenzorok által jelzett állapotuk távolról lekérdezhető (IoT).</p>
                        <p>Az okoseszközök REST API végpontok meghívásával vezérelhetők. A szenzorok adatait MQTT szerveren keresztül kapom meg. A sima React app Samsung Galaxy Tab A7 Lite SM-T 220 tablethez készült. A teszt backend Rasberry Pi-on fut.</p>',
                    'cover_image' => 'storage/images/home-assistant-app.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center"></nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'Magento 2 stores - frontend development',
                    'client' => 'So Fragrance, Cutler & Gross, Musicarzenal (at DRB)',
                    'content' => '<ul class="list-disc ml-6">
                        <li>Create store for So Fragrance’s Auora and Bespoke perfume brands based
                            on design plans (in collab
                            with another dev). </li>
                        <li>Bugfixes, management and smaller new feature implementations for Cutler
                            and Gross, a British luxury
                            eyewear brand.</li>
                        <li>
                            Theme development for Hangszerarzenál / Musicarsenal store (a musical
                            instruments store)</li>
                    </ul>',
                    'cover_image' => 'storage/images/magento2.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.bespokelondonfragrance.com/" target="blank"
                        class="link">Bespoke</a>

                    <a href="https://www.cutlerandgross.com" target="blank"
                        class="link">Cutler&Gross</a>

                    <a href="https://hangszerarzenal.testit.zone/" target="blank"
                        class="link">Hangszerarzenál</a>
                    </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'Magento 2 áruházak frontend fejlesztése',
                    'client' => 'So Fragrance, Cutler & Gross, Hangszerarzenál számára (DRB-nél)',
                    'content' => '<ul class="list-disc ml-6">
                        <li>So Fragrance: Auora és Bespoke brand számára store építése designterv alapján</li>
                        <li>Cutler and Gross karbantartás és új feature-ök fejlesztése meglévő áruházhoz</li>
                        <li>Hangszerarzenál áruház elkészítése design alapján</li>
                    </ul>',
                    'cover_image' => 'storage/images/magento2.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.bespokelondonfragrance.com/" target="blank"
                        class="link">Bespoke</a>

                    <a href="https://www.cutlerandgross.com" target="blank"
                        class="link">Cutler&Gross</a>

                    <a href="https://hangszerarzenal.testit.zone/" target="blank"
                        class="link">Hangszerarzenál</a>
                    </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'Shopify webshop - frontend',
                    'client' => 'Client: JadedLondon (at DRB Services, 2022)',
                    'content' => '<p>Managing, bugfixing the store, implementing small frontend features. JadedLondon is a streetwear, fashion brand based in UK.</p>',
                    'cover_image' => 'storage/images/shopify.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://jadedldn.com/" target="blank" class="link">JadedLondon</a>
                    </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'Shopify webshop - frontend',
                    'client' => 'Kliens: JadedLondon (DRB Services-nél, 2022)',
                    'content' => '<p>Az áruház karbantartása, bugfixes, kisebb összetevők fejlesztése. JadedLondon egy utcai ruházati márka Nagy-Britanniában.</p>',
                    'cover_image' => 'storage/images/shopify.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://jadedldn.com/" target="blank" class="link">JadedLondon</a>
                    </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'static-site-express',
                    'client' => 'My static site generator ( 2019-)',
                    'content' => '<p>static-site-express is a simple Node.js based static-site generator that uses
                        EJS and Markdown.
                        Deploy your static site to Netlify or any platform to your liking. Suited
                        for landing pages,
                        portfolio, blogs, documentation, hobby projects.</p>',
                    'cover_image' => 'storage/images/static-site-express.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/static-site-express" target="blank"
                        class="link">GITHUB</a>
                    <a href="https://static-site-express.netlify.app/" target="blank"
                        class="link">WEBSITE</a>
                </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'static-site-express',
                    'client' => 'A statikus oldalgenerátorom ( 2019-)',
                    'content' => '<p>static-site-express egy egyszerű Node.js-alapú, EJS-t és Markdown-t használó statikus oldalgenerátor. Kiélesítheted a statikus weboldaladat Netlify-ra, vagy egyéb általad preferált platformra. Alkalmas landing oldalakhoz, portfólióhoz, bloghoz, dokumentációhoz és hobbiprojektekhez.</p>',
                    'cover_image' => 'storage/images/static-site-express.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/static-site-express" target="blank"
                        class="link">GITHUB</a>
                    <a href="https://static-site-express.netlify.app/" target="blank"
                        class="link">WEBOLDAL</a>
                </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'WordPress development',
                    'client' => 'Client: Simirity (at DRB Services, 2022-)',
                    'content' => '<p>Improving a WordPress marketing website, implementing subpages based on UI
                        design, creating custom
                        WP Backery page builder components. I received a half-done website.</p>',
                    'cover_image' => 'storage/images/simirity.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.simirity.com/" target="blank" class="link">SIMIRITY
                        WEBSITE</a>
                    </nav>'
                ]
            ),
            new Project(
                [
                    'language' => 'hu',
                    'title' => 'WordPress fejlesztés',
                    'client' => 'Kliens: Simirity (DRB Services-nél, 2022-)',
                    'content' => '<p>WordPress marketing oldal továbbfejlesztése, oldalak implementálása design alapján, egyedi WP Backery page builder komponensek készítése (meglevő, félkész projektet kaptam).</p>',
                    'cover_image' => 'storage/images/simirity.jpg',
                    'links' => '<nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://www.simirity.com/" target="blank" class="link">SIMIRITY
                        WEBOLDAL</a>
                    </nav>'
                ]
            ),


            new Project(
                [
                    'language' => 'en',
                    'title' => 'WordPress / WooCommerce projects',
                    'client' => 'My hobby projects, (2021-2022)',
                    'content' => '<ul class="list-disc">
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
                    </ul>',
                    'cover_image' => 'storage/images/vuecommerce.jpg',
                    'links' => ' <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/vuecommerce-plugin-wp-bedrock"
                        target="blank" class="link">VUECOMMERCE</a>
                    <a href="https://github.com/SalsaBoy990/wulma" target="blank"
                        class="link">WULMA</a>
                    <a href="https://github.com/SalsaBoy990/docker-wp-bedrock" target="blank"
                        class="link">Docker-Bedrock</a>
                    <a href="https://github.com/SalsaBoy990/docker-wordpress" target="blank"
                        class="link">Docker-WORDPRESS</a>
                </nav>'
                ]
            ),

            new Project(
                [
                    'language' => 'en',
                    'title' => 'WordPress / WooCommerce projektek',
                    'client' => 'My hobby projects, (2021-2022)',
                    'content' => '<ul class="list-disc">
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
                    </ul>',
                    'cover_image' => 'storage/images/vuecommerce.jpg',
                    'links' => ' <nav class="flex flex-wrap space-x-2 justify-evenly items-center">
                    <a href="https://github.com/SalsaBoy990/vuecommerce-plugin-wp-bedrock"
                        target="blank" class="link">VUECOMMERCE</a>
                    <a href="https://github.com/SalsaBoy990/wulma" target="blank"
                        class="link">WULMA</a>
                    <a href="https://github.com/SalsaBoy990/docker-wp-bedrock" target="blank"
                        class="link">Docker-Bedrock</a>
                    <a href="https://github.com/SalsaBoy990/docker-wordpress" target="blank"
                        class="link">Docker-WORDPRESS</a>
                </nav>'
                ]
            ),


        ];

        foreach ($projects as $project) {
            $project->save();
        }
    }
}
