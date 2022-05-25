<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Text::create([
            'key' => 'welcome_title',
            'label' => 'Welcome title',
            'text_en' => 'Welcome to our farm!',
            'text_ar' => 'Welcome to our farm!',
        ]);

        Text::create([
            'key' => 'welcome_message',
            'label' => 'Welcome message',
            'text_en' => 'Here you will find a wide range of healthy and fresh dairy products that were proudly produced at our farm by our farmers and cows. Welcome to Jacksons! Here you will find a wide range of healthy and fresh dairy products that were proudly produced at our farm by our farmers and cows.',
            'text_ar' => 'Here you will find a wide range of healthy and fresh dairy products that were proudly produced at our farm by our farmers and cows. Welcome to Jacksons! Here you will find a wide range of healthy and fresh dairy products that were proudly produced at our farm by our farmers and cows.'
        ]);

        Text::create([
            'key' => 'why_choose_us_card',
            'label' => 'Why choose us card',
            'text_en' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.',
            'text_ar' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.'
        ]);

        Text::create([
            'key' => 'about_card',
            'label' => 'About card',
            'text_en' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.',
            'text_ar' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.'
        ]);

        Text::create([
            'key' => 'products_card',
            'label' => 'Products card',
            'text_en' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.',
            'text_ar' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.'
        ]);
    }
}
