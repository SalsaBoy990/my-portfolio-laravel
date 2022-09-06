<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Meta;

class MetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siteMetas = [
            new Meta(
                [
                    'language' => 'en',
                    'full_name' => 'András Gulácsi',
                    'title' => 'A frontend & PHP Developer',
                    'subtitle' => 'I create landing pages, websites, and e-commerce stores',
                    'greeting_headline' => 'Hi, I am András Gulácsi. Nice to meet you.',
                    'greating_description' => 'I have 2 years of work experience, worked as an employee and did contract work remotely. I am mainly a frontend developer, but also have backend skills and worked on fullstack projects too.',
                    'email_address' => 'guland@protonmail.com',
                    'github_link' => 'https://github.com/SalsaBoy990',
                    'cv' => 'storage/pdf/andras.gulacsi.hungary.cv.2022.pdf',
                    'profile_photo' => 'storage/images/andras.gulacsi.png',
                ]
            ),
            new Meta(
                [
                    'language' => 'hu',
                    'full_name' => 'Gulácsi András',
                    'title' => 'Frontend és PHP fejlesztő',
                    'subtitle' => 'Weboldalakat, webes alkalmazásokat, áruházakat készítek.',
                    'greeting_headline' => 'Üdvözöllek, Gulácsi András vagyok.',
                    'greating_description' => 'Két évnyi munkahelyi tapasztalattal rendelkezem, dolgoztam munkavállalóként és katás vállalkozóként megbízásra (az utóbbit távmunkában). Főként frontend fejlesztő vagyok, de vannak backend képességeim is, illetve kisebb fullstack projektjeim is voltak már.',
                    'email_address' => 'guland@protonmail.com',
                    'github_link' => 'https://github.com/SalsaBoy990',
                    'cv' => 'storage/pdf/andras.gulacsi.hungary.cv.2022.pdf',
                    'profile_photo' => 'storage/images/andras.gulacsi.png',
                ]
            ),
        ];

        foreach ($siteMetas as $meta) {
            $meta->save();
        }
    }
}
