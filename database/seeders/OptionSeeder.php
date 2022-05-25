<?php

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Config::create([
            'key' => 'logo',
            'label' => 'Logo',
            'value_en' => 'logo.png',
            'value_ar' => 'logo.png',
            'type' => 'image',
        ]);

        Config::create([
            'key' => 'about_us_image',
            'label' => 'About us image',
            'value_en' => 'about_us.png',
            'value_ar' => 'about_us.png',
            'type' => 'image',
        ]);

        Config::create([
            'key' => 'address',
            'label' => 'Address',
            'value_en' => '888 Broadway, New York, NY, 18813',
            'value_ar' => '888 Broadway, New York, NY, 18813',
            'type' => 'text',
        ]);

        Config::create([
            'key' => 'phone',
            'label' => 'Phone',
            'value_en' => '123-456-7890',
            'value_ar' => '123-456-7890',
            'type' => 'text',
        ]);

        Config::create([
            'key' => 'fax',
            'label' => 'Fax',
            'value_en' => '123-456-7890',
            'value_ar' => '123-456-7890',
            'type' => 'text',
        ]);

        Config::create([
            'key' => 'email',
            'label' => 'Email',
            'value_en' => 'info@yoursite.com',
            'value_ar' => 'info@yoursite.com',
            'type' => 'text',
        ]);

        Config::create([
            'key' => 'facebook',
            'label' => 'Facebook',
            'value_en' => 'facebook.com',
            'value_ar' => 'facebook.com',
            'type' => 'text',
        ]);

        Config::create([
            'key' => 'twitter',
            'label' => 'Twitter',
            'value_en' => 'twitter.com',
            'value_ar' => 'twitter.com',
            'type' => 'text',
        ]);
    }
}
