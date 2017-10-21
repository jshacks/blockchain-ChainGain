<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $rules = [
        'name' => 'required|unique|min:2'
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
