<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    use \App\Traits\TokenableTrait;

    protected $fillable = [
        'name',
        'address',
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
