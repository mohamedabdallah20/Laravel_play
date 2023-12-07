<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Sequence;

class TestSeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Test::Factory()->count(10)->state(
            new Sequence(
                ['status'=>'active'],
                ['status'=>'inactive']
            )
        )->state(
            new Sequence(
                ['show'=>true],
                ['show'=>false]
            )
        )->create();
        // for($i = 0; $i < 10; $i++) {
        //     Test::create([
        //         'name' => 'test' . $i,
        //         'content' => 'test' . $i,
        //         'status' => 'active',
        //         'show'=>true
        //     ]);
        // }
    }
}
