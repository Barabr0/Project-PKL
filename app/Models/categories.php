<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $guarded = ['id'];
    public function events()
    {
        return $this->hasMany(events::class, 'kategori_id');
    }
}
