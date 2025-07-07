<?php

namespace Database\Seeders;

use App\Models\Newsroom;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // EXHIBITION
        Newsroom::create([
            'title' => 'GIASS 2017 FINAL DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIASS-2017-FINAL-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIASS 2017 TENTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIASS-2017-TENTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIASS 2017 NINTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIASS-2017-NINTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIASS 2017 EIGHTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIASS-2017-EIGHTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIASS 2017 SEVENTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIASS-2017-SEVENTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 SIXTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIIAS-2017-SIXTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 FIFTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'GIIAS-2017-FIFTH-DAY',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 FOURTH DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'giias-2017-fourth-day',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 THIRD DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'giias-2017-third-day',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 SECOND DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'giias-2017-second-day',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'GIIAS 2017 FIRST DAY',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'giias-2017-first-day',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'JIEXPO KEMAYORAN 17 - 19 MEI 2017',
            'user_id' => 2,
            'category_id' => 1,
            'slug' => 'jiexpo-kemayoran-17--19-mei-2017',
            'body' => ''
        ]);

        // GATHERING
        Newsroom::create([
            'title' => 'Customer Gathering di Mandarin Hotel',
            'user_id' => 2,
            'category_id' => 2,
            'slug' => 'Customer_Gathering_di_Mandarin_Hotel',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'Customer Gathering di Hollyday In Cikarang',
            'user_id' => 2,
            'category_id' => 2,
            'slug' => 'Customer-Gathering-di-Hollyday-In-Cikarang',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'Customer Gathering di Hilton Bandung',
            'user_id' => 2,
            'category_id' => 2,
            'slug' => 'Customer-Gathering-di-Hilton-Bandung',
            'body' => ''
        ]);
        
        // TRAINNING
        Newsroom::create([
            'title' => 'TRAINING SGS SESSION 2',
            'user_id' => 2,
            'category_id' => 3,
            'slug' => 'TRAINING_SGS_SESSION2',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'TRAINING SGS SESSION 1',
            'user_id' => 2,
            'category_id' => 3,
            'slug' => 'TRAINING_SGS_SESSION1',
            'body' => ''
        ]);

        // CELEBRATION
        Newsroom::create([
            'title' => '79th Indonesian Independence Day',
            'user_id' => 2,
            'category_id' => 4,
            'slug' => '79-indonesian-independence-day',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => '45TH EWINDO ANNIVERSARY',
            'user_id' => 2,
            'category_id' => 4,
            'slug' => 'ANNIVERSARY_45TH',
            'body' => ''
        ]);

        // VACATION
        Newsroom::create([
            'title' => 'JOGJA TRIP',
            'user_id' => 2,
            'category_id' => 5,
            'slug' => 'JOGJA_TRIP_1',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'DUFAN TRIP',
            'user_id' => 2,
            'category_id' => 5,
            'slug' => 'DUFAN_TRIP_1',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'PANGANDARAN TRIP',
            'user_id' => 2,
            'category_id' => 5,
            'slug' => 'PANGANDARAN_TRIP_1',
            'body' => ''
        ]);

        // OTHER
        Newsroom::create([
            'title' => 'MOTORCYCLE TEST DRIVE DAY 2',
            'user_id' => 2,
            'category_id' => 6,
            'slug' => 'MOTORCYCLE_TEST_DRIVE_DAY2',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'Motocycle Test Drive Day 1',
            'user_id' => 2,
            'category_id' => 6,
            'slug' => 'Motocycle_Test_Drive_Day1',
            'body' => ''
        ]);
        Newsroom::create([
            'title' => 'Football Friendly Match With PT. Yasunaga',
            'user_id' => 2,
            'category_id' => 6,
            'slug' => 'Football_Friendly_Match_With_Yasunaga',
            'body' => ''
        ]);
        
            
      
        

    }
}
