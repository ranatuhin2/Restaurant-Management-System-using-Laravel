<?php

namespace Database\Seeders;

use App\Models\ContactInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactInfoSeeder extends Seeder
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
                'address' => '58 Howard Street #2 San Francisco, CA 941',
                'email' => 'contact@galvanize.com',
                'phone_code' => '+68',
                'phone' => '122109876',
                'whats_app' => '122109876',
                'opening_and_closing_time' => 'Mon to Fri - 9AM to 6PM',
                'status' => 'Active',
            ],
            [
                'address' => '58 test Street #2 San Francisco, test address',
                'email' => 'abcd@test.com',
                'phone_code' => '+68',
                'phone' => '123456789',
                'whats_app' => '123456789',
                'opening_and_closing_time' => 'Mon to Fri - 9AM to 6PM',
                'status' => 'Inactive',
            ],
        ];

        foreach ($allData as $data){
            $item = new ContactInfo();
            $item->email = $data['email'];
            $item->phone_code = $data['phone_code'];
            $item->contact_no = $data['phone'];
            $item->whatsapp_no = $data['whats_app'];
            $item->address = $data['address'];
            $item->opening_and_closing_time = $data['opening_and_closing_time'];
            $item->status = $data['status'];
            $item->save();
        }
    }
}
