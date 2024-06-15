<?php

namespace Database\Seeders;

use App\Models\Cms;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CmsSeeder extends Seeder
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
              'key' => 'our_products',
              'title' => 'OUR PRODUCTS',
              'description' => 'Pellentesque mattis mauris ac tortor volutpat, eu fermentum sapien
                                euismod. In id tempus metus. Donec eu volutpat nibh, in maximus ligula.',
              'status' => 'Active',
            ],
            [
                'key' => 'our_services',
                'title' => 'OUR SERVICES',
                'description' => 'Pellentesque mattis mauris ac tortor volutpat, eu fermentum sapien
                                euismod. In id tempus metus. Donec eu volutpat nibh, in maximus ligula.',
                'status' => 'Active',
            ],
            [
                'key' => 'testimonial',
                'title' => 'TESTIMONIALS',
                'status' => 'Active',
            ],
            [
                'key' => 'our_team',
                'title' => 'OUR TEAM',
                'description' =>'We have experienced team members they will help to achieve your goal',
                'status' => 'Active',
            ],
            [
                'key' => 'top_products',
                'title' => 'TOP PRODUCTS',
                'description' =>'Pellentesque mattis mauris ac tortor volutpat, eu fermentum sapien
                                euismod. In id tempus metus. Donec eu volutpat nibh, in maximus ligula.',
                'status' => 'Active',
            ],
            [
                'key' => 'different_designation',
                'title' => 'DIFFERENT DESIGNATIONS',
                'description' =>'Pellentesque mattis mauris ac tortor volutpat, eu fermentum sapien
                                euismod. In id tempus metus. Donec eu volutpat nibh, in maximus ligula.',
                'status' => 'Active',
            ],
            [
                'key' => 'partnership_enquiry',
                'title' => 'BUILDING THE NATION WITH RIGHT MIX OF STRENGTH AND FLEXIBILITY',
                'description' =>'Contact us to work with a results-driven digital marketing agency',
                'status' => 'Active',
            ],
            [
                'key' => 'news_later',
                'title' => 'Subscribe To Get Offer',
                'status' => 'Active',
            ]
        ];

//        foreach ($allData as $data)
//        {
//            $item = new Cms();
//            if (!empty($data['key'])) {
//                $item->key = $data['key'];
//            }
//            if (!empty($data['title'])) {
//                $item->title = $data['title'];
//            }
//            if (!empty($data['description'])) {
//                $item->description = $data['description'];
//            }
//            if (!empty($data['status'])) {
//                $item->status = $data['status'];
//            }
//            $item->save();
//        }
    }
}

