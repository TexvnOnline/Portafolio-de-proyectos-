<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 1)->create();
        factory(App\Contact::class, 1)->create();

        factory(App\Page::class, 1)->create();
        
        factory(App\Slider::class, 3)->create()->each(function ($slider) {
            $slider->image()->save(factory(App\Image::class)->make([
                'url' => 'https://lorempixel.com/1600/800/'
            ]));
        });

        // $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
