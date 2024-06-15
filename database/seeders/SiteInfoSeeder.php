<?php

namespace Database\Seeders;

use App\Models\SiteInformationModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allData = [
            [
                'key' => 'site_name',
                'is_image' => 'No',
                'value' => 'Restorent',
            ],
            [
                'key' => 'site_logo',
                'is_image' => 'yes',
                'value' => url('/').'image/logo.webp',
            ],
            [
                'key' => 'fav_icon',
                'is_image' => 'Yes',
                'value' => url('/').'image/logo.webp',
            ],
            [
                'key' => 'copy_right',
                'is_image' => 'No',
                'value' => '© © 2022 All Rights Reserved.',
            ],
        ];

        foreach ($allData as $item) {
            $save = new SiteInformationModel();
            $save->key = $item['key'];
            $save->is_image = $item['is_image'];
            $save->value = $item['value'];
            $save->save();
        }
    }
}
