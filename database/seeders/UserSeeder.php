<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::query()->create([
            'customer_name' => 'Rovshan Musaxonov',
            'street_address' => 'Sagban st. 1 Tashkent city,',
            'postal_code' => '100002',
            'country' => 'Uzbekistan',
            'company_number' => 'Invitrotech OOO',
            'phone' => '+998 97 130 5790',
            'contact_person' => '+998 97 130 5790',
            'director_name' => 'Rovshan Musaxonov',
            'email' => 'proadmin@invitrotech.com',
            'password' => Hash::make('proadmin123'),
        ]);
        $user->assignRole('admin');
    }
}
