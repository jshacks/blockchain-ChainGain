<?php

use Illuminate\Database\Seeder;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Author::class, 50)->create()->each(function ($u) {
            $u->generateToken();
            $u->site_id = rand(18, 21);
            $u->save();
        });
    }
}
