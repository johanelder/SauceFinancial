<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Transfer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory()
        // ->has(Transaction::factory()->count(2))
        // ->has(Transfer::factory()->count(1))
        // ->create();

        \App\Models\User::factory(10)->create();
    }
}
