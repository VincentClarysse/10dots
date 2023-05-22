<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';

    protected $fillable = ['name'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function Country()
    {
        return $this->belongsTo(Country::class);
    }
}
