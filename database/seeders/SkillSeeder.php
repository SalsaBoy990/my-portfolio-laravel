<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteMetas = [
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'JavaScript development',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>React</li>
                    <li>TypeScript</li>
                    <li>Gatsby.js</li>
                    <li>Vue.js</li>
                    <li>jQuery library</li>
                    <li>Strapi CMS</li>
                    <li>Node.js <small>(basics)</small></li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'hu',
                    'title' => 'JavaScript fejlesztés',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>React</li>
                    <li>TypeScript</li>
                    <li>Gatsby.js</li>
                    <li>Vue.js</li>
                    <li>jQuery könyvtár</li>
                    <li>Strapi CMS</li>
                    <li>Node.js <small>(alapok)</small></li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'PHP, CMS, database',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>PHP 7-8</li>
                    <li>MySQL</li>
                    <li>WordPress</li>
                    <li>Magento 2</li>
                    <li>Laravel <small>(under learning)</small></li>
                    <li>Drupal CMS <small>(basics)</small></li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'hu',
                    'title' => 'PHP, CMS, adatbázis',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>PHP 7-8</li>
                    <li>MySQL</li>
                    <li>WordPress</li>
                    <li>Magento 2</li>
                    <li>Laravel <small>(tanulás alatt)</small></li>
                    <li>Drupal CMS <small>(alapok)</small></li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'HTML, CSS, sitebuild',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>Bootstrap 3-5</li>
                    <li>TailwindCSS</li>
                    <li>Bulma</li>
                    <li>LESS, SCSS preprocessors</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'hu',
                    'title' => 'HTML, CSS, sitebuild',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>Bootstrap 3-5</li>
                    <li>TailwindCSS</li>
                    <li>Bulma</li>
                    <li>LESS, SCSS preprocesszorok</li>
                    <li>HTML</li>
                    <li>CSS</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'Git, Docker, Linux etc.',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>Git flow methodology</li>
                    <li>Docker dev environments</li>
                    <li>Ubuntu linux distro</li>
                    <li>Bundling tool: Webpack</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'hu',
                    'title' => 'Git, Docker, Linux stb.',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>Git flow módszertan</li>
                    <li>Docker fejlesztői környezetek</li>
                    <li>Ubuntu linux disztribúció</li>
                    <li>Bundling eszköz: Webpack</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'Other skills',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>English <small>intermediate</small></li>
                    <li>Github, Gitlab</li>
                    <li>Jira, Redmine</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'Egyéb képességek',
                    'content' => '<ul class="list-disc text-white87pc">
                    <li>Angol <small>(közepes)</small></li>
                    <li>Github, Gitlab</li>
                    <li>Jira, Redmine</li>
                </ul>',
                ]
            ),
            new Skill(
                [
                    'language' => 'en',
                    'title' => 'UI/UX design knowledge',
                    'content' =>  '<p>Completed the Digital Product Design course of UXStudio, in Budapest</p>
                <p>Design Software: Figma</p>
                <p>Images, graphics: GIMP 2</p>
                <p>Video editing: KdenLive</p>',
                ]
            ),
            new Skill(
                [
                    'language' => 'hu',
                    'title' => 'UI/UX design ismeret',
                    'content' => '<p>Az UXStudio Digital Product Design kurzusának elvégzése Budapesten</p>
                <p>Design szoftver: Figma</p>
                <p>Képek és grafikák: GIMP 2</p>
                <p>Videószerkesztés: KdenLive</p>',
                ]
            ),
        ];

        foreach ($siteMetas as $meta) {
            $meta->save();
        }
    }
}
