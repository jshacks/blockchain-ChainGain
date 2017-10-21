<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
        'value',
    ];

    public function user()
    {
        return $this->morphTo(User::class);
    }

    public function site()
    {
        return $this->morphTo(Site::class);
    }
}
