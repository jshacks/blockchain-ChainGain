<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'name',
        'currency',
    ];

    protected $rules = [
        'name' => 'required|min:2',
        'currency' => 'int'
    ];

    public function user()
    {
        return $this->belongsTo(Site::class);
    }

    public function authors()
    {
        return $this->hasMany(Author::class);
    }
}
