<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class TFA6Seeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Hatsune Miku', 'email' => 'miku@example.com', 'phone' => '09170000001'],
            ['full_name' => 'Kasane Teto', 'email' => 'teto@example.com', 'phone' => '09170000002'],
            ['full_name' => 'Akita Neru', 'email' => 'neru@example.com', 'phone' => '09170000003'],
            ['full_name' => 'Zundamon', 'email' => 'zunda@example.com', 'phone' => '09170000004'],
            ['full_name' => 'Yowane Haku', 'email' => 'haku@example.com', 'phone' => '09170000005'],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            ['username' => 'admin01', 'full_name' => 'Alex Reyes'],
            ['username' => 'cashier01', 'full_name' => 'Bea Santos'],
            ['username' => 'cashier02', 'full_name' => 'Carlo Cruz'],
            ['username' => 'stock01', 'full_name' => 'Dana Lim'],
            ['username' => 'manager01', 'full_name' => 'Eli Mendoza'],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(
                ['username' => $user['username']],
                ['full_name' => $user['full_name']]
            );
        }
    }
}
