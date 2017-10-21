<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fields = [
        'value',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function site()
    {
        return $this->hasOne(Site::class);
    }
}
