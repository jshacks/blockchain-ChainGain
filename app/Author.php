<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = [
        'name',
        'adress',
        'percentage',
    ];

    protected $rules = [
        'name' => 'required|unique|min:2',
        'address' => 'text',
        'percentage' => 'float',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}
