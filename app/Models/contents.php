<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    protected $guarded = ['id'];
    public function category()
    {
        return $this->belongsTo(categories::class, 'kategori_id');
    }
}
