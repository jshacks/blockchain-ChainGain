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
        foreach(App\Site::all() as $site){
            $noOfUsers = rand(10, 30);
            factory(App\Author::class, $noOfUsers)->create()->each(function ($u) use ($site){
                $u->generateToken();
                $u->site_id = $site->id;
                $u->save();
            });
        }
    }
}
