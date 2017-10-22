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
        $firstUser = App\User::first();
        $rawSites = [
            [
                'name' => 'Wikipedia.com',
                'user_id' => $firstUser->id,
                'currency' => rand(0, 3)
            ],
            [
                'name' => 'ProductHunt.com',
                'user_id' => $firstUser->id,
                'currency' => rand(0, 3)
            ],
            [
                'name' => 'news.YCombinator.com',
                'user_id' => $firstUser->id,
                'currency' => rand(0, 3)
            ],
        ];

        $sites = [];
        foreach($rawSites as $site){
            $sites[] = App\Site::create($site);
        }

        foreach($sites as $site){
            $noOfUsers = rand(10, 30);
            factory(App\Author::class, $noOfUsers)->create()->each(function ($u) use ($site){
                $u->generateToken();
                $u->site_id = $site->id;
                $u->save();
            });
        }
    }
}
