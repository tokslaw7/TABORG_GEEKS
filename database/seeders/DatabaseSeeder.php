<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

         Listing::factory(6)->create();

    //     Listing::create( [
    //         'title' => 'Laravel Senior Developer',
    //         'tags' => 'laravel,Javascript,PHP',
    //         'company' => 'Acme Corp',
    //         'location' => 'Boston,MA',
    //         'email' => 'email@email.com',
    //         'website' => 'https://www.acme.com',
    //         'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    //         Lorem Ipsum is simply dummy text of the printing and typesetting industry
    //         Lorem Ipsum is simply dummy text of the printing and typesetting industry
    //         Lorem Ipsum is simply dummy text of the printing and typesetting industry '
    //     ],
    // );
    // Listing::create(  [
    //     'title' => 'Full Stack Engineer',
    //     'tags' => 'laravel,backend,api',
    //     'company' => 'Stack Industries',
    //     'location' => 'NewYork,NY',
    //     'email' => 'email@email.com',
    //     'website' => 'https://www.stackindustries.com',
    //     'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    //     Lorem Ipsum is simply dummy text of the printing and typesetting industry
    //     Lorem Ipsum is simply dummy text of the printing and typesetting industry
    //     Lorem Ipsum is simply dummy text of the printing and typesetting industry '
    // ],);
     
    }
}
